---
title: Masking
published: true
visible: false
media_order: 'maskingexample.gif,masklayer.png,masking.gif,options.png,manymasks.png'
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

Select the Anchor Creation Tool [i=vppen/] on the left of the menu and proceed to mask. Using [i=vppen/] will add new anchor points, clicking on already existing anchor points with [i=vpdelete/] will delete them. To move around, select [i=vpedit/]

You can remove one of your anchoir points by using the Anchor Deletion Tool and clicking on it.Using [i=vppen/]

You can also drag any of your anchoir point to another location, select the Normal Edit Tool and drag it to where you want.

You can also give it some angle (I couldn't find a way to phrase this) by dragging the anchor point with the Anchor Creation Tool.

[divider/]

![creating a mask with the anchor creation tool](maskingexample.gif "Anime: Samurai Champloo")

[/row]

[row]

Finally, when your masking is done, you can play around with the settings on the left, to make it look better using the feathering, or change the masking mode to negative...

[divider/]

![options](options.png)

[/row]

The mask can be as precise as you want depending on how many points you make.

You should also know that Vegas Pro lets you make multiple mask on the same track easily. In the example you've seen in the abstract, I've used a total of 4 masks, with different settings.

![An example of several masks](manymasks.png)

If your object has a complicated shape, masking it will be tedious. You can make multiple masks like in the example above, or duplicate your track and do a new mask on this track. For now, masking in Vegas Pro is pretty archaic compared to DaVinci Resolve or After Effects, if you want to mask a moving object with an iregular shape, it'll take you some time.

### How to animate your mask

You can see our other [guide about animating](https://amv.tools/vegas-pro/pan-and-crop#animating). Vegas will automatically insert keyframes when you make changes. You can modify your mask for each frame or even reset the mask.