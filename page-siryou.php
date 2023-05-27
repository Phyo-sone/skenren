
<?php
/*
Template Name: 　埼玉県消費者
*/
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="埼玉県消費者団体連絡会">
<meta name="keywords" content="埼玉県消費者団体連絡会">
<title>埼玉県消費者団体連絡会</title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/siryou/old/main/shou_dantai/css/style.css">
</head>

<body>

<header id="head">
    <div class="inner">
        <div id="mobile">
            <div class="logo"><h1><a href="<?php echo esc_url(home_url("/siryou/old/main/sho_dantai/")); ?>">埼玉県消費者団体連絡会</a></h1></div>
            <div id="nav-toggle"><div><span></span><span></span><span></span></div><p>MENU</p></div>
        </div>
        <div id="globalnavi">
            <ul>
                <li><a href="<?php echo esc_url(home_url("/siryou/old/main/sho_dantai/")); ?>#a-news">新着情報</a></li>
                <li><a href="<?php echo esc_url(home_url("/siryou/old/main/sho_dantai/")); ?>#a-about">本会の概要</a></li>
            </ul>
        </div>
    </div>
</header>

<div id="a-news"></div>
<section class="news">
    <h2>新着情報</h2>
    <div class="news-list">

						
				
	
				  


        <ul>
        <?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'news',
    'posts_per_page' => 10, // 投稿10件だけ表示
    'paged' => $paged,
    'category_name' => 'consumer'
);
$the_query = new WP_Query($args);
?>
<?php if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						
						
 
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?><time datetime="<?php the_time('Y.n.j'); ?>">(<?php the_time('Y.n.j'); ?>)</time></a>  </li>
						
<?php endwhile; ?>
<?php endif; ?>
				
            <!-- <li><a href="23/0224.html">「ヤングケアラー、ケアラー支援について」を開催しました(2023年2月24日)</a></li>
            <li><a href="23/0209.html">3/4第61回全国消費者大会が開催されます(2023年2月9日)</a></li>
            <li><a href="23/0125.html">「省エネ住宅について学ぶ　～環境にやさしく、快適な住まいを考えてみましょう～」を開催しました(2023年1月25日)</a></li>
            <li><a href="22/1210.html">県内消費者団体地区別研修会を開催します(2022年12月16日)</a></li>
            <li><a href="22/1214.html">「すこしお生活で健康にくらそう」をテーマに学習しました(2022年12月14日)</a></li>
            <li><a href="22/1208_2.html">「みどりの食料システム戦略について」を開催しました(2022年12月8日)</a></li>
            <li><a href="22/1208.html">埼玉県消費者志向経営推進シンポジウムが開催されました(2022年12月8日)</a></li>
            <li><a href="22/1206.html">第58回埼玉県消費者大会実行委員会と埼玉県との懇談会を開催しました(2022年12月6日)</a></li>
            <li><a href="22/1212.html">インターネット通販を利用する際には、最終確認画面をスクリーンショットしましょう！(2022年12月6日)</a></li>
            <li><a href="22/1116.html">11/29埼玉県消費者志向経営推進シンポジウムが開催されます(2022年11月15日)</a></li>
            <li><a href="22/1102.html">第58回埼玉県消費者大会報告　全体会、分科会とも、会場およびオンラインで開催しました(2022年10月27日)</a></li>
            <li><a href="22/0920_02_pre.html">10月25日【会場およびオンライン開催のご案内】第58回埼玉県消費者大会を開催します(2022年9月20日)</a></li>
            <li><a href="22/0920_pre.html">埼玉県委託事業　2022年度県内消費者団体全体研修会を開催しました(2022年9月7日)</a></li>
            <li><a href="22/0720_pre.html">【開催予告】8月31日 埼玉県委託事業 県内消費者団体研修会を開催します(2022年7月20日)</a></li>
            <li><a href="22/0719_pre.html">【開催予告】10月25日、第58回埼玉県消費者大会を開催します(2022年7月19日)</a></li>
            <li><a href="../../../../04_news/news_220715_01.html">「消費者力アップ学習会 Vol.1 食の情報、鵜呑みにして大丈夫?~広告やメディアの 情報に惑わされない力を養おう~」を開催します(2022年7月15日)</a></li>
            <li><a href="22/0617.html">埼玉県食品衛生安全局と消費者団体の懇談会を開催しました(2022年6月7日)</a></li>
            <li><a href="22/0523_01 pre_study.html">第58回埼玉県消費者大会プレ学習会を開催しました(2022年5月25日)</a></li>
			<li><a href="22/0523_pre.html">第58回埼玉県消費者大会プレ学習会を開催します(2022年4月27日)</a></li>
            <li><a href="http://saitama-higainakusukai.or.jp/topics/220401_01.html" target="_blank">埼玉消費者被害をなくす会は、消費者契約法等改正法案に対し修正を求める意見書を提出しました(2022年4月1日)</a></li> -->


            <!--<li><a href="22/1102.html">第58回埼玉県消費者大会報告　全体会、分科会とも、会場およびオンラインで開催しました(2022年10月27日)</a></li>
            <!--<li><a href="22/0920_02_pre.html">10月25日【会場およびオンライン開催のご案内】第58回埼玉県消費者大会を開催します(2022年9月20日)</a></li>
            <!--<li><a href="22/0920_pre.html">埼玉県委託事業　2022年度県内消費者団体全体研修会を開催しました(2022年9月7日)</a></li>
            <!--<li><a href="22/0720_pre.html">8月31日 埼玉県委託事業 県内消費者団体研修会を開催します(2022年7月20日)</a></li>-->
            <!--<li><a href="22/0719_pre.html">【開催予告】10月25日、第 58 回埼玉県消費者大会を開催します(2022年7月19日)</a></li>-->
            <!--<li><a href="22/0617.html">埼玉県食品衛生安全局と消費者団体の懇談会を開催しました(2022年6月7日)</a></li>-->
            <!--<li><a href="22/0523_01%20pre_study.html">第58回埼玉県消費者大会プレ学習会を開催しました(2022年5月25日)</a></li>-->
            <!--<li><a href="22/0523_pre.html">第58回埼玉県消費者大会プレ学習会を開催します（2022年4月27日）</a></li>-->
            <!--<li><a href="22/0128_01workshop.html">埼玉県委託事業　県内消費者団体地区別研修会&#9314;を開催しました（2022年1月28日）</a></li>-->
            <!--<li><a href="21/1228_01workshop.html">埼玉県委託事業　県内消費者団体地区別研修会&#9313;を開催しました（2021年12月28日）</a></li>-->
            <!--<li><a href="21/1227_01workshop.html">埼玉県委託事業　県内消費者団体地区別研修会&#9312;を開催しました（2021年12月27日）</a></li>-->
            <!--<li><a href="21/1227_01ademand.html">令和4年度埼玉県食品衛生監視指導計画（案）に関する意見を提出しました（2021年12月27日）</a></li>
            <li><a href="21/1210_01meeting.html">第57回埼玉県消費者大会実行委員会と埼玉県との懇談会を開催しました（2021年12月10日）</a></li>-->
      </ul>
      <?php
