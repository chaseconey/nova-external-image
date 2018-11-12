<?php

namespace Chaseconey\ExternalImage;

use Laravel\Nova\Fields\Field;

class ExternalImage extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'external-image';

    /**
     *
     * Add prefix to the image string provided
     *
     * @param string $prefix
     * @return ExternalImage
     */
    public function prefix(string $prefix)
    {
        return $this->withMeta(['prefix' => $prefix]);
    }
}
