PicoPlacing, to have a manual sort order for the pico menu
==========================================================

Pico v.1.0 - ready!

Provides Pico CMS with the ability to place the pages in any order according to a meta flag.
The pages are sorted and iterated in the specified order, for example in the navigation.
In case of same Placing-tag, first comes the page with the name first in alphabetical order.

Install
-------
1. Place the 'PicoPlacing.php' to your Pico install 'plugins' folder.
2. Add the following in your `config/config.php` file:

```
    $config[ 'PicoPlacing.enabled' ] = TRUE;
    $config[ 'pages_order_by' ] = 'placing';
```

3. Add 'Placing: #' in your page meta data. Example:
```
/* 
Title: Example page
Author: John Doe
Date: 2016/2/1
Placing: 1 
*/
```

4. Thats it, have fun    :)

---
hope you like this. if something goes wrong, ask me.

Forked from: https://github.com/ollierik/Pico-Placing
