<?php
/* @var $this EvaluacionesPracticasController */
/* @var $dataProvider CActiveDataProvider */

$pdfLib = realpath(__DIR__ . '/../../../MPDF54/mpdf.php');
require_once $pdfLib;

//$pdf = Yii::createComponent('application.extensions.MPDF54.mpdf');

$html='
<link rel="stylesheet" type="text/css" href="'.Yii::app()->request->baseUrl.'/css/pdf.css" />

<div class="encabezado">
    <h2>Universidad Tecnológica Metropolitana</h2>
    <h3>Facultad de Ingeniería</h3>
    <h4>Departamento de Computación e Informática</h4>
    <br/><br/>
</div>
<table>
<tr>
    <td>Evaluacion de Practica</td>
    <br/><br/><br/>
</tr>
    <tr class="odd"><td> <b>Nombre: </b> </td><td> '.$model->estudiantes->nombres.'</td></tr>
    <tr class="odd"><td> <b>Apellidos: </b> </td><td> '.$model->estudiantes->apellidos.'</td></tr>
    <tr class="odd"><td> <b>Encargado de Practica: </b> </td><td> '.$model->EncargadosPracticas->nombre_encargado.'</td></tr>
    <tr class="odd"><td> <b>Cargo: </b> </td><td> '.$model->cargo_asignado.'</td></tr>
    <tr class="odd"><td> <b>Conocimintos técnicos demostrados: </b> </td><td> '.$model->conocimientos_demostrados.'</td></tr>
    <tr class="odd"><td> <b>Eficacia para llegar a resultados concretos en su labor: </b> </td><td> '.$model->eficacia.'</td></tr>
    <tr class="odd"><td> <b>Grado de cumplimiento y dedicación: </b> </td><td> '.$model->grado_cumplimiento.'</td></tr>
    <tr class="odd"><td> <b>Puntualidad y respeto de las normas etablecidas: </b> </td><td> '.$model->puntualidad_respeto.'</td></tr>
    <tr class="odd"><td> <b>Capacidad de integración y/o adaptación: </b> </td><td> '.$model->integracion_adaptacion.'</td></tr>
    <tr class="odd"><td> <b>Responsabilidad, autocrítica y superación: </b> </td><td> '.$model->responsabilidad_superacion.'</td></tr>
    <tr class="odd"><td> <b>Personalidad, lenguaje, presencia y seguridad: </b> </td><td> '.$model->capacidades_personales.'</td></tr>
    <tr class="odd"><td> <b>Iniciativa, creatividad y capacidad de improvisación: </b> </td><td> '.$model->iniciativa_creativi_improvi.'</td></tr>
</table>

<br/>
<p>Observaciones: ________________________________________________________________________________________</p>
<p>________________________________________________________________________________________________________</p>
<p>________________________________________________________________________________________________________</p>
<p>________________________________________________________________________________________________________</p>
<br/><br/>
<p>Fecha: ______________________</p>
<br/><br/>
<p class="firma">_________________________________</p>
<p class="firma">Firma de Profesional Guia </p>
';

$mpdf=new mPDF('win-1252','LETTER','','',15,15,25,12,5,7);
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;


?>