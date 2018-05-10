<a name="contacto"></a>
<script>
    function sendContact(){
        var valid;
        valid = validateContact();
        if(valid) {
            jQuery.ajax({
                url: "/contact_form.php",
                data:'nombre='+$("#nombre").val()+'&email='+$("#email").val()+'&phone='+$("#phone").val()+'&fecha='+$("#fecha").val()+'&mensaje='+$("#mensaje").val(),
                type: "POST",
                success:function(data){
                    $("#mail-status").html(data);
                },
                error:function (){}
            });
        }
    }
    
    function validateContact() {
        var valid = true;
        if(!$("#nombre").val()) {
            $("#nombre").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#email").val()) {
            $("#email").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
            $("#email").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#phone").val()) {
            $("#phone").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#mensaje").val()) {
            $("#mensaje").css('background-color','#f28282');
            valid = false;
        }
        return valid;
    }
</script>
<!-- ========================================= Start Contact -->
<section class="contact" data-scroll-index="8">
    <?php
        $consultarCot = 'SELECT * FROM contacto';
        $resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
        $filaCot  = mysqli_fetch_array($resultadoCot);
            $xDirection   = $filaCot['direction'];
            $xPhone       = $filaCot['phone'];
            $xEmail       = $filaCot['email'];
            $xMap         = $filaCot['map'];
            $xFormem      = $filaCot['form_mail'];
    ?>
    <div class="contact-info bg-img" data-overlay-dark="6" data-background="img/6.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="item valign">
                        <span class="icon"><i class="fas fa-envelope"></i></span>
                        <div class="cont vertical-center">
                            <h6>Email</h6>
                            <p><?php echo $xEmail; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item valign">
                        <span class="icon"><i class="fas fa-location-arrow"></i></span>
                        <div class="cont vertical-center">
                            <h6>Direcci&oacute;n</h6>
                            <p><?php echo $xDirection; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item valign">
                        <span class="icon"><i class="fab fa-whatsapp"></i></span>
                        <div class="cont vertical-center">
                            <h6>Tel&eacute;fono</h6>
                            <p><?php echo $xPhone; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container section-padding">
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <div class="section-head">
                    <h4>Necesita <span>m&aacute;s</span> Informaci&oacute;n</h4>
                    <?php
                        $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='6'";
                        $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                        $filaCon = mysqli_fetch_array($resultadoCon);
                            $xContenido   = $filaCon['contenido'];
                    ?>
                    <p><?php echo $xContenido; ?></p>
                    <?php mysqli_free_result($resultadoCon); ?>
                </div>
            </div>
            <div class="clear-fix"></div>
            <!-- contact form -->

            <div class="form o-hidden offset-lg-2 col-lg-8 offset-md-1 col-md-10" id="contact-form" method="post">
                <input type="hidden" name="form-name" value="contact-form" />
                <div class="messages"></div>
                <div class="controls wow fadeInUp">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input id="nombre" type="text" name="nombre" placeholder="Nombres y apellidos de contacto" required="required" />
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" name="email" placeholder="Email" required="required" />
                            </div>
                            <div class="form-group">
                                <input id="phone" type="text" name="phone" placeholder="Celular de contacto" required="required" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea id="mensaje" name="mensaje" placeholder="Escribe tu consulta" rows="4" required="required"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <?php 
                                $fecha = date("Y-m-d");
                            ?>
                            <div id="mail-status"></div>
                            <input type="hidden" id="fecha" name="fecha" value="<?php echo $fecha ?>" />
                            <button type="submit" onClick="sendContact();">Necesito m&aacute;s Informaci&oacute;n</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- The Map -->
    <div class="themap">
        <div class="map-toggle"><i class="fas fa-map-marker-alt"></i></div>
        <div  class="map"><?php echo $xMap; ?></div>
    </div>
    <?php
        mysqli_free_result($resultadoCot);
    ?>
</section>
<!-- End Contact =========================================== -->