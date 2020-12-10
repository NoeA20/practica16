<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Ejemplo de  Proyecto PHP">
        <meta name="keywords" content="HTML5, CSS3, JavaScript, PHP">
            <title><?php echo $titulo;?> </title>
            <link rel="stylesheet" href="estilo.css">
    </head>

    <body>
        <div id="agrupar">
        <header id="cabecera" >
                <h1>Este sería el header con un Logo de la Empresa</h1>
        </header>
        <nav id="menu" >
            <ul>
                <li><a href="?id=home">Home</a></li>
                <li><a href="?id=nosotros">Nosotros</a></li>
                <li><a href="?id=consultas">Consultas</a></li>
                <li><a href="?id=contacto">Contacto</a></li>
            </ul>
        </nav>
        <section id="seccion" >
            <article>
                   
            <?php
                if (file_exists($path_modulo)){ 
                    // si extiste el archivo de módulo solicitado
                    include($path_modulo);  // lo carga
                }else{
                echo ('Error al cargar el módulo <b>'.$modulo.'</b>. No existe el archivo');
                }
            ?>



            </article>
            
        </section>
        <aside id="columna" >
            <a href="?id=home">Home</a><br />
            <a href="?id=nosotros">Nosotros</a><br />
            <a href="?id=consultas">Consultas</a><br />
            <a href="?id=contacto">Contacto</a>
        </aside>
        <footer id="pie" >
            Proyecto de Aplicaciones Web 2020 | Derechos Reservados &copy; 2020
        </footer>
        </div>
</body>
</html>