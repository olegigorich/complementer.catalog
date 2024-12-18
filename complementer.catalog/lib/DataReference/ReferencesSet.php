<?

namespace Complementer\Catalog\DataReference;

use Complementer\Catalog\Main\Singleton;

/**
 * Набор справочников
 */
class ReferencesSet extends Singleton
{
    private static $references = [];

    /**
     *
     * @param array $classes
     * 
     * @return static
     * 
     */
    public function complete(array $classes): static
    {
        self::$references = array_map(fn (string $class) => $class::getInstance(), $classes);
        return $this;
    }

    /**
     *
     * @return void
     * 
     */
    public function createTables(): void
    {
        array_map(fn (DataReference $reference) => $reference?->createTable(), self::$references);
    }

    /**
     *
     * @return void
     * 
     */
    public function deleteTables(): void
    {
        array_map(fn (DataReference $reference) => $reference?->deleteTable(), self::$references);
    }
}
