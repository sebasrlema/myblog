<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */

    public $metaTitle = 'Default title';
    public $metaDescription = 'Default description';

    public function __construct($metaTitle = null, $metaDescription = null){

        $this->metaTitle = $metaTitle;
        $this->metaDescription = $metaDescription;

    }

    public function render(): View
    {
        return view('layouts.app');
    }

}
