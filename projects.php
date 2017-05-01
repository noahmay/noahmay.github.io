<?php require "parts/header.php" ?>

<section class="content-wrapp projects">
   <div class="grid">
      <div class="grid-item card">
         <div class="image-wrapper">
            <img src="<?php echo BASE_URL;?>/img/projects/beseen.jpg" alt="">
            <div class="image-cut"></div>
         </div>
         <div class="card-content">
            <h2>BeSeen</h2>
            <p>BeSeen var en webbyrå i form av ett UF-företag. Företaget hade stor succe, monetärt men även i de olika tävlingarna UF-tävlingarna håller för alla UF-företag.</p> <p>Företaget var aktivit under UF-året 2015/2016 </p>
            <!--<button class="mdl-button mdl-js-button mdl-js-ripple-effect">Läs mer</button>-->
         </div>
      </div>

      <div class="grid-item card">
         <div class="image-wrapper">
            <img src="<?php echo BASE_URL;?>/img/projects/consultive.jpg" alt="">
            <div class="image-cut"></div>
         </div>
         <div class="card-content">
            <h2>Consultive</h2>
            <p>Consultive önskade en modernisering av deras webbsida, det här är resultatet.</p>
            <!--<button class="mdl-button mdl-js-button mdl-js-ripple-effect">Läs mer</button>-->
         </div>
      </div>

      <div class="grid-item card">
         <div class="image-wrapper">
            <img src="<?php echo BASE_URL;?>/img/projects/SGF.jpg" alt="">
            <div class="image-cut"></div>
         </div>
         <div class="card-content">
            <h2>SGF</h2>
            <p>Svergies Grisföretagare behövde ett enekelt formulär för deras årliga stämma. Formuläret skickar automatiskt fakuturor, mail, och sparar information om de anmälda</p>
            <!--<button class="mdl-button mdl-js-button mdl-js-ripple-effect">Läs mer</button>-->
         </div>
      </div>

      <div class="grid-item card">
         <div class="image-wrapper">
            <img src="<?php echo BASE_URL;?>/img/projects/biltraktor.jpg" alt="">
            <div class="image-cut"></div>
         </div>
         <div class="card-content">
            <h2>Bil &amp; Traktorservice</h2>
            <p>Bil &amp; Traktorservice är mellansvergies största återförsäljare av John Deere jordbruksmaskiner. En app skapades för att visa deras butikers position samt annan information.</p>
            <!--<button class="mdl-button mdl-js-button mdl-js-ripple-effect">Läs mer</button>-->
         </div>
      </div>

      <div class="grid-item card">
         <div class="image-wrapper">
            <img src="<?php echo BASE_URL;?>/img/projects/ardetoppet.jpg" alt="">
            <div class="image-cut"></div>
         </div>
         <div class="card-content">
            <h2>Är Det Öppet?</h2>
            <p>ÄrDetÖppet var ett UF-företag vars äffärside var en webbsida som visade öppetider för över 27 000 företag i Sverige.</p>
            <!--<button class="mdl-button mdl-js-button mdl-js-ripple-effect">Läs mer</button>-->
         </div>
      </div>
   </div>
</section>

<script>

$(window).load(function() {
   $('.grid').masonry({
     // options
     itemSelector: '.grid-item',
     columnWidth: 310,
     gutter: 10,
     fitWidth: true
   });
});


/*$('.grid').masonry({
 // options
 columnWidth: '.grid-sizer',
 itemSelector: '.grid-item',
 percentPosition: true
});*/
</script>

<?php require "parts/footer.php" ?>
