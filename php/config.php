<?php

session_start();

define('BASE_URL', 'http://localhost/project5');

function build_url() {
  $Path = BASE_URL;
    foreach(func_get_args() as $path_part)
    {
        $Path .= '/' . $path_part;
    }
    return $Path;
}

?>