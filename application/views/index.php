<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>LPA | Little Prince Azkaa</title>   

<meta name="description" content="Insert Your Site Description" /> 

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
<link href="<?php echo base_url(); ?>assets/_include/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="<?php echo base_url(); ?>assets/_include/css/main.css" rel="stylesheet">
<!--<link href="_include/css/modal.css" rel="stylesheet">-->

<!-- Supersized -->
<link href="<?php echo base_url(); ?>assets/_include/css/supersized.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/_include/css/supersized.shutter.css" rel="stylesheet">

<!-- FancyBox -->
<link href="<?php echo base_url(); ?>assets/_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="<?php echo base_url(); ?>assets/_include/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="<?php echo base_url(); ?>assets/_include/css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href="<?php echo base_url(); ?>assets/_include/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/_include/css/responsive.css" rel="stylesheet">

<!-- Supersized -->
<link href="<?php echo base_url(); ?>assets/_include/css/supersized.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/_include/css/supersized.shutter.css" rel="stylesheet">

<!-- Jasny.bootstrap -->
<link href="<?php echo base_url(); ?>assets/_include/css/jasny-bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/_include/css/jasny-bootstrap.min.css" rel="stylesheet">

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
<script type="text/javascript" src="https://gc.kis.scr.kaspersky-labs.com/1B74BD89-2A22-4B93-B451-1C9E1052A0EC/main.js" charset="UTF-8"></script><script src="<?php echo base_url(); ?>assets/_include/js/modernizr.js"></script>
<!--<script src="_include/js/modal.js"></script>-->

<!-- Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'Insert Your Code']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- End Analytics -->

</head>

<?php
if(validation_errors()!=NULL){
    echo'
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>';
            echo validation_errors();
    echo '
    </div>';
}
?>

<body>

<!-- This section is for Splash Screen -->
<!-- <div class="ole">
<section id="jSplash">
	<div id="circle"></div>
</section>
</div> -->
<!-- End of Splash Screen -->

<!-- Homepage Slider -->
<div id="home-slider">	
    <div class="overlay"></div>

    <div class="slider-text">
    	<div id="slidecaption"></div>
    </div>   
	
	<div class="control-nav">
        <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
        <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
        <ul id="slide-list"></ul>
        
        <a id="nextsection" href="#work"><i class="font-icon-arrow-simple-down"></i></a>
    </div>
</div>
<!-- End Homepage Slider -->  
    
<!-- Header -->
<header>
    <div class="sticky-nav">
    	<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        
        <div id="logo">
        	<a id="goUp" href="#home-slider" title="Brushed | Responsive One Page Template">Brushed Template</a>
        </div>
        
        <nav id="menu">
        	<ul id="menu-nav">
            	<li class="current"><a href="#home-slider">Home</a></li>
                <li><a href="#work">LPA</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#filter" data-toggle="modal" data-target="#login">Masuk</a></li>
				<li><a href="#filter" data-toggle="modal" data-target="#register">Daftar</a></li>
            </ul>
        </nav>
        
    </div>
</header>
<!-- End Header -->

