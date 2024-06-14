-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 19, 2024 lúc 01:18 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `rau_cu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `taikhoan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anhad` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`taikhoan`, `matkhau`, `hoten`, `anhad`) VALUES
('ngocad', '2002', 'Nguyễn Xuân Ngọc', 'gtbl4.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `tennguoibl` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `congviec` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `anhbl` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `makh`, `tennguoibl`, `congviec`, `noidung`, `anhbl`) VALUES
(1, 3, 'Jayce Nguyễn ', 'Nhân Viên Quét Rác', 'Thực Phẩm Siêu Tươi Siêu Ngon 10 điểm 10 Điểm', 'gtbl1.jpg'),
(2, 3, 'Vua Đầu Bết', 'Thợ Gội Đầu', 'Quá Tươi Quá Ngon, Cuộc Đời Tôi Chưa Từng Ăn Thực Phẩm Nào Tươi Ngon Như Này, Vì Tôi Hay Ăn Thực Phẩm Bẩn', 'gtbl2.jpg'),
(3, 3, 'Nguyễn Đức Khỉ', 'Nhân Viên Sở Thú', 'Đánh Giá 5 Sao Vì Đảm Bảo Chất Lượng, Nhưng Tôi Chỉ Thích Ăn Chuối Thôi Vì Nó Là Món Khoái Khẩu Của Tôi.', 'gtbl3.jpg'),
(4, 1, 'Nguyễn Xuân Ngọc', 'Chủ Tịch', 'Không Nói Nhiều ', 'gtbl4.jpg'),
(6, 1, 'Đỗ Gia My', 'Sinh Viên', 'Ngon Quá', '1677479391_giamy.jpg'),
(7, 1, 'Dazai-kun', 'Thám Tử', 'Thực Phẩm Tốt', '1677479739_dazai.gif'),
(10, 1, 'Như Quỳnh', 'Thám Tử', 'Thực phẩm tươi sạch :3', '1712094110_ao.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `masp` int(11) NOT NULL,
  `madh` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `giaban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`masp`, `madh`, `soluong`, `giaban`) VALUES
