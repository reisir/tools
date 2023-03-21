---
title: Preferences
taxonomy:
    category:
        - docs
    authors:
        - reisir
media_order: 'autosave preferences.png,disk cache preferences.png,general preferences.png,memory preferences.png'
routes: {  }
---

Some generally helpful preferences you can set in [kbd="Edit > Preferences"/].

===

## General Preferences {#general-preferences}

![general preferences tab](general%20preferences.png){.panel}

1. Unset to delete mask points without getting an error and without deleting the same point accross all keyframes.
2. Enable to automatically center the anchor point when making shape layers.
3. Allows you to disable the Home Screen that pops up when you open After Effects

## Auto-Save {#auto-save}

![autosave preferences tab](autosave%20preferences.png){.panel}

Set the time and maximum project versions to whatever you're comfortable with. Note that AE will not actually save every n minutes, if you've saved the project recently. AE will only Auto-Save when there's changes to be saved.

## Memory {#memory}

![Memory &amp; Performance tab](memory%20preferences.png){.panel}

AE needs a lot of memory for previews. Unlike other programs, After Effects pretty much depends on your RAM to play previews. There is of course Media & Disk cache but disk cache is only used for storing previews that aren't actively used. You can see the previews at the top of the timeline, a green line means that portion is cached in RAM and it's ready to play. A blue line means it's cached on disk and it can be played if requested (you need to start playback from or near the blue section to free enough RAM for it to fetch the preview into). No line means that the section will need to be rendered when previewing.

So because of this need for RAM, set the "RAM reserved for other applications" as low as you can. Windows usually wants about 1GB for itself, a web browser will need another gigabyte and any remaining apps (like discord etc.) will usually want one to two gigabytes on top. So even though I have 32 GB, I still only leave four for the rest of my system and let AE run wild with the 18 GB. 

If you're running out of RAM when previewing, even after letting AE hog as much as possible, you might need to purge the cache. This can be done from [kbd="Edit > Purge > All Memory"/]. If you use After Effects a lot, you should probably set a [keybinding](/opinions/keyboard) for this since it's sometimes required after every change you make (if you have like twenty layers stacked and an effect linked to all of them or something, this is pretty rare. but still. set the keybind)

## Media & Disk Cache {#media-disk-cache}

![Media &amp; Disk Cache tab](disk%20cache%20preferences.png){.panel}

AE writes and reads video previews to and from a cache folder. You should preferrably move the cache to an SSD that's separate from your programs and your footage. If you don't have that, just use the fastest drive you have.

The maximum Disk Cache Size should be set to about 40% - 50% of the available space on the drive. If you have a 1TB free, make the cache about 400GB. This is because sometimes AE will forget to clear the cache and think it has space available when it doesn't. And this can result in AE using about double the maximum amount you set.

### Note about Disk Cache

Clearing the Cache (or memory) usually solves most preview and rendering problems.

You can empty the disk cache from the Media & Disk Cache preferences or purge all cache and/or memory from <kbd>Edit > Purge > All Memory & Disk Cache...</kbd>. I recommend setting a [keyboard shortcut](/after-effects-extra/keyboard) for this
