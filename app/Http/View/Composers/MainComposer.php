<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Traits\WithBlacklist;
use App\Services\Languages\GetActiveLanguages;

class MainComposer
{
    use WithBlacklist;
    

    /**
     * list of paths that are blacklisted
     *
     * @var array
     */
    protected $blacklist = [
        'main.login',
        'main.partials.*',
        'main.*.partials.*'
    ];

    public function __construct()
    {
      
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $allow = $this->check($view->getName());
        $main = auth('users')->user();
        
        if ($allow) {
            $view->with([
                'main' => $main,
                'permissions' => $main->getAllPermissions()->pluck('name'),
                'main' => [
                  
                ]
            ]);
        }
    }
}
