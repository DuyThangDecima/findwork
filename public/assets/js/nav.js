
// hide, show button-menu khi resize man hinh
$(document).ready(function() {
	function checkWidth() {
		var windowWidth = $(window).width();
		if (windowWidth >= 860) {
			$(".btn-menu").hide();
			// $(".main-nav").show();
		} else {
			$(".btn-menu").show();
			// $(".main-nav").hide();
		}
	}
	checkWidth();
	$().resize(checkWidth);
});

function closeLogin(){
	document.getElementById('login_frame').innerHTML = '';
}

function openLogin(){
	var box_login = '<div id="overlay">    <form>'+
		'<div class="login_box">'+
		'<div align="right"><img style="padding-right:5px; padding-top:5px; cursor: pointer;" src="image/icon_close_login.gif" onClick="closeLogin()"></div>'+
		'<h3 align="center">Đăng Nhập</h3>'+
		'<table class="login_table">'+
		'<tr>'+
		'<td>Tên tài khoản</td>'+
		'<td><input type="text"></td>'+
		'</tr>'+

		'<tr>'+
		'<td>Mật khẩu</td>'+
		'<td><input type="password"></td>'+
		'</tr>'+
		'<tr>'+
		'</tr>'+
		'</table>'+
		'<div align="center"><input type="submit" value="Đăng Nhập" class="login_button"></button>'+
		'</div>'+
		'</div>'+
		'</form></div>';
	document.getElementById("login_frame").innerHTML = box_login;
}
