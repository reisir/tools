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
