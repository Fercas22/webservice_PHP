<?php
    require_once("../config/conexion.php");
    require_once("../models/web_urls.php");
    $webUrl = new Web_urls();
    $body = json_decode(file_get_contents("php://input"), true);

    switch ($_GET["op"]) {
        case 'GetAll':
            $datos=$webUrl->getAll();
            echo json_encode($datos);
            break;
        
        case 'GetById':
            $datos=$webUrl->getUrl_byIdUser($body["id_user"]);
            echo json_encode($datos);
            break;

        case 'Insert':
            $datos=$webUrl->insert_url($body["url"], $body["id_user"]);
            echo "Correcto";
            break;
    }

?>