if (function_exists('wp_pagenavi')) {
    wp_pagenavi(array('query' => $the_query));
}
?>
    </div>

    <!--<div class="link-button">
        <a href="allinfo.html">新着情報一覧</a>
    </div>-->

    <div class="backnumber-list">
        <form>
            <select onChange="top.location.href=value">
            <option value="#" selected>バックナンバーはこちら</option>
            <option value="/siryou/old/main/shou_dantai/21index.htm">2021年度</option>
            <option value="/siryou/old/main/shou_dantai/20index.htm">2020年度</option>
            <option value="/siryou/old/main/shou_dantai/19index.htm">2019年度</option>
            <option value="/siryou/old/main/shou_dantai/18index.htm">2018年度</option>
            <option value="/siryou/old/main/shou_dantai/17index.htm">2017年度</option>
            <option value="/siryou/old/main/shou_dantai/16index.htm">2016年度</option>
            <option value="/siryou/old/main/shou_dantai/15index.htm">2015年度</option>
            <option value="/siryou/old/main/shou_dantai/14index.htm">2014年度</option>
            <option value="/siryou/old/main/shou_dantai/13index.htm">2013年度</option>
            <option value="/siryou/old/main/shou_dantai/12index.htm">2012年度</option>
            <option value="/siryou/old/main/shou_dantai/11index.htm">2011年度</option>
            <option value="/siryou/old/main/shou_dantai/10index.htm">2010年度</option>
            <option value="/siryou/old/main/shou_dantai/09index.htm">2009年度</option>
            <option value="/siryou/old/main/shou_dantai/08index.htm">2008年度</option>
            <option value="/siryou/old/main/shou_dantai/07index.htm">2007年度</option>
            <option value="/siryou/old/main/shou_dantai/06index.htm">2006年度</option>
            <option value="/siryou/old/main/shou_dantai/05index.htm">2005年度</option>
            <option value="/siryou/old/main/shou_dantai/04index.htm">2004年度</option>
            </select>
        </form>
    </div>
</section>


