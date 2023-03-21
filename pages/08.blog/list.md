---
title: Blog
slug: blog
menu: Blog
content:
    items: '@self.children'
body_classes: no-anchors
metadata:
    'twitter:card': summary_large_image
taxonomy:
    category:
        - listable
---

Personal posts by amv.tools writers.

===

{# Sort posts by author #}

{% for author in page.taxonomy.authors %}
<h3>Blog posts by {{ author|capitalize }}</h3>
<div class="list">
	{% for page in page.collection() %}
        {% if page.taxonomy.authors|first == author %}
            <h3><a href="{{ page.url }}">{{ page.title }}</a></h3>
            <p>{{ page.summary|raw }}</p>
        {% endif %}
	{% endfor %}
</div>
{% endfor %}