<?php

use Timber\Site;
use Timber\Menu;

/**
 * Georgetown Timber Site
 */
class GeorgetownSite extends Site
{
  protected $theme_version = '1.23.44';
  public function get_theme_version()
  {
    return $this->theme_version;
  }
}

//adding a comment here to see if it increases the theme version from 1.23.18 -> 1.23.19, and then updates develop with this comment.
//adding another comment after updating the github secrets and seeing if this will trigger and go pass the signin part
//hotfix number three
//hotfix number five
//hotfix number six
//hotfix number seven
//hotfix number eight
//hotfix number nine
//hotfix 10
//hotfix 11. theme should now be 1.23.22