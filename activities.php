
<?php
/*
Template Name: 　活動のご紹介
*/
?>
<?php get_header(); ?>
<body id="second" class="news second">
	<!-- header start -->
	<header>
		<?php include('include/header.php'); ?>
	</header>
	<!-- header end -->
	<!--container start -->
	<div id="container">
		<!-- main start -->
		<div id="main">
			
			<h2>活動のご紹介</h2>




			<dl class="topics_list">
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
        <dt > <time datetime="<?php the_time('Y.n.j'); ?>"><?php the_time('Y.n.j'); ?></time> </dt>
        <dd ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
    <?php endwhile; ?>
<?php endif; ?>
				<!-- <dt>2023/3/9</dt>
				<dd><a href="/04_news/news_20230309.html">JA埼玉県女性組織協議会と埼玉県生協連の第28回早春交流会を開催しました</a></dd>
				<dt>2023/3/3</dt>
				<dd><a href="/04_news/news_20230303.html">埼玉県生協連ピースフォーラムを開催しました</a></dd>
				<dt>2023/2/24</dt>
				<dd><a href="/siryou/old/main/shou_dantai/23/0224.html">「ヤングケアラー、ケアラー支援について」を開催しました</a></dd>
				<dt>2023/2/24</dt>
				<dd><a href="/04_news/news_20230224.html">「ウクライナ緊急募金」および「自然災害緊急募金」に寄付しました</a></dd>
				<dt>2023/2/10</dt>
				<dd><a href="/04_news/news_20230227.html">2022年度埼玉県と埼玉県生協連との第2回定期協議を開催しました</a></dd>
				<dt>2023/2/10</dt>
				<dd><a href="/04_news/news_20230210.html">組合員学習会を開催しました</a></dd>
				<dt>2023/2/9</dt>
				<dd><a href="/04_news/news_20230209.html">3/2埼玉県生協連ピースフォーラムを開催します</a></dd>
				<dt>2023/2/9</dt>
				<dd><a href="/siryou/old/main/shou_dantai/23/0209.html"> 3/4第61回全国消費者大会が開催されます</a></dd>
				<dt>2023/2/1</dt>
				<dd><a href="/04_news/news_20230131_sekyou50th.html">埼玉県生協連創立50周年記念祝賀会が開催されました</a></dd>
				<dt>2023/1/31</dt>
				<dd><a href="/04_news/news_20230131.html">原子力政策に対する意見を提出しました</a></dd> -->
				<!--<dt>2023/1/25</dt>
				<dd><a href="../siryou/old/main/shou_dantai/23/0125.html">「省エネ住宅について学ぶ　～環境にやさしく、快適な住まいを考えてみましょう～」を開催しました</a></dd>
				<!--<dt>2023/1/6</dt>
				<dd><a href="news_20221223.html"> 埼玉まるごとヘルスチャレンジ2022（報告締切1月15日）　ぜひ報告ください</a></dd>
				<!--<dt>2023/1/1</dt>
				<dd><a href="news_20230101.html"> 新年のごあいさつ</a></dd>
				<!--<dt>2022/12/28</dt>
				<dd><a href="news_20221228.html"> 1/21さよなら原発埼玉県民集会を開催します</a></dd>
				<!--<dt>2022/12/16</dt>
				<dd><a href="../siryou/old/main/shou_dantai/22/1210.html"> 県内消費者団体地区別研修会を開催します</a></dd>
				<!--<dt>2022/12/14</dt>
				<dd><a href="../siryou/old/main/shou_dantai/22/1214.html"> 「すこしお生活で健康にくらそう」をテーマに学習しました</a></dd>
				<!--<dt>2022/12/09</dt>
				<dd><a href="news_20221212.html"> 組合員活動交流会を開催しました</a></dd>
				<!--<dt>2022/12/08</dt>
				<dd><a href="../siryou/old/main/shou_dantai/22/1208_2.html"> 「みどりの食料システム戦略について」を開催しました</a></dd>
				<dt>2022/12/08</dt>
				<dd><a href="../siryou/old/main/shou_dantai/22/1208.html">埼玉県消費者志向経営推進シンポジウムが開催されました</a></dd>
				<!--<dt>2022/12/07</dt>
				<dd><a href="news_20221207.html"> 医療生協さいたまが取り組む「助成金制度」のご紹介</a></dd>
				<!--<dt>2022/12/06</dt>
				<dd><a href="../siryou/old/main/shou_dantai/22/1206.html"> 第58回埼玉県消費者大会実行委員会と埼玉県との懇談会を開催しました</a></dd>
				<!--<dt>2022/12/23</dt>
				<dd><a href="news_20221223.html"> 埼玉まるごとヘルスチャレンジ2022（取り組み期間12月末日）　ぜひ報告ください</a></dd>-->
				<!--<dt>2022/12/06</dt>
				<dd><a href="../siryou/old/main/shou_dantai/22/1212.html"> インターネット通販を利用する際には、最終確認画面をスクリーンショットしましょう！</a></dd>
				<!--<dt>2022/11/15</dt>
				<dd><a href="../siryou/old/main/shou_dantai/22/1116.html"> 11/29埼玉県消費者志向経営推進シンポジウムが開催されます</a></dd>
				<!--<dt>2022/11/15</dt>
				<dd><a href="news_20221116.html"> 埼玉県主催「労働者協同組合法に関するセミナー」が開催されます</a></dd>
				<!--<dt>2022/11/05</dt>
				<dd><a href="news_20221107.html">令和4年度埼玉県消費生活功労者表彰式が行われました</a></dd>
				<!--<dt>2022/10/27</dt>
				<dd><a href="../siryou/old/main/shou_dantai/22/1102.html">第58回埼玉県消費者大会報告　全体会、分科会とも、会場およびオンラインで開催しました</a></dd>
				<!--<dt>2022/10/11</dt>
				<dd><a href="news_20221102.html">第2回災害対策委員会で、日本赤十字社の災害時の活動について学習会を開催しました</a></dd>
				<!--<dt>2022/10/05</dt>
				<dd><a href="news_20221005.html">埼玉県主催「労働者協同組合法に関する４圏域セミナー」が開催されます</a></dd>
				<!--<dt>2022/9/25</dt>
				<dd><a href="news_20221003.html">4都県生協連共催憲法学習会報告「守りたい！私たちのくらしと平和～今こそ考えよう　世界のこと　日本のこと～」をテーマに学習しました</a></dd>
				<!--<dt>2022/9/20</dt>
				<dd><a href="../siryou/old/main/shou_dantai/22/0920_02_pre.html">10月25日【会場およびオンライン開催のご案内】第58回埼玉県消費者大会を開催します</a></dd>
				<!--<dt>2022/9/16</dt>
				<dd><a href="news_20220916.html">埼玉県生協連の会員生協が取り組む「助成金制度」のご紹介</a></dd>
				<!--<dt>2022/9/15</dt>
				<dd><a href="news_20220920.html">埼玉県補助事業　助け合い活動交流会を開催しました</a></dd>
				<!--<dt>2022/9/9</dt>
				<dd><a href="news_20220929.html">第43回九都県市合同防災訓練・防災フェア（埼玉県会場）に参加しました</a></dd>
				<!--<dt>2022/9/7</dt>
				<dd><a href="../siryou/old/main/shou_dantai/22/0920_pre.html">埼玉県委託事業　2022年度県内消費者団体全体研修会を開催しました</a></dd>
				<!--<dt>2022/8/30</dt>
			    <dd><a href="news_charange2022.html">埼玉まるごとヘルスチャレンジ2022 はじめてみませんか</a></dd>
				<!--<dt>2022/8/9</dt>
			    <dd><a href="news_20220809.html">2022年度埼玉県と埼玉県生協連との第1回定期協議を開催しました</a></dd>
				<!--<dt>2022/8/3</dt>
			    <dd><a href="news_220804_01.html">第37回埼玉県原爆死没者慰霊式が開催されました</a></dd>
                <!--<dt>2022/7/20</dt>
			    <dd><a href="news_220720_03.html">9月17日 4都県生協連共催憲法学習会を開催します</a></dd>
                <!--<dt>2022/7/20</dt>
			    <dd><a href="news_220720_02.html">9月3日 埼玉県「労働者協同組合法に関する県民説明会」が開催されます</a></dd>     
                <!--<dt>2022/7/20</dt>
			    <dd><a href="news_220720_01.html">8月3日～7日 2022平和のための埼玉の戦争展開催のご案内</a></dd>
                <!--<dt class="news">2022/7/20</dt>
                <dd><a href="../siryou/old/main/shou_dantai/22/0720_pre.html">8月31日 埼玉県委託事業 県内消費者団体研修会を開催します</a></dd>  
                <dt class="news">2022/7/19</dt>
                <dd><a href="../siryou/old/main/shou_dantai/22/0719_pre.html">【開催予告】10月25日、第58回埼玉県消費者大会を開催します</a></dd>  
              <!--  <dt>2022/7/15</dt>
                <dd><a href="news_220715_01.html">8月26日「消費者力アップ学習会 Vol.1 食の情報、鵜呑みにして大丈夫?~広告やメディアの 情報に惑わされない力を養おう~」を開催します</a></dd>    
                <!--<dt>2022/6/24</dt>
				<dd><a href="news_220624_01.html">埼玉県補助事業 埼玉県生協連創立50周年記念講演会を開催しました</a></dd>
                <!--<dt>2022/6/23</dt>
				<dd><a href="news_220623_01.html">第51回通常総会を開催し、全議案が承認可決されました</a></dd>
                <dt>2022/6/17</dt>
				<dd><a href="news_220617_01.html" target="_blank">第37回埼玉県原爆死没者慰霊式ライブ配信のご案内</a></dd>
                <dt>2022/6/7</dt>
				<dd><a href="../siryou/old/main/shou_dantai/22/0617.html" target="_blank">埼玉県食品衛生安全局と消費者団体の懇談会を開催しました</a></dd>  
              <dt>2022/6/8</dt>
				<dd><a href="news_220608_01.html" target="_blank">第37回埼玉県原爆死没者慰霊式の事前宣伝行動を行いました</a></dd>                
			  <dt>2022/5/25</dt>
				<dd><a href="../siryou/old/main/shou_dantai/22/0523_01 pre_study.html" target="_blank">第58回埼玉県消費者大会プレ学習会を開催しました</a></dd>
                <dt>2022/5/16</dt>
				<dd><a href="../siryou/old/main/shou_dantai/22/0523_pre.html" target="_blank">5月23日　第58回埼玉県消費者大会プレ学習会を開催します</a></dd>
                <dt>2022/4/28</dt>
				<dd><a href="news_220428_01.html" target="_blank">JA 埼玉県女性組織協議会との早春交流会について、JCA(日本協同組合連携機構) より取材、紹介されました</a></dd>
                <dt>2022/4/25</dt>
				<dd><a href="news_220425_01.html" target="_blank">埼玉まるごとヘルスチャレンジ 2021 終了しました</a></dd>
                <dt>2022/4/1</dt>
				<dd><a href="http://saitama-higainakusukai.or.jp/topics/220401_01.html" target="_blank">埼玉消費者被害をなくす会は、消費者契約法等改正法案に対し修正を求める意見書を提出しました</a></dd>
				<dt>2022/3/7</dt>
				<dd><a href="news_220307_01.html">埼玉県生協連「ピースフォーラム」を開催しました</a></dd>
				<dt>2022/3/3</dt>
				<dd><a href="news_220303_01.html">ロシアによるウクライナへの武力侵攻に強く抗議し、即時撤退を求めます</a></dd>
				<dt>2022/2/28</dt>
				<dd><a href="news_220112_01.html">3月3日　「ピースフォーラム～核兵器をなくすために必要なこと～」を開催します</a></dd>
				<dt>2022/2/25</dt>
				<dd><a href="news_220225_01.html">第27回JA埼玉県女性組織協議会と埼玉県生協連との早春交流会を開催しました</a></dd>
				<dt>2022/2/22</dt>
				<dd><a href="news_220222_01.html">埼玉県との第2回定期協議を開催しました</a></dd>
				<dt>2022/2/10</dt>
				<dd><a href="news_220210_01.html">第2回組合員学習会を開催しました</a></dd>
				
                <dt>2022/2/3</dt>
				<dd><a href="news_220203_01.html">日本政府に核兵器禁止条約に署名・批准を求める署名にご協力ください</a></dd>-->

			</dl>
			
			<ul class="news_list">
			<?php
