<?php

namespace App\View\Components\Blog;

use App\Larux\Blog\PostApi;
use Illuminate\View\Component;

class PostsNew extends Component
{
    public $postsNew;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(PostApi $postApi)
    {
        $this->postsNew = $postApi->getPostsNew();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blog.posts-new');
    }
}
