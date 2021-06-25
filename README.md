# WebPack

-  Updating Plugins
-  Updatind Dependencies
   - @babel/cli
   - @babel/core
   - @babel/preset-env
   - autoprefixer
   - babel-core
   - babel-loader
   - browser-sync
   - browser-sync-webpack-plugin
   - copy-webpack-plugin
   - css-loader
   - css-minimizer-webpack-plugin
   - file-loader
   - jquery
   - mini-css-extract-plugin
   - postcss
   - postcss-import
   - postcss-loader
   - postcss-nested
   - postcss-preset-env
   - postcss-rem
   - postcss-simple-vars
   - precss
   - slick-carousel
   - style-loader
   - tailwindcss
   - url-loader
   - webpack
   - webpack-cli
   - webpack-dev-server
-  Removing Gulp
-  Remove Postcss mixins
-  Change structure class bootstrap to tailwind
-  Add WebPack

## Getting Started

This Base theme Code is developed using next tools:

-   Underscores as source code http://underscores.me
-   Tailwind v2.2.x https://tailwindcss.com/
-   PostCSS https://postcss.org/
-   Material Design --- Icons Here https://material.io/tools/icons/?style=baseline + Developer Guide here https://google.github.io/material-design-icons/

### PostCSS + TailwindCss + Browser sync

It helps us to automate so that every time we make a change in our css we update the ./assets/main.css and we refresh the browser.

1- Go to /themes/fpsbaseTailwind

2- Open console in the fpsbaseTailwind directory, and type:

npm install

4- Open webpack.config.js and change the domain Here

    const localDomain = 'http://webpack.local/';

5- Open the console and sun scripts

    npm run dev
    npm run prod 'when finished project or the update task'

6- Enjoy

---






### 24 May

-   Updating Plugins
-   Updatind Dependencies
-   Updatind gulpfile

# New Updates 2020

### 18 January

-   Updating Plugins
-   Add Mixin
-   to use them from PostCSS Mixins, through the mixin: <br>
    Without parameters : `@mixin section-padding;`<br>
    With parameters : `@mixin section-padding 90px, 120px;`
-   Add @extend - File Helpers.css <br>
    Defined: `@define-placeholder title--1 {font-size: 64px;line-height: 90px;}`<br>
    Use: `@extend title--1;`

# New Updates 2019

### 12 December

-   Updating Plugins
-   Sort out main functions in function.php file
-   404 page (created fields in 'option')
-   template confirmation file upgrade
-   general Headers upgrade
-   remove tml-login template
-   swipebox js was removed

### 9 December

#### FPS Sticky Menu

-   Update Plugin V.1.6.21
-   Removing script footer modal menu (Deprecated)
-   Adding a function inside fpsbase.js file for opening menu
-   Adding Style base
-   Adding icon hamburger span

#### Adding [editorconfig] Root project theme

[editorconfig]: https://editorconfig.org/

### 11 June

Updating Plugins

---

### 4 April

-   Updating Plugins
-   About "Download": For the links with download, add data information to it
    ( data-linktype="download" data-documentName="< DOCUMENT TITLE >" ), Where < DOCUMENT TITLE > is the document title that is being downloaded.
-   Add datalayers file in inc/datalayer-info.php

---

### 2 April

Material icons Added to the framework

-   to use them from html:
    `<i class = 'material-icons'>name icon</i>`

-   to use them from sass, through the mixin:
    `@include mIcons ('name_icon', font-size);`

    for example:
    `@include mIcons ('backup', 2.5rem);`

Defaults values: Icon: 'backup', \$font-size:18px

List with all the icons: https://material.io/tools/icons

Method used for Sass: https://github.com/google/material-design-icons/issues/150#issuecomment-163021143

---

### 29 March

-   Removing Font Awesome v5.7.2
-   Adding Material Design icons
-   Updating to New icons
-   Social Icons are using SVG file
-   Banner, added to Page as example of header banner

---

### 15 March

-   Updating Plugins
-   Code Optimization
-   New mmenu / mobile Menu
-   Updating to Boostrap v4.3.1
-   Updating to Font Awesome v5.7.2
-   adding wp_get_attachment_image() function to images

---

#### Updates 2018

---

### 7 Dic

-   Updating Plugins
-   TML login
-   gulp + sass + Browser sync / improving our workflow (instructions bellow !)

---

### 15 Nov

-   Adding Function of Yoast meta description

---

### 15 Oct

