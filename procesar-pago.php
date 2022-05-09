<?php 
    // $obj = new stdClass();
    // $obj->nombre0 = "Aaron";
    // $obj->nombre->apellido0 = "rojas0";
    // $obj->nombre->apellido1 = "rojas1";
    // $obj->nombre->apellido2 = "rojas2";
    // $obj->nombre1 = "Aaron1";
    // $obj->nombre2 = "Aaron2";
    // $obj->nombre3 = "Aaron3";
    // $obj->nombre4 = "Aaron4";
    // $obj->nombre5 = "Aaron5";
    // echo "<pre>";
    // echo var_dump($obj);
    // echo "</pre>";
    // echo json_encode($obj);
    // echo "<hr>";
    // $array = json_decode(json_encode($obj), true);
    // echo "<pre>";
    // echo var_dump($array);
    // echo "</pre>";
    // echo json_encode($array);
    // echo "<hr>";
    // $arreglo = array(
    //     "nombre" => 'aaron',
    //     "nombre1" => array(
    //         "apellido" => "rojas",
    //         "apellido1" => "rojas1",
    //         "apellido2" => "rojas2"
    //     ),
    //     "nombre2" => 'aaron2',
    //     "nombre3" => 'aaron3',
    //     "nombre4" => 'aaron4',
    //     "nombre5" => 'aaron5',
    //     "nombre6" => 'aaron6',
    //     "nombre7" => 'aaron7',
    // );
    // echo "<pre>";
    // echo var_dump($arreglo);
    // echo "</pre>";
    // echo json_encode($arreglo);
    // echo "<hr>";
    //Cargamos Requests y Culqi PHP
    include_once 'libraries/Requests/library/Requests.php';
    Requests::register_autoloader();
    include_once 'libraries/culqi-php/lib/culqi.php';
    // Configurar tu API Key y autenticación
    $SECRET_KEY = "sk_test_fe3b958a879a5ddd";
    $culqi = new Culqi\Culqi(array('api_key' => $SECRET_KEY));
    // Creamos Cargo a una tarjeta
    $charge = $culqi->Charges->create(
        array(
            "amount" => $_POST['precio'],
            "currency_code" => "PEN",
            "email" => $_POST['email'],
            "source_id" => $_POST['token']
        )
    );
    echo "Gracias por su compra.";
    exit;
    //echo json_encode($charge->outcome);
?>