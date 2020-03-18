<?php

namespace App\View\Components\Noname;

use App\Larux\Catalog\ProductApi;
use Illuminate\View\Component;

class Noname1 extends Component
{

    /**
     * The alert type.
     *
     * @var string
     */

    public $test2;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(ProductApi $productApi)
    {
        $this->test = 'hbihbnjn';
//        $this->test = $productApi->getProductsNew();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.noname.noname1', compact('test2'));
    }
}
