# TOOLS

https://amv.tools/ repo. Mostly automatic updates with the GitSync plugin to back up the content

## Modifications

Modifications I've made to plugins / themes that might be useful to other people

### Editor plugin changes

The [Editor plugin by TwelveTone](https://www.twelvetone.tv/docs/developer-tools/grav-plugins/grav-editor-plugin) is powerful and borderline required if you're going to be customizing your theme and stuff. Unfortunately it just lets any user on your site edit any file, including .php files (the admin plugin included). These three lines of code fix that by only allowing admins to use the plugin.

The code (thanks to Ricardo from the Grav discord for this better version): 

```php
// Deny access if logged in user doesn't have the super permission
if (!$this->grav['user']->authorize('admin.super')) {
    return;
}
```

Place this in `user/plugins/editor/editor.php`, in the `onPluginsInitialized()` function, after it does the `isAdmin()` check. Check the [[commit]](https://github.com/reisir/tools/commit/8cc4f2f8b757a7f416f40e2448c05eb826c2e083#diff-e6d5beb6b8e50de531acdad73dac93c272a46e62b9bce55835cf50904666b29aR172-R176) if you need to.

### CSS to fix a bunch of unnecessary overflow showing up in the admin panel

You can put this in the Custom CSS in the Admin plugins Customization tab. 

```css
/* Fix hover top hints causing overflow */
.hint--top::after {
  left: 0%;
}
/* Re-center the hint triangle */
.hint--top::before {
  left: 25%;
}


/* Fix hover bottom hints causing overflow */
.admin-block {
  overflow: hidden;
}
.hint--bottom::after {
  top: 100%;
  left: calc(100% + 2rem);
  transform: translateY(calc(-100% - 8px));
}
.hint--bottom:hover::after {
  transform: translateY(calc(-100%));
}
/* Reposition the hint triangle */
.hint--bottom::before {
  top: 100%;
  left: calc(100% + 2px);
  transform:  translateY(-8px) rotate(-90deg);
}
.hint--bottom:hover::before {
  transform: rotate(-90deg);
}


/*
 * OPTIONAL STYLING
 */

/* Make the editor area larger by default */
.grav-editor-content .grav-editor [data-grav-editor],
.grav-editor-content .CodeMirror  {
  height: 600px;
}
/* Remove the footer */
.admin-panel footer#footer {
  height: 0;
  overflow: hidden;
  display: none;
}
```

### Custom user style to move the "uploads" field next to the content editor field in the admin panel

I use this as a user style in my browser, not in the admin custom css directly.

![firefox_YXv0FBF6bU](https://user-images.githubusercontent.com/93496808/227353320-1b583aca-7263-4ba7-ac74-c0f1bb8591be.png)

```css
/* Make the page editor first tab flex and wrap */
.tabs-content div[id^="tab-flex-pages-"]:first-child .form-tab {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}

/* All non editor or uploads form-fields */
.tabs-content div[id^="tab-flex-pages-"]:first-child .form-field {
    width: 100%;
    flex-shrink: 0;
}

/* Content editor form-field */
.tabs-content div[id^="tab-flex-pages-"]:first-child .form-field:not(.grid):not(.frontmatter):not(.form-label) {
    flex: 1 1;
}

/* The uploads field */
.pagemedia-field {
    flex: 1 0;
    margin: 0;
    max-width: 16.1rem;
    padding: 0 !important;
}

/* Fix the "drop your files here" button overflowing */
.pagemedia-field button {
    white-space: normal;
    background-color: transparent !important;
    cursor: pointer;
}

/* 
 * OPTIONAL STYLING FOR THE UPLOADS LABEL
 */

/* The uploads field label and size adjust */
.pagemedia-field .form-label {
    flex-wrap: nowrap;
    flex-direction: row;
    gap: 1rem;
}

.pagemedia-field .form-label > * {
    flex: 1 1;
    white-space: nowrap;
}

.pagemedia-field .form-label input {
    width: 100%;
    background: transparent;
}
```
