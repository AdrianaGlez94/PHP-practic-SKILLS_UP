<?php
    require '../require/config.php';

    $name = $email = $phone = $address = $city = $communities = $Zcode= $format = $newscheck=  $text="";
    function limpiar_dato($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function validar_name($name){
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            return false;
        }else{
            return true;
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
    if($_SERVER["REQUEST_METHOD"] == "POST") {
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
            $address = limpiarDatos($_POST["address"]);
    }   else {
            $address = null;
        }
    if(isset($_POST["city"])){
            $city = limpiarDatos($_POST["city"]);
    } else {
            $city = null;
        }

    if(isset($_POST["comunities"])){
            $communities = limpiarDatos($_POST["comunities"]);
    } else {
    $communities = null;
        }

if(isset($_POST["Zcode"])){
    $Zcode = limpiarDatos($_POST["Zcode"]);
} else {
    $Zcode = null;
    }
if(isset($_POST["Newsletter[]"])){
        $Newsletter = limpiarDatos($_POST["Newsletter[]"]);
} else {
            $Newsletter = null;
    }
if(isset($_POST["Newsletter_format"])){
            $NewsletterFormat = limpiarDatos($_POST["Newsletter_format"]);
} else {
            $NewsletterFormat = null;
    }
if(isset($_POST["address"])){
        $address = limpiarDatos($_POST["address"]);
} else {
        $address = null;
    }
if(isset($_POST["othert"])){
    $othert = limpiarDatos($_POST["othert"]);
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
        echo "<strong>Noticias que quieres recibir: $newsletter <br>";
        echo "<strong>Name:</strong> $name <br>";
        echo "<strong>Email:</strong> $email <br>";
        echo "<strong>Phone:</strong> $phone <br>";


if ($name_err == true){
        echo "la validación del nombre ha fallado";
    }else{
        echo "no validada, tienes que borrarla";
        };
}
if($email_err == true) {
        echo "la validación del nombre ha fallado";
    }else{
        echo "false";
};
if($phone_err == true) {
        echo "la validación del nombre ha fallado";
    }else{
        echo "false";
};    
if($phone_err == true) {
        echo "la validación del nombre ha fallado";
    }else{
        echo "false";
};   
if($address_err == true) {
        echo "la validación del nombre ha fallado";
    }else{
        echo "false";
};
if($city_err == true) {
        echo "la validación del nombre ha fallado";
}else{
        echo "no validada, tienes que borrarla";
};   
if($communities_err == true) {
        echo "la validación del nombre ha fallado";
    }else{
        echo "false";
};
if($code_err == true) {
        echo "la validación del nombre ha fallado";
    }else{
        echo "false";
};    
if($format_err == true) {
    echo "la validación del nombre ha fallado";
    }else{
            echo "false";
};  
if($newscheck_err == true) {
    echo "la validación del nombre ha fallado";
    }else{
            echo "false";
}; 
if($text_err == true) {
    echo "la validación del nombre ha fallado";
}else{
    echo "false";
    };                   
        //var_drump($newsletter);
        //echo "<br>";
?>