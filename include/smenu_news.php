<p id="cat_ttl">活動のご紹介</p>




<ul>


<?php
  // カテゴリーを取得する
  $categories = get_categories(array(
    'hide_empty' => 0, // 投稿がないカテゴリーを含める
  ));

  foreach($categories as $category) {
    // カテゴリーのリンクを作成する
    $category_link = get_category_link($category->term_id);
    // カテゴリー名を表示する
    echo '<li><a href="' . esc_url($category_link) . '">' . $category->name  . '</a></li>';
  }
?>
</ul>
	<!-- <li id="smenu_activity"><a href="<?php echo get_template_directory_uri(); ?>/04_news/activity.html">県連活動</a></li>
	<li id="smenu_welfare"><a href="<?php echo get_template_directory_uri(); ?>/04_news/welfare.html">福祉助け合い</a></li>
	<li id="smenu_peace"><a href="<?php echo get_template_directory_uri(); ?>/04_news/peace.html">平和</a></li>
	<li id="smenu_consumer"><a href="<?php echo get_template_directory_uri(); ?>/04_news/consumer.html">消費者力</a></li>
	<li id="smenu_environment"><a href="<?php echo get_template_directory_uri(); ?>/04_news/environment.html">環境・エネルギー</a></li>
	<li id="smenu_food"><a href="<?php echo get_template_directory_uri(); ?>/04_news/food.html">食の安全・安心</a></li>
	<li id="smenu_prevention"><a href="<?php echo get_template_directory_uri(); ?>/04_news/prevention.html">防災・減災</a></li>
	<li id="smenu_reconstruction"><a href="<?php echo get_template_directory_uri(); ?>/04_news/reconstruction.html">災害復興支援</a></li>
	<li id="smenu_cooperation"><a href="<?php echo get_template_directory_uri(); ?>/04_news/cooperation.html">協同組合連携</a></li>
	<li id="smenu_area"><a href="<?php echo get_template_directory_uri(); ?>/04_news/area.html">地域社会づくり</a></li> -->

