<?php
namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class KeyboardShortcut extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('kbd', function(ShortcodeInterface $sc) {
            $kbd = $sc->getParameter('shortcut', $sc->getParameter('kbd', $this->getBbCode($sc)));
            return '<kbd>' . $kbd  . $sc->getContent() . '</kbd>';
        });
    }
}
