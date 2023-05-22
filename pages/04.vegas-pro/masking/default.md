---
title: Masking
published: true
visible: false
media_order: 'maskingexample.gif,masklayer.png,masking.gif,manymasks.png,options.png'
taxonomy:
    authors:
        - bastiera
---

Bézier masking in Vegas Pro, the anchor creation tool and more.

===

Masking in Vegas Pro is done using the Anchor Creation Tool, which creates the bézier curves you're used to in other programs. Masking can be done in the Pan/Crop menu or using the Bézier Masking FX. The latter is more useful for [motion tracking](/vegas-pro/motion-tracking).

![masking in Vegas Pro](masking.gif "Anime: Samurai Champloo")

## How to create a mask

### The Basics
Select the event that you wish to mask on its track and go to the [Pan/Crop menu](/vegas-pro/pan-and-crop#the-pan-crop-menu). At the bottom of the Pan/Crop menu, make sure to enable the mask layer, then select it.

![tick "mask" and select the mask layer](masklayer.png)
[row]

Select the Anchor Creation Tool [i=vppen/] to initiate your mask add new anchor points. Clicking on already existing anchor points with the Anchor Deleting Tool[i=vpdelete/] will delete them. To move around, select [i=vpedit/].


You can also drag any of your anchoir point to another location by selecting the Normal Edit Tool [i=vpedit/] and dragging it to where you want.

Selecting the Anchor Creation Tool [i=vppen/] and dragging around one of your anchor points will create a tangeant, *i.e.* turning any straight line linking your Anchor Points into a curve.



[divider/]

![creating a mask with the anchor creation tool](maskingexample.gif "Anime: Samurai Champloo")

[/row]

[row]

When you're done masking, you may want to use feathering to make your mask look better. Feathering will smoothen the edges of your mask, making it look less sharp and less pixelated and will also help you removing any details you don't want to appear.

Whether you want to feather out or feather in and what percentage of feathering you will apply, will depend on the mask you're doing.
[divider/]

![options](options.png)

[/row]

### Tips

The mask can be as precise as you want depending on how many points you make.

You should also know that Vegas Pro lets you make multiple mask on the same track easily. In the example you've seen in the abstract, I've used a total of 4 masks, with different settings.

![An example of several masks](manymasks.png)

If your object has a complicated shape, masking it will be tedious. You can make multiple masks like in the example above, or duplicate your track and do a new mask on this track. For now, masking in Vegas Pro is pretty archaic compared to DaVinci Resolve or After Effects, if you want to mask a moving object with an iregular shape, it'll take you some time.

### How to animate your mask

You can see our other [guide about animating](https://amv.tools/vegas-pro/pan-and-crop#animating). Vegas will automatically insert keyframes when you make changes. You can modify your mask for each frame or even reset the mask.