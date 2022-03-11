<?php

$movies = [ 
    'Raiders of the lost Ark' => 1981,
    'Indiana Jones and the Temple of Doom' => 1984,
    'Indiana Jones and the Last Crusade' => 1989,
];

//echo $movies;

//echo count($movies);

//var_dump(in_array(1981, $movies));

arsort($movies);

foreach ($movies as $movie => $year)
{
    echo $year . ' - ' . $movie . ' ' ;
};
