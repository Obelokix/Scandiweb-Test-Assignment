<?php

    abstract class Product {
        abstract public function openConnection();
        abstract public function insertData($sku, $product_name, $price, $special_attribute);
    }
?>