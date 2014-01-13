Pico-Placing
============

Provides Pico CMS with the ability to place the pages in any order according to a meta flag.
The pages are sorted and iterated in the specified order, for example in the navigation.
In case of same Placing-tag, first comes the page with the name first in alphabetical order.

1. Place the 'pico_placing.php' to your Pico install 'plugins' folder.
2. Add the following line to 'config.php' at the root of your Pico install:

```php
config['pages_order_by'] = 'placing';
```

3. Example page meta data:

/*
Title: Example page  
Author: Jack Jackson  
Date: 2014/1/1  
Placing: 4
*/