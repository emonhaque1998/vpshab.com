<?php

namespace App\View\Components;

use Closure;
use Carbon\Carbon;
use Illuminate\View\Component;
use App\Models\websiteinformation;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class HomeLayout extends Component
{
    /**
     * Create a new component instance.
     */

    public $information;

    public function __construct()
    {
        $this->information = Cache::remember('wp_info', Carbon::now()->addDays(7), function () {
            // Code to fetch the data if not found in the cache
            return websiteinformation::latest()->first();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view("layouts.home-layout");
    }
}
