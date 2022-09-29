<?php
    require '../require/config.php';

    $name = $email = $phone = $address = $city = $communities = $Zcode= $format = $newscheck=  $text="";
    ""; 

    function limpiar_dato($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        print_r ($_POST);

       //echo "<br><strong>Método post enviado</strong><br>;

        if (!empty($_POST["name"]) || !empty($_POST["email"]) || !empty($_POST["phone"])){ 
        echo "<br><strong>name post hay datos</strong><br>";
        $name= limpiar_dato( $_POST["name"]);
        $email=limpiar_dato($_POST["email"]);
        $phone=limpiar_dato($_POST["phone"]);
        $address=limpiar_dato($_POST["address"]);
        $city=limpiar_dato($_POST["city"]);
        $communities=limpiar_dato($_POST["communities"]);
        $Zcode=limpiar_dato($_POST["Zcode"]);
        $format=limpiar_dato($_POST["format"]);
        $newscheck=limpiar_dato($_POST["newscheck"]);
        $text=limpiar_dato($_POST["text"]);

        $other= limpiar_dato($_POST ["other"]);
        echo "<strong>Noticias que quieres recibir: $newsletter <br>";
        echo "<strong>Name:</strong> $name <br>";
        echo "<strong>Email:</strong> $email <br>";
        echo "<strong>Phone:</strong> $phone <br>";


        function validar_name($name){
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                return false;}
                else{
                    return true;
                }
            function validar_email($email){
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    return false;
                    } else {
                    return true;
                    }
                }
                //** Todo 
                /** 
                * validar un numero de telefono
                *
                *@pararam boleano
                */
            function validar_phone($phone){
                    if(preg_match('/^[0-9]{10}+$/', $phone)) {
                    return false;
                    } else {
                    return true;
                    }  
        }
    }
    }
    }

        if (validar_name($name)){
            echo "validada";
        } else{
            echo "no validada";
        }
        
        //var_drump($newsletter);
        //echo "<br>";
?>