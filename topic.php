<?php
/*
Template Name: 　 トピックス
*/
?>
<?php get_header(); ?>
<body id="second" class="topics second">
	<!-- header start -->
	<header>
	<?php include('include/header.php'); ?>
	</header>
	<!-- header end -->
	<!--container start -->
	<div id="container">
		<!-- main start -->
		<div id="main">
			
			<h2>トピックス</h2>

			<?php
// 今年の年度を取得する
$this_year = date('Y');
if (date('n') < 4) {
  $this_year--;
}
// 投稿を年度別に取得するクエリを作成する
$args = array(
  'post_type' => 'news',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'order' => 'DESC',
  'orderby' => 'date',
  'date_query' => array(
    array(
      'year' => $this_year - 1,
      'compare' => '>=',
    ),
    array(
      'year' => $this_year + 1,
      'compare' => '<=',
    ),
  ),
);
$year_posts = new WP_Query($args);
?>

<?php
$prev_year = '';
$prev_month = '';
if ($year_posts->have_posts()) : ?>
  <ul>
  <?php while ($year_posts->have_posts()) : $year_posts->the_post(); ?>
    <?php
    // 投稿日を取得する
    $post_date = get_the_date('Y-m-d');
    // 年度と月を計算する
    $year = date('Y', strtotime($post_date));
    if (date('n', strtotime($post_date)) < 4 && $year !== $this_year) {
      $year--;
    }
    $month = date('n', strtotime($post_date));
    ?>
  
    <?php if ($month !== $prev_month || $year !== $prev_year) : ?>
      <?php if ($prev_month !== '') : ?>
        </ul>
      <?php endif; ?>
      <h4><?php echo $year; ?>年<?php echo $month; ?>月</h4>
      <dl class="topics_list">
    <?php endif; ?>

    <dt><time datetime="<?php the_time('Y-n-j'); ?>"><?php the_time('Y.n.j'); ?></time> </dt> <dd> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
    <?php $prev_year = $year; ?>
    <?php $prev_month = $month; ?>

  <?php endwhile; ?>
	  </dl>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>

