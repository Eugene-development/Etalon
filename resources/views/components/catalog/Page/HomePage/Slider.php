<?php

namespace App\View\Components\Page\HomePage;

use Illuminate\View\Component;

class Slider extends Component
{
    public $slider;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->slider = 'ghghghghghghg999';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.page.homepage.slider', compact('slider'));
    }
}
