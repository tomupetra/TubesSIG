-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 09:48 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dewia`
--

-- --------------------------------------------------------

--
-- Table structure for table `webta`
--

CREATE TABLE `webta` (
  `id` int(100) NOT NULL,
  `Nama_berita` text NOT NULL,
  `Isi_berita` text NOT NULL,
  `Nama_upload` varchar(100) NOT NULL,
  `Waktu` date NOT NULL,
  `Tipe` varchar(100) NOT NULL,
  `Gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webta`
--

INSERT INTO `webta` (`id`, `Nama_berita`, `Isi_berita`, `Nama_upload`, `Waktu`, `Tipe`, `Gambar`) VALUES
(1, 'Litbang \"Kompas”: Pemilih Anies Didominasi Pemilih Partai Demokrat dan PKS\r\n', 'JAKARTA, KOMPAS.com - Jajak pendapat Litbang Kompas pada Oktober 2022 menunjukkan pemilih Anies Baswedan didominasi oleh pemilih Partai Demokrat dan Partai Keadilan Sejahtera (PKS). Berdasarkan survei yang berlangsung 24 September-7 Oktober 2022 itu, Anies Baswedan dipilih oleh 19,8 persen responden pemilih Partai Demokrat. Sedangkan pemilih PKS yang memilih Anies sebesar 20,7 persen. “Sementara porsi responden pemilih Nasdem hanya menyumbang 4 persen dari pemilih Anies,” ujar peneliti Litbang Kompas Yohan Wahyu dikutip dari Harian Kompas, Selasa (25/10/2022).\r\nNamun, Yohan memandang hasil ini menunjukan sinyal positif terkait kedekatan Anies Baswedan dengan pemilih Partai Demokrat dan PKS. Sebab, kedua partai politik (parpol) itu adalah calon mitra koalisi Partai Nasdem. Yohan memandang pencapresan Anies oleh Partai \r\n\r\nNasdem membawa keuntungan karena bisa menarik basis pemilih dua parpol lain. “Keputusan Partai Nasdem yang mendeklarasikan Anies Baswedan sebagai calon presiden makin memberikan insentif pada keduanya,” ujarnya.\r\n\r\nUntuk diketahui, jajak pendapat dilakukan dengan wawancara secara langsung pada 1.200 responden di 34 provinsi. Sampel ditentukan secara acak menggunakan metode sistematis bertingkat. Penggunaan metode tersebut memiliki tingkat kepercayaan 95 persen dan margin of error kurang lebih 2,8 persen.\r\n\r\n', 'Tatang Guritno', '2022-10-17', 'Politis', ''),
(2, 'Jokowi: Tarik dan Hentikan Peredaran Obat Sirup yang Terbukti Sebabkan Gangguan Ginjal Akut\r\n', 'JAKARTA, KOMPAS.com - Presiden Joko Widodo (Jokowi) meminta Badan Pengawasan Obat dan Makanan (BPOM) segera menarik dan menghentikan peredaran obat sirup yang terbukti menyebabkan gangguan ginjal akut pada anak. Selain itu, Jokowi meminta agar produk-produk yang mengandung bahan penyebab gangguan ginjal diumumkan secara jelas kepada masyarakat. Hal itu dikatakannya saat membuka rapat terbatas internal yang membahas gagal ginjal akut pada anak di Istana Kepresidenan Bogor, Jawa Barat, Senin (24/10/2022). \"BPOM segera tarik dan hentikan peredaran obat sirup yang betul-betul secara evidence based, betul-betul terbukti mengandung bahan obat penyebab gangguan ginjal tersebut,\" ujar Jokowi, sebagaimana ditayangkan di YouTube Sekretariat Presiden. \r\n\r\n\"Saya kira akan lebih bagus lagi kalau diumumkan, diinformasikan secara luas mengenai nama produknya,\" kata Jokowi menegaskan. Selain itu, kepala negara meminta kementerian dan instansi terkait mengutamakan keselamatan masyarakat menyusul semakin bertambahnya kasus penyakit gangguan ginjal akut pada anak. Presiden juga meminta jajarannya tidak menganggap penyakit tersebut sebagai persoalan kecil. \"Utamakan keselamatan masyarakat. Jangan menganggap ini masalah kecil. Ini adalah masalah besar,\" ujar Jokowi.  \r\n\r\nMantan Wali Kota Solo itu lantas menyinggung soal obat-obatan yang diduga menjadi penyebab gangguan ginjal akut pada anak. Presiden mengaku mendapat laporan bahwa penyebabnya adalah tingginya cemaran bahan pelarut di atas ambang batas yang sudah ditetapkan. \"Dan kalau melihat data hingga 23 oktober 2022 tercatat sudah 245 kasus di 26 provinsi. Untuk itu, saya ingin kita semuanya memberikan perhatian bersama,\" kata Jokowi.\r\n\r\n', 'Dian Erika Nugraheny', '2022-10-25', 'Kesehatan', ''),
(3, 'Jokowi Minta Pengobatan Pasien Gangguan Ginjal Akut Digratiskan\r\n\r\n', 'JAKARTA, KOMPAS.com - Presiden Joko Widodo memerintahkan jajarannya untuk memberikan pengobatan gratis kepada penderita gangguan ginjal akut yang dirawat. \"Saya minta diberikan pengobatan gratis kepada pasien-pasien yang dirawat, ini penting sekali,\" kata Jokowi saat memberikan arahan di Istana Bogor, Senin (24/10/2022). Jokowi juga meminta jajarannya untuk menyiapkan pelayanan kesehatan dan pengadaan obat-obatan yang dapat mengatasi gangguan ginjal akut ini.\r\n\r\nIa menegaskan, keselamatan masyarakat harus diutamakan dan jangan menganggap kasus gangguan ginjal akut sebagai masalah kecil. \"Ini adalah masalah besar dan saya hari Minggu sudah menyampaikan pada Menteri Kesehatan untuk sementara obat yang diduga, meskipun masih diduga, itu dihentikan terlebih dahulu menunggu investigasi secara menyeluruh dari BPOM,\" ujar Jokowi. Sebelumnya, Menteri Kesehatan Budi Gunadi Sadikin mengungkapkan bahwa kasus gangguan ginjal akut di Indonesia telah mencapai 245 kasus yang tersebar di 26 provinsi. Ia menyebutkan, kasus kematian akibat penyakit ini telah mencapai 141 kematian atau 57,6 persen dari total kasus. \r\n\r\nGangguan ginjal akut misterius ini banyak menyerang anak-anak umumnya balita. Gejala yang timbul dari penyakit ini yaitu demam, hilang nafsu makan, malaise, batuk pilek, mual, muntah, ISPA, dan diare. Kemudian berlanjut pada sulit kencing, berupa air seni berkurang atau tidak ada air seni sama sekali. \r\n\r\nSejauh ini, belum ditemukan penyebab pasti. Meski begitu, Kemenkes mengambil langkah konservatif untuk menyetop sementara penjualan obat sirup yang dinyatakan tidak aman oleh Badan Pengawas Obat dan Makanan (BPOM). Adapun zat kimia berbahaya itu adalah etilen glikol (EG), dietilen glikol (DG), dan etilen glikol butyl ether (EGBE). Zat ini menjadi cemaran dari empat bahan pelarut tambahan lainnya yang masih diperbolehkan. Diduga pasien gangguan ginjal akut sempat mengonsumsi obat sirup yang mengandung empat bahan pelarut tambahan yang mengandung cemaran zat kimia berbahaya tersebut.\r\n\r\n', 'Ardito Ramadhan', '2022-10-24', 'Kesehatan', ''),
(4, 'Menkes Sebut Obat Fomepizole Beri Dampak Positif pada Kasus Gangguan Ginjal Akut\r\n\r\n', 'JAKARTA, KOMPAS.com - Menteri Kesehatan Budi Gunadi Sadikin mengeklaim, obat fomepizole berdampak positif dalam mengatasi gangguan ginjal akut. Ia menyebutkan, dari 10 pasien gangguan ginjal akut yang diberikan obat fomepizole, tujuh di antaranya membaik. \"Kita bisa melihat dari 10 pasien yang diberikan obat ini, 7 sudah pulih kembali, sehingga kita dapat simpulkan bahwa obat ini memberikan dampak positif,\" kata Budi di Istana Kepresidenan Bogor, Senin (24/10/2022). \r\nBudi menuturkan, pasien penyakit ini umumnya sulit buang air kecil karena ginjalnya terganggu. Namun, setelah mengonsumsi obat fomepizole, pasien-pasien itu sudah bisa buang air kecil sedikit demi sedikit. Pasien-pasien yang awalnya tidak sadar, kata Budi, juga sudah mulai sadar setelah mengonsumsi obat tersebut. Budi mengatakan, pemerintah pun akan mempercepat kedatangan fomepizole ke tanah air. \"Kita percepat kedatangannya di Indonesia sehingga 245 (pasien) yang masuk dan mungkin akan masih agak bertambah sedikit itu bisa kita obati dengan baik,\" ujar Budi. Ia menyebutkan, pemerintah telah 200 vial dari Singapura. Selanjutnya, pemerintah menunggu kedatangan 16 vial obat fomepizole dari Australia yang dijadwalkan tiba pada malam ini atau Selasa pagi besok. \r\n\r\nSelain itu, pemerintah juga sedang memproses pembelian fomepizole dari Amerika Serikat dan Jepang. Adapun Kementerian Kesehatan mencatat kasus gangguan ginjal akut kini mencapai 245 kasus pada 22 Oktober 2022. Jumlah ini ini meningkat dari total 241 kasus yang dilaporkan Kemenkes pada Jumat (21/10/2022). Begitu pula dengan angka kematian yang saat ini mencapai 141 anak. Jumlahnya pun meningkat dari yang sebelumnya dilaporkan mencapai 133 anak. Gangguan ginjal akut misterius ini banyak menyerang anak-anak umumnya balita. \r\n\r\nGejala yang timbul dari penyakit ini yaitu demam, hilang nafsu makan, malaise, batuk pilek, mual, muntah, ISPA, dan diare. Kemudian berlanjut pada sulit kencing, berupa air seni berkurang atau tidak ada air seni sama sekali. Sejauh ini, belum ditemukan penyebab pasti. Meski begitu, Kemenkes mengambil langkah konservatif untuk menyetop sementara penjualan obat sirup yang dinyatakan tidak aman oleh Badan Pengawas Obat dan Makanan (BPOM). Adapun zat kimia berbahaya itu adalah etilen glikol, dietilen glikol, dan etilen glikol butyl ether/EGBE. Zat ini menjadi cemaran dari empat bahan pelarut tambahan lainnya yang masih diperbolehkan. Diduga pasien gangguan ginjal akut sempat mengonsumsi obat sirup yang mengandung empat bahan pelarut tambahan yang mengandung cemaran zat kimia berbahaya tersebut.\r\n', 'Ardito Ramadhan', '2022-10-24', 'Kesehatan', ''),
(5, 'Jam Buka dan Rute ke La Nuna Cafe & Resto, Hidden Gem di Tangerang\r\n\r\n', 'KOMPAS.com - Jika mencari tempat nongkrong yang berkonsep hidden gem di Tangerang, salah satu tempat yang bisa didatangi adalah La Nuna Cafe & Resto. Kafe dan restoran berkonsep boho modern ini memiliki area nongkrong indoor (dalam ruangan) dan outdoor (luar ruangan). Pengunjung bisa memilih untuk duduk berlesehan atau di tempat duduk ayunan. Baca juga: 30 Tempat Wisata di Tangerang Selatan, Taman hingga Wisata Air 5 Tempat Makan Instagramable di Tangerang Selatan Berikut informasi seputar jam operasional dan rute ke tempat nongkrong Instagramable ini: Jam buka La Nuna Cafe & Resto La Nuna Cafe & Resto buka setiap hari.  Pada hari biasa, jam operasionalnya pukul 11.00-22.00 WIB.  Sementara itu, pada akhir pekan, jam operasionalnya pukul 11.00-23.00 WIB. Baca juga: 5 Tempat Wisata Anak di Tangerang Selatan\r\n\r\n', 'Ni Nyoman Wira Widyanti', '2022-10-25', 'Rute', ''),
(6, '30 Tempat Wisata', 'KOMPAS.com - Menghabiskan waktu liburan tak melulu harus pergi ke destinasi yang lokasinya jauh dari tempat tinggal. Ada beberapa pilihan tempat wisata di Tangerang Selatan dan sekitarnya yang juga menarik untuk dijelajahi bagi para warga. Ada beragam destinasi yang tersedia, mulai dari wisata alam, belanja, hingga wisata kota gratis, seperti taman. Baca juga: 10 Wisata Tangerang dan Tangerang Selatan untuk Hindari Cuaca Panas  Kompas.com merangkum sejumlah tempat wisata di Tangerang Selatan dan sekitarnya yang bisa menjadi pilihanmu untuk berakhir pekan atau sekadar bersantai melepas penat pada waktu senggang.\r\n\r\n', 'Ni Nyoman Wira Widyanti', '2022-09-19', 'Wisata', ''),
(22, '<span style=\"font-weight: bold;\">Berhentinya Tradisi Tahunan Alibaba saat festival belanja 11.11</span><br>', '<div><span style=\"font-weight: bold;\">KOMPAS.com - </span>Seperti tahun tahun sebelumnya, raksasa <span style=\"font-style: italic;\">e-commerce </span>China, Alibaba Group Holding Inc, menghelat festival belanja tahunan <span style=\"font-style: italic;\">Singles Day </span>atau yang dikenal pula dengan Double Eleven alias 11.11.</div><div><br></div><div>Namun, berbeda dari tahun tahun sebelumnya, Alibaba tidak mengungkap angaka Gross Merchandise Value (GMV) selama periode festival belanja 11.11 yang berlangsung sejak 31 Oktober 2022. Hal ini agaknya disebabkan karena angka penualan kotor yang melambat pada periode ini.</div><div>Biasanya, para startup e-commerce menggunakan GMV untuk mengukur total nilai pembelian dari pengguna melalui situs atau aplikasi dalam periode tertentu.</div><div><br></div><div>Ini pertama kalinya Alibaba tak mengungkapkan akumulasi nilai pembelian dari pengguna (GMV) platformnya itu selama festuval belanja 11.11. Padahal tahun tahun sebelumny, perusahaan yang didirikan Jack Ma ini sellu mengumungkan kenaikan angka GMV saat festival belanja, seolah olah hal itu sudah menjadi tradisi Alibaba.</div><div><br></div><div>Misalnya, pada tahun 2020 dalam sebuah keterangan tertulis, Alibaaba mengungkapkan bahwa Alibaba meraup sebesar 498,2 miliar yuan (sekitar Rp. 1,096 triliun ) selama festival belanja dalam periode yang sama. Angka ini meningkat 26% dibandingkan tahun 2019.</div><div><br></div><div>Pada tahun 2021, Alibaba melaporkan membukukan nilai penjualan kotor hingga 540,3 miliar yuan (sekitar Rp. 1,188 triliun). Namun, pada 11.11 tahun ini, Alibaba tak mengungkapkan angka Gross Merchandise Value (GMV) di platformnya.</div><div><br></div><div>Menurut laporan BusinnessWire, pengumuman tahun ini hanya menyebutkan bahwa penjualan kotor festival belanja 11.11 Alibaba \"mencetak halsi yang sejalan dengan angka volume peualan kotor tahun lalu, meski ada tantangan ekonomi makro dan dampak pandemi Covid 19\".</div><div><br></div><div>Pengumuman tanpa rincian angka itu menimbulakan spekulasi bahwa angka penjualan kotor di Alibaba pada festival belanja kali ini tengah melambat. Namun, pihak Alibaba tidak memberikan komentarnya soal masalah ini,</div><div><br></div><div>Bahkan, pihak Alibaba juga tidak merinci pemcapaian platformnya terhadap festival belanja 11.11 di China. Padahal, platform marketplace lain milik Alibaba Group seperti Taobao dan Tmall telah mengungkapkan pencapaian platformnya selama 11,11 tahun ini.</div><div><br></div><div>Misalnya, 1,0099 merek luar negeri di Tmall Global mencapai pertumbbuhan GMV tahunan lebih dari 100 persen, sebagaimana dihimpun Kompas Tekno dari Businness Wire.<br></div>', 'Galuh Putri Riyanto', '2022-11-15', 'Bisnis', '62f9bc4870f52.jpg'),
(25, 'aku suka ayam goreng', 'goreng  ayam', 'Dewi', '2022-11-23', 'Otomotif', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `webta`
--
ALTER TABLE `webta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `webta`
--
ALTER TABLE `webta`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
