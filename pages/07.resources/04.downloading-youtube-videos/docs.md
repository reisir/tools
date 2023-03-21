---
title: 'Downloading YouTube videos'
redirect_default_route: true
routes:
    aliases:
        - /yt-dlp
taxonomy:
    authors:
        - reisir
---

Guide to installing and using [yt-dlp](https://github.com/yt-dlp/yt-dlp), a command-line utility to download YouTube videos. If you do not like command-line interfaces, use [jDownloader](https://jdownloader.org/) for a graphical interface that can also download YouTube videos at any quality.

===

## The guide

This guide is for Windows users. Linux users, just figure it out, here's the [yt-dlp repository](https://github.com/yt-dlp/yt-dlp#installation).

First, you'll need to install [Python 3](https://www.python.org/downloads/). If it asks you about adding it to PATH, add it.

Once you have Python installed, open a terminal. CMD and Powershell both work. Then input this command to install yt-dlp 

    python -m pip install -U yt-dlp

Once it installs, you can close the terminal. Go find a YouTube video you'd like to download and copy the link.

Open explorer, go to your downloads folder (or any folder you like)

Hold [kbd=shift/] and right click the background of the explorer window. Choose `Open PowerShell window here`

Type `yt-dlp`, space, and then paste the YouTube link. The command should look like this `yt-dlp https://www.youtube.com/watch?v=dQw4w9WgXcQ`

Pressing enter will download the YouTube video to the folder you're in. You *can* [customize the behaviour](https://github.com/yt-dlp/yt-dlp#configuration) of yt-dlp by placing a `yt-dlp.conf` file in your user folder. 

My yt-dlp.conf file looks like this:

    -o "%USERPROFILE%/Documents/youtube/%(title)s-%(id)s.%(ext)s" 
    --download-archive "%USERPROFILE%/Documents/youtube/archive.txt" 
    --no-playlist

All it does is define an output folder inside my Documents folder, keep track of the videos I've downloaded with an archive text file and never downloads the playlist if I happen to accidentally give it a link to a video from a playlist.

## Automatically downloading liked videos

A powershell script that downloads all videos you've liked on YouTube. 

    Set-Location -Path $PSScriptRoot
    yt-dlp --no-config-locations `
        -o "%(title)s-%(id)s.%(ext)s" `
        -f "bv[height<=1440]+ba/b" `
        --download-archive archive.txt `
        --cookies-from-browser firefox `
        --yes-playlist `
        --break-on-existing `
        https://www.youtube.com/playlist?list=LL

## Usage

Make a new text file, rename it to `liked.ps1` and copy the script in it. Then place the script file in a folder where you want your liked videos to be downloaded to.

The first time you run the script it will run for a long time, depending on how many videos you have downloaded. After it has run the first time it'll only download the new videos. 

If you stop the first execution, it will only download new videos, and wont get the older videos, ever. You can remove `--break-on-existing` to force it to go through the entire playlist. Remember to add it back once you get through everything.

To keep your collection updated you can either remember to run the script every day or drag the script file into your desktop while holding [kbd=alt/] to make a shortcut to the script. Then move that shortcut to `C:\ProgramData\Microsoft\Windows\Start Menu\Programs\StartUp` and it will run every time you open your computer.

## Script explanation

The first line sets the location of the script to the folder where the script file is in. This makes yt-dlp download the videos to the folder where the script file is.

Then it calls yt-dlp with `--no-config-locations` which tells it to ignore any config files you might have on your machine.

- `-o` sets the output format to `Title - id.extension` aka `Rick Astley - Never Gonna Give You Up (Official Music Video) - dQw4w9WgXcQ.webm`
- `-f` selects the format. `bv[height<=1440]` gets the best video under or exactly 1440p. `+ba` gets the best audio. If neither of those is available it gets the `b` best format automatically.
- `--download-archive` keeps track of the downloaded files in a text file called `archive.txt`. This is so the script doesn't have to iniate a download for every video if it knows it has already downloaded it.
- `--cookies-from-browser` gets your saved login information from the browser of your choice. If you do not use firefox, change firefox to whatever you use. List of [supported browsers](https://github.com/yt-dlp/yt-dlp#filesystem-options)
- `--yes-playlist` always downloads the playlist.
- `--break-on-existing` makes the script stop once it comes accross a video it has already downloaded.
- `https://www.youtube.com/playlist?list=LL` this is where liked videos are located on YouTube.

## Updating yt-dlp 

YouTube likes to fuck with people when it comes to downloading videos and they generally change their site layout pretty often. That's why if some day your video downloads are sluggish, it might be because YouTube changed something.

The folks behind yt-dlp update it fairly quick so just run `python -m pip install yt-dlp --upgrade` to update yt-dlp. If you did not install yt-dlp with pip, you can just run `yt-dlp -U` to update it. 

