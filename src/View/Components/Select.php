<?php

namespace WireUi\View\Components;

use Illuminate\Contracts\View\View;

class Select extends NativeSelect
{
    public string $rightIcon;

    public string $optionComponent;

    public bool $searchable;

    public bool $multiselect;

    public ?string $icon;

    /** @param Collection|array|null $options */
    public function __construct(
        string $rightIcon = 'selector',
        string $optionComponent = 'select.option',
        bool $searchable = true,
        bool $multiselect = false,
        bool $optionKeyLabel = false,
        bool $optionKeyValue = false,
        ?string $label = null,
        ?string $placeholder = null,
        ?string $optionValue = null,
        ?string $optionLabel = null,
        ?string $icon = null,
        $options = null
    ) {
        parent::__construct(
            $label,
            $placeholder,
            $optionValue,
            $optionLabel,
            $optionKeyLabel,
            $optionKeyValue,
            $options
        );

        $this->rightIcon       = $rightIcon;
        $this->optionComponent = $optionComponent;
        $this->searchable      = $searchable;
        $this->multiselect     = $multiselect;
        $this->icon            = $icon;
    }

    public function render(): View
    {
        return view('wireui::components.select');
    }
}
