<?php

namespace App\View\Components\Blog;

use App\Larux\Blog\PostApi;
use Illuminate\View\Component;

class PostsBestseller extends Component
{
    public $postsBestseller;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(PostApi $postApi)
    {
        $this->postsBestseller = $postApi->getPostsBestseller();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blog.posts-bestseller');
    }
}
