<?php

namespace Chaseconey\ExternalImage;

use Laravel\Nova\Contracts\Cover;

class ExternalImageAsAvatar extends ExternalImageBase implements Cover
{
  /**
   * Resolve the thumbnail URL for the field.
   *
   * @return string|null
   */
  public function resolveThumbnailUrl()
  {
      return $this->value;
  }

  public function isRounded()
  {
      return $this->rounded;
  }

}
