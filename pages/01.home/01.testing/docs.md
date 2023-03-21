---
title: Testing
twig_first: true
process:
    markdown: true
    twig: true
menu: Testing
slug: testing
visible: false
taxonomy:
    authors:
        - reisir
        - bastiera
media_order: 'vlcsnap.png,graph editor.gif,add keyframe.gif'
content:
    items: '@root.pages'
metadata:
    robots: noindex
---

icons in image descriptions do not work :/

heheh i edited the page locally and pushed it to github

![[i=untwirl]](vlcsnap.png "vlcsnap")

<div class="griddy">
{% for page in page.collection %}
    <div>
		{{ page.media.images|first|raw }}
        <h3><a href="{{ page.url }}">{{ page.title }}</a></h3>
        <p>{{ page.summary|raw }}</p>
    </div>
{% endfor %}
</div>

[assets=inlineCss]
.griddy {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 5rem;
}
.griddy img {
    width: auto;
    max-width: 100%;
    max-height: 16rem;
    border-radius: 1rem;
}
.griddy > div {
    display: flex;
    flex-direction: column;
    align-items: center;
    align-content: center;
    gap: 1rem;
}
.griddy * {
    margin: 0;
    padding: 0;
}
[/assets]

[test](/vegas/troubleshooting)

### Logo randomization snippets {.clear}

```twig
{{ random(['tools', 'toolbox', 'hammer', 'screwdriver', 'wrench', 'pen-nib']) }}
{{ random(['video', 'photo-video', 'film', 'desktop']) }}
```

grav processesed the code and cached the result lmao so it only updates whenever I update this page

### Icon shortcodes

[i=3d/][i=alias/][i=frame/][i=index/][i=moblur/][i=shy/][i=speaker/][i=stopwatch/][i=untwirl/][i=adjustment/][i=eye/][i=fx/][i=lock/][i=name/][i=solo/][i=star/][i=tag/][i=text/][i=vtext/][i=pen/][i=shape/]

[assets=inlineCss]
/* Epic filters */
section#body div#body-inner {
    filter: none;
    transition: all 0.5s ease;
}
.sidebar-hidden section#body div#body-inner {
    filter: saturate(200%) blur(150px);
}
[/assets]