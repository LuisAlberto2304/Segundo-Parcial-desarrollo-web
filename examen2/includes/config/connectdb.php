<?php
    function connectdb() : mysqli{
        $db = mysqli_connect("localhost", "root", "", "bienesraices", );

        if($db){
            echo "conectado";
        } else {
            echo "no conectado";
        }
        return $db;
    }
?>