-   Adding htmlemail-2.0.5 plugin
-   Replacing "data-social-network" to "data-socialnetwork" (social footer)

---

### 09 Oct

-   Updating Plugins

---

### 14 Sept

-   Updating Plugins
-   Logo Size

---

### 07 August

-   Changing the font-family of fontawesome

---

### 06 July

-   "Adding author fields (social, thumbnail avatar) - autor.php page"

---

### 04 July

-   Updating Plugins (SEO+TML)
-   Adding Fields of Social Links

---

### 19 June

-   Updating Plugins (SEO+TML)

---

### 04 June

-   Updating to Fontawesome 5.0.13
-   Adding social attributes in footer Section, helping with GTM
-   Updating Plugins
-   Removing Fontawesome Plugin

---

# Hello :)

This Framework is being development to get more useful and faster the develop of a new theme from Front Porch Solutions Company. The idea is the developer use it like base in each development of a site, it has functions, code, fields most used in a basic development but it will be the tool to start with your site. You'll find here:

-   A just right amount of lean, well-commented, templates.
-   The main templates or pages with the basic fields we use in FPS

# Getting Started

This Base theme Code is developed using next tools:

-   Underscores as source code http://underscores.me
-   Bootstrap v4.3.1 https://getbootstrap.com/
-   Sass preprocessor https://sass-lang.com/
-   Material Design --- Icons Here https://material.io/tools/icons/?style=baseline + Developer Guide here https://google.github.io/material-design-icons/

This Base theme Plugins used are next:

-   ACF Plugin https://www.advancedcustomfields.com/
-   ACF Option Pages https://es.wordpress.org/plugins/acf-option-pages/
-   ACF Repeater Field

---

### gulp + sass + Browser sync

It helps us to automate so that every time we make a change in our scss we update the style.css and we refresh the browser.

1- Go to /themes/Fpsbase

2- Open console in the fpsbase directory, and type:

npm install

4- Open gulpfile.js and change the domain Here

    browserSync.init(files, {
        proxy: "themebase.dev/",
    });

5- Type gulp in console

6- Enjoy

---

# Components Ready

#### #'Options' Tab in WordPress Dashboard

-   GTM (Google Tag Manager)
-   Logo
-   Favicon
-   Social Icons
-   Footer Content (Copyrights + Footer Default)
-   Newsletter Form

Are ready to use, only you should add content.
To get these fields it's necessary to import `.JSON` located in https://bitbucket.org/fps-dev/fpsframework/downloads/ . When you imported this file you will find the 'options' tab ready. The fields ready to use are:

##### GTM (Google Tag Manager)

    <head>
        <?php the_field('google_tag_header','option'); ?>
    </head>

    <body>
        <?php the_field('google_tag','option'); ?>
    </body>

---

##### Logo of Site

    <?php
        $GETlogo = get_field('logo_site','option'); //FIELD USED
        $logo =  $GETlogo['ID']; //GET 'ID'
        $size = 'medium'; // (thumbnail, medium, large, full or custom size)
    ?>
    <a href="<?php echo esc_url(get_bloginfo('url'));?>">
        <?php echo wp_get_attachment_image( $logo, $size ); ?> //FRIENDLY RESPONSIVE
    </a>

---

##### Favicon

    <link rel="icon" href="<?php the_field('favicon', 'option');?>">

---

##### Social Icons

    Located in footer.php
    ---------------------

    <?php
     if( have_rows('social_icons' , 'option') ):
        while ( have_rows('social_icons' , 'option') ) : the_row();
        $social = get_sub_field('social_icon');
    ?>
        <a href="<?php the_sub_field('social_profile'); ?>" target="_blank" data-link-type="social" data-social-network="<?php echo $social['value']; ?>">
            <i class="fab fa-<?php echo $social['value']; ?>"></i>
        </a>
    <?php endwhile; endif; ?>

---

##### Footer Content (Copyrights + Footer Default)

    Footer Default
    --------------
    <?php the_field('footer_info' , 'option'); ?>

    Copyrights Field
    ----------------
    <?php the_field('copyright' , 'option'); ?>

---

##### Newsletter Form

    <?php the_field('newsletter_form','option'); ?>

### #Shortcodes

##### Current Year

    [date]

##### Buttons

    The way to use in wp editor is:
    -------------------------------
    [button link="`add url`" color="primary" size="small" target="_self"]read more[/button]

    The conversion is:
    <a class="btn '.$atts["color"].' '.$atts["style"].' '.$atts["size"].'" href="'.$atts["link"].'" target="'.$atts["target"].'">'.$content.'</a>

