<?php

namespace WireUi\View\Components;

abstract class FormComponent extends Component
{
    protected $sharedAttributes = [
        'id',
        'name',
        'disabled' => false,
        'readonly' => false,
    ];

    public function withAttributes(array $attributes)
    {
        parent::withAttributes($attributes);

        return $this->fillWireModel();
    }

    protected function fillWireModel(): self
    {
        $model = $this->attributes->wire('model')->value();

        if (!$this->attributes->has('name') && $model) {
            $this->attributes->offsetSet('name', $model);
        }

        if (!$this->attributes->has('id') && $model) {
            $this->attributes->offsetSet('id', md5($model));
        }

        return $this;
    }
}
