---
title: 'The One Thing All Vegas Editors Ought To Know'
slug: totaveotk
visible: true
media_order: 'resample.mp4,resampling example.png,resample is on.gif,resample switch.png,project settings.png,no resampling example.png'
child_type: docs
menu: TOTAVEOTK
routes: {  }
taxonomy:
    authors:
        - reisir
metadata:
    'twitter:card': summary_large_image
    'twitter:image': 'https://amv.tools/vegas-pro/totaveotk/resample%20is%20on.gif'
---

Resampling is Vegas' barrier to entry. It's on by default and makes your renders all mushy and gross. It's also a hassle to get rid of. After learning about it, you will not be able to ignore it and you will begin to notice it everywhere you look. This guide will most likely ruin some of your AMV viewing experiences. You're welcome.

===

[row]
![resampling enabled (the default)](resampling%20example.png "Anime: Black Lagoon")
[divider]
![resampling disabled](no%20resampling%20example.png "Anime: Black Lagoon")
[/row]

## Disabling resampling

The easiest way to disable resampling (before Vegas Pro 14) is to always toggle the resampling switch when you add a new source onto the timeline. The switches can be found in the right click menu of the video event. If you have an existing project, you can select all of your clips and the switch menu will apply to all of them. Just be sure not to select any audio events or the resampling switch option will be hidden.

![disable resample switch](resample%20switch.png)

In Vegas versions newer or equal to 14, you can disable resampling from the project settings. Project settings can be accessed from the [i=vpgear/] gear icon in the top left corner of the preview panel. This is a good time to double check your project settings like framerate are correct. 

Note: Sometimes disabling resampling from the project settings doesn't actually have an effect. This usually happens if your project already contains footage. So try to remember to disable resampling whenever you make a new project. Even then, be sure to make a test render to double check if resampling is off. If it's not, you'll need to use the first method to disable it.

![resampling in project settings](project%20settings.png)

## Extra

Here's a script that I adapted from the [Vegas help forums](https://www.vegascreativesoftware.info/us/forum/does-anyone-have-a-script-to-disable-resample-on-vegas-16--137546/) that disables resampling on all clips in your project. Copy the script from the code block below and save it as a .cs file. You can run scripts from [kbd="Tools > Scripting"] in Vegas

```cs
using System;
using System.IO;
using System.Text;
using System.Drawing;
using System.Windows.Forms;
using ScriptPortal.Vegas;

public class EntryPoint
{
    public void FromVegas(Vegas vegas)
    {
        foreach (Track track in vegas.Project.Tracks)
        {
            if (track.IsVideo())
            {
                foreach (TrackEvent evnt in track.Events)
                {
                    VideoEvent videoEvent = (VideoEvent)evnt;
                    VideoResampleMode VRMode = VideoResampleMode.Disable;
                    videoEvent.ResampleMode = VRMode;
                }
            }
        }
    }
}
```










