<?php
// Image directory path
$image_dir = "images";

// Allowed file types
$extensions_array = array('jpg', 'jpeg', 'png', 'gif');

// Thumbnail size (in pixels)
$thumbnail_size = 300;

// Image size (in pixels)
$image_width = 600;
$image_height = 400;

// Enable or disable lazy loading
$enable_lazy_loading = true;

// Enable or disable lightbox
$enable_lightbox = true;

// Lightbox configuration options
$lightbox_options = array(
  "maxWidth" => 800,
  "maxHeight" => 600,
  "fitImagesInViewport" => true,
  "showImageNumberLabel" => true,
  "alwaysShowNavOnTouchDevices" => true,
  "wrapAround" => true,
  "disableScrolling" => false,
  "positionFromTop" => 50,
  "resizeDuration" => 500,
  "wrapAround" => true,
  "fadeDuration" => 500,
  "imageFadeDuration" => 500,
  "resizeDuration" => 500
);

// Images per page
$images_per_page = 10;
?>
