<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


require "../vendor/autoload.php";

$saludoRecibido = $_GET['$saludo'];

use integracionCOntinua\modelo\saludo;

$objetoSaludo = new saludo();
$objetoSaludo->setSaludo($saludoRecibido);

$saludo =$objetoSaludo->formatSaludo();

require "../vista/plantillaSaludo.php";

