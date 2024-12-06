<?

namespace Complementer\Catalog\Service;

use Complementer\Catalog\Main\Singleton;

class ReferenceManager extends Singleton
{
    private static $references = [];

    public function add(Reference $reference): static
    {
        self::$references[$reference->cursor->name] = $reference;
        return $this;
    }

    public function createTables(): void
    {
        array_map(fn (Reference $reference) => $reference?->createTable(), self::$references);
    }

    public function deleteTables(): void
    {
        array_map(fn (Reference $reference) => $reference?->deleteTable(), self::$references);
    }

    static public function pullReference(CatalogCursor $cursor): ?Reference
    {
        return match ($cursor) {
            CatalogCursor::Catalog => (new BrandReference()),
            CatalogCursor::Brand => (new ModelReference()),
            CatalogCursor::Model, CatalogCursor::Product => (new ProductReference()),
            default => null
        };
    }
}
