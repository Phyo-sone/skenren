
<?php get_header(); ?>
<body id="home" class="home">
	<!-- header start -->
	<header>
		<?php include('include/header.php'); ?>
	</header>

<div id="container">
		<!-- main_visual start -->
		<!--<div id="main_visual">
			<p><img src="img/main_img.png" alt="埼玉県生活協同組合連合会は、埼玉県内15生協が加入する連合会です" class="switch" /></p>
		</div>-->
		<!-- main_visual end -->
		<div id="home_gmenu">
			<ul>
				<li id="gmenu_about"><a href="<?php echo esc_url(home_url("/about/")); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/m01.gif" alt="埼玉県生協連について" class="switch" /></a></li>
				<li id="gmenu_news"><a href="<?php echo esc_url(home_url("/activities/")); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/m02.gif" alt="活動のご紹介" class="switch" /></a></li>
				<li id="gmenu_guide"><a href="<?php echo esc_url(home_url("/services/")); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/m03.gif" alt="生協のご利用について" class="switch" /></a></li>
			</ul>
		</div>
		
		<!-- main start -->
		<div id="main">
			<div id="news_area">
				<h2><img src="<?php echo get_template_directory_uri(); ?>/img/news_ttl.png" alt="新着情報" class="switch" /></h2>
				<p class="index_btn"><a href="<?php echo esc_url(home_url("/topics/")); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/index_btn.png" alt="一覧" class="switch ov" /></a></p>

		
				<div class="news_list">
					<dl>
					<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'news',
    'posts_per_page' => 10, // 投稿10件だけ表示
    'paged' => $paged,
);
$the_query = new WP_Query($args);
?>
<?php if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<dt style="display:flex;"class="report"> <time datetime="<?php the_time('Y.n.j'); ?>"><?php the_time('Y.n.j'); ?></time><div class="tag-sp">
  <?php $post_tags = get_the_tags( $post->ID, array( 'orderby' => 'term_id', 'order' => 'ASC' ) ); ?>
<?php if ( $post_tags ) : ?>
  <?php foreach( $post_tags as $tag ) : ?>
    <span class="<?php echo $tag->name; ?>"><?php echo $tag->name; ?></span>
  <?php endforeach; ?>
<?php endif; ?>
</div> </dt>
						<dd style="display:flex;"><div class="tag">
  <?php $post_tags = get_the_tags(); ?>
  <?php if ( $post_tags ) : ?>
    <?php foreach( $post_tags as $tag ) : ?>
      <span class="<?php echo $tag->name; ?>"><?php echo $tag->name; ?></span>
    <?php endforeach; ?>
  <?php endif; ?>
