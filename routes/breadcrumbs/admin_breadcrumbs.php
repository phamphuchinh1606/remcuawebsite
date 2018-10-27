<?php

Breadcrumbs::for('admin.home', function ($trail) {
    $trail->push('Trang Chủ', route('admin.home'));
});

//Product
Breadcrumbs::for('admin.product', function ($trail) {
    $trail->parent('admin.home');
    $trail->push('Sản phẩm', route('admin.product.index'));
});

//Product Crate
Breadcrumbs::for('admin.product.create', function ($trail) {
    $trail->parent('admin.product');
    $trail->push('Tạo mới sản phẩm');
});

//Product Crate
Breadcrumbs::for('admin.product.edit', function ($trail, $productName) {
    $trail->parent('admin.product');
    $trail->push($productName);
});

//Product Type
Breadcrumbs::for('admin.productType', function ($trail) {
    $trail->parent('admin.home');
    $trail->push('Danh mục sản phẩm', route('admin.product_type.index'));
});

//Product Type Create
Breadcrumbs::for('admin.productType.create', function ($trail) {
    $trail->parent('admin.productType');
    $trail->push('Tạo danh mục sản phẩm');
});

//Product Type Create
Breadcrumbs::for('admin.productType.edit', function ($trail, $productTypeName) {
    $trail->parent('admin.productType');
    $trail->push($productTypeName);
});

//Vendor
Breadcrumbs::for('admin.vendor', function ($trail) {
    $trail->parent('admin.home');
    $trail->push('Danh sách thương hiệu', route('admin.vendor.index'));
});

//Vendor Create
Breadcrumbs::for('admin.vendor.create', function ($trail) {
    $trail->parent('admin.vendor');
    $trail->push('Tạo mới thương hiệu');
});

//Vendor Create
Breadcrumbs::for('admin.vendor.edit', function ($trail, $vendorName) {
    $trail->parent('admin.vendor');
    $trail->push($vendorName);
});

//Blog
Breadcrumbs::for('admin.blog', function ($trail) {
    $trail->parent('admin.home');
    $trail->push('Danh sách tin tức', route('admin.blog.index'));
});

//Blog Create
Breadcrumbs::for('admin.blog.create', function ($trail) {
    $trail->parent('admin.blog');
    $trail->push('Tạo mới tin tức');
});

//Blog Create
Breadcrumbs::for('admin.blog.edit', function ($trail, $blogTitle) {
    $trail->parent('admin.blog');
    $trail->push($blogTitle);
});

//Contact
Breadcrumbs::for('admin.contact', function ($trail) {
    $trail->parent('admin.home');
    $trail->push('Danh sách liên hệ', route('admin.contact.index'));
});

//Contact Show
Breadcrumbs::for('admin.contact.show', function ($trail) {
    $trail->parent('admin.contact');
    $trail->push('Nội dung liên hệ');
});

//Order
Breadcrumbs::for('admin.order', function ($trail) {
    $trail->parent('admin.home');
    $trail->push('Danh sách đơn hàng', route('admin.order.index'));
});

//Order Show
Breadcrumbs::for('admin.order.show', function ($trail) {
    $trail->parent('admin.order');
    $trail->push('Chi tiết đơn hàng');
});
