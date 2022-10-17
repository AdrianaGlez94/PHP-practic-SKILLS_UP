<?php
    require '../require/config.php';

    $name = $email = $phone = $address = $city = $communities = $Zcode= $format = $newscheck= $newsletter=  $text=  $other="";
    $name_err= $email_err = $phone_err = false;

    function limpiar_dato($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function validar_name($name) { 
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            return false;
        }else{
            return true;
        }
    }

    function validar_email($email){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }else {
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
        }else {
            return true;
        }  
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){ 
        print_r ($_POST);
        //echo "<br><strong>Método post enviado</strong><br>;

        if (!empty($_POST["name"]) || !empty($_POST["email"]) || !empty($_POST["phone"])){ 
            echo "<br><strong>name post hay datos</strong><br>";
            $name= limpiar_dato( $_POST["name"]);
            $email=limpiar_dato($_POST["email"]);
            $phone=limpiar_dato($_POST["phone"]);
        
    
            // if(isset($_POST['address'])) ? $address = limpiar_dato($_POST['address']){
            //NO OBLIGATORIOS
            if(isset($_POST["address"])){
                $address = limpiar_dato($_POST["address"]);
            }else {
                $address = null;
            }
            if(isset($_POST["city"])){
                $city = limpiar_dato($_POST["city"]);
            } else {
                $city = null;
            }

            if(isset($_POST["comunities"])){
                $communities = limpiar_dato($_POST["comunities"]);
            } else {
                $communities = null;
            }

            if(isset($_POST["Zcode"])){
                $Zcode = limpiar_dato($_POST["Zcode"]);
            } else {
                $Zcode = null;
                }
            if(isset($_POST["newsletter[]"])){
                $newsletter = limpiar_dato($_POST["newsletter[]"]);
            } else {
                $newsletter = null;
            }
            if(isset($_POST["format"])){
                    $Format =limpiar_dato($_POST["format"]);
                    //a partir de aquí luego que se envíe el dato sino llega deberá limpiar 
            } else {
                $Format = null;
            }
            if(isset($_POST["address"])){
                $address = limpiar_dato($_POST["address"]);
            } else {
                $address = null;
            }
            if(isset($_POST["othert"])){
            $othert = limpiar_dato($_POST["othert"]);
            } else {
                $othert = null;
            }
            
            $address=limpiar_dato($_POST["address"]);
            $city=limpiar_dato($_POST["city"]);
            $communities=limpiar_dato($_POST["communities"]);
            $Zcode=limpiar_dato($_POST["Zcode"]);
            $format=limpiar_dato($_POST["format"]);
            $newscheck=limpiar_dato($_POST["newscheck"]);
            $text=limpiar_dato($_POST["text"]);
            $other= limpiar_dato($_POST ["other"]);
            //echo
            echo "<strong>Noticias que quieres recibir: $newsletter <br>";
            echo "<strong>Name:</strong> $name <br>";
            echo "<strong>Email:</strong> $email <br>";
            echo "<strong>Address:</strong> $address <br>";
            echo "<strong>City:</strong> $city <br>";
            echo "<strong>Communities:</strong> $communities <br>";
            echo "<strong>Zcode:</strong> $Zcode <br>";
            echo "<strong>Format:</strong> $format <br>";
            echo "<strong>Newscheck:</strong> $newscheck <br>";
            echo "<strong>Format:</strong> $newsletter <br>";
            echo "<strong>Text:</strong> $text <br>";

            // Mover
            if(validar_name($name)){

            } else {
                $name_err == true; 
            }


            if(validar_email($email)){

            } else {
                $email_err == true; 
            }

            if(validar_phone($phone)){

            } else {
                $phone_err == true; 
            }
        
    $newsletter = filter_input(
        INPUT_POST,
        'newsletter',
        FILTER_SANITIZE_SPECIAL_CHARS,
        FILTER_REQUIRE Array
    );

    var drump(newsletter);
    echo "<br>Longitud de newsletter: " . count($newsletter) .".";
    $lengArray = count($newsletter);

    switch ($lengArray) {
        case 1:
            if($newsletter[0] == "HTML"){
                return $checkNewsletter= 100;
            } elseif($newsletter[0] == "CSS"){
                return $checkNewsletter = 010;
            } else{
                return  $checkNewsletter= 001;
            }
            break
        case 2: 
            if($newslletter)
            foreach($newsletter as $element){
                if($element !="HTML"){
                    return $checkNewsletter= 011;
                }elseif($element !=="CSS"){
                    return $checkNewsletter=101;
                }else{
                    return $checkNewsletter= 110;
                }
            }
        case 3:
            return $checkNewsletter= 111;
            break;
        default:
            return $newsletter[0]    
    }

        
        // MOVER
        //var_drump($newsletter);
        //echo "<br>";
            }else{
            echo "fallo llegan vacíos";
            }
    } else {
        echo "Fallo post";
    }
    
    /* Si (llega datos) Entonces✔
    tratamos datos
    Si datos llegan los datos necesarios entonces✔
        limpiar la información. ✔
        //asegurar de que están bien escrito.
        validar la informacion. ✔
        Si cumple las validaciones seguimos con el reto de datos.✔
            Si no llegan variables?**
                Asignarles NULL. ✔
            si llegan
                limpiamos los datos y asignamos a las variables.✔
                Si hay información Entonces
                    Mostrar que todos los datos son correctos para enviar a BBDD.
        Si alguna no cumple la validación o todas.
            Mensaje de aviso de que validación a fallado.
    SiNo
        Mensaje de aviso de que no han llegado los datos necesarios.
SiNo
    avisar no han llegado.
Fin Si */
?>