---
title: Effects
media_order: 'effects.png,effect controls.png,untwirl.gif'
slug: effects
taxonomy:
    category:
        - docs
    authors:
        - reisir
routes: {  }
---

Effects, the namesake of After Effects are modifiers that change the layers contents, usually by processing the content of the layer. In some cases effects generate their own content like the [CC Fractal Noise](https://www.youtube.com/watch?v=kdttSozSLG4) effect.

===

## Where to find effects

Effects are found in the Effects & Presets panel, which is in the right sidebar by default. To apply effects, drag them from the effects panel onto a layer. You can also select a layer and double click an effect to apply it on that layer (or layers). 

[row]

## Using effects

You can change the effect settings from the Effect Controls panel, usually found in the left sidebar. Almost every effect control can be [i=stopwatch/] animated. Another way to access the effect controls is to press [kbd="E"/] which will reveal all effects on the timeline. Untwirl [i=untwirl/] the individual effects to access the controls.

Effects render in the order they're added or from top to bottom. You can reorder effects in the effects control panel and in the layer controls.

[divider/]
![effect controls panel](effect%20controls.png){.right .nomobile .caption}
[/row]

## Tips

 * [kbd="ctrl + shift + E"/] removes all effects from selected layers

[row]

By untwirling [i=untwirl/] the effect on the timeline, you gain access to the Compositing Options (at the very bottom of the effect controls). Clicking on the [kbd="+"/] adds a mask from the layer to the effect. You can also change the overall effect opacity in the compositing options section. 

Be aware that adding a mask in the compositing options makes it unable to contribute to the normal masking flow. Mask modes and properties like feather etc. work in compositing options.

[divider]
![compositing options](compositing%20options%20mask.png){.left .aeborder .caption}
[/row]