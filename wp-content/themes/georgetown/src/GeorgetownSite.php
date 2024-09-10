<?php

use Timber\Site;
use Timber\Menu;

/**
 * Georgetown Timber Site
 */
class GeorgetownSite extends Site
{
  //expect this to change to 2.07.06 in main AND develop
  protected $theme_version = '2.07.06';
  public function get_theme_version()
  {
    return $this->theme_version;
  }
}