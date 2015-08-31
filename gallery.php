<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="img/logo.png">
	<link href="css.css" rel="stylesheet" type="text/css">
	<title>Gallery</title>
	<meta charset="UTF-8">
<style>
	h1 {
		font-family : Exo;
	}
	.body {
		width : 100%;
	}
	td, td a {
		text-align : center;
		font-family : Montserrat;
	}
	td {
		width : auto;
		color : black;
		font-weight : bold;
		border-radius : 5px;
		background : rgba(235,115,2,0.5);
	}
	td a, td a:link {
		display : inline-block;
		height : 100%;
		padding : 5 21 5 20;
		width :auto;
		line-height : 20px;
		border-radius : 5px;
		text-decoration : none;
	}
	td:hover {
		background : rgba(253,150,60,0.8);
	}
	td a:active {
		background : none;
	}
	.image {
		width : 300px;
		height : 200px;
		padding : 5px;
		border : solid 1px #fff;
		display : inline-block;
		margin : 25px;
		transition : all .15s ease;
	}
	.image:hover {
		box-shadow : 0px 0px 5px 5px orange;
		border : solid 1px #FEC497;	
	}
	.image img {
		margin : 0;
		height : 100%;
		width : 100%;
	}
</style>
</head>

<body>
<div id="sidebar-wrapper">
	<div id="sidebar-menu"><a id="menu-toggle" href="#">NAVIGATION <span id="sidebar-icon">&#9776;</span></a></div>
		
	<a href="index.html" id="sidebar-list">
		<div id="sidebar-arrow">&#10097;</div>
		<div id="sidebar-text"> Home</div>
		<span id="sidebar-icon"><img src="./img/icon_home.png" ></span>
	</a>
		
	<a href="aboutedu.html"><div id="sidebar-list">
		<div id="sidebar-arrow">&#10097; </div>
		<div id="sidebar-text">About Edufair</div>
		<span id="sidebar-icon"><img src="./img/icon_about.png"></span>
	</div></a>
		
	<a id="sidebar-list" href="History.html">
		<div id="sidebar-arrow">&#10097; </div>
		<div id="sidebar-text">History</div>
		<span id="sidebar-icon"><img src="./img/icon_history.png"></span>
	</a>
	
	<a id="sidebar-list" href="gallery.php">
		<div id="sidebar-arrow">&#10097; </div>
		<div id="sidebar-text">Gallery</div>
		<span id="sidebar-icon"><img src="./img/icon_gallery.png"></span>
	</a>

	<a id="sidebar-list" href="http://www.youtube.com">
		<div id="sidebar-arrow">&#10097; </div>
		<div id="sidebar-text">Trailer</div>
		<span id="sidebar-icon"><img src="./img/icon_trailer.png" style="height : 16px"></span>
	</a>

	<a id="sidebar-list" href="news.html">
		<div id="sidebar-arrow">&#10097; </div>
		<div id="sidebar-text">News</div>
		<span id="sidebar-icon"><img src="./img/icon_news.png"></span>
	</a>
		
	<div id="sidebar-list-cont">
	<div id="sidebar-list">
		<div id="sidebar-arrow">&#10097; </div>
		<div id="sidebar-text">Events</div>
		<span id="sidebar-icon"><img src="./img/icon_events.png"></span>
	</div>
		
		<a id="sidebar-child" href="exhibitions.html"> <!--Events' Childs-->
			<div id="sidebar-child-arrow">&#10097;  </div>
			<div style="display : inline-block; height : 30px; line-height : 20px">Exhibitions</div>
		</a>
			
		<a id="sidebar-child" href="presentation.html">
			<div id="sidebar-child-arrow">&#10097;  </div>
			<div style="display : inline-block; height : 30px; line-height : 20px">Presentations</div>
		</a>
			
		<a id="sidebar-child" href="lomba.html">
			<div id="sidebar-child-arrow">&#10097;  </div>
			<div style="display : inline-block; height : 30px; line-height : 20px">Competitions</div>
		</a>
	</div>
</div>
<div class="wrap">
<section class="fixed-bg parallax bg-1" style="padding : 0px 0px 250px 0px; margin : 80px 0px 0px 0px; height : auto; flex : 0 1 100%">
	<h1>Gallery</h1><br>