<!-- 
			<h4>2023年4月</h4>
			<dl class="topics_list">
				<dt>2023/4/10</dt>
				<dd><a href="/06_sokuho/">写真ニュース春号を掲載しました</a></dd>
			</dl>

			<h4>2023年3月</h4>
			<dl class="topics_list">
				<dt>2023/3/9</dt>
				<dd><a href="<?php //echo get_template_directory_uri(); ?>/04_news/news_20230309.html">JA埼玉県女性組織協議会と埼玉県生協連の第28回早春交流会を開催しました</a></dd>
				<dt>2023/3/3</dt>
				<dd><a href="../04_news/news_20230303.html">埼玉県生協連ピースフォーラムを開催しました</a></dd>
			</dl>

			<h4>2023年2月</h4>
			<dl class="topics_list">
				<dt>2023/2/24</dt>
				<dd><a href="../siryou/old/main/shou_dantai/23/0224.html">「ヤングケアラー、ケアラー支援について」を開催しました</a></dd>
				<dt>2023/2/24</dt>
				<dd><a href="../04_news/news_20230224.html">「ウクライナ緊急募金」および「自然災害緊急募金」に寄付しました</a></dd>
				<dt>2023/2/10</dt>
				<dd><a href="../04_news/news_20230227.html">2022年度埼玉県と埼玉県生協連との第2回定期協議を開催しました</a></dd>
				<dt>2023/2/10</dt>
				<dd><a href="../04_news/news_20230210.html">組合員学習会を開催しました</a></dd>
				<dt>2023/2/9</dt>
				<dd><a href="../04_news/news_20230209.html">3/2埼玉県生協連ピースフォーラムを開催します</a></dd>
				<dt>2023/2/9</dt>
				<dd><a href="../siryou/old/main/shou_dantai/23/0209.html"> 3/4第61回全国消費者大会が開催されます</a></dd>
				<dt>2023/2/1</dt>
				<dd><a href="../04_news/news_20230131_sekyou50th.html">埼玉県生協連創立50周年記念祝賀会が開催されました</a></dd>
			</dl>

			<h4>2023年1月</h4>
			<dl class="topics_list">
				<dt>2023/1/31</dt>
				<dd><a href="../04_news/news_20230131.html">原子力政策に対する意見を提出しました</a></dd>
				<dt>2023/1/25</dt>
				<dd><a href="../siryou/old/main/shou_dantai/23/0125.html">「省エネ住宅について学ぶ　～環境にやさしく、快適な住まいを考えてみましょう～」を開催しました</a></dd>
				<dt>2023/1/10</dt>
				<dd><a href="../06_sokuho/index.html">写真ニュース冬号を掲載しました</a></dd>
				<dt>2023/1/6</dt>
				<dd><a href="../04_news/news_20221223.html"> 埼玉まるごとヘルスチャレンジ2022（報告締切1月15日）　ぜひ報告ください</a></dd>
				<dt>2023/1/1</dt>
				<dd><a href="../04_news/news_20230101.html"> 新年のごあいさつ</a></dd>
			</dl> -->

			<h4>2022年12月</h4>
			<dl class="topics_list">
				<dt>2022/12/28</dt>
				<dd><a href="<?php echo get_template_directory_uri(); ?>/04_news/news_20221228.html"> 1/21さよなら原発埼玉県民集会を開催します</a></dd>
				<!--<dt>2022/12/23</dt>
				<dd><a href="../04_news/news_20221223.html"> 埼玉まるごとヘルスチャレンジ2022（取り組み期間12月末日）　ぜひ報告ください</a></dd>-->
				<dt>2022/12/16</dt>
				<dd><a href="<?php echo get_template_directory_uri(); ?>/siryou/old/main/shou_dantai/22/1210.html"> 県内消費者団体地区別研修会を開催します</a></dd>
				<dt>2022/12/14</dt>
				<dd><a href="<?php echo get_template_directory_uri(); ?>/siryou/old/main/shou_dantai/22/1214.html"> 「すこしお生活で健康にくらそう」をテーマに学習しました</a></dd>
				<dt>2022/12/09</dt>
				<dd><a href="<?php echo get_template_directory_uri(); ?>/04_news/news_20221212.html"> 組合員活動交流会を開催しました</a></dd>
				<dt>2022/12/08</dt>
				<dd><a href="<?php echo get_template_directory_uri(); ?>/siryou/old/main/shou_dantai/22/1208_2.html"> 「みどりの食料システム戦略について」を開催しました</a></dd>
				<dt>2022/12/08</dt>
				<dd><a href="<?php echo get_template_directory_uri(); ?>/siryou/old/main/shou_dantai/22/1208.html">埼玉県消費者志向経営推進シンポジウムが開催されました</a></dd>
				<dt>2022/12/07</dt>
				<dd><a href="<?php echo get_template_directory_uri(); ?>/04_news/news_20221207.html"> 医療生協さいたまが取り組む「助成金制度」のご紹介</a></dd>
				<dt>2022/12/06</dt>
				<dd><a href="<?php echo get_template_directory_uri(); ?>/siryou/old/main/shou_dantai/22/1206.html"> 第58回埼玉県消費者大会実行委員会と埼玉県との懇談会を開催しました</a></dd>
				<dt>2022/12/06</dt>
				<dd><a href="<?php echo get_template_directory_uri(); ?>/siryou/old/main/shou_dantai/22/1212.html"> インターネット通販を利用する際には、最終確認画面をスクリーンショットしましょう！</a></dd>
			</dl>

			<h4>2022年11月</h4>
			<dl class="topics_list">
				<dt>2022/11/15</dt>
				<dd><a href="<?php echo get_template_directory_uri(); ?>/siryou/old/main/shou_dantai/22/1116.html"> 11/29埼玉県消費者志向経営推進シンポジウムが開催されます</a></dd>
				<dt>2022/11/15</dt>
				<dd><a href="<?php echo get_template_directory_uri(); ?>/04_news/news_20221116.html"> 埼玉県主催「労働者協同組合法に関するセミナー」が開催されます</a></dd>
				<dt>2022/11/05</dt>
				<dd><a href="<?php echo get_template_directory_uri(); ?>/04_news/news_20221107.html">令和4年度埼玉県消費生活功労者表彰式が行われました</a></dd>
			</dl>

			<h4>2022年10月</h4>
			<dl class="topics_list">
				<dt>2022/10/27</dt>
				<dd><a href="<?php echo get_template_directory_uri(); ?>/siryou/old/main/shou_dantai/22/1102.html">第58回埼玉県消費者大会報告　全体会、分科会とも、会場およびオンラインで開催しました</a></dd>
				<dt>2022/10/11</dt>
				<dd><a href="<?php echo get_template_directory_uri(); ?>/04_news/news_20221102.html">第2回災害対策委員会で、日本赤十字社の災害時の活動について学習会を開催しました</a></dd>
				<dt>2022/10/11</dt>
				<dd><a href="<?php echo get_template_directory_uri(); ?>/06_sokuho/index.html">写真ニュース秋号を掲載しました</a></dd>
				<dt>2022/10/5</dt>
				<dd><a href="<?php echo get_template_directory_uri(); ?>/04_news/news_20221005.html">埼玉県主催「労働者協同組合法に関する４圏域セミナー」が開催されます</a></dd>
			</dl>

			<h4>2022年9月</h4>
			<dl class="topics_list">
			<dt>2022/9/25</dt>
			<dd><a href="<?php echo get_template_directory_uri(); ?>/04_news/news_20221003.html">4都県生協連共催憲法学習会報告「守りたい！私たちのくらしと平和～今こそ考えよう　世界のこと　日本のこと～」をテーマに学習しました</a></dd>
			<dt>2022/9/20</dt>
			<dd><a href="<?php echo get_template_directory_uri(); ?>/siryou/old/main/shou_dantai/22/0920_02_pre.html">10月25日【会場およびオンライン開催のご案内】第58回埼玉県消費者大会を開催します</a></dd>
			<dt>2022/9/16</dt>
			<dd><a href="<?php echo get_template_directory_uri(); ?>/04_news/news_20220916.html">埼玉県生協連の会員生協が取り組む「助成金制度」のご紹介</a></dd>
			<dt>2022/9/15</dt>
			<dd><a href="<?php echo get_template_directory_uri(); ?>/04_news/news_20220920.html">埼玉県補助事業　助け合い活動交流会を開催しました</a></dd>
			<dt>2022/9/9</dt>
			<dd><a href="<?php echo get_template_directory_uri(); ?>/04_news/news_20220929.html">第43回九都県市合同防災訓練・防災フェア（埼玉県会場）に参加しました</a></dd>
			<dt>2022/9/7</dt>
			<dd><a href="<?php echo get_template_directory_uri(); ?>/siryou/old/main/shou_dantai/22/0920_pre.html">埼玉県委託事業　2022年度県内消費者団体全体研修会を開催しました</a></dd>
			</dl>
			
			<h4>2022年8月</h4>
            <dl class="topics_list">
			<dt>2022/8/30</dt>
			<dd><a href="<?php echo get_template_directory_uri(); ?>/04_news/news_charange2022.html">埼玉まるごとヘルスチャレンジ2022 はじめてみませんか</a></dd>
			<dt>2022/8/9</dt>
			<dd><a href="<?php echo get_template_directory_uri(); ?>/04_news/news_20220809.html">2022年度埼玉県と埼玉県生協連との第1回定期協議を開催しました</a></dd>
            <dt>2022/8/3</dt>
			<dd><a href="<?php echo get_template_directory_uri(); ?>/04_news/news_220804_01.html">第37回埼玉県原爆死没者慰霊式が開催されました</a></dd>
            
			
                        <h4>2022年7月</h4>
            <dl class="topics_list">
                
            <dt>2022/7/20</dt>
			<dd><a href="<?php echo get_template_directory_uri(); ?>/04_news/news_220720_03.html">9月17日 4都県生協連共催憲法学習会を開催します</a></dd>
            <dt>2022/7/20</dt>
			<dd><a href="<?php echo get_template_directory_uri(); ?>/04_news/news_220720_02.html">9月3日 埼玉県「労働者協同組合法に関する県民説明会」が開催されます</a></dd>     
            <dt>2022/7/20</dt>
			<dd><a href="<?php echo get_template_directory_uri(); ?>/04_news/news_220720_01.html">8月3日～7日 2022平和のための埼玉の戦争展開催のご案内</a></dd>
             <dt>2022/7/20</dt>
            <dd><a href="<?php echo get_template_directory_uri(); ?>/siryou/old/main/shou_dantai/22/0720_pre.html">8月31日 埼玉県委託事業 県内消費者団体研修会を開催します</a></dd>     
             <dt class="news">2022/7/19</dt>
            <dd><a href="<?php echo get_template_directory_uri(); ?>/siryou/old/main/shou_dantai/22/0719_pre.html">【開催予告】10月25日、第58回埼玉県消費者大会を開催します</a></dd>     
            <dt class="news">2022/7/15</dt>
            <dd><a href="<?php echo get_template_directory_uri(); ?>/04_news/news_220715_01.html">8月26日「消費者力アップ学習会 Vol.1 食の情報、鵜呑みにして大丈夫?~広告やメディアの 情報に惑わされない力を養おう~」を開催します</a></dd>            
