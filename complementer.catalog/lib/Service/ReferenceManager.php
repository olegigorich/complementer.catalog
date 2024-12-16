<?

namespace Complementer\Catalog\Service;

use Complementer\Catalog\Main\Singleton;

/**
 * Обеспечивает работу со всеми справочниками Каталога
 */
class ReferenceManager extends Singleton
{
    private static $references = [];

    /**
     *
     * @param Reference $reference
     * 
     * @return static
     * 
     */
    public function add(Reference $reference): static
    {
        self::$references[$reference->cursor->name] = $reference;
        return $this;
    }

    /**
     *
     * @return void
     * 
     */
    public function createTables(): void
    {
        array_map(fn (Reference $reference) => $reference?->createTable(), self::$references);
    }

    /**
     *
     * @return void
     * 
     */
    public function deleteTables(): void
    {
        array_map(fn (Reference $reference) => $reference?->deleteTable(), self::$references);
    }

    /**
     *
     * @param CatalogCursor $cursor
     * 
     * @return Reference|null
     * 
     */
    static public function pullReference(CatalogCursor $cursor): ?Reference
    {
        return match ($cursor) {
            CatalogCursor::Catalog => (new BrandReference()),
            CatalogCursor::Brand => (new ModelReference()),
            CatalogCursor::Model, CatalogCursor::Product => (new ProductReference()),
            default => null
        };
    }

    /**
     *
     * @return static
     * 
     */
    public function complete(): static
    {
        $this->add(new BrandReference())
            ->add(new ModelReference())
            ->add(new ProductReference())
            ->add(new OptionReference())
            ->add(new ProductOptionReference());
        return $this;
    }
}
