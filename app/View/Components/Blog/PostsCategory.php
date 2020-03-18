<?php

namespace App\View\Components\Blog;

use App\Larux\Blog\PostApi;
use Illuminate\View\Component;

class PostsCategory extends Component
{
    public $postsCategory;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(PostApi $postApi)
    {
        $this->postsCategory = $postApi->getPostsCategory();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blog.posts-category', compact('postsCategory'));
    }
}
