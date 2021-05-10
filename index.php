<?php
define("ROOT" , $_SERVER['DOCUMENT_ROOT']);
define("SMALL_IMG" , ROOT . "/gallery_img/small/");
define("BIG_IMG" , ROOT . "/gallery_img/big/");

function get_gallery($path) {
	return array_splice(scandir($path), 2);
}
$images = get_gallery(BIG_IMG);



?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Моя галерея</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<script type="text/javascript" src="./scripts/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="./scripts/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="./scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="./scripts/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript">
	$(document).ready(function(){
		$("a.photo").fancybox({
			transitionIn: 'elastic',
			transitionOut: 'elastic',
			speedIn: 500,
			speedOut: 500,
			hideOnOverlayClick: false,
			titlePosition: 'over'
		});	}); </script>

</head>

<body>
<div id="main">
<div class="post_title"><h2>Моя галерея</h2></div>
	<div class="gallery">
	<?php foreach($images as $filename): ?>
<a rel="gallery" class="photo" href="gallery_img/big/<?= $filename ?>"><img src="gallery_img/small/<?= $filename ?>" width="150" height="100" /></a>
<?php endforeach;?>
</div>
<h3>Загрузить изображение:</h3>
<form method="post" enctype="multipart/form-data">
		<input type="file" name="image">
		<input type="submit" value="Загрузить" name="Load" >

</form>
</div>

</body>
</html>
