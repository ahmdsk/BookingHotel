-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 01 Jun 2022 pada 19.28
-- Versi server: 5.7.38
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medi_hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_fasilitas`
--

INSERT INTO `tb_fasilitas` (`id_fasilitas`, `id_kamar`) VALUES
(15, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fasilitas_kamar`
--

CREATE TABLE `tb_fasilitas_kamar` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(100) NOT NULL,
  `desk_fasilitas` text,
  `gambar_fasilitas` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_fasilitas_kamar`
--

INSERT INTO `tb_fasilitas_kamar` (`id_fasilitas`, `nama_fasilitas`, `desk_fasilitas`, `gambar_fasilitas`) VALUES
(12, 'Free Wi-Fi', 'The massive investment in a hotel or resort requires constant reviews and control in order to make it a successful investment.', 'https://soscrisis.org/hotel_booking/uploads/img-585275419.png'),
(13, 'Premium Pool', 'Choose from 4 unique ready made concepts, let us help you create the concept perfect for you or let HCA.', 'https://soscrisis.org/hotel_booking/uploads/img-87121509.png'),
(14, 'Coffee Maker', 'HCA\'s Owner\'s Representation is taking care of just these important factors, may it be through regular site visits and spot checks.', 'https://soscrisis.org/hotel_booking/uploads/img-1150948265.png'),
(15, 'Bar Wine', 'For properties with third party management companies, HCA Consultants will as well administer the terms and conditions.', 'https://soscrisis.org/hotel_booking/uploads/img-1844403462.png'),
(16, 'TV HD', 'We provide a critical analysis of a hotel\'s marketing strategy, bench-marking it against industry and competitive practices.', 'https://soscrisis.org/hotel_booking/uploads/img-189994188.png'),
(17, 'Restaurant', 'A hotel and restaurant investment deserves careful and market oriented financial planning and projections.', 'https://soscrisis.org/hotel_booking/uploads/img-353040593.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(11) NOT NULL,
  `gambar_galeri` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `gambar_galeri`) VALUES
(2, 'https://soscrisis.org/hotel_booking/uploads/galeri/galeri-1862077689.jpg'),
(6, 'https://soscrisis.org/hotel_booking/uploads/galeri/galeri-1472293013.jpg'),
(7, 'https://soscrisis.org/hotel_booking/uploads/galeri/galeri-1176191857.jpg'),
(8, 'https://soscrisis.org/hotel_booking/uploads/galeri/galeri-443565741.jpg'),
(9, 'https://soscrisis.org/hotel_booking/uploads/galeri/galeri-1411238295.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_instansi`
--

