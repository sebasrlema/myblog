<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public $metaTitle = 'Default title';
    public $metaDescription = 'Default description';

    public function __construct($metaTitle = null, $metaDescription = null){

        $this->metaTitle = $metaTitle;
        $this->metaDescription = $metaDescription;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.blog-layout');
    }
}
