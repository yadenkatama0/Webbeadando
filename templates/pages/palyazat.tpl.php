<h1>Pályázat</h1>
<p><b>Mi a pályázatok beadási határideje?</b><br>
A pályázatok befogadása folyamatos, nincs beadási határidőhöz kötve.<br>
<b>Mikor és hogyan születik döntés a beadott pályázatokról?</b><br>
A tárgyhónap végéig beérkezett pályázatokat a kuratórium a következő hónap első keddjén tárgyalja. A kuratórium tagjai első lépésben arról döntenek, hogy a beadott pályázat és pályázó megfelel-e az Alapítványunk céljaiban meghatározottaknak. Amennyiben igen, akkor kapcsolatfelvétel történik a pályázóval, ahol a pályázatban leírtak egyeztetése és a pályázó megismerése történik meg.<br>
Ezt követően születik döntés a támogatásról. A pályázat beadása és a végleges döntés meghozatala között eltelt idő általában nem hosszabb, mint 2 hónap. (folyamatábra)<br>
<b>Mekkora önrésszel kell rendelkezni a pályázónak?</b><br>
Támogatási gyakorlatunk szerint 10% önrésszel minden pályázónak rendelkezni kellene, különösen indokolt esetben azonban ennél kevesebb önrészt is elfogadunk.<br>
<b>Mit fogadnak el önrésznek?</b><br>
Önrészként a projektre fordított pénzen kívül saját munkát is vagy más pályázaton nyert összeget is elfogadunk, figyelembe veszünk.<br>
<b>Mekkora lehet egy projekt időtartama?</b><br>
Ideális esetben a projekt megvalósítására fordított idő nem haladja meg az egy évet, a másfél évet azonban nem lépheti túl.<br>
<b>Kik adhatnak be pályázatot?</b><br>

Magánszemélyek<br>
Társadalmi szervezetek (alapítványok, egyesületek)<br>
Sport szervezetek<br>
Jogi státusszal bíró szervezetek (kft-k, bt-k)<br>

<b>A pályázati támogatások elő vagy utófinanszírozást tesznek lehetővé?</b><br>
A támogatott pályázatok esetében a szerződés megkötését követően, a projekt ütemének megfelelően történik meg a támogatások kifizetése. Ennek mértéke a megítélt támogatás maximum 95%-a lehet, a fennmaradó 5% támogatás a projekt zárását követően kerül kifizetésre.<br>
</p>
<img src="styles/images/folyamat.jpg">
<?php
    
  
    
    
    $kepek = array();
    $olvaso = opendir($MAPPA);
    while (($fajl = readdir($olvaso)) !== false) {
        if (is_file($MAPPA.$fajl)) {
            $vege = strtolower(substr($fajl, strlen($fajl)-4));
            if (in_array($vege, $TIPUSOK)) {
                $kepek[$fajl] = filemtime($MAPPA.$fajl);
            }
        }
    }
    closedir($olvaso);
    
 
?>

    <div id="galeria">
    <h1>Galéria</h1>
    <?php
    arsort($kepek);
    foreach($kepek as $fajl => $datum)
    {
    ?>
        <div class="kep">
            <a href="<?php echo $MAPPA.$fajl ?>">
                <img src="<?php echo $MAPPA.$fajl ?>">
            </a>            
            <p>Név:  <?php echo $fajl; ?></p>
            <p>Dátum:  <?php echo date($DATUMFORMA, $datum); ?></p>
        </div>
    <?php
    }
    ?>
	<?php
  
   
    $uzenet = array();   


    if (isset($_POST['kuld'])) {
  
        foreach($_FILES as $fajl) {
            if ($fajl['error'] == 4);   
            elseif (!in_array($fajl['type'], $MEDIATIPUSOK))
                $uzenet[] = " Nem megfelelő típus: " . $fajl['name'];
            elseif ($fajl['error'] == 1   
                        or $fajl['error'] == 2   
                        or $fajl['size'] > $MAXMERET) 
                $uzenet[] = " Túl nagy állomány: " . $fajl['name'];
            else {
                $vegsohely = $MAPPA.strtolower($fajl['name']);
                if (file_exists($vegsohely))
                    $uzenet[] = " Már létezik: " . $fajl['name'];
                else {
                    move_uploaded_file($fajl['tmp_name'], $vegsohely);
                    $uzenet[] = ' Ok: ' . $fajl['name'];
                }
            }
        }        
    }
   ?>


    <h1>Feltöltés a galériába:</h1>
<?php
    if (!empty($uzenet))
    {
        echo '<ul>';
        foreach($uzenet as $u)
            echo "<li>$u</li>";
        echo '</ul>';
    }
?>
    <form action="palyazat.tpl.php" method="post"
                enctype="multipart/form-data">
        <label>Első:
            <input type="file" name="elso" required>
        </label>
        <label>Második:
            <input type="file" name="masodik">
        </label>
        <label>Harmadik:
            <input type="file" name="harmadik">
        </label>        
        <input type="submit" name="kuld">
      </form>    

