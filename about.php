<?php require "parts/header.php" ?>

<section class="content-wrapp about">
   <div class="container">
      <div class="row">
         <div class="card twelve columns" id="about-me-card">
            <img src="https://i.gyazo.com/63cef35d9a58dbcb2fca791933ec80f2.png" alt="">
            <div class="card-content">
               <h2 class="center">Noah Mayerhofer</h2>
                  <p class="">
                     Hej,<br><br>
                     Jag är <?php echo getAge('1997-11-15');?> år och söker till in till högskolan i höst.<!--studerar just nu till civilingenjör på Lunds Tekniska Högskola.-->
                     Jag är en självlärd webbutvecklare och webbdesigner från Västerås. Jag började
                     utveckla för ungefär <?php echo getAge('2011-05-01');?> år sedan och under åren har jag funnit en kärlek för
                     programmering och problemlösning. Under min gymnasietid var jag med och drev
                     två UF företag inom webbranchen. Jag har inriktat mig på back-end utveckling
                     men har även jobbat med bildredegering och design.
                  </p>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<section class="content-wrapp about">
   <div class="container">
      <div class="row">
         <div class="card twelve columns">
            <div class="card-content">
               <h2 id="skill-list-title">Färdigheter</h2>
               <div id="skill-list">

                  <div class="row">
                     <div class="four columns">
                        <i class="devicons about-icon" style="color:#E44D26;">&#xe636</i>
                        <h5>HTML 5</h5>
                     </div>
                     <div class="four columns">
                        <i class="devicons about-icon" style="color:#CF649A;">&#xe64b</i>
                        <h5>Sass</h5>
                     </div>
                     <div class="four columns">
                        <i class="devicons about-icon" style="color:#F8DC3D;">&#xe64e</i>
                        <h5>JavaScript</h5>
                     </div>
                  </div>

                  <div class="row">
                     <div class="four columns">
                        <i class="devicons about-icon" style="color:#0868AC;">&#xe650</i>
                        <h5>Jquery</h5>
                     </div>
                     <div class="four columns">
                        <i class="devicons about-icon" style="color:#617CBE;">&#xe63d</i>
                        <h5>PHP</h5>
                     </div>
                     <div class="four columns">
                        <i class="devicons about-icon" style="color:#00749a;">&#xe60b</i>
                        <h5>Wordpress</h5>
                     </div>

                  </div>

                  <div class="row">
                     <div class="four columns">
                        <i class="devicons about-icon" style="color:#5D87A1;">&#xe604</i>
                        <h5>MYSQL</h5>
                     </div>
                     <div class="four columns">
                        <i class="devicons about-icon" style="color:#df2f29;">&#xe67c</i>
                        <h5>Microsoft SQL</h5>
                     </div>
                     <div class="four columns">
                        <i class="devicons about-icon" style="color:#F05033;">&#xe602</i>
                        <h5>Git</h5>
                     </div>
                  </div>

                  <div class="row">
                     <div class="four columns">
                        <i class="devicons about-icon" style="color:#000;">&#xe630</i>
                        <h5>Phonegap</h5>
                     </div>
                     <div class="four columns">
                        <i class="devicons about-icon" style="color:#4d4d4;">&#xe621</i>
                        <h5>Unity</h5>
                     </div>
                     <div class="four columns">
                        <i class="devicons about-icon" style="color:#00a4e4;">&#xe6b8</i>
                        <h5>Photoshop</h5>
                     </div>

                  </div>
               </div>





               <!-- DRUPAL <i class="devicons about-icon">&#xe642</i>-->
               <!-- Microsoft Visual Studio <i class="devicons about-icon">&#xe60c</i> -->






               <!--<ul class="six columns">
                  <div><i class="devicons">&#xe63d</i>PHP</div>
               </ul>
               <ul class="six columns">
                  <div>Test</div>
               </ul>-->
            </div>
         </div>
      </div>
   </div>
</section>

