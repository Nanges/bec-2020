
	<?php 
		$this->layout("/layout/main_en", [
			"tab_title" => "Brussels Eye Center - Eye Center specialized in medical and surgical treatment of the eyes",
			"title" => "
    Welcome
  "
		]); 
	?>
	
    <table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
      <tbody><tr>
        <td colspan="2"><h2>New</h2>        </td>
      </tr>
      <tr>
        <td><p>The Brussels Eye Center is now working with the laser SCHWIND AMARIS 750S.</p>
        <p><a href="eye_surgery_technology_amaris-750S.html">+ Read more</a></p></td>
        <td><p><img src="../images/amaris_750S/AMARIS 750S_Long shot_Side view.jpg" alt="AMARIS 750S" width="286" height="162"></p></td>
      </tr>
    </tbody></table>
    <p>&nbsp;</p>
  

	<?php $this->start("banner") ?>
	<img src="../images/top_accueil_en.jpg" alt="Brussels Eye Center, Eye Center specialized in medical and surgical treatment of the eyes" width="600" height="250">
	<?php $this->stop() ?>

	<?php $this->start("top3") ?>
	
    <h2>Brussels Eye Center</h2>
    <p>In the heart of Brussels, in the European Community  district, the Eye Center is specialized in prevention, medical and surgical  treatment of the eyes.</p>
    <p>Our  center gathers <a href="ophthalmologists.html"><strong>7 specialised ophtalmolgist</strong></a> in eye diseases and able to perform all medical and surgical treatments for every patient in all eye diseases.</p>
  
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

    <h2>Welcome to the website of the Brussels Eye Center</h2>
	  <p>The Brussels Eye Center is an ophthalmology centre specialising in the prevention, medical and surgical treatment of eye diseases, including surgery for myopia, hyperopia, astigmatism, presbyopia, cataract, cornea and keratoconus. Our centre has several ophthalmologists specialising in surgery, general ophthalmology, medical retina, glaucoma and contact lenses.</p>
    <h3>New!</h3>
    <p>Online appointment booking is available via <a href="https://en.doctena.be/practice/Brussels_Eye_Center-362260" target="blank">Doctena</a> (Cabinet)<br/>
For appointments concerning surgery or for surgical advice, please contact us by phone on 02 735 43 55<br/>
The telephone secretariat is available from Monday to Friday from 08.30 to 12.30.</p>
    <h3>Attention!</h3>
    <p>We have moved in November 2018.<br/>
Our new offices are located at Rue Saint Hubert, 49 in 1150 Woluwe Saint Pierre.
    </p>
  </div>

</div>

<?php $this->stop() ?>