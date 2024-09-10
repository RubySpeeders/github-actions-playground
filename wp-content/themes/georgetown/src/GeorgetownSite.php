<?php

use Timber\Site;
use Timber\Menu;

/**
 * Georgetown Timber Site
 */
class GeorgetownSite extends Site
{
  //arbitrary comment here
  //expect this to change to 2.02.0 for minor
  //expect this to change to 2.01.01 for patch
  protected $theme_version = '2.01.01';
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
//hotfix 12 omg  stop the infinite loop
//hotfix 13 has the rebase happened. i expect 1.23.77
//hotfix 14 merge to develop? i expect 1.23.78
//hotfix 15 forgot to update develop from before i guess. i expect 1.23.79
//hotfix 22. currently at 1.23.80. i expect to see 1.23.81
//hotfix 27 arbitray comment
//feature add, comment. expecting version to be 1.24.25. i forgot to add the feature label. duh.
//hotfix for the .0 wanting it to go to .01