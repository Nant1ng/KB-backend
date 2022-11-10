<?php

namespace GraphQL\ModelAdmins;

use SilverStripe\Admin\ModelAdmin;
use GraphQL\DataObjects\Product;

class ProductAdmin extends ModelAdmin
{
    private static $managed_models = [
        Product::class
    ];

    private static $url_segment = 'product';
    private static $menu_title = 'Product';
}
