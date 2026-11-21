<?php

    // if($_SERVER["REQUEST_METHOD"] == "POST"){
    //     echo "se esta enviando por post";
    // }else{
    //     echo "se esta enviando por get";
    // }



    if(isset($_POST["submit"])){
        echo "se enviaron los datos" . "<br>";
        print_r($_POST["submit"]);

    }
?>