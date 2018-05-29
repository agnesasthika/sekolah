<html>
<head>
<title>:: Control Panel Sekolah ::</title>
	<link href="../css/loginstyle.css" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../css/expose-form.css">
	<link rel="stylesheet" href="../css/queryLoader.css" type="text/css">
    <script type="text/javascript" src="../js/jquery.tools.min.js"></script>
	<script type="text/javascript" src="../js/queryLoader.js"></script>   

<script language="JavaScript">
var txt="Welcome to Administrasi SMA Prestasi Yogyakarta";
var kecepatan=500;var segarkan=null;function bergerak() { document.title=txt;
txt=txt.substring(1,txt.length)+txt.charAt(0);
segarkan=setTimeout("bergerak()",kecepatan);}bergerak();
</script>

    <script type="text/javascript"> 
      $(document).ready(function(){
      	// expose form ketika form di klik atau kursor mouse berada di salah satu komponen form
	      $("form.expose").bind("click keydown", function() {
          $(this).expose({

			     // setting mask/penutup untuk background dengan CSS
			     maskId: 'mask',

			     // ketika form ter-expose, ganti warna background form 
			     onLoad: function() {
				      this.getExposed().css({backgroundColor: '#fffkl'});
			     },

			     // ketika form tidak ter-expose, kembalikan warna background ke warna semula
			     onClose: function() {
				      this.getExposed().css({backgroundColor: null});
			     },
			     api: true

		      }).load();
	      });
	    });
	  </script>	
<script language="javascript">
	function validasi(form){
  if (form.TxtUser.value == ""){
    alert("Anda belum mengisikan User Admin");
    form.TxtUser.focus();
    return (false);
  }
     
  if (form.TxtPasswd.value == ""){
    alert("Anda belum mengisikan User Password");
    form.TxtPasswd.focus();
    return (false);
  }
  return (true);
}
</script>

</head>
<body OnLoad="document.login.username.focus();">
<div id="header">
  <div id="content">
		<h2>Login</h2>

		<form name="login" class="expose" method="POST" action="loginperiksa.php" target="_self" onSubmit="return validasi(this)">
        <img src="../images/login-welcome.gif" width="90" height="95" hspace="10" align="left" class="imgadmin">
<table>
<tr><td>Username</td><td> <input type="text" name="TxtUser" maxlength="25" /></td></tr>
<tr><td>Password</td><td> <input type="password" name="TxtPasswd" maxlength="25" /></td></tr>
<tr><td colspan=2><input type=submit name="Submit" value=Login></td></tr>
</table>
</form>
        
    <div align="center">
  	<p>
  	<font size="1" face="verdana" color="#0A71D0">
    	<?php
				echo date("d-m-Y");
				echo "<br>";
			?>
	</font>
  	</p>
	</div>
        
            
  </div>
	<div id="footer">
		Copyright &copy; 2016 by Admin SMA Prestasi Yogyakarta
	</div>
    <script>
		QueryLoader.selectorPreload = "body";
		QueryLoader.init();
	</script>
    
</div>
</body>
</html>
