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
                <form id="login_form" action="{{Asset("login")}}">
                    <div class="login_box" align="center">
                        <div align="right"><img style="padding-right:5px; padding-top:5px; cursor: pointer;"
                                                src="{{Asset('assets/images/icon_close_login.gif')}}"
                                                onClick="closeLogin()"></div>
                        <h3 align="center">Đăng Nhập</h3>
                        <table class="login_table">
                            <tr>
                                <td>Email</td>
                                <td><input type="email" id="email" name="email" class="input-custom"><br></td>
                            </tr>
                            <tr>
                                <td>Mật khẩu</td>
                                <td><input type="password" id="password" name="password" class="input-custom"></td>
                            </tr>
                            <tr>
                            </tr>
                        </table>
                        <div align="center"><input type="submit" id="submit" name="submit" value="Đăng Nhập"
                                                   class="login_button">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div id="signin_frame" style="display: none">
            <div class="overlay">
                <div class="login_box">
                    <div align="right"><img style="padding-right:5px; padding-top:5px; cursor: pointer;"
                                            src="{{Asset('assets/images/icon_close_login.gif')}}"
                                            onClick="closeSignin()"></div>
                    <h3 align="center">Đăng Ký</h3>
                    <table class="login_table">
                        <tr>
                            <td style="padding-left: 90px; margin-left: auto; margin-right: auto">
                                <a href="./dangkyntv">
                                    <div class="navtigation_ntv">
                                        <div class="icon_ntv" style="float: left"></div>
                                        <div class="name_ntv" style="float: left;line-height: 40px">Đăng ký người tìm
                                            việc
                                        </div>
                                    </div>
                                    {{--<div class="name_ntv">Người tìm việc</div>--}}
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left:90px;margin-left: auto; margin-right: auto">
                                <a href="./dangkyntd">
                                    <div class="navtigation_ntd">
                                        <div class="icon_ntd" style="float: left"></div>
                                        <div class="name_ntd" style="float: left;line-height: 40px">Đăng ký nhà tuyển
                                            dụng
                                        </div>
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

    <script type="text/javascript">
        $("#login_form").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                }
                , password: {
                    required: true
                }
            }
            , messages: {
                email: {
                    required: "Bạn phải nhập email",
                    email: "Email không đúng định dạng"
                },
                password: {
                    required: "Bạn phải nhập mật khẩu"
                }
            }
        });
    </script>
@stop

