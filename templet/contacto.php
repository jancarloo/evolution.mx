	<section class="fullwidth-background">
        		<div class="breadcrumb-wrapper">
                    <div class="container">
                        <h4> Detalles de contacto </h4>
                        <h6><a href="<?php echo RUTA_ACTUAL; ?>">inicio</a> / Contact</h6>
                    </div>
                </div>                
            </section>

<div class="clear"></div>
                <div class="hr-invisible"></div>
                <div class="fullwidth-section dt-sc-parallax-section appointment-parallax dark-bg" style="background-position: 20% 3px;">
                    <div class="fullwidth-bg">
                    	<div class="parallax-spacing">
                    		<div class="container">
                            	<h3 class="border-title">Reserva tu cita   <span>con anticipación </span></h3>
                                <div class="aligncenter">
                                	<a href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>#" class="appointment-btn btn-eff2">Reserva tu  <span>cita</span></a>
                              	</div>
                            </div>
                        </div>
                   	</div>
             	</div>              
            <div class="clear"></div>
                <div class="hr-invisible"></div>
                <div class="container">
                    <div class="column dt-sc-one-third first">
                        <h3 class="border-title">Aparta tu cita <span></span></h3>
                        <p> Para reservar tu cita tines que llenar este formurario
                            con tus datos personales y dia que deses tu cita 
							y si eres criente comentar con quien requieres tu servicios.</p>
                    </div>
                    <div class="column dt-sc-two-third">
                    	<h3 class="border-title"> <span>Mensaje</span></h3>
                    	<form class="contact-form" method="post" name="enqform" action="php/send.php">
                            <div class="column dt-sc-one-half first">
                            	<div class="animate" data-delay="100" data-animation="fadeIn">
                                    <p><input type="text" name="username" placeholder="Nombre" required/> </p>
                                    <p><input type="email" name="txtemail" placeholder="Email (required)" required/></p>                                                        
                                </div>
                            </div>
                            <div class="column dt-sc-one-half">
                            	<div class="animate" data-delay="300" data-animation="fadeIn">
                                    <p><input type="text" required name="txtname" placeholder="numero (required)"/></p>
                                    <p><input id="datepicker" type="text" placeholder="calendario" value="" name="datepicker"><span class="icons fa fa-calendar"></span></p>
                                </div>
                            </div>
                            <div class="column dt-sc-one-column">
                            	<div class="animate" data-delay="500" data-animation="fadeIn">
                                	<p><textarea class="message" required rows="10" placeholder="Comentario(required)" cols="5" name="txtmessage"></textarea></p>
                                </div>
                            </div>                                                                                             
                            <div class="form-row aligncenter animate" data-delay="700" data-animation="fadeIn">
                                <input type="submit" value="enviar" name="enviar">
                            </div>
                        </form>
                    	<div id="ajax_contactform_msg"> </div>
                    </div>
                </div>

	  <div id="main"><!-- Main -->
        	<div class="hr-invisible-small"></div>
        
            <div class="hr-invisible-very-small"></div>
            <div class="clear"></div>
            <section id="primary" class="content-full-width"><!-- Primary Section -->
            	<h2 class="border-title aligncenter"> ubicacion del salòn</h2>
                <div class="clear"></div>
                <div class="hr-invisible-medium"></div>
            	<div class="fullwidth-section fullwidth-bg contact-us">
                    <div class="column dt-sc-three-fifth first">
                    	<div class="hr-invisible-small"></div>
                        <div class="column dt-sc-one-half first">
                        	<h3 class="border-title"> Hora de &nbsp;<span>apertura </span> </h3>
                            <ul class="opening-time dark-bg">
                            	<li class="close"><span>D&iacute;as</span><h5>Hora</h5></li>
                                <li><span>Lunes</span><h5>9 am - 8 pm</h5></li>
                                <li><span>Martes</span><h5>9 am - 8 pm</h5></li>
                                <li><span>Miercoles</span><h5>9 am - 8 pm</h5></li>
                                <li><span>Jueves</span><h5>9 am - 8 pm</h5></li>
                                <li><span>Viernes</span><h5>9 am - 8 pm</h5></li>
                                <li><span>Sabado</span><h5>9 am - 7 pm</h5></li>
                            </ul>
                        </div>
                        <div class="column dt-sc-one-half">
                        	<h3 class="border-title"> Detalle &nbsp;<span>Contacto</span> </h3>
                            <aside class="widget widget_text">
                                <h4 class="widgettitle">Direcci&oacute;n </h4>
                                <div class="dt-sc-contact-info address">
                                    <p>Calle 4 <br>No.87 entre calle 13 y 15<br>Col.Espartaco 
									Del.Coyoacan</p>
                                </div>
                                <div class="hr-invisible-very-very-small"></div>
                                <h4 class="widgettitle"> Telefono </h4>
                                <div class="dt-sc-contact-info">
                                    <p class="dt-sc-clr num"> (55) 56-84-49-06</p>
                                </div>
                                <div class="hr-invisible-very-very-small"></div>
                                <h4 class="widgettitle">Correo </h4>
                                <div class="dt-sc-contact-info">
                                    <a href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>mailto:yourname@somemail.com" class="dt-sc-clr"> Saloncapri_1315@hotmail.com</a>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <div class="dt-sc-two-fifth last">
                    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.1579291806393!2d-99.1360079857103!3d19.318952086949007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce01c631c09fe9%3A0x9dfaefa242c943e0!2sSal%C3%B3n+Evolution!5e0!3m2!1ses-419!2smx!4v1509411575895" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
               
                         
                <div class="hr-invisible"></div>
            </section> <!-- End of Primary Section -->   
        </div><!-- End of Main -->