</div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
						<!-- <dt class="report">2023/3/9</dt>
						<dd><a href="04_news/news_20230309.html">JA埼玉県女性組織協議会と埼玉県生協連の第28回早春交流会を開催しました</a></dd>
						<dt class="report">2023/3/3</dt>
						<dd><a href="04_news/news_20230303.html">埼玉県生協連ピースフォーラムを開催しました</a></dd>
						<dt class="report">2023/2/24</dt>
						<dd><a href="siryou/old/main/shou_dantai/23/0224.html"><img src="<?php //echo get_template_directory_uri(); ?>/img/shodanren_01.gif" alt="埼玉消団連" width="95" class="pc" border="0"/><img class="sp_shodanren" src="<?php echo get_template_directory_uri(); ?>/img/shodanren_01.gif" alt="埼玉消団連"/> 「ヤングケアラー、ケアラー支援について」を開催しました</a></dd>
						<dt class="report">2023/2/24</dt>
						<dd><a href="04_news/news_20230224.html">「ウクライナ緊急募金」および「自然災害緊急募金」に寄付しました</a></dd>
						<dt class="report">2023/2/10</dt>
						<dd><a href="04_news/news_20230227.html">2022年度埼玉県と埼玉県生協連との第2回定期協議を開催しました</a></dd>
						<dt class="report">2023/2/10</dt>
						<dd><a href="04_news/news_20230210.html">組合員学習会を開催しました</a></dd>
						<dt class="news">2023/2/9</dt>
						<dd><a href="04_news/news_20230209.html">3/2埼玉県生協連ピースフォーラムを開催します</a></dd>
						<dt class="news">2023/2/9</dt>
						<dd><a href="siryou/old/main/shou_dantai/23/0209.html"><img src="<?php //echo get_template_directory_uri(); ?>/img/shodanren_01.gif" alt="埼玉消団連" width="95" class="pc" border="0"/><img class="sp_shodanren" src="<?php echo get_template_directory_uri(); ?>/img/shodanren_01.gif" alt="埼玉消団連"/> 3/4第61回全国消費者大会が開催されます</a></dd>
						<dt class="report">2023/2/1</dt>
						<dd><a href="04_news/news_20230131_sekyou50th.html">埼玉県生協連創立50周年記念祝賀会が開催されました</a></dd> -->
						<!-- ///ここまで表示 -->
						<!--<dt class="report">2023/1/31</dt>
						<dd><a href="04_news/news_20230131.html">原子力政策に対する意見を提出しました</a></dd>
						<!--<dt class="report">2023/1/25</dt>
						<dd><a href="siryou/old/main/shou_dantai/23/0125.html"><img src="img/shodanren_01.gif" alt="埼玉消団連" width="95" class="pc" border="0"/><img class="sp_shodanren" src="img/shodanren_01.gif" alt="埼玉消団連"/> 「省エネ住宅について学ぶ　～環境にやさしく、快適な住まいを考えてみましょう～」を開催しました</a></dd>
						<!--<dt class="news">2023/1/10</dt>
						<dd><a href="06_sokuho/index.html">写真ニュース冬号を掲載しました</a></dd>
						<!--<dt class="news">2023/1/6</dt>
						<dd><a href="04_news/news_20221223.html"> 埼玉まるごとヘルスチャレンジ2022（報告締切1月15日）<br>ぜひ報告ください</a></dd>
						<!--<dt class="news">2023/1/1</dt>
						<dd><a href="04_news/news_20230101.html"> 新年のごあいさつ</a></dd>
						<!--<dt class="news">2022/12/28</dt>
						<dd><a href="04_news/news_20221228.html"> 1/21さよなら原発埼玉県民集会を開催します</a></dd>
						<!--<dt class="news">2022/12/16</dt>
						<dd><a href="siryou/old/main/shou_dantai/22/1210.html"><img src="img/shodanren_01.gif" alt="埼玉消団連" width="95" class="pc" border="0"/><img class="sp_shodanren" src="img/shodanren_01.gif" alt="埼玉消団連"/> 県内消費者団体地区別研修会を開催します</a></dd>
						<!--<dt class="report">2022/12/14</dt>
						<dd><a href="siryou/old/main/shou_dantai/22/1214.html"><img src="img/shodanren_01.gif" alt="埼玉消団連" width="95" class="pc" border="0"/><img class="sp_shodanren" src="img/shodanren_01.gif" alt="埼玉消団連"/> 「すこしお生活で健康にくらそう」をテーマに学習しました</a></dd>
						<!--<dt class="report">2022/12/09</dt>
						<dd><a href="04_news/news_20221212.html"> 組合員活動交流会を開催しました</a></dd>
						<!--<dt class="report">2022/12/08</dt>
						<dd><a href="siryou/old/main/shou_dantai/22/1208_2.html"><img src="img/shodanren_01.gif" alt="埼玉消団連" width="95" class="pc" border="0"/><img class="sp_shodanren" src="img/shodanren_01.gif" alt="埼玉消団連"/> 「みどりの食料システム戦略について」を開催しました</a></dd>
						<!--<dt class="report">2022/12/08</dt>
						<dd><a href="siryou/old/main/shou_dantai/22/1208.html"><img src="img/shodanren_01.gif" alt="埼玉消団連" width="95" class="pc" border="0"/><img class="sp_shodanren" src="img/shodanren_01.gif" alt="埼玉消団連"/> 埼玉県消費者志向経営推進シンポジウムが開催されました</a></dd>
						<!--<dt class="news">2022/12/07</dt>
						<dd><a href="04_news/news_20221207.html"> 医療生協さいたまが取り組む「助成金制度」のご紹介</a></dd>
						<!--<dt class="report">2022/12/06</dt>
						<dd><a href="siryou/old/main/shou_dantai/22/1206.html"><img src="img/shodanren_01.gif" alt="埼玉消団連" width="95" class="pc" border="0"/><img class="sp_shodanren" src="img/shodanren_01.gif" alt="埼玉消団連"/> 第58回埼玉県消費者大会実行委員会と埼玉県との懇談会を開催しました</a></dd>
						<!--<dt class="news">2022/12/06</dt>
						<dd><a href="siryou/old/main/shou_dantai/22/1212.html"><img src="img/shodanren_01.gif" alt="埼玉消団連" width="95" class="pc" border="0"/><img class="sp_shodanren" src="img/shodanren_01.gif" alt="埼玉消団連"/> インターネット通販を利用する際には、最終確認画面をスクリーンショットしましょう！</a></dd>
						<!--<dt class="news">2022/11/15</dt>
						<dd><a href="siryou/old/main/shou_dantai/22/1116.html"><img src="img/shodanren_01.gif" alt="埼玉消団連" width="95" class="pc" border="0"/><img class="sp_shodanren" src="img/shodanren_01.gif" alt="埼玉消団連"/> 11/29埼玉県消費者志向経営推進シンポジウムが開催されます</a></dd>
						<!--<dt class="news">2022/11/15</dt>
						<dd><a href="04_news/news_20221116.html"> 埼玉県主催「労働者協同組合法に関するセミナー」が開催されます</a></dd>
						<!--<dt class="report">2022/11/05</dt>
						<dd><a href="04_news/news_20221107.html"> 令和4年度埼玉県消費生活功労者表彰式が行われました</a></dd>
						<!--<dt class="report">2022/10/27</dt>
						<dd><a href="siryou/old/main/shou_dantai/22/1102.html"><img src="img/shodanren_01.gif" alt="埼玉消団連" width="95" class="pc" border="0"/><img class="sp_shodanren" src="img/shodanren_01.gif" alt="埼玉消団連"/> 第58回埼玉県消費者大会報告　全体会、分科会とも、会場およびオンラインで開催しました</a></dd>
						<!--<dt class="report">2022/10/11</dt>
						<dd><a href="04_news/news_20221102.html">第2回災害対策委員会で、日本赤十字社の災害時の活動について学習会を開催しました</a></dd>
						<!--<dt class="news">2022/10/5</dt>
						<dd><a href="04_news/news_20221005.html">埼玉県主催「労働者協同組合法に関する４圏域セミナー」が開催されます</a></dd>
						<!--<dt class="report">2022/9/25</dt>
						<dd><a href="04_news/news_20221003.html">4都県生協連共催憲法学習会報告「守りたい！私たちのくらしと平和～今こそ考えよう　世界のこと　日本のこと～」をテーマに学習しました</a></dd>
						<!--<dt class="news">2022/9/20</dt>
						<dd><a href="siryou/old/main/shou_dantai/22/0920_02_pre.html"><img src="img/shodanren_01.gif" alt="埼玉消団連" width="95" class="pc" border="0"/><img class="sp_shodanren" src="img/shodanren_01.gif" alt="埼玉消団連"/> 10月25日【会場およびオンライン開催のご案内】第58回埼玉県消費者大会を開催します</a></dd>
						<!--<dt class="news">2022/9/16</dt>
						<dd><a href="04_news/news_20220916.html">埼玉県生協連の会員生協が取り組む「助成金制度」のご紹介</a></dd>
						<!--<dt class="news">2022/9/15</dt>
						<dd><a href="04_news/news_20220920.html">埼玉県補助事業　助け合い活動交流会を開催しました</a></dd>
						<!--<dt class="report">2022/9/9</dt>
						<dd><a href="04_news/news_20220929.html">第43回九都県市合同防災訓練・防災フェア（埼玉県会場）に参加しました</a></dd>
						<!--<dt class="news">2022/9/7</dt>
						<dd><a href="siryou/old/main/shou_dantai/22/0920_pre.html"><img src="img/shodanren_01.gif" alt="埼玉消団連" width="95" class="pc" border="0"/><img class="sp_shodanren" src="img/shodanren_01.gif" alt="埼玉消団連"/> 埼玉県委託事業　2022年度県内消費者団体全体研修会を開催しました</a></dd>
						<!--<dt class="news">2022/8/30</dt>
						<dd><a href="04_news/news_charange2022.html">埼玉まるごとヘルスチャレンジ2022 はじめてみませんか</a></dd>
						<!--<dt class="report">2022/8/9</dt>
						<dd><a href="04_news/news_20220809.html">2022年度埼玉県と埼玉県生協連との第1回定期協議を開催しました</a></dd>
						<!--<dt class="report">2022/8/3</dt>
						<dd><a href="04_news/news_220804_01.html">第37回埼玉県原爆死没者慰霊式が開催されました</a></dd>
                        <!--<dt class="news">2022/7/20</dt>
						<dd><a href="04_news/news_220720_03.html">9月17日 4都県生協連共催憲法学習会を開催します</a></dd>
                        <!--<dt class="news">2022/7/20</dt>
						<dd><a href="04_news/news_220720_02.html">9月3日 埼玉県「労働者協同組合法に関する県民説明会」が開催されます</a></dd>
                    <!--    <dt class="news">2022/7/20</dt>
						<dd><a href="04_news/news_220720_01.html">8月3日～7日 2022平和のための埼玉の戦争展開催のご案内</a></dd>
                   <!--   	<dt class="news">2022/7/20</dt>
						<dd><a href="siryou/old/main/shou_dantai/22/0720_pre.html"><img src="img/shodanren_01.gif" alt="埼玉消団連" width="95" class="pc" border="0"/><img class="sp_shodanren" src="img/shodanren_01.gif" alt="埼玉消団連"/> 8月31日 埼玉県委託事業 県内 消費者団体研修会を開催します</a></dd>
                   <!--     <dt class="news">2022/7/19</dt>
						<dd><a href="siryou/old/main/shou_dantai/22/0719_pre.html"><img src="img/shodanren_01.gif" alt="埼玉消団連" width="95" class="pc" border="0"/><img class="sp_shodanren" src="img/shodanren_01.gif" alt="埼玉消団連"/>【開催予告】10月25日、第58回埼玉県消費者 大会を開催します</a></dd>

                    <!--  <dt class="news">2022/7/15</dt>
						<dd><img class="pc" src="img/nakusukai_01.gif" alt="埼玉消費者被害をなくす会" width="183"/><img class="sp_nakusukai" src="img/nakusukai_01.gif" alt="埼玉消費者被害をなくす会"/>&nbsp;<a href="04_news/news_220715_01.html" target="_blank">8月26日「消費者力アップ 学習会Vol.1 食の情報、鵜呑みにして大丈夫?~広告やメディアの情報に惑わされない力を養おう~」 を開催します</a></dd>
                        
     <!--               <dt class="news">2022/7/11</dt>
						<dd><a href="06_sokuho/index.html">写真ニュース夏号を掲載しました</a></dd>
     <!--                   <dt class="report">2022/6/24</dt>
						<dd><a href="04_news/news_220624_01.html">埼玉県補助事業 埼玉県生協連創立50周年記念講演会を開催しました</a></dd>
   <!--                 <dt class="report">2022/6/23</dt>
						<dd><a href="04_news/news_220623_01.html">第51回通常総会を開催し、全議案が承認可決されました</a></dd>
   <!--                 <dt class="news">2022/6/17</dt>
						<dd><a href="04_news/news_220617_01.html">第37回埼玉県原爆死没者慰霊式ライブ配信のご案内</a></dd>
   <!--	 
                        <dt class="report">2022/6/8</dt>
						<dd><a href="04_news/news_220608_01.html">第37回埼玉県原爆死没者慰霊式の事前宣伝行動を行いました</a></dd>

                      <dt class="report">2022/6/7</dt>
						<dd><a href="siryou/old/main/shou_dantai/22/0617.html"><img src="img/shodanren_01.gif" alt="埼玉消団連" width="95" class="pc" border="0"/><img class="sp_shodanren" src="img/shodanren_01.gif" alt="埼玉消団連"/>&nbsp;埼玉県食品衛生安全局と消費者団体の懇談会を開催しました</a></dd>
   <!--	 
                      <dt class="report">2022/5/25</dt>
						<dd><a href="siryou/old/main/shou_dantai/22/0523_01 pre_study.html"><img src="img/shodanren_01.gif" alt="埼玉消団連" width="95" class="pc" border="0"/><img class="sp_shodanren" src="img/shodanren_01.gif" alt="埼玉消団連"/>&nbsp;第58回埼玉県消費者大会プレ学習会を開催しました</a></dd>
   	                 
                        <dt class="news">2022/5/16</dt>
						<dd><img class="pc" src="img/shodanren_01.gif" alt="埼玉消団連" width="95"/><img class="sp_shodanren" src="img/shodanren_01.gif" alt="埼玉消団連"/>&nbsp;<a href="siryou/old/main/shou_dantai/22/0523_pre.html" target="_blank">5月23日　第58回埼玉県消費者大会プレ学習会を開催します</a></dd>
                     <dt class="news">2022/4/28</dt>
						<dd><a href="04_news/news_220428_01.html">JA埼玉県女性組織協議会との早春交流会について、JCA(日本協同 組合連携機構)より取材、紹介されました</a></dd>
                        <dt class="report">2022/4/25</dt>
						<dd><a href="04_news/news_220425_01.html">埼玉まるごとヘルスチャレンジ 2021 終了しました</a></dd>
                        <dt class="news">2022/4/10</dt>
						<dd><a href="06_sokuho/index.html">写真ニュース春号を掲載しました</a></dd>
                       <dt class="report">2022/4/1</dt>
						<dd><img class="pc" src="img/nakusukai_01.gif" alt="埼玉消費者被害をなくす会" width="183"/><img class="sp_nakusukai" src="img/nakusukai_01.gif" alt="埼玉消費者被害をなくす会"/>&nbsp;<a href="http://saitama-higainakusukai.or.jp/topics/220401_01.html" target="_blank">埼玉消費者被害をなくす会は、消費者契約法等改正法案に対し修正を求める意見書を提出しました</a></dd>
                        
                        <dt class="report">2022/3/7</dt>
						<dd><a href="04_news/news_220307_01.html">埼玉県生協連「ピースフォーラム」を開催しました</a></dd>
	
						<dt class="report">2022/3/3</dt>
						<dd><a href="04_news/news_220303_01.html">ロシアによるウクライナへの武力侵攻に強く抗議し、即時撤退を求めます</a></dd>
						<dt class="news">2022/2/28</dt>
						<dd><a href="04_news/news_220112_01.html">3月3日　「ピースフォーラム～核兵器をなくすために必要なこと～」を開催します</a></dd>
