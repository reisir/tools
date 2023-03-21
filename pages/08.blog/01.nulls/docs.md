---
title: 'Null transforms'
taxonomy:
    authors:
        - reisir
---

There's an abundance of tutorials on YouTube that recommend using nulls instead of the native transform controls on layers. Often the reason behind doing this isn't explained. It's just accepted as fact, the default, the industry standard. Here's why you don't _need_ to do that and the reasoning behind why you might want to do it, that too many of the tutorials leave out. 

===

### What are nulls?

If you're new to AE or just haven't heard of nulls before, they're layers that do not render anything. Nulls can be used as [parents](/after-effects/transforms#parenting) to "group" multiple layers together. They can also be used as "virtual anchor points", eg. making a layer rotate around a point other than it's real anchor point. You can also rotate the layer around it's own anchor point while simultaneously rotating it around the null. This is what I'll refer to as "overlapping animations of the same property" later on. 

Nulls are also often used as "controllers", to hold control effects for expressions. Nulls can also provide a visual reference to a point control of an effect. I could go on for days. The point is that there's a lot of uses for nulls.

### So why are you talking about this?

Like said before, a lot of tutorials do not explain why they use nulls. This has lead to most "AMV Tutorials" perpetuating the same myth, that using nulls is seemingly required or is somehow just better. These videos usually start with creating a null (or two) per clip and parenting all of the layers to their null(s). This is what in the programming world would be called "boilerplate". Something that's required to make your code work but really just takes up space.

Except in AE, nulls are not required to make anything work. You do not need to have a null for each layer. All layers have their own transform controls, that are the exact same as the ones on the null. Unless you're overlapping animations of the same property, you don't need nulls to do zooms, transitions or anything.

Of course if you decide to use nulls, there are real benefits to it over the native transform controls of a layer:

* You can switch out the clip and retain the transition 
* You can copy paste the null and re-use the transition on another clip
* You can overlap multiple animations of the same property (begin the out transition before the in transition has finished)
* The transformation controls are separated from the layer. This is a workflow preference for some.
* You can move the clip around without affecting the keyframes on the nulls

But in my experience, you do not need to switch or move every clip. So most of the time you won't benefit from using nulls. And if you need to switch the clip, just hit [kbd=U/] and copy all of the keyframes to the new clip. If you need to re-use the animation, copy all of the keyframes to another clip (or use [Flow](/after-effects-extra-credit/plugins#flow)). If you need to move the clip around, you can just move it and reposition the keyframes. Or slip the footage by click and dragging outside of the in and out points of the layer.

This is all just how I prefer to edit, not necessarily the best way to do it. 

### I need to overlap multiple animations of the same property for a transition

Then use a null (or multiple if that makes you happy).

### I want to use nulls, they make my very specific workflow easier

Then use them. 

### Nulls make my timeline cleaner than using transform controls

I do not believe you.

### I didn't use nulls before but I will now that you told me how useful they are

Good.

### Contrived question that allows you to re-iterate your main point?

You should only use nulls whenever you *need* to.