@section('content')
    {{$companies[0]->TenNTD}}
    {{--Thông tin liên hệ--}}
    <div class="infor-item-work">
        <h4 class="title-section-item-work">THÔNG TIN LIÊN HỆ</h4>
        <p>Để xem thông tin liên hệ nhà tuyển dụng, vui lòng <a
                    style="color: #F98A20; font-weight: bold;cursor: pointer" onclick="openLogin()">ĐĂNG NHẬP</a> hoặc
            <a style="color: #F98A20;font-weight: bold;" href="./dangkyntv">ĐĂNG KÝ TÀI KHOẢN NGƯỜI TÌM VIỆC</a>/p>
    </div>
    <div class="horizontal-line"></div>

    {{--Giới thiệu về công ty--}}
    <div class="infor-item-work">
        <h1 class="title-item-work">Công ty trách nhiệm hữu hạn xxx</h1>
        <p>
            <span class="icon_place_company"></span>
            <span class="pf-28">Địa chỉ Hai bà trưng hà nội</span>
        </p>
        <p>
            <span class="icon_scale"></span>
            <span class="pf-28">Quy mô công ty: hồ sơ 12/02/2018</span>
        </p>
        <p>
            <span class="icon_phonenumber"></span>
            <span class="pf-28">Điện thoại: hồ sơ 12/02/2018</span>
        </p>
        <p>
            <span class="icon_website"></span>
            <span class="pf-28">Website: hồ sơ 12/02/2018</span>
        </p>
        <div>
            Công ty TNHH TM Sơn Dương luôn cố gắng thấu hiểu nhu cầu của quý khách, không ngừng nâng cao chất lượng phục
            vụ và coi sự hài lòng của quý khách là phần thưởng cao qúy nhất.
            Hình thành và phát triển nơi cửa ngõ của thủ đô, Công ty thương mại Sơn Dương ra đời như một sự tất yếu.
            Ngày 26 tháng 3 năm 1994, công ty chính thức ra mắt với giấy phép thành lập số: 010596266 và Tổng Giám đốc
            Nguyễn Đăng Tuấn đọc điều lệ thành lập Công ty thương mại Sơn Dương.
            Ngay từ ngày đầu thành lập, khi chưa có các công ty Liên doanh sản xuất ôtô, thì Sơn Dương đã đứng trong
            hàng ngũ những người tiên phong trong lĩnh vực kinh doanh, mua bán ôtô. Với kinh nghiệm của người đi trước,
            Sơn Dương đã tự tích luỹ cho mình những kiến thức quý báu, những hiểu biết sâu sắc về các loại xe ôtô, tâm
            lý hành khách mà bất cứ đối thủ cạnh tranh nào cũng đều phải nể phục. Phát huy điều trên, Sơn Dương tiếp tục
            mở rộng kinh doanh sang lĩnh vực Taxi. Taxi Thế Kỷ Mới của Sơn Dương ra đời từ thành qủa kinh nghiệm đó.
            Đến nay hãng Taxi Thế Kỷ Mới đã khẳng định được vị trí và thương hiêu lớn mạnh của mình trên thị trường.
            Hãng Taxi Thế Kỷ Mới tự hào là hãng Taxi phục vụ với chất lượng tốt nhất, rẻ nhất tại Việt Nam hiện nay.
            Ngoài dịch vụ Taxi, Sơn Dương còn cung cấp dịch vụ cho thuê phòng khách sạn. Sơn Dương có một hệ thống gồm
            khách sạn: khách sạn NewEra. Khách sạn của Sơn Dương vốn nổi tiếng bởi: chất lượng phục vụ tốt, giá cả cạnh
            tranh.
            Trải qua gần 20 năm hoạt động, Công ty Sơn Dương không ngừng lớn mạnh, bề thế ở mọi lĩnh vực. Để có được
            những thành công của ngày hôm nay, không chỉ là sự phấn đấu nỗ lực hết mình của Ban lãnh đạo, của toàn thể
            Cán bộ Công nhân viên mà Công ty Sơn Dương còn nhận được sự ủng hộ giúp đỡ nhiệt tình từ phía Khách hàng,
            chính quyền các cấp các ngành Trung Ương và Địa phương.
            Với phương châm phục vụ Quý Khách hàng ”Ngày càng tốt hơn”, hiện nay Công ty Sơn Dương đã khai trương thêm
            các loại xe mới vào thị trường Taxi. Bằng tất cả khả năng của mình, Công ty Sơn Dương xin cam kết phục vụ
            Quý Khách hàng một cách tốt nhất.
            Đến với chúng tôi chắc chắn các bạn sẽ được tận hưởng một phong cách kinh doanh mới, chất lượng phục vụ mới
            mà chỉ thấy ở Sơn Dương.
            CÔNG TY TNHH TM SƠN DƯƠNG XIN CHÂN THÀNH CẢM ƠN!
        </div>
    </div>
    <div class="horizontal-line"></div>

    {{--Tin tuyển dụng khác từ nhà tuyển dụng này--}}
    <div class="infor-item-work">
        <h1 class="title-item-work">Tin tuyển dụng khác từ nhà tuyển dụng này</h1>
        <div>
            <a class="btn-save-item">
                <span class="icon_save"></span>
            </a>

            <div class="fl-50percent">
                <a class="title-work" href="#">Thanh tra taxi lương CB 4tr, hỗ trợ xăng xe điện thoại</a><br>
                <a class="company-name" href="#">Công ty TNHH TM Sơn Dương</a>
            </div>

            <div class="fl-15percent">
                <span class="icon_salary-gray center-vertical"></span><br>
                <span class="al-center">5-10 triệu</span>
            </div>

            <div class="fl-15percent">
                <span class="icon_place_gray center-vertical"></span><br>
                <span class="al-center">Hà Nội</span>
            </div>

            <div class="fl-15percent">
                <span class="icon_deadline_gray center-vertical"></span><br>
                <span class="al-center">01/01/207</span>
            </div>
        </div>
    </div>
@stop