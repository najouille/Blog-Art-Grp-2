<!--
 $dir = '';
 $requestUri = $_SERVER['REQUEST_URI'];
 if (strpos($requestUri, 'blog-art') !== false || strpos($requestUri, 'blogart') !== false || strpos($requestUri, 'BlogArt') !== false || strpos($requestUri, 'Blog-Art') !== false) {
   preg_match('/[\\\\\/][^\\\\\/]*$/', dirname(dirname(dirname(__DIR__))), $matches, PREG_OFFSET_CAPTURE, 0);
   $dir = str_replace("\\", "/", $matches[0][0]);
 } else {
   // $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
   $dir = '';
 }
 
 ?> -->

<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="preconnect" href="https://fonts.gstatic.com" />
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/jgthms/minireset.css@master/minireset.min.css" />

<!-- 

  function scanDirr($target)
  {

    if (is_dir($target)) {

      $files = glob($target . '*', GLOB_MARK); //GLOB_MARK adds a slash to directories returned

      foreach ($files as $file) {
        scanDir($file);
      }
    }
  }
  scanDirr('../../');


 -->