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
    {{--Nội dung hot gồm tin tuyển dụng hot và nhà tuyển dụng hot--}}
    <div class="content-hot">
        <div class="list-hot-work">
            <h4 class="title_sign"><span class="line_vertical"></span>TIN TUYẾN DỤNG HOT</h4>
            <div id="bigPic">
                <img src="{{Asset('assets/images/1.jpg')}}" alt=""/>
                <img src="{{Asset('assets/images/2.jpg')}}" alt=""/>
                <img src="{{Asset('assets/images/3.jpg')}}" alt=""/>
                <img src="{{Asset('assets/images/4.jpg')}}" alt=""/>
                <img src="{{Asset('assets/images/5.jpg')}}" alt=""/>
            </div>

            <ul id="thumbs">
                <li class='active' rel='1'><img src="{{Asset('assets/images/1.jpg')}}" alt=""/></li>
                <li rel='2'><img src="{{Asset('assets/images/2.jpg')}}" alt=""/></li>
                <li rel='3'><img src="{{Asset('assets/images/3.jpg')}}" alt=""/></li>
                <li rel='4'><img src="{{Asset('assets/images/4.jpg')}}" alt=""/></li>
                <li rel='5' style="float: right"><img src="{{Asset('assets/images/5.jpg')}}" alt=""/></li>
            </ul>
        </div>
        <div class="list-hot-ntd">
            <h4 class="title_sign"><span class="line_vertical"></span>NHÀ TUYẾN DỤNG HOT</h4>
        </div>
    </div>
    <div class="horizontal-line"></div>
    {{--Công việc mới nhất, lấy khoảng 20 công việc mới nhất--}}
    <div class="list-new-work">
        <div class="title-section"><a href="#">CÔNG VIỆC MỚI</a></div>
        <div class="new-work-left">
            @for( $i = 0; $i < 5; $i++)
                <div class="item-work">
                    <a class="title-work" href="{{$linkWorks[$i]}}">{{$new_works[$i]->TenViec}}</a><br>
                    <a class="company-name" href="./nhatuyendung/{{$linkCompanies[$i]}}">{{$new_works[$i]->TenNTD}}</a>
                    <hr>
                </div>
            @endfor
        </div>
        <div class="new-work-right">
            @for( $j = 5; $j < 10; $j++)
                <div class="item-work">
                    <a class="title-work" href="#">{{$new_works[$j]->TenViec}}</a><br>
                    <a class="company-name" href="#">{{$new_works[$j]->TenNTD}}</a>
                    <hr>
                </div>
            @endfor
        </div>
        <div style="clear: both; width: 100%">
            <a class="btn-more-list" href="#">
                <span class="icon_more"></span>XEM THÊM VIỆC LÀM MỚI!
            </a>
        </div>
    </div>
    <div class="horizontal-line"></div>
    <div class="list-new-work">
        <div class="title-section-field"><a href="#">VIỆC THEO NGÀNH NGHỀ</a></div>
        <div class="left-section-field">
            Bán Hàng
        </div>
        <div class="center-section-field">
            Công nghệ thông tin
        </div>

        <div class="right-section-field">
            Kinh doanh
        </div>

    </div>
    <script type="text/javascript">
        var currentImage;
        var currentIndex = -1;
        var interval;
        function showImage(index) {
            index;
            if (index < $('#bigPic img').length) {

                var indexImage = $('#bigPic img')[index];
                if (currentImage) {
                    if (currentImage != indexImage) {
                        $(currentImage).css('z-index', 2);
                        clearTimeout(myTimer);
                        $(currentImage).fadeOut(250, function () {
                            myTimer = setTimeout("showNext()", 3000);
                            $(this).css({'display': 'none', 'z-index': 1})
                        });
                    }
                }
                $(indexImage).css({'display': 'block', 'opacity': 1});
                currentImage = indexImage;
                currentIndex = index;
                $('#thumbs li').removeClass('active');
                $($('#thumbs li')[index]).addClass('active');
            }
        }

        function showNext() {
            var len = $('#bigPic img').length;
            var next = currentIndex < (len - 1) ? currentIndex + 1 : 0;
            showImage(next);
        }

        var myTimer;

        $(document).ready(function () {
            myTimer = setTimeout("showNext()", 3000);
            showNext(); //loads first image
            $('#thumbs li').bind('click', function (e) {
                var count = $(this).attr('rel');
                count--;
                showImage(parseInt(count));
            });
        });
    </script>

@stop