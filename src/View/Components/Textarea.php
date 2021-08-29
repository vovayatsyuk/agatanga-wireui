<?php

namespace WireUi\View\Components;

use Illuminate\Contracts\View\View;

class Textarea extends Input
{
    public function render(): View
    {
        return view('wireui::components.textarea');
    }
}
