@extends('master')                              

@section('content')         

<link rel="stylesheet" type="text/css" href="public/Css/form.css">

<link rel="stylesheet" type="text/css" href="public/Css/slider_styles.css">

<section id="page1">

    <div class="panel panel-default">

        <div class="panel-heading">Inicio</div>

        <div class="panel-body">

            <div class="freebirdFormviewerViewFormContent ">

                <div class="freebirdFormviewerViewHeaderHeader">

                    <div class="freebirdFormviewerViewHeaderTitleRow">

                        <div class="freebirdFormviewerViewHeaderTitle" dir="auto" role="heading" aria-level="1"><h3>CAMINATA FAMILIAR - HUMEDAL CORDOBA Domingo 15 de octubre de 2017</h3></div>

                    </div>
<br>
                    <div class="stage">

                        <div id="SLDR-ONE" class="sldr">

                            <ul class="wrp animate">

                                <li class="elmnt-one">                                 

                                        <div class="wrap"><img src="public/Img/cordoba.jpg"  height="400">

                                        </div>                                   
                                </li>

                               <li class="elmnt-two">
                                    
                                        <div class="wrap"><img src="public/Img/cordoba1.jpg"  height="400">

                                        </div>                                 
                                </li>

                                 <li class="elmnt-three">
                                    
                                        <div class="wrap"><img src="public/Img/cordoba2.jpg"  height="400">

                                        </div>                                 
                                </li>
                                 

                            </ul>

                        </div>

                        <div class="clear"></div>

                        <ul class="selectors">

                            <li class="focalPoint"><a href="">•</a></li>

                            <li><a href="">•</a></li>

                            <li><a href="">•</a></li>            
                         
                        </ul>

                    </div>

                    <script src="public/Js/jquery.sldr.js"></script>

                    <div class="freebirdFormviewerViewHeaderDescription" dir="auto">

                        <h3>Ubicación</h3>

                        <p align="justify" style="font-size: 11pt; line-height: 25px">Su localización estratégica y de fácil acceso, a cinco minutos de las estaciones de Transmilenio Shaio y Humedal Córdoba, lo ubican como uno de los humedales más visitados de Bogotá. Cuenta con tres sectores, el primero Ubicado de la Calle 127 hacia el norte colinda con los barrios Mónaco, Prado Veraniego sur y el Canódromo, es el tercio más pequeño y menos visitado.  <br> Sector dos ubicado entre la Av. Córdoba y la Av. Suba colinda con los barrios Batán, Potosí, Puente Largo, Santa Rosa y una serie de conjuntos residenciales como Parques de Córdoba y Solis del Restrepo. Recientemente se realizaron obras en este sector, senderos, miradores y puente que permiten mayor comodidad para los visitantes. <br>Adicional se le adecuaron siete islas pequeñas, en las que se sembraron varias especies de juncos y especies arbóreas con el fin de restaurar la vegetación que sirve de alimento y refugio para la fauna del sitio. Sector tres es la parte baja del humedal, La extensión de este sector es 21.4 hectáreas Se extiende entre las Avenidas Suba y Boyacá. Colinda con los barrios Pontevedra, San Nicolás, Julio Flórez y Niza sur.</p>
                       
                        <h3>Descripción del recorrido </h3>

                        <p align="justify" style="font-size: 11pt; line-height: 25px">El Humedal Córdoba es un ecosistema hermoso y agradable para caminar. Recorrer el humedal ahora resulta más cómodo para sus visitantes, gracias a unos senderos peatonales, hechos de madera, que permiten realizar caminatas seguras, así como la adecuación de unos miradores y un puente peatonal sobre el canal Molinos, para contemplar el ecosistema y las aves que llegan al lugar. La ruta inicia en la entrada del segundo sector donde el guía del IDRD dará las indicaciones y se iniciara la caminata y allí mismo terminara.</p>

                        <!--<h3>Durante el recorrido se visitaran los siguientes aspectos:</h3>
                        <ul class="ul_inicio">
                            <font style="font-size: 11pt; line-height: 25px;">
                            <li>Parte del camino Real que conduce al páramo </li>
                            <li>Bosque encantado </li>
                            <li>Rio Fucha</li>
                            <li>Sector La María</li>
                            <li>Bosque abierto de pinos</li>
                            <li>Unión de las Quebradas Palo Blanco y La Osa </li>
                            </font>
                        </ul>-->
                        <br>

                        <font size="3"><center><table width="1000">

                            <col width="281">

                                <col width="282">

                                    <tr valign="top">

                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Punto de encuentro</p>

                                        </td>

                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>AV SUBA CALLE 116 ENTRADA PRINCIPAL FRENTE A LA ESTACIÓN DE TRASMILENIO SHAIO.<br><br>Barrio: PUENTE LARGO</p>

                                        </td>

                                    </tr>
                              
                                    <tr valign="top">

                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Fecha</p>

                                        </td>

                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Domingo 15 de octubre de 2017</p>

                                        </td>

                                    </tr>

                                    <tr valign="top">

                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Hora de encuentro</p>

                                        </td>

                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>8:00 a.m</p>

                                        </td>

                                    </tr>

                                    <tr valign="top">

                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Cupo Máximo</p>

                                        </td>

                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>40 Personsa</p>

                                        </td>

                                    </tr>

                                    <tr valign="top">

                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Rango de Edad</p>

                                        </td>

                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>2 - 60 años</p>

                                        </td>

                                    </tr>

                                    <tr valign="top">

                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Nivel</p>

                                        </td>

                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>BAJO</p>

                                        </td>

                                    </tr>   
                                    <tr valign="top">

                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Temperatura</p>

                                        </td>

                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>14°C </p>

                                        </td>

                                    </tr> 
                                    <tr valign="top">

                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Altitud</p>

                                        </td>

                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>2.600. a 2.650 m.s.n.m</p>

                                        </td>

                                    </tr> 
                                     <tr valign="top">

                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Duración</p>

                                        </td>

                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>3 horas aproximadamente</p>

                                        </td>

                                    </tr> 
                       

                        </table></center></font>

                        <h3>Recomendaciones</h3>

                        <ul class="ul_inicio">

                            <font  style="font-size: 11pt; line-height: 25px">

                                <li>Llevar ropa cómoda</li>
                            
                                <li>Llevar bloqueador solar</li>

                                <li>Hidratación</li>

                                <li>Calzado cómodo</li>

                                <li>Llevar carné de la eps</li>

                                <li>Refrigerio.</li>

                                <li>Medicamentos personales </li>

                                <li>No llevar mascotas </li>

                                <li>Caminata apta para mayores de 2 años.</li>

                                <li><ins>Abstenerse de asistir si no se encuentra inscrito</ins></li>

                                <li>Llevar impermeable en caso de lluvia</li>
                            </font>

                            <br>

                        </ul> <a class="btn btn-info" href="registro">Registrarse</a> </div>

                </div>

            </div>

        </div>

</section>

@stop