### #JQuery

-   Swipebox http://brutaldesign.github.io/swipebox/
-   Menu Mobile (mmenu) http://mmenu.frebsite.nl/
-   Carousel Slick http://kenwheeler.github.io/slick/

These elements are located in `js` folder `.js` with all executed.

### #Functions

##### Menus

We defined two menus:

        'menu-1' => esc_html__( 'Header', 'FPSBase' ),
        'menu-2' => esc_html__( 'Footer', 'FPSBase' ),)

---

##### Social Share

    require('inc/shared-social.php');

---

##### Shortcodes

Here are located `Buttons` and `Date` shortcodes

    require('inc/shortcodes.php');

---

##### Pagination

    require('inc/pagination.php');

---

##### Author Settings

It means: Author Image

    require('inc/author-fields.php');

    The field:
    __________

    <?php the_field('author_image'); ?> //Image Author

### #Templates

    * TML
    * Confirmation Page
    * Full Width Template

### #Pages

These pages are ready to be use, it means that each page have clean code and ordenaded.

    * 404.php
    * Author.php
    * Search.php
    * Archive.php
    * Page-home.php
    * Page.php
    * Single.php

### #Styles

##### Defining global Clasess

The base classes are located in `_theme.scss` here defined:

-   Colors
-   Fonts
-   Font Weights
-   Global sizes

Only you need to reuse all classes in this listed you need.

#### #Base Colors

    $primary:         #5278FF;
    $primary-hover:   #3255c9;
    $secondary:       #36BDAD;
    $secondary-hover: #279687;
    $txt:             rgba(60, 63, 77,0.80);

Just you need to change by site colors.

#### #Fonts

    $font-family-base: 'Roboto', sans-serif;
    $font-family-alt:  'Roboto Condensed', sans-serif;

There are two kind of Fonts Variable defined. You can create the extras you want.

### #Where import the Fonts?

Go to functions.php and about 65 line, exactly in `FPSBase_scripts` functions replace:

    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Roboto:400,500,700');

by your line generated in you font tool.

#### #Fonts Weights

    $font-weight-light:  300;
    $font-weight-normal: 400;
    $font-weight-base:   $font-weight-normal;
    $font-weight-bold:   700;
    $font-weight-semi:   600;

---

##### Gravity Form Styles

This file is located in `_partials/_gform-wrapper.scss` and here is defined some basic styles to help the forms of `gravity form plugin` look better. You dont need worry about
validation error styles because here are defined, too.

---

##### Image Background:

When you import an Image Background, just can use this class:

        .backgroundSettings;

        `@extend .backgroundSettings;`

        The styles you will import are next:
        ___________

        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;

---

#### Image Responsive with ACF

The function `wp_get_attachment_image()` generates the srcset attribute allowing for responsive images!
The selected image when using the image ID return type. This example uses the `wp_get_attachment_image()` function to generate the image HTML.

    <?php
        $image = get_field('image'); GET IMAGE ID
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if( $image ) {
            echo wp_get_attachment_image( $image, $size );
        }
    ?>

The result is:

    <img width="2274" height="2480"
    src="URL" class="attachment-full size-full" alt=""
    srcset="URL 2274w, URL-275x300.png 275w, URL-768x838.png 768w, URL-939x1024.png 939w" sizes="(max-width: 2274px) 100vw, 2274px">

---

##### Full Width Content

Somethings, we need to have a full widht version of any content. Now, it's ready to be used:

    <div class="full-content"> //use this class
        ....
    </div>

---

##### Sidebar

There is a sidebar predefined and you can find it in `page.php`

    <div class="content-area">
    	<div class="container">
            <section class="flex-inverter">
                <?php while ( have_posts() ) : the_post(); ?>

                    <aside class="sidebar">
                        <?php if(function_exists('subpages_menu')) { subpages_menu(); } ?>
                    </aside>

                    <div class="info">
                        <?php the_title('<h1 class="entry-title">' , '</h1>'); ?>
                        <?php the_post_thumbnail(); ?>
                        <?php the_content(); ?>
                    </div>

                <?php endwhile; ?>
            </section>
    	</div><!-- #main -->
    </div>

Inside `content-area` class are defined the styles to `sidebar` works well. When the sidebar is activated or added the function of `subpages_menu` is going to show all pages of sub menu if exist.

