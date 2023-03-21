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

