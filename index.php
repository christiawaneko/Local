<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Localhost</title>
    <link rel="stylesheet" type="text/css" href="components/css/style.css">
    <!-- <link rel="stylesheet" type="text/css" href="components/css/reset.css"> -->
    <link rel="stylesheet" type="text/css" href="bower_components/Simple-Grid/simplegrid.css">
	<script src="bower_components/moment/moment.js"></script>
	<script src="bower_components/moment/locale/id.js"></script>
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/modernizr/modernizr.js"></script> 
	<script src="components/js/main.js"></script> 

</head>
<body>
	<main id="main">
		<div class="date" id="fade"  style="display:none;">
			<div class="waktu" id="time"></div>
			<div class="tanggal" id="date"></div>
			<div class="info" id="info"></div>
			<div class="prom" style="display:block;">
				<form method="get" action="http://www.google.com/search">
					<input type="text"  name="q" placeholder="what you find !" />
				</form>
			</div>
		</div>
	</main>

	<!-- ---------------------------------------------------------------------------------------- -->

	<a href="#cd-nav" class="cd-nav-trigger">Menu 
		<span class="cd-nav-icon"></span>

		<svg x="0px" y="0px" width="54px" height="54px" viewBox="0 0 54 54">
			<circle fill="transparent" stroke="#656e79" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
		</svg>
	</a>
	
	<div id="cd-nav" class="cd-nav">
		<div class="cd-navigation-wrapper">
				<h2 class="local">LocalHost</h2>

			    <div class="grid grid-pad">
			    	 <?php
						$list_ignore = array ('.','..','Backup','bower_components','components');
			            $handle=opendir(".");

			            while ($file = readdir($handle)) {
			            	if (is_dir($file) && !in_array($file,$list_ignore)) {   
			            	echo '<div class="col-1-3">
			           				<div class="content">'; 
			                	echo '<a href="'.$file.'" class="button button--wayra button--border-medium button--text-upper 
										button--size-s button--text-thick button--inverted">'.$file.'</a>';
							echo '</div>
			        				</div>';
			                }
			            }
			            closedir($handle);

			        ?>
			        
			    </div>


		</div> 
	</div> 

</body>
</html>