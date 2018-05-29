<!DOCTYPE html>
<html>
<head>
<title>SMA Prestasi Yogyakarta</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />

<link type="text/css" href="css/facybox/facybox.css" rel="stylesheet" />
<link type="text/css" href="css/facybox/jquery.fancybox-1.3.4.css" rel="stylesheet" media="screen" />

<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	
<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="js/custom.js"></script>
<script type="text/javascript" language="javascript" src="js/addon.js"></script>
<script src="js/clock.js" type="text/javascript"></script>

<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/facybox.js"></script>

<script type="text/javascript" src="js/easySlider1.5.js"></script>

<script language="JavaScript">
var txt="Welcome to SMA Prestasi Yogyakarta";
var kecepatan=500;var segarkan=null;function bergerak() { document.title=txt;
txt=txt.substring(1,txt.length)+txt.charAt(0);
segarkan=setTimeout("bergerak()",kecepatan);}bergerak();
</script>

<script type="text/javascript">
	//facybox
	//facybox
jQuery(document).ready(function($) {
      $('a[rel*=facybox]').facybox({
        // noAutoload: true
      });
    });
	//end facy box
</script>


<script type="text/javascript">
	$(document).ready(function(){
 
    $("#to-top").hide();
 
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 200) {
                $('#to-top').fadeIn();
            } else {
                $('#to-top').fadeOut();
            }
        }); 
 
        $('#to-top a').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
 
});

	</script>

</head>
<body OnLoad="startclock()">
<div id="kotak">
	<div id="logo">
    <div class="jam"><span id="date"></span>,<span id="clock"></span></div>
       <div class="search">
       <!--  script untuk membuat form pencarian/search  -->
       
       
       </div>
    </div>
	<div id="header">
		<div id="menu">
			<?php include 'menu.php'; ?>
		</div>
  </div>
	<div id="headcont"></div>
	<div id="content">
		<div id="kiri">
	
			<div id="pages">
            	<div class="nv2"><div class="nv1"><div class="nv3">
       				<div class="nvhead">Awards</div>
      							</div></div>
                 	</div>
                    
                   <div id="isi">
			               <?php include "awards.php"; ?>
                  </div>
            </div>
		</div>
        
		<div id="tengah">
        		<div id="pages">
					<div id="navteng"></div>
               <!--  script untuk menampilkan konten web di tengah  -->

               <p>Isi Berita</p>

               
                         
          </div>
		</div>
		
		<div id="kanan">
			<div id="pages">
            	<div class="nv2"><div class="nv1"><div class="nv3">
       				<div class="nvhead">Kalender</div>
      							</div></div>
                 	</div>
                    
                <div id="isi">
                   <?php include "kalender.php"; ?>
                  </div>
            </div>
			
			<div id="pages">
            	<div class="nv2"><div class="nv1"><div class="nv3">
       				<div class="nvhead">Link</div>
      							</div></div>
                 	</div>
            
                  <div id="isi">
			               <?php include "link.php"; ?>

                  </div>
            </div>
		</div>
	</div>
	<div id="footcont"></div>
	<div id="batas"></div>
	<div id="footer">Copyright &copy; 2016 SMA PRESTASI Yogyakarta. All Right Reserved</div>
</div>

<!-- Klik Pindah keatas -->
	<p id="to-top">
		<a href="#top"><span></span></a> Klik <br />Pindah Ke Atas
	</p>

</body>
</html>
