<?php

    #Funções Anônimas
    function teste($callback){

        // Processo lento
        $callback();
    }

    teste(function(){

        echo "Terminou!";
    });


?>