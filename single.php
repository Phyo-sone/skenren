<?php
/*
Template Name: singleテンプレート
*/
if ( in_category('shoudan') ) {
include(TEMPLATEPATH . '/single-shoudan.php');
}else {
include(TEMPLATEPATH . '/single-theme.php');
}
?>