<?php


namespace App\Larux\Navigation;


class NavigationApi
{

    public function getNavigation()
    {
        return collect(json_decode(file_get_contents(env('LARUX_PATH') . '/navigation-menu/')));
    }
}
