<?php

namespace GraphQL\DataObjects;

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;

class Product extends DataObject
{
    private static $db = [
        "Name" => "Varchar",
        "Description" => "Varchar",
        "Price" => "Currency",
    ];

    private static $has_one = [
        "Image" => Image::class,
    ];

    private static $table_name = "Product";
}
