<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?= $tab_title ?></title>
<link href="/css/bec2009.css" rel="stylesheet" type="text/css" />
<?= $this->section('styles') ?>
</head>

<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
<?= $this->section('popup') ?>
<div id="Container">
  <div id="bloc1"><br /><br />
    <a href="/index_fr.html">FR</a> : <a href="/nl/index_nl.html">NL</a> : <strong>EN</strong></div>
  <div id="Top1"></div>
  <div id="menu">
    <ul>
      <li><a href="/en/index_en.html">Home</a></li>
      <li><a href="/en/ophthalmologists.html">Doctors</a></li>
      <li><a href="/en/eye_diseases.html">Diseases and treatments</a></li>
      <li><a href="/en/eye_surgery_technology.html">High Tech instruments</a></li>
      <li><a href="/en/eye_center.html">Localisation</a></li>
      <li><a href="/en/gallery.html">Gallery</a></li>
      <li><a href="/en/ophthalmologist_brussels.html">Contact</a></li>
    </ul>
  </div>
  <div id="banner">
	  <?= $this->section("banner") ?>
  </div>
  <div id="bloc1b">
  	<p><?= $title ?></p>
  </div>
  <div id="Top1b">  </div>
  <div id="bloc3"><img src="/images/oeil.jpg" alt="Eye Center is specialized in prevention, medical and surgical treatment of the eyes" /></div>
  <div id="Top3">
  		<?= $this->section("top3"); ?>
  </div>
  <div id="ssMenu">    
    <ul>
      <li><a href="/en/ophtalmologists_brussels/doctor_jean_assaf.html"><strong>Jean Assaf MD</strong></a></li>
      <li><a href="/en/ophtalmologists_brussels/doctor_dixsaut.html">F. Dixsaut MD</a></li>
      <li><a href="/en/ophtalmologists_brussels/doctor_frankental.html">D. Frankental MD</a></li>
      <li><a href="/en/ophtalmologists_brussels/doctor_kolyvras.html">N. Kolyvras MD</a></li>
		<li><a href="/en/ophtalmologists_brussels/doctor_vilain.html">S. Vilain MD</a></li>
    </ul>
  </div>
  <div id="content">
  		<?= $this->section("content"); ?>
  </div>
  <div id="bloc2">
    <p>All rights reserved<br />&copy; Brussels Eye Center 2018</p>
  </div>
  <div id="links">
    <ul>
      <li>&nbsp;<a href="/en/ophthalmologists.html">Doctors</a></li>
      <li><a href="/en/eye_diseases.html">&nbsp;Diseases and treatments</a></li>
      <li><a href="/en/eye_surgery_technology.html">&nbsp;High Tech instruments</a></li>
      <li><a href="/en/eye_center.html">&nbsp;Localisation</a></li>
    <li><a href="/en/ophthalmologist_brussels.html">&nbsp;Contact</a></li>
    </ul>
  </div>
  <div id="gws">
    <div align="center" class="gws"><br />
    CM dESIGN <a href="http://www.cmdesign2.be" target="_blank">Web site design</a></div>
  </div>
</div>
<?= $this->js()->render() ?>
</body>
</html>