<!-- Our Work Section -->
<div id="work" class="page">
	<div class="container">
    	<!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Little Prince Azkaa</h2>
                </div>
            </div>
        </div>
        <!-- End Title Page -->
        
        <!-- Portfolio Projects -->
        <div class="row">
        	<div class="span3">
            	<!-- Filter -->
                <nav id="options" class="work-nav">
                    <ul id="filters" class="option-set" data-option-key="filter">
                    	<li class="type-work">Review Game</li>
                        <li><a href="#filter" data-option-value="*" class="selected">Semua</a></li>
                        <li><a href="#filter" data-option-value=".screenshot">Arena Permainan</a></li>
                        <li><a href="#filter" data-option-value=".video">Game Trailer</a></li>
                    </ul>
                </nav>
                <!-- End Filter -->
            </div>
            
            <div class="span9">
            	<div class="row">
                	<section id="projects">
                    	<ul id="thumbs">
                        
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 image-wrap screenshot">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Hutan" href="<?php echo base_url(); ?>assets/_include/img/work/full/image-01-full.jpg">
                                	<span class="overlay-img"></span>
                                    <!--<span class="overlay-img-thumb font-icon-plus"></span>-->
                                    <span class="overlay-text-thumb" style="width: 80%; padding-left: 10%; padding-right: 10%;">HUTAN</span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="<?php echo base_url(); ?>assets/_include/img/work/thumbs/image-01.jpg" alt="Hutan adalah tempat yang ditumbuhi semak belukar dan pohon-pohon yang tinggi menjulang. Pecahkan setiap teka-teki yang muncul dan kalahkah Monster Spike!">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 image-wrap screenshot">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Gua" href="<?php echo base_url(); ?>assets/_include/img/work/full/image-02-full.jpg">
                                	<span class="overlay-img"></span>
                                    <!--<span class="overlay-img-thumb font-icon-plus"></span>-->
                                    <span class="overlay-text-thumb" style="width: 80%; padding-left: 10%; padding-right: 10%;">GUA</span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="<?php echo base_url(); ?>assets/_include/img/work/thumbs/image-02.jpg" alt="Gua adalah tempat yang sangat rapuh dan tempat hantu-hantu bersemayam. Pacahkan misteri dan kalahkan Ghost yang muncul!">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 image-wrap screenshot">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Kastil" href="<?php echo base_url(); ?>assets/_include/img/work/full/image-03-full.jpg">
                                	<span class="overlay-img"></span>
                                    <!--<span class="overlay-img-thumb font-icon-plus"></span>-->
                                    <span class="overlay-text-thumb" style="width: 80%; padding-left: 10%; padding-right: 10%;">KASTIL</span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="<?php echo base_url(); ?>assets/_include/img/work/thumbs/image-03.jpg" alt="Kastil ini dihuni oleh seorang yang sangat jahat. Lord of Math harus dikalahkan untuk dapat menyelamatkan Putri. Kalahkan juga Monster Plus dan Minus yang menghalangi!">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 image-wrap screenshot">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Pantai" href="<?php echo base_url(); ?>assets/_include/img/work/full/image-04-full.jpg">
                                	<span class="overlay-img"></span>
                                    <!--<span class="overlay-img-thumb font-icon-plus"></span>-->
                                    <span class="overlay-text-thumb" style="width: 80%; padding-left: 10%; padding-right: 10%;">COMING SOON</span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="<?php echo base_url(); ?>assets/_include/img/work/thumbs/image-04.jpg" alt="Coming Soon!">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 image-wrap screenshot">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Gurun Pasir" href="<?php echo base_url(); ?>assets/_include/img/work/full/image-05-full.jpg">
                                	<span class="overlay-img"></span>
                                    <!--<span class="overlay-img-thumb font-icon-plus"></span>-->
                                    <span class="overlay-text-thumb" style="width: 80%; padding-left: 10%; padding-right: 10%;">COMING SOON</span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="<?php echo base_url(); ?>assets/_include/img/work/thumbs/image-05.jpg" alt="Coming Soon!">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 image-wrap screenshot">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Kota Metropolitan" href="<?php echo base_url(); ?>assets/_include/img/work/full/image-06-full.jpg">
                                	<span class="overlay-img"></span>
                                    <!--<span class="overlay-img-thumb font-icon-plus"></span>-->
                                    <span class="overlay-text-thumb" style="width: 80%; padding-left: 10%; padding-right: 10%;">COMING SOON</span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="<?php echo base_url(); ?>assets/_include/img/work/thumbs/image-06.jpg" alt="Coming Soon!">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 image-wrap screenshot">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Pegunungan Salju" href="<?php echo base_url(); ?>assets/_include/img/work/full/image-07-full.jpg">
                                	<span class="overlay-img"></span>
                                    <!--<span class="overlay-img-thumb font-icon-plus"></span>-->
                                    <span class="overlay-text-thumb" style="width: 80%; padding-left: 10%; padding-right: 10%;">COMING SOON</span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="<?php echo base_url(); ?>assets/_include/img/work/thumbs/image-07.jpg" alt="Coming Soon!">
                            </li>
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 video">
                            	<!-- Fancybox Media - Gallery Enabled - Title - Link to Video -->
                            	<a class="hover-wrap fancybox-media" data-fancybox-group="video" title="Video Content From Vimeo" href="http://vimeo.com/51460511">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="<?php echo base_url(); ?>assets/_include/img/work/thumbs/image-08.jpg" alt="Video">
                            </li>
                        	<li class="item-thumbs span3 video">
                            	<!-- Fancybox Media - Gallery Enabled - Title - Link to Video -->
                            	<a class="hover-wrap fancybox-media" data-fancybox-group="video" title="Video Content From Vimeo" href="http://vimeo.com/50834315">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="<?php echo base_url(); ?>assets/_include/img/work/thumbs/image-09.jpg" alt="Video">
                            </li>
                        	<!-- End Item Project -->
                        	<!-- End Item Project -->
                        </ul>
                    </section>
                    
            	</div>
            </div>
        </div>
        <!-- End Portfolio Projects -->
    </div>
