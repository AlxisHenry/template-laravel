<?php

namespace App\View\Components;

use Illuminate\View\Component;
use \Illuminate\Contracts\View\View;

/*
 * This component is a primary button with default style (path: scss\components\btn-primary.scss)
 * You may call this component with the following tag:
 * <x-btn-primary content="content" fontawesome='your icon|default arrow' url="/" background="true|false"/>
 * */

class BtnPrimary extends Component
{

    public string $content; # Value of the button
    public string $fontawesome; # You may use a font awesome icon only
    public string $className; # You can assign one or more classes to the button
    public bool $background; # Bool for check if the button take background color or not
    public string $url; # Choose the redirection url

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $content = 'Hello',
        $fontawesome = '<i class="fa-solid fa-arrow-right-long"></i>',
        $className = '',
        $background = true,
        $url = '/')
    {
        $this->content = $content;
        $this->fontawesome = $fontawesome;
        $this->className = strtolower($className);
        $this->background = $background === "true" ? true : ($background === "false" ? false : ''); # Set background to true|false
        $this->url = $url;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|string|\Closure
    {
        # When you call the component with the tag, this class will return you the following component view with your parameters
        return view('components.btn-primary',
            [
                'background' => $this->background
            ]
        );
    }
}