`flex-inverter` class makes that in responsive view the content can be inverted. It means, the sidebar can be charged under general content. This class (`flex-inverter`) could be used in whatever part of site development.

---

##### Transition Effects

Here we talk about these:

    -webkit-transition: all ease .4s;
    -moz-transition: all ease .4s;
    -o-transition: all ease .4s;
    -ms-transition: all ease .4s;
    transition: all ease .4s;

It helps with a good transition between elements. So, you need to import the class `.fade` like here:

    @extend .fade;

---

#### Display Elements

Change the value of the display property with our responsive display utility classes. We purposely support only a subset of all possible values for display. Classes can be combined for various effects as you need.

| Screen Size        | Class                          |
| ------------------ | ------------------------------ |
| Hidden on all      | .d-none                        |
| Hidden only on xs  | .d-none .d-sm-block            |
| Hidden only on sm  | .d-sm-none .d-md-block         |
| Hidden only on md  | .d-md-none .d-lg-block         |
| Hidden only on lg  | .d-lg-none .d-xl-block         |
| Hidden only on xl  | .d-xl-none                     |
| Visible on all     | .d-block                       |
| Visible only on xs | .d-block .d-sm-none            |
| Visible only on sm | .d-none .d-sm-block .d-md-none |
| Visible only on md | .d-none .d-md-block .d-lg-none |
| Visible only on lg | .d-none .d-lg-block .d-xl-none |
| Visible only on xl | .d-none .d-xl-block            |

Example:

    <div class="d-lg-none">hide on screens wider than lg</div>
    <div class="d-none d-lg-block">hide on screens smaller than lg</div>

To Learn more: https://getbootstrap.com/docs/4.3/utilities/display/

---

#### Spacing Elements

The classes are named using the format `{property}{sides}-{size}` for xs and `{property}{sides}-{breakpoint}-{size}` for sm, md, lg, and xl.
Where property is one of:

-   m - for classes margin
-   p - for classes padding

Where sides is one of:

-   t - for classes that set margin-top or padding-top
-   b - for classes that set margin-bottom or padding-bottom
-   l - for classes that set margin-left or padding-left
-   r - for classes that set margin-right or padding-right
-   x - for classes that set both _-left and _-right
-   y - for classes that set both _-top and _-bottom
-   blank - for classes that set a margin or padding on all 4 sides of the element

Where size is one of:

-   0 - for classes that eliminate the margin or padding by setting it to 0
-   1 - (by default) for classes that set the margin or padding to \$spacer \* .25
-   2 - (by default) for classes that set the margin or padding to \$spacer \* .5
-   3 - (by default) for classes that set the margin or padding to \$spacer
-   4 - (by default) for classes that set the margin or padding to \$spacer \* 1.5
-   5 - (by default) for classes that set the margin or padding to \$spacer \* 3
-   auto - for classes that set the margin to auto

Example:

    <div class="mt-2">MARGIN TOP OF $spacer * .5</div>
    <div class="mx-auto">CENTERED ELEMENT</div>
    <div class="mx-4">MARGIN LEF AND RIGHT OF $spacer * 1.5</div>

To Learn more: http://getbootstrap.com/docs/4.3/utilities/spacing/

---

## Tools Most Used in FPS that you can find in Bootstrap 4.3.1

There are many elements from Bootstrap that we can use and it won�t be necessary to create new code lines. Here, there�s a list of most used:

#### Alerts

http://getbootstrap.com/docs/4.3/components/alerts/

#### Pagination

http://getbootstrap.com/docs/4.3/components/pagination/

#### Accordion

http://getbootstrap.com/docs/4.3/components/collapse/

#### Modal

http://getbootstrap.com/docs/4.3/components/modal/

#### Tabs

http://getbootstrap.com/docs/4.3/components/navs/

#### Display

http://getbootstrap.com/docs/4.3/utilities/display/ - Hiding Elements + Mobile-Friendly - Good utility!

#### Embed Iframe

http://getbootstrap.com/docs/4.3/utilities/embed/

#### Flex Helpers

http://getbootstrap.com/docs/4.3/utilities/flex/

#### Float Elements

http://getbootstrap.com/docs/4.3/utilities/float/

#### Positions

http://getbootstrap.com/docs/4.3/utilities/position/

#### Shadows Style

http://getbootstrap.com/docs/4.3/utilities/shadows/

#### Spacing Elements

http://getbootstrap.com/docs/4.3/utilities/spacing/ - Good utility!

Please, stay update with this documentation and read the rest of content about BootstrapX.
