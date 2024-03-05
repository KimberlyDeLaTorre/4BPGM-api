<?php 

$grupo1 = [
    "Grupo" => "BTS",
    "Origen" => "Corea Del Sur",
    "CantidadIntegrantes" => "7 Chicos",
    "Integrantes" => "RM, Jin, Suga, J-hope, Jimin, V, Jungkook",
    "Lider" => "RM",
    "IntegrantesInactivos" => 7,
    "Debut" => "13 de junio de 2013",
    "CancionDebut" => "No More Dream",
    "AlbumDebut" => "Dark & Wild",
    "Fanclub"=> "ARMY",
    "ColorOficial" => "Morado",
    "Generos" => "K-pop, Hip-Hop, R&B, EDM y mas.",
    "Agencia" => "Big Hit Music",
    "SubAgencia" => "HYBE",
    "Albumes" => 18,
    "Canciones" => 250,
    "Colaboraciones" => 16,
    "Premios" => 600,
    "Bias" => "RM",
    "Edad" => 30,
    "Estatura" => 1.81,

];

$grupo2 = [
    "Grupo" => "BLACKPINK",
    "Origen" => "Corea Del Sur",
    "CantidadIntegrantes" => "4 Chicas",
    "Integrantes" => "Jennie, Jisoo, Lisa, Rose",
    "Lider" => "No Tienen",
    "Debut" => "8 de agosto de 2016",
    "CancionDebut" => "Whistle",
    "AlbumDebut" => "Square One",
    "Fanclub"=> "Blink",
    "ColorOficial" => "Rosa/Negro",
    "Lema" => "Blackpink In Your Area",
    "Generos" => "K-pop, Hip-Hop, R&B",
    "Agencia" => "YG Entertainment",
    "Albumes" => 6,
    "Canciones" => 33,
    "Colaboraciones" => 4,
    "Premios" => 170,
    "Bias" => "Rose",
    "Edad" => 27,
    "Estatura" => 1.68,
    
];

$grupo3 = [
    "Grupo" => "ITZY",
    "Origen" => "Corea Del Sur",
    "CantidadIntegrantes" => "5 Chicas",
    "Integrantes" => "Yeji, Lia, Ryujin, Yuna, Chaeryeong",
    "Lider" => "Yeji",
    "IntegrantesInactivos" => 1,
    "Debut" => "12 de febrero de 2019",
    "CancionDebut" => "Dalla Dalla",
    "AlbumDebut" => "It'z Different",
    "Fanclub"=> "Mydzy",
    "ColorOficial" => "Negro y Rosa Neon",
    "Lema" => "All in us, We are ITZY",
    "Genero" => "K-pop",
    "Agencia" => "JYP Entertainment",
    "Albumes" => 10,
    "Canciones" => 91,
    "Colaboraciones" => 1,
    "Premios" => 40,
    "Bias" => "Chaeryeong",
    "Edad" => 22,
    "Estatura" => 1.68,
    
];

$grupo4 = [
    "Grupo" => "TWICE",
    "Origen" => "Corea Del Sur",
    "CantidadIntegrantes" => "9 Chicas",
    "Integrantes" => "Nayeon, Tzuyu, Chaeyeong, Jihyo, Dahyun, Momo, Sana, Mina, Jeongyeon",
    "Lider" => "Jihyo",
    "IntegrantesInactivos" => 1,
    "Debut" => "20 de octubre de 2015",
    "CancionDebut" => "Like OOH-AHH",
    "AlbumDebut" => "Twicetagram",
    "Fanclub"=> "Once",
    "ColorOficial" => "Albaricoque y Magenta Neon",
    "Lema" => "One in a million!",
    "Generos" => "K-pop, J-pop",
    "Agencia" => "JYP Entertainment",
    "SubUnidades" => "MISAMO",
    "Albumes" => 51,
    "Canciones" => 170,
    "Colaboraciones" => 30,
    "Premios" => 140,
    "Solistas" => "Nayeon, Jyhyo",
    "Bias" => "Momo",
    "Edad" => 27,
    "Estatura" => 1.62,
    
];


$grupos = [
    $grupo1,
    $grupo2,
    $grupo3,
    $grupo4
];
echo json_encode($grupos); 