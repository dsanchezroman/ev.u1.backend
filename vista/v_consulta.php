<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
        background-image: url('https://blog.openclassrooms.com/es/wp-content/uploads/sites/5/2017/09/AdobeStock_126016889apaisado.jpg');
        background-size: cover;
        }
        
        .principal_header {
        background-color: rgba(0, 0, 0, 0.6);
        padding: 20px;
        color: white;
        position: fixed;
        width: 100%;
        z-index: 1000;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        }
        .principal_nav {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        }
        .link_nav {
        float: left;
        list-style-type: none;
        display: flex;
        margin-right: 20px;
        text-decoration: none;
        color: #fff;
        text-decoration: none;
        color: white;
        font-weight: normal;
        transition: font-weight 0.3s;
        }

    .link_nav:hover {
        font-weight: bold;
        }
    .logo {
        width: 100px;
        height: auto;
    }
    .fondo {
    background-image: url('https://blog.openclassrooms.com/es/wp-content/uploads/sites/5/2017/09/AdobeStock_126016889apaisado.jpg');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}


    </style>


</head>
<body>
    <header class="principal_header">
        <img src="img/con-ingenio-solo-blanco.png" alt="" class="logo">
        <nav class="principal_nav">
            <a class="link_nav" href="home">Home</a>
            <a class="link_nav" href="nosotros">Nosotros</a>
            <a class="link_nav" href="servicios">Servicios</a>
            <a class="link_nav" href="formulariocontacto/">Contacto</a>
        </nav>
    </header>
    
    <h1>CON INGENIO</h1>
</body>
</html>