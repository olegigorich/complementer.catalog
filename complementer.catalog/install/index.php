<?php

use Complementer\Catalog\Service\ReferenceManager;
use Complementer\Catalog\Service\BrandReference;
use Complementer\Catalog\Service\ModelReference;
use Complementer\Catalog\Service\ProductReference;
use Complementer\Catalog\Service\OptionReference;
use Complementer\Catalog\Service\ProductOptionReference;
use Complementer\Catalog\Generator\CatalogGenerator;

use Bitrix\Main\IO\Path;
use Bitrix\Main\Loader;
use Bitrix\Main\LoaderException;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ModuleManager;
use Bitrix\Main\Application;

defined('B_PROLOG_INCLUDED') || die;

final class complementer_catalog extends CModule
{

    public function __construct(
        public readonly int $defCountBrands = 2,
        public readonly int $defCountModels = 2,
        public readonly int $defCountProducts = 6,
        public readonly int $maxCountBrands = 5,
        public readonly int $maxCountModels = 6,
        public readonly int $maxCountProducts = 100
        )
    {
        $this->MODULE_ID = 'complementer.catalog';
        $this->MODULE_NAME = Loc::getMessage('COMPLEMENTER_CATALOG_NAME');
        $this->MODULE_DESCRIPTION = Loc::getMessage('COMPLEMENTER_CATALOG_DESCRIPTION');
        $this->PARTNER_NAME = Loc::getMessage('COMPLEMENTER_CATALOG_PARTNER_NAME');
        $this->PARTNER_URI = Loc::getMessage('COMPLEMENTER_CATALOG_PARTNER_URI');

        $version = include __DIR__ . '/version.php';
        $this->MODULE_VERSION = $version['MODULE_VERSION'];
        $this->MODULE_VERSION_DATE = $version['MODULE_VERSION_DATE'];
    }

    /**
     * @throws LoaderException
     */
    public function doInstall(): void
    {
        global $APPLICATION;

        $request = Application::getInstance()->getContext()->getRequest();
        $step = (int)$request['step'];

        if ($step < 2) {
            $session = Application::getInstance()->getSession();
            if (!$session->has($this->MODULE_ID)) {
                $session->set($this->MODULE_ID, (array)$this);
            }
            $APPLICATION->IncludeAdminFile(Loc::getMessage("COMPLEMENTER_INSTALL_STEP_1"),  __DIR__ . '/step1.php');
        } elseif ($step == 2) {
            ModuleManager::registerModule($this->MODULE_ID);
            Loader::requireModule($this->MODULE_ID);

            $refMan = ReferenceManager::getInstance();
            $refMan->add(new BrandReference())
                ->add(new ModelReference())
                ->add(new ProductReference())
                ->add(new OptionReference())
                ->add(new ProductOptionReference());

            if ($request['createTables'] == 'Y') {
                $refMan->deleteTables();

                $refMan->createTables();

                $countBrands = max(1, min($request['countBrands'], $this->maxCountBrands));
                $countModels = max(1, min($request['countModels'], $this->maxCountModels));
                $countProducts = max(1, min($request['countProducts'], $this->maxCountProducts));

                CatalogGenerator::fillOptionTable();
                CatalogGenerator::fillCatalog($countBrands, $countModels, $countProducts);
                CatalogGenerator::fillProductOptionTable();
            }

            $this->installFiles();
        }
    }

    public function installFiles(): void
    {
        CopyDirFiles(
            Path::combine(__DIR__, '/files/components/'),
            Path::convertRelativeToAbsolute(Path::combine('local/components/complementer.catalog/')),
            true,
            true
        );
    }

    /**
     * @throws LoaderException
     */
    public function doUninstall(): void
    {
        $this->UnInstallFiles();
        $this->UnInstallDB();
    }

    public function unInstallFiles(): void
    {
        DeleteDirFilesEx('local/components/complementer.catalog');
    }

    /**
     * @throws LoaderException
     */
    public function unInstallDB(): void
    {
        Loader::requireModule($this->MODULE_ID);

        ReferenceManager::getInstance()
            ->add(new BrandReference())
            ->add(new ModelReference())
            ->add(new ProductReference())
            ->add(new OptionReference())
            ->add(new ProductOptionReference())
            ->deleteTables();

        ModuleManager::unRegisterModule($this->MODULE_ID);
        Loader::clearModuleCache($this->MODULE_ID);
    }
}
