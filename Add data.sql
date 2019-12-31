INSERT INTO `theloai` (`MaTheLoai`, `TenTheLoai`) VALUES
(1, 'Chính trị'),
(2, 'Giáo trình'),
(3, 'Khoa học'),
(4, 'Thiếu nhi'),
(5, 'Sách tự lực'),
(6, 'Tiểu thuyết'),
(7, 'Văn học'),
(8, 'Truyện ngắn'),
(9, 'Kĩ Năng');

INSERT INTO `tacgia` (`MaTacGia`, `TenTacGia`) VALUES
(1, 'Shinkai Makoto'),
(2, 'Dale Carnegie'),
(3, 'Khailed Hosseini'),
(4, 'Mai Xuân Hùng'),
(5, 'Nguyễn Nhật Ánh'),
(6, 'Nguyễn Ngọc Tư'),
(7, 'Aristotle'),
(9, 'Kim Lân'),
(10, 'Nam Cao'),
(11, 'Guillaume Musso'),
(12, 'Nguyễn Ngọc Bích'),
(13, 'Robin Sharma'),
(14, 'Tony Buổi Sáng'),
(15, 'Mark h.Mccormack'),
(16, 'Nguyễn Đình Thuân'),
(17, 'Paulo Coelho'),
(18, 'Guillaume Musso');

INSERT INTO `nhaxuatban` (`MaNXB`, `TenNXB`) VALUES
(1, 'Nhã Nam'),
(2, 'AlphaBook'),
(3, 'Nhà Xuất Bản Tổng hợp TP.HCM'),
(4, 'Trẻ'),
(5, 'ĐHQG-HCM'),
(6, 'Nhà Xuất Bản Thế Giới'),
(7, 'Omega Plus'),
(8, 'Nhà xuất bản văn học'),
(9, 'Hội nhà văn'); 

INSERT INTO `dausach` (`MaDauSach`, `TenDauSach`, `MaTheLoai`) VALUES
(9, 'Tôi thấy hoa vàng trên cỏ xanh', 6),
(10, 'Con Chó Nhỏ Mang Giỏ Hoa Hồng', 8),
(11, 'Những Điều Trường Harvard Không Dạy Bạn', 5),
(12, 'Tony Buổi Sáng – Trên Đường Băng', 9),
(13, 'Phát triển ứng dụng Web', 2),
(14, 'Đắc nhân tâm', 5),
(15, 'Nhà giả kim', 6),
(16, '5 Centimet Trên Giây', 6),
(17, 'Mắt Biếc', 6),
(18, 'Chí Phèo', 8),
(19, 'Vợ nhặt', 7),
(20, 'Chính trị luận', 1),
(22, 'Cánh đồng bất tận', 8),
(23, 'Cuộc Gọi Từ Thiên Thần', 6),
(24, 'Đời ngắn đừng ngủ dài', 9);

INSERT INTO `phieunhap` (`MaPhieuNhap`, `NgayNhap`, `TongTien`) VALUES
(1, '2019-05-30 00:00:00', 600000);

