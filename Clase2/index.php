
<!DOCTYPE html>

<html lang='es-CO'>

  <head>

    <meta charset="UTF-8" />

     <title>Clase 1 Desarrollo web </title>     

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
     <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css" />


     <style>


       body{

            overflow-x: hidden;

       }


        #menu{

            margin-left: 1em;

        }


        #menu li a{

            color: white;
            line-height: 4.5;

        }


        footer{

          height: 2em;
          padding-top: .5em;
          height: auto;

        }

        #menu_pie li{

          list-style: none;
          color: rgb(209, 208, 208);

        }

        #menu_pie li a{

            color: white;
            padding: .05em 0;
            display: block;

        }



        @media (min-width: 1000px) { 

            #contenido{

                  margin-left: 4%;

            }

        }


        @media (max-width: 900px) { 

            body{

              width: 100% !important;
              padding: 0;
              margin: 0 auto;

            }

            #contenido{

                padding: 0 1em;
                width: 95%;
                margin: 0 auto;                

            }

        }

        

     </style>
    
  </head>

  <body id="main">

       <header  class="btn-primary navbar-fixed">
            <nav id="menu" style="overflow: auto; ">
           
              <ul class="navbar">
                <li class="nav"><h1 style="font-size: 1.5em">Clase 1 Desarrollo Web</h1></li>

               <li class="nav visible-desktop" style="margin-left:1em">
                <ul>
                <li class='nav'><a href="#">Opcion</a></li>
                <li class='nav'><a href="#">Opcion</a></li>
                <li class='nav'><a href="#">Opcion</a></li>
                <li class='nav'><a href="#">Opcion</a></li>
                <li class='nav'><a href="#">Opcion</a></li>
                </ul>
              </li>


              </ul>

            </nav>

       </header> 

       <br />
       <br />

       <div id="contenido" class="row-fluid">

        <div class="span12">

          <div class="span8 well" >

            <article class="span6">

                <hgroup>
                   <h1>Hola mundo</h1>
                </hgroup>

                 <p> 
                    Desarrollo web en html 5 <br />
                    Desarrollo web en html 5 <br />
                    Desarrollo web en html 5 <br />
                    Desarrollo web en html 5 <br />
                    Desarrollo web en html 5 <br />
                    Desarrollo web en html 5 <br />
                    Desarrolló web en html 5 <br />
                    Desarrollo web en html 5 <br />
                    Desarrollo web en html 5 <br />
                    Desarrollo web en html 5 <br />
                 </p>

            </article>

            <article class="span6">

                <hgroup>
                   <h1>Hola mundo</h1>
                </hgroup>

                 <p> 
                    Desarrollo web en html 5 <br />
                    Desarrollo web en html 5 <br />
                    Desarrollo web en html 5 <br />
                    Desarrollo web en html 5 <br />
                    Desarrollo web en html 5 <br />
                    Desarrollo web en html 5 <br />
                    Desarrolló web en html 5 <br />
                    Desarrollo web en html 5 <br />
                    Desarrollo web en html 5 <br />
                    Desarrollo web en html 5 <br />
                 </p>

            </article>
            

          </div>

          <aside class="span3 well" >
            soy una barra lateral
          </aside>

       </div>

     </div>

         <br />
        <br />
        <br />
        <br />

       <footer class='btn-primary clearfix rowfluid' style="overflow:auto">
          
          <div class="span12" >

          <ul class="navbar">
            <li class="nav">Soy el pie</li>
            <li class="nav pull-right">Aqui van los derechos y la firma &nbsp;&nbsp;</li>
          </ul>
        </div>

        <br />
        <br />
        <br />

        <div id="menu_pie" class="span12 visible-desktop" >

           <div class="span3">
             <ul class="navbar">
              <li>Menu pie</li>
            <li ><a href="#">Opcion</a></li>
            <li ><a href="#">Opcion</a></li>
            <li ><a href="#">Opcion</a></li>
            <li ><a href="#">Opcion</a></li>
             </ul>
           </div>

          <div class="span3">
             <ul class="navbar">
              <li>Menu pie</li>
            <li ><a href="#">Opcion</a></li>
            <li ><a href="#">Opcion</a></li>
            <li ><a href="#">Opcion</a></li>
            <li ><a href="#">Opcion</a></li>
             </ul>
           </div>

              <div class="span3">
             <ul class="navbar">
              <li>Menu pie</li>
            <li ><a href="#">Opcion</a></li>
            <li ><a href="#">Opcion</a></li>
            <li ><a href="#">Opcion</a></li>
            <li ><a href="#">Opcion</a></li>
             </ul>
           </div>

            <div class="span2">
             <ul class="navbar">
              <li>Menu pie</li>
            <li ><a href="#">Opcion</a></li>
            <li ><a href="#">Opcion</a></li>
            <li ><a href="#">Opcion</a></li>
            <li ><a href="#">Opcion</a></li>
             </ul>
           </div>

        </div>

       </footer>

  </body>


</html>