<dt class="news">2022/7/11</dt>
            <dd><a href="<?php echo get_template_directory_uri(); ?>/06_sokuho/index.html">写真ニュース夏号を掲載しました</a></dd>
                
                
            <h4>2022年6月</h4>
            <dl class="topics_list">
                 <dt>2022/6/24</dt>
				<dd><a href="<?php echo get_template_directory_uri(); ?>/04_news/news_220624_01.html">埼玉県補助事業 埼玉県生協連創立50周年記念講演会を開催しました</a></dd>
                <dt>2022/6/23</dt>
				<dd><a href="<?php echo get_template_directory_uri(); ?>/04_news/news_220623_01.html">第51回通常総会を開催し、全議案が承認可決されました</a></dd>
                <dt>2022/6/17</dt>
				<dd><a href="<?php echo get_template_directory_uri(); ?>/04_news/news_220617_01.html" target="_blank">第37回埼玉県原爆死没者慰霊式ライブ配信のご案内</a></dd>   
                <dt>2022/6/7</dt>
				<dd><a href="<?php echo get_template_directory_uri(); ?>/siryou/old/main/shou_dantai/22/0617.html" target="_blank">埼玉県食品衛生安全局と消費者団体の懇談会を開催しました</a></dd>   
                <dt>2022/6/8</dt>
				<dd><a href="<?php echo get_template_directory_uri(); ?>/04_news/news_220608_01.html" target="_blank">第37回埼玉県原爆死没者慰霊式の事前宣伝行動を行いました</a></dd>    
                
                
