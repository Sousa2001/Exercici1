
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $pelis=[['nom'=>'Wonder','director'=>'Stephen Chbosky', 'any'=>'2017'],
            ['nom'=>'Mulan','director'=>'Niki Caro', 'any'=>'2020'], 
            ['nom'=>'Parasitos','director'=>'Bong Joon-ho', 'any'=>'2019']        
    ];

    if (isset($_GET['nom'])){
        foreach($pelis as $row => $valor){
            $nombre_peli=array_search('nom',$peli);
                if ($_GET['nom'|| 'director' || 'any']==$valor){
                    $nom_peli=filter_input(INPUT_GET, 'nom', FILTER_SANITIZE_URL );
                    $director_peli=filter_input(INPUT_GET, 'director', FILTER_SANITIZE_URL );
                    $any_peli=filter_input(INPUT_GET, 'any', FILTER_SANITIZE_URL );
                }
            }
    }else{
        $nom_peli="Nombre no encontrado";
        $director_peli= "Director no encontrado";
        $any_peli= "Año no encontrado";
    }

    ?>
    <table>
        <tr>
            <th>Nom</th>
            <th>Director</th>
            <th>Any</th>
        </tr>
        <tr>
            <td><?= $nom_peli;?></td>
            <td><?= $director_peli;?></td>
            <td><?= $any_peli;?></td>
        </tr>
    </table>
</body>
</html>