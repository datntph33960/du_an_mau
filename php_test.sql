-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 05, 2024 lúc 01:58 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php_test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `ma_khach_hang` int(11) NOT NULL,
  `ma_san_pham` int(11) NOT NULL,
  `noi_dung` varchar(100) NOT NULL,
  `binh_luan_vao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `ma_khach_hang`, `ma_san_pham`, `noi_dung`, `binh_luan_vao`) VALUES
(3, 9, 5, 'eeee', '2023-11-29 00:44:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tieu_de` varchar(30) NOT NULL,
  `tao_ngay` timestamp NOT NULL DEFAULT current_timestamp(),
  `cap_nhat_ngay` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tieu_de`, `tao_ngay`, `cap_nhat_ngay`) VALUES
(1, 'Laptop Gamming', '2020-10-29 01:24:54', '2020-10-29 01:24:54'),
(2, 'Laptop Marbook', '2020-10-30 16:49:05', '2020-10-30 16:49:05'),
(4, 'Laptop Văn Phòng', '2023-11-21 16:26:39', '2023-11-21 16:26:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `ma_khach_hang` int(11) NOT NULL,
  `ho_va_ten` varchar(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `dia_chi` varchar(30) NOT NULL,
  `so_dien_thoai` varchar(30) NOT NULL,
  `trang_thai` enum('1','2','3') NOT NULL DEFAULT '1',
  `tao_ngay` timestamp NOT NULL DEFAULT current_timestamp(),
  `cap_nhat_ngay` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `ma_khach_hang`, `ho_va_ten`, `email`, `dia_chi`, `so_dien_thoai`, `trang_thai`, `tao_ngay`, `cap_nhat_ngay`) VALUES
(11, 6, 'Lưu Văn Khánh', 'luuvankhanh6368@gmail.com', 'Thái Bình', '0339917254', '2', '2023-11-22 03:52:42', '2023-11-22 03:52:42'),
(12, 6, 'Lưu Văn Khánh', 'luuvankhanh8888@gmail.com', 'Văn Lang , Duy Nhất , Vũ Thư ,', '0364494756', '1', '2023-11-22 04:00:54', '2023-11-22 04:00:54'),
(13, 6, 'Hường', 'luuvankhanh6368@gmail.com', 'Thái Bình', '0339917254', '1', '2023-11-25 04:36:47', '2023-11-25 04:36:47'),
(14, 6, 'Lưu Văn Khánh', 'luuvankhanh6368@gmail.com', 'Văn Lang , Duy Nhất , Vũ Thư ,', '0339917254', '1', '2023-11-25 09:16:03', '2023-11-25 09:16:03'),
(15, 6, 'Hường', 'luuvankhanh6368@gmail.com', 'thái bình', '0339917254', '1', '2023-11-26 04:35:00', '2023-11-26 04:35:00'),
(16, 7, 'Lưu Văn Khánh', 'luuvankhanh6368@gmail.com', 'Vũ Thư', '0339917254', '1', '2023-11-27 08:02:28', '2023-11-27 08:02:28'),
(17, 6, 'Hoa', 'luuvankhanh1234@gmail.com', 'Chùa Keo', '0364494756', '1', '2023-11-27 09:43:29', '2023-11-27 09:43:29'),
(18, 6, 'Thúy', 'luuvankhanh0000@gmail.com', 'Tiền Hải', '0975748747', '1', '2023-11-27 09:44:04', '2023-11-27 09:44:04'),
(19, 6, 'Hường', 'luuvankhanh6368@gmail.com', 'thái bình', '0339917254', '1', '2023-11-27 09:47:13', '2023-11-27 09:47:13'),
(20, 9, 'Hoàng Minh Quân', 'kirotoa65@gmail.com', 'phố mới bất bạt', '0862914419', '1', '2023-11-28 03:40:21', '2023-11-28 03:40:21'),
(21, 9, 'Hoàng Minh Quân', 'quanhmph40194@fpt.edu.vn', 'phố mới bất bạt', '0862914419', '1', '2023-11-28 07:21:57', '2023-11-28 07:21:57'),
(22, 9, 'd', 'quanhmph40194@fpt.edu.vn', 's', '0862914419', '1', '2023-11-29 01:39:30', '2023-11-29 01:39:30'),
(23, 9, 'quanhmph40194@fpt.edu.vn', 'baove882004@gmail.com', 'phố mới bất bạt', '0862914419', '1', '2023-11-29 01:42:12', '2023-11-29 01:42:12'),
(24, 9, 'd', 'yatoshin3@gmail.com', 'phố mới bất bạt', '0862914419', '1', '2023-11-29 01:47:11', '2023-11-29 01:47:11'),
(25, 10, 'quan', 'quanhmph40194@fpt.edu.vn', 'phố mới bất bạt', '0862914419', '1', '2024-09-09 12:44:40', '2024-09-09 12:44:40'),
(26, 10, 'quan', 'quanhmph40194@fpt.edu.vn', 'phố mới bất bạt', '0862914419', '1', '2024-09-09 12:45:26', '2024-09-09 12:45:26'),
(27, 10, 'quan', 'quanhmph40194@fpt.edu.vn', 'phố mới bất bạt', '0862914419', '1', '2024-09-16 11:40:37', '2024-09-16 11:40:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangchitiet`
--

