<?php


namespace App\Larux\Blog;


class PostApi
{
    public function getPostOne($id)
    {
        return collect(json_decode(file_get_contents(env('LARUX_PATH') . '/post-one/' . $id)));
    }

    public function getPostsAll()
    {
        return collect(json_decode(file_get_contents(env('LARUX_PATH') . '/post-all/')));
    }

    public function getPostsCategory($category)
    {
        return collect(json_decode(file_get_contents(env('LARUX_PATH') . '/post-category/' . $category)));
    }

    public function getPostsSearch($search)
    {
        return collect(json_decode(file_get_contents(env('LARUX_PATH') . '/post-search/' . $search)));
    }

    public function getPostsNew()
    {
        return collect(json_decode(file_get_contents(env('LARUX_PATH') . '/post-new/')));
    }

    public function getPostsAction()
    {
        return collect(json_decode(file_get_contents(env('LARUX_PATH') . '/post-action/')));
    }

    public function getPostsBestseller()
    {
        return collect(json_decode(file_get_contents(env('LARUX_PATH') . '/post-besseller/')));
    }

    public function getPostsSimilar()
    {
        return collect(json_decode(file_get_contents(env('LARUX_PATH') . '/post-similar/')));
    }

}
