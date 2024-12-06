<?

namespace Complementer\Catalog\UI;

use Complementer\Catalog\Service\CatalogCursor;
use Complementer\Catalog\Service\BrandReference;
use Complementer\Catalog\Service\ModelReference;

use Bitrix\UI\Buttons\CreateButton;

class Pathway
{
    private array $steps = [];

    function __construct(
        private readonly string $catalogRoot,
        private readonly CatalogCursor $cursor,
        private readonly ?int $selectionCriteria = null,
        private readonly ?array $readyProduct = null
    ) {
        $this->assemble();
    }

    public function add(CreateButton $step): static
    {
        $this->steps[] = $step;
        return $this;
    }

    public function render(): string
    {
        return implode(array_map(fn (CreateButton $step) => $step?->render(), $this->steps)) ?: '';
    }

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

    public function assemble()
    {

        $this->steps = [];
        
        $path = $this->catalogRoot;

        if ($this->cursor === CatalogCursor::Catalog) {
            $this->add($this->step(CatalogCursor::Catalog, $path, ''));
        } else {

            $this->add($this->step(CatalogCursor::Catalog, $path, '', 0));

            if ($this->cursor === CatalogCursor::Brand) {
                $current = (new BrandReference())->getItem($this->selectionCriteria);
                $this->add($this->step(CatalogCursor::Brand, $path, $current['NAME']));
            } elseif ($this->cursor === CatalogCursor::Model) {
                $current = (new ModelReference())->getItem($this->selectionCriteria);
                $this->add(
                    $this->step(CatalogCursor::Brand, $path, $current['BRAND-NAME'], $current['BRAND-ID'])
                )->add(
                    $this->step(CatalogCursor::Model, $path, $current['NAME'])
                );
            } elseif ($this->cursor === CatalogCursor::Product) {
                $current = $this->readyProduct;
                $this->add(
                    $this->step(CatalogCursor::Brand, $path, $current['BRAND-NAME'], $current['BRAND-ID'])
                )->add(
                    $this->step(CatalogCursor::Model, $path, $current['MODEL-NAME'], $current['MODEL-ID'])
                )->add(
                    $this->step(CatalogCursor::Product, $path, $current['NAME'])
                );
            }
        }
    }
}
