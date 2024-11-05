<?php
declare(strict_types=1);
$url = 'https://potterapi-fedeperin.vercel.app/es/characters';

function get_data( string $url) : array
{
    $result = file_get_contents($url);
    $data = json_decode($result, true);
    return $data;
}

function render_template( string $template, array $data = [])
{
    extract($data);
   // var_dump($data);
    require "templates/$template.php";
}


?>