<!--						<dt class="report">2022/2/25</dt>
						<dd><a href="04_news/news_220225_01.html">第27回JA埼玉県女性組織協議会と埼玉県生協連との早春交流会を開催しました</a></dd>
					

-->
<?php endwhile; ?>
<?php endif; ?>
						
				
				  </dl>
				  

<?php
if (function_exists('wp_pagenavi')) {
    wp_pagenavi(array('query' => $the_query));
}
?>


				</div>
			</div>
			
			
			<div id="topics_area">
		
				<h2><img src="<?php echo get_template_directory_uri(); ?>/img/topics_ttl.png" alt="トピックス" class="switch" /></h2>
				<?php $args = array(
	'post_type' => 'news',
    'posts_per_page' => 1, // 最新の1件を取得
    'tag' => 'ピックアップ' // ピックアップタグが付いた投稿を取得
);
$the_query = new WP_Query( $args ); ?>
<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<p class="photo_topics"><a href="<?php the_permalink(); ?>">
				

	<?php the_post_thumbnail(
  'medium', /* 任意の画像サイズ */
  array(
    'class' => 'thumbnail-img', /* 任意のクラス名 */
    'id'    => 'my-id' /* 任意のid名 */
  )
); ?><br /><a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a></p>
  <?php endwhile; ?>