INSERT INTO `sach` (`MaSach`, `MaDauSach`, `MaNXB`, `NamXB`, `NgayRaMat`, `SoLuongTon`, `DonGia`, `MoTa`, `HinhAnh`, `DonGiaSale`) VALUES
(1, 9, 4, 2010, '2019-05-20', 50, 80000, 'Những câu chuyện nhỏ xảy ra ở một ngôi làng nhỏ: chuyện người, chuyện cóc, chuyện ma, chuyện công chúa và hoàng tử , rồi chuyện đói ăn, cháy nhà, lụt lội,... Bối cảnh là trường học, nhà trong xóm, bãi tha ma. Dẫn chuyện là cậu bé 15 tuổi tên Thiều. Thiều có chú ruột là chú Đàn, có bạn thân là cô bé Mận. Nhưng nhân vật đáng yêu nhất lại là Tường, em trai Thiều, một cậu bé học không giỏi. Thiều, Tường và những đứa trẻ sống trong cùng một làng, học cùng một trường, có biết bao chuyện chung. Chúng nô đùa, cãi cọ rồi yêu thương nhau, cùng lớn lên theo năm tháng, trải qua bao sự kiện biến cố của cuộc đời.\r\nTác giả vẫn giữ cách kể chuyện bằng chính giọng trong sáng hồn nhiên của trẻ con. 81 chương ngắn là 81 câu chuyện hấp dẫn với nhiều chi tiết thú vị, cảm động, có những tình tiết bất ngờ, từ đó lộ rõ tính cách người. Cuốn sách, vì thế, có sức ám ảnh.', 'toithayhoavangtrencoxanh.png', 70000),
(2, 10, 4, 2016, '2019-05-18', 50, 90000, 'Con Chó Nhỏ Mang Giỏ Hoa Hồng\r\n\r\nTOP 100 BEST SELLER - “Con chó nhỏ mang giỏ hoa hồng” là tác phẩm mới nhất của nhà văn chuyên viết cho thanh thiếu niên Nguyễn Nhật Ánh, nối tiếp sau Bẩy bước tới mùa hè, Tôi thấy hoa vàng trên cỏ xanh… gây sóng gió thị trường sách năm 2015.\r\n\r\n5 chương sách với 86 câu chuyện cực kỳ thú vị và hài hước về 5 con chó 5 loài 5 tính cách trong 1 gia đình có 3 người đều yêu chúng nhưng theo từng cách riêng của mình. Các câu chuyện về tình bạn giữa chúng với nhau, giữa chúng với chị Ni, ba mẹ, khách đến nhà… thực sự mang lại một thế giới trong trẻo, những đoạn đời dễ thương quyến rũ tuổi mới lớn.\r\n\r\nMột quyển sách lôi cuốn viết cho tất cả chúng ta: trẻ con và người lớn. Cuộc đời của 5 con chó nhỏ: Haili, Batô, Suku, Êmê và Pig được tái hiện như đời sống của mỗi con người: tình bạn, tình yêu, đam mê, lòng dũng cảm, sự sợ hãi, và những ước mơ...', 'conchonhomanggiohoahong.png', 63000),
(3, 11, 2, 2018, '2019-05-18', 70, 129000, 'Những Điều Trường Harvard Không Dạy Bạn\r\n\r\nVới lối viết thẳng thắn và mạnh mẽ, Những Điều Trường Harvard Không Dạy Bạn cung cấp nhiều kinh nghiệm thực tế về:\r\n\r\nCách thức thấu hiểu một con người\r\n\r\nNhững bí ẩn của một cuộc đàm phán\r\n\r\nCách điều hành và tham dự một cuộc họp\r\n\r\nBiến sự giận dữ của đối tác thành cơ hội\r\n\r\nĐón nhận những thách thức\r\n\r\nNhạy bén để biết vận may\r\n\r\nĐây thật sự là cuốn sách dành cho tất cả những ai thực sự muốn  thành công trong giới kinh doanh đầy thách thức.', 'nhungdieutruongharvardkodayban.jpg', 0),
(4, 12, 1, 2017, '2019-05-28', 100, 86000, 'Trên Đường Băng\r\n\r\nTRÊN ĐƯỜNG BĂNG là cuốn sách tập hợp những bài viết truyền cảm hứng và hướng dẫn kỹ năng cho các bạn trẻ khi chuẩn bị bước vào đời.\r\n\r\nCuốn Trên Đường Băng được chia làm 3 phần: “Chuẩn bị hành trang”, “Trong phòng chờ sân bay” và “Lên máy bay”, tương ứng với những quá trình một bạn trẻ phải trải qua trước khi “cất cánh” trên đường băng cuộc đời, bay vào bầu trời cao rộng.\r\n\r\nXuất phát từ cái tâm trong sáng của người đi trước dày dặn kinh nghiệm, kiến thức, Tony Buổi Sáng mang đến đọc giả những bài viết hài ước, tinh tế, sinh động và đầy thiết thực. Cuốn Trên Đường Băng với những bài viết về thái độ với sự học và kiến thức nói chung, cách ứng phó với những trắc trở thử thách khi đi làm, cách sống hào sảng nghĩa tình văn minh… truyền cảm hứng cho các bạn trẻ sống hết mình, trọn vẹn từng phút giây và sẵn sàng cho hành trang cuộc sống.\r\n\r\nTrên Đường Băng của Tony Buổi Sáng tuy hướng đến những đọc giả là những người trẻ nhưng những người lớn hơn vẫn để hiểu hơn, và có cách nhìn nhận cũng như giáo dục con em mình tốt nhất thay vì bảo vệ con quá kĩ trở nên yếu ớt và thiếu tự lập. Và để yêu thương “khoa học” nhất. Đây cũng là cuốn sách mà những người đi làm nên sở hữu để nhìn lại chặng đường mình đã đi qua, suy ngẫm và thay đổi vì chưa bao giờ là quá muộn.\r\n\r\nMột cuốn sách với nhiều điều để bạn học hỏi, suy ngẫm và chuẩn bị tốt nhất cho hành trang trên con đường tuổi trẻ của chính mình.', 'tonybuoisang.png', 0),
(5, 19, 8, 2016, '2019-05-28', 30, 45000, 'Vợ Nhặt - Tập Truyện Ngắn\r\n\r\nKim Lân tên thật là Nguyễn Văn Tài (1921-2007), quê gốc: Thôn Phù Lưu, xã Tân Hồng, huyện Tiên Sơn, tỉnh Bắc Ninh. Đảng viên Đảng Cộng sản Việt Nam. Hội viên sáng lập Hội Nhà văn Việt Nam (1957). Nhà văn Kim Lân tham gia văn hóa Cứu quốc, trong kháng chiến chống Pháp công tác ở chiến khu Việt Bắc. Ông Từng là ủy viên Ban phụ trách Nhà xuất bản Văn học, trường bồi dưỡng những người viết trẻ, Tuần báo Văn nghệ, Nhà xuất bản Tác phẩm mới. Ông nhận Giải thưởng Nhà nước về Văn học Nghệ thuật năm 2000.\r\n\r\nTập truyện ngắn “Vợ nhặt” tập hợp những truyện ngắn đặc sắc nhất của Kim Lân – một cây bút truyện ngắn vững vàng, viết về cuộc sống và con người ở nông thôn bằng tình cảm, tâm hồn của một người vốn là con đẻ của đồng ruộng.', 'vonhat.png', 40000),
(6, 18, 8, 2016, '2019-05-25', 100, 40000, '“Chí Phèo” – tập truyện ngắn tái hiện bức tranh chân thực nông thôn Việt Nam trước 1945, nghèo đói, xơ xác trên con đường phá sản, bần cùng, hết sức thê thảm, người nông dân bị đẩy vào con đường tha hóa, lưu manh hóa. Nam Cao không hề bôi nhọ người nông dân, trái lại nhà văn đi sâu vào nội tâm nhân vật để khẳng định nhân phẩm và bản chất lương thiện ngay cả khi bị vùi dập, cướp mất cà nhân hình, nhân tính của người nông dân, đồng thời kết án đanh thép cái xã hội tàn bạo đó trước 1945.\r\n\r\nNhững sáng tác của Nam Cao ngoài giá trị hiện thực sâu sắc, các tác phẩm đi sâu vào nội tâm nhân vật, để lại những cảm xúc sâu lắng trong lòng người đọc.', 'chipheo.png', 0),
(7, 15, 1, 2017, '2019-05-28', 50, 69000, 'NHÀ GIẢ KIM là cuốn sách được in nhiều nhất chỉ sau Kinh Thánh. Cuốn sách của Paulo Coelho có sự hấp dẫn ra sao khiến độc giả không chỉ các xứ dùng ngôn ngữ Bồ Đào Nha mà các ngôn ngữ khác say mê như vậy?\r\n\r\nTiểu thuyết NHÀ GIẢ KIM của Paulo Coelho như một câu chuyện cổ tích giản dị, nhân ái, giàu chất thơ, thấm đẫm những minh triết huyền bí của phương Đông. Trong lần xuất bản đầu tiên tại Brazil vào năm 1988, sách chỉ bán được 900 bản. Nhưng, với số phận đặc biệt của cuốn sách dành cho toàn nhân loại, vượt ra ngoài biên giới quốc gia, Nhà giả kim đã làm rung động hàng triệu tâm hồn, trở thành một trong những cuốn sách bán chạy nhất mọi thời đại, và có thể làm thay đổi cuộc đời người đọc.\r\n\r\n“Nhưng nhà luyện kim đan không quan tâm mấy đến những điều ấy. Ông đã từng thấy nhiều người đến rồi đi, trong khi ốc đảo và sa mạc vẫn là ốc đảo và sa mạc. Ông đã thấy vua chúa và kẻ ăn xin đi qua biển cát này, cái biển cát thường xuyên thay hình đổi dạng vì gió thổi nhưng vẫn mãi mãi là biển cát mà ông đã biết từ thuở nhỏ. Tuy vậy, tự đáy lòng mình, ông không thể không cảm thấy vui trước hạnh phúc của mỗi người lữ khách, sau bao ngày chỉ có cát vàng với trời xanh nay được thấy chà là xanh tươi hiện ra trước mắt. ‘Có thể Thượng đế tạo ra sa mạc chỉ để cho con người biết quý trọng cây chà là,’ ông nghĩ.” - Trích NHÀ GIẢ KIM', 'nhagiakim.png', 60000),
(8, 14, 3, 2017, '2019-05-21', 100, 90000, 'Đắc Nhân Tâm - Được lòng người, là cuốn sách đưa ra các lời khuyên về cách thức cư xử, ứng xử và giao tiếp với mọi người để đạt được thành công trong cuộc sống. Gần 80 năm kể từ khi ra đời, Đắc Nhân Tâm là cuốn sách gối đầu giường của nhiều thế hệ luôn muốn hoàn thiện chính mình để vươn tới một cuộc sống tốt đẹp và thành công.\r\n\r\nĐắc Nhân Tâm cụ thể và chi tiết với những chỉ dẫn để dẫn đạo người, để gây thiện cảm và dẫn dắt người khác,... những hướng dẫn ấy, qua thời gian, có thể không còn thích hợp trong cuộc sống hiện đại nhưng nếu người đọc có thể cảm và hiểu được những thông điệp tác giả muốn truyền đạt thì việc áp dụng nó vào cuộc sống trở nên dễ dàng và hiệu quả.\r\n\r\nĐắc Nhân Tâm, từ một cuốn sách, hôm nay đã trở thành một danh từ để chỉ một lối sống mà ở đó con người ta cư xử linh hoạt và thấu tình đạt lý. Lý thuyết muôn thuở vẫn là những quy tắc chết, nhưng Nhân Tâm là sống, là biến đổi. Bạn hãy thử đọc \"Đắc Nhân tâm\" và tự mình chiêm nghiệm những cái đang diễn ra trong đời thực hiện hữu, chắc chắn bạn sẽ có những bài học cho riêng mình.\r\n\r\nĐắc Nhân Tâm là nghệ thuật thu phục lòng người, là làm cho tất cả mọi người yêu mến mình. \"Đắc nhân tâm\" và cái Tài trong mỗi người chúng ta. \"Đắc Nhân Tâm\" trong ý nghĩa đó cần được thụ đắc bằng sự hiểu rõ bản thân, thành thật với chính mình, hiểu biết và quan tâm đến những người xung quanh để nhìn ra và khơi gợi những tiềm năng ẩn khuất nơi họ, giúp họ phát triển lên một tầm cao mới. Đây chính là nghệ thuật cao nhất về con người và chính là ý nghĩa sâu sắc nhất đúc kết từ những nguyên tắc vàng của Dale Carnegie.Sách đã được chuyển ngữ sang hầu hết các thứ tiếng trên thế giới và có mặt ở hàng trăm quốc gia. Đây là cuốn sách liên tục đứng đầu danh mục sách bán chạy nhất do thời báo NewYork Times bình chọn suốt 10 năm liền.\r\n\r\nTác phẩm có sức lan toả vô cùng rộng lớn - dù  bạn đi đến bất cứ đâu, bất kỳ quốc gia nào cũng đều có thể nhìn thấy. Tác phẩm được đánh giá là cuốn sách đầu tiên và hay nhất trong thể loại này, có ảnh hưởng thay đổi cuộc đời đối với hàng triệu người trên thế giới.', 'Dacnhantam.png', 68000),
(9, 13, 5, 2016, '2019-05-17', 50, 32000, NULL, 'phattrienungdungweb.png', 0),
(12, 23, 1, 2017, '2019-06-01', 100, 88880, 'New York, Sân bay JFK…\r\n\r\nTrong phòng chờ chật cứng người, một người đàn ông và một người phụ nữ va phải nhau rồi ai đi đường nấy.\r\n\r\nMadeline và Jonathan chưa bao giờ gặp nhau, hẳn rồi họ cũng chẳng bao giờ tái ngộ. Nhưng lúc va chạm họ đã cầm nhầm điện thoại của nhau. Khi nhận ra, giữa họ đã là 10.000 cây số: cô là chủ một tiệm hoa tại Paris, anh có một nhà hàng ở San Francisco.\r\n\r\nHọ tò mò mở điện thoại của nhau ra xem. Một phát hiện đáng ngạc nhiên: cuộc đời họ gắn kết với nhau bởi một bí mật mà cả hai cứ ngỡ đã được chôn vùi… Và định mệnh tình yêu nằm trong hai chiếc điện thoại.\r\n\r\nMột câu chuyện lãng mạn\r\n\r\nMột cuốn trinh thám gay cấn\r\n\r\nMột cốt truyện bậc thầy\r\n\r\nMột kết thúc điêu luyện', 'cuocgoituthienthan.png', 0),
(13, 22, 1, 2017, '2019-06-01', 100, 68000, '\"Cánh đồng bất tận\" bao gồm những truyện hay và mới nhất của nhà văn Nguyễn Ngọc Tư. Đây là tác phẩm đang gây xôn xao trong đời sống văn học, bởi ở đó người ta tìm thấy sự dữ dội, khốc liệt của đời sống thôn dã qua cái nhìn của một cô gái. Bi kịch về nỗi mất mát, sự cô đơn được đẩy lên đến tận cùng, khiến người đọc có lúc cảm thấy nhói tim... NXB Trẻ trân trọng giới thiệu cùng bạn đọc.', 'nguyenngoctu.jpg', 0),
(14, 16, 8, 2014, '2019-06-04', 50, 50000, 'OP 100 BEST SELLER - 5cm/s không chỉ là vận tốc của những cánh anh đào rơi, mà còn là vận tốc khi chúng ta lặng lẽ bước qua đời nhau, đánh mất bao cảm xúc thiết tha nhất của tình yêu.\r\n\r\nBằng giọng văn tinh tế, truyền cảm, Năm centimet trên giây mang đến những khắc họa mới về tâm hồn và khả năng tồn tại của cảm xúc, bắt đầu từ tình yêu trong sáng, ngọt ngào của một cô bé và cậu bé. Ba giai đoạn, ba mảnh ghép, ba ngôi kể chuyện khác nhau nhưng đều xoay quanh nhân vật nam chính, người luôn bị ám ảnh bởi kí ức và những điều đã qua…\r\n\r\nKhác với những câu chuyện cuốn bạn chạy một mạch, truyện này khó mà đọc nhanh. Ngón tay bạn hẳn sẽ ngừng lại cả trăm lần trên mỗi trang sách. Chỉ vì một cử động rất khẽ, một câu thoại, hay một xúc cảm bất chợt có thể sẽ đánh thức những điều tưởng chừng đã ngủ quên trong tiềm thức, như ngọn đèn vừa được bật sáng trong tâm trí bạn. Và rồi có lúc nó vượt quá giới hạn chịu đựng, bạn quyết định gấp cuốn sách lại chỉ để tận hưởng chút ánh sáng từ ngọn đèn, hay đơn giản là để vết thương trong lòng mình có thời gian tự tìm xoa dịu.', '5cmtrengiay.png', 35000),
(15, 24, 4, 2017, '2019-06-05', 60, 75000, '“Mọi lựa chọn đều giá trị. Mọi bước đi đều quan trọng. Cuộc sống vẫn diễn ra theo cách của nó, không phải theo cách của ta. Hãy kiên nhẫn. Tin tưởng. Hãy giống như người thợ cắt đá, đều đặn từng nhịp, ngày qua ngày. Cuối cùng, một nhát cắt duy nhất sẽ phá vỡ tảng đá và lộ ra viên kim cương. Người tràn đầy nhiệt huyết và tận tâm với việc mình làm không bao giờ bị chối bỏ. Sự thật là thế.”\r\n\r\nBằng những lời chia sẻ thật ngắn gọn, dễ hiểu về những trải nghiệm và suy ngẫm trong đời, Robin Sharma tiếp tục phong cách viết của ông từ cuốn sách Điều vĩ đại đời thường để mang đến cho độc giả những bài viết như lời tâm sự, vừa chân thành vừa sâu sắc', 'doi-ngan-dung-ngu-dai-300x300.jpg', 0),
(16, 20, 7, 2018, '2019-05-23', 50, 118000, 'Tác phẩm nổi tiếng viết về các khái niệm mà từ đó định hình các quốc gia và chính phủ. Mặc dù, Aristotle cổ vũ mạnh mẽ cho chế độ nô lệ lạc hậu, quan điểm của ông về Hiến pháp và cách điều hành chính phủ lại rất kinh điển. Dù chỉ thảo luận về nhà nước và các định chế thời Hy Lạp cổ nhưng tác phẩm này của ông đã đặt nền tảng cho khoa học chính trị hiện đại\r\n\r\nTác phẩm này được xem là căn bản cho Chính trị học Tây phương. Chính trị luận nghiên cứu các vấn đề cơ bản về nhà nước, chính quyền, chính trị, tự do, công bằng, tài sản, quyền, luật và việc thực thi luật pháp của các cơ quan thẩm quyền.\r\n\r\nAristotle là biểu tượng của trí tuệ tư duy triết học. Mặc dù nội dung rất sâu sắc nhưng cách trình bày của ông lại rất dễ hiểu. Ông viết những suy nghĩ của mình một cách rõ ràng với độ chính xác siêu phàm. Học thuyết của ông có ảnh hưởng lớn đến những lĩnh vực hiện đại như : khoa học, chủ nghĩa duy thực và logic học', 'chinhtriluan.png', 0),
(17, 17, 4, 2018, '2019-05-25', 100, 72000, 'Một tác phẩm được nhiều người bình chọn là hay nhất của nhà văn này. Một tác phẩm đang được dịch và giới thiệu tại Nhật Bản (theo thông tin từ các báo)… Bởi sự trong sáng của một tình cảm, bởi cái kết thúc rất, rất buồn khi suốt câu chuyện vẫn là những điều vui, buồn lẫn lộn (cái kết thúc không như mong đợi của mọi người). Cũng bởi, mắt biếc… năm xưa nay đâu (theo lời một bài hát)', 'matbiec.png', 58000);


INSERT INTO `ct_phieunhap` (`MaPhieuNhap`, `MaSach`, `SoLuongNhap`, `DonGiaNhap`, `ThanhTien`) VALUES
(1, 1, 10, 60000, 600000);


INSERT INTO `ct_tacgia` (`MaDauSach`, `MaTacGia`) VALUES
(9, 5),
(10, 5),
(11, 1),
(12, 14),
(13, 4),
(13, 16),
(14, 2),
(15, 17),
(16, 1),
(17, 5),
(18, 10),
(19, 9),
(20, 7),
(22, 6),
(23, 18),
(24, 13);


INSERT INTO `users` (`id`, `name`, `password`, `email`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$SOOCYGrMpnaPwzzlPXz1e.3ArmJFaYKqKDIO2U3uxRCFRTWlnityi', 'nhatle@gmail.com', 1, NULL, '2019-05-30 02:32:51', '2019-05-30 02:32:51');

