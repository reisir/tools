---
title: 'Essentials script'
taxonomy:
    authors:
        - reisir
visible: true
---

A PowerShell (Windows) script that installs essential video editing tools.

===

Run the [essentials script](https://gist.githubusercontent.com/reisir/141507e4b833ca905ad6fd020f8700b0) in an **administrator** powershell window (you can open one from the WinX menu: `Win + X` then `A`) with this command:

	Set-ExecutionPolicy Bypass -Scope CurrentUser -Force ; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072 ; Invoke-Expression (Invoke-WebRequest -UseBasicParsing https://gist.githubusercontent.com/reisir/141507e4b833ca905ad6fd020f8700b0/raw/)

Hint: You may triple click the command to select the entirety of it.

To answer the questions the script asks you, just press enter for the default option (yes) or type `n` and press enter to decline. You may also type `y` for accepting.

There's a list of programs the script installs at the bottom of this page.
    
### What the command does:

1. `Set-ExecutionPolicy Bypass -Scope CurrentUser` allows scripts to run on your account
2. The second, Network Security Protocol command allows downloading [the script from github](https://gist.githubusercontent.com/reisir/141507e4b833ca905ad6fd020f8700b0/)
3. `Invoke-Expression ( Invoke-WebRequest )` downloads [the script from github](https://gist.githubusercontent.com/reisir/141507e4b833ca905ad6fd020f8700b0/) and then executes it

### What the script does:

0. Checks if it's running in an Administrator shell, if not it launches one.
1. Asks you which package manager you'd like to use. The script can also install the [chocolatey](https://chocolatey.org/) package manager if it's not already present.
2. Asks you if it can install everything without asking more questions. Recommended.
3. Runs through the list of packages (programs), optionally asking you whether or not you'd like to install them.
4. Installs [AMVtool](https://github.com/l33tmeatwad/AMVtool). Installing AMVtool involves downloading it and it's dependecies manually since it's not on any package managers. AMVtool is packaged as a .7z file which requires the script to also install 7zip to extract it.
5. If you chose to install AMVtool, it asks you if you want a desktop icon for it.

## List of packages and install commands / downloads

Here's the list of packages included and commands / links to manually install them. If you feel like a package should be added or the script malfunctions, please [contact](/contact) us.

### MediaInfo

- `.choco install mediainfo`
- `.winget install MediaArea.MediaInfo.GUI`
- [https://mediaarea.net/download/current/](https://mediaarea.net/download/current/)

### MPV media player

- `.choco install mpv`
- `.winget install 9P3JFR0CLLL6`
- [https://sourceforge.net/projects/mpv-player-windows/files/](https://sourceforge.net/projects/mpv-player-windows/files/)

### VLC media player

- `.choco install vlc`
- `.winget install VideoLAN.VLC`
- [https://get.videolan.org/vlc/last/win64/](https://get.videolan.org/vlc/last/win64/)
   
### utVideo codec

- `.choco install utvideo`
- `.winget install UMEZAWATakeshi.UtvideoCodecSuite`
- [https://github.com/umezawatakeshi/utvideo/releases/latest/](https://github.com/umezawatakeshi/utvideo/releases/latest/)
    
### ffmpeg

- `.choco install ffmpeg`
- `.winget install Gyan.FFmpeg`
- [https://www.gyan.dev/ffmpeg/builds/](https://www.gyan.dev/ffmpeg/builds/)
    
### MKVtoolnix

- `.choco install mkvtoolnix`
- `.winget install MoritzBunkus.MKVToolNix`
- [https://www.fosshub.com/MKVToolNix.html](https://www.fosshub.com/MKVToolNix.html)
    
### AMVtool

- [https://github.com/l33tmeatwad/AMVtool/releases/latest/](https://github.com/l33tmeatwad/AMVtool/releases/latest/)
