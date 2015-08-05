<html>
<head>
	<link rel="icon" href="img/logoheader.png">
	<link href="css.css" rel="stylesheet" type="text/css">
	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
	<script src="js.js"></script>
	<title>Gallery</title>
	<meta charset="UTF-8">
</head>
<body>
<div class="wrap">

<div class="nav-container">
	<nav class="nav-bar">
		<ul>
			<li style="width:250px;">
				<a href="index.html"><img src="logo.jpg"></img></a>
			</li>
		
			<li class="li-tab">
				<a href="index.html">Home</a>
			</li>

			<li class="li-tab">
				<a href="news.html">News</a>
			</li>
			
			<li class="li-tab">
				<a href="History.html">The Fair</a>
			</li>
			
			<li class="li-tab">
				<a href="aaa">Events <p> &#x25BC;</p></a>
					<ul class="li-child">
						<li><a href="b"><p>&#8227;</p>  Exhibition</a></li>
						<li><a href="c"><p>&#8227;</p>  Presentation</a></li>
					</ul>
			</li>
			
			<li class="li-tab">
				<a href="gallery.html">Gallery</a>
			</li>			
			
			<li class="li-search" style="width:20%">
				<div id="sb-search" class="sb-search">
					<form style="margin-top : 10px">
						<input class="sb-search-input" placeholder="Search..." type="search" value="" name="search" id="search">
						<input class="sb-search-submit" type="submit" value="">
						<span class="sb-icon-search"></span>
					</form>
				</div>
			</li>
			
		</ul>
	</nav>
</div>

<div class="template" style="margin-top : 100px;">
<div class="body">	
	<div class="col-middle" style="width : 100%; height : auto; padding-bottom : 100px">
	<h1> Gallery</h1>
	<hr width ="40%" align="left" style="background:#000000; border:0; height : 5px">
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
<div class="gal-content">
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
else{
    $page=1;
    $offset=0;      
}    
$max = $offset + $per_page;    
if($max>$total){
    $max = $total;
}
  
	show_pagination($page, $last_page);        
    for($i = $offset; $i< $max; $i++){
        $file = $files[$i];
        $path_parts = pathinfo($file);
        $filename = $path_parts['filename']; 
        echo '
                <a rel="group" href="'.$file.'"><img class="galleryPhoto" src="'.$file.'" alt="'.$filename.'"></a>    
        ';
    }        
    show_pagination($page, $last_page);
	
function show_pagination($current_page, $last_page){
    echo '<div align="center">';
    for($z = 1;$z <= $last_page;$z++){
        echo ' <a href="?page='.($z).'">'.$z.'</a> &nbsp&nbsp&nbsp&nbsp';
	}
    echo '</div>';
}
?>
</div>
</div>
</div>
<div class="footer">
	<div class="foot-temp">
	
	<div class="foot-tab">
		<a href="http://kanisius.edu/index.php/en/"><img src="./img/contact_cc.png"></img></a>
		<hr>	
		<p>&#9743;</p> (021) 31936464<br>
		<p>&#9993;</p> Email
	</div>
	
	<div class="foot-tab">
		Footer Section 2
		<hr>	
		Link 1<br>
		Link 2<br>
		Link 3<br>
		Link 4<br>
		Link 5<br>
	</div>
	
	<div class="foot-tab">
		Footer Section 3
		<hr>	
		Link 1<br>
		Link 2<br>
		Link 3<br>
		Link 4<br>
		Link 5<br>
	</div>
	
	<h2><img src="./img/logo_amdg.png" height="48px" width="48px"></img><br><br>
		&#169; Made by : Antonio Setya, Henry Kosim, Kevin Pratama</h2>
	</div>
</div>

<!--JAVASCRIPT-->
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
<script src="js/offset.js"></script>
<script>
	new UISearch( document.getElementById( 'sb-search' ) );
</script>
<script> /*Nav-Bar Zoom Scroll*/
    $(window).scroll(function() {
    $('.nav-bar').css('left', -$(this).scrollLeft() + "px");
    });
</script>
</body>
</html>
