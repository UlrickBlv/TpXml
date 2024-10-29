<?php
$racine= simplexml_load_file('Atome.xml');
$racine =$racine->asXml;
$famille= $racine ->famille;
$atome = $famille ->atome;
$nom = $atome ->nom;
//$nom = $atome ->children();
//$famille = $classification_atomique ->famille;
//$atome = $famille->atome;
//$nom = $famille->children();
?>
<link rel="stylesheet" type="text/css" href=css.css
<form action="index.php" method="post">
    
 <p>Chaine Xpath : <input type="text" name="Atome" /></p>
 
 <input action=story type="file" name="fichier"/>
 <textarea id="story" name="story"
          rows="5" cols="33"></textarea>
 <p><input action="" type="submit" value="valider"></p>
</form>
<table>
 <tr>
 <td>Symbole</td>
  <td>Nom</td>
 </tr>
  <td>
  <?php 
  foreach($racine ->famille as $famille)
  foreach($famille ->atome as $atome)
 echo utf8_decode($nom);
  ?>
  </td>
</table>