CREATE TABLE `donhangchitiet` (
  `id` int(11) NOT NULL,
  `ma_don_hang` int(11) NOT NULL,
  `ma_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `tao_ngay` timestamp NOT NULL DEFAULT current_timestamp(),
  `cap_nhat_ngay` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhangchitiet`
--

INSERT INTO `donhangchitiet` (`id`, `ma_don_hang`, `ma_san_pham`, `so_luong`, `don_gia`, `tao_ngay`, `cap_nhat_ngay`) VALUES
(11, 11, 2, 2, 200000, '2023-11-22 03:52:42', '2023-11-22 03:52:42'),
(12, 12, 2, 2, 200000, '2023-11-22 04:00:54', '2023-11-22 04:00:54'),
(13, 13, 2, 4, 200000, '2023-11-25 04:36:47', '2023-11-25 04:36:47'),
(14, 14, 2, 6, 200000, '2023-11-25 09:16:03', '2023-11-25 09:16:03'),
(15, 15, 2, 9, 200000, '2023-11-26 04:35:00', '2023-11-26 04:35:00'),
(16, 16, 2, 3, 200000, '2023-11-27 08:02:28', '2023-11-27 08:02:28'),
(17, 17, 3, 3, 200000, '2023-11-27 09:43:29', '2023-11-27 09:43:29'),
(18, 18, 2, 1, 12000000, '2023-11-27 09:44:04', '2023-11-27 09:44:04'),
(19, 19, 2, 1, 12000000, '2023-11-27 09:47:13', '2023-11-27 09:47:13'),
(20, 20, 5, 1, 25000000, '2023-11-28 03:40:21', '2023-11-28 03:40:21'),
(21, 21, 4, 2, 20000000, '2023-11-28 07:21:57', '2023-11-28 07:21:57'),
(22, 22, 6, 1, 20900000, '2023-11-29 01:39:30', '2023-11-29 01:39:30'),
(23, 23, 6, 1, 20900000, '2023-11-29 01:42:12', '2023-11-29 01:42:12'),
(24, 24, 6, 1, 20900000, '2023-11-29 01:47:11', '2023-11-29 01:47:11'),
(25, 25, 4, 1, 20000000, '2024-09-09 12:44:40', '2024-09-09 12:44:40'),
(26, 26, 5, 1, 25000000, '2024-09-09 12:45:26', '2024-09-09 12:45:26'),
(27, 26, 4, 1, 20000000, '2024-09-09 12:45:26', '2024-09-09 12:45:26'),
(28, 27, 2, 1, 12000000, '2024-09-16 11:40:37', '2024-09-16 11:40:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `ma_vai_tro` int(11) NOT NULL,
  `ten_dang_nhap` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ho_va_ten` varchar(100) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `kich_hoat` enum('1','2') NOT NULL DEFAULT '1',
  `tao_ngay` timestamp NOT NULL DEFAULT current_timestamp(),
  `cap_nhat_ngay` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `ma_vai_tro`, `ten_dang_nhap`, `email`, `ho_va_ten`, `mat_khau`, `kich_hoat`, `tao_ngay`, `cap_nhat_ngay`) VALUES
(6, 1, 'Luuvankhanh2', 'luuvankhanh8888@gmail.com', 'Lưu Văn Khánh', '9f35fec1b060e420013198bc2b14a25b', '1', '2023-11-22 03:52:16', '2023-11-22 03:52:16'),
(7, 2, 'huong123', 'luuvankhanh6368@gmail.com', 'Hường', '59ec5983e698b882c1b306bf2ed88759', '2', '2023-11-27 07:35:47', '2023-11-27 07:35:47'),
(9, 2, 'quan', 'kirotoa65@gmail.com', 'd', '8d67c5e5238bd423c80376ac54fb40c5', '1', '2023-11-28 03:39:15', '2023-11-28 03:39:15'),
(10, 1, 'tiendatls65', 'dat116650@gmail.com', 'dat', 'ec6bfb063c550cdb87cc39968130cd85', '1', '2024-09-09 12:23:57', '2024-09-09 12:23:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `ten` varchar(30) NOT NULL,
  `gia` int(11) NOT NULL,
  `giam_gia` int(11) NOT NULL,
  `hinh_anh` varchar(30) NOT NULL,
  `mo_ta` mediumtext NOT NULL,
  `ma_danh_muc` int(11) NOT NULL,
  `tao_ngay` timestamp NOT NULL DEFAULT current_timestamp(),
  `cap_nhat_ngay` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `ten`, `gia`, `giam_gia`, `hinh_anh`, `mo_ta`, `ma_danh_muc`, `tao_ngay`, `cap_nhat_ngay`) VALUES
(2, 'Dell Alienware Series', 12000000, 8000, '1.jpg', 'Đánh giá chi tiết về Xiaomi 13T Chiếc 13T của nhà Xiaomi được đánh giá rất cao cả về cấu hình lẫn thiết kế và camera. Tuy chưa chính thức ra mắt nhưng các rò rỉ xung quanh sản phẩm này cũng đủ giới yêu công nghệ ấn tượng.  Xiaomi 13T được trang bị bộ vi xử lý mạnh mẽ, dung lượng lưu trữ hào phóng Sức mạnh của chiếc smartphone này đến từ bộ vi xử lý hàng đầu MediaTek Dimensity 8200-Ultra đi cùng GPU Immortalis-G715 MC11, tạo nên một bộ đôi hoàn hảo cho những trải nghiệm đồ họa siêu mượt.  Xiaomi 13T được trang bị bộ vi xử lý mạnh mẽ, dung lượng lưu trữ hào phóng  Thiết bị này còn sở hữu khả năng đa nhiệm xuất sắc với RAM 12GB, cho phép bạn vận hành nhiều ứng dụng cùng một lúc mà không hề gặp phải vấn đề giật lag. Về dung lượng lưu trữ, sản phẩm được trrang bị bộ nhớ trong lên tới 256GB, giúp người dùng thoải mái lưu trữ dữ liệu mà không lo đầy bộ nhớ. Tất cả đều được hỗ trợ bởi bộ nhớ chuẩn UFS 4.0, giúp tăng tốc độ truy xuất dữ liệu.  Ngoài ra, thiết bị có thể kết nối đa dạng với Android 13, USB-C, Wi-Fi 7, Bluetooth 5.4 và NFC, có khả năng chống nước IP68 và tích hợp đầu đọc dấu vân tay.  Màn hình AMOLED với chất lượng hiển thị sắc nét trên Xiaomi 13T Thiết bị sở hữu tấm nền AMOLED kích thước 6.67 inch với chất lượng hiển thị sống động, rực rỡ. Bên cạnh đó, với độ phân giải 1,5K ở 2712 x 1220 pixel, mỗi chi tiết trên màn hình xuất hiện rõ ràng và sắc nét, tạo nên trải nghiệm xem đẳng cấp với mật độ điểm ảnh 446ppi. Nó còn có tốc độ làm mới cao 144Hz, mang đến chuyển động mượt mà, không gây chậm trễ, thích hợp cho việc giải trí và chơi game.  Một đặc điểm nổi bật khác là khả năng chiếu sáng ấn tượng của màn hình: từ mức sáng cơ bản 500 nits, tăng lên 1200 nits trong Chế độ độ sáng cao (HBM), và tiến xa hơn đến đỉnh điểm 2600 nits. Nhờ đó, thiết bị có thể hiển thị nội dung rõ ràng trên màn hình ngay cả dưới ánh sáng mặt trời chói lọi.  Camera ấn tượng, thích hợp cho người đam mê nhiếp ảnh Xiaomi 13T được trang bị một bộ ba ống kính phía sau có khả năng nắm bắt mọi khung hình một cách sắc nét và rõ ràng với cảm biến chính 50MP, camera tele 50MP và camera góc siêu rộng 12MP. Với khẩu độ f/1.9, tiêu cự 24mm, kích thước 1/1.67&quot; và độ độ lớn điểm ảnh 0.64µm, cảm biến này không chỉ hỗ trợ góc chụp rộng mà còn giúp thu sáng tối ưu.  Tính năng PDAF cùng OIS trên thiết bị cũng làm tăng khả năng lấy nét một cách nhanh chóng, đồng thời giảm thiểu rung lắc trong quá trình quay hay chụp. Hơn nữa, cụm camera hình vuông ở phía sau với 3 cảm biến và đèn LED trợ sáng tạo nên sự tương đồng với thiết kế của Xiaomi 13.  Xiaomi 13T với thiết kế tinh tế, viên PIN khủng Bên cạnh hiệu năng mạnh cùng cụm camera ấn tượng, 13T còn sở hữu thiết kế tinh tế và hiện đại. Màn hình đục lỗ được bao quanh bởi viền siêu mỏng trên cả 4 cạnh, mang đến cảm giác không gian vô tận và trải nghiệm thị giác tuyệt vời.  Mẫu điện thoại này từ nhà Xiaomi còn được trang bị với viên pin dung lượng 5000mAh, đảm bảo thời gian sử dụng dài lâu. Nó còn được hỗ trợ bởi công nghệ sạc nhanh 67W Mi Turbo Charge, cho phép người dùng nhanh chóng trở lại với chiếc smartphone của mình trong mỗi lần sạc.  Ngày ra mắt dự kiến của Xiaomi 13T Theo nhiều nguồn tin uy tín, chiếc smartphone này sẽ ra mắt cùng ngày với Xiaomi 13T Pro, tức là vào tháng 9/2023 tới đây trên thị trường quốc tế. Và sản phẩm sẽ sớm được mở bán tại các cửa hàng thuộc hệ thống Hoàng Hà Mobile để bạn sớm chiêm ngưỡng chiếc smartphone này ngoài đời.  Xiaomi 13T giá dự kiến bao nhiêu?  Về giá bán dự kiến, chiếc smartphone này sẽ có mức giá từ 549 EUR, tương đương khoảng 14.2 triệu đồng cho phiên bản với RAM 8 GB - 256 GB tại Anh. Còn tại thị trường châu Âu rộng lớn, mức giá này sẽ tăng lên và trong khoảng 649 EUR hay 16.8 triệu đồng cho cùng phiên bản cấu hình.  Mua Xiaomi 13T chính hãng tại Hoàng Hà Mobile  Hy vọng thông tin trên đây sẽ giúp bạn nắm bắt những thông tin mới nhất về chiếc 13T từ nhà Xiaomi. Có thể thấy, chiếc điện thoại này vừa có thiết kế đẹp mắt vừa sở hữu cấu hình mạnh, PIN “trâu” và mức giá hấp dẫn. Để được tư vấn thêm về sản phẩm, đừng ngần ngại liên hệ với chúng tôi bất cứ khi nào bạn muốn nhé.', 1, '2023-11-16 14:36:47', '2023-11-16 14:36:47'),
(3, 'HP Omen Series HP Omen', 20000000, 8000, '22.jpg', 'sssssssssssssss', 1, '2023-11-16 14:36:47', '2023-11-16 14:36:47'),
(4, 'Lenovo Legion Series', 20000000, 8000, '44.jpg', 'ffffffffff', 1, '2023-11-16 14:36:47', '2023-11-16 14:36:47'),
(5, 'Gigabyte Aorus Series', 25000000, 250000, '1.jpg', 'San pham 4', 1, '2023-11-16 14:36:47', '2023-11-16 14:36:47'),
(6, 'ROG Zephyrus Duo Series ', 20900000, 18000000, '55.jpg', 'THỂ LỆ CHƯƠNG TRÌNH PRE-ORDER IPHONE 16 (20-26/9)  1. Sản phẩm áp dụng:  - iPhone 16 128/256/512GB - iPhone 16 128/256/512GB - iPhone 16 Pro 128/256/512GB/1TB - iPhone 16 Pro Max 256/512GB/1TB  2. Thời gian chương trình:  - Thời gian đặt cọc: 00:01 20/09/2024 - 23:59 26/09/2024  - Thời gian trả hàng: 00:01 27/09/2024  3. Chương trình khuyến mãi:  Áp dụng với khách hàng đặt hàng trước iPhone 16 Series trong thời gian chương trình:   + Giảm hấp dẫn đến 2 triệu khi thanh toán qua ngân hàng (*)  + Trả góp 0%: không phụ phí, không trả trước.  + Thu cũ giá tốt nhất thị trường, trợ giá lên đời đến 5 triệu.  + Phụ kiện mua kèm giảm hấp dẫn đến 60%, Gói bảo hành Apple giảm đến 10%.  (*) Chi tiết ưu đãi thanh toán ngân hàng:  - Giảm 2 triệu: thẻ JCB MB, MSB, VIB, Techcombank (Credit + debit).  - Giảm 1.6 triệu: thẻ Techcombank (Credit + debit).  - Giảm 1.5 triệu: thẻ ACB, Eximbank.  - Giảm 1 triệu: VNPAY, MoMo, UOB, MPOS, Sacombank, BIDV, VP Bank, Standard Chartered, Shinhan Bank, Bản Việt, HSBC, Kredivo, OCB.  - Hoàn thêm đến 2 triệu khi mở mới thẻ tín dụng HSBC.  Lưu ý ưu đãi thanh toán ngân hàng:  - Thời gian áp dụng: từ 00:01 20/09/2024 cho đến khi hết suất.  - Được áp dụng đồng thời với trả góp 0% ,không phụ phí, không trả trước.  - Mỗi thẻ chỉ được sử dụng 1 lần cho 1 ưu đãi.  - Mỗi đơn hàng chỉ áp dụng 1 ưu đãi qua đối tác thanh toán, không áp dụng cộng dồn.  - Các khuyến mãi chỉ áp dụng cho cá nhân, không áp dụng cho doanh nghiệp, bán buôn.  - Trong suốt quá trình đặt hàng - thu cũ - thanh toán, khách hàng chỉ sử dụng 1 SĐT (Nếu đổi SĐT sẽ mất ưu đãi cọc trước) và không được chuyển ưu đãi cọc cho người khác.  4. Hướng dẫn đặt hàng:  - Bước 1: Quý khách đặt hàng sản phẩm qua website hoặc gọi tổng đài miễn phí 1800.2097 để được hỗ trợ đặt hàng.  - Bước 2: Quý khách lựa chọn 1 trong 2 hình thức thanh toán đặt trước: thanh toán trực tuyến (sử dụng thẻ tín dụng, ATM, chuyển khoản) hoặc thanh toán tại cửa hàng CellphoneS gần nhất. Số tiền đặt cọc: 1.000.000đ/sản phẩm (có thể hoàn cọc nếu khách hàng đổi ý).  - Bước 3: Ngày mở bán, tổng đài sẽ liên hệ mời Quý khách lựa chọn hình thức nhận hàng Giao hàng tại nhà hoặc Đến cửa hàng gần nhất để nhận hàng.  *Lưu ý:   - Để phục vụ việc kiểm tra tình trạng máy, toàn bộ sản phẩm phải được bóc máy và kích hoạt ngay tại thời điểm mua.  - Khách đặt hàng và cọc 1 triệu để xác nhận đơn hàng, ghi nhận theo thời gian thực tế hệ thống CellphoneS nhận được tiền cọc.  - 1 SĐT chỉ được đặt tối đa 2 máy với iPhone 16 Pro và iPhone 16 Pro Max.  - Số lượng sản phẩm đặt trước có giới hạn. CellphoneS sẽ ngừng nhận cọc khi hết suất.  5. Trả hàng:  - Nắm bắt nhu cầu sở hữu sớm iPhone 16 series siêu Hot, CellphoneS sẽ tổ chức trả hàng sớm cho khách đặt trước trên toàn hệ thống CellphoneS từ 0h01 ngày 27/09 (ưu tiên theo thời gian đặt hàng).  *Thời gian:  - 22:00 26/09: Nhận đón khách  - 00:01 27/09: Bắt đầu trả hàng   *Lưu ý:  - Khách hàng có nhu cầu thu cũ - trợ giá hấp dẫn tại CellphoneS có thể đăng kí hỗ trợ ngay tại quầy tại Event trước khi vào nhận hàng, thủ tục định giá nhanh chóng chỉ 5-7 phút.  Mọi thắc mắc liên hệ tổng đài 1800.2097 (miễn phí) để biết thêm thông tin. Trân trọng!', 1, '2023-11-16 14:36:47', '2023-11-16 14:36:47'),
(22, 'abcd', 12, 1, 'z5818905114900_213e4c8134f9a2c', 'abcd', 1, '2024-09-16 11:42:28', '2024-09-16 11:42:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vaitro`
--

CREATE TABLE `vaitro` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `tao_ngay` timestamp NOT NULL DEFAULT current_timestamp(),
  `cap_nhat_ngay` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `vaitro`
--

INSERT INTO `vaitro` (`id`, `ten`, `tao_ngay`, `cap_nhat_ngay`) VALUES
(1, 'Admin', '2023-11-16 12:13:15', '2023-11-16 12:13:15'),
(2, 'User', '2023-11-16 12:13:15', '2023-11-16 12:13:15');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_customer` (`ma_khach_hang`),
  ADD KEY `fk_id_product` (`ma_san_pham`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`ma_khach_hang`);

--
-- Chỉ mục cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order_id` (`ma_don_hang`),
  ADD KEY `fk_ma_san_pham` (`ma_san_pham`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_role` (`ma_vai_tro`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cateid` (`ma_danh_muc`);

--
-- Chỉ mục cho bảng `vaitro`
--
ALTER TABLE `vaitro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `vaitro`
--
ALTER TABLE `vaitro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_id_customer` FOREIGN KEY (`ma_khach_hang`) REFERENCES `khachhang` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_product` FOREIGN KEY (`ma_san_pham`) REFERENCES `sanpham` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`ma_khach_hang`) REFERENCES `khachhang` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD CONSTRAINT `fk_ma_san_pham` FOREIGN KEY (`ma_san_pham`) REFERENCES `sanpham` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_order_id` FOREIGN KEY (`ma_don_hang`) REFERENCES `donhang` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `fk_id_role` FOREIGN KEY (`ma_vai_tro`) REFERENCES `vaitro` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_cateid` FOREIGN KEY (`ma_danh_muc`) REFERENCES `danhmuc` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
