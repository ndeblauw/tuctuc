<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Form extends Component
{
    /**
     * Create a new component instance.
     * action="/articles/{{$article->id}}"
     * method="post"
     * title="Update article"
     * cancelurl="/articles/{{$article->id}}"
     * submittext="Update article"
     */
    public function __construct(
        public string $action,
        public string $method,
        public string $title,
        public string $cancelurl,
        public string $submittext = "Submit"

    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form');
    }
}
