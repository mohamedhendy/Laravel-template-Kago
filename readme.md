# Knowledge And Growth school portal

## Install Development environment

### Requirements

- [Composer](https://getcomposer.org) dependency manager
- [Node.js](https://nodejs.org) runtime
- [Yarn](https://yarnpkg.com) package manager

### Clone repository

> `git clone https://gitlab.com/Gulfdata/kag-school.git`

### Install dependancies

> `composer install`

> `yarn`

### Css and Js compiler

> `yarn run watch`

## Development guidelines

### General

- Do not add any assets [js, css, images, fonts] directly into `public` folder, rather add them to `resources` folder, then restart the [compiler](#css-and-js-compiler).

### JavaScript

- Do not write code in:
  - `resources/js/front/index.js`
  - `resources/js/back/index.js`  
  Only use them for importing other files.

- Create a `js` file for each feature, with proper name for the file, preferably the same name as the `blade` and `sass` files.

- Group related features into a sub-folder.

### Sass

- Do not write styles in:
  - `resources/sass/base/index.scss`  
  - `resources/sass/front/index.scss`
  - `resources/sass/back/index.scss`  
  Only use them for importing other files.

- Create a `sass` file for each feature, with proper name for the file, preferably the same name as the `blade` and `js` files.

- Group related features into a sub-folder.

#### Special Classes

- `<body>` element will have either `.rtl` or `.ltr` class depending on the current display language.
- All `.root`, `.menu`, `.alerts`, `.content`, `.footer`, `.social`, and `.copyright` are used as high level classes.  
Use `resources/views/front/layout.blade.php` as reference.

### Blade

- Each page should define a `$title` variable to be used in `<title>` tag.

#### Markup content

- `$site` is a global function to get contents of layout.  
  Refer to `resources/views/front/layout/header.blade.php` for examples.  
  Usage:  
  - `$site('content-key')` gets higher level content.
  - `$site('content-name', 'section-name')` gets content from a section in the layout.  
  Refer to `resources/views/front/layout/social.blade.php` for an example.

- `$page` is a page specific function to get contents of each page.  
  Usage:  
  - `$page('content-key')` gets higher level content.
  - `$page('content-name', 'section-name')` gets content from a section in the page.  

- Default values:  
  The folder `resources/lang/en/pages/` contains the default values.
  The key is constructed like this `content-name` + `-` + `section-name`. 
