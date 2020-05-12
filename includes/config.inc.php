<?php
$ablakcim = array(
    'cim' => 'Tiszta Formák Alapítvány',
);

$fejlec = array(
    'kep' => 'styles/images/logo.png',
    'kepalt' => 'logo',
	'cim' => 'Tiszta Formák'
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y")
);

$oldalak = array(
	'/' => array('fajl' => 'fooldal', 'szoveg' => 'Főoldal'),
	'magunkrol' => array('fajl' => 'magunkrol', 'szoveg' => 'Magunkról'),
	
	'elerhetoseg' => array('fajl' => 'elerhetoseg', 'szoveg' => 'Elérhetőségeink'),
    'email' => array('fajl' => 'email', 'szoveg' => 'Kapcsolat'),
    'palyazat' => array('fajl' => 'palyazat', 'szoveg' => 'Pályázat')
	
	
);

$email = array(
        'visszaad' => array('fajl' => 'visszaad', 'szoveg' => '')

);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
?><?php
    $MAPPA = './kepek/';
    $TIPUSOK = array ('.jpg', '.png');
    $MEDIATIPUSOK = array('image/jpeg', 'image/png');
    $DATUMFORMA = "Y.m.d. H:i";
    $MAXMERET = 500*1024;
?>