<?php endif; ?>
				<ul>
					<!--<li><a href="04_news/news_210907_01.html"><img src="img/health_2021.jpg" alt="埼玉まるごとヘルスチャレンジ2021はこちらから" class="switch" /></a></li>-->
					<li><a href="../../../04_news/index.html"  rel=”noopener”><img src="<?php echo get_template_directory_uri(); ?>/img/health_2022.gif" alt="埼玉まるごとヘルスチャレンジ2022はこちらから" class="switch" /></a></li>
					<li><a href="/06_sokuho/index.html"  rel=”noopener”><img src="<?php echo get_template_directory_uri(); ?>/img/photo_news_bana.jpg" alt="県内生協・県連の活動を伝える　写真ニュース（広報誌）埼玉の生協（組織案内）" class="switch" /></a></li>
					<li><a href="/05_oshirase/index.html"  rel=”noopener”><img src="<?php echo get_template_directory_uri(); ?>/img/schedule_bana.gif" alt="活動予定" class="switch" /></a></li>
					<li><a href="/15_dataroom/index.html" rel=”noopener”><img src="<?php echo get_template_directory_uri(); ?>/img/document_bana.gif" alt="資料室" class="switch" /></a></li>
					<li><a href="/18_report/index.html"  rel=”noopener”><img src="<?php echo get_template_directory_uri(); ?>/img/miyagi_fukushima_bana.jpg" alt="被災地のいま 宮城県・福島県の現状" class="switch" /></a></li>
					<li><a href="<?php echo esc_url(home_url("/sho_dantai/")); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/A-sho_dantai_bana.gif" alt="埼玉県消費者団体連絡会" class="switch" /></a></li>
					<li><a href="http://saitama-higainakusukai.or.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/nakusukai_bana.gif" alt="NPO法人埼玉消費者被害なくす会" class="switch" /></a></li>
					<!--<li><a href="17_member/"><img src="img/member_bana.gif" alt="会員生協専用ページ" class="switch" /></a></li>-->
				</ul>
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


