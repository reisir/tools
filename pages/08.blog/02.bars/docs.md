---
title: 'Black Bars'
slug: bars
media_order: 'vertical.jpg,hanebox.jpg,hane wide.jpg,yotsugi wide.jpg,yotsugi.jpg'
taxonomy:
    authors:
        - reisir
routes:
    aliases:
        - /bars
---

Black bars are a scourge on all widescreen users and mobile watchers. Here I try to make my case for rendering real 21:9 instead of 16:9 with "cinematic" black bars slapped on top of the entire video. 

===

!!!! All of the examples here are draggable, meaning you can click and drag around the "video" inside of the "display". This is to help visualize the difference between the output device and the video itself. The technology used to make that work does not play well with mobile.

## Vertical 9:16 video on a 16:9 display

<div class="drag-container sixteen-nine" markdown="1">
<img src="./bars/vertical.jpg" class="draggable"/>
</div>

I hope everyone can see how bad of a viewing experience that is. But what has this got to do with AMVs or editing? Well here's a couple more examples, first a 21:9 video displayed in a 16:9 output device and then a 21:9 video letterboxed to 16:9 on a 16:9 display. 

## Real 21:9 vs. letterboxed 21:9 on a 16:9 display

<div class="drag-container sixteen-nine compare first" markdown="1">
<img src="./bars/hane wide.jpg" class="draggable"/>
</div>

<div class="drag-container sixteen-nine compare" markdown="1">
<img src="./bars/hanebox.jpg" class="draggable"/>
</div>

<br style="clear: both" />

You might look at these and say that there's no difference between the two. You'd be correct. 

Which means that on a standard 16:9 screen, **you do not have a preference** over real or letterboxed 21:9. 

But that's true only if the output device you use is 16:9. If you use anything else, there's going to be trouble. Here's what those two videos would look like on a 21:9 widescreen display, or a modern phone in landscape.

## Real 21:9 vs. letterboxed 21:9 on 21:9

<div class="drag-container twentyone-nine compare first" markdown="1">
<img src="./bars/hane wide.jpg" class="draggable"/>
</div>

<div class="drag-container twentyone-nine compare" markdown="1">
<img src="./bars/hanebox.jpg" class="draggable"/>
</div>

<br style="clear: both" />

As you can see, the letterboxed 21:9 is now completely encased in black bars, wasting approximately 24% of the entire screen. This is the reason you do not want to render your widescreen videos letterboxed to 16:9. You do not benefit anything from doing it since rendering in real 21:9 would achieve the same effect and you're just hurting the viewing experience on wider displays and on phones.

On some phones you can use the "zoom to fill" feature to mitigate this but it's still not as good as simply not having the black bars to begin with. 

## How to fix it?

When you're working only with 21:9 sources, set your project dimensions to match the sources dimensions. This way you'll have no black bars by default.

If you're working with both 21:9 and 16:9 sources, you can either zoom in the 21:9 sources to fill the entire 16:9 frame (cropping off the sides) or use 21:9 project dimensions and crop off the top and bottom of your 21:9 sources. This is entirely your choice, usually it's easier to use a 21:9 project since you do not have to zoom in the source and suffer potential quality loss.

If you're working exclusively with 16:9 sources but want to add black bars to make your video "cinematic" or for a "dramatic effect", use a 21:9 project to render your video. Like you saw before, **viewing it on a 16:9 screen will give you those black bars** and viewing it on a wider display will fill the entire screen.

If you're working with 16:9 sources and you do not want black bars in your video, use a 16:9 project.

## Why should I care?

More than half of your viewers likely watch your videos on their phones. If you do not care for me and my widescreen viewing pleasure, at least care for your viewers. 

Also, here's how stupid it would look if I did the same thing, aka. windowboxed 16:9 videos into 21:9

## Real 16:9 vs. windowboxed 16:9 on a 16:9 display
<div class="drag-container sixteen-nine compare first" markdown="1">
<img src="./bars/yotsugi.jpg" class="draggable"/>
</div>

<div class="drag-container sixteen-nine compare" markdown="1">
<img src="./bars/yotsugi wide.jpg" class="draggable"/>
</div>

<br style="clear: both" />

## Tips

* You can access the project settings to set the corrrect dimensions for your project in Vegas Pro with [kbd="alt + enter"/].
* You can access the sequence settings to set the correct dimensions for your sequence in Premiere Pro from the Sequence menu or by right clicking your sequence in the project panel.
* You can access the composition settings to set the correct dimensions for your composition in After Effects with [kbd="ctrl + K"/].
* All of what was said before also applies to the legacy 4:3 format. Do not render 4:3 windowboxed inside 16:9. Render it as 4:3. Thank you. 

<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js" defer></script>

<script defer>
  $( function() {
    $( ".draggable" ).draggable({ containment: "parent" });
    $(".draggable").each(function () {
      const w = $(this).width();
      const pw = $(this).parent().width();
      const h = $(this).height();
      const ph = $(this).parent().height();
      $(this).css({ left: pw / 2 - w / 2 + "px", top: ph / 2 - h / 2 + "px" });
    });
  });
</script>

[assets=inlineCss]
.drag-container {
    background-color: black;
    max-width: 100%;
    width: 100%;
}

.drag-container .draggable {
	margin: 0 !important;
    object-fit: contain;
    max-height: 100%;
    max-width: 100%;
    height: auto;
    width: auto;
}

.first {
	margin-bottom: 1rem;
}

@media only screen and (min-width: 780px)  {
    .compare {
        max-width: calc(50% - 1rem);
        float: left;
    }
    .first {
        margin-bottom: 0;
        margin-right: 1rem;
    }
    .drag-container {
        transition: background-color 0.17s ease-out; 
    }
    .drag-container:hover {
        background-color: gray;
    }
}

.sixteen-nine {
	aspect-ratio: 16/9;
}

.twentyone-nine {
	aspect-ratio: 21/9;
}
[/assets]