<div class="template">
<div class="body" style="width : auto; margin-right : 0px">
	<div class="col-middle" style="width : 100%; height : auto; padding-bottom : 100px">
	
		<ul class="gal-slides">
		
		    <input type="radio" name="radio-btn" id="img-1" checked />
			<li class="gal-cont">
				<div class="gal-slide">
					<img src="./img/logo_tw.png">
				</div>
			
				<div class="gal-nav">
					<label for="img-5" class="prev">&#x2039;</label>
					<label for="img-2" class="next">&#x203a;</label>
				</div>
			</li>
			
		    <input type="radio" name="radio-btn" id="img-2"/>
			<li class="gal-cont">
				<div class="gal-slide">
					<img src="./img/bg.jpg">
				</div>
			
				<div class="gal-nav">
					<label for="img-1" class="prev">&#x2039;</label>
					<label for="img-3" class="next">&#x203a;</label>
				</div>
			</li>
			
		    <input type="radio" name="radio-btn" id="img-3"/>
			<li class="gal-cont">
				<div class="gal-slide">
					<img src="./img/bg2.jpg">
				</div>
			
				<div class="gal-nav">
					<label for="img-2" class="prev">&#x2039;</label>
					<label for="img-4" class="next">&#x203a;</label>
				</div>
			</li>
			
			<input type="radio" name="radio-btn" id="img-4"/>
			<li class="gal-cont">
				<div class="gal-slide">
					<img src="./img/logo.png">
				</div>
			
				<div class="gal-nav">
					<label for="img-3" class="prev">&#x2039;</label>
					<label for="img-5" class="next">&#x203a;</label>
				</div>
			</li>
			
			<input type="radio" name="radio-btn" id="img-5"/>
			<li class="gal-cont">
				<div class="gal-slide">
					<img src="./img/logo_cc.png">
				</div>
			
				<div class="gal-nav">
					<label for="img-4" class="prev">&#x2039;</label>
					<label for="img-1" class="next">&#x203a;</label>
				</div>
			</li>
			
			<li class="gal-dots">
				<label for="img-1" class="gal-dot" id="img-dot-1"></label>
				<label for="img-2" class="gal-dot" id="img-dot-2"></label>
				<label for="img-3" class="gal-dot" id="img-dot-3"></label>
				<label for="img-4" class="gal-dot" id="img-dot-4"></label>
				<label for="img-5" class="gal-dot" id="img-dot-5"></label>
			</li>
		</ul>
</div>

<div class="gal-content" style="margin : auto">
<?php 
$folder = './img/';
$filetype = '*.*';    
$files = glob($folder.$filetype);    
$total = count($files);   
$per_page = 9;   
$line = 1;
$last_page = ceil($total / $per_page);  
  
if(isset($_GET["page"])  && ($_GET["page"] <=$last_page) && ($_GET["page"] > 0) ){
    $page = $_GET["page"];
    $offset = ($per_page + 1)*($page - 1);      
}
else {
    $page=1;
    $offset=0;      
}    
$max = $offset + $per_page;    
if($max>$total) {
    $max = $total;
}
	show_pagination($page, $last_page);        
    for($i = $offset; $i< $max; $i++){
        $file = $files[$i];
        $path_parts = pathinfo($file);
        $filename = $path_parts['filename']; 
        echo '
                <div class="image"><a rel="group" href="'.$file.'"><img src="'.$file.'" alt="'.$filename.'"></a></div>  
        ';
    }        
    show_pagination($page, $last_page);
	
function show_pagination($current_page, $last_page){
    echo '<div align="center">
	<table>
	<tr>';
	if($current_page != 1) {
		echo '<td><a href="?page='.($current_page-1).'" style="padding : 5px 21px 5px 20px; line-height : 25px;">&#x2190; Prev</td></a>';
	}
    for($z = 1;$z <= $last_page;$z++){
		if ($current_page != $z) {
        echo '<td><a href="?page='.($z).'" style="padding : 5px 21px 5px 20px; line-height : 25px;">'.$z.'</a></td>';
		}
		else {
			echo '<td style="padding : 5px 21px 5px 20px; line-height : 25px;">'.$z.'</td>';
		}
	}
	if($current_page != $last_page){
		echo '<td><a href="?page='.($current_page+1).'" style="padding : 5px 21px 5px 20px; line-height : 25px;">Next &#x2192;</td></a>';
	}
    echo '</tr>
	</table>
	</div>';
}
?>
</div>
</div>
</div>
</div>
</section>
</div>
<div class="footer" style="margin-top : -8px; opacity : 1">
	<div class="foot-temp" style="padding-top : 20px;">
		<img src="./img/logo_amdg.png" height="64px" width="64px" style="position : absolute; margin-left : 47.8%"/>
		<div class="foot-tab" style="order: 1; flex: 0 1 200px; padding-left : 50px">
			<a href="http://kanisius.edu/index.php/en/"><img src="./img/contact_cc.png"></img></a>
		</div>
		
		<div class="foot-tab" style="order: 3; width : 220px; position : absolute; right : 0; flex: 0 1 200px; margin-right : 30px">
			<h3>&#169; Made by : Antonio Setya, Henry Kosim, Kevin Pratama</h3>
		</div>
	</div>
</div>
</div>
<!--JAVASCRIPT-->
<script src="js/classie.js"></script>
<script src="js/offset.js"></script>
<script src="js/jquery-1-7.js"></script>
<script src="./js/sidebar.js"></script>
<script> /*Nav-Bar Zoom Scroll*/
    $(window).scroll(function() {
    $('.nav-bar').css('left', -$(this).scrollLeft() + "px");
    });
</script>
</body>
</html>
