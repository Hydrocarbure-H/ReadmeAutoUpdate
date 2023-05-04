<?php

$gifs = [
    'assets/1.gif',
    'assets/2.gif',
    'assets/3.gif',
    'assets/4.gif',
    'assets/5.gif',
    'assets/6.gif',
];

function randomGif($gifs)
{
    return $gifs[array_rand($gifs)];
}

function get_my_gif($gifs)
{
    # check the url and get parameter for the gif
    if (isset($_GET['gif']) && (int) $_GET['gif'] > 0 && (int) $_GET['gif'] <= 6)
    {
        $gif = $gifs[(int) $_GET['gif']];
    }
    else
    {
        $gif = randomGif($gifs);
    }
    return $gif;
}

$f = fopen(get_my_gif($gifs), 'rb');
header('Content-Type: image/gif');
fpassthru($f);
exit;
