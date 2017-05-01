<?php
    define('BASE_URL', '/noahmay');

    function getAge($then) {
        $then = date('Ymd', strtotime($then));
        $diff = date('Ymd') - $then;
        return substr($diff, 0, -4);
    }
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Noah Mayerhofer</title>

		<meta name="description" content="">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo BASE_URL;?>/css/skeleton.css">
		<link rel="stylesheet" href="<?php echo BASE_URL;?>/css/style.css">


		<link rel="alternate" type="application/rss+xml" title="RSS" href="">
      
      <link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASE_URL;?>/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL;?>/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL;?>/favicon-16x16.png">
      <link rel="manifest" href="<?php echo BASE_URL;?>/manifest.json">
      <link rel="mask-icon" href="<?php echo BASE_URL;?>/safari-pinned-tab.svg" color="#0097a7">
      <meta name="theme-color" content="#0097A7">
		<link rel="shortcut icon" href="<?php echo BASE_URL;?>/img/favicon.png">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script src="<?php echo BASE_URL;?>/js/jquery-2.2.4.min.js"></script>
		<script src="<?php echo BASE_URL;?>/js/background-blur.min.js"></script>
		<script src="<?php echo BASE_URL;?>/js/masonry.js"></script>
		<script src="<?php echo BASE_URL;?>/js/button.js"></script>
		<script src="<?php echo BASE_URL;?>/js/main.js"></script>

	   <meta name="viewport" content="width=device-width">
	   <!--<meta name="generator" content="">-->

		<meta property="og:title" content="">
		<meta property="og:type" content="website">
		<meta property="og:url" content="">
		<meta property="og:image" content="">
		<meta property="og:site_name" content="">
		<meta property="og:description" content="">

	</head>
	<body class="">
      <!--<div class="sidebar-hamburger sidebar-toggle">
         <i class="material-icons">menu</i>
      </div>-->

      <button class="sidebar-hamburger sidebar-toggle">
         <span></span>
      </button>

      <div class="sidebar_overlay sidebar-toggle"></div>
		<header>
			<div class="image-wrapper">
				<h2>Noah Mayerhofer</h2>
				<!--<img src="https://i.gyazo.com/63cef35d9a58dbcb2fca791933ec80f2.png" alt="">-->
			</div>
					<nav id="main" role="navigation">
						<a href="<?php echo BASE_URL;?>/" title=""><i class="material-icons">home</i>Hem</a>
                  <a href="<?php echo BASE_URL;?>/about" title=""><i class="material-icons">face</i>Om mig</a>
                  <a href="<?php echo BASE_URL;?>/projects" title=""><i class="material-icons">work</i>Projekt</a>
                  <!--<a href="<?php echo BASE_URL;?>/blog" title=""><i class="material-icons">chat</i>Blogg</a>-->
                  <!--<a href="<?php echo BASE_URL;?>/lab" title=""><i class="material-icons">code</i>Lab</a>-->
					</nav>

               <script>
               $("#main a").each(function( index ) {
                  if($(this).attr("href") == "<?php echo "$_SERVER[REQUEST_URI]" ?>"){
                     console.log(this);
                     $(this).addClass("active");
                  }
               });

               </script>

 		</header>

      <script>
         var siebar_resize_width = 300,
             mobile_size = 1493,
             menu_closed = true;

            if(window.innerWidth <= mobile_size)
            {
               set_mobile();

            }
            else
            {
               set_desktop();
            }


         function set_mobile()
         {
            //start page
         /*   $("#start-page-image div").css("left",0);
            $("#start-page-image div").css("min-width","100%");*/

            $("header").addClass("mobile");
            $(".sidebar-toggle").addClass("mobile");
            $("header").css("left",-siebar_resize_width)
            $(".content-wrapp").css("margin-left",0)
         }

         function set_desktop(){
            close_menu();
            //start page
            /*$("#start-page-image div").css("left","16%");
            $("#start-page-image div").css("min-width","85%");*/

            $("header").removeClass("mobile");
            $(".sidebar-toggle").removeClass("mobile");
            $(".content-wrapp").css("margin-left","17%");
            $("header").css("left", 0)
         }

         function open_menu(){
            $("header").css("left",0);
            $(".sidebar_overlay").css("opacity",0.75);
            $(".sidebar_overlay").css("z-index",101);
            $(".sidebar-hamburger").addClass("is-active");
            menu_closed = false;


         }

         function close_menu(){
            $("header").css("left",-siebar_resize_width);
            $(".sidebar_overlay").css("opacity",0);
            $(".sidebar_overlay").css("z-index",-1);
            $(".sidebar-hamburger").removeClass("is-active");
            menu_closed = true;
         }

            $(window).bind('resize', function()
            {

               if(typeof sizewait != 'undefined'){
                  clearTimeout(sizewait);
               }

               sizewait = setTimeout(function()
               {
               if(window.innerWidth <= mobile_size)
               {
                  set_mobile();

               }
               else
               {
                  set_desktop();
               }
               },200);
            });



         $( ".sidebar-toggle" ).click(function() {
            if(window.innerWidth <= mobile_size && menu_closed){
               open_menu();
            }

            else if(window.innerWidth <= mobile_size && !menu_closed)
            {
               close_menu();
            }
            $(".no-transition").removeClass("no-transition");
         });


      </script>
