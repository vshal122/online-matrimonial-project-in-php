<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}
 ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Matrimony
 | Contact :: Matrimony
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Contact</li>
     </ul>
   </div>
   <div class="grid_5">
      <p><h4>!! नमस्कार दोस्तों !! <br><br>
  इस वेबसाइट की मदद  से  आप अपने लिए ,अपने बेटे ,भाई ,बहन  या किसी भी  आपके प्रिय  अविवाहित  व्यक्ति के लिए  रिश्ता  देख  सकते हो | 
  यह वेबसाइट पूरी तरफ सुरक्षित हैं | जो आपके  भविष्य  बेहतर  बनाएगा | <br>
 !!धन्यवाद् !!
 </h4></p>
      <address class="addr row">
        <dl class="grid_4">
            <dt>Address :</dt>
            <dd>
                Ward 18 Radhanagar 
                Sarangpur
            </dd>
        </dl>
        <dl class="grid_4">
            <dt>Telephones :</dt>
            <dd>
                8878158481<br>
                7987216944
            </dd>
        </dl>
        <dl class="grid_4">
            <dt>E-mail :</dt>
            <dd><a href="malito:vmalviya803@gmail.com">vmalviya803@gmail.com</a></dd>
        </dl>
      </address>
    </div>
   </div>
</div>
<div class="about_middle">
  <div class="container">
	 <h2>Contact Form</h2>
	  <form id="contact-form" class="contact-form">
        <fieldset>
          <input type="text" class="text" placeholder="" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
          <input type="text" class="text" placeholder="" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
          <input type="text" class="text" placeholder="" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
          <textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
          <input name="submit" type="submit" id="submit" value="Submit">
        </fieldset>
      </form>
  </div>
</div>


<?php include_once("footer.php");?>

