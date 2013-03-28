<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>List / Grid view</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta http-equiv="imagetoolbar" content="no" />


<!-- CSS -->
<link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>

<!-- Core styles-->
<link rel="stylesheet" href="../foundation/stylesheets/foundation.css">

<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">

<!-- Custom styles and overrides -->
<link rel="stylesheet" href="../foundation/stylesheets/app.css">


<link href="css/core.css" rel="stylesheet" type="text/css" />
</head>
<body>


<div id="row">

	
	<div id="top-bar">
		<a href="#" id="list">List view</a>
		<a href="#" id="grid">Grid view</a>
	</div>
	
	<div id="products">
	
		<?php for($i = 1; $i <= 4; $i++) { ?>
	
			<div class="product">
			

					
					<div class="image">
						<img src="/images/0<?php echo $i; ?>.jpg" 
							alt="Image <?php echo $i; ?>"
							width="160" height="160" border="0" />
					</div>
					
					<div class="description">
					
						<h1><a href="#">Article title</a></h1>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin pellentesque, est ut venenatis aliquam, lorem quam porttitor ligula, eget ultrices velit dui sed quam. Praesent vehicula placerat lectus. Nulla pede. Quisque a nulla quis massa pulvinar sagittis. Pellentesque neque massa, mattis vulputate, pellentesque nec, vehicula volutpat, purus. Proin pretium dui et nulla cursus eleifend. Aenean aliquam urna eget urna. Vestibulum euismod elit. Donec eget augue sit amet neque elementum pretium. Proin posuere lacus id lacus. Duis vel justo suscipit neque ornare iaculis.</p>
	
					
					</div>
				
				</div>
			
			</div>
		
		<?php } ?>
	
	</div>

</div>




<!-- Included JS Files (Compressed) -->
<script src="../foundation/javascripts/jquery.js"></script>
<script src="../foundation/javascripts/foundation.min.js"></script>
  
<!-- Initialize JS Plugins -->
<script src="../foundation/javascripts/app.js"></script>


<script src="../foundation/fittext/jquery.fittext.js"></script>
<script>
  jQuery(".responsive-heading").fitText();
</script>

<script src="../embedly/jquery.embedly.min.js"></script>

  <script type="text/javascript">
      $('document').ready(function(){
        $('div.video').embedly({
		  format: 'json',
//		  autoplay: 'true',
//		  words: '40',	
          wmode: 'transparent',
		  nostyle: 'true',
          method: 'after',
          key:':c02aeab18cc34e93b9da735253417fdf'
        });
      });
    </script>


<script>
  $(document).ready(function() {
    $("#buttonForModal").click(function() {
		$('#result').load('<txp:site_url />add');
    });
  });

</script>


<script type="text/javascript">
  $(document).ready(function() {
    $("#buttonForModal").click(function() {
      $("#myModal").reveal();
    });
  });
</script>

<script src="js/cookie.js" type="text/javascript"></script>
<script src="js/core.js" type="text/javascript"></script>
</body>
</html>


