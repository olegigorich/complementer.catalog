<?

namespace Complementer\Catalog\UI;

use Complementer\Catalog\Reference\CatalogCursor;
use Bitrix\UI\Buttons\CreateButton;

/**
 * Формирует навигацию по Каталогу
 */
class Pathway
{
    private array $steps = [];

    /**
     *
     * @param private readonly
     * @param private readonly
     * @param mixed private
     * 
     */
    function __construct(
        private readonly string $catalogRoot,
        private readonly CatalogCursor $cursor,
        private readonly ?array $firstItem = null
    ) {
        $this->assemble();
    }

    /**
     *
     * @param CreateButton $step
     * 
     * @return static
     * 
     */
    public function add(CreateButton $step): static
    {
        $this->steps[] = $step;
        return $this;
    }

    /**
     *
     * @return string
     * 
     */
    public function render(): string
    {
        return implode(array_map(fn (CreateButton $step) => $step?->render(), $this->steps)) ?: '';
    }

    /**
     *
     * @param CatalogCursor $cursor
     * @param string $path
     * @param string $name
     * @param int|null $id
     * 
     * @return CreateButton
     * 
     */
    public function step(CatalogCursor $cursor, string &$path, string $name, ?int $id = null): CreateButton
    {
        $classList = ['ui-btn-link'];

        if (!isset($id)) {
            $classList = [...$classList, 'ui-btn-icon-done', 'ui-btn-disabled'];
        } else {
            $path = ($id === 0) ? $path : $path . $id . '/';
            $classList =  [...$classList, 'ui-btn-icon-forward'];
        }

        return CreateButton::create(
            [
                'link' => $path,
                'text' => $cursor->title() . ' ' . $name,
                'classList' => $classList,
            ]
        )->addAttribute('target', '_top');
    }

    /**
     * @return void
     */
    public function assemble(): void
    {
        $this->steps = [];

        $path = $this->catalogRoot;

        if ($this->cursor === CatalogCursor::Catalog) {
            $this->add($this->step(CatalogCursor::Catalog, $path, ''));
        } else {

            $this->add($this->step(CatalogCursor::Catalog, $path, '', 0));

            if ($this->cursor === CatalogCursor::Brand) {
                $this->add($this->step(CatalogCursor::Brand, $path, $this->firstItem['BRAND-NAME']));
            } else {
                $this->add($this->step(CatalogCursor::Brand, $path, $this->firstItem['BRAND-NAME'], $this->firstItem['BRAND-ID']));
                if ($this->cursor === CatalogCursor::Model) {
                    $this->add($this->step(CatalogCursor::Model, $path, $this->firstItem['NAME']));
                } else {
                    $this->add($this->step(CatalogCursor::Model, $path, $this->firstItem['MODEL-NAME'], $this->firstItem['MODEL-ID']))
                        ->add($this->step(CatalogCursor::Product, $path, $this->firstItem['NAME']));
                }
            }
        }
    }
}
