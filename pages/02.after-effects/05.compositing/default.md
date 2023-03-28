---
title: Composition
media_order: 'precompose.png,compositing.mp4'
body_classes: composition
taxonomy:
    category:
        - docs
    authors:
        - reisir
slug: compositing
routes: {  }
---

Going over compositing essentials, precompositions and project navigation.

===

<!-- Cool swag title replacement -->
<div class="fancy-title-container" style="width: 100%; display: block;">
<div markdown="1" class="fancy-title" style="margin: 0 auto; width: fit-content;">

<span class="word">com·​po·​si·​tion | \ ˌkäm-pə-ˈzi-shən \</span>

### Definition of _composition_ {.definition}

<span class="space">1</span><span class="space">** : **</span><span class="space">the act or process of composing</span>

##### _specifically_ **:** arrangement into specific proportion or relation and especially into artistic form {.subtitle}

</div>
</div>

![composition parts in 3D](compositing.mp4)

The act of composing means combining multiple parts into a complete... composition. After Effects is a compositing program, not a traditional [NLE](https://en.wikipedia.org/wiki/Non-linear_editing). Meaning it's designed more for post-production, compositing scenes rather than cutting and arranging footage. This makes little to no difference in the way people use it sometimes but make no mistake, the reason that cutting is hard to do in AE is that you're not _supposed to_ cut an entire anime season inside After Effects.

What you are supposed to do, is to cut and arrange your video in Premiere Pro, select all clips belonging to a scene and [kbd="Right click > Replace with After Effects composition"/]. This will send the clips from Premiere into After Effects and replaces the clips in Premiere with a linked AE composition. This way you're using Premiere as your main project and sending bits of it off to AE for post production. You can also just send the entire timeline into After Effects once you're mostly done with the grunt work and divide into scenes later.

If you can't or don't want to use Premiere Pro, you can render your clips (preferrably lossless) and import them into AE. This won't preserve your cuts, effects, masks, layers etc. like dynamic linking from Premiere does but usually it's good enough. There's also a way to import a Vegas project into AE but it gets rid of everything except cuts. And it still requires Premiere as a middleman. And I'm not writing a guide about it. 

![precompose dialog](precompose.png)

Once you have your clips in AE, you may find yourself having problems with timeline space. Since every clip is a layer by necessity, they add up quickly. To make it easier on you (and possible collaborators) the clips can be grouped into compositions. The process is similar to Premiere's nesting. In Vegas you can nest projects which is about the same thing, just a bit clunkier to work with. To group clips, select them and [kbd="right click > precompose"/] or [kbd="ctrl + shift + c"/]. The precompose dialog box will show up and you'll usually want to select "Move all attributes..." and check the box for "Adjust composition duration...". Then click OK to create a separate timeline called a composition. Or a pre-composition, a comp or a precomp (pick your poison). 

In fact, the timeline you've been working in the entire time is also just a composition. Usually a main composition (a comp for an entire scene for example) is called exactly that, and the nested compositions making it up are called precomps. But these are just semantics, all you need to know is that all of the words for comps mean the exact same thing, in different places. And you don't need to make precomps inside every composition, it's just a form of organizing.

## Navigation

You can double click a comp to open it. To get back out you can click on the tabs on the top left of the timeline that show all open compositions. There's also a "mini-map" of compositions that can be accessed by pressing [kbd="tab"/]. The keyboard shortcut [kbd="shift + esc"/] toggles between the two most recently opened comps. So usually the precomp you opened and it's parent composition.

To make your navigation and general life experience better, you should label the precomps you make. And pretty much all layers in your project. And all items in your project panel (and all files on your computer). To give an item a name, select it and press [kbd="enter"/]. 


## Protips
 * If you want to reuse a layer or layers multiple times, precomping them first and reusing the comp will make AE perform better. Since After Effects knows that it's the same composition, it won't have to render it multiple times when you're previewing.
 * Since precomps act exactly like normal layers, you can mask a composition and it will apply to everything inside it.
 * Since compositions are layers, you can apply effects to them and those effects will apply to everything inside it.
 * Both of the previous statements are false, the masks and effects won't apply to things inside the composition but rather to the output of the composition. So you can put different effects on two copies of the same composition and they won't affect each other.
 * All of this is much simpler to just test and see for yourself than me trying to explain it.
 * None of this matters 99% of the time.

[assets=inlineCss]
.composition #summary {
	display: none;
}
.composition .definition {
	margin: -2rem 0;
}
.composition .space {
	margin-left: 1rem;
}
.composition .subtitle {
	margin-left: 4.25rem;
    font-size: 1rem;
    font-weight: 400;
    margin-top: -1.9rem;
    color: var(--color);
}
.composition .fancy-title-container {
	margin-bottom: 4rem;
}
@media only screen and (max-width: 780px) {
    .composition .definition {
    	font-size: 1.5rem;
		margin: -1.75rem 0;
    }
    .composition .subtitle {
        font-size: 0.8rem;
    }
}
[/assets]