<section class="content-wrapp about">
   <div class="container">
      <h2 class="center">Utmärkelser</h2>
      <div class="grid twelve columns">
         <div class="row">

            <div class="grid-item card four columns">
               <div class="image-wrapper">
                  <img src="<?php echo BASE_URL;?>/img/about/beseen.jpg" alt="">
                  <div class="image-cut"></div>
               </div>
               <div class="card-content">
                  <h2>Prestation<br>SM i Ungföretagsamhet</h2>
                  <p>BeSeen UF belv utsett till ett av de bästa <br>UF-företagen i Västmaland och tog sig därför vidare SM i Ungföretagsamhet 2016.</p>
                  <span class="date">Maj 2016</span>
               </div>
            </div>

            <div class="grid-item card four columns gold">
               <div class="image-wrapper">
                  <img src="<?php echo BASE_URL;?>/img/about/webbstjarnan_teknik.jpg" alt="">
                  <div class="image-cut"></div>
               </div>
               <div class="card-content">
                  <h2>1:a plats<br>Webbstjärnan, teknik</h2>
                  <p>År 2015 vann ärdetöppet.se webstjärnan i kategorin teknik</p>
                  <span class="issuer">Utfärdare: Webstjärnan</span><br>
                  <span class="date">Maj 2015</span>
               </div>
            </div>

            <div class="grid-item card four columns silver">
               <div class="image-wrapper">
                  <img src="<?php echo BASE_URL;?>/img/about/beseen_website.jpg" alt="">
                  <div class="image-cut"></div>
               </div>
               <div class="card-content">
                  <h2>2:a plats<br>Årets webbsida</h2>
                  <p>BeSeen.io belönades med andra pris i kategorin årets webbsida</p>
                  <span class="issuer">Utfärdare: Ung företagsamhet Västmaland</span><br>
                  <span class="date">Mars 2016</span>
               </div>
            </div>

         </div>
         <div class="row">

            <div class="grid-item card four columns silver">
               <div class="image-wrapper">
                  <img src="<?php echo BASE_URL;?>/img/about/uf_logo.jpg" alt="">
                  <div class="image-cut"></div>
               </div>
               <div class="card-content">
                  <h2>2:a plats<br>Årets tjänst</h2>
                  <p>År 2015 drevs webbsidan ÄrDetÖppet.se, tjänsten blev belönad med andra pris i katergorin årets tjänst.</p>
                  <span class="issuer">Utfärdare: Ung företagsamhet Västmaland</span><br>
                  <span class="date">Mars 2015</span>
               </div>
            </div>

            <div class="grid-item card four columns silver">
               <div class="image-wrapper">
                  <img src="<?php echo BASE_URL;?>/img/about/ardetoppet_website.jpg" alt="">
                  <div class="image-cut"></div>
               </div>
               <div class="card-content">
                  <h2>2:a plats<br>Årets webbsida</h2>
                  <p>ÄrDetÖppet.se belönades år 2015 med andra pris i kategorin årets webbsida. För webbsidans eleganta design</p>
                  <span class="issuer">Utfärdare: Ung företagsamhet Västmaland</span><br>
                  <span class="date">Mars 2015</span>
               </div>
            </div>

            <div class="grid-item card four columns bronze">
               <div class="image-wrapper">
                  <img src="<?php echo BASE_URL;?>/img/about/webbstjarnan_logo.jpg" alt="">
                  <div class="image-cut"></div>
               </div>
               <div class="card-content">
                  <h2>3:e plats<br>Entreprenörskap</h2>
                  <p>BeSeen UF var än av flera hundra tävlanden i Webstjärnan 2016 och lyckades skffa sig en tredje plats.</p>
                  <span class="issuer">Utfärdare: Webstjärnan</span><br>
                  <span class="date">Maj 2016</span>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="grid-item card four columns bronze">
               <div class="image-wrapper">
                  <img src="<?php echo BASE_URL;?>/img/about/uf_logo.jpg" alt="">
                  <div class="image-cut"></div>
               </div>
               <div class="card-content">
                  <h2>2:a plats<br>Årets företag</h2>
                  <p>2016 derevs webbyrån BeSeen UF med monetär succe, webbyrån blev även utsedd till det tredje bästa UF-företaget i Västmaland</p>
                  <span class="issuer">Utfärdare: Ung företagsamhet Västmaland</span><br>
                  <span class="date">Mars 2016</span>
               </div>
            </div>

      </div>
   </div>
</section>
