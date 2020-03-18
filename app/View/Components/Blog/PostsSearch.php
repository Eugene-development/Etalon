<?php

namespace App\View\Components\Blog;

use App\Larux\Blog\PostApi;
use Illuminate\View\Component;

class PostsSearch extends Component
{
    public $postsSearch;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(PostApi $postApi)
    {
        $this->postsSearch = $postApi->getPostsSearch();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blog.posts-search', compact('postsSearch'));
    }
}
