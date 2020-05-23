<?php

function route($path, $view){
    $base = "projects/rbmusic";
    $request = $_SERVER["REQUEST_URI"];
    $url = trim(str_replace("#", "", $request));
    $url = str_replace($base, "", $url);
    $url = str_replace("//", "/", $url);
    if($url === $path){
        require __DIR__."/views/".$view;
    }
}

route("/", "index.html");
