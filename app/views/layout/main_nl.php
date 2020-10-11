<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?= $tab_title ?></title>
<link href="/css/bec2009.css" rel="stylesheet" type="text/css" />
<?= $this->section('styles') ?>
</head>
<body>
<script
      type="text/javascript"
      src="https://code.jquery.com/jquery-1.8.2.js"
    ></script>
<?= $this->section('popup') ?>
<div id="Container">
  <div id="bloc1"><br />
    <br />
    <a href="/index_fr.html">FR</a> : <strong>NL</strong> : <a href="/en/index_en.html">EN</a></div>
  <div id="Top1"></div>
  <div id="menu">
    <ul>
      <li><a href="/nl/index_nl.html">Introductie</a></li>
      <li><a href="/nl/oftalmologen.html">Dokters</a></li>
      <li><a href="/nl/oogziekten.html">Ziekten en behandeling</a></li>
      <li><a href="/nl/technologieen.html">Materiaal en technologieën</a></li>
      <li><a href="/nl/ligging.html">Ligging</a></li>
      <li><a href="/nl/gallery.html">Galerij</a></li>
      <li><a href="/nl/oogheelkunde_brussel.html">Contactpunten</a></li>
    </ul>
  </div>
  <div id="banner">
  <?= $this->section("banner") ?>
  </div>
  <div id="bloc1b">
  	<p><?= $title ?></p>
  </div>
  <div id="Top1b"> </div>
  <div id="bloc3"><img src="/images/oeil.jpg" alt="Centre d’Ophtalmologie spécialisé dans la prévention, les maladies et chirurgie des yeux" /></div>
  <div id="Top3">
  <?= $this->section("top3"); ?>
  </div>
  <div id="ssMenu">
    <ul>
      <li><a href="/nl/oftalmologen_brussel/dokter_jean_assaf.html"><strong>Dr Jean Assaf</strong></a></li>
      <!-- <li><a href="/nl/oftalmologen_brussel/dokter_altawab.html">Dr B. Altawab</a></li>
      <li><a href="/nl/oftalmologen_brussel/dokter_benchekroun.html"> Dr S. Benchekroun</a></li> -->
      <li><a href="/nl/oftalmologen_brussel/dokter_dixsaut.html">Dr F. Dixsaut</a></li>
	  <li><a href="/nl/oftalmologen_brussel/dokter_elouardighi.html">Dr H. El Ouardighi</a></li>
      <li><a href="/nl/oftalmologen_brussel/dokter_frankental.html"> Dr D. Frankental</a></li>
	  <li><a href="/nl/oftalmologen_brussel/dokter_kazemi.html">Dr G. Kazemi</a></li>
      <li><a href="/nl/oftalmologen_brussel/dokter_kolyvras.html">Dr N. Kolyvras</a></li>
      <li><a href="/nl/oftalmologen_brussel/dokter_vilain.html">Dr S. Vilain</a></li>
    </ul>
  </div>
  <div id="content">
  <?= $this->section("content"); ?>
  </div>
  <div id="bloc2">
    <p>Alle rechten voorbehalten<br />
      &copy; Brussels Eye Center 2018</p>
  </div>
  <div id="links">
    <ul>
      <li>&nbsp;<a href="/nl/oftalmologen.html">Dokters</a></li>
      <li><a href="/nl/oogziekten.html">&nbsp;Ziekten en behandeling</a></li>
      <li><a href="/nl/technologieen.html">&nbsp;Materiaal en technologieën</a></li>
      <li><a href="/nl/ligging.html">&nbsp;Ligging</a></li>
      <li><a href="/nl/oogheelkunde_brussel.html">&nbsp;Contactpunten</a></li>
    </ul>
  </div>
  <div id="gws">
    <div align="center" class="gws"><br />
      CM dESIGN <a href="http://www.cmdesign2.be" target="_blank">webDesign</a></div>
  </div>
</div>
<?= $this->js()->render() ?>
</body>
</html>
