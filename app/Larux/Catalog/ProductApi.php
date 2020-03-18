<?php


namespace App\Larux\Catalog;


class ProductApi
{
    public function getProductOne($id)
    {
        return collect(json_decode(file_get_contents(env('LARUX_PATH') . '/product-one/' . $id)));
    }

    public function getProductsAll()
    {
        return collect(json_decode(file_get_contents(env('LARUX_PATH') . '/products-all/')));
    }

    public function getProductsCategory($category)
    {
        return collect(json_decode(file_get_contents(env('LARUX_PATH') . '/products-category/' . $category)));
    }

    public function getProductsSearch($search)
    {
        return collect(json_decode(file_get_contents(env('LARUX_PATH') . '/products-search/' . $search)));
    }

    public function getProductsNew()
    {
        return collect(json_decode(file_get_contents(env('LARUX_PATH') . '/products-new/')));
    }

    public function getProductsSale()
    {
        return collect(json_decode(file_get_contents(env('LARUX_PATH') . '/products-sale/')));
    }

    public function getProductsAction()
    {
        return collect(json_decode(file_get_contents(env('LARUX_PATH') . '/products-action/')));
    }

    public function getProductsBestseller()
    {
        return collect(json_decode(file_get_contents(env('LARUX_PATH') . '/products-besseller/')));
    }

    public function getProductsSimilar()
    {
        return collect(json_decode(file_get_contents(env('LARUX_PATH') . '/products-similar/')));
    }
}
