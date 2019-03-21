<?php

use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;

class ControllerExtension extends Extension
{
    public function onAfterInit() {
        Requirements::javascript('joshkosmala/silverstripe-flying-focus:javascript/flying-focus.js');
    }
}

