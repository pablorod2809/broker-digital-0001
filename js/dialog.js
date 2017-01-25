     $( function() {
        /* DIALOGOS COMUNES a TODAS LAS PANTALLAS*/
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