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
                <li>Portada</li>
                <li>Lecciones</li>
                <li>Libros</li>
                <li>Multimedia</li>
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
            <a href="?id=moduloa">Ver Módulo A</a><br />
            <a href="?id=nosotros">Ver Módulo B</a><br />
            <a href="?id=moduloc">Ver Módulo C</a><br />
            <a href="?id=modulod">Ver Módulo D</a>
        </aside>
        <footer id="pie" >
            Proyecto de Aplicaciones Web 2020 | Derechos Reservados &copy; 2020
        </footer>
        </div>
</body>
</html>