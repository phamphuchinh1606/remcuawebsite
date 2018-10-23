<?php

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Trang Chủ', route('home'));
});

// Home
Breadcrumbs::for('collection', function ($trail, $productType) {
    $trail->parent('home');
    $trail->push($productType->product_type_name);
});
