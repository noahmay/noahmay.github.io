<?php theme_include('header'); ?>

		<section class="content-wrapp collection">
         <div class="grid">

				<div class="grid-item card">
               <div class="image-wrapper">
                  <img src="<?php echo theme_url('/img/Logo-L.png'); ?>" alt="">
                  <div class="image-cut"></div>
               </div>
               <div class="card-content">
                  <h2>BeSeen</h2>
                  <p>BeSeen was a Junior Achivment Web Design Agency. The company had great sucess both monetary and in the JA comeptions during JA year 2015/2016.  </p>
                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect">Read more</button>
               </div>
            </div>


            <div class="grid-item card">
               <div class="image-wrapper">
                  <img src="<?php echo theme_url('/img/consultive-g-1.png'); ?>" alt="">
                  <div class="image-cut"></div>
               </div>
               <div class="card-content">
                  <h2>Consultive</h2>
                  <p>Consultive desired a facelift of thier website, this is the result.</p>
                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect">Read more</button>
               </div>
            </div>

            <div class="grid-item card">
               <div class="image-wrapper">
                  <img src="<?php echo theme_url('/img/shot-mini-20160607-7789-6bf2kb.jpeg'); ?>" alt="">
                  <div class="image-cut"></div>
               </div>
               <div class="card-content">
                  <h2>SGF</h2>
                  <p>Sweden's pig business nedded an easy registration form for thier annual exhibition. The form automaicaly automatically sends invoices</p>
                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect">Read more</button>
               </div>
            </div>

            <div class="grid-item card">
               <div class="image-wrapper">
                  <img src="<?php echo theme_url('/img/biltraktor-g-1.png'); ?>" alt="">
                  <div class="image-cut"></div>
               </div>
               <div class="card-content">
                  <h2>Bil &amp; Traktorservice</h2>
                  <p>Bil &amp; Traktorservice is an reseller of John Deere agricultural machinery. An app was created to display thier store locations togheter with opening times and contact information. </p>
                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect">Read more</button>
               </div>
            </div>

            <div class="grid-item card">
               <div class="image-wrapper">
                  <img src="<?php echo theme_url('/img/dcb7d2121f5b31ef0a3ae8b4031f2e2e.jpg'); ?>" alt="">
                  <div class="image-cut"></div>
               </div>
               <div class="card-content">
                  <h2>Är Det Öppet?</h2>
                  <p>ÄrDetÖppet was a Junior Achivment project and is no longer operated. The website contained opening times for over 27 000 stores across Sweden.</p>
                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect">Read more</button>
               </div>
            </div>

		       <?php echo page_content(); ?>
         </div>
		</section>

      <script>

      $(window).load(function() {
         $('.grid').masonry({
           // options
           itemSelector: '.grid-item',
           columnWidth: 310,
           gutter: 10
         });
      });


      /*$('.grid').masonry({
        // options
        columnWidth: '.grid-sizer',
        itemSelector: '.grid-item',
        percentPosition: true
     });*/
      </script>

<?php theme_include('footer'); ?>
