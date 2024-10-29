-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2024 at 09:26 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wayange`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `email`, `username`, `password`, `created_at`) VALUES
(18, 'wayange.asli@gmail.com', 'wayang', 'f6e0a1e2ac41945a9aa7ff8a8aaa0cebc12a3bcc981a929ad5cf810a090e11ae', '2024-06-01 07:17:57'),
(19, 'faris.7826@gmail.com', 'lala', 'f6e0a1e2ac41945a9aa7ff8a8aaa0cebc12a3bcc981a929ad5cf810a090e11ae', '2024-05-26 07:23:42'),
(20, 'faiq.athif@gmail.com', 'atip', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', '2024-06-11 04:35:37');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi_berita` longtext NOT NULL,
  `tanggal_berita` date NOT NULL,
  `penulis_berita` varchar(255) NOT NULL,
  `gambar_berita` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul_berita`, `isi_berita`, `tanggal_berita`, `penulis_berita`, `gambar_berita`) VALUES
(1, 'Pameran Wayang Kulit di Jakarta', 'Pameran wayang kulit di Jakarta menampilkan berbagai koleksi wayang dari seluruh Nusantara...', '2024-06-10', 'Ahmad Wijaya', 'pameran_wayang_kulit.jpg'),
(2, 'Pelatihan Membuat Wayang Golek di Bandung', 'Pelatihan membuat wayang golek di Bandung menarik banyak peserta dari berbagai kalangan...', '2024-05-15', 'Dewi Lestari', 'berita-3.webp'),
(3, 'Festival Wayang Internasional di Yogyakarta', 'Festival wayang internasional di Yogyakarta dihadiri oleh dalang-dalang terkenal dari berbagai negara...', '2024-04-20', 'Budi Santoso', 'berita-2.webp'),
(4, 'Workshop Wayang Beber di Surakarta', 'Workshop wayang beber di Surakarta memberikan pengetahuan mendalam tentang sejarah dan pembuatan wayang beber...', '2024-03-30', 'Siti Rahmawati', 'berita-1.webp'),
(5, 'Pertunjukan Wayang Wong di Bali', 'Pertunjukan wayang wong di Bali memukau penonton dengan cerita yang menarik dan tarian yang indah...', '2024-02-25', 'Hendra Gunawan', 'back.png');

-- --------------------------------------------------------

--
-- Table structure for table `data_museum`
--

CREATE TABLE `data_museum` (
  `id` int(11) NOT NULL,
  `nama_museum` varchar(255) NOT NULL,
  `daerah_museum` varchar(255) NOT NULL,
  `judul_museum` varchar(255) NOT NULL,
  `isi_museum` longtext NOT NULL,
  `gambar_museum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_museum`
--

INSERT INTO `data_museum` (`id`, `nama_museum`, `daerah_museum`, `judul_museum`, `isi_museum`, `gambar_museum`) VALUES
(1, 'Museum Wayang Jakarta', 'Jakarta', 'Sejarah dan Budaya Wayang', 'Museum Wayang Jakarta memiliki koleksi wayang dari berbagai daerah di Indonesia, termasuk wayang kulit dari Jawa, wayang golek dari Sunda, dan wayang klithik dari Jawa Timur. Koleksi ini mencakup berbagai macam jenis wayang yang mewakili kekayaan budaya dan tradisi dari setiap daerah. Tidak hanya itu, museum ini juga menampilkan wayang-wayang dari berbagai negara di Asia seperti Thailand, India, dan Cina, yang menunjukkan betapa luasnya pengaruh seni wayang di dunia.<br><br>\r\n\r\nDi museum ini, pengunjung dapat melihat lebih dari sekadar pertunjukan wayang. Mereka bisa mempelajari proses pembuatan wayang, mulai dari pemilihan bahan hingga teknik pengukiran dan pewarnaan. Museum ini juga sering mengadakan workshop dan seminar tentang seni wayang, di mana para ahli dan pengrajin berbagi pengetahuan dan keterampilan mereka. Dengan demikian, Museum Wayang Jakarta tidak hanya berfungsi sebagai tempat penyimpanan artefak, tetapi juga sebagai pusat edukasi dan pelestarian budaya wayang.<br><br>\r\n\r\nSelain pameran tetap, Museum Wayang Jakarta juga menyelenggarakan berbagai acara dan pameran temporer yang menarik. Misalnya, festival wayang internasional yang diadakan setiap tahun menarik perhatian banyak pengunjung lokal maupun mancanegara. Acara-acara ini tidak hanya memperkaya wawasan pengunjung tentang seni wayang, tetapi juga memperkuat hubungan budaya antara Indonesia dan negara-negara lain. Dengan segala kegiatannya, Museum Wayang Jakarta terus berupaya untuk menjaga dan mempromosikan warisan budaya yang berharga ini kepada generasi muda dan dunia internasional.', 'museumjkt.jpg'),
(2, 'Museum Wayang Kekayon', 'Yogyakarta', 'Keanekaragaman Wayang Nusantara', 'Museum Wayang Kekayon menampilkan berbagai jenis wayang dari seluruh Nusantara...', 'kekayon.webp'),
(3, 'Museum Wayang Walisongo', 'Semarang', 'Warisan Wayang', 'Museum Wayang Walisongo memiliki koleksi wayang kulit dan golek dari berbagai zaman...', 'museum_wayang_walisongo.jpg'),
(4, 'Museum Wayang Pustaka', 'Surakarta', 'Perkembangan Wayang', 'Museum Wayang Pustaka di Surakarta menampilkan sejarah perkembangan wayang dari masa ke masa...', 'pustaka.webp'),
(5, 'Museum Wayang Banyumas', 'Banyumas', 'Kearifan Lokal Wayang Banyumas', 'Museum Wayang Banyumas memiliki koleksi wayang Banyumas yang unik dan khas...', 'banyumas.webp'),
(6, 'Museum Wayang Gedung Arca', 'Bali', 'Wayang Bali dan Jawa', 'Museum Wayang Gedung Arca menampilkan koleksi wayang dari Bali dan Jawa dengan berbagai cerita...', 'gdarca.webp'),
(7, 'Museum Wayang Sriwedari', 'Solo', 'Wayang dan Budaya Jawa', 'Museum Wayang Sriwedari menampilkan berbagai jenis wayang yang berhubungan dengan budaya Jawa...', 'sriwedari.webp');

-- --------------------------------------------------------

--
-- Table structure for table `data_wayang`
--

CREATE TABLE `data_wayang` (
  `id` int(11) NOT NULL,
  `nama_wayang` varchar(255) NOT NULL,
  `judul_wayang` varchar(255) NOT NULL,
  `isi_wayang` longtext NOT NULL,
  `gambar_wayang` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_wayang`
