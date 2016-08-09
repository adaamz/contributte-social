<?php

namespace Minetro\Social\Facebook\PagePlugin;

use Minetro\Social\Facebook\Control;
use Nette\Utils\Html;

/**
 * PagePlugin control
 *
 * @author Milan Felix Sulc <sulcmil@gmail.com>
 * @version 3.0
 * @deprecated
 */
class PagePlugin extends Control
{

    /** API *******************************************************************/

    /**
     * @return Html
     */
    public function build()
    {
        return $this->createElement($this->attributes);
    }

    /** RENDERS ***************************************************************/

    public function render()
    {
        echo $this->build();
    }

}
