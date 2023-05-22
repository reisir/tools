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

### The Very Basics
Select the event that you wish to mask on its track and go to the [Pan/Crop menu](/vegas-pro/pan-and-crop#the-pan-crop-menu). At the bottom of the Pan/Crop menu, make sure to enable the mask layer, then select it.

![tick "mask" and select the mask layer](masklayer.png)
[row]

Select the Anchor Creation Tool [i=vppen/] to initiate your mask and add new anchor points. Clicking on already existing anchor points with the Anchor Deleting Tool[i=vpdelete/] will delete them. To move around, select [i=vpedit/]. To close your mask, click on the starting point again.

You can also drag any of your anchoir point to another location by selecting the Normal Edit Tool [i=vpedit/] and dragging it to where you want.

Selecting the Anchor Creation Tool [i=vppen/] and dragging around one of your anchor points will create a tangeant, *i.e.* turning any straight line linking your Anchor Points into a curve.

The mask can be as precise as you want depending on how many points you make. If your object has a complicated shape, masking it will be tedious and will be a matter of time.

Vegas Pro lets you make multiple mask on the same track easily. When masking different objects, you can create and manage multiple masks on the same track, or duplicate your track and do a new mask, which can prove useful if you're managing a lot of masks and want to apply different FX to them.
[divider/]



![creating a mask with the anchor creation tool](maskingexample.gif "Anime: Samurai Champloo")

[/row]

!! Vegas Pro does not allow you to merge or group different masks together. Make sure that you didn't accidentally start a new mask before finishing the one you initiated.

### About the settings
[row]

On the left of the Video Event FX window, you'll see the different settings that you can apply to your mask.
- **Apply to FX** : when activated, this option will make it so your mask only apply to the FX you have on your event.
- **Mode** : it changes the nature of your mask. **Positive** will make it so only the interior of your mask is visible, **negative** will make it so the interior of your mask disapear. **Disabled** will deactive your mask.
- **Opacity** : As you reduce the opacity of a mask, it becomes more transparent and what's not masked becomes more visible.
- **Feather** : Feather is a feature that enables you to create a soft or blurred transition between the masked and unmasked areas of your event.

When you're done masking, you may want to use feathering to make your mask look better. Feathering will smoothen the edges of your mask, making it look less sharp and less pixelated and will also help you removing any details you don't want to appear.

Whether you want to feather out or feather in and what percentage of feathering you will apply, will depend on the mask you're doing.
[divider/]

![options](options.png)

[/row]

### Tips

You should also know that Vegas Pro lets you make multiple mask on the same track easily. You can make multiple masks like in the example below, or duplicate your track and do a new mask on this track. In the example you've seen in the abstract, I've used a total of 4 masks, with different settings.

![An example of several masks](manymasks.png)

Most of the time, moving around or zooming on your footage will cause Vegas Pro to lose track of your mask. To continue with your mask, hit <kbd>Ctrl + Z</kbd> until you see the anchor points again, or try double-clicking on your last anchor point with the Normal Edit Tool [i=vpedit/].

## How to animate your mask
[animating](https://amv.tools/vegas-pro/pan-and-crop#animating) a mask in Vegas Pro is done the same way you would edit any event. Vegas will automatically insert keyframes when you make changes. You can modify your mask for each frame or even reset the mask for each frame.