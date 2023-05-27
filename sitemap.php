<!DOCTYPE html>
<html lang="ja">
<head>
<!-- meta -->

<?php
/*
Template Name: 　サイトマップ
*/
?>
<?php get_header(); ?>
<body id="second" class="sitemap second">
	<!-- header start -->
	<header>
	<?php include('include/header.php'); ?>
	</header>
	<!-- header end -->
	<!--container start -->
	<div id="container">
		<!-- main start -->
		<div id="main">
			
			<h2>サイトマップ</h2>
			
			<div class="left_box">
				<h3><a href="<?php echo esc_url(home_url("/topics/")); ?>">トピックス</a></h3>
				
				<h3><a href="<?php echo esc_url(home_url("/about/")); ?>">埼玉県生協連について</a></h3>

				<h3><a href="<?php echo esc_url(home_url("/activities/")); ?>">活動のご紹介</a></h3>

				<h3><a href="<?php echo esc_url(home_url("/services/")); ?>">生協のご利用について</a></h3>

				<h3><a href="/05_oshirase/index.html">お知らせ</a></h3>
				
				<h3><a href="/06_sokuho/index.html">写真ニュース・埼玉の生協</a></h3>

			</div>
			
			<div class="right_box">
				
				<h3><a href="/07_link/index.html">リンク集</a></h3>

				<h3><a href="/08_access/index.html">アクセス</a></h3>
				
				<h3><a href="/09_kanyu/index.html">加入について</a></h3>
				
				<h3><a href="/10_otoi/index.html">お問い合わせ</a></h3>
				
				<h3><a href="/11_privacy/index.html">プライバシーポリシー</a></h3>
				
				<h3><a href="<?php echo esc_url(home_url("/sitemap/")); ?>">サイトマップ</a></h3>

				<!--<h3><a href="../17_member/index.html">会員専用ページ</a></h3>-->
			</div>
			
		</div>
		<!-- main end -->
		
	</div>
	<!--container end -->
	<!-- footer start -->
	<footer>
	<?php include('footer.php'); ?>
	</footer>
	<!-- footer end -->
</body>
</html>
