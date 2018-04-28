<?php
  function obtenerIPCliente() {
/* En la variable $ip se almacenará la dirección del cliente. */
    $ip = 0;
/* Si la variable $_SERVER['HTTP_CLIENT_IP'] tiene algún contenido, se asigna a la variable $ip. */
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) $ip = $_SERVER['HTTP_CLIENT_IP'];
/* Si la variable $_SERVER['HTTP_X_FORWARDED_FOR'] tiene algún contenido, se asigna a la variable $ip.
En ese caso debe separarse la IP pública del cliente de las obtenidas a través de posibles redes locales. */
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
/* Se abre la matriz de IP's obtenidas de $_SERVER['HTTP_X_FORWARDED_FOR']. */
      $ListaDeip = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
/* Si ya hay contenido en $ip, se añade a la matriz. */
      if ($ip) {
        array_unshift($ListaDeip, $ip);
        $ip = 0;
      }
/* Se eliminan IP's privadas, procedentes de posibles redes locales, así como la dirección de bucle local.
Cuando se encuentra una IP pública (externa) se devuelve como resultado de la función. */
      foreach ($ListaDeip as $direccion) if (!eregi("^(192\.168|172\.16|10|224|240|127|0)\.", $direccion)) return $direccion;
    }
/* Si no había contenido en $_SERVER['HTTP_X_FORWARDED_FOR'] se devuelve la IP obtenida mediante $_SERVER['REMOTE_ADDR']. */
    return $ip ? $ip : $_SERVER['REMOTE_ADDR'];
  }
?>
