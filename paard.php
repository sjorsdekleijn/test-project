<?php

class paard () {
  
  function __construct( $bEcho = FALSE ) {
    if ($bEcho === TRUE) {
      echo 'paard';
    }
  }
  
  function setPaard( $paard ) {
    $this->_paard = $paard;
  }
  
  function getPaard() {
    return $this->_paard;
  }
}

?>