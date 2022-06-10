<?php

namespace App\View\Components;

use CisFoundation\Breadcrumbs\Breadcrumbs as Bread;
use Illuminate\View\Component;

/**
 * This class extends the Laravel ViewComponent class.
 * With this Class its possible to render the breadcumb eady into yout laravel view by using the view component feature of laravel.
 */
class Breadcrumbs extends Component
{

    /**
     * Slug name
     *
     * @var string
     */
    protected $slug;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.breadcrumbs',[
            'breadcrumbs' => Bread::get($this->slug),
        ]);
    }
}
