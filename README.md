wp_restrict
===========

<h4>Wordpress Plugin</h4>
Restrict Areas from being seen by users that are not logged in, assign certain roles to allow particular users to see the area.

Anything placed inside the shortcode ```html[restrict] xxx [/restrict]``` will be hidden from users.<br>
To Set allowed role(s) ```html[restrict role="xxx"] [/restrict]```. Default is 'read'. This is optional.

```html
[restrict]This is a restricted area.[/restrict]
```
