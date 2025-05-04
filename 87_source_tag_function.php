<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <?php

  function generateResponsivePicture($mobileUrl, $desktopUrl, $fallbackUrl = null, $extension = 'jpg', $mobileMaxWidth = 375)
  {
    $extension = strtolower($extension);

    // Validate extension
    $validExtensions = ['jpg', 'jpeg', 'png'];
    if (!in_array($extension, $validExtensions)) {
      return '<!-- Invalid image extension -->';
    }

    // Use desktop image as fallback if not provided
    if (!$fallbackUrl) {
      $fallbackUrl = $desktopUrl;
    }

    $minWidth = $mobileMaxWidth + 1;

    $html = <<<HTML
    <picture>
    <source media="(max-width: {$mobileMaxWidth}px)" srcset="{$mobileUrl}" type="image/{$extension}">
    <source media="(min-width: {$minWidth}px)" srcset="{$desktopUrl}" type="image/{$extension}">
    <img src="{$fallbackUrl}" alt="Responsive image">
    </picture>
    HTML;

    return $html;
  }
  ?>

</head>

<body>

</body>

</html>