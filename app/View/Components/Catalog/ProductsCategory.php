<?php

namespace App\View\Components\Catalog;

use App\Larux\Catalog\ProductApi;
use Illuminate\View\Component;

class ProductsCategory extends Component
{
    public $productsCategory;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(ProductApi $productApi)
    {
        $this->productsCategory = $productApi->getProductsCategory();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.catalog.products-category');
    }
}
