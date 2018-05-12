$(document).ready(function() {
  $(function(){
      numero = 0;
      contador = setInterval(function() {
          if (numero == 7689) {
              clearInterval(contador);
          } else {
              $('.contador strong').html(++numero);
          }
      }, 5);
  });
});