(10, 4, 3, 35000),
(1, 5, 10, 6000),
(1, 6, 1, 6000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dk_nhan_btin`
--

CREATE TABLE `dk_nhan_btin` (
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dk_nhan_btin`
--

INSERT INTO `dk_nhan_btin` (`email`) VALUES
('nxn@email.com'),
('ngtung@email.com'),
('ngtung1@email.com'),
('ngtungg@email.com'),
('nxn@email.com'),
('nxn@email.com'),
('ngtungg2@email.com'),
('ngtung3@email.com'),
('ngtungg22@email.com'),
('nxn2@email.com'),
('nxn3@email.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `thanhtoan` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaymua` datetime NOT NULL DEFAULT current_timestamp(),
  `tt` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1:chưa xử lý,2:đang xử lý, 3:đã xử lý, 4:huy',
  `tennguoinhan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `thanhtoan`, `makh`, `ngaymua`, `tt`, `tennguoinhan`, `sdt`, `email`, `diachi`) VALUES
(4, 1, 1, '2023-02-27 01:10:38', 1, 'Nguyễn Xuân Ngọc', 999999999, 'wbjack@gmail.com', 'Thạch Thất - Hà Nội'),
(5, 1, 1, '2023-03-01 03:07:34', 1, 'Nguyễn Xuân Ngọc', 999999999, 'wbjack@gmail.com', 'Thạch Thất - Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `taikhoan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `taikhoan`, `matkhau`, `fullname`, `sdt`, `email`, `diachi`) VALUES
(1, 'ngocdz', '2002', 'Nguyễn Xuân Ngọc', '0999999999', 'wbjack@gmail.com', 'Thạch Thất - Hà Nội'),
(2, 'xngoc', '2002', 'Nguyễn Xuân Ngọc', '0376557401', 'mochi@gmail.com', 'Hà Nội'),
(3, 'tunght', '2002', 'Nguyễn Tuấn Tùng', '0333333333', 'adv@email.com', 'Thanh Hóa'),
(4, 'dazaikun', '1234', 'dazai-kun', '4404440444', 'dazzai@gmail.com', 'tokyo'),
(5, 'test', '123', 'Nguyễn Văn A', '1111111111', 'nva@gmail.com', 'Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `id` int(11) NOT NULL,
  `tenloai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`id`, `tenloai`) VALUES
(1, 'Rau Củ'),
(2, 'Nước Ép'),
(3, 'Hoa Quả\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongthuctt`
--

CREATE TABLE `phuongthuctt` (
  `id` int(11) NOT NULL,
  `hinhthuc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phuongthuctt`
--

INSERT INTO `phuongthuctt` (`id`, `hinhthuc`) VALUES
(1, 'Thanh Toán Cho Người Giao Hàng'),
(2, 'Chuyển Khoản'),
(3, 'Thanh Toán Tại Cửa Hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `idloai` int(11) NOT NULL,
  `tensp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anhsp` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chitietsp` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `giasp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `idloai`, `tensp`, `anhsp`, `mota`, `chitietsp`, `giasp`) VALUES
(1, 1, 'Ớt Chuông', 'product-1.jpg', 'Ớt chuông, hay còn gọi là ớt ngọt (gọi là pepper ở Vương quốc Liên hiệp Anh và Bắc Ireland, Canada, ', 'Ớt chuông, hay còn gọi là ớt ngọt (gọi là pepper ở Vương quốc Liên hiệp Anh và Bắc Ireland, Canada, Ireland hay capsicum[1] ở Ấn Độ, Bangladesh, Úc, Singapore và New Zealand), là quả của một nhóm cây trồng, loài Capsicum annuum.[2] Cây trồng của loài này cho ra trái với màu sắc khác nhau, bao gồm màu đỏ, vàng, cam, xanh lục, sô-cô-la / nâu, vanilla / trắng, và màu tím. Ớt chuông đôi khi được xếp vào nhóm ớt ít cay nhất mà cùng loại với ớt ngọt. Ớt chuông có thịt, rất nhiều thịt. Ớt chuông có nguồn gốc ở Mexico, Trung Mỹ, và phía Bắc Nam Mỹ. Phần khung và hạt bên trong ớt chuông có thể ăn được, nhưng một số người sẽ cảm nhận được vị đắng.[3] Hạt ớt chuông được mang đến Tây Ban Nha vào năm 1493 và từ đó lan rộng khắp các nước Châu Âu, Châu Phi, và Châu Á. Ngày nay, Trung Quốc là nước xuất khẩu ớt chuông lớn nhất thế giới, theo sau là Mexico và Indonesia.\r\n\r\nĐiều kiện trồng ớt chuông lý tưởng bao gồm đất ấm, khoảng từ 21 đến 29 độ C (70 đến 84 độ F), và luôn giữ ẩm nhưng không để úng nước.[4] Ớt chuông rất nhạy cảm với độ ẩm và nhiệt độ cao vượt mức.', 6000),
(2, 3, 'Dâu Tây', 'product-2.jpg', 'Dâu tây vườn hay gọi đơn giản là dâu tây (danh pháp khoa học: Fragaria × ananassa)[1] là một chi thự', 'Dâu tây vườn hay gọi đơn giản là dâu tây (danh pháp khoa học: Fragaria × ananassa)[1] là một chi thực vật hạt kín và loài thực vật có hoa thuộc họ Hoa hồng (Rosaceae). Dâu tây xuất xứ từ châu Mỹ và được các nhà làm vườn châu Âu cho lai tạo vào thế kỷ 18 để tạo nên giống dâu tây được trồng rộng rãi hiện nay. Loài này được (Weston) Duchesne miêu tả khoa học đầu tiên năm 1788. Loại quả này được nhiều người đánh giá cao nhờ hương thơm đặc trưng, màu đỏ tươi, mọng nước và vị ngọt. Nó được tiêu thụ với số lượng lớn, hoặc được tiêu thụ dưới dạng dâu tươi hoặc được chế biến thành mứt, nước trái cây, bánh nướng, kem, sữa lắc và sôcôla. Nguyên liệu và hương liệu dâu nhân tạo cũng được sử dụng rộng rãi trong các sản phẩm như kẹo, xà phòng, son bóng, nước hoa, và nhiều loại khác.\r\n\r\nDâu vườn lần đầu tiên được trồng ở Brittany, Pháp, vào năm 1750 thông qua một cây giống Fragaria virginiana từ Đông Bắc Mỹ và một cây Fragaria chiloensis thuộc giống được mang đến từ Chile bởi Amédée-François Frézier vào năm 1714.[2] Giống cây lai Fragaria × ananassa thay thế giống dâu rừng (Fragaria vesca) trong sản xuất thương mại, là loài dâu đầu tiên được trồng vào đầu thế kỷ 17.[3]', 69000),
(3, 1, 'Đậu Hà Làn', 'product-3.jpg', 'Đậu Hà Lan (đậu pơ-tí poa, tên khoa học: Pisum sativum) là loại đậu hạt tròn thuộc Chi Đậu Hà Lan, d', 'Đậu Hà Lan (đậu pơ-tí poa, tên khoa học: Pisum sativum) là loại đậu hạt tròn thuộc Chi Đậu Hà Lan, dùng làm thực phẩm. Đây là loài thực vật một năm, được trồng theo vụ vào mùa có khí hậu mát mẻ tại nhiều nơi trên thế giới. Mỗi hạt đậu có khối lượng từ 0,1 đến 0,36 gram.[1]\r\n\r\nHạt đậu Hà Lan được dùng làm thức ăn ở các dạng tươi, đông lạnh, đóng hộp, hoặc khô. Trong ẩm thực Việt Nam, quả đậu Hà Lan non còn được dùng nguyên quả cho các món xào hoặc canh.', 12000),
(4, 1, 'Bắp Cải Tím', 'product-4.jpg', 'Bắp cải hay cải bắp (Brassica oleracea nhóm Capitata) hay cải nồi là một loại rau chủ lực trong họ C', 'Bắp cải hay cải bắp (Brassica oleracea nhóm Capitata) hay cải nồi là một loại rau chủ lực trong họ Cải (còn gọi là họ Thập tự - Brassicaceae/Cruciferae), phát sinh từ vùng Địa Trung Hải. Nó là cây thân thảo, sống hai năm, và là một thực vật có hoa thuộc nhóm hai lá mầm với các lá tạo thành một cụm đặc hình gần như hình tròn đặc trưng.\r\n\r\nNó đã được biết tới từ thời Hy Lạp và La Mã cổ đại; Cato Già đánh giá cao loại cây này vì các tính chất y học của nó, ông tuyên bố rằng \"nó là loại rau thứ nhất\".[1]. Tiếng Anh gọi nó là cabbage (phát âm: /ˈkabɪdʒ/) và từ này có nguồn gốc từ Normanno-Picard caboche (\"đầu\"). Cải bắp được phát triển từ lựa chọn nhân tạo diễn ra liên tục để ngăn chặn chiều dài các gióng.\r\n\r\nCải bắp có chỉ số diện tích lá cao, hệ số sử dụng nước rất lớn nhưng có bộ rễ chùm phát triển nên chịu hạn và chịu nước hơn su hào và súp lơ.', 15000),
(5, 1, 'Cà chua', 'product-5.jpg', 'Cà chua (danh pháp hai phần: Solanum lycopersicum), thuộc họ Cà (Solanaceae), là một loại rau quả là', 'Cà chua (danh pháp hai phần: Solanum lycopersicum), thuộc họ Cà (Solanaceae), là một loại rau quả làm thực phẩm. Quả ban đầu có màu xanh, chín ngả màu từ vàng đến đỏ. Cà chua có vị hơi chua và là một loại thực phẩm bổ dưỡng, tốt cho cơ thể, giàu vitamin C và A, đặc biệt là giàu lycopeme tốt cho sức khỏe.\r\n\r\nCà chua thuộc họ Cà, các loại cây trong họ này thường phát triển từ 1 đến 3 mét chiều cao, có những cây thân mềm bò trên mặt đất hoặc dây leo trên thân cây khác, ví dụ nho. Họ cây này là một loại cây lâu năm trong môi trường sống bản địa của nó, nhưng nay nó được trồng như một loại cây hàng năm ở các vùng khí hậu ôn đới và nhiệt đới.', 7000),
(6, 1, 'Súp Lơ Xanh', 'product-6.jpg', 'Bông cải trắng hay còn gọi là súp lơ, hay su lơ, bắp su lơ, hoa lơ (tiếng Pháp: Chou-fleur), cải hoa', 'Bông cải trắng hay còn gọi là súp lơ, hay su lơ, bắp su lơ, hoa lơ (tiếng Pháp: Chou-fleur), cải hoa hay cải bông trắng là một loại cải ăn được, thuộc loài Brassica oleracea, họ Cải, mọc quanh năm, gieo giống bằng hạt. Phần sử dụng làm thực phẩm của súp lơ là toàn bộ phần hoa chưa nở, phần này rất mềm, xốp nên không chịu được mưa nắng. Phần lá và thân thường chỉ được sử dụng làm thức ăn cho gia súc.', 18000),
(7, 1, 'Cà rốt', 'product-7.jpg', 'Cà rốt (bắt nguồn từ tiếng Pháp carotte /kaʁɔt/,[1] danh pháp khoa học: Daucus carota subsp. sativus', 'Cà rốt (bắt nguồn từ tiếng Pháp carotte /kaʁɔt/,[1] danh pháp khoa học: Daucus carota subsp. sativus) là một loại cây có củ, thường có màu đỏ, vàng, trắng hay tía. Phần ăn được của cà rốt là củ, thực chất là rễ cái của nó, chứa nhiều tiền tố của vitamin A tốt cho mắt.\r\n\r\nTrong tự nhiên, nó là loại cây sống hai năm, phát triển một nơ chứa lá trong mùa xuân và mùa hè, trong khi đó vẫn tích lũy một lượng lớn đường trong rễ cái to mập, tích trữ năng lượng để ra hoa trong năm thứ hai. Thân cây mang hoa có thể cao tới 1 m (3 ft), với hoa tán chứa các hoa nhỏ màu trắng, sinh ra quả, được các nhà thực vật học gọi là quả nẻ[2] Cà rốt chứa lượng natri vừa đủ để duy trì huyết áp ở mức hợp lý trong cơ thể. Đối với những người tiêu thụ cà rốt thường xuyên, huyết áp của họ sẽ luôn ở trong tình trạng ổn định và trong tầm kiểm soát.', 6000),
(8, 2, 'Nước Ép Hoa Quả', 'product-8.jpg', 'Nước ép là một dung dịch tự nhiên chứa các mô từ trái cây hoặc các loại rau', 'Nước ép là một dung dịch tự nhiên chứa các mô từ trái cây hoặc các loại rau. Nước ép được tạo ra một cách máy móc bằng cách ép hoặc vắt hoặc giầm trái cây hoặc rau tươi không dùng nhiệt độ hay dung môi. Ví dụ, nước cam là một dung dịch được chiết ra từ trái cam. Nước ép có thể được tạo ra tại nhà từ rau quả tươi bằng cách dùng tay hoặc sử dụng những thiết bị điện tử. Lượng đường thực sự trong nước sinh tố thường không được nhận ra, nhiều loại nước ép trái cây có lượng đường (fructose) cao những thức uống giải khát có đường khác; e.g., ví dụ nước nho có hơn 50% đường so với Coca Cola.', 50000),
(9, 1, 'Hành Khô', 'product-9.jpg', 'Thân hành là dạng thân (đôi khi được coi là chồi) bị biến đổi với đoạn thân thẳng đứng mọng nước và ', 'Thân hành là dạng thân (đôi khi được coi là chồi) bị biến đổi với đoạn thân thẳng đứng mọng nước và ngắn, được bao phủ bởi các lá biến dạng mọng nước và dày. Thân hành là cơ quan dự trữ chất dinh dưỡng của cây. Trong tiếng Việt, thân hành thường được gọi là củ hành, hành củ.\r\n\r\n\r\nCủ hành\r\nTất cả các thực vật dạng thân hành thực sự (phân biệt với giả thân hành) đều là cây một lá mầm, bao gồm:\r\n\r\nHành, tỏi và các loài khác thuộc họ Hành (Alliaceae).\r\nTulip và các loài khác thuộc họ Loa kèn (Liliaceae).\r\nThủy tiên và một số loài thuộc họ Loa kèn đỏ (Amaryllidaceae).\r\nHai phân chi thuộc chi Iris, họ Diên vĩ (Iridaceae): phân chi Xiphium và phân chi Hermodactyloides.', 4000),
(10, 3, 'Táo', 'product-10.jpg', 'Táo Phú Sĩ hay Táo Fuji là một giống táo đường (táo đỏ) lai được phát hiện và nhân rộng bởi các chuy', 'Táo Phú Sĩ hay Táo Fuji là một giống táo đường (táo đỏ) lai được phát hiện và nhân rộng bởi các chuyên gia cây trồng tại Trạm nghiên cứu Tohoku (農林省園芸試験場東北支場: Nông lâm tỉnh, viên nghiệp thí nghiệm trường, Đông Bắc chi trường) thuộc thị trấn Fujisaki, Aomori, Nhật Bản vào những năm 1930[1] và được đưa ra thị trường trong năm 1962. Nó là giống táo được lai chéo giữa hai giống táo Mỹ (Delicious đỏ) và giống Virginia Ralls Genet. Cái tên Phú Sĩ (Fuji) của loại táo này không phải đặt để chỉ về núi Phú Sĩ như cách hiểu phổ biến mà nó được đặt tên cho thị trấn Fujisaki (vị trí của Trạm nghiên cứu Tohuku).[2][3]\r\n\r\nTại Việt Nam, từ trước đến nay, táo Fuji được biết đến thông qua con đường nhập khẩu từ Trung Quốc, những trái táo Fuji đẹp, hấp dẫn có xuất xứ Trung Quốc rất được ưa chuộng và phổ biến trên thị trường (cùng với đó những tai tiếng về vệ sinh an toàn thực phẩm) đến mức người tiêu dùng và các phương tiện truyền thông báo chí thường gọi táo Fuji bằng tên gọi táo Trung Quốc [4][5] và từ trước đến nay người tiêu dùng ở Việt Nam đều gọi chung các loại táo nhập từ Trung Quốc là táo Trung Quốc[6] (tuy nhiên cần phân biệt với táo tàu cũng là một loại táo khác từ Trung Quốc)', 35000),
(11, 1, 'Tỏi', 'product-11.jpg', 'Tỏi (danh pháp hai phần: Allium sativum) là một loài thực vật thuộc họ Hành, nghĩa là có họ hàng với', 'Tỏi (danh pháp hai phần: Allium sativum) là một loài thực vật thuộc họ Hành, nghĩa là có họ hàng với hành tây, hành ta, hành tím, tỏi tây, v.v... và cũng được con người sử dụng làm gia vị, thuốc, rau như những loài họ hàng của nó.\r\n\r\nTỏi là một trong những cây gia vị dễ trồng, nếu gặp thời tiết thuận lợi sẽ phát triển cực kì nhanh chóng, lợi dụng ưu điểm này, không ít gia đình thành thị đã sử dụng khoảng vườn nhỏ của mình để trồng.', 9000),
(12, 1, 'Ớt Chỉ Thiên', 'product-12.jpg', 'Ớt là một loại quả của các cây thuộc chi Capsicum của họ Cà (Solanaceae)', 'Ớt là một loại quả của các cây thuộc chi Capsicum của họ Cà (Solanaceae). Ớt là một loại quả gia vị cũng như loại quả làm rau (ớt Đà Lạt) phổ biển trên thế giới. Ớt có nguồn gốc từ châu Mỹ; ngày nay nó được trồng khắp nơi trên thế giới và được sử dụng làm gia vị, rau, và thuốc.', 6000),
(25, 1, 'Rau Cải Xanh', 'cai-xanh.jpg', 'Cải xanh (rau cải bẹ xanh, cải cay, cải canh) thuộc họ Cải, thân có kích thước khác nhau phụ thuộc v', 'Cải bẹ xanh có thân to, nhỏ khác nhau, lá có màu xanh đậm hoặc xanh nõn lá chuối. Lá và thân cây có vị cay, đăng đắng thường dùng phổ biến nhất là nấu canh, hay để muối dưa (dưa cải). Thời gian thu hoạch cho cải bẹ xanh trong khoảng từ 40 – 45 ngày. Thành phần dinh dưỡng trong cải bẹ xanh gồm có: vitamin A, B, C, K, axit nicotic, catoten, abumin…, nên được các chuyên gia dinh dưỡng khuyên dùng vì có nhiều lợi ích đối với sức khỏe cũng như có tác dụng phòng chống bệnh tật.\r\n\r\nTheo Đông y Việt Nam, cải bẹ xanh có vị cay, tính ôn, có tác dụng giải cảm hàn, thông đàm, lợi khí...[1]. Riêng hạt cải bẹ xanh, có vị cay, tính nhiệt, không độc, trị được các chứng phong hàn, ho đờm, hen, đau họng, tê dại, mụn nhọt...', 12000),
(26, 1, 'Mồng Tơi', '1712094379_mong_toi.jpg', 'AAAAAAAAA', 'BBBBBBBBBBBBBBB', 12000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `tieude` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `chitietmota` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaydang` date NOT NULL DEFAULT current_timestamp(),
  `anhtt` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `tieude`, `mota`, `chitietmota`, `ngaydang`, `anhtt`) VALUES
(1, 'Thực phẩm hữu cơ tốt cho sức khỏe', 'Thực phẩm hữu cơ đang ngày càng được sử dụng rộng rãi và đang dần phổ biến hơn. Sử dụng những thực phẩm hữu cơ thực sự rất tốt cho sức khoẻ và môi trường.', '<h2 class=\"mb-3\">Thực Phẩm Hữu Cơ Tốt Cho Sức Khỏe</h2>\n            <p>hực phẩm hữu cơ đang ngày càng được sử dụng rộng rãi và đang dần phổ biến hơn. Sử dụng những thực phẩm hữu cơ thực sự rất tốt cho sức khoẻ và môi trường.</p>\n            <p>\n              <img src=\"images/image_1.jpg\" alt=\"\" class=\"img-fluid\">\n            </p>\n            <p>Phòng bệnh: Hoa quả và rau hữu cơ chứa chất chống oxy hoá nhiều hơn 40% so với các sản phẩm không hữu cơ. Do vậy, thực phẩm hữu cơ rất có hiệu quả trong phòng bệnh như giảm nguy cơ bệnh tim, ung thư, đường huyết cao. Thực phẩm hữu cơ không có hóa chất nhân tạo, hormone kích thích tăng trưởng giúp bảo vệ sức khỏe.</p>\n            <p>Nhiều chất dinh dưỡng hơn: Thực phẩm hữu cơ hoàn toàn không chứa các hoá chất độc hại, nên các dưỡng chất vẫn được lưu giữ.</p>\n            <p>Không chứa sinh vật biến đổi gen: Trong các thực phẩm hữu cơ, sinh vật biến đổi gen không được sử dụng, vì vậy có những lợi ích nhất định.</p>\n\n            <p>Hương vị tự nhiên: Các loại thực phẩm hữu cơ có nghĩa là thực phẩm được trồng và nuôi cấy một cách tự nhiên. Do vậy, chúng có mùi vị tự nhiên, cứng, giòn, ngon ngọt. Đây là ưu điểm rất lớn của loại thực phẩm này.</p>\n            <p>Tăng khả năng sinh sản của động vật: Động vật được nuôi bằng những thành phần hữu cơ, chúng sẽ sinh sản tốt hơn động vật chỉ được nuôi bằng thực phẩm không hữu cơ. Vì vậy, để có trứng, thịt và sữa hữu cơ, động vật cần có chế độ ăn hoàn toàn hữu cơ.</p>\n\n            <p>Tốt cho môi trường: Việc nuôi trồng những thực phẩm hữu cơ không sử dụng thuốc trừ sâu, hoá chất,… Do vậy, đất và nguồn nước không bị ô nhiễm, giữ gìn độ phì nhiêu của đất.</p>', '2023-02-28', 'image_1.jpg'),
(2, 'Thực phẩm hữu cơ có vị ngon hơn', 'Vì sản phẩm hữu cơ không được bảo vệ bởi thuốc trừ sâu, trái cây và rau củ hữu cơ phải tự bảo vệ khỏi bị côn trùng tấn công', '<h2 class=\"mb-3\">Thực phẩm hữu cơ có vị ngon hơn</h2>\r\n        <p>Vì sản phẩm hữu cơ không được bảo vệ bởi thuốc trừ sâu, trái cây và rau củ hữu cơ phải tự bảo vệ khỏi bị côn trùng tấn công. Chúng làm điều này bằng cách tăng cường trao đổi để sản xuất ra những chất bảo vệ hóa học, sau đó trực tiếp chuyển biến sang hương vị và hương thơm.</p>\r\n        <p>\r\n          <img src=\"images/image_2.jpg\" alt=\"\" class=\"img-fluid\">\r\n        </p>\r\n        <p>Về cơ bản, thực vật hữu cơ bị tấn công bởi côn trùng có thể tích trữ hàm lượng hóa chất hương vị cao hơn, cũng như các phân tử bảo vệ khác, bao gồm cả chất chống oxy hóa. Nói một cách rõ ràng hơn: thực vật nào chiến đấu nhiều hơn sẽ là những thực vật khỏe mạnh hơn, từ đó tạo ra nhiều hương vị và dinh dưỡng hơn,\r\n        Thành phẩm hữu cơ thường tươi mới và mang tính chất địa phương hơn, sẽ góp phần thêm hương vị sâu sắc hơn</p>', '2023-02-28', 'image_2.jpg'),
(3, 'Thực phẩm hữu cơ thân thiện với môi trường hơn', 'Có rất nhiều lợi ích tích cực khi nói đến hình thức canh tác hữu cơ', '<h2 class=\"mb-3\">Thực phẩm hữu cơ thân thiện với môi trường hơn</h2>\r\n        <p>Có rất nhiều lợi ích tích cực khi nói đến hình thức canh tác hữu cơ. Một trong số đó bao gồm:</p>\r\n        \r\n        <p>Tính bền vững lâu dài: Canh tác hữu cơ nhằm mục đích sản xuất ra nguồn thực phẩm mà vẫn có thể giữ vững hệ cân bằng sinh thái để ngăn chặn độ phì của đất hoặc những vấn đề sâu bệnh khác</p>\r\n        <p>Đất lành mạnh hơn: Những tục lệ xây dựng đất như luận canh, xen canh, hiệp hội cộng sinh, phân hữu cơ (phân trộn, phân động vật) và canh tác tối thiểu là trung tâm của việc canh tác hữu cơ. Chúng khuyến khích hệ động vật đất và hệ thực vật đất, cải thiện sự hình thành và cấu trúc, cũng như tạo ra một hệ thống ổn định hơn</p>\r\n        <p>Nguồn nước: Canh tác hữu cơ làm giảm đáng kể nguy cơ ô nhiễm nguồn nước ngầm và ở một số nơi mà việc ô nhiễm là một vấn đề đã được biết đến, canh tác hữu cơ đã cho thấy được hiệu quả phục hồi</p>\r\n\r\n        <p>Không khí và biến đổi khí hậu: Nông nghiệp hữu cơ làm giảm sử dụng nguồn năng lượng không tái tạo bằng cách giảm nhu cầu hóa chất nông nghiệp. Nông nghiệp hữu cơ cũng góp phần làm giảm nhẹ hiệu ứng nhà kính và giảm đi sự nóng lên toàn cầu thông qua khả năng hấp thụ carbon trong đất</p>\r\n        <p>Đa dạng sinh học: Việc duy trì các khu vực tự nhiên trong và xung quanh cánh đồng hữu cơ cũng như không sử dụng đầu vào những chất hóa học, góp phần tạo một môi trường sống thích hợp hơn cho động vật hoang dã</p>\r\n        <p>\r\n          <img src=\"images/image_3.jpg\" alt=\"\" class=\"img-fluid\">\r\n        </p>', '2023-02-28', 'image_3.jpg'),
(4, 'Thực phẩm hữu cơ thân thiện với động vật hơn', 'Phúc lợi động vật được cải thiện với hình thức canh tác hữu cơ là nhờ vào sự gia tăng trong chăn nuôi tự do, nuôi trồng theo phương thức đồng cỏ và bởi vì nông dân hữu cơ cam kết là một hình thức canh tác thân thiện hơn với động vật', '<h2 class=\"mb-3\">Thực phẩm hữu cơ thân thiện với động vật hơn</h2>\r\n        <p>Phúc lợi động vật được cải thiện với hình thức canh tác hữu cơ là nhờ vào sự gia tăng trong chăn nuôi tự do, nuôi trồng theo phương thức đồng cỏ và bởi vì nông dân hữu cơ cam kết là một hình thức canh tác thân thiện hơn với động vật. Tất cả các động vật trong hệ thống hữu cơ phải sống trọng điều kiện tự nhiên nhất có thể, điều đó có nghĩa là không sử dụng lồng pin, thùng nái và chuồng đứng, hoặc bất kì hình thức giảm cầm nào khác. Động vật được di chuyển tự do và ăn thực phẩm tự nhiên đến với chúng</p>\r\n        \r\n        <p>Với những điều này trong tâm trí (và đây chỉ là một trong số những lợi ích), rõ ràng có thể thấy được là đương nhiên, thực phẩm hữu cơ đang trở nên phổ biến là có lí do. Thực phẩm được canh tác với những nguyên liệu canh tác hữu cơ cao cấp hơn hẳn những thực phẩm thông thường trong mọi phương diện, và cũng khỏe mạnh hơn chọ chính bạn, gia đình bạn và cho cả môi trường.</p>\r\n        <p>\r\n          <img src=\"images/image_4.jpg\" alt=\"\" class=\"img-fluid\">\r\n        </p>\r\n        <p>Điều đó không có nghĩa là bạn phải chạy đi khắp nơi và thay thế mọi nguyên liệu trong tủ lạnh hoặc phòng bếp bằng những nguyên liệu hữu cơ, nhưng sản phẩm hữu cơ đáng để bạn nhớ tới trong lần mua sắm tiếp theo</p>\r\n        <p>Lựa chọn hữu cơ và sẽ không chỉ được thưởng thức được sự khác biệt trong hương vị, mà bạn cũng có thể được hưởng những lợi ích nữa đấy nhé</p>', '2023-02-28', 'image_4.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`taikhoan`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phuongthuctt`
--
ALTER TABLE `phuongthuctt`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `phuongthuctt`
--
ALTER TABLE `phuongthuctt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`idloai`) REFERENCES `loaisp` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
