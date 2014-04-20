<?php

$url = $_SERVER['REQUEST_URI'];

$base = get_bloginfo('url');

$blacklist = array(
    '/category/back-to-basics/' => $base . '/back-to-the-basics'
);


$temporary = array();


if (@$redirect = $blacklist[$url]) {
    # headers de movido permanentemente
    header('HTTP/1.1 301 Moved Permanently');

    # verifica a url solicitada
    header('Location: ' . $redirect);
}

if (@$redirect = $temporary[$url]) {
    header('Location: ' . $redirect);
}