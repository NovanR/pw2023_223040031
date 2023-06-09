-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2023 at 08:32 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `sd1`
--

CREATE TABLE `sd1` (
  `id` int NOT NULL,
  `nama` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `judul` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `penjelasan` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `youtube` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sd1`
--

INSERT INTO `sd1` (`id`, `nama`, `gambar`, `judul`, `penjelasan`, `youtube`) VALUES
(1, 'kelas_1', 'th_sd/th1/th1.jpg', 'Bilangan Cacah', 'Bilangan cacah selalu diawali dari angka nol (0) hingga tidak terhingga', 'https://www.youtube.com/watch?v=edVc-UrSgHk'),
(2, 'kelas_1', 'th_sd/th1/th2.jpg', 'Penjumlahan dan pengurangan', 'Penjumlahan merupakan operasi dasar aritmatika yang menjumlahkan dua buah bilangan menjadi sebuah bilangan.Sedangkan pengurangan merupakan kebalikan dari pertambahan.', 'https://www.youtube.com/watch?v=SOwdVSsjg-U'),
(3, 'kelas_1', 'th_sd/th1/th3.jpg', 'Satuan Waktu', 'Pengukuran terdiri dari beberapa besaran, salah satunya adalah waktu. Apa sajakah ukuran besaran waktu?', 'https://www.youtube.com/watch?v=pm0pPxrU9BI'),
(4, 'kelas_1', 'th_sd/th1/th4.jpg', 'Bangun Ruang', 'Bangun ruang adalah suatu bangunan tiga dimensi yang memiliki ruang atau volume dan juga sisi yang membatasinya.', 'https://www.youtube.com/watch?v=TPy8zfIVZ5w'),
(23, 'kelas_2', 'th_sd/th2/th1.jpg', 'Perkalian Dan Pembagian', 'Perkalian merupakan proses aritmatika dasar di mana satu bilangan dilipatgandakan sesuai dengan bilangan pengalinya.', 'https://www.youtube.com/watch?v=M84JdR0vI8E'),
(25, 'kelas_2', 'th_sd/th2/th2.jpg', 'Bangun Datar Sederhana', 'Bangun datar adalah bangun-bangun yang mempunyai permukaan datar dan memiliki dua dimensi. Dimensi tersebut yakni panjang dan lebar.', 'https://www.youtube.com/watch?v=o2qe9SWYelk'),
(26, 'kelas_2', 'th_sd/th2/th3.jpg', 'Pengkuran waktu, panjang, dan berat', 'Untuk mengukur panjang dan berat kamu dapat menggunakan alat ukur panjang seperti penggaris, meteran gulung dan lain sebagainya.', 'https://www.youtube.com/watch?v=xKwmhIvMovs'),
(27, 'kelas_2', 'th_sd/th2/th4.jpg', 'Membandingkan Bilangan', 'Dalam membandingkan dua bilangan, dapat dilakukan dengan memperhatikan nilai pada angka ratusan, puluhan, serta satuan.', 'https://www.youtube.com/watch?v=kig1irhHuhc'),
(28, 'kelas_2', 'th_sd/th2/th5.jpg', 'Mengurutkan Bilangan', 'Kalian pasti sudah bisa mengurutkan bilangan 1 sampai 10 atau 11 sampai 20. Mungkin, ada juga yang sudah bisa mengurutkan bilangan 1 sampai 50 atau 1 sampai 100.', 'https://www.youtube.com/watch?v=vA427HBtnPU'),
(29, 'kelas_3', 'th_sd/th3/th1.jpg', 'Nilai Mata Uang', 'Uang digunakan manusia untuk melakukan transaksi pembayaran barang atau jasa. Di Indonesia nama mata uangnya disebut Rupiah. Saat ini ada dua jenis uang yang berlaku yaitu uang kertas dan uang logam', 'https://www.youtube.com/watch?v=vA427HBtnPU'),
(30, 'kelas_3', 'th_sd/th3/th2.jpg', 'Pecahan', 'Bilangan pecahan merupakan bentuk yang lain suatu bilangan pada ilmu matematika, dinyatakan menjadi a/b, a adalah pembilang, b adalah penyebut dengan a, b adalah bilangan bulat serta b ≠ 0.', 'https://www.youtube.com/watch?v=0hPRfqPFtt8'),
(31, 'kelas_3', 'th_sd/th3/th3.jpg', 'Sifat Bangun Datar', 'Bangun datar merupakan suatu bentuk dua dimensi dari bangunan-bangunan yang memiliki permukaan datar. Setiap bangun datar tersebut akan memiliki ciri atau sifat yang berbeda-beda.', 'https://www.youtube.com/watch?v=TgcxhI1JIow'),
(32, 'kelas_3', 'th_sd/th3/th4.jpg', 'Jenis Jenis Sudut', 'Sudut adalah salah satu hal yang bisa teman-teman temukan dengan mudah di kehidupan sehari-hari. Pada setiap bangunan akan ada garis yang saling terhubung satu sama lainnya. Garis yang saling terhubung inilah yang kemudian disebut dengan sudut.', 'https://www.youtube.com/watch?v=yg9ui4zEqBo&amp;t=1s'),
(33, 'kelas_3', 'th_sd/th3/th5.jpg', 'Keliling Dan Luas Persegi Panjang', 'Rumus luas persegi panjang adalah L = p x l, dengan L adalah luas, lalu p adalah panjang, sedangkan l adalah lebar.', 'https://www.youtube.com/watch?v=ZkaRhb_kcdg'),
(34, 'kelas_4', 'th_sd/th4/th1.jpg', 'Faktor Dan Kelipatan', 'Faktor suatu bilangan merupakan suatu bilangan yang membagi bilangan lain menghasilkan bilangan asli. Misalnya bilangan 8 dibagi 2.Jadi, faktor adalah 2. Karena bilangan yang membagi adalah 2. Bilangan yang membaginya harus bilangan asli.', 'https://www.youtube.com/watch?v=IrX0y3Yf3HA'),
(35, 'kelas_4', 'th_sd/th4/th2.jpg', 'Jajaran Genjang Dan Segitiga', 'Untuk menghitung keliling yaitu dengan menjumlahkan panjang dari masing-masing sisi. Sementara untuk luas dengan menghitung bagian dalam dari bangun segitiga dan jajar genjang', 'https://www.youtube.com/watch?v=idAL2TF2Scs'),
(36, 'kelas_4', 'th_sd/th4/th3.jpg', 'Bilangan Romawi', 'Sistem penomoran berasal dari  Romawi kuno dengan memakai huruf Latin untuk melambangkan angka numerik. Lambang bilangan  Romawi tidak mengenal bilangan nol.', 'https://www.youtube.com/watch?v=7CG3GJETe9w'),
(37, 'kelas_4', 'th_sd/th4/th4.jpg', 'Sifat Sifat Operasi Hitung', 'Operasi hitung matematika secara umum memiliki tiga sifat, yaitu komutatif, distributif, dan asosiatif. Ketiga sifat itu tentunya memiliki perbedaannya masing-masing', 'https://www.youtube.com/watch?v=zjJ-BhqYJ7E'),
(38, 'kelas_4', 'th_sd/th4/th5.jpg', 'Bangun Ruang, Simetri, Dan Pencerminan', 'Istilah simetri merujuk pada suatu transformasi yang diterapkan ke sebuah bangun datar sebagai medianya. Suatu bangun datar dapat dikatakan simetri bila bangun tersebut dapat saling menutupi ketika dilipat maupun diputar.', 'https://www.youtube.com/watch?v=-hXcI4BpMcw'),
(39, 'kelas_5', 'th_sd/th5/th1.jpg', 'Pengukuran Waktu, Sudut, dan Kecepatan', 'Kecepatan memiliki rumus tersendiri dalam proses menghitungnya. Dari rumus tersebut, seseorang dapat dengan mudah mengetahui atau membandingkan pergerakan atau waktu tempuh untuk jalur perjalanan yang sama.', 'https://www.youtube.com/watch?v=h2xVaRvGARs'),
(40, 'kelas_5', 'th_sd/th5/th2.jpg', 'Luas Bangun Datar Sederhana', 'Bangun datar merupakan sebuah bangun yang berbentuk datar yang dibatasi oleh garis-garis lurus atau garis lengkung. Bangun datar sendiri hanya memiliki dua dimensi saja, yakni panjang dan lebar serta tidak memiliki tinggi dan tebal.', 'https://www.youtube.com/watch?v=0Z2f5yppJbo'),
(41, 'kelas_5', 'th_sd/th5/th3.jpg', 'Volume Kubus Dan Balok', 'Bagaimanakah cara menghitung volume bangun ruang kubus dan balok? Untuk mandalami hal tersebut, silakan disimak video pada link berikut ini.', 'https://www.youtube.com/watch?v=r8777LVmo1I'),
(42, 'kelas_5', 'th_sd/th5/th4.jpg', 'Sifat Sifat Bangun dan Hubungan Antar Bangun', 'Setiap bangun mempunyai sifat-sifat, yang membedakan dengan bangun lainnya. Bangun datar berbeda dengan bangun ruang, karena sifatnya yang berbeda.', 'https://www.youtube.com/watch?v=UWnuESTww1U'),
(43, 'kelas_5', 'th_sd/th5/th5.jpg', 'Perpangkatan Dan Akar', 'Akar pangkat dua merupakan kebalikan dari pangkat dua. Akar pangkat dua juga sering disebut sebagai akar kuadrat.', 'https://www.youtube.com/watch?v=c1ZJR-RX_2k'),
(44, 'kelas_6', 'th_sd/th6/th1.jpg', 'Luas Dan Volume', 'Jadi, bangun ruang adalah bangun tiga dimensi yang mempunyai ruangan dan dibatasi oleh sisi. \r\nBedanya dengan bangun datar itu karena, bentuk bangun datar dua dimensi, tidak memiliki ruangan, sehingga hanya dapat dicari luas dan keliling nya saja.', 'https://www.youtube.com/watch?v=_-M2xAvindc'),
(45, 'kelas_6', 'th_sd/th6/th2.jpg', 'Pengolahan Dan Penyajian Data', 'Menyajikan dan mengolah data termasuk di Materi Matematika Kelas 6 SD. Sub babnya sendiri meliputi mengumpulkan dan membaca data, menyajikan dan mengolah data dalam bentuk tabel, serta menafsirkan sajian data.', 'https://www.youtube.com/watch?v=TBzNOPZt3M4'),
(46, 'kelas_6', 'th_sd/th6/th3.jpg', 'Sistem Koordinat Kartesius', 'Dalam ilmu matematika, sistem koordinat kartesius digunakan untuk menentukan posisi atau letak dari sebuah titik pada suatu bidang datar.', 'https://www.youtube.com/watch?v=HJc7IiW46WQ'),
(47, 'kelas_6', 'th_sd/th6/th4.jpg', 'Satuan Debit', 'Debit adalah bagian materi dari pengukuran pada matematika. Secara garis besar debit merupakan kecepatan jumlah air pada waktu tertentu.', 'https://www.youtube.com/watch?v=QDJu0ytHkTg'),
(51, 'kelas_6', 'th_sd/th6/th5.jpg', 'Operasi Hitung Campuran', 'Operasi hitung campuran merupakan penghitungan yang melibatkan berbagai jenis operasi hitung (penjumlahan, pengurangan, perkalian, dan pembagian)', 'https://www.youtube.com/watch?v=gKOz59cuw5s'),
(52, 'kelas_1', 'th_sd/th1/th5.jpg', 'Nilai Tempat Bilangan', 'Nilai tempat adalah nilai yang dimiliki oleh angka-angka penyusun bilangan berdasarkan letak atau tempat angkanya.', 'https://www.youtube.com/watch?v=Wl1oVbH0oo8'),
(58, 'soal', '647c62560b822.jpg', 'Soal Try Out Kelas 6', 'Bagian Pertama', 'https://www.youtube.com/watch?v=eFH7RG92UEw'),
(59, 'soal', '647c643634c06.jpg', 'Soal Try Out Kelas 6', 'Bagian Kedua', 'https://www.youtube.com/watch?v=ZPoO48tyVxE'),
(60, 'soal', '647c62bcbe8a9.jpg', 'Soal Try Out Kelas 6', 'Bagian Ketiga', 'https://www.youtube.com/watch?v=pLr7og11BIo'),
(61, 'soal', '647c6347c0a93.jpg', 'Soal Try Out Kelas 6', 'Bagian Keempat', 'https://www.youtube.com/watch?v=azB3mia6atQ'),
(62, 'soal', '647c63fb37fdb.jpg', 'Soal Try Out Kelas 6', 'Bagian Kelima', 'https://www.youtube.com/watch?v=fYMWGY64gQ4');

-- --------------------------------------------------------

--
-- Table structure for table `sma`
--

CREATE TABLE `sma` (
  `id` int NOT NULL,
  `nama` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `judul` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `penjelasan` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `youtube` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sma`
--

INSERT INTO `sma` (`id`, `nama`, `gambar`, `judul`, `penjelasan`, `youtube`) VALUES
(1, 'kelas_10', 'th_sma/th10/th1.jpg', 'Pertidaksamaan Linear', 'Pertidaksamaan linear merupakan kumpulan persamaan dan pertidaksamaan linear yang biasanya menggunakan variable linear untuk menggambarkan permasalahan.', 'https://www.youtube.com/watch?v=tqmhFY0u_yM'),
(2, 'kelas_10', 'th_sma/th10/th2.jpg', 'Fungsi Kuadrat', 'Fungsi kuadrat merupakan aturan yang memasangkan semua anggota daerah asal tepat satu ke daerah kawan dengan pangkat pada variabel tertingginya adalah dua.', 'https://www.youtube.com/watch?v=TdE54M9Nnb0'),
(3, 'kelas_10', 'th_sma/th10/th3.jpg', 'Trigonometri', 'Identitas trigonometri adalah kesamaan yang memuat perbandingan trigonometri dari suatu sudut. Pada identitas trigonometri dikenal istilah sinus, cosinus, dan tangen.', 'https://www.youtube.com/watch?v=fqA_Az5ojjk'),
(4, 'kelas_10', 'th_sma/th10/th4.jpg', 'Fungsi Komposisi dan Fungsi Invers', 'Fungsi adalah relasi dari himpunan A ke himpunan B jika setiap anggota himpunan A berpasangan dengan tepat satu anggota himpunan B.', 'https://www.youtube.com/watch?v=o-ESReWkrzw'),
(5, 'kelas_10', 'th_sma/th10/th5.jpg', 'Eksponen', 'Bentuk eksponen bisa dinyatakan dalam bentuk persamaan maupun pertidaksamaan. Hal itu berkaitan dengan jenis penggunaannya,misalnya untuk menyelesaikan masalah yang berkaitan dengan fungsi eksponen.', 'https://www.youtube.com/watch?v=ArijXUAwTdg'),
(6, 'kelas_11', 'th_sma/th11/th1.jpg', 'Logika Matematika', 'Logika matematika adalah aturan berpikir atau landasan tentang bagaimana cara kita mengambil kesimpulan.', 'https://www.youtube.com/watch?v=8nms4vBMZPQ'),
(7, 'kelas_11', 'th_sma/th11/th2.jpg', 'Induksi Matematika', 'Induksi matematika merupakan metode untuk membuktikan bahwa suatu sifat yang didefinisikan pada bilangan asli n adalah bernilai benar.', 'https://www.youtube.com/watch?v=ptivxK4duyk'),
(8, 'kelas_11', 'th_sma/th11/th3.jpg', 'Matriks', 'Matriks adalah sekumpulan bilangan yang disusun berdasarkan baris dan kolom, serta ditempatkan di dalam tanda kurung. ', 'https://www.youtube.com/watch?v=lamyz_Ty1uc'),
(9, 'kelas_11', 'th_sma/th11/th4.jpg', 'Barisan Dan Deret Aritmatika', 'Secara umum, barisan adalah sebuah daftar bilangan yang mengurut dari kiri ke kanan. Setiap urutan bilangannya juga memiliki karakteristik atau pola tertentu.', 'https://www.youtube.com/watch?v=cdgxGE3xxEU'),
(11, 'kelas_12', 'th_sma/th12/th1.jpg', 'Statistika', 'Statistika adalah ilmu yang mempelajari semua hal tentang data, mulai pengumpulan, penyajian, analisis, sampai terbentuk suatu kesimpulan.', 'https://www.youtube.com/watch?v=APDjLfxq6vY'),
(12, 'kelas_12', 'th_sma/th12/th2.jpg', 'Limit Fungsi Trigonometri', 'Limit trigonometri adalah nilai yang mendekati suatu sudut fungsi trigonometri. Cara hitungnya mirip dengan limit fungsi aljabar, tapi di sini, ada fungsi trigonometri yang harus diubah lebih dulu.', 'https://www.youtube.com/watch?v=WbKFwA9DngI'),
(13, 'kelas_12', 'th_sma/th12/th3.jpg', 'Turunan Dan Fungsi Trigonometri', 'Turunan trigonometri adalah suatu persamaan turunan yang melibatkan fungsi-fungsi trigonometri misalnya sin (sinus), cos (cosinus), tan (tangen), cot (cotangen), sec (secant), dan csc (cosecant).', 'https://www.youtube.com/watch?v=HC6BNJGKoTk'),
(14, 'kelas_12', 'th_sma/th12/th4.jpg', 'Vektor', 'Vektor adalah besaran yang memiliki nilai dan arah. Operasi vektor tentu berbeda dengan operasi skalar. Pada operasi skalar, kamu bisa mengoperasikan langsung suatu bilangan.', 'https://www.youtube.com/watch?v=JF-mLmJiF7Y'),
(15, 'kelas_12', 'th_sma/th12/th5.jpg', 'Bunga Tunggal/Majemuk dan Anuitas', 'Bunga (suku bunga) atau bank interest adalah pertambahan jumlah modal yang diberikan oleh bank untuk para nasabahnya dengan dihitung dari presentase modal uang nasabah dan lamanya menabung..', 'https://www.youtube.com/watch?v=PFVgnpl7PIw'),
(20, 'kelas_11', 'th_sma/th11/th5.jpg', 'Limit Fungsi Aljabar', 'Limit adalah suatu nilai yang menggunakan pendekatan fungsi saat mendekati nilai tertentu. Limit dapat dikatakan sebagai nilai yang menuju suatu batas.', 'https://www.youtube.com/watch?v=zE8m4xNizDY'),
(22, 'soal', '647c86d1e4cb3.jpg', 'Soal Try Out Kelas 12', 'Bagian Pertama', 'https://www.youtube.com/watch?v=3qLeMpn7KDI'),
(23, 'soal', '647c86fa098e4.jpg', 'Soal Try Out Kelas 12', 'Bagian Kedua', 'https://www.youtube.com/watch?v=L6Mq9cXJQIc'),
(24, 'soal', '647c871e2999a.jpg', 'Soal Try Out Kelas 12', 'Bagian Ketiga', 'https://www.youtube.com/watch?v=3qLeMpn7KDI'),
(25, 'soal', '647c877b9a09f.jpg', 'Soal Try Out Kelas 12', 'Bagian Keempat', 'https://www.youtube.com/watch?v=YYxFnK6vnTc'),
(26, 'soal', '647c8807c06db.jpg', 'Soal Try Out Kelas 12', 'Bagian Kelima', 'https://www.youtube.com/watch?v=c_q1vjIzWqU');

-- --------------------------------------------------------

--
-- Table structure for table `smp`
--

CREATE TABLE `smp` (
  `id` int NOT NULL,
  `nama` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `judul` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `penjelasan` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `youtube` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `smp`
--

INSERT INTO `smp` (`id`, `nama`, `gambar`, `judul`, `penjelasan`, `youtube`) VALUES
(1, 'kelas_7', 'th_smp/th7/th1.jpg', 'Himpunan', 'Himpunan secara umum berarti perkumpulan. Akan tetapi dalam pelajaran matematika himpunan memiliki arti yang lebih luas.', 'https://www.youtube.com/watch?v=ghCGbuBT-D0'),
(2, 'kelas_7', 'th_smp/th7/th2.jpg', 'Sistem Persamaan Linear Satu Variabel', 'Salah satu bentuk materi yang nantinya akan kamu temui di matematika adalah sistem persamaan linear satu variabel (SPLSV).', 'https://www.youtube.com/watch?v=OyynhZDrU-0'),
(3, 'kelas_7', 'th_smp/th7/th3.jpg', 'Bentuk Aljabar', 'Aljabar merupakan cabang ilmu matematika yang menggunakan tanda-tanda dan huruf-huruf untuk menggambarkan atau mewakili angka-angka.', 'https://www.youtube.com/watch?v=P91EUTrTPx0'),
(4, 'kelas_7', 'th_smp/th7/th4.jpg', 'Perbandingan', 'Perbandingan adalah proses membandingkan nilai dari dua besaran sejenis. Biasa dinyatakan secara sederhana dan dalam bentuk pecahan.', 'https://www.youtube.com/watch?v=oZI6JRZMwIc'),
(6, 'kelas_8', 'th_smp/th8/th1.jpg', 'Pola Bilangan', 'Pola bilangan penting untuk kamu pelajari karena materi ini bisa diterapkan dalam kehidupan sehari-hari, misalnya cara menata gelas bertumpuk.', 'https://www.youtube.com/watch?v=nB1UmSGtA50'),
(7, 'kelas_8', 'th_smp/th8/th2.jpg', 'Relasi Dan Fungsi', 'Relasi berguna untuk menyatakan hubungan antara suatu anggota himpunan dengan anggota himpunan lainnya.', 'https://www.youtube.com/watch?v=HxGFONZX-0w'),
(8, 'kelas_8', 'th_smp/th8/th3.jpg', 'Persamaan Garis Lurus', 'Persamaan garis lurus adalah persamaan yang membentuk garis lurus saat digambarkan dalam bidang Kartesius.', 'https://www.youtube.com/watch?v=0ACPl7jPJ3I'),
(9, 'kelas_8', 'th_smp/th8/th4.jpg', 'Sistem Persamaan Dua Variabel', 'Persamaan linear dua variabel (SPLDV) adalah sebuah sistem yang terbentuk oleh persamaan linear yang melibatkan dua variabel.', 'https://www.youtube.com/watch?v=HyStRid6PQI'),
(11, 'kelas_9', 'th_smp/th9/th1.jpg', 'Bilangan Berpangkat dan Bentuk Akar', 'Perpangkatan adalah operasi matematika untuk perkalian berulang suatu bilangan sebanyak pangkatnya. Pangkat suatu bilangan adalah angka yang ditulis lebih kecil dan terdapat agak ke atas.', 'https://www.youtube.com/watch?v=ub8I2Zek2rY'),
(12, 'kelas_9', 'th_smp/th9/th2.jpg', 'Persamaan Kuadrat', 'Persamaan kuadrat adalah persamaan yang variabelnya memiliki pangkat tertinggi sama dengan dua (2). Adapun bentuk umum persamaan kuadrat adalah sebagai berikut. ax2 + bx + c = 0', 'https://www.youtube.com/watch?v=bBOK3XLpcOU'),
(13, 'kelas_9', 'th_smp/th9/th3.jpg', 'Transformasi Geometri', 'Transformasi geometri merupakan salah satu cabang geometri yang membahas perubahan letak atau bentuk suatu obyek geometri akibat pergeseran, pencerminan, perputaran, perubahan skala atau peregangan. ', 'https://www.youtube.com/watch?v=Ul5ciOs2fBI'),
(14, 'kelas_9', 'th_smp/th9/th4.jpg', 'Kesebangunan Dan Kekongruenan', 'Dalam pengetahuan geometri, terdapat konsep kekongruenan dan kesebangunan. Kekongruenan merujuk kepada dua bangun datar yang memiliki bentuk dan ukuran yang sama.', 'https://www.youtube.com/watch?v=m3Xjm3gNhs0'),
(15, 'kelas_9', 'th_smp/th9/th5.jpg', 'Bangun Ruang Sisi Lengkung', 'Bangun ruang sisi lengkung merupakan bangun ruang yang mempunyai sisi lengkung. Bangun ruang sisi lengkung biasanya memiliki sebuah selimut ataupun permukaan bidang, yaitu tabung, kerucut dan bola.', 'https://www.youtube.com/watch?v=XI7rX_oF144'),
(18, 'kelas_7', '647b15a884143.jpg', 'Aritmatika Sosial', 'Aritmatika sosial merupakan salah satu cabang matematika yang sering dijumpai dalam kehidupan sehari-hari. Cabang ilmu ini erat kaitannya dengan perhitungan keuangan di ritel.', 'https://www.youtube.com/watch?v=6OOS0RrOQdc'),
(19, 'kelas_8', '647b165f08b46.jpg', 'Teorema Pythgoras', 'Teorema Pythagoras menjelaskan hubungan panjang sisi pada segitiga siku-siku. Oleh karena itu, teorema ini hanya berlaku pada segitiga siku-siku saja.', 'https://www.youtube.com/watch?v=k_KToCsNWvA'),
(20, 'soal', '647c7ee911dc3.jpg', 'Soal Try Out Kelas 7', 'Bagian Pertama', 'https://www.youtube.com/watch?v=iU8k7wjsm-I'),
(21, 'soal', '647c7fe61cf9a.jpg', 'Soal Try Out Kelas 7', 'Bagian Kedua', 'https://www.youtube.com/watch?v=gVUDJxvPxZM'),
(22, 'soal', '647c85d4010ed.jpg', 'Soal Try Out Kelas 7', 'Bagian Ketiga', 'https://www.youtube.com/watch?v=xBx_r_hv7bg'),
(23, 'soal', '647c856f7fc5a.jpg', 'Soal Try Out Kelas 7', 'Bagian Keempat', 'https://www.youtube.com/watch?v=RqclkDruAjY'),
(24, 'soal', '647c85a1ee59a.jpg', 'Soal Try Out Kelas 7', 'Bagian Kelima', 'https://www.youtube.com/watch?v=McO0DOP1bOI');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `role`) VALUES
(1, 'novanramdan1@gmail.com', '$2y$10$taVDQbye7YvC/bZWBGpO1eYi3PXM7ixSZuudjpIeTODp.1ua..Enm', 'admin'),
(9, 'ramdan@gmail.com', '$2y$10$2bCmXT4K3JxIH5x1QWRN8O7J7DdtwgDwVdsBuGislG8dOhrl7hz0G', 'user'),
(10, 'vano@gmail.com', '$2y$10$XyW/YWanVePcJ8Hq1A30Eu/XQAsCbGxVr3zIt6ydcWFH1.o58eAfa', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sd1`
--
ALTER TABLE `sd1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sma`
--
ALTER TABLE `sma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smp`
--
ALTER TABLE `smp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sd1`
--
ALTER TABLE `sd1`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `sma`
--
ALTER TABLE `sma`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `smp`
--
ALTER TABLE `smp`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
