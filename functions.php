<?php

declare(strict_types=1);


function render_template(string $template, array $data = [])
{
    extract($data);
    require "templates/$template.php";
}

/* obtener datos api sin classes ni select

const API_URL = 'https://potterapi-fedeperin.vercel.app/es/characters';

function get_data( string $url) : array
{
    $result = file_get_contents($url);
    $data = json_decode($result, true);
    return $data;
}
*/