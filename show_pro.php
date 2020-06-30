<?php include_once("functions.php");?>
<!DOCTYPE HTML>
<html>
<head>
<title>Makemy Love</title>
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
        <li class="current-page">Your Profile</li>
     </ul>
   </div>
<div class="vishal">
  Welcome : <?php echo $_POST["name"]; ?><br>
Your email address is : <?php echo $_POST["email"] ; ?><br>
your gender : <?php echo $_POST["gender"];?><br>
your Mobile : <?php echo $_POST["mobile"];?><br>
<label><h3><br>Payment Option </h3></label>
           


  
                 <form action="http://localhost/online-matrimonial-project-in-php-master/TxnTest.php">
			  <div class="form-actions">
			    <input type="submit" id="edit-submit" name="op" value="Payment Now" class="btn_1 submit">
			  </div> 
	  
	    </form>
</div>	  
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>


<?php include_once("footer.php");?>






















































