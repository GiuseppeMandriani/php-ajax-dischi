<?php

    
      require_once __DIR__ . '/../../Milestone_1/database.php';

// $database = [
//    [
//          'title' => 'New Jersey',
//          'author' => 'Bon Jovi',
//          'year' => 1988,
//          'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
//          'genre' => 'Rock'
//    ],
//    [
//          'title' => 'Live at Wembley 86',
//          'author' => 'Queen',
//          'year' => 1992,
//          'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
//          'genre' => 'Pop'
//    ],
//    [
//          'title' => 'Ten\'s Summoner\'s Tales',
//          'author' => 'Sting',
//          'year' => 1993,
//          'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
//          'genre' => 'Pop'
//    ],
//    [
//          'title' => 'Steve Gadd band',
//          'author' => 'Steve Gadd Band',
//          'year' => 2018,
//          'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
//          'genre' => 'Jazz'
//    ],
//    [
//          'title' => 'And Justice for All',
//          'author' => 'Metallica',
//          'year' => 1988,
//          'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg',
//          'genre' => 'Metal'
//    ],
//    [  
//          'title' => 'One more car, one more rider',
//          'author' => 'Eric Clapton',
//          'year' => 2002,
//          'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
//          'genre' => 'Rock'
//    ]
// ];



// Cerco se ho dato per filtrare


$artist = empty($_GET['artist']) ? false : $_GET['artist'];    

// Get albums

$albums = [];

if($artist == false || $artist =='all'){
   $albums = $database;
} else {
   foreach($database as $album){
      if($album['author'] == $artist){
         $albums[] = $album;
      }
   }
}

// Get Artist

$artists = [];
foreach($database as $album){
   if(!in_array($album['author'], $artists)){
      $artists[] = $album['author'];
   }
}

// Final Result

$results = [
   'albums' => $albums,
   'artists' => $artists
];


   header('Content-Type: application/json');
   echo json_encode($results);

?>

