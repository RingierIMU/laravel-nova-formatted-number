<?php

namespace Ringierimu\FormattedNumber;

use Laravel\Nova\Fields\Field;

class FormattedNumber extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'formatted-number';

    public function format($value = '0,0') 
    {
        return $this->withMeta([
            'format' => $value
        ]);
    }
}
