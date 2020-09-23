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
		<h2>Members</h2>
		<h3>實驗室成員</h3>
		<br>
		<h4>Regardless of your background, as long as you have enthusiasm and willingness to learn</h4>
		<h4>Welcome to join us !</h4>
	</div>

	<!--Advisor-->
	<div class="container">
		<div class="row">
			<div class="text-center col-sm-4">
				<p><img class="img-thumbnail" src="img/members/kwang.jpg"></p>
				<p>Pr. Kuochen Wang</p>
				<p>王國禎 教授</p>
			</div>
			<div class="col-sm-8">
				<h3><b>指導教授 / Advisor</b></h3>
				<div style="text-indent: 1em;">
					<p>曾擔任 國立交通大學資訊工程學系 系主任</p>
					<p>曾擔任 教育部網通前瞻技術推動聯盟中心 主持人</p>
					<p>曾擔任 國立交通大學資訊科學與工程研究所及網路工程研究所 所長</p>
					<p>曾擔任 國立交通大學計算機與網路中心 代主任/副主任</p>
					<br>
				</div>
				<dl class="row">
					<dt class="col-sm-2">Site</dt>
					<dd class="col-sm-10">
						<a href="https://www.cs.nctu.edu.tw/cswebsite/members/detail/kwang" target="_blank">CS@NCTU</a>
					</dd>
					<dt class="col-sm-2">Office</dt>
					<dd class="col-sm-10">工程三館 332A</dd>
					<dt class="col-sm-2">Phone</dt>
					<dd class="col-sm-10">03-5712121 # 31363</dd>
					<dt class="col-sm-2">Mail</dt>
					<dd class="col-sm-10">
						<a href="mailto:kwang@cs.nctu.edu.tw">kwang@cs.nctu.edu.tw</a>
					</dd>
				</dl>
			</div>
		</div>
	</div>
	<!--Members-->
	<div class="container">
		<h3 class="text-center" style="padding: 5px;"><b>學生 / Students</b></h3>
		<ul class="nav nav-tabs">
		  	<li class="active dropdown">
		  		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Current Members 目前成員
		  		<span class="caret"></span></a>
		  		<ul class="dropdown-menu">
			      	<li class="active"><a data-toggle="tab" href="#108th">碩二 108 th</a></li>
			      	<li><a data-toggle="tab" href="#109th">碩一 109 th</a></li>
			    </ul>
			</li>
		  	<li class="dropdown">
			    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Graduated 已畢業
			    <span class="caret"></span></a>
			    <ul class="dropdown-menu">
					<li><a data-toggle="tab" href="#107th">107 th</a></li>
					<li><a data-toggle="tab" href="#106th">106 th</a></li>
			      	<li><a data-toggle="tab" href="#105th">105 th</a></li>
			      	<li><a data-toggle="tab" href="#104th">104 th</a></li>
			      	<li><a data-toggle="tab" href="#103th">103 th</a></li>
			      	<li><a data-toggle="tab" href="#previous">Previous</a></li> 
			    </ul>
			</li>
		  	<li><a data-toggle="tab" href="#phd">Phds 博士班</a></li>
		  	<li><a data-toggle="tab" href="#in_service">In Service 專班</a></li>
		</ul>
		<div class="tab-content">
			<?php
				$n_ths=array("109th","108th","107th","106th","105th","104th","103th","in_service","phd");
				foreach ($n_ths as $n_th)
				{
					if ($n_th == "109th" || $n_th == "108th")
						echo '<div id="'.$n_th.'" class="tab-pane fade in active">';
					else
						echo '<div id="'.$n_th.'" class="tab-pane fade">';
					echo '<br>';
					$url='src/members/'.$n_th.'.json';
					$data=file_get_contents($url);
					$members_list=json_decode($data,true);
					foreach ($members_list as $members)
					{
						if ($members['n_th'] !== "")	//not in_service
						{
							echo '<div class="alert alert-info">';
							echo '<strong>第 '.$members['n_th']." 學年度入學</strong>";
							echo '</div>';
						}
						else
						{
							echo '<div class="alert alert-info">';
							echo '<strong>已畢業</strong>';
							echo '</div>';
						}
						foreach ($members['members'] as $key=> $member)
						{
							echo '<div class="container-fluid" style="padding: 10px 0px;">';
							echo '<div class="row">';
							echo '<div class="text-center col-sm-3">';
							if ($member['avatar'] == '')
							{
								echo '<img src="img/members/default.jpg" class="img-thumbnail" style="height:250px">';
							}
							else
							{
								echo '<img src="'.$member['avatar'].'" class="img-thumbnail" style="height:250px">';
							}
							echo '</div>';	//end of col-sm-4
							echo '<div class="col-sm-9">';
							echo '<h3><strong>'.$member['name'].'</strong></h3>';
							echo '<h4><strong>'.$member['name_en'].'</strong></h4>';
							echo '<p><span class="glyphicon glyphicon-envelope"></span> Mail: ';
							echo '<a href="mailto:'.$member['mail'].'">'.$member['mail'].'</a></p>';
							echo '<p>'.$member['intro'].'</p>';
							echo '</div>';	//end of col-sm-8
							echo '</div>';	//end of row
							echo '</div>';	//end of container-fluid
						}
					}
					echo '</div>';	//end of each tab id
				}

				//For alumni.json
				echo '<div id="previous" class="tab-pane fade"><br>';
				$url='src/members/alumni.json';
				$data=file_get_contents($url);
				$members_list=json_decode($data,true);
				foreach ($members_list as $members)
				{
					echo '<ul class="list-group">';
					echo '<li class="list-group-item">';
					echo '<h4 class="list-group-item-heading">';
					echo '<strong>第 '.$members['n_th']." 學年度入學</strong>";
					echo '</h4>';
					echo '<p class="list-group-item-text">';
					foreach ($members['members'] as $key=> $member)
					{
						echo $member.'　';
					}
					echo '</p>';	//end of list-item-text
					echo '</li>';	//end of list-item
					echo '</ul>';	//end of list-group
				}
				echo '</div>';	//end of alumni tab
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



