<html>
  <head>
    <!-- Boostrap
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <!-- Material Design Lite -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    <!-- Jquery libraries -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Dialogs cross browser -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dialog-polyfill/0.4.5/dialog-polyfill.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dialog-polyfill/0.4.5/dialog-polyfill.js"></script>

    <!-- Fuente awesome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- My Style -->
    <link rel="stylesheet" href="css/main.css">

    <!-- Scripts de Geolocalizacion -->
    <script src="js/geolocate.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwiHYaB5Z8qH6NJNvmblo-abeiLHrV6Lw&libraries=places&callback=initAutocomplete"
        async defer>
    </script>

    <script>
      //variable para identificar salida de la web.
      var vAdios = false;

      $( function() {
        var availableTags = [
          "Chevrolet Agile 1.4 LS / LS Spirit 5Ptas. " ,
          "Chevrolet Agile 1.4 LT / LT Spirit 5Ptas. " ,
          "Chevrolet Agile 1.4 LTZ / LTZ Spirit 5Ptas." ,
          "Chevrolet Agile 1.4 LTZ Google WiFi 5Ptas. " ,
          "Chevrolet Agile 1.4 Effect 5Ptas. " ,
          "Chevrolet Astra II GL 2.0 N 8v 4Ptas. " ,
          "Chevrolet Astra II GLS 2.0 N 8v 4Ptas." ,
          "Chevrolet Astra II GL 2.0 TD 16v 4Ptas." ,
          "Chevrolet Astra II GLS 2.0 TD 16v 4Ptas." ,
          "Chevrolet Astra II GL 2.0 N 8v 5Ptas." ,
          "Chevrolet Astra II GLS 2.0 N 8v 5Ptas." ,
          "Chevrolet Astra II CD 2.0 N 16v 5Ptas." ,
          "Chevrolet Astra II GSI 2.4 16v 5Ptas." ,
          "Chevrolet Astra II GL 2.0 TD 16v 5Ptas." ,
          "Chevrolet Astra II GLS 2.0 TD 16v 5Ptas." ,
          "Chevrolet Avalanche 5.3 L Nafta V8 SFI AT 4X4 " ,
          "Chevrolet Aveo LS 1.6 MT 4Ptas. (103cv)" ,
          "Chevrolet Aveo LT 1.6 MT 4Ptas. (103cv)" ,
          "Chevrolet Aveo LT 1.6 AT 4Ptas. (103cv)" ,
          "Chevrolet Blazer 2.8 TD DLX 4x2 " ,
          "Chevrolet Blazer 2.8 TD DLX 4x4" ,
          "Chevrolet Camaro SS V8 6.2 6AT (405cv) " ,
          "Chevrolet Captiva 2.4 N LS MT 4X2 (167cv) (L12) " ,
          "Chevrolet Captiva 2.4 N LT MT 4X4 (167cv) (L12) " ,
          "Chevrolet Captiva 2.4 N LT MT 4X4 (136cv) (L09)" ,
          "Chevrolet Captiva 2.2 D LT MT 4X4 (184cv) (L12)" ,
          "Chevrolet Captiva 2.0 TDI LT MT 4X4 (150cv) (L09)" ,
          "Chevrolet Captiva 2.2 D LTZ AT 4X4 (184cv) (L12) " ,
          "Chevrolet Captiva 2.0 TDI LTZ AT 4X4 (150cv) " ,
          "Chevrolet Celta 1.4 N 8v LS (92cv) 3Ptas" ,
          "Chevrolet Celta 1.4 N 8v LS AA DA (92cv) 3Ptas. " ,
          "Chevrolet Celta 1.4 N 8v LS AA ABG ABS (92cv) 3Ptas. " ,
          "Chevrolet Celta 1.4 N 8v LT Spirit (92cv) 3Ptas." ,
          "Chevrolet Celta 1.4 N 8v Advantage AA DA (92cv) 5Ptas. " ,
          "Chevrolet Celta 1.4 N 8v LS ABG ABS (92cv) 5Ptas. " ,
          "Chevrolet Celta 1.4 N 8v LS Spirit (92cv) 5Ptas." ,
          "Chevrolet Celta 1.4 N 8v LT AA DA (92cv) 5Ptas. " ,
          "Chevrolet Celta 1.4 N 8v LT Spirit (92cv) 5Ptas." ,
          "Chevrolet Celta 1.4 N 8v LT Pack (92cv) 5Ptas. " ,
          "Chevrolet Celta 1.4 N 8v LT ABG DA Plus (92cv) 5Ptas. " ,
          "Chevrolet Celta 1.4 N 8v Advantage Pack (92cv) 5Ptas. " ,
          "Chevrolet Celta 1.4 N 8v LT ABG ABS (92cv) 5Ptas. " ,
          "Chevrolet Classic 3Ptas. 1.4 N Cargo " ,
          "Chevrolet Classic 3Ptas. 1.4 N Life / City " ,
          "Chevrolet Classic 3Ptas. 1.4 N City LS AA" ,
          "Chevrolet Classic 3Ptas. 1.4 N LS Pack AA DA " ,
          "Chevrolet Classic 3Ptas. 1.4 N LT " ,
          "Chevrolet Classic 4Ptas. 1.4 N LS Base " ,
          "Chevrolet Classic 4Ptas. 1.4 N Spirit / LS AA DA" ,
          "Chevrolet Classic 4Ptas. 1.4 N LS ABS " ,
          "Chevrolet Classic 4Ptas. 1.4 N LS Pack " ,
          "Chevrolet Classic 4Ptas. 1.4 N LT Spirit" ,
          "Chevrolet Classic 4Ptas. 1.4 N LT Spirit Pack" ,
          "Chevrolet Classic Wagon 1.4 N Life " ,
          "Chevrolet Classic Wagon 1.4 N LS Pack AA DA " ,
          "Chevrolet Classic Wagon 1.4 N LT" ,
          "Chevrolet Cobalt 1.8 8v. Advantage LT MT (105cv)" ,
          "Chevrolet Cobalt 1.8 8v. Advantage LTZ MT (105cv)" ,
          "Chevrolet Cobalt 1.8 8v. Advantage LTZ AT (105cv)" ,
          "Chevrolet Cobalt 1.8 8v. LT MT (105cv) " ,
          "Chevrolet Cobalt 1.8 8v. LTZ MT (105cv) " ,
          "Chevrolet Cobalt 1.8 8v. LTZ AT (105cv) " ,
          "Chevrolet Cobalt 1.3D LT MT (75cv) " ,
          "Chevrolet Cobalt 1.3D LTZ MT (75cv)" ,
          "Chevrolet Corsa Classic  3Ptas. 1.4/1.6 N Cargo" ,
          "Chevrolet Corsa Classic  3Ptas. 1.4/1.6 N Life/Base (L09) " ,
          "Chevrolet Corsa Classic  3Ptas. 1.4/1.6 N City" ,
          "Chevrolet Corsa Classic  3Ptas. 1.4/1.6 N GL" ,
          "Chevrolet Corsa Classic  3Ptas. 1.6 N Serie Especial" ,
          "Chevrolet Corsa Classic  3Ptas. 1.4/1.6 N GLS" ,
          "Chevrolet Corsa Classic  3Ptas. 1.6 N Full AA DH " ,
          "Chevrolet Corsa Classic  4Ptas. 1.4/1.6 N Base" ,
          "Chevrolet Corsa Classic  4Ptas. 1.4/1.6 N GL / Super " ,
          "Chevrolet Corsa Classic  4Ptas. 1.6 N Super Serie Especial " ,
          "Chevrolet Corsa Classic  4Ptas. 1.4/1.6 N GLS/Full" ,
          "Chevrolet Corsa Classic  4Ptas. 1.7 D Base" ,
          "Chevrolet Corsa Classic  Wagon 1.4/1.6 N Life/Base" ,
          "Chevrolet Corsa Classic  Wagon 1.6 N Base AA" ,
          "Chevrolet Corsa Classic  Wagon 1.4/1.6 N GL" ,
          "Chevrolet Corsa Classic  Wagon 1.6 N Serie Especial " ,
          "Chevrolet Corsa Classic  Wagon 1.4/1.6 N GLS"
        ];

        //declaro dialogo de te llamamos con polyfill  
        var dCallYou = document.querySelector('#call-you');
        if (! dCallYou.showModal) {
           dialogPolyfill.registerDialog(dCallYou);
        };

        //declaro dialogo de productores con polyfill  
        var dProductor = document.querySelector('#productor');
        if (! dProductor.showModal) {
           dialogPolyfill.registerDialog(dProductor);
        };

        //declaro dialogo de validaciones busqueda con polyfill  
        var dValidate = document.querySelector('#validate');
        if (! dValidate.showModal) {
           dialogPolyfill.registerDialog(dValidate);
        };

        function customFilter(array, terms) {
            arrayOfTerms = terms.split(" ");
              return $.grep(array, function (value) {
              for (var i=0; i < arrayOfTerms.length; i++){
                 if(value.toLowerCase().indexOf(arrayOfTerms[i].toLowerCase()) == -1 ) return false;
              }
              return true;
            });
        };
        
        $( "#car" )
        .autocomplete({
            source: availableTags,
            multiple: false,
            mustMatch: true
            ,source: function (request, response) {
                response(customFilter( availableTags, request.term));
            },
        });

        $("#search")
        .click(function(){
            var auto = document.getElementById('car').value;
            var anio = document.getElementById('anio').value;
            var lugar = document.getElementById('autocomplete').value;
            if (auto.length == 0 || anio.length == 0 || lugar.length == 0){
              dValidate.showModal();
              dValidate.querySelector('.close').addEventListener('click', function() {
                                  dValidate.close();
                                  });
            } else{
              console.log("tengo los datos: " + auto + anio + lugar);
              vAdios = true;
              window.location.href = "./opciones.html?car="+auto+"&year="+anio+"&place="+lugar;
            }
         });

        $("#send-phone")
          .click(function(){
              dCallYou.showModal();
              dCallYou.querySelector('.close').addEventListener('click', function() {
                                  dCallYou.close();
                                  });
          });

        $("#get-productor")
          .click(function(){
              dProductor.showModal();
              dProductor.querySelector('.close').addEventListener('click', function() {
                                  dProductor.close();
                                  });
          });

     
      });

      function adios()
      {
        if (!vAdios) {
          /*return "Ha intentado salir de esta pagina. Si ha realizado algun cambio en los campos sin hacer clic en el boton Guardar, los cambios se perderan. Seguro que desea salir de esta pagina? ";*/
          alert('adios, regresa pronto');
        }
      }

    </script>



