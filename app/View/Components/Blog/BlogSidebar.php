<?php

namespace App\View\Components\Blog;

use Illuminate\View\Component;

class BlogSidebar extends Component
{
    public $sidebar;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->sidebar = 'sidebar';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blog.blog-sidebar', compact('sidebar'));
    }
}
