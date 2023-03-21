---
title: amv.tools
media_order: 'favicon.png,pentool.jpg'
body_classes: 'no-anchors home'
visible: true
menu: Home
content:
    items:
        -
            '@taxonomy.category': listable
    order:
        by: default
---

#### Guides and resources for editors {.center .nomobile .subtitle}

!!!! Get rid of those black bars in Vegas!: [Removing Black Bars](https://amv.tools/vegas-pro-extra/removing-black-bars)

===

<div class="griddy" style="margin: 2rem 0;" >
{% for page in page.collection %}
    <a href="{{ page.url }}">
		{{ page.media.images|first|raw }}
        <h3>{{ page.title }}</h3>
        <p>{{ page.summary|raw }}</p>
    </a>
{% endfor %}
</div>

## General information

Keyboard shortcuts on the site are marked <kbd>like this</kbd>. Application menu items (the menus below the program name) are also marked <kbd>like this</kbd>. Submenus of all kinds are marked with the <kbd>></kbd> sign. Here's some examples:

* <kbd>File > New > New Project</kbd> or <kbd>ctrl + alt + N</kbd> will create a new project. 
* [kbd=V/] is the shortcut for the selection tool.

There are also icons littered across the guides, to help you identify certain UI elements. Examples: 

* Use the stopwatch [i=stopwatch/] to enable keyframing
* Untwirl [i=untwirl/] the mask options

## Sidebar menu

The guides under the Vegas and After Effects courses are listed "in order of relevance". In practice this means that if you progress in the listed order, you'll have the required knowledge to understand the next chapter. The "order of relevance" also means that the starting guides are useful for most editors while the later ones like [transforms in After Effects](/after-effects/transforms) might not be relevant to everyone.

You do not have to follow the order. 