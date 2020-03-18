<?php

namespace App\View\Components\Catalog;

use App\Larux\Catalog\ProductApi;
use Illuminate\View\Component;

class ProductsBestseller extends Component
{
    public $productsBestseller;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(ProductApi $productApi)
    {
        $this->productsBestseller = $productApi->getProductsBestseller();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.catalog.products-bestseller');
    }
}
