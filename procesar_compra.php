<?php
// incluir el archivo de conexión a la base de datos
include "conexion.php";
// recuperar los valores del formulario
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$direccion = $_POST["direccion"];
$producto = $_POST["producto"];
$cantidad = $_POST["cantidad"];

// verificar que los campos no estén vacíos
if (empty($nombre) || empty($correo) || empty($direccion) || empty($producto) || empty($cantidad)) {
    die("Por favor, complete todos los campos del formulario.");
}

// insertar los valores en la base de datos
$sql = "INSERT INTO compras (nombre, correo, direccion, producto, cantidad) VALUES ('$nombre', '$correo', '$direccion', '$producto', '$cantidad')";

if (mysqli_query($conn, $sql)) {
    echo "<p class='success-message'>
    ¡Felicidades por realizar una compra exitosa!</p>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// cerrar la conexión a la base de datos
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra exitosa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        .fondo {
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
        }

        .success-message {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            padding: 2rem;
            color: #fff;
            font-family: 'Poltawski Nowy', serif;
            font-family: 'Signika Negative', sans-serif;
            font-size: 40px;
        }

        .success-message:hover  {
            color: goldenrod;

        }

        h1 {
            font-size: 3rem;
            margin: 0 0 2rem;
            text-align: center;
        }

        p {
            font-size: 1.5rem;
            text-align: center;
            margin: 0 0 2rem;
        }

        a {
            background-color: #fff;
            color: #333;
            padding: 1rem 2rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-size: 1.5rem;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="fondo">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
            xmlns:svgjs="http://svgjs.com/svgjs" width="1920" height="1080" preserveAspectRatio="none"
            viewBox="0 0 1920 1080">
            <g mask="url(&quot;#SvgjsMask1051&quot;)" fill="none">
                <rect width="1920" height="1080" x="0" y="0" fill="url(#SvgjsLinearGradient1052)"></rect>
                <path
                    d="M1022.7245815372207 536.4356412903563L1000.6442164196739 379.32567987377496 776.0194568535752 491.00120825838604z"
                    fill="rgba(28, 83, 142, 0.4)" class="triangle-float3"></path>
                <path
                    d="M89.57073270229901 285.11254605588954L310.7435294920972 471.0580376265609 358.9398404513752 223.10951252605275z"
                    fill="rgba(28, 83, 142, 0.4)" class="triangle-float1"></path>
                <path
                    d="M250.74304176930224-59.7051726431731L349.9401453607329 153.02370250315323 463.4719169156285-158.90227623460376z"
                    fill="rgba(28, 83, 142, 0.4)" class="triangle-float1"></path>
                <path
                    d="M153.32469855453178 646.6207884100808L66.1683818076172 467.92385736597976-25.372232489569228 733.7771051569954z"
                    fill="rgba(28, 83, 142, 0.4)" class="triangle-float3"></path>
                <path
                    d="M1036.2166285950093 486.66708556056585L1023.1647797028373 735.7111982996721 1272.2088924419436 748.7630471918441 1285.2607413341157 499.71893445273776z"
                    fill="rgba(28, 83, 142, 0.4)" class="triangle-float1"></path>
                <path
                    d="M165.53250671113156 1001.4506751384407L427.03157768773156 946.1277528148489 273.7427578560529 769.7891373002926z"
                    fill="rgba(28, 83, 142, 0.4)" class="triangle-float1"></path>
            </g>
            <defs>
                <mask id="SvgjsMask1051">
                    <rect width="1920" height="1080" fill="#ffffff"></rect>
                </mask>
                <linearGradient x1="10.94%" y1="-19.44%" x2="89.06%" y2="119.44%" gradientUnits="userSpaceOnUse"
                    id="SvgjsLinearGradient1052">
                    <stop stop-color="#0e2a47" offset="0"></stop>
                    <stop stop-color="#00459e" offset="1"></stop>
                </linearGradient>
                <style>
                    @keyframes float1 {
                        0% {
                            transform: translate(0, 0)
                        }

                        50% {
                            transform: translate(-10px, 0)
                        }

                        100% {
                            transform: translate(0, 0)
                        }
                    }

                    .triangle-float1 {
                        animation: float1 5s infinite;
                    }

                    @keyframes float2 {
                        0% {
                            transform: translate(0, 0)
                        }

                        50% {
                            transform: translate(-5px, -5px)
                        }

                        100% {
                            transform: translate(0, 0)
                        }
                    }

                    .triangle-float2 {
                        animation: float2 4s infinite;
                    }

                    @keyframes float3 {
                        0% {
                            transform: translate(0, 0)
                        }

                        50% {
                            transform: translate(0, -10px)
                        }

                        100% {
                            transform: translate(0, 0)
                        }
                    }

                    .triangle-float3 {
                        animation: float3 6s infinite;
                    }
                </style>
            </defs>
        </svg>
    </div>


</body>   
    
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poltawski+Nowy:wght@500&family=Signika+Negative:wght@500&display=swap" rel="stylesheet">