<div id="a-about"></div>
<section class="about">
    <h2><span>埼玉県消費者団体連絡会</span>概要</h2>

    <h3>目的</h3>
    <div class="box-wrap">
        <div class="box">
            <p>本会は消費者のくらしと健康、権利を守るため、生活の各分野における諸団体が 相互に緊密な連絡をとり、連帯を強めて、埼玉の消費者運動を発展させることを 目的とします。</p>
        </div>
    </div>

    <h3>課題</h3>
    <div class="box-wrap">
        <div class="box">
            <p>本会の運営規約第２条の目的を達成するために、主として次の課題に取り組みます。</p>
            <ol class="ol-number">
                <li>消費者の権利に関わる問題</li>
                <li>食の安全ならびに有害・欠陥商品等に関わる問題</li>
                <li>物価・税金に関わる問題</li>
                <li>環境に関わる問題</li>
                <li>福祉・社会保障に関わる問題</li>
                <li>消費者行政に関わる問題</li>
                <li>その他、生活に関する重要問題</li>
            </ol>
            <p>以上について、調査・学習・研究・情報交換ならびに、必要な共同行動を行います。</p>
        </div>
    </div>

    <h3>参加団体</h3>
    <div class="box-wrap">
        <div class="box">
            <p>本会は目的、課題に賛同する諸団体で構成しています。<br>現在の加入団体は、埼玉県地域婦人会連合会、埼玉公団住宅自治会協議会、埼玉母親大会連絡会、新日本婦人の会埼玉県本部、埼玉県生活協同組合連合会、さいたま市消費者団体連絡会の6団体です。本会への加入は幹事会（毎月開催）で決定していますので、希望される団体は連絡ください。</p>
        </div>
    </div>

    <h3>運営</h3>
    <div class="box-wrap">
        <div class="box">
            <p>本会の運営機関として幹事会をおきます。<br>幹事会は参加団体の代表をもって構成し、原則として全員一致によって決定します。</p>
        </div>
    </div>

    <h3>会費等</h3>
    <div class="box-wrap">
        <div class="box">
            <p>本会の参加団体は年会費（１口1,000円、県域団体7口以上、市町村域団体3口以）を納入し、団体ごとの会費金額は、幹事会で決定します。<br>尚、特別行事等の費用は、必要に応じて分担します。</p>
        </div>
    </div>

    <h3>連絡会員の制度</h3>
    <div class="box-wrap">
        <div class="box">
            <p>消費者団体および個人で、本会との常時連絡を希望する組織は幹事会の承認を得て、 連絡会員として登録します。連絡会員団体の代表および個人は本会の幹事会に出席し、意見を述べることができます。連絡会員は、年間連絡費2,000円を納入します。</p>
        </div>
    </div>

    <h3>2022年度の活動方針</h3>
    <div class="box-wrap">
        <div class="box">
            <ol class="ol-number">
                <li>SDGsがめざす「誰ひとり取り残さない」持続可能な社会の実現に向けて、地域での課題解決と地域社会づくりに参加します。</li>
                <li>第58回埼玉県消費者大会の成功をめざします。</li>
                <li>誰もが安心してくらし続けられる地域社会の実現のために、食の安全・安心、環境、平和、健康、地域コミュニティづくりなどくらしからのさまざまな課題について知り、学び、取り組みをすすめます。</li>
                <li>消費者市民社会の実現のために、消費者にかかわる課題の学習をすすめ、自ら考え行動する消費者として、要望、意見を発信します。</li>
                <li>ジェンダー平等や多様な人々の共生、あらゆる活動の前提となる平和について、互いに認め合いながら、行政やさまざまな団体と連携・協力します。</li>
                <li>埼玉県消費生活課との懇談を実施し、消費者団体の現状や課題の共有をすすめます。</li>
                <li>つながりを絶やさないために、デジタルも活用したコミュニケーションを広げ、県内の消費者団体の交流を促進します。</li>
                <li>コロナ禍での新しい生活様式を取り入れた学習や交流をすすめます。</li>
            </ol>
            <div class="secretary">
                <h4>幹事団体<span>（2022年4月現在）</span></h4>
                <p>埼玉県地域婦人会連合会､新日本婦人の会埼玉県本部、埼玉県生活協同組合連合会、埼玉母親大会連絡会、埼玉公団住宅自治会協議会、さいたま市消費者団体連絡会</p>
            </div>
        </div>
    </div>

    <p class="right">以上</p>
</section>

<footer>
    <div class="footer-info">
        <p class="txt1">埼玉県消費者団体連絡会</p>
        <p class="address">〒330-0064<br>埼玉県さいたま市浦和区岸町7-11-5<br>埼玉県生活協同組合連合会内</p>
    </div>
</footer>
<div id="pageTop"><img src="<?php echo get_template_directory_uri(); ?>/siryou/old/main/shou_dantai/img/pagetop.svg" alt="ページトップへ"></div>






<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/common.js"></script>
</body>
</html>
