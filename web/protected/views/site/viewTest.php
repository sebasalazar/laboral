<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$pdfLib = realpath(__DIR__ . '/../../../swiftMailer/lib/classes/Swift/Mailer.php');
require_once $pdfLib;

echo "mail enviado";
?>
