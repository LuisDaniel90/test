<!DOCTYPE html>
  <html>
    <head>
     
     
     <link type="text/css" rel="stylesheet" href="css/animate.css" />
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      
      <link type="text/css" rel="stylesheet" href="css/estilos.css"  media="screen,projection"/>
      

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
     
      
      <nav>
        <div class="nav-wrapper ToolsticAzul sombra">
          <a href="#" class="brand-logo ">LOGOTIPO</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#"><b>DANIEL CABRERA</b></a></li>
          </ul>
        </div>
      </nav>
      
       <div class="row">
          
           <!-- BOTONES DE ENUMERACION PREGUNTAS -->
            <div class="ToolsticRojo col s2 DesplH">
               <div class="row center-align"><b>PREGUNTAS</b></div>
                              

                <ul id="tabs-swipe-demo" class="tabsbtn">
                    <?php 
                        for ($i=1; $i<= 60; $i++ ){ ?>                          
                            <li class="tab col s12 ">
                                <a class="white-text  btnPregunta ToolsticAzul" href="#Pregunta<?php echo $i; ?>">
                                    Pregunta <?php echo $i; ?>
                                </a>
                            </li>
                    <?php }; ?>
                </ul>
            </div>
          <!-- TERMINA BOTONES DE ENUMERACION PREGUNTAS -->
          
          <!-- INICIA ENUNCIADO PREGUNTAS -->
            <div class="ToolsticBlanco col s10 Conteo">
               
                <?php  for ($i=1;$i<=60;$i++){ ?>
                    <div id="Pregunta<?php echo $i; ?>" class="col s12 ToolsticBlanco white-text CPregunta"> 
                        <h5 class="center"><b>Pregunta <?php echo $i ?></b></h5>
                        <div class="container">
                            <div class="card-panel ToolsticRojo center sombraBlanco ">ENUN_PREGUNTA <?php echo $i ?></div>     
                            <div class="card-panel ToolsticVerde enunciado sombraRojo">
                                <?php  for ($a=1; $a<= 4; $a++ ){ ?>                        
                                    <div class="row">
                                        <label>
                                            <input name="Pregunta<?php echo $i; ?>" type="radio" />
                                            <span class="black-text ">Opcion <?php echo $a ?></span>
                                        </label>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                       <!-- BOTON DE GUARDAR Y ENVIAR TODO  -->

                       <div class="row center"> 
                           <a href="#" id="Pregunta<?php echo $i; ?>" class="guardar black-text btnGuardar ToolsticAmarillo "><b>GUARDAR <?php echo $i; ?></b></a> 
                       </div>
                       <!-- TERMINA BOTON DE GUARDAR Y ENVIAR TODO  -->
                    </div>   
                <?php }  ?>
            </div>
            <!-- TERMINA OPCIONES DE RESPUESTA -->
                   

                    
            <!-- BOTONES DE AVANZAR Y RETROCEDER -->
            
                <div class="fixed-action-btn avanzar">
                  <a class="btn-floating btn-large ToolsticRojo sombraAzul" >
                    <i class="large material-icons">chevron_right</i>
                  </a>
                </div>
                   
                <div class="fixed-action-btn-left retroceder">
                  <a class="btn-floating btn-large ToolsticRojo sombraAzul">
                    <i class="large material-icons">chevron_left</i>
                  </a>
                </div> 
            <!-- TERMINA     BOTONES DE AVANZAR Y RETROCEDER -->              
          </div>
          
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script type="text/javascript" src="js/myjavascript.js"></script>

        <script>
            $(document).ready(function(){
                $('.tabsbtn').tabs();
            });

        </script>
    </body>
  </html>