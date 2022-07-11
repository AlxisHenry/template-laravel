<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BtnPrimary extends Component
{

    public string $text;
    public string $icon;
    public string $className;
    public bool $background;
    public string $to;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text, $to = '', $background = false, $icon = '')
    {
        $this->text = $text;
        $this->icon = $icon;
        $this->background = $background;
        $this->className = strtolower($text);
        $this->to = $to;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(): \Illuminate\Contracts\View\View|string|\Closure
    {
        return view('components.btn-primary',
            [
                'background' => $this->background
            ]
        );
    }
}