</div>
<!-- End Our Work Section -->

<!-- About Section -->
<div id="about" class="page-alternate">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">Tentang Kami</h2>
                <h3 class="title-description">Developer Game Little Prince Azkaa</h3>
            </div>
        </div>
    </div>
    <!-- End Title Page -->
    
    <!-- People -->
    <div class="row">
    	<div class="span1 profile"></div>
        <!-- Start Profile -->
    	<div class="span2 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">System<br>Analyst</span>
                </div>
                <img src="<?php echo base_url(); ?>assets/_include/img/profile/profile-01.jpg" alt="Divi Jaya">
            </div>
            <h3 class="profile-name">Divi Jaya</h3>
           <!-- <p class="profile-description">Berpikirlah seakan-akan kelompok sebagai satu tubuh. Saling terikat dan tak dapat dipisahkan. Rencana tanpa persiapan sama dengan bunuh diri. Persiapan yang terlalu lama juga sia-sia. Anda harus berdiri di tengah-tengah agar membuat keduanya berjalan seimbang. Matangkan persiapan, Koordinasi, lalu Eksekusi.</p> -->
            <!--	
            <div class="social">
            	<ul class="social-icons">
                    <li><a href="#"><i class="font-icon-social-facebook"></i></a></li>
                    <li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                </ul>
            </div>
			-->
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span2 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Game<br>Programmer</span>
                </div>
                <img src="<?php echo base_url(); ?>assets/_include/img/profile/profile-02.jpg" alt="Fikri Aladuddin">
            </div>
            <h3 class="profile-name">Fikri Alauddin</h3>
          <!--  <p class="profile-description">Hiduplah seperti memainkan sebuah game. Saat Anda lemah, Anda harus berjuang untuk menjadi lebih kuat. Jika Anda tidak dapat menahan pedihnya perjuangan, jangan salahkan jika kelak Anda menanggung pedihnya kelemahan.</p> -->
            	
            <!--	
            <div class="social">
            	<ul class="social-icons">
                	<li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                    <li><a href="#"><i class="font-icon-social-facebook"></i></a></li>
                </ul>
            </div>
			-->
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span2 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Web<br>Designer</span>
                </div>
                <img src="<?php echo base_url(); ?>assets/_include/img/profile/profile-03.jpg" alt="Usaid SC">
            </div>
            <h3 class="profile-name">Usaid SC</h3>
           <!-- <p class="profile-description">“Aku ingin mencintaimu dengan sederhana… seperti kata yang tak sempat diucapkan kayu kepada api yang menjadikannya abu… Aku ingin mencintaimu dengan sederhana… seperti isyarat yang tak sempat dikirimkan awan kepada hujan yang menjadikannya tiada…” (Khalil Gibran)</p> -->
            	
            <!--	
            <div class="social">
            	<ul class="social-icons">
                	<li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                    <li><a href="#"><i class="font-icon-social-facebook"></i></a></li>
                </ul>
            </div>
			-->
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span2 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Web<br>Programmer</span>
                </div>
                <img src="<?php echo base_url(); ?>assets/_include/img/profile/profile-04.jpg" alt="Putro Satrio">
            </div>
            <h3 class="profile-name">Putro Satrio</h3>
          <!--  <p class="profile-description">Lampaui pencapaian yeng telah Anda peroleh. Berevolusi dan menjadi lebih baik. Kreativitas sering didapat dengan cara yang tidak lazim. Jika Anda ingin menjadi kreatif, maka bersiap-siaplah menjadi tidak lazim. Orang lain sering menyebutnya tidak lazim. Namun saya, lebih senang menyebutnya EKSENTRIK.</p> -->
            	
            <!--	
            <div class="social">
            	<ul class="social-icons">
                	<li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                    <li><a href="#"><i class="font-icon-social-facebook"></i></a></li>
                </ul>
            </div>
			-->
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span2 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Database<br>Administrator</span>
                </div>
                <img src="<?php echo base_url(); ?>assets/_include/img/profile/profile-05.jpg" alt="Azkaa (Udin)">
            </div>
            <h3 class="profile-name">Azkaa (Udin)</h3>
        <!--    <p class="profile-description">Jika Anda punya kendali atas data-data di dunia, Anda mungkin dapat memegang kendali masa depan. Hidup itu di masa lalu, masa kini dan masa depan bisa jadi hanyalah sebuah mimpi. Mimpi terbesarku adalah mengarungi ruang dan waktu. Karena sejatinya, Aku adalah Lelaki Pemimpi!</p> -->
            	
            <!--	
            <div class="social">
            	<ul class="social-icons">
                	<li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                    <li><a href="#"><i class="font-icon-social-facebook"></i></a></li>
                </ul>
            </div>
			-->
        </div>
        <!-- End Profile -->
        <div class="span1 profile"></div>
        
    </div>
    <!-- End People -->
