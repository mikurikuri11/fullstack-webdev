<?php
require_once 'config.php';
require_once SOURCE_BASE . 'partials/header.php';

$rpath = str_replace(BASE_CONTEXT_PATH, '', $_SERVER['REQUEST_URI']);
$method = strtolower($_SERVER['REQUEST_METHOD']);

route($rpath, $method);

require_once 'partials/footer.php';

function route($rpath, $method) {
  if($rpath === '') {
    $rpath = 'home';
  }

  $targetFile = SOURCE_BASE . "controllers/{$rpath}.php";

  if(!file_exists($targetFile)) {
    require_once SOURCE_BASE . "views/404.php";
    return;
  }

  require_once $targetFile;

  $fn = "\\controller\\{$rpath}\\{$method}";
  $fn();
}

?>