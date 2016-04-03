<?php

Class Viec extends GeneralSeeder
{
    public $table = 'Viec';
    public $data = array(
        array(
            'MaNganh' => 49,
            'MaNTD' => 1,
            'MaViec' => 1,
            'TenViec' => 'Nhân Viên Giao Hàng Đi Làm Ngay',
            'MaMucLuong' => 3,
            'SoLuong' => 10,
            'GioiTinh' => 1, //Nam
            'MaTrinhDo' => 1,
            'MaKinhNghiem' => 1,
            'MaTinh' => 1,
            'MaHinhThuc' => 1,
            'Han' => '2016/12/14',
            'MoTa' => '-Tiếp nhận yêu cầu báo giá của khách hàng.
            -Làm báo giá, quản lý báo giá, quản lý doanh thu
            -Nhận đơn hàng, điều phối tiến độ giao hàng
            -Chăm sóc khách hàng',
            'YeuCau' => '-Excel cơ bản
            -Cẩn thận, trung thực,
            -Ngoại hình ưa nhìn  Giao tiếp tốt
             Ưu tiên có kinh nghiệm làm việc tương tự từ 1 năm trở lên',
            'QuyenLoi' => '- Mức lương, thưởng hấp dẫn, được hưởng các loại phụ cấp, chế độ nghỉ mát
            - Đầy đủ các chế độ của BHXH và các quy định của luật lao động.
            - Làm việc trong môi trường chuyên nghiệp, trẻ trung và năng động.
            - Được đào tạo các kỹ năng theo tiêu chuẩn Nhật Bản.',
        ),
        array(
            'MaNganh' => 11,
            'MaNTD' => 1,
            'MaViec' => 2,
            'TenViec' => 'Nữ Nhân Viên Văn Phòng Hỗ Trợ Kinh Doanh, Đi Làm Ngay, Công Việc Hấp Dẫn',
            'MaMucLuong' => 3,
            'SoLuong' => 10,
            'GioiTinh' => 0, //Nữ
            'MaTrinhDo' => 3,
            'MaKinhNghiem' => 1,
            'MaTinh' => 1,
            'MaHinhThuc' => 2,
            'Han' => '2016/12/14',
            'MoTa' => '-Tiếp nhận yêu cầu báo giá của khách hàng.
            -Làm báo giá, quản lý báo giá, quản lý doanh thu
            -Nhận đơn hàng, điều phối tiến độ giao hàng
            -Chăm sóc khách hàng',
            'YeuCau' => '-Excel cơ bản
            -Cẩn thận, trung thực,
            -Ngoại hình ưa nhìn  Giao tiếp tốt
             Ưu tiên có kinh nghiệm làm việc tương tự từ 1 năm trở lên',
            'QuyenLoi' => '- Mức lương, thưởng hấp dẫn, được hưởng các loại phụ cấp, chế độ nghỉ mát
            - Đầy đủ các chế độ của BHXH và các quy định của luật lao động.
            - Làm việc trong môi trường chuyên nghiệp, trẻ trung và năng động.
            - Được đào tạo các kỹ năng theo tiêu chuẩn Nhật Bản.',
        ),
        array(
            'MaNganh' => 13,
            'MaNTD' => 2,
            'MaViec' => 3,
            'TenViec' => 'Lễ Tân Khách Sạn',
            'MaMucLuong' => 3,
            'SoLuong' => 2,
            'GioiTinh' => -1, //Không yêu cầu
            'MaTrinhDo' => 4,
            'MaKinhNghiem' => 1,
            'MaTinh' => 1,
            'MaHinhThuc' => 1,
            'Han' => '2019/12/14',
            'MoTa' => '-Làm hành chính 8h sáng - 5h chiều
            -Kiểm tra và đảm bảo mọi dịch vụ từ lúc khách nhận phòng đến lúc khách rời khỏi khách sạn được thực hiện theo đúng quy trình.
            -Làm cầu nối giữa khách và khách sạn. Giải quyết các tình huống trong quyền hạn của mình. Làm thủ tục thanh toán cho khách.
            -Hoàn thành tốt công việc được giao.
            -Chi tiết công việc sẽ trao đổi cụ thể trong quá trình tuyển dụng.',
            'YeuCau' => '-Hình thức khá, đã có kinh nghiệm làm Lễ Tân khách sạn.
            -Nhanh nhẹn trung thực, cởi mở, thành thạo vi tính , biết trả lời Email.
            -Hiểu biết về lĩnh vực nhà hàng, khách sạn, du lịch.
            -Nói tiếng anh giao tiếp tốt, tuổi từ 25- 35',
            'QuyenLoi' => '-Lương chính thức trao đổi lúc phỏng vấn
            -Được miễn phí một bữa ăn trưa.',
        ),
        array(
            'MaNganh' => 6,
            'MaNTD' => 3,
            'MaViec' => 4,
            'TenViec' => 'Nhân Viên Kỹ Thuật Camera',
            'MaMucLuong' => 3,
            'SoLuong' => 7,
            'GioiTinh' => 1, //Nam
            'MaTrinhDo' => 3,
            'MaKinhNghiem' => 1,
            'MaTinh' => 1,
            'MaHinhThuc' => 2,
            'Han' => '2019/12/14',
            'MoTa' => '-Quản lý, thi công và lắp đặt các hệ thống kỹ thuật: Điện, hệ thống điện nhẹ, Camera quan sát, bãi đỗ xe thông minh, thiết bị an ninh giám sát, báo động, chuông cửa có hình, hệ thống mạng nội bộ, mạng LAN, tổng đài điện thoại...
            -Bảo hành, sửa chữa, cài đặt, hỗ trợ kỹ thuật trực tiếp theo yêu cầu của khách hàng.
            -Nghiên cứu và thực thi các giải pháp Camera, thiết bị an ninh, thiết bị chống trộm...',
            'YeuCau' => '-Nam, có sức khỏe tốt, có laptop.
            -Kinh nghiệm: 2 năm trở lên.
            -Tốt nghiệp các Trường Đại học, Cao đẳng, Trung cấp chuyên ngành: Điện/ Điện tử viễn thông, Tự động hóa, Công nghệ thông tin.
            -Sử dụng thành thạo máy vi tính, Internet, tin học văn phòng, Autocad, phầm mềm kỹ thuật mô phỏng 3D...
            -Đọc hiểu tài liệu tiếng anh kỹ thuật chuyên ngành.
            -Kỹ năng giao tiếp, làm việc nhóm tốt.
            -Trung thực, chăm chỉ và chịu được áp lực công việc.
            -Ưu tiên ứng viên biết làm hồ sơ thanh quyết toán công trình, có kinh nghiệm lắp đặt Camera, thiết bị an ninh, hệ thống điện nhẹ, hệ thống tòa nhà, khu công nghiệp…',
            'QuyenLoi' => '-Làm việc trong môi trường năng động, chuyên nghiệp, nhiều cơ hội thăng tiến.
            -Được tham gia các khóa đào tạo về nghiệp vụ do Công Ty tổ chức.
            -Mức lương theo năng lực (Trao đổi cụ thể trong buổi phỏng vấn).
            -Được hưởng đầy đủ các chế độ theo Bộ luật lao động hiện hành và theo quy định của Công Ty.',
        ),
        array(
            'MaNganh' => 22,
            'MaNTD' => 4,
            'MaViec' => 5,
            'TenViec' => 'Nhân Viên Kinh Doanh Sản Phẩm Du Lịch',
            'MaMucLuong' => 3,
            'SoLuong' => 3,
            'GioiTinh' => -1, //Không yêu cầu
            'MaTrinhDo' => 4,
            'MaKinhNghiem' => 1,
            'MaTinh' => 1,
            'MaHinhThuc' => 2,
            'Han' => '2019/12/14',
            'MoTa' => '-Tìm kiếm khách hàng tiềm năng thông qua các biện pháp Marketing , gặp gỡ khách hàng…
            -Trả lời request của khách hàng online, email và điện thoại…
            -Tư vấn, chăm sóc khách hàng, chốt hợp đồng du lịch , vé máy bay, khách sạn, xe...
            -Xây dựng và thiết lập hệ thống khách hàng tiềm năng, khách hàng mục tiêu, lên kế hoạch thường xuyên chăm sóc định kỳ khách hàng tiềm năng, khách hàng mục tiêu để tạo doanh thu ổn định hàng tháng/quý và năm.',
            'YeuCau' => '***Kỹ năng:
            - Chăm Sóc Khách Hàng Du Lịch khách hàng cũ và mới, vì hàng năm lượng khách hàng luôn ổn định và gia tăng rất nhiều nếu chăm sóc tốt.
            ***Yêu cầu:
            - Ngoại hình khá.
            - Năng động, trung thực, ham học hỏi và cầu tiến.
            - Có kỹ năng giao tiếp tốt, tư vấn tốt.
            - Có khả năng phát triển các mối quan hệ thân thiết với hệ thống khách hàng tiềm năng.
            - Có kỹ năng về tổ chức, sắp xếp công việc.
            - Có khả năng làm việc độc lập và theo nhóm.
            - Vi tính: thành thạo vi tính văn phòng và Internet.
            - Ưu tiên người có kinh nghiệm sales 1 năm trở nên .',
            'QuyenLoi' => '+ Được hưởng cứng
            + Các chính sách hoa hồng và thưởng nóng theo doanh số, thưởng định kỳ, lễ, tết.
            + Được đào tạo, học tập trong môi trường chuyên nghiệp
            + Được hưởng đầy đủ các chế độ BHXH – BHYT – BHTN theo quy định của Nhà nước.
            + Làm việc trong một môi trường năng động có nhiều cơ hội phát triển, thăng tiến
            + Được hỗ trợ ăn trưa tại công ty
            + Được hưởng các chế độ đãi ngộ bao gồm: nghỉ lễ tết, hiếu hỷ, thăm quan, nghỉ mát (2 lần/năm), sinh nhật…',
        ),
        array(
            'MaNganh' => 41,
            'MaNTD' => 5,
            'MaViec' => 6,
            'TenViec' => 'Chỉ Huy Trưởng Công Trường',
            'MaMucLuong' => 4,
            'SoLuong' => 10,
            'GioiTinh' => 1, //Nam
            'MaTrinhDo' => 4,
            'MaKinhNghiem' => 2,
            'MaTinh' => 1,
            'MaHinhThuc' => 2,
            'Han' => '2016/8/14',
            'MoTa' => '
            1. Quản lý và theo dõi toàn bộ hoạt động và tiến độ của dự án xây dựng;
            2. Bóc tách khối lượng, lập dự toán, đấu thầu, xây dựng và điều độ kỹ thuật;
            3. Soạn thảo và kiểm tra quá trình thực hiện các Hợp đồng có liên quan đến công trình mình quản lý (Hợp đồng kinh tế, Hợp đồng giao khoán…);
            4. Lập bản vẽ thi công, biện pháp thi công và xây dựng tiến độ tổng thể;
            5. Giám sát tiến độ, chất lượng và chi phí của dự án;
            6. Nhận diện và phân tích, báo cáo lãnh đạo các rủi ro có thể ảnh hưởng đến tiến độ, an toàn, chất lượng và chi phí của dự án;
            7. Giám sát quy trình và chất lượng an toàn lao động của dự án;
            8. Thiết lập và mở rộng quan hệ với các chủ đầu tư và với các cơ quan chức năng;
            9. Thực hiện công tác nghiệm thu, bàn giao, quyết toán với Chủ đầu tư và lưu trữ hồ sơ sau dự án;
            10. Thực hiện các công việc khác theo chức năng của Đội sản xuất và yêu cầu của lãnh đạo.
            11. Chịu trách nhiệm toàn bộ trước Ban giám đốc công ty trong công tác tổ chức, sản xuất điều hành thi công tại công trường.',
            'YeuCau' => '-Trình độ: Có Bằng Đại học / Kỹ sư chuyên ngành Cầu đường.
            - Kinh nghiệm từ 10 năm trở lên - Đọc hiểu bản vẽ kỹ thuật, các tiêu chuẩn kỹ thuật;
            - Am hiểu các văn bản luật về thi công, đấu thầu;
            - Kỹ năng tổ chức, quản lý
            - Kỹ năng lập kế hoạc
            - Thuyết trình và giao tiếp tốt
            - Trung thực và đạo đức nghề nghiệp
            - Có mong muốn cống hiến lâu dài trong công ty',
            'QuyenLoi' => '-Lương: 1500$+ thưởng+ phụ cấp công tác
            -Thưởng theo tiến độ
            -Thưởng cơ chế
            -Thưởng thành tích cá nhân
            -Được đóng BHXH, BHYT, BHTN và hưởng các quyền lợi khác theo quy định của nhà nước',
        ),
        array(
            'MaNganh' => 4,
            'MaNTD' => 6,
            'MaViec' => 7,
            'TenViec' => 'Nhân Viên Kế Hoạch (Mua Nước Ngoài) Tiếng Trung',
            'MaMucLuong' => 5,
            'SoLuong' => 1,
            'GioiTinh' => -1, //Không yêu cầu
            'MaTrinhDo' => 4,
            'MaKinhNghiem' => 1,
            'MaTinh' => 2,
            'MaHinhThuc' => 2,
            'Han' => '2019/12/14',
            'MoTa' => '-Lập kế hoạch tìm kiếm nguyên phụ liệu theo mùa vụ
            -Tìm kiếm, đánh giá & lựa chọn NCC
            -Kiểm soát giá thành',
            'YeuCau' => '-Cử nhân tiếng Trung hoặc HSK cấp 4 trở lên. Tiếng Anh giao tiếp
            -Ưu tiên ứng viên có thời gian học tập hoặc sinh sống tại Trung Quốc
            -Kỹ năng quản lý, phân tích dữ liệu, lập báo cáo tổng kết
            -Kỹ năng Office (word, excel) thành thạo. Biết sử dụng các phần mềm đồ họa là một lợi thế
            -Cẩn thận, trung thực, nhiệt tình trong công việc
            -Có khả năng đi công tác',
            'QuyenLoi' => '-Mức lương hấp dẫn tuỳ theo năng lực
            -Được làm việc trong môi trường cạnh tranh, năng động và có khả năng thăng tiến.
            -Các chế độ BHXH, BHYT, BHTN theo quy định.
            -Chế độ sinh nhật, hiếu hỉ, du lịch, nghỉ mát hàng năm hấp dẫn.',
        ),
        array(
            'MaNganh' => 13,
            'MaNTD' => 7,
            'MaViec' => 8,
            'TenViec' => 'CTV Khai Thác Địa Chỉ Ăn Uống',
            'MaMucLuong' => 2,
            'SoLuong' => 5,
            'GioiTinh' => 0, //Nữ
            'MaTrinhDo' => 1,
            'MaKinhNghiem' => 1,
            'MaTinh' => 17,
            'MaHinhThuc' => 4,
            'Han' => '2019/12/14',
            'MoTa' => '-Tìm kiếm và phát triển khách hàng mới là các nhà hàng, quán cafe, quán ăn, quán nhậu, địa điểm karaoke, câu cá giải trí, địa điểm khách sạn, du lịch...trên toàn quốc. Giới thiệu khách hàng các dịch vụ quảng cáo của diachianuong.vn
            -Tư vấn, đàm phán và ký kết hợp đồng quảng cáo trên DIACHIANUONG.VN.
            -Báo cáo kết quả công việc theo mẫu, quy trình chung của công ty.
            -Thực hiện các công việc liên quan khác theo sự điều động của trưởng bộ phận.
            -Thời gian linh động, không cần phải lên công ty.
            -Chi tiết công việc trao đổi cụ thể hơn khi phỏng vấn.',
            'YeuCau' => '+ Đam mê ăn uống và trải nghiệm nhiều địa chỉ ăn uống.
            + Yêu thích công việc sale.
            + Thái độ làm việc nghiêm túc, cẩn thận và có tinh thần trách nhiệm
            + Có khả năng nghiên cứu, tự giải quyết vấn đề.
            + Có kỹ năng đàm phán, thương lượng khách hàng tốt.
            + Lập báo cáo gửi người quản lý hàng tuần theo form công ty gửi.',
            'QuyenLoi' => 'QUYỀN LỢI:
            -Được thử sức trong một môi trường làm việc trẻ trung, năng động và thu nhập cao.
            -Có Cơ hội trở thành nhân viên chính thức của công ty, có điều kiện thăng tiến cao trong sự nghiệp.
            -Được phát huy tối đa năng lực bản thân trong mảng công việc được giao.
            -Được đào tạo các kiến thức về kinh doanh, marketing online và đào tạo nâng cao kỹ năng thuyết trình, kỹ năng đàm phán và thương lượng với khách hàng.
            -Được đào tạo tập trung tại trụ sở chính của Công ty trong 3 ngày.
            -Có nhiều cơ hội được đi du lịch, thưởng thức đặc trưng ẩm thực vùng miền trên toàn quốc.
            CHÍNH SÁCH ĐÃI NGỘ:
            -Hoa hồng cao + Thưởng vượt doanh số hấp dẫn.
            -Thời gian làm việc linh hoạt, không cần phải đến công ty thường xuyên.',
        ),
        array(
            'MaNganh' => 3,
            'MaNTD' => 8,
            'MaViec' => 9,
            'TenViec' => 'Nhân Viên Kinh Doanh Bất Động Sản',
            'MaMucLuong' => 5,
            'SoLuong' => 2,
            'GioiTinh' => -1, //Nữ
            'MaTrinhDo' => 5,
            'MaKinhNghiem' => 4,
            'MaTinh' => 17,
            'MaHinhThuc' => 1,
            'Han' => '2019/12/14',
            'MoTa' => '1. Tư vấn khách hàng và bán các sản phẩm bất động sản do Công ty khai thác, đầu tư.
            2. Xây dựng chiến lược tìm kiếm, phát triển và chăm sóc khách hàng.
            3. Xây dựng, cập nhật hồ sơ khách hàng và báo cáo Trưởng bộ phận định kỳ hoặc khi được yêu cầu.
            4. Tìm hiểu thị trường và đối thủ cạnh tranh, tham mưu cho Trưởng bộ phận giải pháp kinh doanh',
            'YeuCau' => 'Độ tuổi: 22-30 tuổi.
            1. Ưu tiên ứng viên mới ra trường, chưa có kinh nghiệm về bất động sản.
            2 Thành thạo : Tin học văn phòng, Internet, Marketing online.
            3. Có khả năng giao tiếp và thuyết phục tốt; phân tích và giải quyết vấn đề. Có khả năng làm việc nhóm và làm việc độc lập.
            4. Đam mê kinh doanh bất động sản.',
            'QuyenLoi' => '"Quyền lợi cao, Thu nhập hấp dẫn, Cơ hội thăng tiến vững chắc".
            1. MỨC LƯƠNG: Lương cứng: 5 đến 7 triệu. Lương kinh doanh: Từ 5-20 triệu.
            2. Đóng các khoản BHXH, BHYT, BHTN cho người lao động theo quy định
            3. Thưởng các ngày lễ trong năm : 30/4, 01/5, 2/9, …….
            4. Chính sách phúc lợi cho nhân viên : Sinh nhật, 20/10, 8/3 , ……….
            5. Thưởng tết âm lịc hấp dẫn : Dao động từ 1 đến 6 tháng tiền lương thỏa thuận
            6. Được nâng lương định kỳ hàng năm',
        ),
        array(
            'MaNganh' => 11,
            'MaNTD' => 9,
            'MaViec' => 10,
            'TenViec' => 'Nhân Viên Kinh Doanh Phát Triển Thị Trường ',
            'MaMucLuong' => 4,
            'SoLuong' => 10,
            'GioiTinh' => -1,
            'MaTrinhDo' => 4,
            'MaKinhNghiem' => 1,
            'MaTinh' => 1,
            'MaHinhThuc' => 1,
            'Han' => '2019/12/14',
            'MoTa' => '- Giới thiệu sản phẩm của Công ty đến các nhà thuốc, phòng khám, bác sĩ . Khách hàng hiện tại của công ty
            - Theo dõi sản phẩm của đối thủ cạnh tranh
            - Theo dõi công nợ, tồn kho
            - Chăm sóc khách hàng, bán hàng
            - Mở rộng thị trường, tìm kiếm khách hàng mới',
            'YeuCau' => '- Nam/Nữ, tuổi dưới 30.
            - Tối thiểu tốt nghiệp Trung cấp ( y, dược, kinh tế, quản trị kinh doanh,marketing…)
            - Chịu khó, có đủ sức khoẻ đáp ứng công việc đi lại nhiều
            - Ưu tiên ứng viên có kinh nghiệm trình dược hoặc kinh nghiệm kinh doanh mặt hàng tiêu dùng.
            - Kiên nhẫn, năng động, giao tiếp tốt.',
            'QuyenLoi' => '- BHXH, BHYT, bảo hiểm thất nghiệp
            - Được đi du lịch hàng năm theo quy định
            - Được tham gia các khoá đào tạo hàng năm
            - Thưởng vào các dịp lễ, tết ( 30/4 – 1/5, 2/9, Tết Tây…)
            - Môi trường làm việc chuyên nghiệp, thân thiện được cung cấp các công cụ hổ trợ làm việc.
            - Các chế độ khác dành cho người lao động theo quy định của pháp luật',
        ),
        array(
            'MaNganh' => 1,
            'MaNTD' => 10,
            'MaViec' => 11,
            'TenViec' => 'Bán Hàng Điện Thoại Di Động',
            'MaMucLuong' => 3,
            'SoLuong' => 10,
            'GioiTinh' => -1,
            'MaTrinhDo' => 4,
            'MaKinhNghiem' => 1,
            'MaTinh' => 1,
            'MaHinhThuc' => 2,
            'Han' => '2019/12/14',
            'MoTa' => '- Tư vấn các sản phẩm điện thoại di động cho khách hàng
            - Ghi chép thông tin, tính tiền, xuất hóa đơn cho khách hàng;
            - Bố trí, sắp xếp và vệ sinh hàng hóa phù hợp với không gian cửa hàng;',
            'YeuCau' => '-Nam/nữ từ 20 tuổi trở lên, ngoại hình ưa nhìn là một lợi thế;
            -Tốt nghiệp PTTH trở lên;
            -Có khả năng thuyết phục, truyền đạt thông tin đến khách hàng;
            -Có kỹ năng giao tiếp tốt, lưu loát, rõ ràng, hoạt ngôn, mạnh dạn;
            -Có sở thích tìm hiểu về công nghệ thông tin( điện thoại di động);',
            'QuyenLoi' => '- Lương + phụ cấp+ thưởng doanh số, thưởng các dịp Lễ, Tết, thưởng doanh số bán hàng;
            - Chế độ BHXH, BHYT theo luật định.
            - Các chế độ phúc lợi khác theo quy định của Công ty: sinh nhật, thăm hỏi, hiếu hỉ….
            - Cơ hội trải nghiệm và sở hữu các sản phẩm công nghệ phù hợp với nhu cầu thị trường;
            - Có cơ hội học hỏi, thăng tiến, nhân viên có thâm niên làm việc, có tố chất, kỹ năng sẽ được đào tạo lên vị trí CHT/CHP.',
        ),
        array(
            'MaNganh' => 35,
            'MaNTD' => 7,
            'MaViec' => 12,
            'TenViec' => 'Thực Tập Sinh Phòng Marketing',
            'MaMucLuong' => 3,
            'SoLuong' => 8,
            'GioiTinh' => -1,
            'MaTrinhDo' => 3,
            'MaKinhNghiem' => 1,
            'MaTinh' => 1,
            'MaHinhThuc' => 2,
            'Han' => '2019/12/14',
            'MoTa' => 'Nhằm tiếp tục bổ sung đội ngũ nhân sự đầy nhiệt huyết, tài năng có hoài bão để thực hiện chiến lược phát triển của công ty trong tương lai, cũng như hỗ trợ sinh viên có điều kiện trao dồi kỹ năng thực tiễn. Chúng tôi cần tuyển thực tập sinh vị trí chuyên viên marketing online địa chỉ ăn uống:
            Mô Tả công việc:
            • Thực tập theo các chuyên ngành QTKD, Marketing, Thương mại điện tử, PR, Truyền thông, Báo chí, truyền hình.
            • Nghiên cứu phương pháp marketing, đẩy mạnh tương tác cho chuyên trang ẩm thực diachianuong.vn.
            • Thu tập một cách chi tiết thông tin về các địa chỉ ăn uống ở TPHCM và các tỉnh thành khác trên cả nước.
            • Phương pháp tìm kiếm và khai thác khách hàng tiềm năng ở lĩnh vực ẩm thực như: Nhà hàng, Quán ăn, Cafe, Giải trí....
            • Social Media Marketing.',
            'YeuCau' => '• Sinh viên năm cuối các trường ĐH, CĐ ở Tp.HCM thuộc các chuyên ngành QTKD, Marketing, Thương mại điện tử, PR, Truyền thông, Báo chí, truyền hình.
            • Có kiến thức về Marketing, đặc biệt Marketing Online; biết về SEO
            • Có kỹ năng viết bài và tương tác tốt với mạng xã hội.
            • THÁI ĐỘ NGHIÊM TÚC. TÁC PHONG GỌN GÀNG
            • Có hoài bão, nhiệt huyết, tự tin, ham học hỏi và tinh thần cầu tiến.
            • Kiên trì, chịu được áp lực cao.
            • Tiếng anh giao tiếp tốt.
            • Sử dụng thành thạo Microsoft Office, Internet…ưởng các loại phụ cấp, chế độ nghỉ mát',
            'QuyenLoi' => '- Được hướng dẫn công việc chuyên ngành.
            - Được hỗ trợ việc làm sau khi ra trường. Được giữ lại làm nhân viên chính thức nếu đáp ứng được yêu cầu của công việc.
            - Được đào tạo các kiến thức về kinh doanh, marketing online và đào tạo nâng cao kỹ năng thuyết trình, kỹ năng đàm phán và thương lượng với khách hàng.
            - Được đi du lịch, thưởng thức đặc trưng ẩm thực vùng miền trên toàn quốc.
            - Đặc biệt có THU NHẬP THỰC TẾ theo hiệu quả công việc.',
        ),
        array(
            'MaNganh' => 11,
            'MaNTD' => 3,
            'MaViec' => 13,
            'TenViec' => 'Nhân Viên Kinh Doanh Camera Tại Láng Hạ',
            'MaMucLuong' => 3,
            'SoLuong' => 10,
            'GioiTinh' => 0, //Nữ
            'MaTrinhDo' => 3,
            'MaKinhNghiem' => 1,
            'MaTinh' => 1,
            'MaHinhThuc' => 2,
            'Han' => '2019/12/14',
            'MoTa' => '
            + Tìm kiếm, tiếp cận và khai thác khách hàng tiềm năng để bán sản phẩm
            + Giới thiệu, tư vấn, hướng dẫn khách hàng về sản phẩm.
            + Tìm hiểu nhu cầu mua hàng và định hướng khách hàng vào sản phẩm của Công ty, thuyết phục khách mua sản phẩm Công ty.',
            'YeuCau' => ' Nam/ Nữ, độ tuổi 25-40, có sức khỏe tốt, có laptop.
            - Kinh nghiệm: 2 năm trở lên.
            - Tốt nghiệp Đại học, Cao đẳng, Trung cấp… loại khá, giỏi các chuyên ngành: Công nghệ thông tin, điều khiển và tự động hóa, điện tử - viễn thông, kinh tế và quản trị kinh doanh hoặc tương đương.
            - Kỹ năng phân tích, lập kế hoạch và triển khai kế hoạch cá nhân.
            - Kỹ năng giao tiếp, chăm sóc khách hàng, đàm phán thương lượng, trình bày và thuyết phục khách hàng.
            - Kỹ năng làm việc nhóm và chịu được áp lực công việc.
            - Tiếng anh: Nghe, nói, đọc, viết tốt.
            - Sử dụng thành thạo tin học văn phòng: Word, Excel, Powerpoint, Email, Internet…
            - Biết sử dụng tốt các trang mạng xã hội, các kênh quảng cáo để quảng bá thương hiệu Công Ty.
            - Nhạy bén, linh hoạt, ham học hỏi, năng động, sáng tạo, cầu tiến, trung thực, có trách nhiệm, yêu thích công việc kinh doanh (Ưu tiên nhân viên có kinh nghiệm chăm sóc khách hàng, kinh doanh Camera, thiết bị an ninh, dịch vụ viễn thông, điện tử, điện nhẹ, cơ điện M&E).',
            'QuyenLoi' => '
            - Làm việc trong môi trường năng động, chuyên nghiệp, nhiều cơ hội thăng tiến.
            - Được tham gia các khóa đào tạo về nghiệp vụ do Công Ty tổ chức.
            - Mức lương theo năng lực (Trao đổi cụ thể trong buổi phỏng vấn).
            - Được hưởng đầy đủ các chế độ theo Bộ luật lao động hiện hành và theo quy định của Công Ty.',
        )
    );
}