<?php

namespace App\View\Components\Catalog;

use App\Larux\Catalog\ProductApi;
use Illuminate\View\Component;

class ProductsNew extends Component
{
    public $productsNew;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(ProductApi $productApi)
    {
        $this->productsNew = $productApi->getProductsNew();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.catalog.products-new');
    }
}
