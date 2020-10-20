
    <?php

    $pelis=[['nom'=>'Wonder','director'=>'Stephen Chbosky', 'any'=>'2017'],
            ['nom'=>'Mulan','director'=>'Niki Caro', 'any'=>'2020'], 
            ['nom'=>'Parasitos','director'=>'Bong Joon-ho', 'any'=>'2019']     // Esto es mi array de peliuclas   
    ];
    if (isset($_GET['nom'])){ 
        $nombre_peli=$_GET ['nom']; // recoge el nombre d ela pelicula por la url
        foreach($pelis as $nom){ //recorre el array para averiguar si la pelicukla escrita est ane el array
                if (array_search($nombre_peli,$nom)){
                    $nom_peli=$nom['nom']; //recoge los datos del array de peliculas
                    $director_peli=$nom['director']; //recoge los datos del array de peliculas
                    $any_peli=$nom['any']; //recoge los datos del array de peliculas
                    echo "INFORMACION SOBRE $nom_peli<br>";
                    echo "La pelicula $nom_peli tiene como director $director_peli y es del año $any_peli";

                }
        }
    }

    ?>