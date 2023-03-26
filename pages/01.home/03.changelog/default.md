---
title: changelog
---

A very scuffed way to document changes I make to the theme / stylesheets and to make the GitSync plugin notice the changes.

===

## 21.03.2023

* Added a hover effect to the home page grid.
* Better editor plugin fix thx Ricardo from the grav discord.
* Better list.html.twig template, gets the visible and published children by default.
* Better author profile css (might modify further), always display the author name without hovering.

## 23.03.2023

* Recovered from ISP changing the IP 
* Changed admin theme
* Fixed some unnecessary scrollbars showing up in the admin panel (because of the editor plugin)
* Fixed all unnecessary scrollbars showing up in the admin panel (because of the editor plugin)

## 24.03.2023

* New griddy template, only used for the front page at the moment
    * The griddy template requires a collection and for all the pages to have an image and a summary delimiter. Do not use it if you don't know what those are or are unsure if all the pages in the collection fulfill the requirements

## 26.03.2023

* Reorganized styles and enabled CSS pipeline to combine and minimize all stylesheets into one file
	* These stylesheet and template changes require all pages to have a summary delimiter or stuff breaks