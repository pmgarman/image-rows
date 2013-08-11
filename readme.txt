=== Image Rows ===
Contributors: patrickgarman 
Donate link:http://patrickisageni.us/
Tags: image rows, image gallery, display images
Requires at least: 3.0
Tested up to: 3.6
Stable tag: 1.0.2
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

A WordPress plugin that lets you create rows of images easily within your content with one simple shortcode.

== Description ==

This plugin allows anyone to easily display images in places you may not want to use a gallery or other currently available methods. Easily create a row of images using the simple shortcode [imagerow] with an attribute of "images" - this attribute should be a comma separated list of image URLs you want to display. You can link the image to another URL by appending the URL to the image URL separating them with a [pipe](http://en.wikipedia.org/wiki/Vertical_bar).

#### Examples 

Three images, none with links.

`[imagerow images="http://domain.com/image1.jpg,http://domain.com/image2.jpg,http://domain.com/image3.jpg"]`

Two images, one which links to Google and the other without a link.

`[imagerow images="http://domain.com/image1.jpg|http://google.com,http://domain.com/image2.jpg"]`

Two images, one which links to Google and the other without a link, and a caption under the entire row.

`[imagerow images="http://domain.com/image1.jpg|http://google.com,http://domain.com/image2.jpg" caption="Hi there! I'm a caption!"]`

== Installation ==

Extract the zip file and just drop the contents in the wp-content/plugins/ directory of your WordPress installation and then activate the Plugin from Plugins page.

== Changelog ==

= 1.0.2 - 08/11/2013 =
* Fix: Styling - Handle images with links better

= 1.0.1 - 08/09/2013 =
* Caption attribute for the [imagerow] shortcode.
* HTML5 support
* Improved default styling with spacing and proper clearfix

Thanks to @jameskoster for putting up with my design questions :)

= 1.0.0 - 08/08/2013 =
* Intial Release

== Frequently Asked Questions ==

= Will this work with my theme? =

Yes this plugin should be compatible with all themes. The row of images will be 100% width of the content area it is included in, and within that images should all be equal widths and equally spaced.

= What happens if images are not all the same size? =

The images displayed will be resized to be 1/X the width of the image row, where X is the total number of images. If there are three images in the row, the image will be 1/3 the width of the row. This means size is not as relevant in this situation, your main concern will be with with the aspect ratio. If your images are all the same ratio you will not have a problem, but if images have different heights at the same width this plugin will not attempt to fix that and you will just have images that are not the same size.

== Screenshots ==
1. Example of three rows of images each with a different number of images included.