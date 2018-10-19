<?php

namespace App\Services;

use App\Logics\{ContactLogic,
    CustomerLogic,
    OrderAddressLogic,
    OrderDetailLogic,
    OrderLogic,
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

    protected $orderLogic;

    protected $orderDetailLogic;

    protected $customerLogic;

    protected $orderAddressLogic;

    public function __construct(ProductTypeLogic $productTypeLogic, ProductLogic $productLogic,
                                ProductImageLogic $productImageLogic , VendorLogic $vendorLogic,
                                SettingLogic $settingLogic, BlogLogic $blogLogic, AddressLogic $addressLogic,
                                ContactLogic $contactLogic, CustomerLogic $customerLogic, OrderAddressLogic $orderAddressLogic,
                                OrderLogic $orderLogic, OrderDetailLogic $orderDetailLogic)
    {
        $this->productTypeLogic = $productTypeLogic;
        $this->productLogic = $productLogic;
        $this->productImageLogic = $productImageLogic;
        $this->vendorLogic = $vendorLogic;
        $this->settingLogic = $settingLogic;
        $this->blogLogic = $blogLogic;
        $this->addressLogic = $addressLogic;
        $this->contactLogic = $contactLogic;
        $this->customerLogic = $customerLogic;
        $this->orderAddressLogic = $orderAddressLogic;
        $this->orderLogic = $orderLogic;
        $this->orderDetailLogic = $orderDetailLogic;
    }
}
