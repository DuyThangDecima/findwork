<html>
<head>
    <title>@yield('title')</title>
    <script src="{{Asset('assets/js/jquery-2.2.1.min.js')}}"></script>

    <script src="{{Asset('assets/js/jquery-validation/jquery.validate.js')}}"></script>
    <script src="{{Asset('assets/js/jssor.slider.mini.js')}}"></script>
    <script src="{{Asset('assets/js/jssor.slider.min.js')}}"></script>
    <script src="{{Asset('assets/js/jssor.slider.debug.js')}}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{Asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{Asset('assets/css/nav.css')}}">
    <link rel="stylesheet" href="{{Asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{Asset('assets/css/slide.css')}}">

    <script type="text/javascript">
        //        function openLogin(){
        //            $("#login_frame").show();
        //        }
        //        function closeLogin(){
        //            $("#login_frame").hide();
        //
        //        }

        function showListJob() {
            document.getElementById("dropdown-job").classList.toggle("show");
        }
        function showListProvince() {
            document.getElementById("dropdown-province").classList.toggle("show");
        }


        // Close the dropdown if the user clicks outside of it
        window.onclick = function (e) {
            if (!e.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var d = 0; d < dropdowns.length; d++) {
                    var openDropdown = dropdowns[d];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }

        function openLogin() {
            $("#login_frame").show();}
        function closeLogin() {
            //        $("#login_frame").hide();
            $("#login_frame").hide();
        }
        function openSignin() {
            $("#signin_frame").show();}
        function closeSignin() {
            //        $("#login_frame").hide();
            $("#signin_frame").hide();
        }
    </script>

</head>
<body>

<header>
    <!-- 1080px -->
    <div class="container-fw">
        <!-- 300px -->
        <a href="./homepage" class="logo">
            <img src="{{Asset('assets/images/logo.png')}}">
            TÌM VIỆC ONLINE
        </a>
        <!-- 600px -->
        <div class="search">
            <form>
                <input id="input_search" type="text" placeholder="Nhập nội dung cần tìm">
                <button type="submit" class="btn-submit-search"></button>
                <div class="dropdown" style="margin-right: 3px;position:absolute; top: 0;right: 33px; z-index: 10">
                    <a href="javascript:void(0)" class="dropbtn" id="btn_choose_province"
                       onclick="showListProvince()">Chọn tỉnh thành</a>
                    <div class="dropdown-content" id="dropdown-province">
                        <a href="#">Hà Nội</a>
                        <a href="#">Hồ Chí Minh</a>
                        <a href="#">An Giang</a>
                        <a href="#">Bà Rịa - Vũng Tàu</a>
                        <a href="#">Bắc Giang</a>
                        <a href="#">Bắc Kạn</a>
                        <a href="#">Bạc Liêu</a>
                        <a href="#">Bắc Ninh</a>
                        <a href="#">Bến Tre</a>
                        <a href="#">Bình Định</a>
                        <a href="#">Bình Dương</a>
                        <a href="#">Bình Phước</a>
                        <a href="#">Bình Thuận</a>
                        <a href="#">Cà Mau</a>
                        <a href="#">Cao Bằng</a>
                        <a href="#">Đắk Lắk</a>
                        <a href="#">Đắk Nông</a>
                        <a href="#">Điện Biên</a>
                        <a href="#">Đồng Nai</a>
                        <a href="#">Đồng Tháp</a>
                        <a href="#">Gia Lai</a>
                        <a href="#">Hà Giang</a>
                    </div>
                </div>
                <script>
                    var dropdown_province = document.getElementById('dropdown-province');
                    var item_dropdown_province = dropdown_province.getElementsByTagName("a");
                    for (var i = 0; i < item_dropdown_province.length; i++) {
                        item_dropdown_province[i].addEventListener("click", function (e) {
                            var itemValue = e.target.childNodes[0].nodeValue;
                            document.getElementById("btn_choose_province").innerHTML = itemValue;
                        })
                    }
                </script>
                <div class="dropdown" style="margin-right: 3px;position:absolute; top: 0;right: 183px; z-index: 10">
                    <a href="javascript:void(0)" class="dropbtn" style=";"
                       id="btn_choose_job" onclick="showListJob()"
                       type="button">Chọn ngành</a>
                    <div class="dropdown-content" id="dropdown-job">
                        <a href="javascript:void(0)" onClick=" changeText()">Bán hàng</a>
                        <a href="javascript:void(0)">Tư vấn bảo hiểm</a>
                        <a href="javascript:void(0)">Bất động sản</a>
                        <a href="#">Biên dịch, phiên dịch</a>
                        <a href="#">Bưu chính viễn thông></a>
                        <a href="#">Cơ khĩ/Kỹ thuật ứng dụng</a>
                        <a href="#">Dầu khí/Địa chất</a>
                        <a href="#">Dệt may</a>
                        <a href="#">Bảo vệ/Vệ sĩ/An ninh</a>
                        <a href="#">Chăm sóc khách hàng</a>
                    </div>
                </div>
                <script>
                    var dropdown_job = document.getElementById('dropdown-job');
                    var item_dropdown_job = dropdown_job.getElementsByTagName("a");
                    for (var i = 0; i < item_dropdown_job.length; i++) {
                        item_dropdown_job[i].addEventListener("click", function (e) {
                            var itemValue = e.target.childNodes[0].nodeValue;
                            document.getElementById("btn_choose_job").innerHTML = itemValue;
                        })
                    }
                </script>
            </form>
        </div>
    </div>
</header>
{{--<div style="clear: both">--}}
{{--abcasndjkasd<br>--}}
{{--asndjas--}}
{{--</div>--}}
{{--<div>--}}

{{--</div>--}}
<nav>
    <div class="container-fw">
        <ul style="float: left;overflow: hidden">
            <li style="overflow: hidden">
                <a href="/nguoitimviec" class="navtigation_ntv">
                    <div class="icon_ntv"></div>
                    <div class="name_ntv">Người tìm việc</div>
                </a>
            </li>
            <li style="overflow: hidden">
                <a href="/nguoitimviec" class="navtigation_ntd">
                    <div class="icon_ntd"></div>
                    <div class="name_ntd">Nhà tuyển dụng</div>
                </a>
            </li>
            {{--Khi đăng nhập xong thì thêm các trường này vào--}}
        </ul>
        <div style="float: right">
            @yield('add_account')
        </div>

    </div>
</nav>

{{--<hr style="width:100%;margin:0px;height:2px;padding: 0">--}}

<!-- Hiển thị form đăng nhập ở đây trong homepage-->
@yield('login_frame')
        <!-- Container -->
<div style="width: 100%;background-color: #EEEEEE">
    <div class="container-fw" style="background-color: white; padding-top: 0">
        @yield('content')
    </div>
</div>

<!-- Footer -->
<div style="clear:both;width: 100%;background-color: #222428">
    <div class="container-fw">
        <div class="footer">
            <div style="float: left">
                <a href="./homepage" class="logo">
                    <img src="{{Asset('assets/images/logo.png')}}">
                    TÌM VIỆC ONLINE
                </a>
                <br>
                <img class="icon_bocongthuong">
            </div>
            <div style="float: left; color: white; height: 100px; line-height: 20px; padding-top:25px; padding-bottom: 30px;max-width: 420px">

                Trụ sở: Đại học Bách Khoa Hà Nội <br>
                Địa chỉ: Số 1 Đại Cồ Việt, Quận Hai Bà Trưng, Thành phố Hà Nội<br>
                Điện thoại: 01674255050 <br>
                Email: duythangsvbk@gmail.com

            </div>
            <div style="float: right; color: white;padding-top: 25px" ;>
                Theo dõi Tìm việc online <br>
                <a class="icon_twitter" href="https://twitter.com"></a>
                <a class="icon_google" href="https://plus.google.com"></a>
                <a class="icon_fb" href="https://facebook.com"></a>

            </div>
        </div>
    </div>
</div>

</body>
</html>