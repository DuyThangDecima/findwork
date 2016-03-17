@extends('template')
@section('title','Trang chủ')


@section('add_account')
        <!-- Hiển thị cả đăng nhập và đăng ký-->
<ul style="float: right">
    <li style="overflow: hidden">
        <a href="#" onclick="openSignin()" class="navtigation_signin">
            <div class="icon_signin"></div>
            <div class="name_signin">Đăng ký</div>
        </a>
    </li>
    <li style="overflow: hidden">
        <a href="#" onclick="openLogin()" class="navtigation_login">
            <div class="icon_login"></div>
            <div class="name_login">Đăng nhập</div>
        </a>
    </li>
</ul>
@stop

@section('login_frame')
<div class="container-fw">
    <div id="login_frame" style="display: none">
        <div class="overlay">
            <form id="login_form" action="{{Asset("login")}}" >
                <div class="login_box">
                    <div align="right"><img style="padding-right:5px; padding-top:5px; cursor: pointer;"
                                            src="{{Asset('assets/images/icon_close_login.gif')}}" onClick="closeLogin()"></div>
                    <h3 align="center">Đăng Nhập</h3>
                    <table class="login_table">
                        <tr>
                            <td>Email</td>
                            <td ><input type="email" id="email" name="email"><br></td>
                        </tr>
                        <tr>
                            <td>Mật khẩu</td>
                            <td><input type="password" id="password" name="password"></td>
                        </tr>
                        <tr>
                        </tr>
                    </table>
                    <div align="center"><input type="submit" id = "submit" name="submit" value="Đăng Nhập" class="login_button"></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div id="signin_frame" style="display: none">
        <div class="overlay">
            <div class="login_box">
                <div align="right"><img style="padding-right:5px; padding-top:5px; cursor: pointer;"
                                        src="{{Asset('assets/images/icon_close_login.gif')}}" onClick="closeSignin()"></div>
                <h3 align="center">Đăng Ký</h3>
                <table class="login_table">
                    <tr >
                        <td style="padding-left: 90px; margin-left: auto; margin-right: auto">
                            <a href="./dangkyntv">
                                <div  class="navtigation_ntv">
                                    <div class="icon_ntv" style="float: left"></div>
                                    <div class="name_ntv" style="float: left;line-height: 40px">Đăng ký người tìm việc</div>
                                </div>
                                {{--<div class="name_ntv">Người tìm việc</div>--}}
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-left:90px;margin-left: auto; margin-right: auto">
                            <a href="./dangkyntd">
                                <div  class="navtigation_ntd">
                                    <div class="icon_ntd" style="float: left"></div>
                                    <div class="name_ntd" style="float: left;line-height: 40px">Đăng ký nhà tuyển dụng</div>
                                </div>
                                {{--<div class="name_ntv">Người tìm việc</div>--}}
                            </a>
                        </td>
                    </tr>
                    <tr>
                    </tr>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#login_form").validate({
        rules:{
            email:{
                required:true,
                email:true
            }
            ,password:{
                required:true
            }
        }
        ,messages:{
            email:{
                required:"Bạn phải nhập email",
                email:"Email không đúng định dạng"
            },
            password:{
                required:"Bạn phải nhập mật khẩu"
            }
        }
    });
</script>
@stop