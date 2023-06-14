---
title: 'Dealing with Premiere Pro and retaining your sanity'
taxonomy:
    authors:
        - reisir
visible: false
---

I hate Premiere Pro and these are all the reasons why

===

## Vegas editors nightmare

- overlapping clips is destructive
- separate tool for absolutely everything
- you can add a keyboard shortcut to "Add edit" which works essentially like Vegas' [kbd=s]plit
	- playhead only moves when you click on it specifically, so "Add edit" isn't as easy to use as split in Vegas
- you can set a keyboard shortcut to "Speed/Duration" or use the "Rate" tool to change speeds when needed
- the ctrl + L mode doesn't exist, you have to use either the ripple edit tool or slide tool, both suck 
	- you can move clips and then select and delete the space between them. this has unintuitive consequences for clips on other tracks
- cannot loop clips, have to copy and paste to loop

## Preferences

- audio scrubbing enabled by default. some people claim this helps them.

## Subclips, in/out points, audio tracks and why source patching and track targeting are shit systems

https://helpx.adobe.com/premiere-pro/using/source-patching-track-targeting.html

- since overlapping clips is destructive, copying and pasting clips is also destructive
- this wouldn't be an issue if track targeting wasn't a thing and it instead just pasted onto a track that has space or the one your mouse is at
- the claimed benefit of track targeting is that you can use shortcuts to navigate between clips, on tracks that are targeted. but you have to fucking enable the targeting to do this??
- how I deal with this is keep only one track targeted and always have it empty. this can be track 1 or 24 just keep it empty so you can actually copy paste without accidentally deleting half your work

## Masking? I hardly know her

- masks are feathered by default because you're not supposed to do accurate masking in Premiere
- no way to zoom in when masking
	- no the dropdown menu doesn't count
- the solution is to not mask in Premiere, use After Effects instead

