<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
    function sendContact() {
        var valid;
        valid = validateContact();
        if(valid) {
            jQuery.ajax({
                url: "contact_form.php",
                data:'nombre='+$("#nombre").val()+'&mail='+$("#mail").val()+'&telefono='+$("#telefono").val()+'&mensaje='+$("#mensaje").val(),
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
            $("#nombre").css('background-color','#f2dede');
            valid = false;
        }
        if(!$("#mail").val()) {
            $("#mail").css('background-color','#f2dede');
            valid = false;
        }
        if(!$("#mail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
            $("#mail").css('background-color','#f2dede');
            valid = false;
        }
        if(!$("#telefono").val()) {
            $("#telefono").css('background-color','#f2dede');
            valid = false;
        }
        if(!$("#mensaje").val()) {
            $("#mensaje").css('background-color','#f2dede');
            valid = false;
        }    
        return valid;
    }
    </script>
    <!--SPEACIAL CONTACTO AREA-->
    <section class="promotions-area section-padding" id="contacto">
        <div class="promotion-area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="container wow fadeIn">
            <div class="row">
                 <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2 style="color: white;">Contactanos</h2>
                        <br>
                        <img src="picture/blanco.png">
                        <p class="txcnt">Quisque sit amet turpis et ipsum elementum facilisis. Quisque sed placerat libero. Pellentesque nec tellus sollicitudin, </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <img src="picture/foto-contacto.png">
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12" style="background-color: #572e19; height: 555px;">
                    <div class="area-title text-center">
                        <br>
                        <h2 style="color: white;">Tus Datos</h2>
                        <br>
                    </div>
                    <div class="reservation-form" style="margin-top: -100px;">
                        <div  class="table-booking-form" id="reservation">
                            <div id="mail-status"></div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <label for="nombre"><i class="fa fa-user-o"></i></label>
                                    <input type="text" name="nombre" id="nombre" placeholder="Nombre y Apellido">
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <label for="mail"><i class="fa fa-send"></i></label>
                                    <input type="text" name="mail" id="mail" placeholder="Correo">
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <label for="telefono"><i class="fa fa-phone"></i></label>
                                    <input type="text" id="telefono" name="telefono" placeholder="Celular">
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <textarea id="mensaje" name="mensaje" placeholder="Comentario"></textarea>            
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3 col-xs-12">
                                    <button name="submit" onClick="sendContact();">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SPEACIAL CONTACTO AREA END-->

