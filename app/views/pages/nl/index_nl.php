
	<?php 
		$this->layout("/layout/main_nl", [
			"tab_title" => "Brussels Eye Center - Centrum voor oogheelkunde gespecialiseer in oogziekten en chirurgie",
			"title" => "
    Welkom
  "
		]); 
	?>
	
    <table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
      <tbody><tr>
        <td colspan="2"><h2>Nieuw</h2></td>
      </tr>
      <tr>
        <td><p>Het Brussels Eye Center gebruikt nu de  Laser Schwind Amaris 750S.</p>
          <p><a href="technologieen_amaris750s.html">+ Meer informatie</a></p></td>
        <td valign="top"><img src="../images/amaris_750S/AMARIS 750S_Long shot_Side view.jpg" alt="AMARIS 750S" width="286" height="162"></td>
      </tr>
    </tbody></table>
    <p>&nbsp;</p>
  

	<?php $this->start("banner") ?>
	<img src="../images/top_accueil_NL.jpg" alt="Centrum voor Oogheelkunde gespecialiseerd in oogziekten en chirurgie" title="Centrum voor Oogheelkunde gespecialiseerd in oogziekten en chirurgie" width="600" height="250">
	<?php $this->stop() ?>

	<?php $this->start("top3") ?>
	
    <h2>Brussels Eye Center</h2>
    <p> In hartje Brussel, in de wijk van de Europese Commissie,  ligt het <strong>ophtalmologisch centrum gespecialiseerd</strong> in de preventie en de medische  en chirurgische behandeling van de ogen.</p>
    <p>Ons centrum groepeert <a href="oftalmologen.html">6 ophtalmologen</a> gespecialiseerd in <strong>oogziekten</strong> en  oogchirurgie.</p>
  
	<?php $this->stop() ?>

	<?php $this->start('popup') ?>
	<style type="text/css">

#overlay {

position: fixed;

top: 0;

left: 0;

width: 100%;

height: 100%;

background-color: #000;

filter:alpha(opacity=70);

-moz-opacity:0.7;

-khtml-opacity: 0.7;

opacity: 0.7;

z-index: 100;

display: none;

}

.cnt223 a{

text-decoration: none;

}

.popup{

width: 100%;

margin: 0 auto;

display: none;

position: fixed;

z-index: 101;

}

.cnt223{

min-width: 600px;

width: 600px;

min-height: 150px;

margin: 100px auto;

background: #f3f3f3;

position: relative;

z-index: 103;

padding: 15px 35px;

border-radius: 5px;

box-shadow: 0 2px 5px #000;

}

.cnt223 p{

clear: both;

    color: #555555;

    /* text-align: justify; */

    font-size: 20px;

    font-family: sans-serif;

}

.cnt223 p a{

color: #d91900;

font-weight: bold;

}

.cnt223 .x{

float: right;

height: 35px;

left: 22px;

position: relative;

top: -25px;

width: 34px;

}

.cnt223 .x:hover{

cursor: pointer;

}

</style>

<script type='text/javascript'>

$(function(){

var overlay = $('<div id="overlay"></div>');

overlay.show();

overlay.appendTo(document.body);

$('.popup').show();

$('.close').click(function(){

$('.popup').hide();

overlay.appendTo(document.body).remove();

return false;

});

$('.x').click(function(){

$('.popup').hide();

overlay.appendTo(document.body).remove();

return false;

});

});

</script>

<div class="popup">

  <div class="cnt223">

    <p align="right"><a href="" class="close">X</a></p>

    <h2>Welkom op de website van het Oogcentrum Brussel !</h2>
    <p>Het Brussels Oogcentrum is een oog centrum dat gespecialiseerd is in de preventie, medische en chirurgische behandeling van oogziekten, met inbegrip van chirurgie voor bijziendheid, verziendheid, astigmatisme, presbyopie, cataract, cornea en keratoconus. Ons centrum beschikt over verschillende oogartsen die gespecialiseerd zijn in chirurgie, algemene oogheelkunde,  retina, glaucoom en contactlenzen.</p>
    <h3>Nieuw!</h3>
    <p>Online afspraken maken is mogelijk via <a href="https://nl.doctena.be/praktijk/Brussels_Eye_Center-362260" target="blank">Doctena</a> (Kabinet).<br/>
    Voor afspraken betreffende chirurgie of voor chirurgisch advies, gelieve ons op te bellen op 02 735 43 55.<br/>
    Het telefonisch secretariaat is bereikbaar van maandag tot vrijdag van 08H30 tot 12H30.</p>
    <h3>Attentie!</h3>
    <p>We zijn verhuisd in november 2018 !<br/>
    Onze nieuwe kliniek is gelegen op  Rue Saint Hubert, 49 in 1150 Sint-Pieters-Woluwe.</p>
  </div>

</div>
	<?php $this->stop() ?>