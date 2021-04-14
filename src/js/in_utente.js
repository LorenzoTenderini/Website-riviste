import moment from 'moment'
import "../css/in_utente.css"

function stampa_cazzi(){
  $(document).ready(function() {
      $("#c-o-1").click(function() {
          $("#box").animate({
              width: "600px"
          });
          $("#box").animate({
              height: "300px"
          });
      });
  });
};