--

INSERT INTO `data_wayang` (`id`, `nama_wayang`, `judul_wayang`, `isi_wayang`, `gambar_wayang`, `id_kategori`) VALUES
(1, 'Arjuna', 'Arjuna Sang Pahlawan', 'Arjuna adalah salah satu tokoh penting dalam cerita Mahabharata, seorang pahlawan yang dikenal karena keterampilannya dalam memanah dan keberaniannya dalam pertempuran. Ia adalah putra ketiga dari Pandu dan Kunti, serta saudara dari Yudhistira, Bima, Nakula, dan Sadewa. Arjuna memiliki banyak nama dan gelar, seperti Partha dan Dhananjaya, yang mencerminkan berbagai aspek dari kepribadiannya dan pencapaiannya dalam hidupnya.<br><br>  Dalam cerita Mahabharata, Arjuna dikenal sebagai murid kesayangan dari guru besar Drona dan sahabat dekat dari Krishna. Salah satu momen paling terkenal dalam kisahnya adalah ketika ia menerima wahyu Bhagavad Gita dari Krishna di medan perang Kurukshetra. Pada saat itu, Arjuna mengalami keraguan besar dan konflik batin mengenai kewajiban dan moralitas perang. Krishna kemudian memberinya ajaran tentang dharma, karma, dan yoga, yang membantu Arjuna menemukan keberanian dan tekad untuk melanjutkan perjuangan.<br><br>  Selain keterampilannya dalam perang, Arjuna juga dikenal karena kebijaksanaannya dan pengabdianya kepada kebenaran. Ia berperan penting dalam banyak peristiwa penting dalam Mahabharata, seperti pernikahannya dengan Draupadi, petualangannya mencari senjata ilahi, dan pertempuran epik melawan para Korawa. Keberanian dan komitmennya terhadap dharma membuatnya menjadi salah satu pahlawan paling dihormati dan dicintai dalam sastra Hindu, meninggalkan warisan yang terus dihormati dan diingat oleh generasi berikutnya.<br><br>', 'arjuna.webp', 1),
(2, 'Semar', 'Semar Sang Punakawan', 'Semar adalah tokoh punakawan dalam wayang kulit yang bijaksana...', 'Wayang_Kulit_of_Semar_crop.webp', 1),
(3, 'Sita', 'Sita dan Rama', 'Sita adalah istri dari Rama dalam cerita Ramayana...', 'sita.webp', 1),
(4, 'Hanoman', 'Hanoman Sang Ksatria Kera', 'Hanoman adalah tokoh kera putih yang setia kepada Rama...', 'hanoman.webp', 1),
(5, 'Gatotkaca', 'Gatotkaca yang Perkasa', 'Gatotkaca adalah anak dari Bima yang memiliki kekuatan luar biasa dan dikenal sebagai salah satu pahlawan paling perkasa dalam cerita Mahabharata. Sejak kecil, Gatotkaca menunjukkan tanda-tanda keistimewaan dengan tubuhnya yang kebal terhadap senjata. Ia lahir dari pernikahan Bima dengan Hidimbi, seorang raksasa wanita yang bertransformasi menjadi wanita cantik. Gatotkaca mewarisi kekuatan fisik luar biasa dari ayahnya dan kemampuan magis dari ibunya, membuatnya menjadi sosok yang ditakuti di medan perang.<br><br>  Dalam pertempuran, Gatotkaca dikenal karena kemampuannya terbang dan bertarung di udara, yang memberinya julukan \"ksatria terbang\". Ia memiliki senjata andalan berupa gada yang sangat kuat dan dapat menghancurkan musuh dalam sekali pukul. Salah satu momen paling heroik dalam hidupnya adalah ketika ia berperang di Kurukshetra, di mana ia berjuang mati-matian melawan pasukan Korawa. Dalam pertempuran tersebut, Gatotkaca berhasil menimbulkan kerugian besar pada musuh sebelum akhirnya tewas karena serangan senjata sakti Karna yang dilepaskan atas perintah Duryodhana.<br><br>  Pengorbanan Gatotkaca dalam perang Kurukshetra meninggalkan kesan mendalam bagi banyak orang, terutama bagi keluarga Pandawa. Keberanian dan kesetiaannya kepada para Pandawa menjadi simbol heroisme dan dedikasi tanpa pamrih. Selain itu, legenda Gatotkaca juga mengajarkan nilai-nilai keberanian, pengorbanan, dan keadilan kepada generasi muda. Hingga kini, Gatotkaca tetap dikenang sebagai pahlawan legendaris yang kisahnya menginspirasi banyak orang di seluruh Nusantara dan menjadi bagian penting dari budaya dan cerita rakyat Indonesia.<br><br>', 'gatotkaca.webp', 1),
(6, 'Dewi Shinta', 'Penculikan Dewi Shinta', 'Dewi Shinta diculik oleh Rahwana dalam kisah Ramayana...', 'dewishinta.webp', 1),
(7, 'Pandawa Lima', 'Pandawa Bersaudara', 'Pandawa Lima adalah lima bersaudara yang terdiri dari Yudhishthira, Bhima, Arjuna, Nakula, dan Sahadeva...', 'pandawalima.webp', 1),
(8, 'Kresna', 'Kresna Sang Penasehat', 'Kresna adalah penasehat Pandawa yang bijaksana dan cerdas...', 'kresna.webp', 1),
(9, 'Abimanyu', 'Abimanyu Sang Pahlawan Muda', 'Abimanyu adalah putra Arjuna yang gagah berani...', 'abimanyu.webp', 1),
(10, 'Nakula', 'Nakula dan Pedang Kembar', 'Nakula adalah salah satu dari Pandawa Lima yang ahli dalam seni pedang...', 'nakula.webp', 1),
(11, 'Sadewa', 'Sadewa Sang Ahli Strategi', 'Sadewa adalah adik kembar Nakula yang terkenal sebagai ahli strategi...', 'sadewa.webp', 1),
(12, 'Bima', 'Bima Sang Ksatria Perkasa', 'Bima adalah salah satu Pandawa yang memiliki kekuatan luar biasa...', 'bima.webp', 1),
(13, 'Yudhishthira', 'Yudhishthira Sang Raja Adil', 'Yudhishthira adalah pemimpin Pandawa yang dikenal karena keadilannya dan kebijaksanaannya dalam memimpin. Sebagai putra tertua dari Pandu dan Kunti, Yudhishthira selalu mengedepankan dharma, atau kewajiban moral dan etika, dalam setiap keputusan yang diambilnya. Ketulusannya dalam menjunjung tinggi keadilan membuatnya dihormati tidak hanya oleh saudara-saudaranya, tetapi juga oleh sekutu dan bahkan beberapa musuhnya. Yudhishthira sering digambarkan sebagai raja ideal yang selalu berusaha untuk memastikan kesejahteraan dan kebahagiaan rakyatnya.<br><br>  Salah satu ujian terbesar dalam hidup Yudhishthira adalah saat ia dan saudara-saudaranya diasingkan ke hutan selama 13 tahun akibat kekalahan dalam permainan dadu yang licik. Selama masa pengasingan tersebut, Yudhishthira tetap teguh menjaga moral dan semangat keluarganya. Kesabaran dan ketabahannya selama masa-masa sulit ini menunjukkan kualitas kepemimpinan yang luar biasa. Selain itu, Yudhishthira juga menghadapi berbagai tantangan dan godaan yang menguji integritasnya, namun ia selalu berhasil mempertahankan prinsip-prinsipnya.<br><br>  Puncak dari kisah Yudhishthira adalah pertempuran besar di Kurukshetra, di mana ia memimpin Pandawa menuju kemenangan melawan Korawa. Meskipun kemenangan ini diraih dengan pengorbanan besar, Yudhishthira tetap berpegang pada nilai-nilai kebenaran dan keadilan dalam memerintah kerajaannya setelah perang. Bahkan setelah menjadi raja Hastinapura, Yudhishthira terus menunjukkan kebijaksanaan dan kemurahan hatinya, memastikan bahwa pemerintahannya adil dan rakyatnya sejahtera. Warisan Yudhishthira sebagai pemimpin yang adil dan bijaksana terus dikenang dan dihormati dalam cerita Mahabharata, mengajarkan generasi mendatang tentang pentingnya keadilan, kebijaksanaan, dan keteguhan hati.<br><br>', 'yudistira.webp', 1),
(14, 'Srikandi', 'Srikandi Sang Pemanah Wanita', 'Srikandi adalah seorang ksatria wanita yang ahli dalam memanah dan dikenal karena keberaniannya dalam cerita Mahabharata. Ia adalah putri dari Raja Drupada dan saudara perempuan dari Drestadyumna serta Draupadi. Sejak muda, Srikandi menunjukkan bakat luar biasa dalam seni memanah dan seni perang. Ia adalah murid dari Drona, guru besar para Pandawa, yang mengajarinya keterampilan memanah dan strategi perang. Keahlian Srikandi dalam memanah membuatnya menjadi salah satu pejuang yang paling ditakuti di medan perang.<br><br>  Dalam pertempuran Kurukshetra, Srikandi memainkan peran penting dalam strategi perang Pandawa. Salah satu kontribusi terbesarnya adalah ketika ia berhasil mengalahkan Bhishma, salah satu ksatria terkuat dan paling dihormati dari pihak Korawa. Bhishma, yang memiliki sumpah untuk tidak bertarung dengan seorang wanita, menjadi sasaran yang ideal bagi Srikandi. Dengan bantuan dari Arjuna, Srikandi berhasil melemahkan Bhishma, yang kemudian berujung pada kekalahan Korawa. Tindakan heroik ini menunjukkan tidak hanya keberanian tetapi juga kecerdikan Srikandi dalam pertempuran.<br><br>  Selain dikenal sebagai pejuang yang gagah berani, Srikandi juga dihormati karena dedikasinya terhadap kebenaran dan keadilan. Ia selalu berjuang demi melindungi orang-orang yang tidak bersalah dan menegakkan nilai-nilai dharma. Keberadaan Srikandi dalam Mahabharata mengajarkan pentingnya kesetaraan gender dan menginspirasi banyak wanita untuk berani dan percaya diri dalam menghadapi tantangan hidup. Legenda Srikandi terus hidup dalam budaya dan tradisi, mengingatkan kita bahwa keberanian dan keterampilan tidak mengenal batasan gender.<br><br>', 'srikandi.webp', 1),
(15, 'Antareja', 'Antareja Sang Pemberani', 'Antareja adalah salah satu putra Bima yang memiliki kesaktian luar biasa...', 'antareja.webp', 1),
(16, 'Petruk', 'Petruk Sang Punakawan', 'Petruk adalah salah satu tokoh punakawan yang dikenal dengan hidung panjangnya...', 'petruk.webp', 1),
(17, 'Gareng', 'Gareng Sang Pelawak', 'Gareng adalah tokoh punakawan yang dikenal karena kelucuannya...', 'gareng.webp', 1),
(18, 'Bagong', 'Bagong yang Kocak', 'Bagong adalah tokoh punakawan yang sering menghibur dengan tingkah lakunya...', 'bagong.webp', 1),
(19, 'Rahwana', 'Rahwana Sang Antagonis', 'Rahwana adalah raja raksasa yang menculik Dewi Shinta dalam cerita Ramayana...', 'rahwana.jpg', 2),
(20, 'Sugriwa', 'Sugriwa Raja Kera', 'Sugriwa adalah raja kera yang membantu Rama dalam perang melawan Rahwana...', 'sugriwa.jpg', 2),
(21, 'Indrajit', 'Indrajit Sang Pemanah Ulung', 'Indrajit adalah putra Rahwana yang memiliki keahlian luar biasa dalam memanah...', 'indrajit.jpg', 2),
(22, 'Trijata', 'Trijata Sang Penasehat', 'Trijata adalah keponakan Rahwana yang membantu Sita selama dalam penculikan...', 'trijata.jpg', 3),
(23, 'Anggada', 'Anggada Pahlawan Kera', 'Anggada adalah putra Sugriwa yang setia dalam membantu Rama...', 'anggada.jpg', 2),
(24, 'Laksamana', 'Laksamana Adik Rama', 'Laksamana adalah adik Rama yang selalu setia mendampingi dalam perjalanannya...', 'laksamana.jpg', 3),
(25, 'Kumbakarna', 'Kumbakarna Sang Raksasa Tidur', 'Kumbakarna adalah saudara Rahwana yang terkenal dengan tidurnya yang panjang...', 'kumbakarna.jpg', 2),
(26, 'Samba', 'Samba Sang Penari', 'Samba adalah putra Kresna yang terkenal dengan tarian perangnya...', 'samba.jpg', 2),
(27, 'Baladewa', 'Baladewa Sang Raja Mandura', 'Baladewa adalah saudara Kresna yang juga dikenal sebagai raja Mandura...', 'baladewa.jpg', 2),
(28, 'Sumantri', 'Sumantri Sang Panglima', 'Sumantri adalah panglima perang yang setia kepada kerajaan...', 'sumantri.jpg', 1),
(29, 'Anoman', 'Anoman Sang Ksatria', 'Anoman adalah salah satu tokoh kera yang memiliki kesetiaan tinggi kepada Rama...', 'anoman.jpg', 2),
(30, 'Bharata', 'Bharata Sang Pahlawan', 'Bharata adalah saudara Rama yang turut membantu dalam cerita Ramayana...', 'bharata.jpg', 3),
(31, 'Pandji', 'Pandji Sang Pujangga', 'Pandji adalah tokoh yang sering muncul dalam wayang Wong dengan kisah percintaannya...', 'pandji.jpg', 4),
(32, 'Cebolang', 'Cebolang Sang Pengembara', 'Cebolang adalah tokoh wayang Wong yang dikenal dengan pengembaraannya...', 'cebolang.jpg', 5),
(33, 'Prabu Klana', 'Prabu Klana Raja Angkara', 'Prabu Klana adalah tokoh antagonis dalam cerita wayang Wong...', '2020-12-10_10_31_36_9283.webp', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id` int(11) NOT NULL,
  `id_pertanyaan` int(11) DEFAULT NULL,
  `teks_jawaban` text DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id`, `id_pertanyaan`, `teks_jawaban`, `nilai`) VALUES
