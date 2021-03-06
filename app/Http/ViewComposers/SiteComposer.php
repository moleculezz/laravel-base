<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Config;

class SiteComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('site_name', Config::get('site.name'))
             ->with('site_title_suffix', Config::get('site.title_suffix'));
    }
}
