<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./static/index.css">
<link rel="stylesheet" href="./static/jquery.fatNav.css">
<title>XYZ LABORATORY RECRUIT 2018</title>
</head>
<body>
<div class="header_load" align="center"><br><br>NOW LOADING<br><br><img src="./static/loading.gif" width="75px"></div>

  <header>
	<div class="header_top container"></div>
	<div class="header_year container2"></div>
	<div class="header_sub" align="center">CATCHCOPY TEXT</div>
	<div class="marq_parent" align="center">
		<img class="marq" src="./static/marq/ml_0.png" onclick="go('template.php');">
		<img class="marq" src="./static/marq/ml_0.png" onclick="go('template.php');">
		<img class="marq" src="./static/marq/ml_0.png" onclick="go('template.php');">
		<img class="marq" src="./static/marq/ml_0.png" onclick="go('template.php');">
		<img class="marq" src="./static/marq/ml_0.png" onclick="go('template.php');">
		<img class="marq" src="./static/marq/ml_0.png" onclick="go('template.php');">
		<img class="marq" src="./static/marq/ml_0.png" onclick="go('template.php');">
	</div>
	<canvas class="canvas-basic"></canvas>
  </header>

 <?php require("./webapps/navigation.php"); ?>

  <main>
  	<section>
  		<h2><i class="fa fa-info-circle" aria-hidden="true"></i> 最新情報</h2>
			<table class="company">
				<tbody>
					<tr>
						<th class="date">2018/5/24</th>
						<td>ホームページを公開しました</td>
					</tr>
					<tr>
						<th class="date">2018/5/25</th>
						<td>ホームページを更新しました</td>
					</tr>
					<tr>
						<th class="date">2018/5/26</th>
						<td>ホームページを訂正しました</td>
					</tr>
					<tr>
						<th class="date">2018/5/27</th>
						<td>ホームページを更新しました</td>
					</tr>
					<tr>
						<th class="date">2018/5/28</th>
						<td>ホームページを更新しました</td>
					</tr>
				</tbody>
			</table>
			<br><br>

			<div class="topNews">
				<div class="tNtwitter" align="center">
					<h3 align="center">XX研公式Twitter</h3>
					<a class="twitter-timeline" data-lang="ja" data-width="400" data-height="600" href="https://twitter.com/twitter?ref_src=twsrc%5Etfw">Tweets by twitter</a>
					<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
				</div>
				<div class="tNline">
					<h3 align="center">Line @</h3>
					<p>こちらのQRコードを読み取って「xyzLabRecruit2018」にご参加下さい。<br>説明会などの情報を発信していきます！<br><br>※こちらからは登録した人を特定することはできませんので、ご安心下さい。</p>
				</div>
			</div>
			<div style="clear: both;visibility: hidden;">ダミー</div>

  	</section>
    <section>
    	<h2><i class="fa fa-film" aria-hidden="true"></i> XYZ研究室紹介MOVIE</h2>
	  	<p align="center">制作：xxx</p><br>
	  	<div align="center" id="wrapper">
	  		<iframe id="content" src="https://www.youtube.com/embed/xxxxxxxxxx" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	  	</div>
    </section>


    <section>
		<p>WEB PRODUCTION<br>
		xxx大学 yyy学部 xyz研究室
		</p><br>

		<p>
		CONTACT<br>
		xxx大学 yyy学部 xyz abc<br>
		MAIL：xabc@yyy.xxx.ac.jp<br>
		</p>
    </section>
  </main>

  <footer>
  	<?php require("./webapps/footer.php"); ?>
  </footer>
  	  
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
	$(".canvas-basic").css("visibility","hidden");
	$(".header_sub").hide();
	$(".marq_parent").hide();
	$(".nav_logo").hide();
</script>
<script src="./static/granim.min.js"></script>
<script src="./static/jquery.shuffleLetters.js"></script>
<script src="./static/jquery.shuffleLetters.script.js"></script>
<script src="./static/jquery.fatNav.js"></script>
<script src="./static/index.js"></script>
</html>