(1, 1, 'Pemberani', 1),
(2, 1, 'Bijaksana', 2),
(3, 1, 'Setia', 3),
(4, 1, 'Kreatif', 4),
(5, 2, 'Menghadapinya langsung', 1),
(6, 2, 'Mencari nasihat dari orang bijak', 2),
(7, 2, 'Bersabar dan menunggu waktu yang tepat', 3),
(8, 2, 'Mencari solusi inovatif', 4),
(9, 3, 'Keberanian', 1),
(10, 3, 'Kejujuran', 2),
(11, 3, 'Kesetiaan', 3),
(12, 3, 'Keseruan', 4),
(13, 4, 'Merah', 1),
(14, 4, 'Biru', 2),
(15, 4, 'Hijau', 3),
(16, 4, 'Kuning', 4),
(17, 5, 'Olahraga ekstrem', 1),
(18, 5, 'Membaca buku', 2),
(19, 5, 'Menghabiskan waktu dengan keluarga', 3),
(20, 5, 'Melukis atau menggambar', 4);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_wayang`
--

CREATE TABLE `kategori_wayang` (
  `id_k` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori_wayang`
--

INSERT INTO `kategori_wayang` (`id_k`, `nama_kategori`) VALUES
(1, 'Wayang Golek'),
(2, 'Wayang Kulit'),
(3, 'Wayang Gambuh'),
(4, 'Wayang Orang'),
(5, 'Wayang Wong'),
(6, 'Wayang Beber'),
(7, 'Wayang Klithik'),
(8, 'Wayang Krucil');