<h4>2022年5月</h4>
			<dl class="topics_list">
<dt>2022/5/25</dt>
				<dd><a href="<?php echo get_template_directory_uri(); ?>/siryou/old/main/shou_dantai/22/0523_01 pre_study.html" target="_blank">第58回埼玉県消費者大会プレ学習会を開催しました</a></dd>                
<dt>2022/5/16</dt>
				<dd><a href="<?php echo get_template_directory_uri(); ?>/siryou/old/main/shou_dantai/22/0523_pre.html">第58回埼玉県消費者大会プレ学習会を開催します</a></dd>                

<h4>2022年4月</h4>
			<dl class="topics_list">
                <dt>2022/4/28</dt>
				<dd><a href="<?php echo get_template_directory_uri(); ?>/04_news/news_220428_01.html">JA 埼玉県女性組織協議会との早春交流会について、JCA(日本協同組合連携機構) より取材、紹介されました</a></dd>                
				<dt>2022/4/25</dt>
				<dd><a href="<?php echo get_template_directory_uri(); ?>/04_news/news_220425_01.html">埼玉まるごとヘルスチャレンジ 2021 終了しました</a></dd><dt>2022/4/10</dt>
				<dd><a href="<?php echo get_template_directory_uri(); ?>/06_sokuho/index.html">写真ニュース春号を掲載しました</a></dd>
				<dt>2022/4/1</dt>
				<dd><a href="http://saitama-higainakusukai.or.jp/topics/220401_01.html" target="_blank">埼玉消費者被害をなくす会は、消費者契約法等改正法案に対し修正を求める意見書を提出しました</a></dd>

			</dl>

			<!-- oldtopics start -->
			<div id="oldtopics">
				<?php include('include/oldtopics.html'); ?>
</div>
			<!-- oldtopics end -->
			
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
