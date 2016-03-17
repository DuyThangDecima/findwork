@extends('template')
@section('title','Trang chủ')


@section('add_account')
        <!-- Hiển thị cả đăng nhập và đăng ký-->
<ul style="float: right">
    <li style="overflow: hidden">
        <a href="/dangky" class="navtigation_signin">
            <div class="icon_signin"></div>
            <div class="name_signin">Đăng ký</div>
        </a>
    </li>
    <li style="overflow: hidden">
        <a href="" onclick="openLogin" class="navtigation_login">
            <div class="icon_login"></div>
            <div class="name_login">Đăng nhập</div>
        </a>
    </li>
</ul>
@stop

@section('login_frame')
@stop
@section('content')
    <div style="width: 100%;background-color: #EEEEEE">
        <div class="container-fw" style="background-color: white">
            <form>
                <h3 align="center">Đăng Ký Người Tìm Việc</h3>
                <h4>Thông tin tài khoản</h4>
                <table class="table-sign">
                    <tr>
                        <td>
                            Email:
                        </td>
                        <td>
                            <input type="email" id="email" name="email">
                        </td>
                        </br>
                        <td>
                            Mật khẩu:
                        </td>
                        <td>
                            <input type="password" id="password" name="password">
                        </td>
                        </br>
                        <td>
                            Nhập lại Mật khẩu:
                        </td>
                        <td>
                            <input type="re-password" id="re-password" name="password">
                        </td>
                    </tr>
                </table>
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
            </form>
        </div>
    </div>
@stop
