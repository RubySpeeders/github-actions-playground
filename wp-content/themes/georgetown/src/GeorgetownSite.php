<?php

use Timber\Site;
use Timber\Menu;

/**
 * Georgetown Timber Site
 */
class GeorgetownSite extends Site
{
  protected $theme_version = '1.23.18';
  public function get_theme_version()
  {
    return $this->theme_version;
  }
}

//adding a comment here to see if it increases the theme version from 1.23.18 -> 1.23.19, and then updates develop with this comment.