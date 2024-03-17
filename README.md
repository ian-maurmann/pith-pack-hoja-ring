# pith-pack-hoja-ring
Pack Hoja for Pith

-------

# About

This project packs Hoja Double Ring (and several forks of it) so that they can be available to use on the front-end via the Pith Framework.

Hoja Double Ring is a pen on CodePen, at https://codepen.io/fixcl/pen/ANRYgd

For info on Pith, see the Pith website at https://pith-framework.org/

# Install

Install to an existing Pith Framework project

Use Composer to install pack to the `vendor` folder.
```bash
php composer.phar require pith-front/pith-pack-hoja-ring
```

Add new route to your Route List:

```php
public array $routes = [
    // Other routes....
    // ...
    
    // Add route to call Hoja resources from
    ['route', 'GET', '/resources/vendor/library/hoja/{filepath:.+}', '\\PithFront\\PithPackHojaRing\\HojaRingResourceRoute'],
];
```

-------------
# Licensing

### Hoja Double Ring
#### Licensing Info:
- Based on a CodePen pen by Marco Barría: Link: https://codepen.io/fixcl/pen/ANRYgd
- "Hoja Double Ring" by: Marco Barría (https://twitter.com/marco_bf)
- Code posted to CodePen is MIT Licensed: https://blog.codepen.io/documentation/licensing/

### hoja-ring-snippets
#### Licensing Info:
- Link to Git repo: https://github.com/ian-maurmann/hoja-ring-snippets
- The code in hoja-double-ring is from CodePen pen by Marco Barría. See info above.
- The code in hoja-aquamarine, and hoja-blue are (slightly) modified versions of hoja-double-ring. In countries where this is a substantial change for copyright, copyright is (c) Ian Maurmann, hereby released under the terms  of the MIT license. In countries where this is not a substantial change, follow the copyright and license of "Hoja Double Ring".


### pith-pack-hoja-ring
#### Licensing Info:
- pith-pack-hoja-ring
- The MIT License (MIT)
- Copyright (c) Ian Maurmann
- Link: https://github.com/pith-front/pith-pack-hoja-ring

-------------
