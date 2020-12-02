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
      <div id="bloc1">
        <br />
        <br />
        <strong>FR</strong> : <a href="/nl/index_nl.html">NL</a> :
        <a href="/en/index_en.html">EN</a>
      </div>
      <div id="Top1"></div>
      <div id="menu">
        <ul>
          <li><a href="/index_fr.html">Accueil</a></li>
          <li><a href="/ophtalmologues.html">Docteurs</a></li>
          <li><a href="/maladies_oculaires.html">Maladies et soins</a></li>
          <li><a href="/technologies.html">Matériel et technologies</a></li>
          <li><a href="/centre_ophtalmologique.html">Localisation</a></li>
          <li><a href="/gallery.html">Galerie</a></li>
          <li><a href="/ophtalmologue_bruxelles.html">Contact</a></li>
        </ul>
      </div>
      <div id="banner">
        <?= $this->section("banner") ?>
      </div>
      <div id="bloc1b">
        <p><?= $title ?></p>
      </div>
      <div id="Top1b"></div>
      <div id="bloc3">
        <img
          src="/images/oeil.jpg"
          alt="Centre d’Ophtalmologie spécialisé dans la prévention, les maladies et chirurgie des yeux"
        />
      </div>
      <div id="Top3">
		<?= $this->section("top3"); ?>
      </div>
      <div id="ssMenu">
        <ul>
          <li>
            <a href="/ophtalmologues_bruxelles/docteur_jean_assaf.html"
              ><strong>Dr Jean Assaf</strong></a
            >
          </li>
          <li>
            <a href="/ophtalmologues_bruxelles/docteur_dixsaut.html"
              >Dr F. Dixsaut</a
            >
          </li>
          <li>
            <a href="/ophtalmologues_bruxelles/docteur_frankental.html"
              >Dr D. Frankental
            </a>
          </li>
          <li>
            <a href="/ophtalmologues_bruxelles/docteur_kolyvras.html"
              >Dr N. Kolyvras</a
            >
          </li>
          <li>
            <a href="/ophtalmologues_bruxelles/docteur_vilain.html"
              >Dr S. Vilain</a
            >
          </li>
        </ul>
      </div>
      <div id="content">
	  	<?= $this->section("content"); ?>
      </div>
      <div id="bloc2">
        <p>
          Tous droits réservés<br />
          &copy; Brussels Eye Center 2018
        </p>
      </div>
      <div id="links">
        <ul>
          <li>&nbsp;<a href="/ophtalmologues.html">Docteurs</a></li>
          <li>&nbsp;<a href="/maladies_oculaires.html">Maladies et soins</a></li>
          <li>
            &nbsp;<a href="/technologies.html">Materiel et technologies</a>
          </li>
          <li>&nbsp;<a href="/centre_ophtalmologique.html">Localisation</a></li>
          <li>&nbsp;<a href="/ophtalmologue_bruxelles.html">Contact</a></li>
        </ul>
      </div>
      <div id="gws">
        <div align="center" class="gws">
          <br />
          CM dESIGN
          <a href="http://www.cmdesign2.be" target="_blank"
            >création de site internet</a
          >
        </div>
      </div>
    </div>
    <?= $this->js()->render() ?>
  </body>
</html>