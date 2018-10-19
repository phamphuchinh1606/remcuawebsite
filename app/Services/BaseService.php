<?php

namespace App\Services;

use App\Logics\{ContactLogic,
    ProductTypeLogic,
    ProductLogic,
    ProductImageLogic,
    VendorLogic,
    SettingLogic,
    BlogLogic,
    AddressLogic};

class BaseService {
    protected $productTypeLogic;

    protected $productLogic;

    protected $productImageLogic;

    protected $vendorLogic;

    protected $settingLogic;

    protected $blogLogic;

    protected $addressLogic;

    protected $contactLogic;

    public function __construct(ProductTypeLogic $productTypeLogic, ProductLogic $productLogic,
                                ProductImageLogic $productImageLogic , VendorLogic $vendorLogic,
                                SettingLogic $settingLogic, BlogLogic $blogLogic, AddressLogic $addressLogic,
                                ContactLogic $contactLogic)
    {
        $this->productTypeLogic = $productTypeLogic;
        $this->productLogic = $productLogic;
        $this->productImageLogic = $productImageLogic;
        $this->vendorLogic = $vendorLogic;
        $this->settingLogic = $settingLogic;
        $this->blogLogic = $blogLogic;
        $this->addressLogic = $addressLogic;
        $this->contactLogic = $contactLogic;
    }
}
