/*
 *
 * - PopojiCMS Javascript
 *
 * - File : admin_javascript.js
 * - Version : 1.0
 * - Author : Author Name
 * - License : MIT License
 *
 *
 * Ini adalah file utama javascript PopojiCMS yang memuat semua javascript di halaman video.
 * This is a main javascript file from PopojiCMS which contains all javascript in video page.
 *
*/

$(document).ready(function() {
	$('#table-komik').buildtable('route.php?mod=komik&act=datatable');
});