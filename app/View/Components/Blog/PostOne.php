<?php

namespace App\View\Components\Blog;

use App\Larux\Blog\PostApi;
use Illuminate\View\Component;

class PostOne extends Component
{
    public $postOne;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(PostApi $postApi)
    {
        $this->postOne = $postApi->getPostOne();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blog.post-one', compact('postOne'));
    }
}
