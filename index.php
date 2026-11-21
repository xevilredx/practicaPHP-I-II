<?php
    $orrores = false;

    if(isset($_POST["submit"])){
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $mensaje = $_POST["mensaje"];

        if(!empty($nombre) & !empty($correo) & !empty($mensaje)){
            $nombre = trim($nombre);
            $nombre = strip_tags($nombre);
            $nombre = htmlspecialchars($nombre);
            // $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

            //echo "Tu nombre es: " . $nombre . "<br>";
            //echo "Tu correo es: " . $correo . "<br>";
            //echo "Tu mensaje es: " . $mensaje . "<br>";
        }else{
            $orrores = true;
        }


        // echo "Tu nombre es: " . $nombre . "<br>";
        // echo "Tu correo es: " . $correo . "<br>";
        // echo "Tu mensaje es: " . $mensaje . "<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <!-- <form  method="post">
        <input type="text" placeholder="Nombre" name="nombre">
        <input type="email" placeholder="Correo" name="correo">
        <textarea name="mensaje" id=""></textarea>
    </form> -->

    
    <div class="cont-principal container mt-4">
    <form action="  <?php   echo htmlspecialchars($_SERVER["PHP_SELF"]);    ?>" method="post" class="formulario p-4 border rounded shadow-sm bg-white">
        
        <?php   if(!empty($orrores)){    ?>
        <div class="alert alert-danger py-2">
            <p>Por favor, complete:</p>
            <ul>
            <?php   if(empty($nombre)){     ?>
            <li>El campo nombre</li>
            <?php   }    ?>
            <?php   if(empty($correo)){     ?>
            <li>El campo correo</li>
            <?php   }    ?>
            <?php   if(empty($mensaje)){     ?>
            <li>El campo de mensaje</li>
            <?php   }    ?>
            </ul>
        </div>
        <?php   }else if(isset($_POST["submit"])){   ?>
        <div class="alert alert-success py-2" role="alert">
            <p>Correo enviado correctamente :]</p>
        </div>
        <?php   }   ?>

        <div class="mb-3">
        <input type="text" class="form-control <?php echo $orrores && empty($nombre) ? 'is-invalid' : '' ?>" placeholder="Nombre" name="nombre" value="<?php echo $orrores ? $nombre : ''?>">
        </div>

        <div class="mb-3">
        <input type="email" class="form-control <?php echo $orrores && empty($correo) ? 'is-invalid' : '' ?>" placeholder="Correo" name="correo" value="<?php echo $orrores ? $correo : ''?>">
        </div>

        <div class="mb-3">
        <textarea class="form-control <?php echo !empty($orrores) && empty($mensaje) ? 'is-invalid' : '' ?>" name="mensaje" rows="4" placeholder="Escribe tu mensaje..."><?php echo $orrores ? $mensaje : ''?></textarea>
        </div>
        <!-- Poniendo un monton de validaciones para que sea a prueba de tonotos :v -->
        <!-- Ah chale esto aparece en F12 .__. -->
        <!-- Menos mal que los tonotos no saben usar F12 :3 -->
        <?php   // Ora si pe, esto no lo puede leer nadie :v
        // ta potente el poder abrir etiquetas php en medio del html se pueden hacer varias cositas?>

        <button type="submit" name="submit" value="SiLeesEstoElCodigoTaMal" class="btn btn-dark w-100">Enviar Correo</button>

    </form>
    </div>

</body>
</html>