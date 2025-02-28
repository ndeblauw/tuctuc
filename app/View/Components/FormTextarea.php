<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormTextarea extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public string $label,
        public ?string $placeholder = null,
        public ?string $value = null,
        public int $rows = 3,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-textarea');
    }
}
