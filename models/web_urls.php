<?php
    class Web_urls extends Conectar{

        // Obetener todos los elementos de la tabla
        public function getAll(){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM web_urls";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultados=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        // Obtener elementos mediante el id del usuario
        public function getUrl_byIdUser($id){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM web_urls WHERE id_user = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $id);
            $sql->execute();
            return $resultados=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        // Insertar un elemento a la tabla
        public function insert_url($url, $idUSer){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="INSERT INTO web_urls (idUrl, url, id_user) VALUES (NULL, ?, ?)";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $url);
            $sql->bindValue(2, $idUSer);
            $sql->execute();
            return $resultados=$sql->fetchAll(PDO::FETCH_ASSOC); 
        }
    }

?>