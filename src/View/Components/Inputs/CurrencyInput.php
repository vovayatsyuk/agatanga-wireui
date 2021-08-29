<?php

namespace WireUi\View\Components\Inputs;

use Illuminate\Contracts\View\View;
use WireUi\View\Components\Input;

class CurrencyInput extends Input
{
    public string $thousands;

    public string $decimal;

    public int $precision;

    public bool $emitFormatted;

    public function __construct(
        string $thousands = ',',
        string $decimal = '.',
        int $precision = 2,
        bool $emitFormatted = false,
        bool $borderless = false,
        bool $shadowless = false,
        ?string $label = null,
        ?string $hint = null,
        ?string $cornerHint = null,
        ?string $icon = null,
        ?string $rightIcon = null,
        ?string $prefix = null,
        ?string $suffix = null,
        ?string $prepend = null,
        ?string $append = null
    ) {
        parent::__construct($borderless, $shadowless, $label, $hint, $cornerHint, $icon, $rightIcon, $prefix, $suffix, $prepend, $append);

        $this->thousands     = $thousands;
        $this->decimal       = $decimal;
        $this->precision     = $precision;
        $this->emitFormatted = $emitFormatted;
    }

    public function render(): View
    {
        return view('wireui::components.inputs.currency');
    }
}
