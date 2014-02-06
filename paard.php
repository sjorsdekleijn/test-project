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
    
  function mijnPaard() {
    return 'PAARD';
  }
  
  function sjorsZijnPaard() {
    echo 'ZIE JE MIJ TYPEN';// VET :D
  }
  
  // don't make any errors :D
  /* create a horse*/
    function errorfunction()
    {
        return 'ERROR';
    }
}

?>