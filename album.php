<!DOCTYPE html>
<html lang="en">
<head>
	<title>MBL Test</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!– Bootstrap –>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<style>
	/* Add a dark background color with a little bit see-through */
	.navbar {
    	margin-bottom: 0;
    	background-color: #2d2d30;
    	border: 0;
    	font-size: 14px !important;
    	opacity: 0.9;
	}
	/* Add a gray color to all navbar links */
	.navbar li a, .navbar .navbar-brand { 
    	color: #d5d5d5 !important;
	}
	/* On hover, the links will turn white */
	.navbar-nav li a:hover {
    	color: #fff !important;
	}
	/* Remove border color from the collapsible button */
	.navbar-default .navbar-toggle {
    	border-color: transparent;
	}

	/* Font and size*/
	body,input,button,select,textarea,h3{
     	font-family: "Helvetica Neue", Helvetica, Arial, "微軟正黑體", "微软雅黑", "メイリオ", "맑은 고딕", sans-serif;
     	font-size:145%;
	}
	h1,h2,h4,h5,h6{
     	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;  
	}
	/* Add a dark background color to the footer */
	footer {
	    background-color: #2d2d30;
	    color: #f5f5f5;
	    padding: 32px;
	}
	footer a {
	    color: #f5f5f5;
	}
	footer a:hover {
	    color: #777;
	    text-decoration: none;
	}
	
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
	    <div class="navbar-header">
	     	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span> 
	    	</button>
	    	<a class="navbar-brand" href="index.html">MBL</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	    	<ul class="nav navbar-nav navbar-right">
	      		<li><a href="members.php">
	      			<span class="glyphicon glyphicon-user"></span> Members
	      		</a></li>
	        	<li><a href="courses.html">
	        		<span class="glyphicon glyphicon-book"></span> Courses
	        	</a></li>
	        	<li><a href="research.html">
	        		<span class="glyphicon glyphicon-pencil"></span> Research
	        	</a></li>
	        	<li><a href="project.php">
	        		<span class="glyphicon glyphicon-asterisk"></span> Project
	        	</a></li>
	        	<li><a href="resourse.php">
	        		<span class="glyphicon glyphicon-inbox"></span> Resourse
	        		</a></li>
	        	<li><a href="album.php">
	        		<span class="glyphicon glyphicon-picture"></span> Album
	        	</a></li>
	    	</ul>
	    </div>
	 	</div>
	</nav>

	<div class="jumbotron text-center" style="margin-top:50px">
		<h2>Life Photos</h2>
		<h3>實驗室生活照</h3>
	</div>

	<div class="container">
		<div class="row">
		<?php
			$dir="img/lifephotos/";
			$n_ths=array("2018_106_107","2017_105_106");
			foreach($n_ths as $n_th)
			{
				if (is_dir($dir.$n_th)){
					if ($dh = opendir($dir.$n_th))
					{
						while (($file = readdir($dh)) !== false)
						{
							if ($file != "." && $file != "..")
							{
								//echo "filename:" . $file . "<br>";
								echo '<div class="col-sm-4">';
								echo '<div class="thumbnail">';
								echo '<a href="'.$dir.$n_th.'/'.$file.'">';
								echo '<img src="'.$dir.$n_th.'/'.$file.'" style="width:100%">';
								echo '</a>';
								echo '</div>';	//end of thumbnail
								echo '</div>';	//end of col-sm-4
							}
					    }
					    closedir($dh);
					}
				}
			}
		?>
		</div>
	</div>

	<footer class="text-center">
	 	<a class="up-arrow" href="#" data-toggle="tooltip" title="TO TOP">
	    	<span class="glyphicon glyphicon-chevron-up"></span>
		</a><br><br>
	 	<p>Copyright © 2018 MBL All Rights Reserved.</p>
	 	<p>國立交通大學 資訊工程系 行動計算與寬頻網路實驗室 工程三館612室</p>
	 	<p>電話: (03)5712121 分機: 54790 </p>
	</footer>

	<script>
	$(document).ready(function(){
	    // Initialize Tooltip
	    $('[data-toggle="tooltip"]').tooltip(); 
	})
	</script>

</body>
</html>