</div>
</div>
<!-- End About Section -->

<!-- Footer -->
<footer>
<<<<<<< .mine
	<p class="credits">&copy;MPPL 2016. <span style="color: #DE5E60">Little Prince Azkaa Game</span> by <span style="color: #DE5E60">Little Prince Azkaa Team</span></p>
||||||| .r21
	<p class="credits">&copy;MPPL 2016. <a href="http://themes.alessioatzeni.com/html/brushed/" title="Brushed | Responsive One Page Template">Little Prince Azkaa Game</a> by <a href="#" title="Alessio Atzeni | Web Designer &amp; Front-end Developer">Little Prince Azkaa Team</a></p>
=======
	<p class="credits">&copy;MPPL 2016. <a href=# title="NO TITLE">Little Prince Azkaa Game</a> by <a href="#" title="GM Production">GM Production</a></p>
>>>>>>> .r24
</footer>
<!-- End Footer -->

<!-- Back To Top -->
<a id="back-to-top" href="#">
	<i class="font-icon-arrow-simple-up"></i>
</a>
<!-- End Back to Top -->

<!-- Modal -->
<div id="login" class="modal hide fade" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active" style="float: left; display: inline; text-align : center; width : 49%; margin-top: 22px;"><a id="togglemurid" href="#tab1" data-toggle="tab" >MASUK SEBAGAI MURID</a></li>
                    <li style="float: left; display: inline; text-align : center; width : 49%;"><a id="toggleguru" href="#tab2" data-toggle="tab" >MASUK SEBAGAI GURU</a></li>
                </ul>
            </div>
            <div class="modal-body">
                <div class="tab-content" style="background-color: white; padding-left: 5%; padding-right: 5%;">
                    <div class="tab-pane fade in active" id="tab1">
                        <form action="<?php echo base_url(); ?>dashboard/checkLoginStudents" name="loginmuridForm" id="loginmuridForm" method="POST" enctype="multipart/form-data">
                            <span style="font-size: 1.2em; float: left;">Username</span>
                                <input type="text" name="username_murid" placeholder="Username" style="float: right; width: 70%;"><br>
                            <span style="font-size: 1.2em; float: left; margin-top: 3%;">Password</span>
                                <input type="password" name="password_murid" placeholder="Password" style="float: right; width: 70%;">
                        </form>  
                    </div>
                    <div class="tab-pane fade in" id="tab2">
                        <form action="<?php echo base_url(); ?>dashboard/checkLoginTeacher" name="loginguruForm" id="loginguruForm" method="POST" enctype="multipart/form-data">
                            <span style="font-size: 1.2em; float: left;">Username</span>
                                <input type="text" name="username_guru" placeholder="Username" style="float: right; width: 70%;"><br>
                            <span style="font-size: 1.2em; float: left; margin-top: 3%;">Password</span>
                                <input type="password" name="password_guru" placeholder="Password" style="float: right; width: 70%;">
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="muridForm" type="submit" class="btn btn-default" form="loginmuridForm" value="submitForm">OK</button>
                <button id="guruForm" style="display: none" type="submit" class="btn btn-default" form="loginguruForm" value="submitForm">OK</button>
                <!--<button type="button" class="btn btn-default" data-dismiss="modal">OK</button>-->
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>

    </div>
