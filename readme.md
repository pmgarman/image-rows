# Image Rows

A WordPress plugin that lets you create rows of images easily within your content with one simple shortcode.


### How do I use this magic?

First you use the `[imagerow]` in your content. Within that shortcode have a `images` attribute. This `images` attribute should be a comma separated list of image URLs.

### What if I want the image to be a link?

Simple. Just add the link to the image URL and separate the two with a pipe (this thing >> `|`).

### Examples

Three images, none with links.

```
http://domain.com/image1.jpg,http://domain.com/image2.jpg,http://domain.com/image3.jpg
```

Two images, one which links to Google and the other without a link.

```
http://domain.com/image1.jpg|http://google.com,http://domain.com/image2.jpg
```