
	<?php 
		$this->layout("/layout/main_fr", [
			"tab_title" => "
      Brussels Eye Center - Centre d'Ophtalmologie spécialisé dans les maladies
      et la chirurgie des yeux
    ",
			"title" => "
        Bienvenue
      "
		]); 
	?>
        <table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
          <tbody><tr>
            <td colspan="2"><h2>Actualités</h2></td>
          </tr>
          <tr>
            <td>
              <p>
                Le Brussels Eye Center utilise actuellement le laser SCHWIND
                AMARIS 750S - 1050 hz ET.
              </p>
              <p><a href="technologies_amaris750S.html">+ d'infos</a></p>
            </td>
            <td>
              <p>
                <img src="images/amaris_750S/AMARIS 750S_Long shot_Side view.jpg" alt="AMARIS 750S" width="286" height="162">
              </p>
            </td>
          </tr>
        </tbody></table>

        <p>&nbsp;</p>
      

	<?php $this->start("banner") ?>
	
        <img src="images/top_accueil.jpg" alt="Centre ophtalmologique spécialisé dans les maladies et la chirurgie des yeux" width="600" height="250">
      
	<?php $this->stop() ?>

	<?php $this->start("top3") ?>
	
        <h2>Brussels Eye Center</h2>
        <p>
          En plein cœur de Bruxelles, dans le quartier des Communautés
          Européennes, le
          <strong>Centre d’Ophtalmologie spécialisé</strong> dans la prévention,
          le traitement médical et chirurgical des yeux.
        </p>
        <p>
          Notre centre regroupe
          <a href="ophtalmologues.html">6 ophtalmologues</a> expérimentés dans
          les maladies et la chirurgie des yeux.
        </p>
      
	<?php $this->stop() ?>

	<?php $this->start("popup") ?>
	<style type="text/css">
      #overlay {
        position: fixed;

        top: 0;

        left: 0;

        width: 100%;

        height: 100%;

        background-color: #000;

        filter: alpha(opacity=70);

        -moz-opacity: 0.7;

        -khtml-opacity: 0.7;

        opacity: 0.7;

        z-index: 100;

        display: none;
      }

      .cnt223 a {
        text-decoration: none;
      }

      .popup {
        width: 100%;

        margin: 0 auto;

        display: none;

        position: fixed;

        z-index: 101;
      }

      .cnt223 {
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

      .cnt223 p {
        clear: both;

        color: #555555;

        /* text-align: justify; */

        font-family: sans-serif;
      }

      .cnt223 p a {
        color: #d91900;

        font-weight: bold;
      }

      .cnt223 .x {
        float: right;

        height: 35px;

        left: 22px;

        position: relative;

        top: -25px;

        width: 34px;
      }

      .cnt223 .x:hover {
        cursor: pointer;
      }
    </style>
	<script type="text/javascript">
      $(function() {
        var overlay = $('<div id="overlay"></div>');

        overlay.show();

        overlay.appendTo(document.body);

        $(".popup").show();

        $(".close").click(function() {
          $(".popup").hide();

          overlay.appendTo(document.body).remove();

          return false;
        });

        $(".x").click(function() {
          $(".popup").hide();

          overlay.appendTo(document.body).remove();

          return false;
        });
      });
	</script>
	<div class="popup">
      <div class="cnt223">
        <p align="right"><a href="" class="close">X</a></p>
        <h2>Bienvenue sur le site du Brussels Eye Center</h2>
        <p>
          <em
            >centre d’ophtalmologie spécialisé dans la prévention, le traitement
            médical et chirurgical des maladies des yeux notamment la chirurgie
            de la myopie, de l’hypermétropie, de l’astigmatisme, de la presbytie
            et des chirurgies de la cataracte, de la cornée et du kératocône.
            Notre centre regroupe plusieurs ophtalmologues spécialisés en
            chirurgie, oculaire ophtalmologie générale, rétine médicale,
            glaucome et lentilles de contact.</em
          >
        </p>
        <p>
          <strong>NOUVEAU!</strong><br />
          La prise de rendez-vous en ligne est disponible via
          <a
            href="https://fr.doctena.be/cabinet/Brussels_Eye_Center-362260"
            target="_blank">Doctena (Cabinet)</a>
		</p>
        <p>
          <strong
            >Pour les rendez-vous concernant une chirurgie ou pour un avis de
            chirurgie</strong
          >, veuillez nous contacter
          <strong
            >par téléphone au <a href="tel:+3227354355">02 735 43 55</a></strong
          >
        </p>
        <p>
          Le secrétariat téléphonique est accessible du lundi au vendredi de
          08H30 à 12H30.
        </p>
        <p>
          <strong>ATTENTION!</strong><br /><strong
            >Nous avons déménagé en novembre 2018.</strong
          ><br />Nos nouveaux locaux se situent Rue Saint Hubert, 49 à 1150
          Woluwe Saint Pierre.
        </p>
      </div>
    </div>
	<?php $this->stop() ?>