// カテゴリーを取得する
$categories = get_categories(array('hide_empty' => 0));
foreach ($categories as $category) {
  // カテゴリーのリンクを作成する
  $category_link = get_category_link($category->term_id);
  // カテゴリーに属する投稿を取得する
  $args = array(
    'category__in' => $category->term_id,
    'posts_per_page' => -1, // 全ての投稿を取得する
    'orderby' => 'date',
    'order' => 'ASC',
  );
  $posts = get_posts($args);

  echo '<li class="left category-box"><a class="news-link" href="' . esc_url($category_link) . '">' .  $category->name . '</a></li>';
}
?>
				<!-- <li><a href="<?php //echo get_template_directory_uri(); ?>/04_news/welfare.html">
					<img class="ov" src="<?php //echo get_template_directory_uri(); ?>/04_news/img/04_news_02.gif" width="335" height="72" alt="福祉助け合い" />
				</a></li>
				<li class="left"><a href="<?php //echo get_template_directory_uri(); ?>/04_news/peace.html">
					<img class="ov" src="<?php //echo get_template_directory_uri(); ?>/04_news/img/04_news_03.gif" width="335" height="72" alt="平和" />
				</a></li>
				<li><a href="<?php //echo get_template_directory_uri(); ?>/04_news/consumer.html">
					<img class="ov" src="<?php //echo get_template_directory_uri(); ?>/04_news/img/04_news_04.gif" width="335" height="72" alt="消費者力" />
				</a></li>
				<li class="left"><a href="<?php //echo get_template_directory_uri(); ?>/04_news/environment.html">
					<img class="ov" src="<?php //echo get_template_directory_uri(); ?>/04_news/img/04_news_05.gif" width="335" height="72" alt="環境・エネルギー" />
				</a></li>
				<li><a href="<?php //echo get_template_directory_uri(); ?>/04_news/food.html">
					<img class="ov" src="<?php //echo get_template_directory_uri(); ?>/04_news/img/04_news_06.gif" width="335" height="72" alt="食の安全・安心" />
				</a></li>
				<li class="left"><a href="<?php //echo get_template_directory_uri(); ?>/04_news/prevention.html">
					<img class="ov" src="<?php //echo get_template_directory_uri(); ?>/04_news/img/04_news_07.gif" width="335" height="72" alt="防災・減災" />
				</a></li>
				<li><a href="<?php //echo get_template_directory_uri(); ?>/04_news/reconstruction.html">
					<img class="ov" src="<?php //echo get_template_directory_uri(); ?>/04_news/img/04_news_08.gif" width="335" height="72" alt="災害復興支援" />
				</a></li>
				<li class="left"><a href="<?php //echo get_template_directory_uri(); ?>/04_news/cooperation.html">
					<img class="ov" src="<?php //echo get_template_directory_uri(); ?>/04_news/img/04_news_09.gif" width="335" height="72" alt="協同組合連携" />
				</a></li>
				<li><a href="<?php //echo get_template_directory_uri(); ?>/04_news/area.html">
					<img class="ov" src="<?php //echo get_template_directory_uri(); ?>/04_news/img/04_news_10.gif" width="335" height="72" alt="地域社会づくり" />
				</a></li> -->

			</ul>
		<!-- backnumber start -->
		<div id="backnumber">
		<h3>過去のニュース</h3>
