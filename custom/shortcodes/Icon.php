<?php
namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class Icon extends Shortcode
{
    public function init()
    {


        $this->shortcode->getRawHandlers()->add('i', function(ShortcodeInterface $sc) {
	    $animatedIcons=array("untwirl");
            $str = $sc->getContent();
	    $icon = $sc->getParameter('icon', $sc->getParameter('i', $this->getBbCode($sc)));
            $ext = in_array($icon, $animatedIcons) ? ".gif" : ".png";
	    return '![' . $icon . ' icon](image://' . $icon . $ext . '?classes=icon,' . $icon . ' "' . $str . '")';
        });
    }
}
