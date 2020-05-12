<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <title><?= $ablakcim['cim'] . ( (isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '' ) ?></title>
</head>
<link href='https://fonts.googleapis.com/css?family=Barlow Condensed' rel='stylesheet'>

<body>
<div class=menu>
    <nav class=menu>
        <a href="index.php" class=menu>
            <img class=menu src="<?=$fejlec['kep']?>" alt="<?=$fejlec['kepalt']?>">
        </a>
		
        <a  href="index.php" class=menu>
            <h1 class=main>Tiszta Formák</h1>
        </a>
        
        <?php foreach ($oldalak as $url => $oldal) { ?>
            <a class=menu href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
				<h1 class=menu><?= $oldal['szoveg'] ?></h1>
			</a>
		<?php } ?>
    </nav>
	
	<div class="keresbox">
      <form method="GET" action="keres.php">
		<input type="text" class=kerestext placeholder="Keresés" name='keres'>
		<input type="submit" class="keresgomb" value=" ">
	  </form>
   </div>
	
</div>

<div class=content>
    <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
</div>
<div class=foot>
    <p>
		<?php if(isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?> <a href="http:\\www.tisztaformak.hu">Az eredeti oldal</a>
	</p>
</div>
</body>
</html>
