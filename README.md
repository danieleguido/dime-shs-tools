# dime shs wordpress theme
This theme is a specific theme conceived for a specific project.
It does not handle widgets, nor sidebar! But it's a real basic theme which implements 960gs, less, jquery.
It has the simpler theme options interface, allowing just to choose the .less stylesheet to be used.

## installation
To install this theme, download this folder and install it inside your wordpress themes installation, then install the theme via the admin interface.

## plugins dependences
This themes should be used with some useful plugin.
qTransalte : translation plugin to activate language switch

## style configurations, images etc..
Theme stylesheet are .less files that extends a boilerplate.less file.
Themes and Boilerplate are stored under 
	~/css/themes.

We make use of adapt js lib to adjust the size and positioning of elements onto our 960 grid.
Adapt related stylesheets are stored under 
	~/css/adapt

All images - logos, borders, flags… - are collected into a unique "sprite" image, one for each sub-theme. 
The url is described at the very top of each .less file, and the images are stored under 
	~/img folders

