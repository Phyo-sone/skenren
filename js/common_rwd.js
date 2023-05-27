//�u���C�N�|�C���g�����ݒ�
var breakPoint = { sp: 768 };
var deviceClass = "";	// �f�o�C�X�敪�iPC/SP�j
var winWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;	// �E�B���h�E�̕��i�X�N���[���o�[���܂܂Ȃ��j
var goTopML = $("#footer_cont .wrap").width() - 62;

// PC/SP�̕\���ؑ֊֘A
setDeviceClass();	// �f�o�C�X�敪�̐ݒ�
setViewPort();		// �r���[�|�[�g�̐ݒ�


//�u���C�N�|�C���g�ɂ���āA�y�[�W�̍ēǂݍ���
$(window).on("resize", function(){
	goTopML = $("#footer_cont .wrap").width() - 62;
	$("#page_top").css({"margin-left": goTopML});
	// �E�B���h�E���̍Đݒ�
	winWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
	if((winWidth < breakPoint.sp) && (deviceClass == 'pc') || (winWidth >= breakPoint.sp) && (deviceClass == 'sp')) {
		location.href = location.href;
	}

});


// ���p�f�o�C�X�̐ݒ�@�E�B���h�E���ɉ����ė��p�f�o�C�X�̋敪�iPC/SP�j��ݒ肵�܂��B
function setDeviceClass() {
	// PC�\���̏ꍇ
	if (winWidth >= breakPoint.sp) {
		deviceClass = 'pc';
		// �X�}�z�i�c�E���j�\���̏ꍇ
	}else {
		deviceClass = 'sp';
	}
}


// �r���[�|�[�g�̐ݒ�
function setViewPort() {
	// PC�\���̏ꍇ
	if (deviceClass === 'pc') {
		$('meta[name=viewport]').attr('content','width=1000');
	// �X�}�z�i�c�E���j�\���̏ꍇ
	}else {
		$('meta[name=viewport]').attr('content','width=device-width,initial-scale=1.0,minimum-scale=1.0,shrink-to-fit=no');
	}
}




// �h�L�������g�ǂݍ��݌�Ɏ��s
$(document).ready(function() {
	
	//--------------------------------------------
	// PC/SP���ʂ̏���������
	//--------------------------------------------
	
	goAnchor();
	goTop();
	
	
	//--------------------------------------------
	// SP�̏���������
	//--------------------------------------------
	if(deviceClass === 'sp') {
		
		// SP�n���o�[�K�[���j���[�ݒ�
		setSpNnavi();
		spTelLink();
		
		//�摜�؂�ւ�
		$("img.switch").each(function() {
			var src = $(this).attr("src");
			var file_type = src.substring(src.lastIndexOf("."), src.length);
			var src_ov = src.replace(file_type, "_sp" + file_type);
			$(this).attr("src", src_ov);
		});
		
	//--------------------------------------------
	// PC�̏���������
	//--------------------------------------------
	}else {
		
		// �摜�̃��[���I�[�o�[�ݒ�
		setImageToggle();
		setPcNnavi();
		setSideMenu();
		
		
		//�摜�؂�ւ�
		$("img.switch").each(function() {
			$(this).attr("src", $(this).attr("src").replace("_sp",""));
		});
	}
});
// �h�L�������g�ǂݍ��݌�Ɏ��s end


// �摜�ǂݍ��݌�Ɏ��s
$(window).on('load', function(){
  //����
	
});
// �摜�ǂݍ��݌�Ɏ��s end





//--------------------------------------------
// PC/SP���ʂ̏���
//--------------------------------------------

// �y�[�W�������N�̃X�N���[���ݒ�
function goAnchor() {
	//�X�N���[�����ăg�b�v
	$('article a[href^="#"]').on("click", function () {
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		$("body,html").animate({scrollTop:position}, 400, "swing");
		return false;
	});
}

// �g�b�v�ɖ߂�{�^���̕\��
function goTop() {
	//�X�N���[�����ăg�b�v
	$("#go_top").on("click", function () {
		$("body,html").animate({
			scrollTop: 0
		}, 500);
		return false;
	});
}


//--------------------------------------------
// SP�̋��ʂ̏���
//--------------------------------------------

// SP�n���o�[�K�[���j���[
function setSpNnavi(){
	$('#nav_btn').bind('click', function() {
		$('#gmenu').slideToggle(200);
		$(this).toggleClass('active');
		if($(this).hasClass('active')){
			// �I�[�o�[���C�p�̗v�f��ǉ�
			$('body').append('<div class="modal-overlay"></div>');
			// �I�[�o�[���C���t�F�[�h�C��
			$('.modal-overlay').fadeIn(1000);
		}else {
			$('.modal-overlay').remove();
		}
		return false;
	});
	$('#nav_close').on('click', function(event) {
		$('nav').slideToggle(200);
		$('#nav_btn').toggleClass('active');
		$('#nav_btn p').text('MENU');
		$('.modal-overlay').remove();
		return false;
	});
}




//SP�d�b�����N
function spTelLink() {
var ua = navigator.userAgent;
	if(ua.indexOf('iPhone') > 0 && ua.indexOf('iPod') == -1 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0 ){
		$('.tel_link').each(function(){
		var str = $(this).text();
		$(this).html($('<a>').attr('href', 'tel:' + str.replace(/-/g, '')).append(str + '</a>'));
		});
	}
}






//--------------------------------------------
// PC�̋��ʂ̏���
//--------------------------------------------

//�O���[�o�����j���[�̐ݒ�
function setPcNnavi() {
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

/* smenu�̐F */
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



// �摜�̃}�E�X�I�[�o�[�A�}�E�X�A�E�g�C�x���g�̐ݒ�
function setImageToggle() {
	$('img.ov').on('mouseover', function() {
		imgOv($(this));
	});
	$('img.ov').on('mouseout', function() {
		imgOut($(this));
	});
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


