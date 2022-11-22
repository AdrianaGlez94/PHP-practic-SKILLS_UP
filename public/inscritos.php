<?php
require "..modules/require/config.php";
htmlspecialchars($_SERVER ['PHP_SELF']);
$_SERVER['REQUESET_METHOD'] == null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios inscritos</title>
    <link rel="stylesheet" href="css/BBDD.css">
</head>

<body>

    <main>
    <?php if ($_SERVER ['REQUESET_METHOD']==='GET') : ?>
        <form action= "<?php htmlspecialchrs($_SERVER['PHP_SELF']) ?>" method="POST">

            <button type= "submit" name="MostrarInscritos"></button>
        </form>

    <?php else : ?>  
        <?php  
            echo "<div class= 'wrapper'>";
             //require_DIR_ . '/inc/post.php';
            $sql = "SELECT * FROM news_reg";
            $stmt =$conn->prepare($sql);
            $stmt -> execute();
            
            if ($result = $stmt->setFetchMode(PDO::FETCH_ASSOC)) {
                echo "<h2 class='yellow'> Relación de datos </h2>";
                echo "<table border='3'>
                <thead>
                <tr>
                    <th>Nombre y apellidos</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Ciudad</th>
                    <th>Código postal</th>
                    <th>Boletín de noticias</th>
                    <th>Formato en el que desea recibir</th>
                    <th>Sugerencias</th>
                    </tr>
                    </thead>"; 
                    
                    //output data of each row
                    foreach (($rows = $stmt->fetchAll()) as $row) {
                    echo "<tr tr class='azul'> //cambiar color 
                    <td> ".$row["fullname"]." </td>
                    <td>".$row["email"]."</td>
                    <td>".$row["phone"]."</td>
                    <td>".$row["address"]."</td>
                    <td>".$row["city"]."</td>
                    <td>".$row["zipcode"]."</td>
                    <td>".$row["newslwtter"]."</td>
                    <td>".$row["format_news"]."</td>
                    <td>".$row["suggestion"]."</td>
                    </tr>";
                }
            echo "</tr>
            </table>";
            } else{
                echo "<p> 0 results, no found data.</p><br>";
            }
            $conn = null;
            ?>
        <?php  endif ?>
        </main>
        </body>
        </html>

    
    <!-- ------------------------------
        <tr>
            <th>Nombre y apellidos</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Ciudad</th>
            <th>Código postal</th>
            <th>Boletín de noticias</th>
            <th>Formato en el que desea recibir</th>
            <th>Sugerencias</th>
        
        </tr>

            <tr class="verde">   AQUI CAMBIAR 
            <td>Adriana Pilar González Mirabal</td>
            <td>adriana@hotmail.com</td>
            <td>67890789</td>
            <td>Calle Perú #24</td>
            <td>Las Palmas de Gran Canaria</td>
            <td>35010</td>
            <td>HTML news</td>
            <td>HTML</td>
            <td>Todo muy bien</td>
        </tr> -->




