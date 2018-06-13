<?php
$kolor=$_POST['kolor'];
$stopnie=$_POST['stopnie'];
$iloscKwadratow=$_POST['iloscKwadratow'];
$specjalny=$_POST['specjalny'];


function bierzKwadrata($kolor, $iloscKwadratow, $specjalny) {


    for($i=0; $i<$iloscKwadratow; $i++) {
            $spec='';
            if ($specjalny==$i+1) {
                $spec= 'specjalny';
            }
            
        echo '<div class="kwadrat '.$kolor.' '.$spec.'"></div>';
        }
    }






?>