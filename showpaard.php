<?php

/*
 * To change this template use Tools | Templates.
 */
include('paard.php');

/* PAARDEN TRUUK */
$paard = new paard( TRUE );
$paard->setPaard( "FRANS" );
echo $paard->getPaard();
?>