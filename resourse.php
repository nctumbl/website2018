<!DOCTYPE html>
<html lang="en">
<head>
	<title>MBL@NCTU</title>
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
	/*Add gray color to all list item when hover*/
	.list-group-item:hover{
		 background-color:#f1f1f1;
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
		<h2>Resources</h2>
		<h3>研究資源 / 相關文件</h3>
	</div>

	<!--Resource-->
	<div class="container" style="padding: 20px 0px;">
		<?php
			$url="src/json/document_list.json";
			$data=file_get_contents($url);
			$doc_list=json_decode($data,true);
			foreach ($doc_list as $documents)
			{
				echo '<div class="panel panel-info">';
				echo '<div class="panel-heading">';
				echo $documents['category'];
				echo '</div>';	//end of panel-heading
				echo '<ul class="list-group">';
				foreach ($documents['content'] as $key=> $document)
				{
					echo '<li class="list-group-item">';
					echo '<div class="row">';
					echo '<div class="col-sm-11">'.($key+1).". ".$document['file_name'].'</div>';
					echo '<div class="col-sm-1"><a href="'.$document['file_path'].'"><span class="glyphicon glyphicon-download-alt"></span></a></div>';
					echo '</div>';
					echo '</li>';
				}
				echo '</ul>';	//end of list-group
				echo '</div>';	//end of panel-info
			}
		?>
	</div>
	<footer class="text-center">
	 	<a class="up-arrow" href="" data-toggle="tooltip" title="TO TOP">
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