CREATE TABLE `tb_instansi` (
  `id` int(11) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `maps_instansi` text NOT NULL,
  `logo_instansi` varchar(100) NOT NULL,
  `desk_instansi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_instansi`
--

INSERT INTO `tb_instansi` (`id`, `nama_instansi`, `email`, `alamat`, `notelp`, `maps_instansi`, `logo_instansi`, `desk_instansi`) VALUES
(1, 'Hiroto', 'hiroto.official@hiroto.com', 'Jl. ZA. Pagar Alam No.199, Labuhan Ratu, Kec. Kedaton, Kota Bandar Lampung, Lampung 35133', '+62 (841) 30000', '&lt;iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1983.2341513859906!2d106.83079940665438!3d-6.201785040088569!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f416dc4d519d:0x77f0827291f0c4c7!2sRumah Dinas Wapres Republik Indonesia!5e0!3m2!1sen!2sus!4v1653377888917!5m2!1sen!2sus\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"&gt;&lt;/iframe&gt;', 'https://soscrisis.org/hotel_booking/uploads/instansi/img-1011897225.png', '<p>Metasurfaces are generally designed by placing scatterers in periodic or pseudo-periodic grids</p><p>I am convinced the only way to make money online is to have a consistent Advertising plan. A plan you are willing to work hard on and commit to for a selected period of time. When making this plan, you need to do two things.</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kamar`
--

CREATE TABLE `tb_kamar` (
  `id_kamar` int(11) NOT NULL,
  `no_kamar` varchar(50) NOT NULL,
  `max_dewasa` int(5) NOT NULL,
  `max_anak` int(5) NOT NULL,
  `status_kamar` enum('1','2','3') NOT NULL,
  `stok_kamar` int(11) NOT NULL,
  `id_tipe_kamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kamar`
--

INSERT INTO `tb_kamar` (`id_kamar`, `no_kamar`, `max_dewasa`, `max_anak`, `status_kamar`, `stok_kamar`, `id_tipe_kamar`) VALUES
(13, 'HR013', 2, 4, '1', 0, 6),
(14, 'HR014', 2, 2, '1', 3, 6),
(15, 'HR015', 2, 2, '1', 4, 8),
(16, 'HR016', 2, 4, '1', 9, 8),
(17, 'HR017', 2, 3, '1', 2, 9),
(18, 'HR018', 4, 5, '1', 2, 6),
(19, 'HR019', 3, 4, '1', 0, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_masukan`
--

CREATE TABLE `tb_masukan` (
  `id_masukan` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `masukan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_masukan`
--

INSERT INTO `tb_masukan` (`id_masukan`, `nama_user`, `email_user`, `masukan`) VALUES
(3, 'Ahmad ganteng', 'ahmad@gmail.com', 'tess'),
(5, 'James Alexander', 'james.nasa@nasa.gov', 'tes message');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `cek_in` datetime NOT NULL,
  `cek_out` datetime NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `no_ident` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `jumlah_kamar` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_pesanan`, `cek_in`, `cek_out`, `nama_lengkap`, `email`, `notelp`, `jenis_kelamin`, `no_ident`, `alamat`, `id_kamar`, `jumlah_kamar`, `status`, `created_at`) VALUES
(1, '2022-05-23 00:00:00', '2022-05-23 14:33:24', 'Ahmad Shaleh', 'ahmad.hacker@666.com', '+1803291312', 'pria', '123790123870', 'Jl. ZA. Pagar Alam No.199, Labuhan Ratu, Kec. Kedaton, Kota Bandar Lampung, Lampung 35133', 14, 2, 1, '2022-05-25 06:55:06'),
(2, '2022-05-26 00:00:00', '2022-05-27 00:00:00', 'Ahmad Shaleh', 'ahmad.hacker@666.com', '+1803291312', 'pria', '123790123870', 'Jl. ZA. Pagar Alam No.199, Labuhan Ratu, Kec. Kedaton, Kota Bandar Lampung, Lampung 35133', 14, 3, 0, '2022-05-25 07:16:12'),
(3, '2022-05-28 00:00:00', '2022-05-29 00:00:00', 'Ahmad Shaleh', 'james.nasa@nasa.gov', '+1803291358', 'pria', '1429142708790', 'bandar lampung', 17, 2, 0, '2022-05-25 08:28:58'),
(4, '2022-05-26 00:00:00', '2022-05-27 00:00:00', 'Ahmad Adi Nugraha', 'adi@ganteng.com', '0893188031', 'pria', '199381983108', 'bandar lampung', 15, 1, 0, '2022-05-25 22:52:44'),
(5, '2022-05-26 00:00:00', '2022-05-27 00:00:00', 'Ahmad Adi Nugraha', 'adi@ganteng.com', '0893188031', 'pria', '199381983108', 'bandar lampung', 15, 1, 0, '2022-05-25 23:18:25'),
(6, '2022-05-27 00:00:00', '2022-05-28 00:00:00', 'Ahmad Shaleh', 'ahmaddd@gmail.com', '0892183291', 'pria', '12328173021', 'bandar lampung', 15, 1, 0, '2022-05-25 23:21:34'),
(7, '2022-05-26 00:00:00', '2022-05-27 00:00:00', 'Ronaldhino', 'ronal@yahoo.id', '99013810318', 'pria', '931392103831', 'Amerika', 18, 1, 0, '2022-05-25 23:28:11'),
(8, '2022-05-27 00:00:00', '2022-05-28 00:00:00', 'Alya', 'alyarahmasalsabila346@gmail.com', '089613923738', 'Wanita', '1029292929', 'Xhxjxkkskz', 14, 2, 0, '2022-05-26 08:37:56'),
(9, '2022-05-26 00:00:00', '2022-05-27 00:00:00', 'Ahmad Junaidi', 'ahmad.junaidi@yahoo.id', '0899616897', 'pria', '168886189196', 'Bandar Lampung', 14, 1, 0, '2022-05-26 08:40:44'),
(10, '2022-05-26 00:00:00', '2022-05-27 00:00:00', 'Ahmad Junaidi', 'ahmad.junaidi@yahoo.id', '0899616897', 'pria', '168886189196', 'Bandar Lampung', 14, 1, 0, '2022-05-26 08:44:00'),
(11, '2022-05-26 00:00:00', '2022-05-27 00:00:00', 'Ahmad Junaidi', 'ahmad.junaidi@yahoo.id', '0899616897', 'pria', '168886189196', 'Bandar Lampung', 14, 1, 0, '2022-05-26 08:45:24'),
(12, '2022-05-30 00:00:00', '2022-05-31 00:00:00', 'aha', 'mamas@gmail.com', '0977288133', 'pria', '1123434343455', 'mars', 18, 1, 1, '2022-05-30 09:20:45'),
(13, '2022-05-31 00:00:00', '2022-06-02 00:00:00', 'Ahmad Shaleh Kurniawan', 'ahmadganteng@gmail.com', '0899831223181', 'pria', '189281301230101', 'Jl. ZA. Pagar Alam No.199, Labuhan Ratu, Kec. Kedaton, Kota Bandar Lampung, Lampung 35133', 18, 2, 1, '2022-05-31 09:03:17'),
(14, '2022-06-02 00:00:00', '2022-06-16 00:00:00', 'firman', 'testerr449@gmail.com', '0898890000', 'pria', '168886189196', 'Antara', 18, 1, 0, '2022-06-02 02:20:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tamu`
--

CREATE TABLE `tb_tamu` (
  `id_tamu` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `no_ident` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tamu`
--

INSERT INTO `tb_tamu` (`id_tamu`, `nama_lengkap`, `email`, `notelp`, `jenis_kelamin`, `no_ident`, `alamat`) VALUES
(1, 'Ahmad Junaidi', 'ahmad.junaidi@yahoo.id', '0899616897', 'pria', '168886189196', 'Bandar Lampung'),
(2, 'aha', 'mamas@gmail.com', '0977288133', 'pria', '1123434343455', 'mars'),
(3, 'Ahmad Shaleh Kurniawan', 'ahmadganteng@gmail.com', '0899831223181', 'pria', '189281301230101', 'Jl. ZA. Pagar Alam No.199, Labuhan Ratu, Kec. Kedaton, Kota Bandar Lampung, Lampung 35133'),
(4, 'firman', 'testerr449@gmail.com', '0898890000', 'pria', '168886189196', 'Antara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tipe_kamar`
--

CREATE TABLE `tb_tipe_kamar` (
  `id_tipe` int(11) NOT NULL,
  `tipe_kamar` varchar(100) NOT NULL,
  `harga_kamar` int(11) NOT NULL,
  `desk_kamar` text,
  `gambar_kamar` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tipe_kamar`
--

INSERT INTO `tb_tipe_kamar` (`id_tipe`, `tipe_kamar`, `harga_kamar`, `desk_kamar`, `gambar_kamar`) VALUES
(6, 'Luxury Room', 250000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque laudantium molestiae id animi. Inventore neque tempora modi repellendus quia voluptate reiciendis perferendis laborum, iure vero repellat ut quo veniam amet?', 'https://soscrisis.org/hotel_booking/uploads/kamar/img-1662430679.jpg'),
(8, 'Deluxe Room', 150000, 'Karya kolaborasi antara arsitek lingkungan Popo Danes dan mantan desainer Super Potato Tokyo Nobuyuki Narabayashi untuk mengakomodasi gaya hidup modern di Bali.', 'https://soscrisis.org/hotel_booking/uploads/kamar/img-2086520446.jpg'),
(9, 'Premium King Room', 300000, 'Berlokasi strategis di Dago yang legendaris, THE 1O1 Bandung Dago adalah tempat yang tepat untuk menjelajahi kota yang semarak ini. Berjarak kurang dari 5 km, hotel bintang 4 ini dapat dengan mudah diakses dari Bandara Husein Sastranegara dan Stasiun Kereta Api Bandung. Dengan lokasinya yang strategis, hotel ini menawarkan akses mudah ke destinasi yang wajib dikunjungi di kota ini seperti Pusat Perbelanjaan, Factory Outlet, Hiburan, Restoran, dan Tempat Wisata.', 'https://soscrisis.org/hotel_booking/uploads/kamar/img-1189675224.jpg'),
(12, 'Double Room', 200000, '<p>hotel Smart Stylish Experience baru, terletak di jantung Cengkareng Business City (CBC). </p><p>Hotel ini hanya berjarak 10 menit dari Bandara Internasional Soekarno-Hatta dan merupakan rumah yang ideal untuk menyambut pelancong bisnis, pembuat liburan, dan tamu yang menginap lama.</p>', 'https://soscrisis.org/hotel_booking/uploads/kamar/img-1076979096.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ulasan`
--

CREATE TABLE `tb_ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `email_users` varchar(50) NOT NULL,
  `rating` int(11) NOT NULL,
  `masukan` text,
  `id_tipe` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ulasan`
--

INSERT INTO `tb_ulasan` (`id_ulasan`, `email_users`, `rating`, `masukan`, `id_tipe`, `created_at`) VALUES
(1, 'adi@ganteng.com', 3, 'Hotel Bagus', 8, '2022-05-26 06:26:35'),
(2, 'ahmaddd@gmail.com', 5, 'Semoga lebih baik lagi xixi', 8, '2022-05-26 06:26:35'),
(3, 'ronal@yahoo.id', 5, 'Hotel Keren Dengan View Menarik\r\n', 6, '2022-05-26 06:28:47'),
(4, 'mamas@gmail.com', 5, 'mantap', 6, '2022-05-30 02:21:11'),
(5, 'ahmadganteng@gmail.com', 5, 'Kamar bersih, pelayanan ramah dan baik. terimakasih', 6, '2022-05-31 02:04:32'),
(6, 'testerr449@gmail.com', 2, 'lumayan ', 6, '2022-06-01 19:21:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `jenis_kelamin` int(11) NOT NULL,
  `hak_akses` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `nama_lengkap`, `email`, `password`, `no_telp`, `jenis_kelamin`, `hak_akses`, `created_at`) VALUES
(1, 'Ahmad Shaleh', 'admin@tes.com', 'admin', '920139210', 0, 0, '2022-05-08 06:47:14'),
(10, 'Anggun Saputri', 'resepsionis@tes.com', '12345', '0895605997812', 1, 1, '2022-05-12 05:08:32'),
(11, 'Ikhsan Fajar', 'ikhsan.fajar@gmail.com', '12345', '0831028310', 1, 2, '2022-05-12 05:09:27'),
(12, 'Muhammad Satria', 'msatria1337@gmail.com', '12345', '08913270123', 0, 1, '2022-05-12 06:16:58');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD KEY `id_fasilitas` (`id_fasilitas`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indeks untuk tabel `tb_fasilitas_kamar`
--
ALTER TABLE `tb_fasilitas_kamar`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `tb_instansi`
--
ALTER TABLE `tb_instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kamar`
--
ALTER TABLE `tb_kamar`
  ADD PRIMARY KEY (`id_kamar`),
  ADD KEY `id_tipe_kamar` (`id_tipe_kamar`);

--
-- Indeks untuk tabel `tb_masukan`
--
ALTER TABLE `tb_masukan`
  ADD PRIMARY KEY (`id_masukan`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indeks untuk tabel `tb_tamu`
--
ALTER TABLE `tb_tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indeks untuk tabel `tb_tipe_kamar`
--
ALTER TABLE `tb_tipe_kamar`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indeks untuk tabel `tb_ulasan`
--
ALTER TABLE `tb_ulasan`
  ADD PRIMARY KEY (`id_ulasan`),
  ADD KEY `id_tipe` (`id_tipe`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_fasilitas_kamar`
--
ALTER TABLE `tb_fasilitas_kamar`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_instansi`
--
ALTER TABLE `tb_instansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_kamar`
--
ALTER TABLE `tb_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_masukan`
--
ALTER TABLE `tb_masukan`
  MODIFY `id_masukan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_tamu`
--
ALTER TABLE `tb_tamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_tipe_kamar`
--
ALTER TABLE `tb_tipe_kamar`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_ulasan`
--
ALTER TABLE `tb_ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD CONSTRAINT `tb_fasilitas_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `tb_kamar` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_fasilitas_ibfk_2` FOREIGN KEY (`id_fasilitas`) REFERENCES `tb_fasilitas_kamar` (`id_fasilitas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_kamar`
--
ALTER TABLE `tb_kamar`
  ADD CONSTRAINT `tb_kamar_ibfk_1` FOREIGN KEY (`id_tipe_kamar`) REFERENCES `tb_tipe_kamar` (`id_tipe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD CONSTRAINT `tb_pesanan_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `tb_kamar` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_ulasan`
--
ALTER TABLE `tb_ulasan`
  ADD CONSTRAINT `tb_ulasan_ibfk_1` FOREIGN KEY (`id_tipe`) REFERENCES `tb_tipe_kamar` (`id_tipe`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