</div>
<!-- Modal -->

<!-- Modal -->
<div id="register" class="modal hide fade" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active" style="text-align : center; width : 100%;"><a href="#tab1" data-toggle="tab" >FORM PENDAFTARAN</a></li>
                </ul>
            </div>
            <div class="modal-body">
                <div class="tab-content" style="background-color: white">
                    <div class="tab-pane fade in active" id="tab1">
                        <form action="<?php echo base_url(); ?>dashboard/account" method="POST" name="registerForm" id="registerForm" enctype="multipart/form-data">
                            <div style="float: left; width: 55%;">
                                Nama:<br>
                                    <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" value="<?php echo set_value('nama'); ?>" required>&nbsp;&nbsp;&nbsp;&nbsp;<span id="nama_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span><br>
                            </div>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput" style="float: right; width: 40%;">
                              <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 175px; height: 200px;"></div>
                              <div>
                                <span class="btn btn-default btn-file"><span class="fileinput-new">Select Profile Picture</span><span class="fileinput-exists">Change</span><input type="file" name="image"></span>
                                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                              </div>
                            </div>
                            <div style="float: left; width: 50%;">
                                NIP:<br>
                                    <input type="text" name="nip" placeholder="Nomor Induk Pegawai" required><br>
                            </div>
                                <!--Asal Kota:
                                    <input type="text" name="">-->
                            <div style="float: left; width: 50%;">
                                Tanggal Lahir:<br>
                                    <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" required><br>
                            </div>
                            <div style="float: left; width: 50%;">
                                Jenis Kelamin:<br>
                                    <select class="form-control" name="jenis_kelamin" required>
                                        <option value="">
                                            --
                                        </option>                                        
                                        <option value="L">
                                            Laki - laki
                                        </option>
                                        <option value="P">
                                            Perempuan
                                        </option>
                                    </select>
                            </div>
                            <div style="float: left; width: 100%;">
                                Email:<br>
                                    <input type="text" name="email" id="email" placeholder="Email" value="<?php echo set_value('email'); ?>" required>&nbsp;&nbsp;&nbsp;&nbsp;<span id="email_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span><br>
                            </div>                          
                            <div style="float: left; width: 100%;">
                                Username:<br>
                                    <input type="text" name="username" placeholder="Username" id="username" value="<?php echo set_value('username'); ?>" required>&nbsp;&nbsp;&nbsp;&nbsp;<span id="username_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span><br>
                            </div>
                            <div style="float: left; width: 100%;">
                                Password:<br>
                                    <input type="password" name="password" id="password" placeholder="Password" value="<?php echo set_value('password'); ?>" required>&nbsp;&nbsp;&nbsp;&nbsp;<span id="password_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span><br>
                            </div>
                            <div style="float: left; width: 100%;">
                                Konfirmasi Password:<br>
                                    <input type="password" name="confirm_password" placeholder="Konfirmasi Password" value="<?php echo set_value('confirm_password'); ?>" required><br>
                            </div>
                        </form>  
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default" form="registerForm" value="submitForm">OK</button>
                <!--<a type="button" class="btn btn-default">OK</a>-->
                <!--<button type="button" class="btn btn-default" data-dismiss="modal">OK</button>-->
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>

    </div>
</div>
<!-- Modal -->

