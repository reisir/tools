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

### Custom user style to move the "uploads" field next to the content editor field in the admin panel

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
