<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PaymentRow extends Component
{
    public $payment;
    public $person;
    public $showCheckbox;
    public $isChecked;

    /**
     * Create a new component instance.
     */
    public function __construct($payment, $person, $showCheckbox = false, $isChecked = false)
    {
        $this->payment = $payment;
        $this->person = $person;
        $this->showCheckbox = $showCheckbox;
        $this->isChecked = $isChecked;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.payment-row');
    }
}
