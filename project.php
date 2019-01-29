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

	/*Text style of project table*/
	.project-table-element {
		font-size: 16px !important;
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
		<h2>Projects</h2>
		<h3>研究計畫</h3>
	</div>

	<!--Project-->
	<div class="container text-center">
	
		<ul class="nav nav-tabs">
		  	<li class="active"><a data-toggle="tab" href="#project_current">目前研究</a></li>
		  	<li><a data-toggle="tab" href="#project_finished">已完成</a></li>
		  	<li><a data-toggle="tab" href="#paper">期刊論文</a></li>
		  	<li><a data-toggle="tab" href="#book">專書及專書論文</a></li>
		  	<li><a data-toggle="tab" href="#patent">專利</a></li>
		</ul>
		<div class="tab-content">
			<?php
				//For projects.json
				$url='src/json/projects.json';
				$data=file_get_contents($url);
				$projects_list=json_decode($data,true);
				foreach ($projects_list as $key=> $projects)
				{
					if ($key==0)	//current
						echo '<div id="project_current" class="tab-pane fade in active">';
					else // finished
						echo '<div id="project_finished" class="tab-pane fade">';
					echo '<h3>'.$projects['category']."</h3>";
					foreach ($projects['content'] as  $project)
					{
						echo '<div class="panel panel-default">';
						echo '<div class="panel-body">';
						echo '<div class="row project-table-element">';
						if ($project['name'] !== "")
						{
							echo '<div class="col-sm-2"><strong>名稱</strong></div>';
							echo '<div class="col-sm-10 text-left">'.$project['name'].'</div>';
						}
						if ($project['id'] !== "")
						{
							echo '<div class="col-sm-2"><strong>編號</strong></div>';
							echo '<div class="col-sm-10 text-left">'.$project['id'].'</div>';
						}
						echo '<div class="col-sm-2"><strong>執行期限</strong></div>';
						echo '<div class="col-sm-10 text-left">'.$project['duration'].'</div>';
						echo '<div class="col-sm-2"><strong>補助單位</strong></div>';
						echo '<div class="col-sm-10 text-left">'.$project['supporter'].'</div>';
						echo '</div>';	//end of row
						echo '</div>';	//end of panel-body
						echo '</div>';	//end of panel
					}
					echo '</div>';	//end of each tab
				}

				//For papers.json
				$url='src/json/papers.json';
				$data=file_get_contents($url);
				$papers_list=json_decode($data,true);
				foreach ($papers_list as $key=> $papers)
				{
					switch($key)
					{
						case 0:	//conference
							echo '<div id="paper" class="tab-pane fade">';
							break;
						case 1:	//book
							echo '<div id="book" class="tab-pane fade">';
							break;
						case 2:	//patent
							echo '<div id="patent" class="tab-pane fade">';
							break;
					}
					echo '<h3>'.$papers['category']."</h3><hr>";
					echo '<ul class="text-left project-table-element">';
					foreach ($papers['content'] as  $element=>$paper)
					{
						echo '<li>'.$paper.'</li>';
					}
					echo '<br>';
					echo '</ul>';
					echo '</div>';	//end of each tab
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



