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
                    <div class="login_box" align="center">
                        <div align="right"><img style="padding-right:5px; padding-top:5px; cursor: pointer;"
                                                src="{{Asset('assets/images/icon_close_login.gif')}}" onClick="closeLogin()"></div>
                        <h3 align="center">Đăng Nhập</h3>
                        <table class="login_table">
                            <tr>
                                <td>Email</td>
                                <td ><input type="email" id="email" name="email"  class="input-custom"><br></td>
                            </tr>
                            <tr>
                                <td>Mật khẩu</td>
                                <td><input type="password" id="password" name="password" class="input-custom"></td>
                            </tr>
                            <tr>
                            </tr>
                        </table>
                        <div align="center" ><input type="submit" id = "submit" name="submit" value="Đăng Nhập" class="login_button">
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
@section('content')
    <div style="width: 100%;background-color: #EEEEEE; padding: 0;margin: 0">
        <div class="container-fw" style="background-color: white">
            <form id="form-sign" style="margin: 0;padding-bottom: 20px  ">
                <div class="line-grey"></div>
                <h3 align="center" style="color: #4a1a67; font-weight: 600">Đăng Ký Người Tìm Việc</h3>
                <h4 class="title_sign"><span class="line_vertical"></span>Thông tin tài khoản</h4>
                <table class="table-sign">
                    <tr>
                        <td class="first">
                            Email:
                            <label style="font-size: 120%;float: right; margin-right: 5px">*</label>
                        </td>
                        <td class="second">
                            <input type="email" id="email" name="email" class="input-custom">
                        </td>
                    </tr>
                    <tr>
                        <td class="first">
                            Mật khẩu:
                            <label style="font-size: 120%;float: right; margin-right: 5px">*</label>
                        </td>
                        <td class="second">
                            <input type="password" id="password" name="password" class="input-custom">
                        </td>
                    </tr>
                    <tr>
                        <td class="first">
                            Nhập lại Mật khẩu:
                            <label style="font-size: 120%;float: right; margin-right: 5px">*</label>
                        </td>
                        <td class="second">
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                   class="input-custom">
                        </td>
                    </tr>
                </table>
                <h4 class="title_sign"><span class="line_vertical"></span>Thông tin cá nhân</h4>
                <table class="table-sign">
                    <tr>
                        <td class="first">
                            Họ tên:
                            <label style="font-size: 120%;float: right; margin-right: 5px">*</label>
                        </td>
                        <td class="second">
                            <input name="inputname" type="text" class="input-custom" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="first">
                            Giới tính:
                            <label style="font-size: 120%;float: right; margin-right: 5px">*</label>
                        </td>
                        <td class="second">
                            <select class="minimal" name="selectsex" style="width: 269px" required>
                                <option selected disabled>Chọn giới tính</option>
                                <option value="Nam">Nam</option>
                                <option value="Nu">Nữ</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="first">
                            Tỉnh/Thành Phố:
                            <label style="font-size: 120%;float: right; margin-right: 5px">*</label>
                        </td>
                        <td class="second">
                            <select class="minimal" name="province" style="width: 269px" required>
                                <option selected disabled>Chọn tỉnh thành</option>
                                <option>Hà Nội</option>
                                <option>TP HCM</option>
                                <option>An Giang</option>
                                <option>Bà Rịa - Vũng Tàu</option>
                                <option>Bắc Giang</option>
                                <option>Bắc Kạn</option>
                                <option>Bạc Liêu</option>
                                <option>Bắc Ninh</option>
                                <option>Bến Tre</option>
                                <option>Bình Định</option>
                                <option>Bình Dương</option>
                                <option>Bình Phước</option>
                                <option>Bình Thuận</option>
                                <option>Cà Mau</option>
                                <option>Cao Bằng</option>
                                <option>Đắk Lắk</option>
                                <option>Đắk Nông</option>
                                <option>Điện Biên</option>
                                <option>Đồng Nai</option>
                                <option>Đồng Tháp</option>
                                <option>Gia Lai</option>
                                <option>Hà Giang</option>
                                <option>Hà Nam</option>
                                <option>Hà Tĩnh</option>
                                <option>Hải Dương</option>
                                <option>Hậu Giang</option>
                                <option>Hòa Bình</option>
                                <option>Hưng Yên</option>
                                <option>Khánh Hòa</option>
                                <option>Kiên Giang</option>
                                <option>Kon Tum</option>
                                <option>Lai Châu</option>
                                <option>Lâm Đồng</option>
                                <option>Lạng Sơn</option>
                                <option>Lào Cai</option>
                                <option>Long An</option>
                                <option>Nam Định</option>
                                <option>Nghệ An</option>
                                <option>Ninh Bình</option>
                                <option>Ninh Thuận</option>
                                <option>Phú Thọ</option>
                                .
                                <option>Quảng Bình</option>
                                <option>Quảng Nam</option>
                                <option>Quảng Ngãi</option>
                                <option>Quảng Ninh</option>
                                <option>Quảng Trị</option>
                                <option>Sóc Trăng</option>
                                <option>Sơn La</option>
                                <option>Tây Ninh</option>
                                <option>Thái Bình</option>
                                <option>Thái Nguyên</option>
                                <option>Thanh Hóa</option>
                                <option>Thừa Thiên Huế</option>
                                <option>Tiền Giang</option>
                                <option>Trà Vinh</option>
                                <option>Tuyên Quang</option>
                                <option>Vĩnh Long</option>
                                <option>Vĩnh Phúc</option>
                                <option>Yên Bái</option>
                                <option>Phú Yên Cần Thơ</option>
                                <option>Đà Nẵng</option>
                                <option>Hải Phòng</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td class="first">
                            Địa chỉ:
                            <label style="font-size: 120%;float: right; margin-right: 5px">*</label>
                        </td>
                        <td class="second">
                            <input type="text" id="address" name="address" class="input-custom" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="first">
                            Ngày sinh:
                            <label style="font-size: 120%;float: right; margin-right: 5px">*</label>
                        </td>
                        <td class="second">
                            <select class="minimal" name="date"style="width: 110px" required>
                                <option selected disabled>Ngày</option>
                                <script>
                                    for(var i = 1; i <= 31; i++){
                                        content = "<option>"+i+"</option>";
                                        document.write(content);
                                    }
                                </script>
                            </select>
                            <select class="minimal" name="month" style="width: 120px" required>
                                <option selected disabled>Tháng</option>
                                <script>
                                    for(var i = 1; i <= 12; i++){
                                        content = "<option>"+i+"</option>";
                                        document.write(content);
                                    }
                                </script>
                            </select>

                            <select class="minimal" name="year"style="width: 110px" required name="date">
                                <option selected disabled>Năm</option>
                                <script>
                                    for(var i = 2000; i >1950; i--){
                                        content = "<option> Năm "+i+"</option>";
                                        document.write(content);
                                    }
                                </script>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="first">
                            Số điện thoại:
                            <label style="font-size: 120%;float: right; margin-right: 5px">*</label>
                        </td>
                        <td class="second">
                            <input type="text" id="phonenumber" name="phonenumber" class="input-custom" required>
                        </td>
                    </tr>

                </table>
                <div align="center"><input type="submit" id="submit" name="submit" value="Đăng Ký" class="login_button">
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        $("#form-sign").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                }
                , password: {
                    required: true
                }
                , password_confirmation: {
                    equalTo: "#password"
                }
                , nameinput: {
                    require: true
                }
            }
            , messages: {
                email: {
                    required: "Bạn chưa nhập",
                    email: "Email không đúng định dạng"
                },
                password: {
                    required: "Bạn chưa nhập"
                },
                password_confirmation: {
                    equalTo: "Mật khẩu không khớp"
                },
                inputname: {
                    required: "Bạn chưa nhập"
                },
                selectsex: {
                    required: "Bạn chưa chọn"
                },
                province:{
                    required: "Bạn chưa chọn"
                },
                address: {
                    required: "Bạn chưa nhập"
                },
                phonenumber:{
                    required: "Bạn chưa nhập"
                },
                date:{
                    required: "*"
                },
                month:{
                    required: "*"
                },
                year:{
                    required: "Bạn chưa chọn"
                }

            }
        });
    </script>
@stop
