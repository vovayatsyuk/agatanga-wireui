<?php

namespace WireUi\View\Components;

use Illuminate\View;

abstract class Component extends View\Component
{
    /**
     * Shared component attributes to view variables
     *
     * The default value will be null: ['name' => 'foo', 'id']
     * The 'name' will be 'foo' as default, and the 'id' will be null
     */
    protected $sharedAttributes = [];

    protected function classes(array $classList): string
    {
        $classes = [];

        foreach ($classList as $class => $constraint) {
            if (is_numeric($class)) {
                $classes[] = $constraint;
            } elseif ($constraint) {
                $classes[] = $class;
            }
        }

        return implode(' ', $classes);
    }

    public function data()
    {
        return array_merge(
            parent::data(),
            $this->extractSharedAttributes()
        );
    }

    protected function extractSharedAttributes(): array
    {
        return collect($this->sharedAttributes)->mapWithKeys(function ($value, $key) {
            $attribute = is_numeric($key) ? $value : $key;
            $value = is_numeric($key) ? null : $value;

            return [$attribute => $this->attributes->get($attribute, $value)];
        })->toArray();
    }
}
