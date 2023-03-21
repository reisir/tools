<?php
namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class Row extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('row', function(ShortcodeInterface $sc) {
	    $c = $sc->getParameter('row', $sc->getParameter('class', $this->getBbCode($sc)));
            return '<div class="row"><div class="column ' . $c . '">' . $sc->getContent() . '</div></div>';
        });
        $this->shortcode->getHandlers()->add('divider', function(ShortcodeInterface $sc) {
	    $c = $sc->getParameter('divider', $sc->getParameter('class', $this->getBbCode($sc)));
	    return '</div><div class="column ' . $c . '">';
        });
    }
}
