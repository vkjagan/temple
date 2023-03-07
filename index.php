<?php
require 'config.php';
?>
<!doctype html>
<html ⚡>
<head>
  <meta charset="utf-8">
  <title>AMP Image Gallery</title>
  <link rel="canonical" href="https://example.com/amp-image-gallery.html">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script async src="https://cdn.ampproject.org/v0.js"></script>
</head>
<body>
  <h1>AMP Image Gallery</h1>
  <?php
    if (file_exists($image_dir) && is_dir($image_dir)) {
      foreach (scandir($image_dir) as $file) {
        $extension = pathinfo($file, PATHINFO_EXTENSION);
        if (in_array($extension, $extensions_array)) {
          $thumbnail_url = $image_dir . '/' . $file . '?width=' . $thumbnail_size;
          $image_url = $image_dir . '/' . $file . '?width=' . $image_width . '&height=' . $image_height;
          echo '<amp-img src="' . $thumbnail_url . '" width="' . $thumbnail_size . '" height="' . round($thumbnail_size / ($image_width / $image_height)) . '" layout="responsive" alt="' . $file . '"';
          if ($enable_lazy_loading) {
            echo ' loading="lazy"';
          }
          echo '></amp-img>';
          if ($enable_lightbox) {
            echo '<amp-lightbox id="' . $file . '-lightbox" layout="nodisplay" ';
            foreach ($lightbox_options as $option => $value) {
              echo 'data-' . $option . '="' . $value . '" ';
            }
            echo '><amp-img src="' . $image_url . '" width="' . $image_width . '" height="' . $image_height . '" layout="responsive" alt="' . $file . '"></amp-img></amp-lightbox>';
          }
        }
      }
    }
    else {
      echo '<p>Image directory not found.</p>';
    }
  ?>
</body>
</html>
