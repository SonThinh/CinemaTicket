SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
SET SQL_SAFE_UPDATES = 0;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE `register`(
`user_id` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(50) NOT NULL,
`email` varchar(50) NOT NULL,
`phone` varchar(10) NOT NUll,
`year` int(4) NOT NULL,
`gender` varchar(3) NOT NULL,
PRIMARY KEY(`user_id`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;
insert into `register` values(0,0,0,0,0,0);

CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL COMMENT 'name',
  `password` varchar(50) NOT NULL,
  `user_type` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;
insert into `login` values	(1,0,'admin','admin',0),
							(2,1,'CGV111','123456',1),
							(3,2,'CGV222','123456',1),
                            (4,3,'CGV333','123456',1),
                            (5,4,'CGV444','123456',1),
                            (6,5,'CGV555','123456',1);
CREATE TABLE `cinema`(
	`cinema_id` int(11) NOT NULL AUTO_INCREMENT,
    `city` varchar(20) NOT NULL,
    `address` varchar(100) NOT NULL,
    `cinema_name` varchar(100) NOT NULL,
    `image` varchar(200) NOT NULL,
	PRIMARY KEY(`cinema_id`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

insert into `cinema` values	(1,N'Hồ Chí Minh',N'Tầng 7 | Hùng Vương Plaza 126 Hùng Vương Q.5',N'CGV Hùng Vương Plaza','theaters/cgvhvplaza.jpg'),
							(2,N'Hồ Chí Minh',N'Tầng 5 | TTTM Vincom Plaza Gò Vấp 12 Phan Văn Trị Q.Gò Vấp',N'CGV Vincom Gò Vấp','theaters/cgvvcgv.jpg'),
                            (3,N'Đà Nẵng',N'Tầng 4 | TTTM Vincom Đà Nẵng Ngô Quyền P.An Hải Bắc Q. Sơn Trà',N'CGV Vincom Đà Nẵng','theaters/cgvvcdn.jpg'),
							(4,N'Hải Phòng',N'Tầng 4 | TTTM Vincom Imperia Số 1 Bạch Đằng Hồng Bàng',N'CGV Vincom Hải Phòng','theaters/cgvvchp.jpg'),
                            (5,N'Hà Nội',N'Tầng B2 | TTTM Vincom Royal City 72A Nguyễn Trãi Q.Thanh Xuân',N'CGV Vincom Royal City','theaters/cgvroyal.jpg');
CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL AUTO_INCREMENT,
  `cinema_id` int(11) NOT NULL COMMENT 'cinema id',
  `movie_name` varchar(1000) NOT NULL,
  `cast` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `release_date` date NOT NULL,
  `image` varchar(200) NOT NULL,
  `video_url` varchar(200) NOT NULL,
  `status` int(1) NOT NULL COMMENT '0 means active ',
  PRIMARY KEY (`movie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

insert into `movie` values	(1,3,'SHAZAM!','Zachary Levi,Mark Strong',N'Với phương châm trong mỗi chúng ta đều có một người hùng, chỉ cần một chút ma thuật để gợi ra. Shazam! kể về cậu bé Billy Batson nhờ một cơ duyên bất ngờ mà trở thành siêu anh hùng. Chỉ cần hét lên cụm từ SHAZAM!, cậu bé mười bốn tuổi sẽ biến thành một gã đàn ông trưởng thành có sức mạnh siêu nhiên.','2019/04/05','dummy/movie_1.jpg','https://www.youtube.com/watch?v=845gXO0tfLM',0),
							(2,3,N'CHỊ MƯỜI BA',N'Thu Trang, Tiến Luật, Diệu Nhi, Khương Ngọc',N'Sau thành công của webdrama Thập Tam Muội, "hoa hậu hài" Thu Trang tiến công màn ảnh rộng bằng phim điện ảnh Chị Mười Ba. Chị Mười Ba tiếp tục kể về nhóm xã hội đen An Cư Nghĩa Đoàn do chị đại Mười Ba (Thu Trang) và đại ca Đường Băng (Tiến Luật) làm thủ lĩnh. Cả hai phải đối đầu cùng đối thủ bí ẩn- đại ca Hắc Hổ. Hắn chính là kẻ bảo kê cho Bi Long (Khương Ngọc) quậy phá suốt bấy lâu nay.','2019/03/29','dummy/movie_2.png','https://www.youtube.com/watch?v=4icB4gSPaFY',0),
							(3,3,'FRIEND ZONE','Baifern Pimchanok, Nine Naphat',N'Phim kể về câu chuyện oái ăm của Palm - anh chàng trót đem lòng yêu Gink nhưng đáng tiếc cô chỉ xếp anh vào vùng "friend zone". Chuyện tình đơn phương cứ thế kéo dài không hồi kết khi Palm không thể nói ra tấm lòng mình, còn Gink lại hẹn hò với chàng trai khác...','2019/03/15','dummy/movie_3.jpg','https://www.youtube.com/watch?v=0G8EHFK6kGo',0),
							(4,3,'DRAGON BALL SUPER :BROLY','',N'Dragon Ball Super: Broly là phần phim lẻ thứ 20 của thương hiệu nổi tiếng này với sự xuất hiện của Super Saiyan huyền thoại Broly vô cùng bá đạo. Tại Giải đấu sức mạnh, Goku và Vegeta đụng độ Broly – người Saiyan có quá khứ bí ẩn cùng chỉ số sức mạnh cao đột biến. Thậm chí dù ở trạng thái người thường, hắn vẫn có thể thản nhiên đánh bại Vegeta và Goku khi họ đã biến hình Super Saiyan...','2019/03/22','dummy/movie_4.jpg','https://www.youtube.com/watch?v=6bj2uFKRouM',0),
							(5,1,'DUMBO','Colin Farrell, Michael Keaton, Eva Green',N'Là phiên bản live action của bộ phim hoạt hình từng làm rơi nước mắt nhiều thế hệ, Dumbo kể về chú voi con sinh ra với đôi tai to lớn có thể bay được. Sự xuất hiện của bé voi giúp cứu nguy cho rạp xiếc đang gặp khó khăn. Tuy nhiên, khi nơi đây lên kế hoạch cho chương trình mới, Dumbo và những người bạn phát hiện bí mật đen tối được che giấu sau lớp vỏ thân thiện. ','2019/03/29','dummy/movie_5.jpg','https://www.youtube.com/watch?v=2B44nkf9Cyc','0');
                            
CREATE TABLE `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_name` varchar(1000) NOT NULL,
  `cast` varchar(500) NOT NULL,
  `news_date` date NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(200) NOT NULL,
  `video_url` varchar(200) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

insert into `news` values	(1,'AVENGERS: ENDGAME','Robert Downey Jr., Chris Hemsworth, Chris Evans, Scarlett Johansson, Mark Ruffalo, Jeremy Renner','2019/04/26',N'Phần tiếp theo của Cuộc Chiến Vô Cực','dummy/movie_8.jpg','https://www.youtube.com/watch?v=JsTxPRKo5Bw'),
							(2,'CORGI','Tom Courtenay, Jamal Fahim','2019/04/26',N'Rex là chú chó được Nữ Hoàng Anh vô cùng cưng chiều. Sau một lần gây rắc rối, Rex đã bị nhốt lại. Quá buồn bã, chú chó Corgi quyết định bỏ trốn. Cũng trong chuyến phiêu lưu này, Rex đã gặp nhiều khó khăn để rồi sau đó, cậu gặp được tình yêu đích thực và tìm ra giá trị của bản thân.','dummy/movie_9.jpg','https://www.youtube.com/watch?v=X2-R1f7Ga2M'),
							(3,'ALADDIN','Naomi Scott , Will Smith','2019/05/24',N'Tác phẩm live-action dựa trên phim hoạt hình cùng tên năm 1992 ','dummy/movie_10.jpg','https://www.youtube.com/watch?v=oITxzHeD7Ic'),
							(4,'GODZILLA: KING OF THE MONSTERS','Millie Bobby Brown, Bradley Whitford, Vera Farmiga, Sally Hawkins','2019/05/31',N'Đây là tác phẩm thứ ba thuộc vũ trụ điện ảnh quái vật của hãng Legendary và Warner Bros.. Theo đó, bộ phim có bối cảnh diễn ra vài năm sau sự kiện của phần trước. Lúc này, Godzilla phải đối mặt với những quái vật hết sức mạnh mẽ như Rồng ba đầu King Ghidorah, Rodan và sâu bướm Mothra.','dummy/movie_11.jpg','https://www.youtube.com/watch?v=zLR-qtRfY2Y');

CREATE TABLE `show_time` (
  `st_id` int(11) NOT NULL AUTO_INCREMENT,
  `screen_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL COMMENT 'noon,second,etc',
  `start_time` time NOT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;
insert into `show_time`values 	(1, 1, 'Noon', '10:00:00'),
								(2, 1, 'Matinee', '14:00:00'),
								(3, 1, 'First', '18:00:00'),
								(4, 1, 'Second', '21:00:00'),
								(5, 2, 'Noon', '10:00:00'),
								(6, 2, 'Matinee', '14:00:00'),
								(7, 2, 'First', '18:00:00'),
								(8, 2, 'Second', '21:00:00'),
								(9, 3, 'Noon', '10:00:00'),
								(10, 3, 'Matinee', '14:00:00'),
								(11, 3, 'First', '18:00:00'),
								(12, 3, 'Second', '21:00:00'),
								(14, 4, 'Noon', '12:03:00');
                               
CREATE TABLE `shows` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `st_id` int(11) NOT NULL COMMENT 'show time id',
  `cinema_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `status` int(11) NOT NULL COMMENT '1 means show available',
  `r_status` int(11) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

insert into `shows` values	(1, 9, 4, 1, '2019/04/05', 1, 1),
							(2, 10, 1, 1, '2019/04/05', 1, 1),
							(3, 11, 2, 2, '2019/03/29', 1, 1),
							(4, 12, 4, 2, '2019/03/29', 1, 1),
							(5, 1, 5, 3, '2019/03/15', 1, 1),
							(6, 2, 1, 3, '2019/03/15', 1, 1),
							(7, 3, 2, 4, '2019/03/22', 1, 1),
							(8, 4, 3, 4, '2019/03/22', 1, 1),
							(9, 5, 4, 5, '2019/03/29', 1, 1),
							(10, 6, 1, 5, '2019/03/29', 1, 1);

CREATE TABLE `screens`(
	`screen_id` int(11) NOT NULL AUTO_INCREMENT,
    `cinema_id` int(11) NOT NULL,
    `screen_name` varchar(20) NOT NULL,
    `seats` int(11) NOT NULL COMMENT 'number of seats',
    `charge` int(11) NOT NULL COMMENT 'fee',
    PRIMARY KEY(`screen_id`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

insert into `screens` values	(1, 1, 'Rạp 2D ', 100, 70000),
								(2, 3, 'Rạp GOLD CLASS', 100, 85000),
								(3, 5, 'Rạp PREMIUM', 100, 120000),
								(4, 2, 'Rạp SCREEN X', 100, 150000),
                                (5, 4, 'Rạp 4DX', 100, 180000);
					       
CREATE TABLE `bookings` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_id` varchar(30) NOT NULL,
  `seat` varchar(30) NOT NULL,
  `cinema_id` int(11) NOT NULL COMMENT 'cinema id',
  `user_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `screen_id` int(11) NOT NULL,
  `no_seats` int(3) NOT NULL COMMENT 'number of seats',
  `amount` int(5) NOT NULL,
  `ticket_date` date NOT NULL,
  `date` date NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`book_id`)
  
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

