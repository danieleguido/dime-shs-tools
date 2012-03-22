# dime shs wordpress theme
This theme is a specific theme conceived for a specific project.  
There are three sub-themes each specifying a prominent color and images used. 
We do not use wordpress child themes, an this theme does not handle widgets, and not even a widgetable sidebar!  
But it's a real basic HTML theme which implements 960gs + adapt.js, less stylesheet, jquery.
It has a basic theme options interface, allowing just to choose the .less stylesheet sub-theme to be used.

## installation
To install this theme, download this folder and install it inside your wordpress themes installation, then install the theme via the admin interface.  

## content management
The theme has a main menu bar on the top which will collect all the categories children of a `menu-page` category.  
Each category must contain at least one "post" which will be displayed as content. We use the "category order" plugin to establish their order of appearance on the page.  
The category slug name provides a quick way to implement already emxisting icons (thanks to gliphysh icons set): slugs like `project` or `about-us` have their own icon, carefully chosen by me.

## plugins dependences
This themes should be used with some useful plugin.
1.	qTransalte : translation plugin
2.	category order (top menu)
3.	post order (if used as content, categorized)

## style configurations
A theme stylesheet is a .less files that extends a boilerplate.less file.  
Themes and Boilerplate are stored under `~/css/themes/`  
We make use of adapt js lib to adjust the size and positioning of elements onto our 960 grid.
Adapt related stylesheets are stored under `~/css/adapt/`  
All images - logos, borders, flags… - are collected into a unique "sprite" image, one for each sub-theme. 
The url is described at the very top of each .less file, and the images are stored under `~/img` folder

