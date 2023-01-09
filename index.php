
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo5.png" type="image/png" sizes="40x40">
    <title>Prueba técnica Ony</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="bg-light">
    <div class="container mt-0 bg-dark text-light p-5">
        <main class="text-center  mb-5">
            <img src="img/logo6.png" class="img-fluid mt-5 mb-3" alt="...">
        </main>
        <section class="row mb-4 fst-italic">
            <div class="col-sm-12 col-md-6">
                <div class="input-group input-group-sm mb-3 ">
                    <span class="input-group-text bg-primary text-light" id="basic-addon1">Nombre:</span>
                    <input type="text" class="form-control" placeholder="Jonathan Cañola Salazar" aria-label="Username" aria-describedby="basic-addon1" disabled>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="input-group input-group-sm mb-3 ">
                    <span class="input-group-text bg-primary text-light" id="basic-addon1">Fecha:</span>
                    <input type="text" class="form-control" placeholder="Diciembre 18 de 2022." aria-label="Username" aria-describedby="basic-addon1" disabled>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="input-group input-group-sm mb-3 ">
                    <span class="input-group-text bg-primary text-light" id="basic-addon1">Email:</span>
                    <input type="text" class="form-control" placeholder="jocasa90@hotmail.com / jocasa2929@gmail.com" aria-label="Username" aria-describedby="basic-addon1" disabled>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="input-group input-group-sm mb-3 ">
                    <span class="input-group-text bg-primary text-light" id="basic-addon1">Teléfono:</span>
                    <input type="text" class="form-control" placeholder="3128938893" aria-label="Username" aria-describedby="basic-addon1" disabled>
                </div>
            </div>
        </section>
        <hr class="mt-5 mb-3"/>
        <section class="row mb-5"><!--row content punto 1-->
            <div class="col-sm-12">
                <p><strong class="text-danger" >1.</strong> Qué lenguajes, frameworks, bases de datos (SQL y NoSQL) conoce y que tipo de
                    experiencia tiene con ellos?
                </p>
            </div>
            <div class="col-sm-12 text-center mt-5 mb-5 text-danger text-decoration-underline">
                <h2>Respuesta</h2>
            </div>
            <div class="col-sm-12">
                <p class="ms-5">
                    <div class="ul">
                        <p >
                            <h2>Lenguajes de programacion :</h2>
                            <ul>
                                <li>Js Experiencia 6 meses.</li>
                                <li>Html5 Experiencia 6 meses.</li>
                                <li>CSS Experiencia 6 meses.</li>
                                <li>Node js Experiencia 6 meses.</li>
                                <li>Java Experiencia conocimiento básico.</li>
                                <li>PHP Experiencia conocimiento básico.</li>
                            </ul>
                        </p>
                        <p >
                            <h2>Frameworks :</h2>
                            <ul>
                                <li>Bootstrap 6 meses.</li>
                                <li>React js Experiencia conocimiento básico.</li>
                                <li>React js Experiencia conocimiento básico.</li>
                                <li>Node js Experiencia 6 meses.</li>
                            </ul>
                        </p>
                        <p >
                            <h2>Bases de datos (SQL y NoSQL) :</h2>
                            <ul>
                                <li>MySql 6 meses.</li>
                                <li>Sqlite 6 meses.</li>
                                <li>MongoDb js Experiencia conocimiento básico.</li>
                            </ul>
                        </p>
                    </div>
                </p>
            </div>
            <hr class="mt-5 mb-3"/>
        </section>
        <section class="row mb-5"><!--row content punto 2-->
            <div class="col-sm-12">
                <p><strong class="text-danger" >2.</strong> En el ciclo de vida de un software existen varios roles como el requerimiento,
                    analista, arquitecto, desarrollador frontend, desarrollador backend, despliegue y
                    servidores, y soporte técnico ¿En cuál se identifica mejor y por qué?
                </p>
            </div>
            <div class="col-sm-12 text-center mt-5 mb-5 text-danger text-decoration-underline">
                <h2>Respuesta</h2>
            </div>
            <div class="col-sm-12">
                <p class="ms-5">
                    Me identifico bien como dearrollador full stack ,
                     ya que me acomodo al trabajo tanto frontend como backend,
                     no tengo demasiada experiencia pero me gusta asumir retos y busco soluciones y respuestas desde la capacitación constante de manera autodidacta y desde la academia con la mejor disposición y abierto al aprendizaje con entrega, dedicación, responsabilidad, trabajo en equipo y creatividad.
                </p>
            </div>
            <hr class="mt-5 mb-3"/>
        </section>
        <section class="row mb-5"><!--row content punto 3-->
            <div class="col-sm-12">
                <p><strong class="text-danger" >3.</strong> Dado una cadena de texto, genere una función para encontrar el número de veces
                    que se repite cada palabra, ejemplo “hello world, big WoRld”.
                </p>
                <p class="ms-5">
                    <strong class="text-danger">
                        a.
                    </strong>deberíamos obtener:
                </p>
                <ul class="ms-5" >
                    <li>hello - 1 veces</li>
                    <li>world - 2 vez</li>
                    <li>big - 1 vez</li>
                </ul>
                <p class="ms-5">
                    <strong class="text-danger" >
                        b.
                    </strong>Cosas a tener en cuenta:
                </p>
                <ul class="ms-5">
                    <li>Palabras en mayusculas y minusculas cuenta como la misma palabra.</li>
                    <li>- Símbolos no cuentan como palabras “,.()!¡?¿”</li>
                </ul>
            </div>
            <div class="col-sm-12 text-center mt-5 mb-5 text-danger text-decoration-underline">
                <h2>Solución</h2>
            </div>
            <div class="col-sm-7"><!--col input cadena -->
                <label for="basic-url" class="form-label">Por favor ingrese la frase de palabras separadas por espacios</label>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text bg-primary bg-gradient text-light" id="basic-addon3">Cadena</span>
                    <input type="text" class="form-control" id="cadena" aria-describedby="basic-addon3"  placeholder="“hello world, big WoRld”">
                    <button class="btn btn-success" type="button" id="btn_cadena">Ejecutar</button>
                </div>
            </div>
            <div class="col-sm-5"><!--col table cantidad cadena -->
                <table class="table table-striped table-hover table-responsive bg-light bg-gradient rounded-3">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Palabra</th>
                            <th scope="col">Cantidad de veces que se repite</th>
                        </tr>
                    </thead>
                    <tbody id="data"><!--body data de cantidad de veces se repidte palabra en cadena -->
    
                    </tbody>
                </table>
            </div>
            <hr class="mt-5 mb-3"/>
        </section>
        <section class="row"><!--row content punto 4-->
            <div class="col-sm-12">
                <p><strong class="text-danger" >4.</strong> Dada una cadena de longitud N, compuesta únicamente de signos de agrupación y
                    texto intermedio ( "()", "{}", "[]" ), genere una función o algoritmo que determine si
                    dicha cadena está estructurada correctamente, es decir, que cada carácter de
                    apertura tenga su carácter de cerrado correspondiente.
                </p>
                <p class="ms-5">
                    <strong class="text-danger">
                        Ej.
                    </strong>deberíamos obtener:
                </p>
                <ol class="ms-5" >
                    <li>[()()(){[][]}{([]{})}] -> <strong class="text-success" >correcto</strong></li>
                    <li>([(]{)}) -> <strong class="text-danger" >incorrecto</strong></li>
                    <li>[()()(){[hola][onyx]}{([juan]{})}] -> <strong class="text-success" >correcto</strong></li>
                </ol>
            </div>
            <div class="col-sm-12 text-center mt-2 mb-2 text-danger text-decoration-underline">
                <h2>Solución</h2>
            </div>
            <div class="col-sm-6 mt-5"><!--col input cadena -->
                <label for="basic-url" class="form-label">Por favor ingrese una cadena de longitud N, compuesta únicamente de signos de agrupación y texto intermedio</label>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text bg-primary bg-gradient text-light" id="basic-addon3">Cadena</span>
                    <input type="text" class="form-control" id="cadenaSignos" aria-describedby="basic-addon3"  placeholder="Ej [()()(){[][]}{([]{})}]">
                    <button class="btn btn-success" type="button" id="btn_cadena_signo">Ejecutar</button>
                </div>
            </div>
            <div class="col-sm-6 mt-5"><!--col table cantidad cadena -->
                <table class="table table-striped table-hover table-responsive bg-light bg-gradient rounded-3">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">cadena</th>
                            <th scope="col">estructura</th>
                        </tr>
                    </thead>
                    <tbody id="dataSimbolo"><!--body data de cantidad de veces se repidte palabra en cadena -->
    
                    </tbody>
                </table>
            </div>
        </section>
        <hr class="mt-5 mb-3"/>
        <section class="row"><!--row content punto 5-->
            <div class="col-sm-12">
                <p><strong class="text-danger" >5.</strong> JAVA o PHP: Crear una clase que almacene un array de fechas, en el constructor de
                    la clase debe crear un array con 10 fechas (fechas anteriores al día presente y
                    posteriores ) y crear un método “filtro fechas” donde imprime en consola el número
                    de fechas posteriores y previas a la fecha presente
                </p>
            </div>
            <div class="col-sm-12 text-center mt-2 mb-2 text-danger text-decoration-underline">
                <h2>Solución En PHP</h2>
            </div>
            <div class="col-sm-12 mt-5"><!--col input cadena -->
                <form method="POST">
                    <div class="mb-3">
                        <label for="basic-url" class="form-label">Por favor ingrese la fecha separadas por espacios</label>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text bg-primary bg-gradient text-light" id="basic-addon3">Fechas</span>
                            <input type="text" class="form-control" name="dates" aria-describedby="basic-addon3"  placeholder="Ej. 12-03-1980 05-04-1992 08-10-2022">
                            <button class="btn btn-success" type="submit" name="submit">Filtrar Fechas</button>
                        </div>
                    </div>
                </form>
            </div>
        <?php
            $now= "";
            $afterDate;
            $beforeDate;
            $dates ='';
            if(isset($_POST["dates"])){
                $dates = $_POST["dates"];
            };
            date_default_timezone_set('America/Bogota');
            //class  obtener dates 
            class Dates {
    
                private  $now ;
                private  $arrDate,$arraCounter;
                public   $afterDate, $beforeDate;
    
                function __construct($now,$arrDate) {
    
                    $this->now = $now;
                    $this->arrDate = $arrDate;
                    $this->filterDate($arrDate,$now);
                    // print "En el constructor BaseClass\n".$newDate;
                }
    
                function filterDate($arrDate,$now){
                    $this->beforeDate = 0;
                    $this->afterDate =0;
                    foreach($arrDate as $date){
                        if(strtotime($now) > strtotime($date)){
                            $this->beforeDate += 1;
                        }else{
                            $this->afterDate += 1;
                        }
                    }
                    $sumDate = $this->beforeDate + $this->afterDate;
                    print "<div class='col-sm-12 mt-5 mb-5'><!--col table cantidad cadena -->
                            <table class='table table-striped table-hover table-responsive bg-light bg-gradient rounded-3'>
                                <thead>
                                    <tr>
                                        <th scope='col'>#</th>
                                        <th scope='col'>Total fechas ingresadas</th>
                                        <th scope='col'>Fecha Actual</th>
                                        <th scope='col'>fechas previas</th>
                                        <th scope='col'>fechas posteriores</th>
                                    </tr>
                                </thead>
                                <tbody><!--body data de cantidad de veces se repidte palabra en cadena -->
                                    <tr>
                                        <th scope='row'>1</th>
                                        <td>".$sumDate."</td>
                                        <td>".$this->now."</td>
                                        <td>".$this->beforeDate."</td>
                                        <td>".$this->afterDate."</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>";
                }
            }
    
            function start( $dates){
                $arrDate = explode(" ", $dates);
                $now = date ( 'd-m-Y' );
                // creamos un objeto el constructor dates
                $obj = new Dates($now,$arrDate);
            }
    
            start($dates);
    
    
        ?>
        </section>
        <footer class="text-center fst-italic">
            <p>
                <h4>Facebook: 
                    <a href="https://www.facebook.com/jonathan.canolasalazar">
                        Jonathan Cañola Salazar.
                    </a>
                </h4>
                <h4>linkedin:
                    <a href="www.linkedin.com/in/jonathan-canola-salazar">
                        www.linkedin.com/in/jonathan-canola-salazar
                    </a>
                </h4>
            </p>
            
        </footer>
    </div>
</body>
<script src="js/bootstrap.min.js"></script>
<script src="index.js"></script>
</html>