-- --------------------------------------------------------

--
-- Table structure for table `kuis`
--

CREATE TABLE `kuis` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kuis`
--

INSERT INTO `kuis` (`id`, `judul`) VALUES
(1, 'Wayang yang Sesuai dengan Kepribadianmu');

-- --------------------------------------------------------

--
-- Table structure for table `passreset`
--

CREATE TABLE `passreset` (
  `passResetId` int(11) NOT NULL,
  `passResetEmail` text NOT NULL,
  `passResetSelector` text NOT NULL,
  `passResetToken` longtext NOT NULL,
  `passResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(11) NOT NULL,
  `id_kuis` int(11) DEFAULT NULL,
  `teks_pertanyaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `id_kuis`, `teks_pertanyaan`) VALUES
(1, 1, 'Apa sifat utama yang paling menggambarkan dirimu?'),
(2, 1, 'Bagaimana cara kamu mengatasi masalah?'),
(3, 1, 'Apa yang paling penting dalam sebuah hubungan?'),
(4, 1, 'Pilih warna yang paling kamu sukai:'),
(5, 1, 'Apa hobimu?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_museum`
--
ALTER TABLE `data_museum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_wayang`
--
ALTER TABLE `data_wayang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pertanyaan` (`id_pertanyaan`);

--
-- Indexes for table `kategori_wayang`
--
ALTER TABLE `kategori_wayang`
  ADD PRIMARY KEY (`id_k`);

--
-- Indexes for table `kuis`
--
ALTER TABLE `kuis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passreset`
--
ALTER TABLE `passreset`
  ADD PRIMARY KEY (`passResetId`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kuis` (`id_kuis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_museum`
--
ALTER TABLE `data_museum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data_wayang`
--
ALTER TABLE `data_wayang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kategori_wayang`
--
ALTER TABLE `kategori_wayang`
  MODIFY `id_k` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kuis`
--
ALTER TABLE `kuis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `passreset`
--
ALTER TABLE `passreset`
  MODIFY `passResetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`id_pertanyaan`) REFERENCES `pertanyaan` (`id`);

--
-- Constraints for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD CONSTRAINT `pertanyaan_ibfk_1` FOREIGN KEY (`id_kuis`) REFERENCES `kuis` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
