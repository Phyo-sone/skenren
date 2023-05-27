function init() {
	setGlobalMenu();
	setSideMenu();
	setImageToggle();
	goTop();
}

function setGlobalMenu() {

	var menu_imgs = $('div#gmenu ul li a img');
	
	var ii = 0;
	var menu_id = '';

	for(ii=0; ii<menu_imgs.length; ii++) {

		menu_id = $(menu_imgs[ii]).parent().parent().attr('id');
		
		if($('body.' + menu_id.replace('gmenu_', '')).length == 1) {
			imgOv($(menu_imgs[ii]));

		}else {

			$(menu_imgs[ii]).hover(
				function () {
				 	imgOv($(this));
				},
				function () {
					imgOut($(this));
				}
			);
		}
	}
}


/* smenuの色 */

function setSideMenu() {
		var smenu_lis = $('div#smenu ul li');
		var smenu_name = '';
		var length = 0;
		var ii=0;
		
		//smenu
		length = $(smenu_lis).length;
		for(ii=0; ii<length; ii++) {
			smenu_name = (($(smenu_lis[ii]).attr('id')).replace('smenu_', ''));
			if($('body').hasClass(smenu_name)) {
				$(smenu_lis[ii]).addClass('current');
			}
		}
}


//画像のロールオーバー
function setImageToggle() {
	$('img.' + 'ov').hover(
		function () {
		 	imgOv($(this));
		},
		function () {
			imgOut($(this));
		}
	);
}

function imgOv(img) {
	var src = img.attr('src');
	var file_type = src.substring(src.lastIndexOf('.'), src.length);
	var src_ov = src.replace(file_type, '_ov' + file_type);
	img.attr('src', src_ov);
}

function imgOut(img) {
	var src = img.attr('src');
	var file_type = src.substring(src.lastIndexOf('.'), src.length);
	var src_out = src.replace('_ov' + file_type, file_type);
	img.attr('src', src_out);
}

// トップに戻るボタンの表示
function goTop() {
	//スクロールしてトップ
	$("#go_top").on("click", function () {
		$("body,html").animate({
			scrollTop: 0
		}, 500);
		return false;
	});
}