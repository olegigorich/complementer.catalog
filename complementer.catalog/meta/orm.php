<?php

/* ORMENTITYANNOTATION:Complementer\Catalog\ORM\Data\BrandTable */
namespace Complementer\Catalog\ORM\Data {
	/**
	 * EO_Brand
	 * @see \Complementer\Catalog\ORM\Data\BrandTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getId()
	 * @method \Complementer\Catalog\ORM\Data\EO_Brand setId(\int|\Bitrix\Main\DB\SqlExpression $id)
	 * @method bool hasId()
	 * @method bool isIdFilled()
	 * @method bool isIdChanged()
	 * @method \string getName()
	 * @method \Complementer\Catalog\ORM\Data\EO_Brand setName(\string|\Bitrix\Main\DB\SqlExpression $name)
	 * @method bool hasName()
	 * @method bool isNameFilled()
	 * @method bool isNameChanged()
	 * @method \string remindActualName()
	 * @method \string requireName()
	 * @method \Complementer\Catalog\ORM\Data\EO_Brand resetName()
	 * @method \Complementer\Catalog\ORM\Data\EO_Brand unsetName()
	 * @method \string fillName()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Complementer\Catalog\ORM\Data\EO_Brand set($fieldName, $value)
	 * @method \Complementer\Catalog\ORM\Data\EO_Brand reset($fieldName)
	 * @method \Complementer\Catalog\ORM\Data\EO_Brand unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method mixed fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Complementer\Catalog\ORM\Data\EO_Brand wakeUp($data)
	 */
	class EO_Brand {
		/* @var \Complementer\Catalog\ORM\Data\BrandTable */
		static public $dataClass = '\Complementer\Catalog\ORM\Data\BrandTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Complementer\Catalog\ORM\Data {
	/**
	 * EO_Brand_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getIdList()
	 * @method \string[] getNameList()
	 * @method \string[] fillName()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Complementer\Catalog\ORM\Data\EO_Brand $object)
	 * @method bool has(\Complementer\Catalog\ORM\Data\EO_Brand $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Complementer\Catalog\ORM\Data\EO_Brand getByPrimary($primary)
	 * @method \Complementer\Catalog\ORM\Data\EO_Brand[] getAll()
	 * @method bool remove(\Complementer\Catalog\ORM\Data\EO_Brand $object)
	 * @method void removeByPrimary($primary)
	 * @method array|\Bitrix\Main\ORM\Objectify\Collection|null fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Complementer\Catalog\ORM\Data\EO_Brand_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Complementer\Catalog\ORM\Data\EO_Brand current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 * @method \Complementer\Catalog\ORM\Data\EO_Brand_Collection merge(?\Complementer\Catalog\ORM\Data\EO_Brand_Collection $collection)
	 * @method bool isEmpty()
	 */
	class EO_Brand_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Complementer\Catalog\ORM\Data\BrandTable */
		static public $dataClass = '\Complementer\Catalog\ORM\Data\BrandTable';
	}
}
namespace Complementer\Catalog\ORM\Data {
	/**
	 * @method static EO_Brand_Query query()
	 * @method static EO_Brand_Result getByPrimary($primary, array $parameters = [])
	 * @method static EO_Brand_Result getById($id)
	 * @method static EO_Brand_Result getList(array $parameters = [])
	 * @method static EO_Brand_Entity getEntity()
	 * @method static \Complementer\Catalog\ORM\Data\EO_Brand createObject($setDefaultValues = true)
	 * @method static \Complementer\Catalog\ORM\Data\EO_Brand_Collection createCollection()
	 * @method static \Complementer\Catalog\ORM\Data\EO_Brand wakeUpObject($row)
	 * @method static \Complementer\Catalog\ORM\Data\EO_Brand_Collection wakeUpCollection($rows)
	 */
	class BrandTable extends \Bitrix\Main\ORM\Data\DataManager {}
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_Brand_Result exec()
	 * @method \Complementer\Catalog\ORM\Data\EO_Brand fetchObject()
	 * @method \Complementer\Catalog\ORM\Data\EO_Brand_Collection fetchCollection()
	 *
	 * Custom methods:
	 * ---------------
	 *
	 */
	class EO_Brand_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Complementer\Catalog\ORM\Data\EO_Brand fetchObject()
	 * @method \Complementer\Catalog\ORM\Data\EO_Brand_Collection fetchCollection()
	 */
	class EO_Brand_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Complementer\Catalog\ORM\Data\EO_Brand createObject($setDefaultValues = true)
	 * @method \Complementer\Catalog\ORM\Data\EO_Brand_Collection createCollection()
	 * @method \Complementer\Catalog\ORM\Data\EO_Brand wakeUpObject($row)
	 * @method \Complementer\Catalog\ORM\Data\EO_Brand_Collection wakeUpCollection($rows)
	 */
	class EO_Brand_Entity extends \Bitrix\Main\ORM\Entity {}
}
/* ORMENTITYANNOTATION:Complementer\Catalog\ORM\Data\ModelTable */
namespace Complementer\Catalog\ORM\Data {
	/**
	 * EO_Model
	 * @see \Complementer\Catalog\ORM\Data\ModelTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getId()
	 * @method \Complementer\Catalog\ORM\Data\EO_Model setId(\int|\Bitrix\Main\DB\SqlExpression $id)
	 * @method bool hasId()
	 * @method bool isIdFilled()
	 * @method bool isIdChanged()
	 * @method \string getName()
	 * @method \Complementer\Catalog\ORM\Data\EO_Model setName(\string|\Bitrix\Main\DB\SqlExpression $name)
	 * @method bool hasName()
	 * @method bool isNameFilled()
	 * @method bool isNameChanged()
	 * @method \string remindActualName()
	 * @method \string requireName()
	 * @method \Complementer\Catalog\ORM\Data\EO_Model resetName()
	 * @method \Complementer\Catalog\ORM\Data\EO_Model unsetName()
	 * @method \string fillName()
	 * @method \int getBrandId()
	 * @method \Complementer\Catalog\ORM\Data\EO_Model setBrandId(\int|\Bitrix\Main\DB\SqlExpression $brandId)
	 * @method bool hasBrandId()
	 * @method bool isBrandIdFilled()
	 * @method bool isBrandIdChanged()
	 * @method \int remindActualBrandId()
	 * @method \int requireBrandId()
	 * @method \Complementer\Catalog\ORM\Data\EO_Model resetBrandId()
	 * @method \Complementer\Catalog\ORM\Data\EO_Model unsetBrandId()
	 * @method \int fillBrandId()
	 * @method \Complementer\Catalog\ORM\Data\EO_Brand getBrand()
	 * @method \Complementer\Catalog\ORM\Data\EO_Brand remindActualBrand()
	 * @method \Complementer\Catalog\ORM\Data\EO_Brand requireBrand()
	 * @method \Complementer\Catalog\ORM\Data\EO_Model setBrand(\Complementer\Catalog\ORM\Data\EO_Brand $object)
	 * @method \Complementer\Catalog\ORM\Data\EO_Model resetBrand()
	 * @method \Complementer\Catalog\ORM\Data\EO_Model unsetBrand()
	 * @method bool hasBrand()
	 * @method bool isBrandFilled()
	 * @method bool isBrandChanged()
	 * @method \Complementer\Catalog\ORM\Data\EO_Brand fillBrand()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Complementer\Catalog\ORM\Data\EO_Model set($fieldName, $value)
	 * @method \Complementer\Catalog\ORM\Data\EO_Model reset($fieldName)
	 * @method \Complementer\Catalog\ORM\Data\EO_Model unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method mixed fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Complementer\Catalog\ORM\Data\EO_Model wakeUp($data)
	 */
	class EO_Model {
		/* @var \Complementer\Catalog\ORM\Data\ModelTable */
		static public $dataClass = '\Complementer\Catalog\ORM\Data\ModelTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Complementer\Catalog\ORM\Data {
	/**
	 * EO_Model_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getIdList()
	 * @method \string[] getNameList()
	 * @method \string[] fillName()
	 * @method \int[] getBrandIdList()
	 * @method \int[] fillBrandId()
	 * @method \Complementer\Catalog\ORM\Data\EO_Brand[] getBrandList()
	 * @method \Complementer\Catalog\ORM\Data\EO_Model_Collection getBrandCollection()
	 * @method \Complementer\Catalog\ORM\Data\EO_Brand_Collection fillBrand()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Complementer\Catalog\ORM\Data\EO_Model $object)
	 * @method bool has(\Complementer\Catalog\ORM\Data\EO_Model $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Complementer\Catalog\ORM\Data\EO_Model getByPrimary($primary)
	 * @method \Complementer\Catalog\ORM\Data\EO_Model[] getAll()
	 * @method bool remove(\Complementer\Catalog\ORM\Data\EO_Model $object)
	 * @method void removeByPrimary($primary)
	 * @method array|\Bitrix\Main\ORM\Objectify\Collection|null fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Complementer\Catalog\ORM\Data\EO_Model_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Complementer\Catalog\ORM\Data\EO_Model current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 * @method \Complementer\Catalog\ORM\Data\EO_Model_Collection merge(?\Complementer\Catalog\ORM\Data\EO_Model_Collection $collection)
	 * @method bool isEmpty()
	 */
	class EO_Model_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Complementer\Catalog\ORM\Data\ModelTable */
		static public $dataClass = '\Complementer\Catalog\ORM\Data\ModelTable';
	}
}
namespace Complementer\Catalog\ORM\Data {
	/**
	 * @method static EO_Model_Query query()
	 * @method static EO_Model_Result getByPrimary($primary, array $parameters = [])
	 * @method static EO_Model_Result getById($id)
	 * @method static EO_Model_Result getList(array $parameters = [])
	 * @method static EO_Model_Entity getEntity()
	 * @method static \Complementer\Catalog\ORM\Data\EO_Model createObject($setDefaultValues = true)
	 * @method static \Complementer\Catalog\ORM\Data\EO_Model_Collection createCollection()
	 * @method static \Complementer\Catalog\ORM\Data\EO_Model wakeUpObject($row)
	 * @method static \Complementer\Catalog\ORM\Data\EO_Model_Collection wakeUpCollection($rows)
	 */
	class ModelTable extends \Bitrix\Main\ORM\Data\DataManager {}
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_Model_Result exec()
	 * @method \Complementer\Catalog\ORM\Data\EO_Model fetchObject()
	 * @method \Complementer\Catalog\ORM\Data\EO_Model_Collection fetchCollection()
	 *
	 * Custom methods:
	 * ---------------
	 *
	 */
	class EO_Model_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Complementer\Catalog\ORM\Data\EO_Model fetchObject()
	 * @method \Complementer\Catalog\ORM\Data\EO_Model_Collection fetchCollection()
	 */
	class EO_Model_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Complementer\Catalog\ORM\Data\EO_Model createObject($setDefaultValues = true)
	 * @method \Complementer\Catalog\ORM\Data\EO_Model_Collection createCollection()
	 * @method \Complementer\Catalog\ORM\Data\EO_Model wakeUpObject($row)
	 * @method \Complementer\Catalog\ORM\Data\EO_Model_Collection wakeUpCollection($rows)
	 */
	class EO_Model_Entity extends \Bitrix\Main\ORM\Entity {}
}
/* ORMENTITYANNOTATION:Complementer\Catalog\ORM\Data\OptionTable */
namespace Complementer\Catalog\ORM\Data {
	/**
	 * EO_Option
	 * @see \Complementer\Catalog\ORM\Data\OptionTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getId()
	 * @method \Complementer\Catalog\ORM\Data\EO_Option setId(\int|\Bitrix\Main\DB\SqlExpression $id)
	 * @method bool hasId()
	 * @method bool isIdFilled()
	 * @method bool isIdChanged()
	 * @method \string getName()
	 * @method \Complementer\Catalog\ORM\Data\EO_Option setName(\string|\Bitrix\Main\DB\SqlExpression $name)
	 * @method bool hasName()
	 * @method bool isNameFilled()
	 * @method bool isNameChanged()
	 * @method \string remindActualName()
	 * @method \string requireName()
	 * @method \Complementer\Catalog\ORM\Data\EO_Option resetName()
	 * @method \Complementer\Catalog\ORM\Data\EO_Option unsetName()
	 * @method \string fillName()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Complementer\Catalog\ORM\Data\EO_Option set($fieldName, $value)
	 * @method \Complementer\Catalog\ORM\Data\EO_Option reset($fieldName)
	 * @method \Complementer\Catalog\ORM\Data\EO_Option unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method mixed fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Complementer\Catalog\ORM\Data\EO_Option wakeUp($data)
	 */
	class EO_Option {
		/* @var \Complementer\Catalog\ORM\Data\OptionTable */
		static public $dataClass = '\Complementer\Catalog\ORM\Data\OptionTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Complementer\Catalog\ORM\Data {
	/**
	 * EO_Option_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getIdList()
	 * @method \string[] getNameList()
	 * @method \string[] fillName()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Complementer\Catalog\ORM\Data\EO_Option $object)
	 * @method bool has(\Complementer\Catalog\ORM\Data\EO_Option $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Complementer\Catalog\ORM\Data\EO_Option getByPrimary($primary)
	 * @method \Complementer\Catalog\ORM\Data\EO_Option[] getAll()
	 * @method bool remove(\Complementer\Catalog\ORM\Data\EO_Option $object)
	 * @method void removeByPrimary($primary)
	 * @method array|\Bitrix\Main\ORM\Objectify\Collection|null fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Complementer\Catalog\ORM\Data\EO_Option_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Complementer\Catalog\ORM\Data\EO_Option current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 * @method \Complementer\Catalog\ORM\Data\EO_Option_Collection merge(?\Complementer\Catalog\ORM\Data\EO_Option_Collection $collection)
	 * @method bool isEmpty()
	 */
	class EO_Option_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Complementer\Catalog\ORM\Data\OptionTable */
		static public $dataClass = '\Complementer\Catalog\ORM\Data\OptionTable';
	}
}
namespace Complementer\Catalog\ORM\Data {
	/**
	 * @method static EO_Option_Query query()
	 * @method static EO_Option_Result getByPrimary($primary, array $parameters = [])
	 * @method static EO_Option_Result getById($id)
	 * @method static EO_Option_Result getList(array $parameters = [])
	 * @method static EO_Option_Entity getEntity()
	 * @method static \Complementer\Catalog\ORM\Data\EO_Option createObject($setDefaultValues = true)
	 * @method static \Complementer\Catalog\ORM\Data\EO_Option_Collection createCollection()
	 * @method static \Complementer\Catalog\ORM\Data\EO_Option wakeUpObject($row)
	 * @method static \Complementer\Catalog\ORM\Data\EO_Option_Collection wakeUpCollection($rows)
	 */
	class OptionTable extends \Bitrix\Main\ORM\Data\DataManager {}
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_Option_Result exec()
	 * @method \Complementer\Catalog\ORM\Data\EO_Option fetchObject()
	 * @method \Complementer\Catalog\ORM\Data\EO_Option_Collection fetchCollection()
	 *
	 * Custom methods:
	 * ---------------
	 *
	 */
	class EO_Option_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Complementer\Catalog\ORM\Data\EO_Option fetchObject()
	 * @method \Complementer\Catalog\ORM\Data\EO_Option_Collection fetchCollection()
	 */
	class EO_Option_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Complementer\Catalog\ORM\Data\EO_Option createObject($setDefaultValues = true)
	 * @method \Complementer\Catalog\ORM\Data\EO_Option_Collection createCollection()
	 * @method \Complementer\Catalog\ORM\Data\EO_Option wakeUpObject($row)
	 * @method \Complementer\Catalog\ORM\Data\EO_Option_Collection wakeUpCollection($rows)
	 */
	class EO_Option_Entity extends \Bitrix\Main\ORM\Entity {}
}
/* ORMENTITYANNOTATION:Complementer\Catalog\ORM\Data\ProductOptionTable */
namespace Complementer\Catalog\ORM\Data {
	/**
	 * EO_ProductOption
	 * @see \Complementer\Catalog\ORM\Data\ProductOptionTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getId()
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption setId(\int|\Bitrix\Main\DB\SqlExpression $id)
	 * @method bool hasId()
	 * @method bool isIdFilled()
	 * @method bool isIdChanged()
	 * @method \int getProductId()
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption setProductId(\int|\Bitrix\Main\DB\SqlExpression $productId)
	 * @method bool hasProductId()
	 * @method bool isProductIdFilled()
	 * @method bool isProductIdChanged()
	 * @method \int remindActualProductId()
	 * @method \int requireProductId()
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption resetProductId()
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption unsetProductId()
	 * @method \int fillProductId()
	 * @method \Complementer\Catalog\ORM\Data\EO_Product getProduct()
	 * @method \Complementer\Catalog\ORM\Data\EO_Product remindActualProduct()
	 * @method \Complementer\Catalog\ORM\Data\EO_Product requireProduct()
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption setProduct(\Complementer\Catalog\ORM\Data\EO_Product $object)
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption resetProduct()
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption unsetProduct()
	 * @method bool hasProduct()
	 * @method bool isProductFilled()
	 * @method bool isProductChanged()
	 * @method \Complementer\Catalog\ORM\Data\EO_Product fillProduct()
	 * @method \int getOptionId()
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption setOptionId(\int|\Bitrix\Main\DB\SqlExpression $optionId)
	 * @method bool hasOptionId()
	 * @method bool isOptionIdFilled()
	 * @method bool isOptionIdChanged()
	 * @method \int remindActualOptionId()
	 * @method \int requireOptionId()
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption resetOptionId()
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption unsetOptionId()
	 * @method \int fillOptionId()
	 * @method \Complementer\Catalog\ORM\Data\EO_Option getOption()
	 * @method \Complementer\Catalog\ORM\Data\EO_Option remindActualOption()
	 * @method \Complementer\Catalog\ORM\Data\EO_Option requireOption()
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption setOption(\Complementer\Catalog\ORM\Data\EO_Option $object)
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption resetOption()
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption unsetOption()
	 * @method bool hasOption()
	 * @method bool isOptionFilled()
	 * @method bool isOptionChanged()
	 * @method \Complementer\Catalog\ORM\Data\EO_Option fillOption()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption set($fieldName, $value)
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption reset($fieldName)
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method mixed fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Complementer\Catalog\ORM\Data\EO_ProductOption wakeUp($data)
	 */
	class EO_ProductOption {
		/* @var \Complementer\Catalog\ORM\Data\ProductOptionTable */
		static public $dataClass = '\Complementer\Catalog\ORM\Data\ProductOptionTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Complementer\Catalog\ORM\Data {
	/**
	 * EO_ProductOption_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getIdList()
	 * @method \int[] getProductIdList()
	 * @method \int[] fillProductId()
	 * @method \Complementer\Catalog\ORM\Data\EO_Product[] getProductList()
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption_Collection getProductCollection()
	 * @method \Complementer\Catalog\ORM\Data\EO_Product_Collection fillProduct()
	 * @method \int[] getOptionIdList()
	 * @method \int[] fillOptionId()
	 * @method \Complementer\Catalog\ORM\Data\EO_Option[] getOptionList()
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption_Collection getOptionCollection()
	 * @method \Complementer\Catalog\ORM\Data\EO_Option_Collection fillOption()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Complementer\Catalog\ORM\Data\EO_ProductOption $object)
	 * @method bool has(\Complementer\Catalog\ORM\Data\EO_ProductOption $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption getByPrimary($primary)
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption[] getAll()
	 * @method bool remove(\Complementer\Catalog\ORM\Data\EO_ProductOption $object)
	 * @method void removeByPrimary($primary)
	 * @method array|\Bitrix\Main\ORM\Objectify\Collection|null fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Complementer\Catalog\ORM\Data\EO_ProductOption_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption_Collection merge(?\Complementer\Catalog\ORM\Data\EO_ProductOption_Collection $collection)
	 * @method bool isEmpty()
	 */
	class EO_ProductOption_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Complementer\Catalog\ORM\Data\ProductOptionTable */
		static public $dataClass = '\Complementer\Catalog\ORM\Data\ProductOptionTable';
	}
}
namespace Complementer\Catalog\ORM\Data {
	/**
	 * @method static EO_ProductOption_Query query()
	 * @method static EO_ProductOption_Result getByPrimary($primary, array $parameters = [])
	 * @method static EO_ProductOption_Result getById($id)
	 * @method static EO_ProductOption_Result getList(array $parameters = [])
	 * @method static EO_ProductOption_Entity getEntity()
	 * @method static \Complementer\Catalog\ORM\Data\EO_ProductOption createObject($setDefaultValues = true)
	 * @method static \Complementer\Catalog\ORM\Data\EO_ProductOption_Collection createCollection()
	 * @method static \Complementer\Catalog\ORM\Data\EO_ProductOption wakeUpObject($row)
	 * @method static \Complementer\Catalog\ORM\Data\EO_ProductOption_Collection wakeUpCollection($rows)
	 */
	class ProductOptionTable extends \Bitrix\Main\ORM\Data\DataManager {}
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_ProductOption_Result exec()
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption fetchObject()
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption_Collection fetchCollection()
	 *
	 * Custom methods:
	 * ---------------
	 *
	 */
	class EO_ProductOption_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption fetchObject()
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption_Collection fetchCollection()
	 */
	class EO_ProductOption_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption createObject($setDefaultValues = true)
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption_Collection createCollection()
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption wakeUpObject($row)
	 * @method \Complementer\Catalog\ORM\Data\EO_ProductOption_Collection wakeUpCollection($rows)
	 */
	class EO_ProductOption_Entity extends \Bitrix\Main\ORM\Entity {}
}
/* ORMENTITYANNOTATION:Complementer\Catalog\ORM\Data\ProductTable */
namespace Complementer\Catalog\ORM\Data {
	/**
	 * EO_Product
	 * @see \Complementer\Catalog\ORM\Data\ProductTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getId()
	 * @method \Complementer\Catalog\ORM\Data\EO_Product setId(\int|\Bitrix\Main\DB\SqlExpression $id)
	 * @method bool hasId()
	 * @method bool isIdFilled()
	 * @method bool isIdChanged()
	 * @method \string getName()
	 * @method \Complementer\Catalog\ORM\Data\EO_Product setName(\string|\Bitrix\Main\DB\SqlExpression $name)
	 * @method bool hasName()
	 * @method bool isNameFilled()
	 * @method bool isNameChanged()
	 * @method \string remindActualName()
	 * @method \string requireName()
	 * @method \Complementer\Catalog\ORM\Data\EO_Product resetName()
	 * @method \Complementer\Catalog\ORM\Data\EO_Product unsetName()
	 * @method \string fillName()
	 * @method \int getYear()
	 * @method \Complementer\Catalog\ORM\Data\EO_Product setYear(\int|\Bitrix\Main\DB\SqlExpression $year)
	 * @method bool hasYear()
	 * @method bool isYearFilled()
	 * @method bool isYearChanged()
	 * @method \int remindActualYear()
	 * @method \int requireYear()
	 * @method \Complementer\Catalog\ORM\Data\EO_Product resetYear()
	 * @method \Complementer\Catalog\ORM\Data\EO_Product unsetYear()
	 * @method \int fillYear()
	 * @method \float getPrice()
	 * @method \Complementer\Catalog\ORM\Data\EO_Product setPrice(\float|\Bitrix\Main\DB\SqlExpression $price)
	 * @method bool hasPrice()
	 * @method bool isPriceFilled()
	 * @method bool isPriceChanged()
	 * @method \float remindActualPrice()
	 * @method \float requirePrice()
	 * @method \Complementer\Catalog\ORM\Data\EO_Product resetPrice()
	 * @method \Complementer\Catalog\ORM\Data\EO_Product unsetPrice()
	 * @method \float fillPrice()
	 * @method \int getModelId()
	 * @method \Complementer\Catalog\ORM\Data\EO_Product setModelId(\int|\Bitrix\Main\DB\SqlExpression $modelId)
	 * @method bool hasModelId()
	 * @method bool isModelIdFilled()
	 * @method bool isModelIdChanged()
	 * @method \int remindActualModelId()
	 * @method \int requireModelId()
	 * @method \Complementer\Catalog\ORM\Data\EO_Product resetModelId()
	 * @method \Complementer\Catalog\ORM\Data\EO_Product unsetModelId()
	 * @method \int fillModelId()
	 * @method \Complementer\Catalog\ORM\Data\EO_Model getModel()
	 * @method \Complementer\Catalog\ORM\Data\EO_Model remindActualModel()
	 * @method \Complementer\Catalog\ORM\Data\EO_Model requireModel()
	 * @method \Complementer\Catalog\ORM\Data\EO_Product setModel(\Complementer\Catalog\ORM\Data\EO_Model $object)
	 * @method \Complementer\Catalog\ORM\Data\EO_Product resetModel()
	 * @method \Complementer\Catalog\ORM\Data\EO_Product unsetModel()
	 * @method bool hasModel()
	 * @method bool isModelFilled()
	 * @method bool isModelChanged()
	 * @method \Complementer\Catalog\ORM\Data\EO_Model fillModel()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Complementer\Catalog\ORM\Data\EO_Product set($fieldName, $value)
	 * @method \Complementer\Catalog\ORM\Data\EO_Product reset($fieldName)
	 * @method \Complementer\Catalog\ORM\Data\EO_Product unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method mixed fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Complementer\Catalog\ORM\Data\EO_Product wakeUp($data)
	 */
	class EO_Product {
		/* @var \Complementer\Catalog\ORM\Data\ProductTable */
		static public $dataClass = '\Complementer\Catalog\ORM\Data\ProductTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Complementer\Catalog\ORM\Data {
	/**
	 * EO_Product_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getIdList()
	 * @method \string[] getNameList()
	 * @method \string[] fillName()
	 * @method \int[] getYearList()
	 * @method \int[] fillYear()
	 * @method \float[] getPriceList()
	 * @method \float[] fillPrice()
	 * @method \int[] getModelIdList()
	 * @method \int[] fillModelId()
	 * @method \Complementer\Catalog\ORM\Data\EO_Model[] getModelList()
	 * @method \Complementer\Catalog\ORM\Data\EO_Product_Collection getModelCollection()
	 * @method \Complementer\Catalog\ORM\Data\EO_Model_Collection fillModel()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Complementer\Catalog\ORM\Data\EO_Product $object)
	 * @method bool has(\Complementer\Catalog\ORM\Data\EO_Product $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Complementer\Catalog\ORM\Data\EO_Product getByPrimary($primary)
	 * @method \Complementer\Catalog\ORM\Data\EO_Product[] getAll()
	 * @method bool remove(\Complementer\Catalog\ORM\Data\EO_Product $object)
	 * @method void removeByPrimary($primary)
	 * @method array|\Bitrix\Main\ORM\Objectify\Collection|null fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Complementer\Catalog\ORM\Data\EO_Product_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Complementer\Catalog\ORM\Data\EO_Product current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 * @method \Complementer\Catalog\ORM\Data\EO_Product_Collection merge(?\Complementer\Catalog\ORM\Data\EO_Product_Collection $collection)
	 * @method bool isEmpty()
	 */
	class EO_Product_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Complementer\Catalog\ORM\Data\ProductTable */
		static public $dataClass = '\Complementer\Catalog\ORM\Data\ProductTable';
	}
}
namespace Complementer\Catalog\ORM\Data {
	/**
	 * @method static EO_Product_Query query()
	 * @method static EO_Product_Result getByPrimary($primary, array $parameters = [])
	 * @method static EO_Product_Result getById($id)
	 * @method static EO_Product_Result getList(array $parameters = [])
	 * @method static EO_Product_Entity getEntity()
	 * @method static \Complementer\Catalog\ORM\Data\EO_Product createObject($setDefaultValues = true)
	 * @method static \Complementer\Catalog\ORM\Data\EO_Product_Collection createCollection()
	 * @method static \Complementer\Catalog\ORM\Data\EO_Product wakeUpObject($row)
	 * @method static \Complementer\Catalog\ORM\Data\EO_Product_Collection wakeUpCollection($rows)
	 */
	class ProductTable extends \Bitrix\Main\ORM\Data\DataManager {}
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_Product_Result exec()
	 * @method \Complementer\Catalog\ORM\Data\EO_Product fetchObject()
	 * @method \Complementer\Catalog\ORM\Data\EO_Product_Collection fetchCollection()
	 *
	 * Custom methods:
	 * ---------------
	 *
	 */
	class EO_Product_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Complementer\Catalog\ORM\Data\EO_Product fetchObject()
	 * @method \Complementer\Catalog\ORM\Data\EO_Product_Collection fetchCollection()
	 */
	class EO_Product_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Complementer\Catalog\ORM\Data\EO_Product createObject($setDefaultValues = true)
	 * @method \Complementer\Catalog\ORM\Data\EO_Product_Collection createCollection()
	 * @method \Complementer\Catalog\ORM\Data\EO_Product wakeUpObject($row)
	 * @method \Complementer\Catalog\ORM\Data\EO_Product_Collection wakeUpCollection($rows)
	 */
	class EO_Product_Entity extends \Bitrix\Main\ORM\Entity {}
}
/* ORMENTITYANNOTATION:Bitrix\Blog\CommentTable */
namespace Bitrix\Blog {
	/**
	 * EO_Comment
	 * @see \Bitrix\Blog\CommentTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string getUfBlogCommentDoc()
	 * @method \string remindActualUfBlogCommentDoc()
	 * @method \string requireUfBlogCommentDoc()
	 * @method bool hasUfBlogCommentDoc()
	 * @method bool isUfBlogCommentDocFilled()
	 * @method \Bitrix\Blog\EO_Comment unsetUfBlogCommentDoc()
	 * @method \string fillUfBlogCommentDoc()
	 * @method \Bitrix\Blog\EO_Comment setUfBlogCommentDoc(\string[] $ufBlogCommentDoc)
	 * @method bool isUfBlogCommentDocChanged()
	 * @method \int getUfBlogCommUrlPrv()
	 * @method \int remindActualUfBlogCommUrlPrv()
	 * @method \int requireUfBlogCommUrlPrv()
	 * @method bool hasUfBlogCommUrlPrv()
	 * @method bool isUfBlogCommUrlPrvFilled()
	 * @method \Bitrix\Blog\EO_Comment unsetUfBlogCommUrlPrv()
	 * @method \int fillUfBlogCommUrlPrv()
	 * @method \Bitrix\Blog\EO_Comment setUfBlogCommUrlPrv(\int $ufBlogCommUrlPrv)
	 * @method bool isUfBlogCommUrlPrvChanged()
	 * @method \string getUfBlogCommentFile()
	 * @method \string remindActualUfBlogCommentFile()
	 * @method \string requireUfBlogCommentFile()
	 * @method bool hasUfBlogCommentFile()
	 * @method bool isUfBlogCommentFileFilled()
	 * @method \Bitrix\Blog\EO_Comment unsetUfBlogCommentFile()
	 * @method \string fillUfBlogCommentFile()
	 * @method \Bitrix\Blog\EO_Comment setUfBlogCommentFile(\string[] $ufBlogCommentFile)
	 * @method bool isUfBlogCommentFileChanged()
	 * @method \int getUfBlogCommentFh()
	 * @method \int remindActualUfBlogCommentFh()
	 * @method \int requireUfBlogCommentFh()
	 * @method bool hasUfBlogCommentFh()
	 * @method bool isUfBlogCommentFhFilled()
	 * @method \Bitrix\Blog\EO_Comment unsetUfBlogCommentFh()
	 * @method \int fillUfBlogCommentFh()
	 * @method \Bitrix\Blog\EO_Comment setUfBlogCommentFh(\int $ufBlogCommentFh)
	 * @method bool isUfBlogCommentFhChanged()
	 */
	class EO_Comment {
		/* @var \Bitrix\Blog\CommentTable */
		static public $dataClass = '\Bitrix\Blog\CommentTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Blog {
	/**
	 * EO_Comment_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string[] getUfBlogCommentDocList()
	 * @method \string[] fillUfBlogCommentDoc()
	 * @method \int[] getUfBlogCommUrlPrvList()
	 * @method \int[] fillUfBlogCommUrlPrv()
	 * @method \string[] getUfBlogCommentFileList()
	 * @method \string[] fillUfBlogCommentFile()
	 * @method \int[] getUfBlogCommentFhList()
	 * @method \int[] fillUfBlogCommentFh()
	 */
	class EO_Comment_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Blog\CommentTable */
		static public $dataClass = '\Bitrix\Blog\CommentTable';
	}
}
/* ORMENTITYANNOTATION:Bitrix\Blog\PostTable */
namespace Bitrix\Blog {
	/**
	 * EO_Post
	 * @see \Bitrix\Blog\PostTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string getUfBlogPostDoc()
	 * @method \string remindActualUfBlogPostDoc()
	 * @method \string requireUfBlogPostDoc()
	 * @method bool hasUfBlogPostDoc()
	 * @method bool isUfBlogPostDocFilled()
	 * @method \Bitrix\Blog\EO_Post unsetUfBlogPostDoc()
	 * @method \string fillUfBlogPostDoc()
	 * @method \Bitrix\Blog\EO_Post setUfBlogPostDoc(\string[] $ufBlogPostDoc)
	 * @method bool isUfBlogPostDocChanged()
	 * @method \int getUfBlogPostUrlPrv()
	 * @method \int remindActualUfBlogPostUrlPrv()
	 * @method \int requireUfBlogPostUrlPrv()
	 * @method bool hasUfBlogPostUrlPrv()
	 * @method bool isUfBlogPostUrlPrvFilled()
	 * @method \Bitrix\Blog\EO_Post unsetUfBlogPostUrlPrv()
	 * @method \int fillUfBlogPostUrlPrv()
	 * @method \Bitrix\Blog\EO_Post setUfBlogPostUrlPrv(\int $ufBlogPostUrlPrv)
	 * @method bool isUfBlogPostUrlPrvChanged()
	 * @method \int getUfGratitude()
	 * @method \int remindActualUfGratitude()
	 * @method \int requireUfGratitude()
	 * @method bool hasUfGratitude()
	 * @method bool isUfGratitudeFilled()
	 * @method \Bitrix\Blog\EO_Post unsetUfGratitude()
	 * @method \int fillUfGratitude()
	 * @method \Bitrix\Blog\EO_Post setUfGratitude(\int $ufGratitude)
	 * @method bool isUfGratitudeChanged()
	 * @method \string getUfBlogPostFile()
	 * @method \string remindActualUfBlogPostFile()
	 * @method \string requireUfBlogPostFile()
	 * @method bool hasUfBlogPostFile()
	 * @method bool isUfBlogPostFileFilled()
	 * @method \Bitrix\Blog\EO_Post unsetUfBlogPostFile()
	 * @method \string fillUfBlogPostFile()
	 * @method \Bitrix\Blog\EO_Post setUfBlogPostFile(\string[] $ufBlogPostFile)
	 * @method bool isUfBlogPostFileChanged()
	 * @method \string getUfCategoryCode()
	 * @method \string remindActualUfCategoryCode()
	 * @method \string requireUfCategoryCode()
	 * @method bool hasUfCategoryCode()
	 * @method bool isUfCategoryCodeFilled()
	 * @method \Bitrix\Blog\EO_Post unsetUfCategoryCode()
	 * @method \string fillUfCategoryCode()
	 * @method \Bitrix\Blog\EO_Post setUfCategoryCode(\string $ufCategoryCode)
	 * @method bool isUfCategoryCodeChanged()
	 * @method \string getUfAnswerId()
	 * @method \string remindActualUfAnswerId()
	 * @method \string requireUfAnswerId()
	 * @method bool hasUfAnswerId()
	 * @method bool isUfAnswerIdFilled()
	 * @method \Bitrix\Blog\EO_Post unsetUfAnswerId()
	 * @method \string fillUfAnswerId()
	 * @method \Bitrix\Blog\EO_Post setUfAnswerId(\string[] $ufAnswerId)
	 * @method bool isUfAnswerIdChanged()
	 * @method \string getUfOriginalId()
	 * @method \string remindActualUfOriginalId()
	 * @method \string requireUfOriginalId()
	 * @method bool hasUfOriginalId()
	 * @method bool isUfOriginalIdFilled()
	 * @method \Bitrix\Blog\EO_Post unsetUfOriginalId()
	 * @method \string fillUfOriginalId()
	 * @method \Bitrix\Blog\EO_Post setUfOriginalId(\string $ufOriginalId)
	 * @method bool isUfOriginalIdChanged()
	 * @method \int getUfStatus()
	 * @method \int remindActualUfStatus()
	 * @method \int requireUfStatus()
	 * @method bool hasUfStatus()
	 * @method bool isUfStatusFilled()
	 * @method \Bitrix\Blog\EO_Post unsetUfStatus()
	 * @method \int fillUfStatus()
	 * @method \Bitrix\Blog\EO_Post setUfStatus(\int $ufStatus)
	 * @method bool isUfStatusChanged()
	 * @method \int getUfMailMessage()
	 * @method \int remindActualUfMailMessage()
	 * @method \int requireUfMailMessage()
	 * @method bool hasUfMailMessage()
	 * @method bool isUfMailMessageFilled()
	 * @method \Bitrix\Blog\EO_Post unsetUfMailMessage()
	 * @method \int fillUfMailMessage()
	 * @method \Bitrix\Blog\EO_Post setUfMailMessage(\int $ufMailMessage)
	 * @method bool isUfMailMessageChanged()
	 * @method \int getUfBlogPostImprtnt()
	 * @method \int remindActualUfBlogPostImprtnt()
	 * @method \int requireUfBlogPostImprtnt()
	 * @method bool hasUfBlogPostImprtnt()
	 * @method bool isUfBlogPostImprtntFilled()
	 * @method \Bitrix\Blog\EO_Post unsetUfBlogPostImprtnt()
	 * @method \int fillUfBlogPostImprtnt()
	 * @method \Bitrix\Blog\EO_Post setUfBlogPostImprtnt(\int $ufBlogPostImprtnt)
	 * @method bool isUfBlogPostImprtntChanged()
	 * @method \Bitrix\Main\Type\DateTime getUfImprtantDateEnd()
	 * @method \Bitrix\Main\Type\DateTime remindActualUfImprtantDateEnd()
	 * @method \Bitrix\Main\Type\DateTime requireUfImprtantDateEnd()
	 * @method bool hasUfImprtantDateEnd()
	 * @method bool isUfImprtantDateEndFilled()
	 * @method \Bitrix\Blog\EO_Post unsetUfImprtantDateEnd()
	 * @method \Bitrix\Main\Type\DateTime fillUfImprtantDateEnd()
	 * @method \Bitrix\Blog\EO_Post setUfImprtantDateEnd(\Bitrix\Main\Type\DateTime $ufImprtantDateEnd)
	 * @method bool isUfImprtantDateEndChanged()
	 * @method \int getUfBlogPostVote()
	 * @method \int remindActualUfBlogPostVote()
	 * @method \int requireUfBlogPostVote()
	 * @method bool hasUfBlogPostVote()
	 * @method bool isUfBlogPostVoteFilled()
	 * @method \Bitrix\Blog\EO_Post unsetUfBlogPostVote()
	 * @method \int fillUfBlogPostVote()
	 * @method \Bitrix\Blog\EO_Post setUfBlogPostVote(\int $ufBlogPostVote)
	 * @method bool isUfBlogPostVoteChanged()
	 */
	class EO_Post {
		/* @var \Bitrix\Blog\PostTable */
		static public $dataClass = '\Bitrix\Blog\PostTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Blog {
	/**
	 * EO_Post_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string[] getUfBlogPostDocList()
	 * @method \string[] fillUfBlogPostDoc()
	 * @method \int[] getUfBlogPostUrlPrvList()
	 * @method \int[] fillUfBlogPostUrlPrv()
	 * @method \int[] getUfGratitudeList()
	 * @method \int[] fillUfGratitude()
	 * @method \string[] getUfBlogPostFileList()
	 * @method \string[] fillUfBlogPostFile()
	 * @method \string[] getUfCategoryCodeList()
	 * @method \string[] fillUfCategoryCode()
	 * @method \string[] getUfAnswerIdList()
	 * @method \string[] fillUfAnswerId()
	 * @method \string[] getUfOriginalIdList()
	 * @method \string[] fillUfOriginalId()
	 * @method \int[] getUfStatusList()
	 * @method \int[] fillUfStatus()
	 * @method \int[] getUfMailMessageList()
	 * @method \int[] fillUfMailMessage()
	 * @method \int[] getUfBlogPostImprtntList()
	 * @method \int[] fillUfBlogPostImprtnt()
	 * @method \Bitrix\Main\Type\DateTime[] getUfImprtantDateEndList()
	 * @method \Bitrix\Main\Type\DateTime[] fillUfImprtantDateEnd()
	 * @method \int[] getUfBlogPostVoteList()
	 * @method \int[] fillUfBlogPostVote()
	 */
	class EO_Post_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Blog\PostTable */
		static public $dataClass = '\Bitrix\Blog\PostTable';
	}
}
/* ORMENTITYANNOTATION:Bitrix\Calendar\Internals\EventTable */
namespace Bitrix\Calendar\Internals {
	/**
	 * EO_Event
	 * @see \Bitrix\Calendar\Internals\EventTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string getUfCrmCalEvent()
	 * @method \string remindActualUfCrmCalEvent()
	 * @method \string requireUfCrmCalEvent()
	 * @method bool hasUfCrmCalEvent()
	 * @method bool isUfCrmCalEventFilled()
	 * @method \Bitrix\Calendar\Internals\EO_Event unsetUfCrmCalEvent()
	 * @method \string fillUfCrmCalEvent()
	 * @method \Bitrix\Calendar\Internals\EO_Event setUfCrmCalEvent(\string[] $ufCrmCalEvent)
	 * @method bool isUfCrmCalEventChanged()
	 * @method \string getUfWebdavCalEvent()
	 * @method \string remindActualUfWebdavCalEvent()
	 * @method \string requireUfWebdavCalEvent()
	 * @method bool hasUfWebdavCalEvent()
	 * @method bool isUfWebdavCalEventFilled()
	 * @method \Bitrix\Calendar\Internals\EO_Event unsetUfWebdavCalEvent()
	 * @method \string fillUfWebdavCalEvent()
	 * @method \Bitrix\Calendar\Internals\EO_Event setUfWebdavCalEvent(\string[] $ufWebdavCalEvent)
	 * @method bool isUfWebdavCalEventChanged()
	 */
	class EO_Event {
		/* @var \Bitrix\Calendar\Internals\EventTable */
		static public $dataClass = '\Bitrix\Calendar\Internals\EventTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Calendar\Internals {
	/**
	 * EO_Event_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string[] getUfCrmCalEventList()
	 * @method \string[] fillUfCrmCalEvent()
	 * @method \string[] getUfWebdavCalEventList()
	 * @method \string[] fillUfWebdavCalEvent()
	 */
	class EO_Event_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Calendar\Internals\EventTable */
		static public $dataClass = '\Bitrix\Calendar\Internals\EventTable';
	}
}
/* ORMENTITYANNOTATION:Bitrix\Catalog\ProductTable */
namespace Bitrix\Catalog {
	/**
	 * EO_Product
	 * @see \Bitrix\Catalog\ProductTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getUfProductGroup()
	 * @method \int remindActualUfProductGroup()
	 * @method \int requireUfProductGroup()
	 * @method bool hasUfProductGroup()
	 * @method bool isUfProductGroupFilled()
	 * @method \Bitrix\Catalog\EO_Product unsetUfProductGroup()
	 * @method \int fillUfProductGroup()
	 * @method \Bitrix\Catalog\EO_Product setUfProductGroup(\int $ufProductGroup)
	 * @method bool isUfProductGroupChanged()
	 */
	class EO_Product {
		/* @var \Bitrix\Catalog\ProductTable */
		static public $dataClass = '\Bitrix\Catalog\ProductTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Catalog {
	/**
	 * EO_Product_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getUfProductGroupList()
	 * @method \int[] fillUfProductGroup()
	 */
	class EO_Product_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Catalog\ProductTable */
		static public $dataClass = '\Bitrix\Catalog\ProductTable';
	}
}
/* ORMENTITYANNOTATION:Bitrix\Crm\ActivityTable */
namespace Bitrix\Crm {
	/**
	 * EO_Activity
	 * @see \Bitrix\Crm\ActivityTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getUfMailMessage()
	 * @method \int remindActualUfMailMessage()
	 * @method \int requireUfMailMessage()
	 * @method bool hasUfMailMessage()
	 * @method bool isUfMailMessageFilled()
	 * @method \Bitrix\Crm\EO_Activity unsetUfMailMessage()
	 * @method \int fillUfMailMessage()
	 * @method \Bitrix\Crm\EO_Activity setUfMailMessage(\int $ufMailMessage)
	 * @method bool isUfMailMessageChanged()
	 */
	class EO_Activity {
		/* @var \Bitrix\Crm\ActivityTable */
		static public $dataClass = '\Bitrix\Crm\ActivityTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Crm {
	/**
	 * EO_Activity_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getUfMailMessageList()
	 * @method \int[] fillUfMailMessage()
	 */
	class EO_Activity_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Crm\ActivityTable */
		static public $dataClass = '\Bitrix\Crm\ActivityTable';
	}
}
/* ORMENTITYANNOTATION:Bitrix\Crm\Invoice\Internals\InvoiceTable */
namespace Bitrix\Crm\Invoice\Internals {
	/**
	 * EO_Invoice
	 * @see \Bitrix\Crm\Invoice\Internals\InvoiceTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getUfDealId()
	 * @method \int remindActualUfDealId()
	 * @method \int requireUfDealId()
	 * @method bool hasUfDealId()
	 * @method bool isUfDealIdFilled()
	 * @method \Bitrix\Crm\Invoice\Internals\EO_Invoice unsetUfDealId()
	 * @method \int fillUfDealId()
	 * @method \Bitrix\Crm\Invoice\Internals\EO_Invoice setUfDealId(\int $ufDealId)
	 * @method bool isUfDealIdChanged()
	 * @method \int getUfQuoteId()
	 * @method \int remindActualUfQuoteId()
	 * @method \int requireUfQuoteId()
	 * @method bool hasUfQuoteId()
	 * @method bool isUfQuoteIdFilled()
	 * @method \Bitrix\Crm\Invoice\Internals\EO_Invoice unsetUfQuoteId()
	 * @method \int fillUfQuoteId()
	 * @method \Bitrix\Crm\Invoice\Internals\EO_Invoice setUfQuoteId(\int $ufQuoteId)
	 * @method bool isUfQuoteIdChanged()
	 * @method \int getUfCompanyId()
	 * @method \int remindActualUfCompanyId()
	 * @method \int requireUfCompanyId()
	 * @method bool hasUfCompanyId()
	 * @method bool isUfCompanyIdFilled()
	 * @method \Bitrix\Crm\Invoice\Internals\EO_Invoice unsetUfCompanyId()
	 * @method \int fillUfCompanyId()
	 * @method \Bitrix\Crm\Invoice\Internals\EO_Invoice setUfCompanyId(\int $ufCompanyId)
	 * @method bool isUfCompanyIdChanged()
	 * @method \int getUfContactId()
	 * @method \int remindActualUfContactId()
	 * @method \int requireUfContactId()
	 * @method bool hasUfContactId()
	 * @method bool isUfContactIdFilled()
	 * @method \Bitrix\Crm\Invoice\Internals\EO_Invoice unsetUfContactId()
	 * @method \int fillUfContactId()
	 * @method \Bitrix\Crm\Invoice\Internals\EO_Invoice setUfContactId(\int $ufContactId)
	 * @method bool isUfContactIdChanged()
	 * @method \int getUfMycompanyId()
	 * @method \int remindActualUfMycompanyId()
	 * @method \int requireUfMycompanyId()
	 * @method bool hasUfMycompanyId()
	 * @method bool isUfMycompanyIdFilled()
	 * @method \Bitrix\Crm\Invoice\Internals\EO_Invoice unsetUfMycompanyId()
	 * @method \int fillUfMycompanyId()
	 * @method \Bitrix\Crm\Invoice\Internals\EO_Invoice setUfMycompanyId(\int $ufMycompanyId)
	 * @method bool isUfMycompanyIdChanged()
	 */
	class EO_Invoice {
		/* @var \Bitrix\Crm\Invoice\Internals\InvoiceTable */
		static public $dataClass = '\Bitrix\Crm\Invoice\Internals\InvoiceTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Crm\Invoice\Internals {
	/**
	 * EO_Invoice_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getUfDealIdList()
	 * @method \int[] fillUfDealId()
	 * @method \int[] getUfQuoteIdList()
	 * @method \int[] fillUfQuoteId()
	 * @method \int[] getUfCompanyIdList()
	 * @method \int[] fillUfCompanyId()
	 * @method \int[] getUfContactIdList()
	 * @method \int[] fillUfContactId()
	 * @method \int[] getUfMycompanyIdList()
	 * @method \int[] fillUfMycompanyId()
	 */
	class EO_Invoice_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Crm\Invoice\Internals\InvoiceTable */
		static public $dataClass = '\Bitrix\Crm\Invoice\Internals\InvoiceTable';
	}
}
/* ORMENTITYANNOTATION:Bitrix\Forum\MessageTable */
namespace Bitrix\Forum {
	/**
	 * EO_Message
	 * @see \Bitrix\Forum\MessageTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string getUfForumMessageDoc()
	 * @method \string remindActualUfForumMessageDoc()
	 * @method \string requireUfForumMessageDoc()
	 * @method bool hasUfForumMessageDoc()
	 * @method bool isUfForumMessageDocFilled()
	 * @method \Bitrix\Forum\EO_Message unsetUfForumMessageDoc()
	 * @method \string fillUfForumMessageDoc()
	 * @method \Bitrix\Forum\EO_Message setUfForumMessageDoc(\string[] $ufForumMessageDoc)
	 * @method bool isUfForumMessageDocChanged()
	 * @method \int getUfForumMessageVer()
	 * @method \int remindActualUfForumMessageVer()
	 * @method \int requireUfForumMessageVer()
	 * @method bool hasUfForumMessageVer()
	 * @method bool isUfForumMessageVerFilled()
	 * @method \Bitrix\Forum\EO_Message unsetUfForumMessageVer()
	 * @method \int fillUfForumMessageVer()
	 * @method \Bitrix\Forum\EO_Message setUfForumMessageVer(\int $ufForumMessageVer)
	 * @method bool isUfForumMessageVerChanged()
	 * @method \int getUfForumMesUrlPrv()
	 * @method \int remindActualUfForumMesUrlPrv()
	 * @method \int requireUfForumMesUrlPrv()
	 * @method bool hasUfForumMesUrlPrv()
	 * @method bool isUfForumMesUrlPrvFilled()
	 * @method \Bitrix\Forum\EO_Message unsetUfForumMesUrlPrv()
	 * @method \int fillUfForumMesUrlPrv()
	 * @method \Bitrix\Forum\EO_Message setUfForumMesUrlPrv(\int $ufForumMesUrlPrv)
	 * @method bool isUfForumMesUrlPrvChanged()
	 * @method \int getUfTaskCommentType()
	 * @method \int remindActualUfTaskCommentType()
	 * @method \int requireUfTaskCommentType()
	 * @method bool hasUfTaskCommentType()
	 * @method bool isUfTaskCommentTypeFilled()
	 * @method \Bitrix\Forum\EO_Message unsetUfTaskCommentType()
	 * @method \int fillUfTaskCommentType()
	 * @method \Bitrix\Forum\EO_Message setUfTaskCommentType(\int $ufTaskCommentType)
	 * @method bool isUfTaskCommentTypeChanged()
	 */
	class EO_Message {
		/* @var \Bitrix\Forum\MessageTable */
		static public $dataClass = '\Bitrix\Forum\MessageTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Forum {
	/**
	 * EO_Message_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string[] getUfForumMessageDocList()
	 * @method \string[] fillUfForumMessageDoc()
	 * @method \int[] getUfForumMessageVerList()
	 * @method \int[] fillUfForumMessageVer()
	 * @method \int[] getUfForumMesUrlPrvList()
	 * @method \int[] fillUfForumMesUrlPrv()
	 * @method \int[] getUfTaskCommentTypeList()
	 * @method \int[] fillUfTaskCommentType()
	 */
	class EO_Message_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Forum\MessageTable */
		static public $dataClass = '\Bitrix\Forum\MessageTable';
	}
}
/* ORMENTITYANNOTATION:Bitrix\Intranet\UserTable */
namespace Bitrix\Intranet {
	/**
	 * EO_User
	 * @see \Bitrix\Intranet\UserTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string getUfDepartment()
	 * @method \string remindActualUfDepartment()
	 * @method \string requireUfDepartment()
	 * @method bool hasUfDepartment()
	 * @method bool isUfDepartmentFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfDepartment()
	 * @method \string fillUfDepartment()
	 * @method \Bitrix\Intranet\EO_User setUfDepartment(\string[] $ufDepartment)
	 * @method bool isUfDepartmentChanged()
	 * @method \string getUfPhoneInner()
	 * @method \string remindActualUfPhoneInner()
	 * @method \string requireUfPhoneInner()
	 * @method bool hasUfPhoneInner()
	 * @method bool isUfPhoneInnerFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfPhoneInner()
	 * @method \string fillUfPhoneInner()
	 * @method \Bitrix\Intranet\EO_User setUfPhoneInner(\string $ufPhoneInner)
	 * @method bool isUfPhoneInnerChanged()
	 * @method \string getUfUserCrmEntity()
	 * @method \string remindActualUfUserCrmEntity()
	 * @method \string requireUfUserCrmEntity()
	 * @method bool hasUfUserCrmEntity()
	 * @method bool isUfUserCrmEntityFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfUserCrmEntity()
	 * @method \string fillUfUserCrmEntity()
	 * @method \Bitrix\Intranet\EO_User setUfUserCrmEntity(\string $ufUserCrmEntity)
	 * @method bool isUfUserCrmEntityChanged()
	 * @method \string getUfImSearch()
	 * @method \string remindActualUfImSearch()
	 * @method \string requireUfImSearch()
	 * @method bool hasUfImSearch()
	 * @method bool isUfImSearchFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfImSearch()
	 * @method \string fillUfImSearch()
	 * @method \Bitrix\Intranet\EO_User setUfImSearch(\string $ufImSearch)
	 * @method bool isUfImSearchChanged()
	 * @method \string getUfConnectorMd5()
	 * @method \string remindActualUfConnectorMd5()
	 * @method \string requireUfConnectorMd5()
	 * @method bool hasUfConnectorMd5()
	 * @method bool isUfConnectorMd5Filled()
	 * @method \Bitrix\Intranet\EO_User unsetUfConnectorMd5()
	 * @method \string fillUfConnectorMd5()
	 * @method \Bitrix\Intranet\EO_User setUfConnectorMd5(\string $ufConnectorMd5)
	 * @method bool isUfConnectorMd5Changed()
	 * @method \boolean getUf1c()
	 * @method \boolean remindActualUf1c()
	 * @method \boolean requireUf1c()
	 * @method bool hasUf1c()
	 * @method bool isUf1cFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUf1c()
	 * @method \boolean fillUf1c()
	 * @method \Bitrix\Intranet\EO_User setUf1c(\boolean $uf1c)
	 * @method bool isUf1cChanged()
	 * @method \string getUfInn()
	 * @method \string remindActualUfInn()
	 * @method \string requireUfInn()
	 * @method bool hasUfInn()
	 * @method bool isUfInnFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfInn()
	 * @method \string fillUfInn()
	 * @method \Bitrix\Intranet\EO_User setUfInn(\string $ufInn)
	 * @method bool isUfInnChanged()
	 * @method \string getUfDistrict()
	 * @method \string remindActualUfDistrict()
	 * @method \string requireUfDistrict()
	 * @method bool hasUfDistrict()
	 * @method bool isUfDistrictFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfDistrict()
	 * @method \string fillUfDistrict()
	 * @method \Bitrix\Intranet\EO_User setUfDistrict(\string $ufDistrict)
	 * @method bool isUfDistrictChanged()
	 * @method \string getUfSkype()
	 * @method \string remindActualUfSkype()
	 * @method \string requireUfSkype()
	 * @method bool hasUfSkype()
	 * @method bool isUfSkypeFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfSkype()
	 * @method \string fillUfSkype()
	 * @method \Bitrix\Intranet\EO_User setUfSkype(\string $ufSkype)
	 * @method bool isUfSkypeChanged()
	 * @method \string getUfSkypeLink()
	 * @method \string remindActualUfSkypeLink()
	 * @method \string requireUfSkypeLink()
	 * @method bool hasUfSkypeLink()
	 * @method bool isUfSkypeLinkFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfSkypeLink()
	 * @method \string fillUfSkypeLink()
	 * @method \Bitrix\Intranet\EO_User setUfSkypeLink(\string $ufSkypeLink)
	 * @method bool isUfSkypeLinkChanged()
	 * @method \string getUfZoom()
	 * @method \string remindActualUfZoom()
	 * @method \string requireUfZoom()
	 * @method bool hasUfZoom()
	 * @method bool isUfZoomFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfZoom()
	 * @method \string fillUfZoom()
	 * @method \Bitrix\Intranet\EO_User setUfZoom(\string $ufZoom)
	 * @method bool isUfZoomChanged()
	 * @method \string getUfTwitter()
	 * @method \string remindActualUfTwitter()
	 * @method \string requireUfTwitter()
	 * @method bool hasUfTwitter()
	 * @method bool isUfTwitterFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfTwitter()
	 * @method \string fillUfTwitter()
	 * @method \Bitrix\Intranet\EO_User setUfTwitter(\string $ufTwitter)
	 * @method bool isUfTwitterChanged()
	 * @method \string getUfFacebook()
	 * @method \string remindActualUfFacebook()
	 * @method \string requireUfFacebook()
	 * @method bool hasUfFacebook()
	 * @method bool isUfFacebookFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfFacebook()
	 * @method \string fillUfFacebook()
	 * @method \Bitrix\Intranet\EO_User setUfFacebook(\string $ufFacebook)
	 * @method bool isUfFacebookChanged()
	 * @method \string getUfLinkedin()
	 * @method \string remindActualUfLinkedin()
	 * @method \string requireUfLinkedin()
	 * @method bool hasUfLinkedin()
	 * @method bool isUfLinkedinFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfLinkedin()
	 * @method \string fillUfLinkedin()
	 * @method \Bitrix\Intranet\EO_User setUfLinkedin(\string $ufLinkedin)
	 * @method bool isUfLinkedinChanged()
	 * @method \string getUfXing()
	 * @method \string remindActualUfXing()
	 * @method \string requireUfXing()
	 * @method bool hasUfXing()
	 * @method bool isUfXingFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfXing()
	 * @method \string fillUfXing()
	 * @method \Bitrix\Intranet\EO_User setUfXing(\string $ufXing)
	 * @method bool isUfXingChanged()
	 * @method \string getUfWebSites()
	 * @method \string remindActualUfWebSites()
	 * @method \string requireUfWebSites()
	 * @method bool hasUfWebSites()
	 * @method bool isUfWebSitesFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfWebSites()
	 * @method \string fillUfWebSites()
	 * @method \Bitrix\Intranet\EO_User setUfWebSites(\string $ufWebSites)
	 * @method bool isUfWebSitesChanged()
	 * @method \string getUfSkills()
	 * @method \string remindActualUfSkills()
	 * @method \string requireUfSkills()
	 * @method bool hasUfSkills()
	 * @method bool isUfSkillsFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfSkills()
	 * @method \string fillUfSkills()
	 * @method \Bitrix\Intranet\EO_User setUfSkills(\string $ufSkills)
	 * @method bool isUfSkillsChanged()
	 * @method \string getUfInterests()
	 * @method \string remindActualUfInterests()
	 * @method \string requireUfInterests()
	 * @method bool hasUfInterests()
	 * @method bool isUfInterestsFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfInterests()
	 * @method \string fillUfInterests()
	 * @method \Bitrix\Intranet\EO_User setUfInterests(\string $ufInterests)
	 * @method bool isUfInterestsChanged()
	 * @method \Bitrix\Main\Type\Date getUfEmploymentDate()
	 * @method \Bitrix\Main\Type\Date remindActualUfEmploymentDate()
	 * @method \Bitrix\Main\Type\Date requireUfEmploymentDate()
	 * @method bool hasUfEmploymentDate()
	 * @method bool isUfEmploymentDateFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfEmploymentDate()
	 * @method \Bitrix\Main\Type\Date fillUfEmploymentDate()
	 * @method \Bitrix\Intranet\EO_User setUfEmploymentDate(\Bitrix\Main\Type\Date $ufEmploymentDate)
	 * @method bool isUfEmploymentDateChanged()
	 * @method \string getUfWorkBinding()
	 * @method \string remindActualUfWorkBinding()
	 * @method \string requireUfWorkBinding()
	 * @method bool hasUfWorkBinding()
	 * @method bool isUfWorkBindingFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfWorkBinding()
	 * @method \string fillUfWorkBinding()
	 * @method \Bitrix\Intranet\EO_User setUfWorkBinding(\string $ufWorkBinding)
	 * @method bool isUfWorkBindingChanged()
	 * @method \Bitrix\Main\Type\DateTime getUfBxdavexCalsync()
	 * @method \Bitrix\Main\Type\DateTime remindActualUfBxdavexCalsync()
	 * @method \Bitrix\Main\Type\DateTime requireUfBxdavexCalsync()
	 * @method bool hasUfBxdavexCalsync()
	 * @method bool isUfBxdavexCalsyncFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfBxdavexCalsync()
	 * @method \Bitrix\Main\Type\DateTime fillUfBxdavexCalsync()
	 * @method \Bitrix\Intranet\EO_User setUfBxdavexCalsync(\Bitrix\Main\Type\DateTime $ufBxdavexCalsync)
	 * @method bool isUfBxdavexCalsyncChanged()
	 * @method \int getUfTimeman()
	 * @method \int remindActualUfTimeman()
	 * @method \int requireUfTimeman()
	 * @method bool hasUfTimeman()
	 * @method bool isUfTimemanFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfTimeman()
	 * @method \int fillUfTimeman()
	 * @method \Bitrix\Intranet\EO_User setUfTimeman(\int $ufTimeman)
	 * @method bool isUfTimemanChanged()
	 * @method \string getUfTmMaxStart()
	 * @method \string remindActualUfTmMaxStart()
	 * @method \string requireUfTmMaxStart()
	 * @method bool hasUfTmMaxStart()
	 * @method bool isUfTmMaxStartFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfTmMaxStart()
	 * @method \string fillUfTmMaxStart()
	 * @method \Bitrix\Intranet\EO_User setUfTmMaxStart(\string $ufTmMaxStart)
	 * @method bool isUfTmMaxStartChanged()
	 * @method \string getUfTmMinFinish()
	 * @method \string remindActualUfTmMinFinish()
	 * @method \string requireUfTmMinFinish()
	 * @method bool hasUfTmMinFinish()
	 * @method bool isUfTmMinFinishFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfTmMinFinish()
	 * @method \string fillUfTmMinFinish()
	 * @method \Bitrix\Intranet\EO_User setUfTmMinFinish(\string $ufTmMinFinish)
	 * @method bool isUfTmMinFinishChanged()
	 * @method \string getUfTmMinDuration()
	 * @method \string remindActualUfTmMinDuration()
	 * @method \string requireUfTmMinDuration()
	 * @method bool hasUfTmMinDuration()
	 * @method bool isUfTmMinDurationFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfTmMinDuration()
	 * @method \string fillUfTmMinDuration()
	 * @method \Bitrix\Intranet\EO_User setUfTmMinDuration(\string $ufTmMinDuration)
	 * @method bool isUfTmMinDurationChanged()
	 * @method \int getUfTmReportReq()
	 * @method \int remindActualUfTmReportReq()
	 * @method \int requireUfTmReportReq()
	 * @method bool hasUfTmReportReq()
	 * @method bool isUfTmReportReqFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfTmReportReq()
	 * @method \int fillUfTmReportReq()
	 * @method \Bitrix\Intranet\EO_User setUfTmReportReq(\int $ufTmReportReq)
	 * @method bool isUfTmReportReqChanged()
	 * @method \string getUfTmReportTpl()
	 * @method \string remindActualUfTmReportTpl()
	 * @method \string requireUfTmReportTpl()
	 * @method bool hasUfTmReportTpl()
	 * @method bool isUfTmReportTplFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfTmReportTpl()
	 * @method \string fillUfTmReportTpl()
	 * @method \Bitrix\Intranet\EO_User setUfTmReportTpl(\string[] $ufTmReportTpl)
	 * @method bool isUfTmReportTplChanged()
	 * @method \int getUfTmFree()
	 * @method \int remindActualUfTmFree()
	 * @method \int requireUfTmFree()
	 * @method bool hasUfTmFree()
	 * @method bool isUfTmFreeFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfTmFree()
	 * @method \int fillUfTmFree()
	 * @method \Bitrix\Intranet\EO_User setUfTmFree(\int $ufTmFree)
	 * @method bool isUfTmFreeChanged()
	 * @method \string getUfTmTime()
	 * @method \string remindActualUfTmTime()
	 * @method \string requireUfTmTime()
	 * @method bool hasUfTmTime()
	 * @method bool isUfTmTimeFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfTmTime()
	 * @method \string fillUfTmTime()
	 * @method \Bitrix\Intranet\EO_User setUfTmTime(\string $ufTmTime)
	 * @method bool isUfTmTimeChanged()
	 * @method \string getUfTmDay()
	 * @method \string remindActualUfTmDay()
	 * @method \string requireUfTmDay()
	 * @method bool hasUfTmDay()
	 * @method bool isUfTmDayFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfTmDay()
	 * @method \string fillUfTmDay()
	 * @method \Bitrix\Intranet\EO_User setUfTmDay(\string $ufTmDay)
	 * @method bool isUfTmDayChanged()
	 * @method \string getUfTmReportDate()
	 * @method \string remindActualUfTmReportDate()
	 * @method \string requireUfTmReportDate()
	 * @method bool hasUfTmReportDate()
	 * @method bool isUfTmReportDateFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfTmReportDate()
	 * @method \string fillUfTmReportDate()
	 * @method \Bitrix\Intranet\EO_User setUfTmReportDate(\string $ufTmReportDate)
	 * @method bool isUfTmReportDateChanged()
	 * @method \int getUfReportPeriod()
	 * @method \int remindActualUfReportPeriod()
	 * @method \int requireUfReportPeriod()
	 * @method bool hasUfReportPeriod()
	 * @method bool isUfReportPeriodFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfReportPeriod()
	 * @method \int fillUfReportPeriod()
	 * @method \Bitrix\Intranet\EO_User setUfReportPeriod(\int $ufReportPeriod)
	 * @method bool isUfReportPeriodChanged()
	 * @method \string getUfDelayTime()
	 * @method \string remindActualUfDelayTime()
	 * @method \string requireUfDelayTime()
	 * @method bool hasUfDelayTime()
	 * @method bool isUfDelayTimeFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfDelayTime()
	 * @method \string fillUfDelayTime()
	 * @method \Bitrix\Intranet\EO_User setUfDelayTime(\string $ufDelayTime)
	 * @method bool isUfDelayTimeChanged()
	 * @method \string getUfLastReportDate()
	 * @method \string remindActualUfLastReportDate()
	 * @method \string requireUfLastReportDate()
	 * @method bool hasUfLastReportDate()
	 * @method bool isUfLastReportDateFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfLastReportDate()
	 * @method \string fillUfLastReportDate()
	 * @method \Bitrix\Intranet\EO_User setUfLastReportDate(\string $ufLastReportDate)
	 * @method bool isUfLastReportDateChanged()
	 * @method \string getUfSettingDate()
	 * @method \string remindActualUfSettingDate()
	 * @method \string requireUfSettingDate()
	 * @method bool hasUfSettingDate()
	 * @method bool isUfSettingDateFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfSettingDate()
	 * @method \string fillUfSettingDate()
	 * @method \Bitrix\Intranet\EO_User setUfSettingDate(\string $ufSettingDate)
	 * @method bool isUfSettingDateChanged()
	 * @method \string getUfTmAllowedDelta()
	 * @method \string remindActualUfTmAllowedDelta()
	 * @method \string requireUfTmAllowedDelta()
	 * @method bool hasUfTmAllowedDelta()
	 * @method bool isUfTmAllowedDeltaFilled()
	 * @method \Bitrix\Intranet\EO_User unsetUfTmAllowedDelta()
	 * @method \string fillUfTmAllowedDelta()
	 * @method \Bitrix\Intranet\EO_User setUfTmAllowedDelta(\string $ufTmAllowedDelta)
	 * @method bool isUfTmAllowedDeltaChanged()
	 */
	class EO_User {
		/* @var \Bitrix\Intranet\UserTable */
		static public $dataClass = '\Bitrix\Intranet\UserTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Intranet {
	/**
	 * EO_User_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string[] getUfDepartmentList()
	 * @method \string[] fillUfDepartment()
	 * @method \string[] getUfPhoneInnerList()
	 * @method \string[] fillUfPhoneInner()
	 * @method \string[] getUfUserCrmEntityList()
	 * @method \string[] fillUfUserCrmEntity()
	 * @method \string[] getUfImSearchList()
	 * @method \string[] fillUfImSearch()
	 * @method \string[] getUfConnectorMd5List()
	 * @method \string[] fillUfConnectorMd5()
	 * @method \boolean[] getUf1cList()
	 * @method \boolean[] fillUf1c()
	 * @method \string[] getUfInnList()
	 * @method \string[] fillUfInn()
	 * @method \string[] getUfDistrictList()
	 * @method \string[] fillUfDistrict()
	 * @method \string[] getUfSkypeList()
	 * @method \string[] fillUfSkype()
	 * @method \string[] getUfSkypeLinkList()
	 * @method \string[] fillUfSkypeLink()
	 * @method \string[] getUfZoomList()
	 * @method \string[] fillUfZoom()
	 * @method \string[] getUfTwitterList()
	 * @method \string[] fillUfTwitter()
	 * @method \string[] getUfFacebookList()
	 * @method \string[] fillUfFacebook()
	 * @method \string[] getUfLinkedinList()
	 * @method \string[] fillUfLinkedin()
	 * @method \string[] getUfXingList()
	 * @method \string[] fillUfXing()
	 * @method \string[] getUfWebSitesList()
	 * @method \string[] fillUfWebSites()
	 * @method \string[] getUfSkillsList()
	 * @method \string[] fillUfSkills()
	 * @method \string[] getUfInterestsList()
	 * @method \string[] fillUfInterests()
	 * @method \Bitrix\Main\Type\Date[] getUfEmploymentDateList()
	 * @method \Bitrix\Main\Type\Date[] fillUfEmploymentDate()
	 * @method \string[] getUfWorkBindingList()
	 * @method \string[] fillUfWorkBinding()
	 * @method \Bitrix\Main\Type\DateTime[] getUfBxdavexCalsyncList()
	 * @method \Bitrix\Main\Type\DateTime[] fillUfBxdavexCalsync()
	 * @method \int[] getUfTimemanList()
	 * @method \int[] fillUfTimeman()
	 * @method \string[] getUfTmMaxStartList()
	 * @method \string[] fillUfTmMaxStart()
	 * @method \string[] getUfTmMinFinishList()
	 * @method \string[] fillUfTmMinFinish()
	 * @method \string[] getUfTmMinDurationList()
	 * @method \string[] fillUfTmMinDuration()
	 * @method \int[] getUfTmReportReqList()
	 * @method \int[] fillUfTmReportReq()
	 * @method \string[] getUfTmReportTplList()
	 * @method \string[] fillUfTmReportTpl()
	 * @method \int[] getUfTmFreeList()
	 * @method \int[] fillUfTmFree()
	 * @method \string[] getUfTmTimeList()
	 * @method \string[] fillUfTmTime()
	 * @method \string[] getUfTmDayList()
	 * @method \string[] fillUfTmDay()
	 * @method \string[] getUfTmReportDateList()
	 * @method \string[] fillUfTmReportDate()
	 * @method \int[] getUfReportPeriodList()
	 * @method \int[] fillUfReportPeriod()
	 * @method \string[] getUfDelayTimeList()
	 * @method \string[] fillUfDelayTime()
	 * @method \string[] getUfLastReportDateList()
	 * @method \string[] fillUfLastReportDate()
	 * @method \string[] getUfSettingDateList()
	 * @method \string[] fillUfSettingDate()
	 * @method \string[] getUfTmAllowedDeltaList()
	 * @method \string[] fillUfTmAllowedDelta()
	 */
	class EO_User_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Intranet\UserTable */
		static public $dataClass = '\Bitrix\Intranet\UserTable';
	}
}
/* ORMENTITYANNOTATION:Bitrix\Main\UserTable */
namespace Bitrix\Main {
	/**
	 * EO_User
	 * @see \Bitrix\Main\UserTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string getUfDepartment()
	 * @method \string remindActualUfDepartment()
	 * @method \string requireUfDepartment()
	 * @method bool hasUfDepartment()
	 * @method bool isUfDepartmentFilled()
	 * @method \Bitrix\Main\EO_User unsetUfDepartment()
	 * @method \string fillUfDepartment()
	 * @method \Bitrix\Main\EO_User setUfDepartment(\string[] $ufDepartment)
	 * @method bool isUfDepartmentChanged()
	 * @method \string getUfPhoneInner()
	 * @method \string remindActualUfPhoneInner()
	 * @method \string requireUfPhoneInner()
	 * @method bool hasUfPhoneInner()
	 * @method bool isUfPhoneInnerFilled()
	 * @method \Bitrix\Main\EO_User unsetUfPhoneInner()
	 * @method \string fillUfPhoneInner()
	 * @method \Bitrix\Main\EO_User setUfPhoneInner(\string $ufPhoneInner)
	 * @method bool isUfPhoneInnerChanged()
	 * @method \string getUfUserCrmEntity()
	 * @method \string remindActualUfUserCrmEntity()
	 * @method \string requireUfUserCrmEntity()
	 * @method bool hasUfUserCrmEntity()
	 * @method bool isUfUserCrmEntityFilled()
	 * @method \Bitrix\Main\EO_User unsetUfUserCrmEntity()
	 * @method \string fillUfUserCrmEntity()
	 * @method \Bitrix\Main\EO_User setUfUserCrmEntity(\string $ufUserCrmEntity)
	 * @method bool isUfUserCrmEntityChanged()
	 * @method \string getUfImSearch()
	 * @method \string remindActualUfImSearch()
	 * @method \string requireUfImSearch()
	 * @method bool hasUfImSearch()
	 * @method bool isUfImSearchFilled()
	 * @method \Bitrix\Main\EO_User unsetUfImSearch()
	 * @method \string fillUfImSearch()
	 * @method \Bitrix\Main\EO_User setUfImSearch(\string $ufImSearch)
	 * @method bool isUfImSearchChanged()
	 * @method \string getUfConnectorMd5()
	 * @method \string remindActualUfConnectorMd5()
	 * @method \string requireUfConnectorMd5()
	 * @method bool hasUfConnectorMd5()
	 * @method bool isUfConnectorMd5Filled()
	 * @method \Bitrix\Main\EO_User unsetUfConnectorMd5()
	 * @method \string fillUfConnectorMd5()
	 * @method \Bitrix\Main\EO_User setUfConnectorMd5(\string $ufConnectorMd5)
	 * @method bool isUfConnectorMd5Changed()
	 * @method \boolean getUf1c()
	 * @method \boolean remindActualUf1c()
	 * @method \boolean requireUf1c()
	 * @method bool hasUf1c()
	 * @method bool isUf1cFilled()
	 * @method \Bitrix\Main\EO_User unsetUf1c()
	 * @method \boolean fillUf1c()
	 * @method \Bitrix\Main\EO_User setUf1c(\boolean $uf1c)
	 * @method bool isUf1cChanged()
	 * @method \string getUfInn()
	 * @method \string remindActualUfInn()
	 * @method \string requireUfInn()
	 * @method bool hasUfInn()
	 * @method bool isUfInnFilled()
	 * @method \Bitrix\Main\EO_User unsetUfInn()
	 * @method \string fillUfInn()
	 * @method \Bitrix\Main\EO_User setUfInn(\string $ufInn)
	 * @method bool isUfInnChanged()
	 * @method \string getUfDistrict()
	 * @method \string remindActualUfDistrict()
	 * @method \string requireUfDistrict()
	 * @method bool hasUfDistrict()
	 * @method bool isUfDistrictFilled()
	 * @method \Bitrix\Main\EO_User unsetUfDistrict()
	 * @method \string fillUfDistrict()
	 * @method \Bitrix\Main\EO_User setUfDistrict(\string $ufDistrict)
	 * @method bool isUfDistrictChanged()
	 * @method \string getUfSkype()
	 * @method \string remindActualUfSkype()
	 * @method \string requireUfSkype()
	 * @method bool hasUfSkype()
	 * @method bool isUfSkypeFilled()
	 * @method \Bitrix\Main\EO_User unsetUfSkype()
	 * @method \string fillUfSkype()
	 * @method \Bitrix\Main\EO_User setUfSkype(\string $ufSkype)
	 * @method bool isUfSkypeChanged()
	 * @method \string getUfSkypeLink()
	 * @method \string remindActualUfSkypeLink()
	 * @method \string requireUfSkypeLink()
	 * @method bool hasUfSkypeLink()
	 * @method bool isUfSkypeLinkFilled()
	 * @method \Bitrix\Main\EO_User unsetUfSkypeLink()
	 * @method \string fillUfSkypeLink()
	 * @method \Bitrix\Main\EO_User setUfSkypeLink(\string $ufSkypeLink)
	 * @method bool isUfSkypeLinkChanged()
	 * @method \string getUfZoom()
	 * @method \string remindActualUfZoom()
	 * @method \string requireUfZoom()
	 * @method bool hasUfZoom()
	 * @method bool isUfZoomFilled()
	 * @method \Bitrix\Main\EO_User unsetUfZoom()
	 * @method \string fillUfZoom()
	 * @method \Bitrix\Main\EO_User setUfZoom(\string $ufZoom)
	 * @method bool isUfZoomChanged()
	 * @method \string getUfTwitter()
	 * @method \string remindActualUfTwitter()
	 * @method \string requireUfTwitter()
	 * @method bool hasUfTwitter()
	 * @method bool isUfTwitterFilled()
	 * @method \Bitrix\Main\EO_User unsetUfTwitter()
	 * @method \string fillUfTwitter()
	 * @method \Bitrix\Main\EO_User setUfTwitter(\string $ufTwitter)
	 * @method bool isUfTwitterChanged()
	 * @method \string getUfFacebook()
	 * @method \string remindActualUfFacebook()
	 * @method \string requireUfFacebook()
	 * @method bool hasUfFacebook()
	 * @method bool isUfFacebookFilled()
	 * @method \Bitrix\Main\EO_User unsetUfFacebook()
	 * @method \string fillUfFacebook()
	 * @method \Bitrix\Main\EO_User setUfFacebook(\string $ufFacebook)
	 * @method bool isUfFacebookChanged()
	 * @method \string getUfLinkedin()
	 * @method \string remindActualUfLinkedin()
	 * @method \string requireUfLinkedin()
	 * @method bool hasUfLinkedin()
	 * @method bool isUfLinkedinFilled()
	 * @method \Bitrix\Main\EO_User unsetUfLinkedin()
	 * @method \string fillUfLinkedin()
	 * @method \Bitrix\Main\EO_User setUfLinkedin(\string $ufLinkedin)
	 * @method bool isUfLinkedinChanged()
	 * @method \string getUfXing()
	 * @method \string remindActualUfXing()
	 * @method \string requireUfXing()
	 * @method bool hasUfXing()
	 * @method bool isUfXingFilled()
	 * @method \Bitrix\Main\EO_User unsetUfXing()
	 * @method \string fillUfXing()
	 * @method \Bitrix\Main\EO_User setUfXing(\string $ufXing)
	 * @method bool isUfXingChanged()
	 * @method \string getUfWebSites()
	 * @method \string remindActualUfWebSites()
	 * @method \string requireUfWebSites()
	 * @method bool hasUfWebSites()
	 * @method bool isUfWebSitesFilled()
	 * @method \Bitrix\Main\EO_User unsetUfWebSites()
	 * @method \string fillUfWebSites()
	 * @method \Bitrix\Main\EO_User setUfWebSites(\string $ufWebSites)
	 * @method bool isUfWebSitesChanged()
	 * @method \string getUfSkills()
	 * @method \string remindActualUfSkills()
	 * @method \string requireUfSkills()
	 * @method bool hasUfSkills()
	 * @method bool isUfSkillsFilled()
	 * @method \Bitrix\Main\EO_User unsetUfSkills()
	 * @method \string fillUfSkills()
	 * @method \Bitrix\Main\EO_User setUfSkills(\string $ufSkills)
	 * @method bool isUfSkillsChanged()
	 * @method \string getUfInterests()
	 * @method \string remindActualUfInterests()
	 * @method \string requireUfInterests()
	 * @method bool hasUfInterests()
	 * @method bool isUfInterestsFilled()
	 * @method \Bitrix\Main\EO_User unsetUfInterests()
	 * @method \string fillUfInterests()
	 * @method \Bitrix\Main\EO_User setUfInterests(\string $ufInterests)
	 * @method bool isUfInterestsChanged()
	 * @method \Bitrix\Main\Type\Date getUfEmploymentDate()
	 * @method \Bitrix\Main\Type\Date remindActualUfEmploymentDate()
	 * @method \Bitrix\Main\Type\Date requireUfEmploymentDate()
	 * @method bool hasUfEmploymentDate()
	 * @method bool isUfEmploymentDateFilled()
	 * @method \Bitrix\Main\EO_User unsetUfEmploymentDate()
	 * @method \Bitrix\Main\Type\Date fillUfEmploymentDate()
	 * @method \Bitrix\Main\EO_User setUfEmploymentDate(\Bitrix\Main\Type\Date $ufEmploymentDate)
	 * @method bool isUfEmploymentDateChanged()
	 * @method \string getUfWorkBinding()
	 * @method \string remindActualUfWorkBinding()
	 * @method \string requireUfWorkBinding()
	 * @method bool hasUfWorkBinding()
	 * @method bool isUfWorkBindingFilled()
	 * @method \Bitrix\Main\EO_User unsetUfWorkBinding()
	 * @method \string fillUfWorkBinding()
	 * @method \Bitrix\Main\EO_User setUfWorkBinding(\string $ufWorkBinding)
	 * @method bool isUfWorkBindingChanged()
	 * @method \Bitrix\Main\Type\DateTime getUfBxdavexCalsync()
	 * @method \Bitrix\Main\Type\DateTime remindActualUfBxdavexCalsync()
	 * @method \Bitrix\Main\Type\DateTime requireUfBxdavexCalsync()
	 * @method bool hasUfBxdavexCalsync()
	 * @method bool isUfBxdavexCalsyncFilled()
	 * @method \Bitrix\Main\EO_User unsetUfBxdavexCalsync()
	 * @method \Bitrix\Main\Type\DateTime fillUfBxdavexCalsync()
	 * @method \Bitrix\Main\EO_User setUfBxdavexCalsync(\Bitrix\Main\Type\DateTime $ufBxdavexCalsync)
	 * @method bool isUfBxdavexCalsyncChanged()
	 * @method \int getUfTimeman()
	 * @method \int remindActualUfTimeman()
	 * @method \int requireUfTimeman()
	 * @method bool hasUfTimeman()
	 * @method bool isUfTimemanFilled()
	 * @method \Bitrix\Main\EO_User unsetUfTimeman()
	 * @method \int fillUfTimeman()
	 * @method \Bitrix\Main\EO_User setUfTimeman(\int $ufTimeman)
	 * @method bool isUfTimemanChanged()
	 * @method \string getUfTmMaxStart()
	 * @method \string remindActualUfTmMaxStart()
	 * @method \string requireUfTmMaxStart()
	 * @method bool hasUfTmMaxStart()
	 * @method bool isUfTmMaxStartFilled()
	 * @method \Bitrix\Main\EO_User unsetUfTmMaxStart()
	 * @method \string fillUfTmMaxStart()
	 * @method \Bitrix\Main\EO_User setUfTmMaxStart(\string $ufTmMaxStart)
	 * @method bool isUfTmMaxStartChanged()
	 * @method \string getUfTmMinFinish()
	 * @method \string remindActualUfTmMinFinish()
	 * @method \string requireUfTmMinFinish()
	 * @method bool hasUfTmMinFinish()
	 * @method bool isUfTmMinFinishFilled()
	 * @method \Bitrix\Main\EO_User unsetUfTmMinFinish()
	 * @method \string fillUfTmMinFinish()
	 * @method \Bitrix\Main\EO_User setUfTmMinFinish(\string $ufTmMinFinish)
	 * @method bool isUfTmMinFinishChanged()
	 * @method \string getUfTmMinDuration()
	 * @method \string remindActualUfTmMinDuration()
	 * @method \string requireUfTmMinDuration()
	 * @method bool hasUfTmMinDuration()
	 * @method bool isUfTmMinDurationFilled()
	 * @method \Bitrix\Main\EO_User unsetUfTmMinDuration()
	 * @method \string fillUfTmMinDuration()
	 * @method \Bitrix\Main\EO_User setUfTmMinDuration(\string $ufTmMinDuration)
	 * @method bool isUfTmMinDurationChanged()
	 * @method \int getUfTmReportReq()
	 * @method \int remindActualUfTmReportReq()
	 * @method \int requireUfTmReportReq()
	 * @method bool hasUfTmReportReq()
	 * @method bool isUfTmReportReqFilled()
	 * @method \Bitrix\Main\EO_User unsetUfTmReportReq()
	 * @method \int fillUfTmReportReq()
	 * @method \Bitrix\Main\EO_User setUfTmReportReq(\int $ufTmReportReq)
	 * @method bool isUfTmReportReqChanged()
	 * @method \string getUfTmReportTpl()
	 * @method \string remindActualUfTmReportTpl()
	 * @method \string requireUfTmReportTpl()
	 * @method bool hasUfTmReportTpl()
	 * @method bool isUfTmReportTplFilled()
	 * @method \Bitrix\Main\EO_User unsetUfTmReportTpl()
	 * @method \string fillUfTmReportTpl()
	 * @method \Bitrix\Main\EO_User setUfTmReportTpl(\string[] $ufTmReportTpl)
	 * @method bool isUfTmReportTplChanged()
	 * @method \int getUfTmFree()
	 * @method \int remindActualUfTmFree()
	 * @method \int requireUfTmFree()
	 * @method bool hasUfTmFree()
	 * @method bool isUfTmFreeFilled()
	 * @method \Bitrix\Main\EO_User unsetUfTmFree()
	 * @method \int fillUfTmFree()
	 * @method \Bitrix\Main\EO_User setUfTmFree(\int $ufTmFree)
	 * @method bool isUfTmFreeChanged()
	 * @method \string getUfTmTime()
	 * @method \string remindActualUfTmTime()
	 * @method \string requireUfTmTime()
	 * @method bool hasUfTmTime()
	 * @method bool isUfTmTimeFilled()
	 * @method \Bitrix\Main\EO_User unsetUfTmTime()
	 * @method \string fillUfTmTime()
	 * @method \Bitrix\Main\EO_User setUfTmTime(\string $ufTmTime)
	 * @method bool isUfTmTimeChanged()
	 * @method \string getUfTmDay()
	 * @method \string remindActualUfTmDay()
	 * @method \string requireUfTmDay()
	 * @method bool hasUfTmDay()
	 * @method bool isUfTmDayFilled()
	 * @method \Bitrix\Main\EO_User unsetUfTmDay()
	 * @method \string fillUfTmDay()
	 * @method \Bitrix\Main\EO_User setUfTmDay(\string $ufTmDay)
	 * @method bool isUfTmDayChanged()
	 * @method \string getUfTmReportDate()
	 * @method \string remindActualUfTmReportDate()
	 * @method \string requireUfTmReportDate()
	 * @method bool hasUfTmReportDate()
	 * @method bool isUfTmReportDateFilled()
	 * @method \Bitrix\Main\EO_User unsetUfTmReportDate()
	 * @method \string fillUfTmReportDate()
	 * @method \Bitrix\Main\EO_User setUfTmReportDate(\string $ufTmReportDate)
	 * @method bool isUfTmReportDateChanged()
	 * @method \int getUfReportPeriod()
	 * @method \int remindActualUfReportPeriod()
	 * @method \int requireUfReportPeriod()
	 * @method bool hasUfReportPeriod()
	 * @method bool isUfReportPeriodFilled()
	 * @method \Bitrix\Main\EO_User unsetUfReportPeriod()
	 * @method \int fillUfReportPeriod()
	 * @method \Bitrix\Main\EO_User setUfReportPeriod(\int $ufReportPeriod)
	 * @method bool isUfReportPeriodChanged()
	 * @method \string getUfDelayTime()
	 * @method \string remindActualUfDelayTime()
	 * @method \string requireUfDelayTime()
	 * @method bool hasUfDelayTime()
	 * @method bool isUfDelayTimeFilled()
	 * @method \Bitrix\Main\EO_User unsetUfDelayTime()
	 * @method \string fillUfDelayTime()
	 * @method \Bitrix\Main\EO_User setUfDelayTime(\string $ufDelayTime)
	 * @method bool isUfDelayTimeChanged()
	 * @method \string getUfLastReportDate()
	 * @method \string remindActualUfLastReportDate()
	 * @method \string requireUfLastReportDate()
	 * @method bool hasUfLastReportDate()
	 * @method bool isUfLastReportDateFilled()
	 * @method \Bitrix\Main\EO_User unsetUfLastReportDate()
	 * @method \string fillUfLastReportDate()
	 * @method \Bitrix\Main\EO_User setUfLastReportDate(\string $ufLastReportDate)
	 * @method bool isUfLastReportDateChanged()
	 * @method \string getUfSettingDate()
	 * @method \string remindActualUfSettingDate()
	 * @method \string requireUfSettingDate()
	 * @method bool hasUfSettingDate()
	 * @method bool isUfSettingDateFilled()
	 * @method \Bitrix\Main\EO_User unsetUfSettingDate()
	 * @method \string fillUfSettingDate()
	 * @method \Bitrix\Main\EO_User setUfSettingDate(\string $ufSettingDate)
	 * @method bool isUfSettingDateChanged()
	 * @method \string getUfTmAllowedDelta()
	 * @method \string remindActualUfTmAllowedDelta()
	 * @method \string requireUfTmAllowedDelta()
	 * @method bool hasUfTmAllowedDelta()
	 * @method bool isUfTmAllowedDeltaFilled()
	 * @method \Bitrix\Main\EO_User unsetUfTmAllowedDelta()
	 * @method \string fillUfTmAllowedDelta()
	 * @method \Bitrix\Main\EO_User setUfTmAllowedDelta(\string $ufTmAllowedDelta)
	 * @method bool isUfTmAllowedDeltaChanged()
	 */
	class EO_User {
		/* @var \Bitrix\Main\UserTable */
		static public $dataClass = '\Bitrix\Main\UserTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Main {
	/**
	 * EO_User_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string[] getUfDepartmentList()
	 * @method \string[] fillUfDepartment()
	 * @method \string[] getUfPhoneInnerList()
	 * @method \string[] fillUfPhoneInner()
	 * @method \string[] getUfUserCrmEntityList()
	 * @method \string[] fillUfUserCrmEntity()
	 * @method \string[] getUfImSearchList()
	 * @method \string[] fillUfImSearch()
	 * @method \string[] getUfConnectorMd5List()
	 * @method \string[] fillUfConnectorMd5()
	 * @method \boolean[] getUf1cList()
	 * @method \boolean[] fillUf1c()
	 * @method \string[] getUfInnList()
	 * @method \string[] fillUfInn()
	 * @method \string[] getUfDistrictList()
	 * @method \string[] fillUfDistrict()
	 * @method \string[] getUfSkypeList()
	 * @method \string[] fillUfSkype()
	 * @method \string[] getUfSkypeLinkList()
	 * @method \string[] fillUfSkypeLink()
	 * @method \string[] getUfZoomList()
	 * @method \string[] fillUfZoom()
	 * @method \string[] getUfTwitterList()
	 * @method \string[] fillUfTwitter()
	 * @method \string[] getUfFacebookList()
	 * @method \string[] fillUfFacebook()
	 * @method \string[] getUfLinkedinList()
	 * @method \string[] fillUfLinkedin()
	 * @method \string[] getUfXingList()
	 * @method \string[] fillUfXing()
	 * @method \string[] getUfWebSitesList()
	 * @method \string[] fillUfWebSites()
	 * @method \string[] getUfSkillsList()
	 * @method \string[] fillUfSkills()
	 * @method \string[] getUfInterestsList()
	 * @method \string[] fillUfInterests()
	 * @method \Bitrix\Main\Type\Date[] getUfEmploymentDateList()
	 * @method \Bitrix\Main\Type\Date[] fillUfEmploymentDate()
	 * @method \string[] getUfWorkBindingList()
	 * @method \string[] fillUfWorkBinding()
	 * @method \Bitrix\Main\Type\DateTime[] getUfBxdavexCalsyncList()
	 * @method \Bitrix\Main\Type\DateTime[] fillUfBxdavexCalsync()
	 * @method \int[] getUfTimemanList()
	 * @method \int[] fillUfTimeman()
	 * @method \string[] getUfTmMaxStartList()
	 * @method \string[] fillUfTmMaxStart()
	 * @method \string[] getUfTmMinFinishList()
	 * @method \string[] fillUfTmMinFinish()
	 * @method \string[] getUfTmMinDurationList()
	 * @method \string[] fillUfTmMinDuration()
	 * @method \int[] getUfTmReportReqList()
	 * @method \int[] fillUfTmReportReq()
	 * @method \string[] getUfTmReportTplList()
	 * @method \string[] fillUfTmReportTpl()
	 * @method \int[] getUfTmFreeList()
	 * @method \int[] fillUfTmFree()
	 * @method \string[] getUfTmTimeList()
	 * @method \string[] fillUfTmTime()
	 * @method \string[] getUfTmDayList()
	 * @method \string[] fillUfTmDay()
	 * @method \string[] getUfTmReportDateList()
	 * @method \string[] fillUfTmReportDate()
	 * @method \int[] getUfReportPeriodList()
	 * @method \int[] fillUfReportPeriod()
	 * @method \string[] getUfDelayTimeList()
	 * @method \string[] fillUfDelayTime()
	 * @method \string[] getUfLastReportDateList()
	 * @method \string[] fillUfLastReportDate()
	 * @method \string[] getUfSettingDateList()
	 * @method \string[] fillUfSettingDate()
	 * @method \string[] getUfTmAllowedDeltaList()
	 * @method \string[] fillUfTmAllowedDelta()
	 */
	class EO_User_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Main\UserTable */
		static public $dataClass = '\Bitrix\Main\UserTable';
	}
}
/* ORMENTITYANNOTATION:Bitrix\Socialnetwork\LogCommentTable */
namespace Bitrix\Socialnetwork {
	/**
	 * EO_LogComment
	 * @see \Bitrix\Socialnetwork\LogCommentTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getUfSonetComVer()
	 * @method \int remindActualUfSonetComVer()
	 * @method \int requireUfSonetComVer()
	 * @method bool hasUfSonetComVer()
	 * @method bool isUfSonetComVerFilled()
	 * @method \Bitrix\Socialnetwork\EO_LogComment unsetUfSonetComVer()
	 * @method \int fillUfSonetComVer()
	 * @method \Bitrix\Socialnetwork\EO_LogComment setUfSonetComVer(\int $ufSonetComVer)
	 * @method bool isUfSonetComVerChanged()
	 * @method \string getUfSonetComDoc()
	 * @method \string remindActualUfSonetComDoc()
	 * @method \string requireUfSonetComDoc()
	 * @method bool hasUfSonetComDoc()
	 * @method bool isUfSonetComDocFilled()
	 * @method \Bitrix\Socialnetwork\EO_LogComment unsetUfSonetComDoc()
	 * @method \string fillUfSonetComDoc()
	 * @method \Bitrix\Socialnetwork\EO_LogComment setUfSonetComDoc(\string[] $ufSonetComDoc)
	 * @method bool isUfSonetComDocChanged()
	 * @method \string getUfSonetComFile()
	 * @method \string remindActualUfSonetComFile()
	 * @method \string requireUfSonetComFile()
	 * @method bool hasUfSonetComFile()
	 * @method bool isUfSonetComFileFilled()
	 * @method \Bitrix\Socialnetwork\EO_LogComment unsetUfSonetComFile()
	 * @method \string fillUfSonetComFile()
	 * @method \Bitrix\Socialnetwork\EO_LogComment setUfSonetComFile(\string[] $ufSonetComFile)
	 * @method bool isUfSonetComFileChanged()
	 * @method \int getUfSonetComUrlPrv()
	 * @method \int remindActualUfSonetComUrlPrv()
	 * @method \int requireUfSonetComUrlPrv()
	 * @method bool hasUfSonetComUrlPrv()
	 * @method bool isUfSonetComUrlPrvFilled()
	 * @method \Bitrix\Socialnetwork\EO_LogComment unsetUfSonetComUrlPrv()
	 * @method \int fillUfSonetComUrlPrv()
	 * @method \Bitrix\Socialnetwork\EO_LogComment setUfSonetComUrlPrv(\int $ufSonetComUrlPrv)
	 * @method bool isUfSonetComUrlPrvChanged()
	 */
	class EO_LogComment {
		/* @var \Bitrix\Socialnetwork\LogCommentTable */
		static public $dataClass = '\Bitrix\Socialnetwork\LogCommentTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Socialnetwork {
	/**
	 * EO_LogComment_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getUfSonetComVerList()
	 * @method \int[] fillUfSonetComVer()
	 * @method \string[] getUfSonetComDocList()
	 * @method \string[] fillUfSonetComDoc()
	 * @method \string[] getUfSonetComFileList()
	 * @method \string[] fillUfSonetComFile()
	 * @method \int[] getUfSonetComUrlPrvList()
	 * @method \int[] fillUfSonetComUrlPrv()
	 */
	class EO_LogComment_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Socialnetwork\LogCommentTable */
		static public $dataClass = '\Bitrix\Socialnetwork\LogCommentTable';
	}
}
/* ORMENTITYANNOTATION:Bitrix\Socialnetwork\WorkgroupTable */
namespace Bitrix\Socialnetwork {
	/**
	 * GroupEntity
	 * @see \Bitrix\Socialnetwork\WorkgroupTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string getUfSgDept()
	 * @method \string remindActualUfSgDept()
	 * @method \string requireUfSgDept()
	 * @method bool hasUfSgDept()
	 * @method bool isUfSgDeptFilled()
	 * @method \Bitrix\Socialnetwork\Internals\Group\GroupEntity unsetUfSgDept()
	 * @method \string fillUfSgDept()
	 * @method \Bitrix\Socialnetwork\Internals\Group\GroupEntity setUfSgDept(\string[] $ufSgDept)
	 * @method bool isUfSgDeptChanged()
	 */
	class EO_Workgroup {
		/* @var \Bitrix\Socialnetwork\WorkgroupTable */
		static public $dataClass = '\Bitrix\Socialnetwork\WorkgroupTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Socialnetwork {
	/**
	 * GroupEntityCollection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string[] getUfSgDeptList()
	 * @method \string[] fillUfSgDept()
	 */
	class EO_Workgroup_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Socialnetwork\WorkgroupTable */
		static public $dataClass = '\Bitrix\Socialnetwork\WorkgroupTable';
	}
}
/* ORMENTITYANNOTATION:Bitrix\Socialnetwork\LogTable */
namespace Bitrix\Socialnetwork {
	/**
	 * Log
	 * @see \Bitrix\Socialnetwork\LogTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string getUfSonetLogDoc()
	 * @method \string remindActualUfSonetLogDoc()
	 * @method \string requireUfSonetLogDoc()
	 * @method bool hasUfSonetLogDoc()
	 * @method bool isUfSonetLogDocFilled()
	 * @method \Bitrix\Socialnetwork\Internals\Log\Log unsetUfSonetLogDoc()
	 * @method \string fillUfSonetLogDoc()
	 * @method \Bitrix\Socialnetwork\Internals\Log\Log setUfSonetLogDoc(\string[] $ufSonetLogDoc)
	 * @method bool isUfSonetLogDocChanged()
	 * @method \string getUfSonetLogFile()
	 * @method \string remindActualUfSonetLogFile()
	 * @method \string requireUfSonetLogFile()
	 * @method bool hasUfSonetLogFile()
	 * @method bool isUfSonetLogFileFilled()
	 * @method \Bitrix\Socialnetwork\Internals\Log\Log unsetUfSonetLogFile()
	 * @method \string fillUfSonetLogFile()
	 * @method \Bitrix\Socialnetwork\Internals\Log\Log setUfSonetLogFile(\string[] $ufSonetLogFile)
	 * @method bool isUfSonetLogFileChanged()
	 * @method \int getUfSonetLogUrlPrv()
	 * @method \int remindActualUfSonetLogUrlPrv()
	 * @method \int requireUfSonetLogUrlPrv()
	 * @method bool hasUfSonetLogUrlPrv()
	 * @method bool isUfSonetLogUrlPrvFilled()
	 * @method \Bitrix\Socialnetwork\Internals\Log\Log unsetUfSonetLogUrlPrv()
	 * @method \int fillUfSonetLogUrlPrv()
	 * @method \Bitrix\Socialnetwork\Internals\Log\Log setUfSonetLogUrlPrv(\int $ufSonetLogUrlPrv)
	 * @method bool isUfSonetLogUrlPrvChanged()
	 */
	class EO_Log {
		/* @var \Bitrix\Socialnetwork\LogTable */
		static public $dataClass = '\Bitrix\Socialnetwork\LogTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Socialnetwork {
	/**
	 * LogCollection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string[] getUfSonetLogDocList()
	 * @method \string[] fillUfSonetLogDoc()
	 * @method \string[] getUfSonetLogFileList()
	 * @method \string[] fillUfSonetLogFile()
	 * @method \int[] getUfSonetLogUrlPrvList()
	 * @method \int[] fillUfSonetLogUrlPrv()
	 */
	class EO_Log_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Socialnetwork\LogTable */
		static public $dataClass = '\Bitrix\Socialnetwork\LogTable';
	}
}
/* ORMENTITYANNOTATION:Bitrix\Tasks\Integration\Report\Internals\TaskTable */
namespace Bitrix\Tasks\Integration\Report\Internals {
	/**
	 * TaskObject
	 * @see \Bitrix\Tasks\Integration\Report\Internals\TaskTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string getUfCrmTask()
	 * @method \string remindActualUfCrmTask()
	 * @method \string requireUfCrmTask()
	 * @method bool hasUfCrmTask()
	 * @method bool isUfCrmTaskFilled()
	 * @method \Bitrix\Tasks\Internals\TaskObject unsetUfCrmTask()
	 * @method \string fillUfCrmTask()
	 * @method \Bitrix\Tasks\Internals\TaskObject setUfCrmTask(\string[] $ufCrmTask)
	 * @method bool isUfCrmTaskChanged()
	 * @method \string getUfTaskWebdavFiles()
	 * @method \string remindActualUfTaskWebdavFiles()
	 * @method \string requireUfTaskWebdavFiles()
	 * @method bool hasUfTaskWebdavFiles()
	 * @method bool isUfTaskWebdavFilesFilled()
	 * @method \Bitrix\Tasks\Internals\TaskObject unsetUfTaskWebdavFiles()
	 * @method \string fillUfTaskWebdavFiles()
	 * @method \Bitrix\Tasks\Internals\TaskObject setUfTaskWebdavFiles(\string[] $ufTaskWebdavFiles)
	 * @method bool isUfTaskWebdavFilesChanged()
	 * @method \int getUfMailMessage()
	 * @method \int remindActualUfMailMessage()
	 * @method \int requireUfMailMessage()
	 * @method bool hasUfMailMessage()
	 * @method bool isUfMailMessageFilled()
	 * @method \Bitrix\Tasks\Internals\TaskObject unsetUfMailMessage()
	 * @method \int fillUfMailMessage()
	 * @method \Bitrix\Tasks\Internals\TaskObject setUfMailMessage(\int $ufMailMessage)
	 * @method bool isUfMailMessageChanged()
	 */
	class EO_Task {
		/* @var \Bitrix\Tasks\Integration\Report\Internals\TaskTable */
		static public $dataClass = '\Bitrix\Tasks\Integration\Report\Internals\TaskTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Tasks\Integration\Report\Internals {
	/**
	 * TaskCollection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string[] getUfCrmTaskList()
	 * @method \string[] fillUfCrmTask()
	 * @method \string[] getUfTaskWebdavFilesList()
	 * @method \string[] fillUfTaskWebdavFiles()
	 * @method \int[] getUfMailMessageList()
	 * @method \int[] fillUfMailMessage()
	 */
	class EO_Task_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Tasks\Integration\Report\Internals\TaskTable */
		static public $dataClass = '\Bitrix\Tasks\Integration\Report\Internals\TaskTable';
	}
}
/* ORMENTITYANNOTATION:Bitrix\Tasks\Internals\TaskTable */
namespace Bitrix\Tasks\Internals {
	/**
	 * TaskObject
	 * @see \Bitrix\Tasks\Internals\TaskTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string getUfCrmTask()
	 * @method \string remindActualUfCrmTask()
	 * @method \string requireUfCrmTask()
	 * @method bool hasUfCrmTask()
	 * @method bool isUfCrmTaskFilled()
	 * @method \Bitrix\Tasks\Internals\TaskObject unsetUfCrmTask()
	 * @method \string fillUfCrmTask()
	 * @method \Bitrix\Tasks\Internals\TaskObject setUfCrmTask(\string[] $ufCrmTask)
	 * @method bool isUfCrmTaskChanged()
	 * @method \string getUfTaskWebdavFiles()
	 * @method \string remindActualUfTaskWebdavFiles()
	 * @method \string requireUfTaskWebdavFiles()
	 * @method bool hasUfTaskWebdavFiles()
	 * @method bool isUfTaskWebdavFilesFilled()
	 * @method \Bitrix\Tasks\Internals\TaskObject unsetUfTaskWebdavFiles()
	 * @method \string fillUfTaskWebdavFiles()
	 * @method \Bitrix\Tasks\Internals\TaskObject setUfTaskWebdavFiles(\string[] $ufTaskWebdavFiles)
	 * @method bool isUfTaskWebdavFilesChanged()
	 * @method \int getUfMailMessage()
	 * @method \int remindActualUfMailMessage()
	 * @method \int requireUfMailMessage()
	 * @method bool hasUfMailMessage()
	 * @method bool isUfMailMessageFilled()
	 * @method \Bitrix\Tasks\Internals\TaskObject unsetUfMailMessage()
	 * @method \int fillUfMailMessage()
	 * @method \Bitrix\Tasks\Internals\TaskObject setUfMailMessage(\int $ufMailMessage)
	 * @method bool isUfMailMessageChanged()
	 */
	class EO_Task {
		/* @var \Bitrix\Tasks\Internals\TaskTable */
		static public $dataClass = '\Bitrix\Tasks\Internals\TaskTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Tasks\Internals {
	/**
	 * TaskCollection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string[] getUfCrmTaskList()
	 * @method \string[] fillUfCrmTask()
	 * @method \string[] getUfTaskWebdavFilesList()
	 * @method \string[] fillUfTaskWebdavFiles()
	 * @method \int[] getUfMailMessageList()
	 * @method \int[] fillUfMailMessage()
	 */
	class EO_Task_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Tasks\Internals\TaskTable */
		static public $dataClass = '\Bitrix\Tasks\Internals\TaskTable';
	}
}
/* ORMENTITYANNOTATION:Bitrix\Tasks\Internals\Task\TemplateTable */
namespace Bitrix\Tasks\Internals\Task {
	/**
	 * TemplateObject
	 * @see \Bitrix\Tasks\Internals\Task\TemplateTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string getUfCrmTask()
	 * @method \string remindActualUfCrmTask()
	 * @method \string requireUfCrmTask()
	 * @method bool hasUfCrmTask()
	 * @method bool isUfCrmTaskFilled()
	 * @method \Bitrix\Tasks\Internals\Task\Template\TemplateObject unsetUfCrmTask()
	 * @method \string fillUfCrmTask()
	 * @method \Bitrix\Tasks\Internals\Task\Template\TemplateObject setUfCrmTask(\string[] $ufCrmTask)
	 * @method bool isUfCrmTaskChanged()
	 * @method \string getUfTaskWebdavFiles()
	 * @method \string remindActualUfTaskWebdavFiles()
	 * @method \string requireUfTaskWebdavFiles()
	 * @method bool hasUfTaskWebdavFiles()
	 * @method bool isUfTaskWebdavFilesFilled()
	 * @method \Bitrix\Tasks\Internals\Task\Template\TemplateObject unsetUfTaskWebdavFiles()
	 * @method \string fillUfTaskWebdavFiles()
	 * @method \Bitrix\Tasks\Internals\Task\Template\TemplateObject setUfTaskWebdavFiles(\string[] $ufTaskWebdavFiles)
	 * @method bool isUfTaskWebdavFilesChanged()
	 */
	class EO_Template {
		/* @var \Bitrix\Tasks\Internals\Task\TemplateTable */
		static public $dataClass = '\Bitrix\Tasks\Internals\Task\TemplateTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Tasks\Internals\Task {
	/**
	 * TemplateCollection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string[] getUfCrmTaskList()
	 * @method \string[] fillUfCrmTask()
	 * @method \string[] getUfTaskWebdavFilesList()
	 * @method \string[] fillUfTaskWebdavFiles()
	 */
	class EO_Template_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Tasks\Internals\Task\TemplateTable */
		static public $dataClass = '\Bitrix\Tasks\Internals\Task\TemplateTable';
	}
}
/* ORMENTITYANNOTATION:Bitrix\Tasks\Internals\Task\Template\CheckListTable */
namespace Bitrix\Tasks\Internals\Task\Template {
	/**
	 * EO_CheckList
	 * @see \Bitrix\Tasks\Internals\Task\Template\CheckListTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string getUfChecklistFiles()
	 * @method \string remindActualUfChecklistFiles()
	 * @method \string requireUfChecklistFiles()
	 * @method bool hasUfChecklistFiles()
	 * @method bool isUfChecklistFilesFilled()
	 * @method \Bitrix\Tasks\Internals\Task\Template\EO_CheckList unsetUfChecklistFiles()
	 * @method \string fillUfChecklistFiles()
	 * @method \Bitrix\Tasks\Internals\Task\Template\EO_CheckList setUfChecklistFiles(\string[] $ufChecklistFiles)
	 * @method bool isUfChecklistFilesChanged()
	 */
	class EO_CheckList {
		/* @var \Bitrix\Tasks\Internals\Task\Template\CheckListTable */
		static public $dataClass = '\Bitrix\Tasks\Internals\Task\Template\CheckListTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Tasks\Internals\Task\Template {
	/**
	 * EO_CheckList_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string[] getUfChecklistFilesList()
	 * @method \string[] fillUfChecklistFiles()
	 */
	class EO_CheckList_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Tasks\Internals\Task\Template\CheckListTable */
		static public $dataClass = '\Bitrix\Tasks\Internals\Task\Template\CheckListTable';
	}
}
/* ORMENTITYANNOTATION:Bitrix\Tasks\Internals\Task\Result\ResultTable */
namespace Bitrix\Tasks\Internals\Task\Result {
	/**
	 * Result
	 * @see \Bitrix\Tasks\Internals\Task\Result\ResultTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string getUfResultFiles()
	 * @method \string remindActualUfResultFiles()
	 * @method \string requireUfResultFiles()
	 * @method bool hasUfResultFiles()
	 * @method bool isUfResultFilesFilled()
	 * @method \Bitrix\Tasks\Internals\Task\Result\Result unsetUfResultFiles()
	 * @method \string fillUfResultFiles()
	 * @method \Bitrix\Tasks\Internals\Task\Result\Result setUfResultFiles(\string[] $ufResultFiles)
	 * @method bool isUfResultFilesChanged()
	 * @method \int getUfResultPreview()
	 * @method \int remindActualUfResultPreview()
	 * @method \int requireUfResultPreview()
	 * @method bool hasUfResultPreview()
	 * @method bool isUfResultPreviewFilled()
	 * @method \Bitrix\Tasks\Internals\Task\Result\Result unsetUfResultPreview()
	 * @method \int fillUfResultPreview()
	 * @method \Bitrix\Tasks\Internals\Task\Result\Result setUfResultPreview(\int $ufResultPreview)
	 * @method bool isUfResultPreviewChanged()
	 */
	class EO_Result {
		/* @var \Bitrix\Tasks\Internals\Task\Result\ResultTable */
		static public $dataClass = '\Bitrix\Tasks\Internals\Task\Result\ResultTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Tasks\Internals\Task\Result {
	/**
	 * EO_Result_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string[] getUfResultFilesList()
	 * @method \string[] fillUfResultFiles()
	 * @method \int[] getUfResultPreviewList()
	 * @method \int[] fillUfResultPreview()
	 */
	class EO_Result_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Tasks\Internals\Task\Result\ResultTable */
		static public $dataClass = '\Bitrix\Tasks\Internals\Task\Result\ResultTable';
	}
}
/* ORMENTITYANNOTATION:Bitrix\Tasks\Internals\Task\CheckListTable */
namespace Bitrix\Tasks\Internals\Task {
	/**
	 * EO_CheckList
	 * @see \Bitrix\Tasks\Internals\Task\CheckListTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string getUfChecklistFiles()
	 * @method \string remindActualUfChecklistFiles()
	 * @method \string requireUfChecklistFiles()
	 * @method bool hasUfChecklistFiles()
	 * @method bool isUfChecklistFilesFilled()
	 * @method \Bitrix\Tasks\Internals\Task\EO_CheckList unsetUfChecklistFiles()
	 * @method \string fillUfChecklistFiles()
	 * @method \Bitrix\Tasks\Internals\Task\EO_CheckList setUfChecklistFiles(\string[] $ufChecklistFiles)
	 * @method bool isUfChecklistFilesChanged()
	 */
	class EO_CheckList {
		/* @var \Bitrix\Tasks\Internals\Task\CheckListTable */
		static public $dataClass = '\Bitrix\Tasks\Internals\Task\CheckListTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Tasks\Internals\Task {
	/**
	 * EO_CheckList_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string[] getUfChecklistFilesList()
	 * @method \string[] fillUfChecklistFiles()
	 */
	class EO_CheckList_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Tasks\Internals\Task\CheckListTable */
		static public $dataClass = '\Bitrix\Tasks\Internals\Task\CheckListTable';
	}
}
/* ORMENTITYANNOTATION:Bitrix\Timeman\Model\User\UserTable */
namespace Bitrix\Timeman\Model\User {
	/**
	 * User
	 * @see \Bitrix\Timeman\Model\User\UserTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string getUfDepartment()
	 * @method \string remindActualUfDepartment()
	 * @method \string requireUfDepartment()
	 * @method bool hasUfDepartment()
	 * @method bool isUfDepartmentFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfDepartment()
	 * @method \string fillUfDepartment()
	 * @method \Bitrix\Timeman\Model\User\User setUfDepartment(\string[] $ufDepartment)
	 * @method bool isUfDepartmentChanged()
	 * @method \string getUfPhoneInner()
	 * @method \string remindActualUfPhoneInner()
	 * @method \string requireUfPhoneInner()
	 * @method bool hasUfPhoneInner()
	 * @method bool isUfPhoneInnerFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfPhoneInner()
	 * @method \string fillUfPhoneInner()
	 * @method \Bitrix\Timeman\Model\User\User setUfPhoneInner(\string $ufPhoneInner)
	 * @method bool isUfPhoneInnerChanged()
	 * @method \string getUfUserCrmEntity()
	 * @method \string remindActualUfUserCrmEntity()
	 * @method \string requireUfUserCrmEntity()
	 * @method bool hasUfUserCrmEntity()
	 * @method bool isUfUserCrmEntityFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfUserCrmEntity()
	 * @method \string fillUfUserCrmEntity()
	 * @method \Bitrix\Timeman\Model\User\User setUfUserCrmEntity(\string $ufUserCrmEntity)
	 * @method bool isUfUserCrmEntityChanged()
	 * @method \string getUfImSearch()
	 * @method \string remindActualUfImSearch()
	 * @method \string requireUfImSearch()
	 * @method bool hasUfImSearch()
	 * @method bool isUfImSearchFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfImSearch()
	 * @method \string fillUfImSearch()
	 * @method \Bitrix\Timeman\Model\User\User setUfImSearch(\string $ufImSearch)
	 * @method bool isUfImSearchChanged()
	 * @method \string getUfConnectorMd5()
	 * @method \string remindActualUfConnectorMd5()
	 * @method \string requireUfConnectorMd5()
	 * @method bool hasUfConnectorMd5()
	 * @method bool isUfConnectorMd5Filled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfConnectorMd5()
	 * @method \string fillUfConnectorMd5()
	 * @method \Bitrix\Timeman\Model\User\User setUfConnectorMd5(\string $ufConnectorMd5)
	 * @method bool isUfConnectorMd5Changed()
	 * @method \boolean getUf1c()
	 * @method \boolean remindActualUf1c()
	 * @method \boolean requireUf1c()
	 * @method bool hasUf1c()
	 * @method bool isUf1cFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUf1c()
	 * @method \boolean fillUf1c()
	 * @method \Bitrix\Timeman\Model\User\User setUf1c(\boolean $uf1c)
	 * @method bool isUf1cChanged()
	 * @method \string getUfInn()
	 * @method \string remindActualUfInn()
	 * @method \string requireUfInn()
	 * @method bool hasUfInn()
	 * @method bool isUfInnFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfInn()
	 * @method \string fillUfInn()
	 * @method \Bitrix\Timeman\Model\User\User setUfInn(\string $ufInn)
	 * @method bool isUfInnChanged()
	 * @method \string getUfDistrict()
	 * @method \string remindActualUfDistrict()
	 * @method \string requireUfDistrict()
	 * @method bool hasUfDistrict()
	 * @method bool isUfDistrictFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfDistrict()
	 * @method \string fillUfDistrict()
	 * @method \Bitrix\Timeman\Model\User\User setUfDistrict(\string $ufDistrict)
	 * @method bool isUfDistrictChanged()
	 * @method \string getUfSkype()
	 * @method \string remindActualUfSkype()
	 * @method \string requireUfSkype()
	 * @method bool hasUfSkype()
	 * @method bool isUfSkypeFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfSkype()
	 * @method \string fillUfSkype()
	 * @method \Bitrix\Timeman\Model\User\User setUfSkype(\string $ufSkype)
	 * @method bool isUfSkypeChanged()
	 * @method \string getUfSkypeLink()
	 * @method \string remindActualUfSkypeLink()
	 * @method \string requireUfSkypeLink()
	 * @method bool hasUfSkypeLink()
	 * @method bool isUfSkypeLinkFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfSkypeLink()
	 * @method \string fillUfSkypeLink()
	 * @method \Bitrix\Timeman\Model\User\User setUfSkypeLink(\string $ufSkypeLink)
	 * @method bool isUfSkypeLinkChanged()
	 * @method \string getUfZoom()
	 * @method \string remindActualUfZoom()
	 * @method \string requireUfZoom()
	 * @method bool hasUfZoom()
	 * @method bool isUfZoomFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfZoom()
	 * @method \string fillUfZoom()
	 * @method \Bitrix\Timeman\Model\User\User setUfZoom(\string $ufZoom)
	 * @method bool isUfZoomChanged()
	 * @method \string getUfTwitter()
	 * @method \string remindActualUfTwitter()
	 * @method \string requireUfTwitter()
	 * @method bool hasUfTwitter()
	 * @method bool isUfTwitterFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfTwitter()
	 * @method \string fillUfTwitter()
	 * @method \Bitrix\Timeman\Model\User\User setUfTwitter(\string $ufTwitter)
	 * @method bool isUfTwitterChanged()
	 * @method \string getUfFacebook()
	 * @method \string remindActualUfFacebook()
	 * @method \string requireUfFacebook()
	 * @method bool hasUfFacebook()
	 * @method bool isUfFacebookFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfFacebook()
	 * @method \string fillUfFacebook()
	 * @method \Bitrix\Timeman\Model\User\User setUfFacebook(\string $ufFacebook)
	 * @method bool isUfFacebookChanged()
	 * @method \string getUfLinkedin()
	 * @method \string remindActualUfLinkedin()
	 * @method \string requireUfLinkedin()
	 * @method bool hasUfLinkedin()
	 * @method bool isUfLinkedinFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfLinkedin()
	 * @method \string fillUfLinkedin()
	 * @method \Bitrix\Timeman\Model\User\User setUfLinkedin(\string $ufLinkedin)
	 * @method bool isUfLinkedinChanged()
	 * @method \string getUfXing()
	 * @method \string remindActualUfXing()
	 * @method \string requireUfXing()
	 * @method bool hasUfXing()
	 * @method bool isUfXingFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfXing()
	 * @method \string fillUfXing()
	 * @method \Bitrix\Timeman\Model\User\User setUfXing(\string $ufXing)
	 * @method bool isUfXingChanged()
	 * @method \string getUfWebSites()
	 * @method \string remindActualUfWebSites()
	 * @method \string requireUfWebSites()
	 * @method bool hasUfWebSites()
	 * @method bool isUfWebSitesFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfWebSites()
	 * @method \string fillUfWebSites()
	 * @method \Bitrix\Timeman\Model\User\User setUfWebSites(\string $ufWebSites)
	 * @method bool isUfWebSitesChanged()
	 * @method \string getUfSkills()
	 * @method \string remindActualUfSkills()
	 * @method \string requireUfSkills()
	 * @method bool hasUfSkills()
	 * @method bool isUfSkillsFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfSkills()
	 * @method \string fillUfSkills()
	 * @method \Bitrix\Timeman\Model\User\User setUfSkills(\string $ufSkills)
	 * @method bool isUfSkillsChanged()
	 * @method \string getUfInterests()
	 * @method \string remindActualUfInterests()
	 * @method \string requireUfInterests()
	 * @method bool hasUfInterests()
	 * @method bool isUfInterestsFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfInterests()
	 * @method \string fillUfInterests()
	 * @method \Bitrix\Timeman\Model\User\User setUfInterests(\string $ufInterests)
	 * @method bool isUfInterestsChanged()
	 * @method \Bitrix\Main\Type\Date getUfEmploymentDate()
	 * @method \Bitrix\Main\Type\Date remindActualUfEmploymentDate()
	 * @method \Bitrix\Main\Type\Date requireUfEmploymentDate()
	 * @method bool hasUfEmploymentDate()
	 * @method bool isUfEmploymentDateFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfEmploymentDate()
	 * @method \Bitrix\Main\Type\Date fillUfEmploymentDate()
	 * @method \Bitrix\Timeman\Model\User\User setUfEmploymentDate(\Bitrix\Main\Type\Date $ufEmploymentDate)
	 * @method bool isUfEmploymentDateChanged()
	 * @method \string getUfWorkBinding()
	 * @method \string remindActualUfWorkBinding()
	 * @method \string requireUfWorkBinding()
	 * @method bool hasUfWorkBinding()
	 * @method bool isUfWorkBindingFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfWorkBinding()
	 * @method \string fillUfWorkBinding()
	 * @method \Bitrix\Timeman\Model\User\User setUfWorkBinding(\string $ufWorkBinding)
	 * @method bool isUfWorkBindingChanged()
	 * @method \Bitrix\Main\Type\DateTime getUfBxdavexCalsync()
	 * @method \Bitrix\Main\Type\DateTime remindActualUfBxdavexCalsync()
	 * @method \Bitrix\Main\Type\DateTime requireUfBxdavexCalsync()
	 * @method bool hasUfBxdavexCalsync()
	 * @method bool isUfBxdavexCalsyncFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfBxdavexCalsync()
	 * @method \Bitrix\Main\Type\DateTime fillUfBxdavexCalsync()
	 * @method \Bitrix\Timeman\Model\User\User setUfBxdavexCalsync(\Bitrix\Main\Type\DateTime $ufBxdavexCalsync)
	 * @method bool isUfBxdavexCalsyncChanged()
	 * @method \int getUfTimeman()
	 * @method \int remindActualUfTimeman()
	 * @method \int requireUfTimeman()
	 * @method bool hasUfTimeman()
	 * @method bool isUfTimemanFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfTimeman()
	 * @method \int fillUfTimeman()
	 * @method \Bitrix\Timeman\Model\User\User setUfTimeman(\int $ufTimeman)
	 * @method bool isUfTimemanChanged()
	 * @method \string getUfTmMaxStart()
	 * @method \string remindActualUfTmMaxStart()
	 * @method \string requireUfTmMaxStart()
	 * @method bool hasUfTmMaxStart()
	 * @method bool isUfTmMaxStartFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfTmMaxStart()
	 * @method \string fillUfTmMaxStart()
	 * @method \Bitrix\Timeman\Model\User\User setUfTmMaxStart(\string $ufTmMaxStart)
	 * @method bool isUfTmMaxStartChanged()
	 * @method \string getUfTmMinFinish()
	 * @method \string remindActualUfTmMinFinish()
	 * @method \string requireUfTmMinFinish()
	 * @method bool hasUfTmMinFinish()
	 * @method bool isUfTmMinFinishFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfTmMinFinish()
	 * @method \string fillUfTmMinFinish()
	 * @method \Bitrix\Timeman\Model\User\User setUfTmMinFinish(\string $ufTmMinFinish)
	 * @method bool isUfTmMinFinishChanged()
	 * @method \string getUfTmMinDuration()
	 * @method \string remindActualUfTmMinDuration()
	 * @method \string requireUfTmMinDuration()
	 * @method bool hasUfTmMinDuration()
	 * @method bool isUfTmMinDurationFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfTmMinDuration()
	 * @method \string fillUfTmMinDuration()
	 * @method \Bitrix\Timeman\Model\User\User setUfTmMinDuration(\string $ufTmMinDuration)
	 * @method bool isUfTmMinDurationChanged()
	 * @method \int getUfTmReportReq()
	 * @method \int remindActualUfTmReportReq()
	 * @method \int requireUfTmReportReq()
	 * @method bool hasUfTmReportReq()
	 * @method bool isUfTmReportReqFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfTmReportReq()
	 * @method \int fillUfTmReportReq()
	 * @method \Bitrix\Timeman\Model\User\User setUfTmReportReq(\int $ufTmReportReq)
	 * @method bool isUfTmReportReqChanged()
	 * @method \string getUfTmReportTpl()
	 * @method \string remindActualUfTmReportTpl()
	 * @method \string requireUfTmReportTpl()
	 * @method bool hasUfTmReportTpl()
	 * @method bool isUfTmReportTplFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfTmReportTpl()
	 * @method \string fillUfTmReportTpl()
	 * @method \Bitrix\Timeman\Model\User\User setUfTmReportTpl(\string[] $ufTmReportTpl)
	 * @method bool isUfTmReportTplChanged()
	 * @method \int getUfTmFree()
	 * @method \int remindActualUfTmFree()
	 * @method \int requireUfTmFree()
	 * @method bool hasUfTmFree()
	 * @method bool isUfTmFreeFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfTmFree()
	 * @method \int fillUfTmFree()
	 * @method \Bitrix\Timeman\Model\User\User setUfTmFree(\int $ufTmFree)
	 * @method bool isUfTmFreeChanged()
	 * @method \string getUfTmTime()
	 * @method \string remindActualUfTmTime()
	 * @method \string requireUfTmTime()
	 * @method bool hasUfTmTime()
	 * @method bool isUfTmTimeFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfTmTime()
	 * @method \string fillUfTmTime()
	 * @method \Bitrix\Timeman\Model\User\User setUfTmTime(\string $ufTmTime)
	 * @method bool isUfTmTimeChanged()
	 * @method \string getUfTmDay()
	 * @method \string remindActualUfTmDay()
	 * @method \string requireUfTmDay()
	 * @method bool hasUfTmDay()
	 * @method bool isUfTmDayFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfTmDay()
	 * @method \string fillUfTmDay()
	 * @method \Bitrix\Timeman\Model\User\User setUfTmDay(\string $ufTmDay)
	 * @method bool isUfTmDayChanged()
	 * @method \string getUfTmReportDate()
	 * @method \string remindActualUfTmReportDate()
	 * @method \string requireUfTmReportDate()
	 * @method bool hasUfTmReportDate()
	 * @method bool isUfTmReportDateFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfTmReportDate()
	 * @method \string fillUfTmReportDate()
	 * @method \Bitrix\Timeman\Model\User\User setUfTmReportDate(\string $ufTmReportDate)
	 * @method bool isUfTmReportDateChanged()
	 * @method \int getUfReportPeriod()
	 * @method \int remindActualUfReportPeriod()
	 * @method \int requireUfReportPeriod()
	 * @method bool hasUfReportPeriod()
	 * @method bool isUfReportPeriodFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfReportPeriod()
	 * @method \int fillUfReportPeriod()
	 * @method \Bitrix\Timeman\Model\User\User setUfReportPeriod(\int $ufReportPeriod)
	 * @method bool isUfReportPeriodChanged()
	 * @method \string getUfDelayTime()
	 * @method \string remindActualUfDelayTime()
	 * @method \string requireUfDelayTime()
	 * @method bool hasUfDelayTime()
	 * @method bool isUfDelayTimeFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfDelayTime()
	 * @method \string fillUfDelayTime()
	 * @method \Bitrix\Timeman\Model\User\User setUfDelayTime(\string $ufDelayTime)
	 * @method bool isUfDelayTimeChanged()
	 * @method \string getUfLastReportDate()
	 * @method \string remindActualUfLastReportDate()
	 * @method \string requireUfLastReportDate()
	 * @method bool hasUfLastReportDate()
	 * @method bool isUfLastReportDateFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfLastReportDate()
	 * @method \string fillUfLastReportDate()
	 * @method \Bitrix\Timeman\Model\User\User setUfLastReportDate(\string $ufLastReportDate)
	 * @method bool isUfLastReportDateChanged()
	 * @method \string getUfSettingDate()
	 * @method \string remindActualUfSettingDate()
	 * @method \string requireUfSettingDate()
	 * @method bool hasUfSettingDate()
	 * @method bool isUfSettingDateFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfSettingDate()
	 * @method \string fillUfSettingDate()
	 * @method \Bitrix\Timeman\Model\User\User setUfSettingDate(\string $ufSettingDate)
	 * @method bool isUfSettingDateChanged()
	 * @method \string getUfTmAllowedDelta()
	 * @method \string remindActualUfTmAllowedDelta()
	 * @method \string requireUfTmAllowedDelta()
	 * @method bool hasUfTmAllowedDelta()
	 * @method bool isUfTmAllowedDeltaFilled()
	 * @method \Bitrix\Timeman\Model\User\User unsetUfTmAllowedDelta()
	 * @method \string fillUfTmAllowedDelta()
	 * @method \Bitrix\Timeman\Model\User\User setUfTmAllowedDelta(\string $ufTmAllowedDelta)
	 * @method bool isUfTmAllowedDeltaChanged()
	 */
	class EO_User {
		/* @var \Bitrix\Timeman\Model\User\UserTable */
		static public $dataClass = '\Bitrix\Timeman\Model\User\UserTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Timeman\Model\User {
	/**
	 * UserCollection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string[] getUfDepartmentList()
	 * @method \string[] fillUfDepartment()
	 * @method \string[] getUfPhoneInnerList()
	 * @method \string[] fillUfPhoneInner()
	 * @method \string[] getUfUserCrmEntityList()
	 * @method \string[] fillUfUserCrmEntity()
	 * @method \string[] getUfImSearchList()
	 * @method \string[] fillUfImSearch()
	 * @method \string[] getUfConnectorMd5List()
	 * @method \string[] fillUfConnectorMd5()
	 * @method \boolean[] getUf1cList()
	 * @method \boolean[] fillUf1c()
	 * @method \string[] getUfInnList()
	 * @method \string[] fillUfInn()
	 * @method \string[] getUfDistrictList()
	 * @method \string[] fillUfDistrict()
	 * @method \string[] getUfSkypeList()
	 * @method \string[] fillUfSkype()
	 * @method \string[] getUfSkypeLinkList()
	 * @method \string[] fillUfSkypeLink()
	 * @method \string[] getUfZoomList()
	 * @method \string[] fillUfZoom()
	 * @method \string[] getUfTwitterList()
	 * @method \string[] fillUfTwitter()
	 * @method \string[] getUfFacebookList()
	 * @method \string[] fillUfFacebook()
	 * @method \string[] getUfLinkedinList()
	 * @method \string[] fillUfLinkedin()
	 * @method \string[] getUfXingList()
	 * @method \string[] fillUfXing()
	 * @method \string[] getUfWebSitesList()
	 * @method \string[] fillUfWebSites()
	 * @method \string[] getUfSkillsList()
	 * @method \string[] fillUfSkills()
	 * @method \string[] getUfInterestsList()
	 * @method \string[] fillUfInterests()
	 * @method \Bitrix\Main\Type\Date[] getUfEmploymentDateList()
	 * @method \Bitrix\Main\Type\Date[] fillUfEmploymentDate()
	 * @method \string[] getUfWorkBindingList()
	 * @method \string[] fillUfWorkBinding()
	 * @method \Bitrix\Main\Type\DateTime[] getUfBxdavexCalsyncList()
	 * @method \Bitrix\Main\Type\DateTime[] fillUfBxdavexCalsync()
	 * @method \int[] getUfTimemanList()
	 * @method \int[] fillUfTimeman()
	 * @method \string[] getUfTmMaxStartList()
	 * @method \string[] fillUfTmMaxStart()
	 * @method \string[] getUfTmMinFinishList()
	 * @method \string[] fillUfTmMinFinish()
	 * @method \string[] getUfTmMinDurationList()
	 * @method \string[] fillUfTmMinDuration()
	 * @method \int[] getUfTmReportReqList()
	 * @method \int[] fillUfTmReportReq()
	 * @method \string[] getUfTmReportTplList()
	 * @method \string[] fillUfTmReportTpl()
	 * @method \int[] getUfTmFreeList()
	 * @method \int[] fillUfTmFree()
	 * @method \string[] getUfTmTimeList()
	 * @method \string[] fillUfTmTime()
	 * @method \string[] getUfTmDayList()
	 * @method \string[] fillUfTmDay()
	 * @method \string[] getUfTmReportDateList()
	 * @method \string[] fillUfTmReportDate()
	 * @method \int[] getUfReportPeriodList()
	 * @method \int[] fillUfReportPeriod()
	 * @method \string[] getUfDelayTimeList()
	 * @method \string[] fillUfDelayTime()
	 * @method \string[] getUfLastReportDateList()
	 * @method \string[] fillUfLastReportDate()
	 * @method \string[] getUfSettingDateList()
	 * @method \string[] fillUfSettingDate()
	 * @method \string[] getUfTmAllowedDeltaList()
	 * @method \string[] fillUfTmAllowedDelta()
	 */
	class EO_User_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Timeman\Model\User\UserTable */
		static public $dataClass = '\Bitrix\Timeman\Model\User\UserTable';
	}
}