<!--<script>
      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };
      var options = {
        types: ['(cities)'],
        componentRestrictions: {country: 'ar'}
      };

      function initAutocomplete() {
        autocomplete = new google.maps.places.Autocomplete(
            (document.getElementById('autocomplete')),options);
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        var place = autocomplete.getPlace();
      }

      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }

      }
    </script>-->


    <!-- Chatra {literal} -->
    <script>
        (function(d, w, c) {
            w.ChatraID = '7Hm3MhNLsQevwZtqh';
            var s = d.createElement('script');
            w[c] = w[c] || function() {
                (w[c].q = w[c].q || []).push(arguments);
            };
            s.async = true;
            s.src = (d.location.protocol === 'https:' ? 'https:': 'http:')
            + '//call.chatra.io/chatra.js';
            if (d.head) d.head.appendChild(s);
        })(document, window, 'Chatra');
    </script>
    <!-- /Chatra {/literal} -->
  </head>
  <body unload="javascript:adios()">
    <!-- Uses a transparent header that draws on top of the layout"s background -->
    <div class="layout-transparent mdl-layout mdl-js-layout">
      <header class="mdl-layout__header mdl-layout__header--transparent">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <div class="logo chico"></div>
          
          
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
        </div>
      </header>

      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">
          <div class="logo"></div>
        </span>
        <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
            <a class="mdl-navigation__link" href="">Inicio</a>
            <a class="mdl-navigation__link" href="">Contacto</a>
        </nav>
      </div>

      <main class="mdl-layout__content">
        <div class="mdl-grid mdl-cell--12-col main">
          <!--mdl-cell--hide-phone mdl-cell--hide-tablet mdl-layout--large-screen-only-->
          <div class="mdl-cell mdl-cell--1-col mdl-cell--hide-tablet mdl-cell--hide-phone">
          </div>

          <div class="card-online mdl-card something-else mdl-cell mdl-cell--6-col mdl-cell-10-col-tablet mdl-cell-12-col-phone main">
            <div class="mdl-card__title titulo-tarjeta" style="background-color:rgba(22, 172, 164, 0.19); border-bottom:2px solid rgba(22, 172, 164, 0.52); color:black;" >
              <div class="mdl-grid mdl-cell mdl-cell--3-col" style="margin-left: -5px;  margin-bottom: 15px;">
                <a href="http://victory-design.ru/">
                  <img src="http://i3.istockimg.com/file_thumbview_approve/62949780/5/stock-photo-62949780-that-smile-has-melted-man-a-heart.jpg" style="width: 110px; border-radius: 50%; height: 110px; border: 2px solid rgba(22, 172, 164, 0.42); box-shadow: 1px 3px 3px rgba(255, 255, 255, 0.3); padding:5px"/>
                </a>
              </div>

              <div class="mdl-grid mdl-cell mdl-cell--9-col" style="margin-right: 0;padding-right: 0;margin-left: 0;">
                <h1 class="mdl-card__title-text mdl-cell mdl-cell--12-col" style="font-size: 28px; font-weight: 400; margin-bottom:0; margin-top:0;">Pablo R.</h1>
                <h1 class="mdl-card__title-text mdl-cell mdl-cell--12-col" style="font-size: 16px; margin-top:0; ">Tu Productor Asesor (mat. 123123)</h1>
                <span class="mdl-chip mdl-chip--contact">
                    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">
                      <i class="material-icons" style=" margin-top: 6px; font-size: 18px;">phone</i>
                    </span>
                    <span class="mdl-chip__text mdl-layout--large-screen-only">011 15-555555</span>
                </span>
                <button class="mdl-button mdl-js-button mdl-button--icon" style="margin-left: 10px; background-color: #009688; font-size: 15px; color:white;">
                  <i class="fa fa-facebook"></i>
                </button>
                <button class="mdl-button mdl-js-button mdl-button--icon" style="margin-left: 10px; background-color: #009688; font-size: 15px; color:white;">
                  <i class="fa fa-envelope-o" aria-hidden="true"></i>
                </button>               
              </div>
            </div>

            <div class="mdl-grid mdl-cell--12-col" style="padding-top: 49px;">
            <div style="width: auto;text-align: right;margin-top: -43px;font-size: 14px;border: 0px solid #e2e2e2; border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;border-top-right-radius: 15px;background-color: #ffffff;vertical-align: middle;padding: 0.7em;font-weight: bold;color: #16aca4; /*box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);*/">
                <label>Obten&#233; ahora mismo una cotizacion on-line!</label>
            </div>


              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--9-col ui-widget" id="auto">
                  <label class="mdl-textfield__label" for="car">Que vehículo tenes?</label>
                  <input class="mdl-textfield__input" onClick="this.select();" type="text" id="car">
                  <span class="mdl-textfield__error"></span>
              </div>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--3-col" id="year">
                <input class="mdl-textfield__input" type="text" onClick="this.select();" pattern="-?(([1][9][0-9][0-9])|([2][0-9][0-9][0-9]))?" id="anio">
                <label class="mdl-textfield__label" for="year">Modelo Año</label>
                <span class="mdl-textfield__error"></span>
              </div>
            </div>
            <div class="content-grid mdl-grid mdl-cell--12-col">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col" id="place">
                <input class="mdl-textfield__input" type="text" id="autocomplete" onFocus="geolocate()" onClick="this.select();" placeholder="ej: Mar del Plata" value="Buenos Aires, Ciudad Autonoma de Buenos Aires, Argentina" id="autocomplete">
                <label class="mdl-textfield__label" for="place">Donde Vivís?</label>
                <span class="mdl-textfield__error">Verifique que sea un sitio válido</span>
              </div>
            </div>
            <button class="mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--fab mdl-color--accent" id="search">
              <i class="material-icons" role="presentation" style="color:white;">search</i>
              <span class="visuallyhidden">serach</span>
            </button>
          </div>

          <div class="mdl-cell mdl-cell--5-col mdl-cell--hide-tablet mdl-cell--hide-phone">
            <div style="height:30%">
            </div>  
            <h2 class="titulo">Hacelo YA!</h1>
            <h5 class="titulo">Te ofrecemos una amplia gama de coberturas, con el respaldo y servicio que siempre nos caracterízan.</h2>
          </div>
        </div>

      </main>

      <footer id="footer" class="mdl-grid mdl-cell--12-col" style="padding-bottom: 0; padding-top: 0;">
        <div class="mdl-cell--1-col">
        </div>
        <div class="mdl-cell--10-col">
           <span class="mdl-chip mdl-chip--contact contact" style="margin-left:0">
              <img class="mdl-chip__contact mdl-cell--hide-tablet mdl-cell--hide-phone" src="http://clinique-jean-le-bon.capio.fr/wp-content/uploads/sites/26/2014/06/telephone.png"></img>
              <span class="mdl-chip__text footer-contacts">0800-000-00000</span>
          </span>
           <span class="mdl-chip mdl-chip--contact contact" id="get-productor">
            <img class="mdl-chip__contact" src="http://www.biochampagne.it/themes/cena-avvenimento-importante.png"></img>
              <span class="mdl-chip__text footer-contacts mdl-cell--hide-tablet mdl-cell--hide-phone">Mapa de productores</span>
          </span>
        </div>
        <div class="mdl-cell--1-col">
        </div>
      </footer>


      <!-- DIALOGOS -->
      <dialog class="mdl-dialog" id="validate">
        <h4 class="mdl-dialog__title">Datos pendientes</h4>
        <div class="mdl-dialog__content">
          <p>
            Por favor complete todos los datos para poder calcular un precio. Gracias!
          </p>
         </div>
        <div class="mdl-dialog__actions">
          <button type="button" class="mdl-button close">Continuar</button>
        </div>
      </dialog>

      <dialog class="mdl-dialog" id="call-you">
          <div class="mdl-dialog__content">
              <p> Danos tu telefono y te llamamos a la brevedad</p>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="tele">
                <input class="mdl-textfield__input" type="phone" onClick="this.select();" id="telef">
                <label class="mdl-textfield__label" for="year">Numero de Telefono</label>
                <span class="mdl-textfield__error"></span>
              </div>
          </div>
          <div class="mdl-dialog__actions mdl-dialog__actions--full-width">
              <button type="button" class="mdl-button close" >Enviar!</button>
              <button type="button" class="mdl-button close">Cancelar</button>
          </div>
      </dialog>

      <dialog class="mdl-dialog" id="productor" style="width:80%; height:80%;">
          <div class="mdl-dialog__content">
              <iframe src="https://www.google.com/maps/d/embed?mid=1CJg5vqQU00o8ygsyZDCwk3gp3GY" width="640" height="80%"></iframe>
          </div>
          <div class="mdl-dialog__actions mdl-dialog__actions--full-width">
              <button type="button" class="mdl-button close" >Ok</button>
          </div>
      </dialog>

  </body>
</html>

