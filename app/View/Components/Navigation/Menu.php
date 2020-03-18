<?php

namespace App\View\Components\Navigation;

use App\Larux\Navigation\NavigationApi;
use Illuminate\View\Component;

class Menu extends Component
{
    public $menu;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(NavigationApi $navigation)
    {
        $this->menu = $navigation->getNavigation();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.navigation.menu', compact('menu'));
    }
}
