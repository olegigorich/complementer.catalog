<?

use Complementer\Catalog\Reference\CatalogCursor;

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Error as BitrixError;
use Bitrix\Main\Errorable;
use Bitrix\Main\ErrorableImplementation;
use Bitrix\Main\ErrorCollection;
use Bitrix\Main\Application;
use Bitrix\Main\Loader;

defined('B_PROLOG_INCLUDED') || die;

/**
 * Комплексный компонент Каталога
 */
class CatalogComponent extends CBitrixComponent implements Errorable
{
    use ErrorableImplementation;

    private string $root;
    private array $urlTemplates;
    private CComponentEngine $engine;

    /**
     * 
     * @param CBitrixComponent|null $component
     * @param CComponentEngine|null $engine
     * 
     */
    public function __construct(?CBitrixComponent $component = null, ?CComponentEngine $engine = null)
    {
        parent::__construct($component);

        $this->engine = $engine ?? new CComponentEngine();

        Loader::requireModule('complementer.catalog');

        $this->errorCollection = new ErrorCollection();
    }

    /** 
     *
     * @param mixed $arParams
     * 
     * @return array
     * 
     */
    public function onPrepareComponentParams($arParams): array
    {
        if (!isset($arParams['SEF_MODE']) || $arParams['SEF_MODE'] === 'N') {
            $this->errorCollection->setError(
                new BitrixError(Loc::GetMessage('DOES_NOT_WORK_WITHOUT_SEF'))
            );
            return $arParams;
        }

        if (!isset($arParams['SEF_FOLDER']) || $arParams['SEF_FOLDER'] === '') {
            $this->errorCollection->setError(
                new BitrixError(Loc::GetMessage('DOES_NOT_SET_SEF_FOLDER'))
            );
            return $arParams;
        }
        $this->root = $arParams["SEF_FOLDER"];

        return $arParams;
    }

    /**
     *
     * @return [type]
     * 
     */
    public function executeComponent()
    {

        if ($this->hasErrors()) {
            $this->displayErrors();
            return;
        }

        $this->urlTemplates = [
            'catalog' => 'index.php',
            'brand' => '#BRAND#/',
            'model' => '#BRAND#/#MODEL#/',
            'product' => 'detail/#NOTEBOOK#/',
        ];

        $this->urlTemplates = CComponentEngine::makeComponentUrlTemplates(
            $this->urlTemplates,
            $this->arParams["SEF_URL_TEMPLATES"]
        );

        $this->engine->addGreedyPart("#MODEL#");

        $variables = [];
        $componentPage = $this->engine->guessComponentPath(
            $this->root,
            $this->urlTemplates,
            $variables
        );

        if (!$componentPage) {
            $requestedDir = Application::getInstance()->getContext()->getRequest()->getRequestedPageDirectory();
            $componentPage = str_starts_with($requestedDir, $this->root) ? 'page404' : 'empty';
        }

        $componentParams = match ($componentPage) {
            'catalog' => [
                'CURSOR' => CatalogCursor::Catalog,
                'LIST_PAGE_URL'   => $this->root . $this->urlTemplates[CatalogCursor::Catalog->value],
                'ITEM_PAGE_URL' => $this->root . $this->urlTemplates[CatalogCursor::Brand->value],
            ],
            'brand' => [
                'CURSOR' => CatalogCursor::Brand,
                'SELECTION_CRITERIA' => $variables['BRAND'] ?? null,
                'LIST_PAGE_URL'   => $this->root . $this->urlTemplates[CatalogCursor::Brand->value],
                'ITEM_PAGE_URL' => $this->root . $this->urlTemplates[CatalogCursor::Model->value],
            ],
            'model' => [
                'CURSOR' => CatalogCursor::Model,
                'PREV_SELECTION_CRITERIA' => $variables['BRAND'] ?? null,
                'SELECTION_CRITERIA' => $variables['MODEL'] ?? null,
                'LIST_PAGE_URL'   => $this->root . $this->urlTemplates[CatalogCursor::Model->value],
                'ITEM_PAGE_URL' => $this->root . $this->urlTemplates[CatalogCursor::Product->value],
                'PRODUCT_SLIDER_PAGE_URL' => $this->root . str_replace('#NOTEBOOK#', '[0-9]+', $this->urlTemplates[CatalogCursor::Product->value]),
            ],
            'product' => [
                'CURSOR' => CatalogCursor::Product,
                'SELECTION_CRITERIA' => $variables['NOTEBOOK'] ?? null,
                'LIST_PAGE_URL'   => $this->root . $this->urlTemplates[CatalogCursor::Model->value],
                'IFRAME'   => true,
            ],
            default => []
        };

        $componentParams['CATALOG_ROOT'] = $this->root;

        $this->arResult = [
            "VARIABLES" => $variables,
            "COMPONENT_PARAMS" => $componentParams
        ];

        $this->IncludeComponentTemplate($componentPage);
    }

    private function displayErrors(): void
    {
        foreach ($this->getErrors() as $error) {
            ShowError($this->GetName());
            ShowError($error->getMessage());
        }
    }
}
