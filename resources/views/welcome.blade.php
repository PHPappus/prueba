<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
        <meta name="Pagina de Bica - baia baia" content="baia baia´+ 100tifiko" />
        <meta name="keywords" content="desarrollo" />
        <link rel="stylesheet" type="text/css" href="">
    </head>
    <body>
        <!--target="_blank" => para que se habra una nueva pestaña-->
        <a target="_blank" href="https://www.codecademy.com/learn"><b>Es hora de codear</b></a> <br />lml</p>
        <hr />
        <div class="container">
            <p>Es hora de codear2<br />lml</p>
            <!--para crear formularios-->
            <form>
                <!--para crear formularios de entrada-->
                <input type="text" value="Escriba su nombre 1"></input>
                ingrese su nombre 2:
                <input type="text" placeholder="Escriba su nombre 2" maxlength="20" name="Nombre" id="nombre"></input>
                <input type="password"></input>
                <input type="email"></input>
                <input type="radio">Listo</input>
                <!--Para ralizar una acción-->
                <input type="button" value="Enviar"></input>
                <!--Enviar los datos-->
                <input type="submit"></input>
                <!--para crear un Combobox-->
                <select name="" id="">
                    <option>Ola K aze</option>
                    <option>100tifiko</option>
                    <option>100litar</option>
                    <option>3.1416n8</option>
                </select>
                <!--seleccionar un color-->
                <input type="color"></input>
                <!--Seleccionar un rango-->
                <input type="range"></input>
            </form>
            <hr />
            <div class="content">
                <p>Es hora de codear3<br />lml</p>
                <hr />
                <!-- imagne ubicada en public-->
                <img src="KeepCalmBica.jpg" alt="Imagen de Keep Calm para las Bicas" title="KeepCalm Bicas!" width="300" height="400" />
                <br /><br /><br />
                    <!--Imagen de la web-->
                <img src="https://k60.kn3.net/0/7/1/D/C/6/68E.jpg" alt="Baia baia, 100tifiko" title="Baia baia, un 100tikifo por aca!" width="400" />
                <div class="title">Laravel 5</div>
                <p>Es hora de codear4<br />lml</p>
                <hr />
            </div>
            <!--hacer saber al navegador que acá existe un menú-->
            <nav>
                <ul>
                    <li> <a href="#">Inicio</a></li>
                    <li> <a href="#">Categoría</a></li>
                    <li> <a href="#">Opiniones</a></li>
                </ul>
            </nav>
            <!--Contenedor de más secciones-->
            <section class="wrapper">
                <!--indica que el contenido es principal-->
                <section class="main">
                    <article>
                        <h2>mmmm... baia Baia</h2>
                        <p>Asi que tenemos a un 100tifiko acá.. y además se cree 1000itar y 3.1416n8</p>
                    </article>
                </section>
                <!--Contenido interesante para el usuario pero no para el navegador-->
                <aside>
                    <h3>mmmm bica</h3>
                    <p>Keep calm and bica bica bica bica!</p>
                </aside>
            </section>

            <p>Es hora de codear5<br />lml</p>
            <hr />
            <!--Para listas con viñetas-->
            <ul>
            <li><a href="#">PHP</a></li>
                <!--Para listas con numeracion-->
                <ol>
                    <li>Laravel</li>
                    <li>Composer</li>
                    <li>Sublime</li>
                </ol>
            <li>Java</li>
            <li>.Net</li>
        </ul>
        </div>
        <p>Es hora de codear6<br />lml</p>
        <hr />
        <br />
        <!--Crear tabla-->
        <table>
             <!--Fila-->
            <tr>
                <!--Columna-->
                <td>baia</td>
                <td>baia</td>
            </tr>
            <tr>
                <td>baia</td>
                <td>baia</td>
            </tr>

        </table>
        <footer>
            <p>Creado By el Joe :v</p>
        </footer>
    </body>
</html>
