<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./static/index.css">
<link rel="stylesheet" href="./static/jquery.fatNav.css">
<title>テンプレートページ</title>
</head>
<body>

  <header class="common">
  	<img src="./static/logo_white.png" height="58px" style="padding: 5px;cursor: pointer;" class="common_logo" onclick="location.href='./';">
	<div class="header_sub" align="center"><i class="fa fa-flask" aria-hidden="true"></i>テンプレートページ</div>
	<canvas class="canvas-basic cv-common"></canvas>
  </header>

 <?php require("./webapps/navigation.php"); ?>

  <main>

  	<section>

  		<h2><i class="fa fa-laptop" aria-hidden="true"></i>&nbsp;コンテンツ内容</h2>

  		<a name="yamanpo"></a>
  		<div class="wbox">
  			<img src="./static/marq/ml_0.png" style="height: 239px;"><br>
  			<div class="wboxT">
  				<h3 align="center">ABC</h3><hr><br>
				<h4 align="center">テストテストテストテスト</h4>
				<p>テストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテスト
				</p>
				<div align="center"><a href="http://www.example.com/" target="_blank" class="square_btn">詳しくはこちら&nbsp;<i class="fa fa-external-link" aria-hidden="true"></i></a></div>

			</div>
		</div>
		<div style="clear: both;visibility: hidden;">ダミー</div>
		<br>

		<a name="icreate"></a>
  		<div class="wbox">
  			<img src="./static/marq/ml_6.png" style="height: 239px;"><br>
  			<div class="wboxT">
  				<h3 align="center">テストテストテストテスト</h3><hr><br>
				<p>テストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテスト
				</p>
				<div align="center"><a href="http://www.example.com/" target="_blank" class="square_btn">詳しくはこちら&nbsp;<i class="fa fa-external-link" aria-hidden="true"></i></a></div>

			</div>
		</div>
		<div style="clear: both;visibility: hidden;">ダミー</div>

  	</section>



  </main>

  <footer>
  	<?php require("./webapps/footer.php"); ?>
  </footer>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="./static/granim.min.js"></script>
<script src="./static/jquery.shuffleLetters.js"></script>
<script src="./static/jquery.shuffleLetters.script.js"></script>
<script src="./static/jquery.fatNav.js"></script>
<script src="./static/index.js"></script>
</html>