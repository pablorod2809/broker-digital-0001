     $( function() {

        //Llamado telefonico
        $(document.body).append('<dialog class="mdl-dialog" id="call-you" style="width:350px;"><div class="mdl-dialog__content"><p class="bd-dialog-title">Mi teléfono</p><p class="bd-telefono-nro">(011)15-55555</p><p class="bd-dialog-sub-title"> Si queres te llamo</p><button type="button" id="btn-phone-number" class="mdl-button bd-btn-primary" >Ahora</button><button type="button" id="btn-when" class="mdl-button bd-btn-secondary">Mas tarde</button></div><div ></div></dialog>');
        $(document.body).append('<dialog class="mdl-dialog" id="call-you-2" style="width:350px;"><div class="mdl-dialog__content"><p class="bd-dialog-title">Tu teléfono es...</h4><input class="mdl-textfield__input" type="phone"  id="telef" style=" margin-bottom: 25; margin-top: 25;  font-size: 28; color: #149b94;"><button type="button" id="btn-confirm"  class="mdl-button bd-btn-primary ">Confirmar</button><button type="button" class="mdl-button bd-btn-secondary close">Cancelar</button></div><div ></div></dialog>');
        $(document.body).append('<dialog class="mdl-dialog" id="call-you-4" style="width:350px;"><div class="mdl-dialog__content"><p class="bd-dialog-title" style="margin-bottom:30px; font-size: 25; font-weight: 600;">Ya tome tus datos, recibirás mi llamada!</p><button type="button" class="mdl-button bd-btn-primary close">Ok</button></div><div ></div></dialog>');
        $(document.body).append('<dialog class="mdl-dialog" id="call-you-3" style="width:350px;"><div class="mdl-dialog__content"><p class="bd-dialog-title">Cuando?</p><p style="display:inline;"><input type="checkbox" class="filled-in" id="lun" checked="checked" /><label for="lun">Lun</label></p><p style="display:inline;"><input type="checkbox" class="filled-in" id="mar" checked="checked" /><label for="mar">Mar</label></p><p style="display:inline;"><input type="checkbox" class="filled-in" id="mie" checked="checked" /><label for="mie">Mie</label></p><p style="display:inline;"><input type="checkbox" class="filled-in" id="jue" checked="checked" /><label for="jue">Jue</label></p><p style="display:inline;"><input type="checkbox" class="filled-in" id="vie" checked="checked" /><label for="vie">Vie</label></p><p style="display:inline;"><input type="checkbox" class="filled-in" id="sab"  /><label for="sab">Sab</label></p><p style="display:inline;"><input type="checkbox" class="filled-in" id="dom"  /><label for="dom">Dom</label></p><p style="padding-top: 20px;"> En que horario?</p><div id="test5" class="noUi-target noUi-ltr noUi-horizontal" style="margin-top:25px; margin-bottom:30px;"></div><button type="button" id="btn-phone-number2" class="mdl-button bd-btn-primary" >Confirmar</button><button type="button" class="mdl-button bd-btn-secondary close">Cancelar</button></div></dialog>');

        //Consulta productor
        $(document.body).append('<dialog class="mdl-dialog" id="productor" style="width:80%; height:80%;"><div class="mdl-dialog__content"><iframe src="https://www.google.com/maps/d/embed?mid=1CJg5vqQU00o8ygsyZDCwk3gp3GY" width="640" height="480"></iframe></div><div class="mdl-dialog__actions mdl-dialog__actions--full-width"><button type="button" class="mdl-button close" >Ok</button></div></dialog>');

        //Recibiras un email ...
        $(document.body).append('<dialog class="mdl-dialog" id="finish" style="width:350px;"><div class="mdl-dialog__content"><p class="bd-dialog-sub-title" >La información de tu poliza y mis datos de contacto llegarán a tu email.</p><button type="button" class="mdl-button bd-btn-primary close">Ok</button></div><div ></div></dialog>');


        /* DIALOGOS COMUNES a TODAS LAS PANTALLAS*/
        //declaro dialogo de te llamamos con polyfill  
        var dCallYou = document.querySelector('#call-you'); //principal.
        if (! dCallYou.showModal) {
           dialogPolyfill.registerDialog(dCallYou);
        };

        var dCallYou2 = document.querySelector('#call-you-2'); // Pide telefono
        if (! dCallYou2.showModal) {
           dialogPolyfill.registerDialog(dCallYou2);
        };

        var dCallYou3 = document.querySelector('#call-you-3'); // Cuando
        if (! dCallYou3.showModal) {
           dialogPolyfill.registerDialog(dCallYou3);
        };

        var dCallYou4 = document.querySelector('#call-you-4'); // Mensaje despedida.
        if (! dCallYou4.showModal) {
           dialogPolyfill.registerDialog(dCallYou4);
        };

        //declaro dialogo de productores con polyfill  
        var dProductor = document.querySelector('#productor');
        if (! dProductor.showModal) {
           dialogPolyfill.registerDialog(dProductor);
        };

        //declaro dialogo de finalizacion del tramite con polyfill  
        var dFinish = document.querySelector('#finish');
        if (! dFinish.showModal) {
           dialogPolyfill.registerDialog(dFinish);
        };

       var slider = document.getElementById('test5');
        noUiSlider.create(slider, {
         start: [8, 13],
         connect: true,
         tooltips: true,
         step: 1,
         range: {
           'min': 8,
           'max': 19
         }
        });

        $("#send-phone")
          .click(function(){
              dCallYou.showModal();
          });

        // Dialogos de llamado telefonico.
        $("#btn-phone-number") 
          .click(function(){
              try{
                 dCallYou3.close();
              }catch(err){
                 console.log("no pude cerrar el 3");
              }

              try{
                 dCallYou.close();
              }catch(err){
                 console.log("no pude cerrar el 1");
              }

              dCallYou2.showModal();
              dCallYou2.querySelector('.close').addEventListener('click', function() {
                                  dCallYou2.close();
                                  });
          });

        $("#btn-phone-number2") 
          .click(function(){
              try{
                 dCallYou3.close();
              }catch(err){
                 console.log("no pude cerrar el 3");
              }

              try{
                 dCallYou.close();
              }catch(err){
                 console.log("no pude cerrar el 1");
              }

              dCallYou2.showModal();
              dCallYou2.querySelector('.close').addEventListener('click', function() {
                                  dCallYou2.close();
                                  });
          });

        $("#btn-when") 
          .click(function(){
              try{
                 dCallYou.close();
              }catch(err){
                 console.log("no pude cerrar el 1");
              }
              dCallYou3.showModal();
              dCallYou3.querySelector('.close').addEventListener('click', function() {
                                  dCallYou3.close();
                                  });
          });

        $("#btn-confirm") 
          .click(function(){
              try{
                 dCallYou2.close();
              }catch(err){
                 console.log("no pude cerrar el 2");
              }
              dCallYou4.showModal();
              dCallYou4.querySelector('.close').addEventListener('click', function() {
                                  dCallYou4.close();
                                  });
        });

        //dialogos del mapa de productor.
        $("#get-productor")
          .click(function(){
              dProductor.showModal();
              dProductor.querySelector('.close').addEventListener('click', function() {
                                  dProductor.close();
                                  });
          });

        //dialogos pantalla de pago final.
        $("#btn-finish") 
        .click(function(){
            try{
               dialog1.close();
            }catch(err){
               console.log("no pude cerrar el 1");
            }
            dFinish.showModal();
            dFinish.querySelector('.close').addEventListener('click', function() {
                                dFinish.close();
                                window.location="index.php";
                                });
        });

     

      });        