<?php 
    $this->layout("/layout/main_en", [
        "tab_title" => "Brussels Eye Center - The firm",
        "title" => "The firm"
    ]); 

    function pad($number){
        return $number < 10 ? "0$number" : $number;
    }
?>

<?php $this->start("styles") ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css" integrity="sha512-Woz+DqWYJ51bpVk5Fv0yES/edIMXjj3Ynda+KWTIkGoynAMHrqTcDUQltbipuiaD5ymEo9520lyoVOo9jCQOCA==" crossorigin="anonymous" />
    <style type="text/css">
        .gallery-banner{
            height:250px; background-image:url(/gallery/w1200/01.jpg);
            background-size:cover;
        }
    </style>
<?php $this->stop() ?>    

<?php $this->start("banner") ?>
    <div class="gallery-banner"></div>
<?php $this->stop() ?>

<div class="gallery">
    <?php for($i=1; $i<=10; $i++){ ?>
        <div class="gallery-image">
            <a href="/gallery/w1200/<?= pad($i) ?>.jpg" target="_blank" data-lightbox="gallery">
                <img src="/gallery/thumbnails/<?= pad($i) ?>.jpg" width="250" />
            </a>
        </div>
    <?php } ?>
</div>

<?php
    $this->js()
        ->add("lightbox2", "https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js");
?>