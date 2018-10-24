<?php

Breadcrumbs::for('admin.home', function ($trail) {
    $trail->push('Trang Chủ', route('admin.home'));
});

//Product
Breadcrumbs::for('admin.product', function ($trail) {
    $trail->parent('admin.home');
    $trail->push('Sản phẩm', route('admin.product.index'));
});
