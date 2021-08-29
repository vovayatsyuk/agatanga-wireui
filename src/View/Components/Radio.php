<?php

namespace WireUi\View\Components;

use Illuminate\Contracts\View\View;

class Radio extends Checkbox
{
    public function render(): View
    {
        return view('wireui::components.radio');
    }
}
