<?php

namespace Chaseconey\ExternalImage;

use Laravel\Nova\Fields\Field;

class ExternalImageBase extends Field
{
    protected $rounded = false;

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

    /**
     * Set the image with avatar-like style
     *
     * @return $this
     */
    public function avatar()
    {
        $this->rounded = true;

        return $this->width(42)->height(42)->radius(99);
    }

    /**
     * Set the width of the image
     *
     * @param int $width
     * @return $this
     */
    public function width(int $width)
    {
        return $this->withMeta(['width' => $width]);
    }

    /**
     * Set the height of the image
     *
     * @param int $height
     * @return $this
     */
    public function height(int $height)
    {
        return $this->withMeta(['height' => $height]);
    }

    /**
     * Set the border-radius of the image
     *
     * @param int $radius
     * @return $this
     */
    public function radius(int $radius)
    {
        return $this->withMeta(['borderRadius' => $radius]);
    }
}