<!-- Js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
<script src="<?php echo base_url(); ?>assets/_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="<?php echo base_url(); ?>assets/_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
<script src="<?php echo base_url(); ?>assets/_include/js/waypoints.js"></script> <!-- WayPoints -->
<script src="<?php echo base_url(); ?>assets/_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src="<?php echo base_url(); ?>assets/_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="<?php echo base_url(); ?>assets/_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="<?php echo base_url(); ?>assets/_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src="<?php echo base_url(); ?>assets/_include/js/jquery.tweet.js"></script> <!-- Tweet -->
<script src="<?php echo base_url(); ?>assets/_include/js/jasny-bootstrap.min.js"></script> <!-- photo -->
<script src="<?php echo base_url(); ?>assets/_include/js/jasny-bootstrap.js"></script> <!-- photo -->
<script src="<?php echo base_url(); ?>assets/_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="<?php echo base_url(); ?>assets/_include/js/main.js"></script> <!-- Default JS -->
<script src="<?php echo base_url(); ?>assets/_include/js/script.js"></script> <!-- Default JS -->
    
<script type="text/javascript">
$(document).ready(function(){
	$("#nama").blur(function(){
        var nama = $("#nama").val();
        
        if($("#nama").val().length >=5)
        {
         
            if(isValidFullname(nama))
            {
               $("#nama_verify").css({ "background-image": "url('<?php echo base_url();?>assets/_include/img/yes.png')" });
               email_con=true;
               //register_show();
            } else {
               
                $("#nama_verify").css({ "background-image": "url('<?php echo base_url();?>assets/_include/img/no.png')" });
            }
 
        }
        else {
            $("#nama_verify").css({ "background-image": "url('<?php echo base_url();?>assets/_include/img/no.png')" });
        }
    });

    $("#username").blur(function(){
        var username = $("#username").val();

        if(($("#username").val().length >=4) && ($("#username").val().length <=10))
        {

            if(isValidUsername(username))
            {
               $("#username_verify").css({ "background-image": "url('<?php echo base_url();?>assets/_include/img/yes.png')" });
               email_con=true;
               //register_show();
            } else {
                $("#username_verify").css({ "background-image": "url('<?php echo base_url();?>assets/_include/img/no.png')" });
            }

        }
        else {
            $("#username_verify").css({ "background-image": "url('<?php echo base_url();?>assets/_include/img/no.png')" });
        }

    });    
    
	$("#email").blur(function(){
        var email = $("#email").val();
        
        if(email != 0)
        {
         
            if(isValidEmailAddress(email))
            {
               $("#email_verify").css({ "background-image": "url('<?php echo base_url();?>assets/_include/img/yes.png')" });
               email_con=true;
               //register_show();
            } else {
               
                $("#email_verify").css({ "background-image": "url('<?php echo base_url();?>assets/_include/img/no.png')" });
            }
 
        }
        else {
            $("#email_verify").css({ "background-image": "url('<?php echo base_url();?>assets/_include/img/no.png')" });
        }

    });
	$("#password").blur(function(){
        var password = $("#password").val();
        
        if($("#password").val().length >=6)
        {
         
            if(isValidPassword(password))
            {
               $("#password_verify").css({ "background-image": "url('<?php echo base_url();?>assets/_include/img/yes.png')" });
               email_con=true;
               //register_show();
            } else {
               
                $("#password_verify").css({ "background-image": "url('<?php echo base_url();?>assets/_include/img/no.png')" });
            }
 
        }
        else {
            $("#password_verify").css({ "background-image": "url('<?php echo base_url();?>assets/_include/img/no.png')" });
        }

    });
});

function isValidFullname(nama) {
 		var pattern = new RegExp(/^[a-zA-Z _-]{7,50}$/i);
 		return pattern.test(nama);
	}
function isValidUsername(username) {
 		var pattern = new RegExp(/^[a-zA-Z0-9_-]{4,18}$/i);
 		return pattern.test(username);
	}
function isValidPassword(password) {
 		var pattern = new RegExp(/^[a-z0-9_-]{6,32}$/i);
 		return pattern.test(password);
	}
function isValidEmailAddress(emailAddress) {
 		var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
 		return pattern.test(emailAddress);
	}
</script>

<script>
$(document).ready(function(){
    $(".alert").addClass("in").fadeOut(25000);
});    
</script>
<!-- End Js -->

</body>
</html>