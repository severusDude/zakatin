<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavLink extends Component
{
    /**
     * The link's href attribute.
     *
     * @var string
     */
    public $href;

    public $size;

    /**
     * Whether the link is active.
     *
     * @var bool
     */
    public $active;

    /**
     * Whether the link is in hover state (for demo purposes).
     *
     * @var bool
     */
    public $hover;

    /**
     * Create a new component instance.
     *
     * @param  string  $href
     * @param  bool  $active
     * @param  bool  $hover
     * @return void
     */
    public function __construct($href = '#', $active = false, $hover = false, $size = 'sm')
    {
        $this->href = $href;
        $this->size = $size;
        $this->active = $active;
        $this->hover = $hover;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav-link');
    }

    /**
     * Get the classes for the link based on its state.
     *
     * @return string
     */
    public function classes()
    {
        $baseClasses = 'px-5 py-2 border border-transparent rounded-md transition-all ease-in-out select-none hover:text-primary-600 hover:border-primary-600 hover:bg-primary-600/20';

        if ($this->size == 'md') {
            $baseClasses .= ' text-md';
        }

        if ($this->active) {
            return $baseClasses . ' text-primary-600 bg-primary-600/20';
        }

        if ($this->hover) {
            return $baseClasses . ' text-primary-600 border border-primary-600 bg-primary-600/20';
        }

        return $baseClasses . ' text-gray-900';
    }
}
