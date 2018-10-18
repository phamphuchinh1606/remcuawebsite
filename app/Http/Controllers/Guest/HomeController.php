<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $banners = $this->settingService->getBannerAll();
        $topBanners = $this->settingService->getTopBannerAll();
        $productNews = $this->productService->getProductNews(8);
        $productHots = $this->productService->getListProductHot(8);
        return view('guest.home.index',[
            'banners' => $banners,
            'topBanners' => $topBanners,
            'productHots' => $productHots,
            'productNews' => $productNews
        ]);
    }
}
