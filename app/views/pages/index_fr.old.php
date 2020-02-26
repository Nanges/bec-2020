<?php 
	$this->layout("/layout/main", [
		"tab_title" => "Brussels Eye Center - Centre d'Ophtalmologie spécialisé dans les maladies et la chirurgie des yeux",
		"title" => "Bienvenue"
	]); 
?>
<table
          width="550"
          border="0"
          align="center"
          cellpadding="0"
          cellspacing="0"
        >
          <tr>
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
                <img
                  src="images/amaris_750S/AMARIS 750S_Long shot_Side view.jpg"
                  alt="AMARIS 750S"
                  width="286"
                  height="162"
                />
              </p>
            </td>
          </tr>
		</table>
<?php $this->start("banner") ?>
<img
	src="images/top_accueil.jpg"
	alt="Centre ophtalmologique spécialisé dans les maladies et la chirurgie des yeux"
	width="600"
	height="250"
/>
<?php $this->stop() ?>