<ul class="link_list">
	<li><a href="/04_news/index.html"  target="_blank" rel=”noopener”>2021年度バックナンバーはこちら</a></li>
	<li><a href="/04_news/news_2020.html" target="_blank" rel=”noopener”>2020年度バックナンバーはこちら</a></li>
	<li><a href="/04_news/news_2019.html" target="_blank" rel=”noopener”>2019年度バックナンバーはこちら</a></li>
	<li><a href="/04_news/news_2018.html" target="_blank" rel=”noopener”>2018年度バックナンバーはこちら</a></li>
	<li><a href="/04_news/news_2017.html" target="_blank" rel=”noopener”>2017年度バックナンバーはこちら</a></li>
	<li><a href="/04_news/news_2016.html" target="_blank" rel=”noopener”>2016年度バックナンバーはこちら</a></li>
	<li><a href="/04_news/news_2015.html" target="_blank" rel=”noopener”>2015年度バックナンバーはこちら</a></li>
	<li><a href="/04_news/news_2014.html" target="_blank" rel=”noopener”>2014年度バックナンバーはこちら</a></li>
	<li><a href="/04_news/news_2013.html" target="_blank" rel=”noopener”>2013年度バックナンバーはこちら</a></li>
	<li><a href="/04_news/news_2012.html" target="_blank" rel=”noopener”>2012年度バックナンバーはこちら</a></li>
	<li><a href="/04_news/news_2011.html" target="_blank" rel=”noopener”>2011年度バックナンバーはこちら</a></li>
	<li><a href="/04_news/news_2010.html" target="_blank" rel=”noopener”>2010年度バックナンバーはこちら</a></li>
	<li><a href="/04_news/news_2009.html" target="_blank" rel=”noopener”>2009年度バックナンバーはこちら</a></li>
	<li><a href="/04_news/news_2008.html" target="_blank" rel=”noopener”>2008年度バックナンバーはこちら</a></li>
	<li><a href="/04_news/news_2007.html" target="_blank" rel=”noopener”>2007年度バックナンバーはこちら</a></li>
</ul>

		</div>
		<!-- backnumber end -->
		</div>
		<!-- main end -->
		
		<!-- smenu start -->
		<div id="smenu">
			<?php include('include/smenu_news.php'); ?>
		</div>
		<!-- smenu end -->
		
	</div>
	<!--container end -->
	<!-- footer start -->
	<!-- <footer>
		<?php //include('footer.php'); ?>
	</footer> -->
	<!-- footer end -->
</body>
</html>
