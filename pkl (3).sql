-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2020 at 03:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nl` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telp` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nl`, `username`, `email`, `telp`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', '082132496655', 'P@ssw0rd', 'admin'),
(2, 'Hibatul Akmal', 'akmal', 'akmalhibatul2@gmail.com', '00212912', 'akmal', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesann` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `firstname`, `lastname`, `email`, `pesann`) VALUES
(1, 'akmal', 'hibatul', 'akmalhibatul1@gmail.com', 'hai gans'),
(2, 'akmal', 'gans', 'akmalhibatul1@gmail.com', 'wih mmantap'),
(3, 'sasasas', 'sasa', 'akmalhibatul1@gmail.com', 'sasasa'),
(4, 'akmal', 'ssdsd', 'akmalhibatul1@gmail.com', 'sdsdsdsd');

-- --------------------------------------------------------

--
-- Table structure for table `tambah`
--

CREATE TABLE `tambah` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` mediumtext NOT NULL,
  `jenjang` varchar(10) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `pelajaran` varchar(100) NOT NULL,
  `fileToUpload` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tambah`
--

INSERT INTO `tambah` (`id`, `judul`, `deskripsi`, `jenjang`, `kelas`, `pelajaran`, `fileToUpload`, `tanggal`) VALUES
(1, 'Apa itu hewan?', '<h3><strong>Pengertian Hewan</strong></h3>\r\n\r\n<p><strong>Hewan</strong>&nbsp;atau disebut juga dengan&nbsp;<strong>binatang</strong>&nbsp;adalah kelompok organisme yang diklasifikasikan dalam kerajaan&nbsp;<strong>Animalia</strong>&nbsp;atau&nbsp;<strong>metazoa</strong>, adalah salah satu dari berbagai makhluk hidup di bumi. Sebutan lainnya adalah&nbsp;<strong>fauna</strong>&nbsp;dan&nbsp;<strong>margasatwa</strong>&nbsp;(atau&nbsp;<strong>satwa</strong>&nbsp;saja).<br />\r\nHewan dalam pengertian sistematika modern mencakup hanya kelompok bersel banyak (multiselular) dan terorganisasi dalam fungsi-fungsi yang berbeda (jaringan), sehingga kelompok ini disebut juga histozoa. Semua binatang heterotrof, artinya tidak membuat energi sendiri, tetapi harus mengambil dari lingkungan sekitarnya.<br />\r\n&nbsp;</p>\r\n\r\n<h2>Ciri-Ciri hewan</h2>\r\n\r\n<p>Hewan mempunyai daya gerak, cepat tanggap terhadap rangsangan eksternal, tumbuh mencapai besar tertentu, memerlukan makanan bentuk kompleks dan jaringan tubuhnya lunak. Perbedaan itu berlaku secara umum, tentu saja ada kelainan-kelainannya. Tiap individu, baik pada hewan uniselular maupun pada hewan multiselular, merupakan satu unit. Hewan itu berorganisasi, berarti tiap bagian dari tubuhnya merupakan subordinat dari individu sebagai keseluruhan baik sebagai bagian suatu sel maupun seluruh sel. Inilah yang disebut konsep organismal, suatu konsep yang penting dalam biologi.<br />\r\nSecara umum berikut ini adalah ciri-ciri hewan:</p>\r\n\r\n<ol>\r\n	<li>Hewan merupakan organisme&nbsp;<strong>eukariota, multiseluler, heterotrofik</strong>. Berbeda dengan nutrisi autotrofik pada tumbuhan, hewan memasukkan bahan organik yang sudah jadi, ke dalam tubuhnya dengan cara menelan (<em>ingestion</em>) atau memakan organisme lain, atau memakan bahan organik yang terurai.</li>\r\n	<li>Sel-sel hewan&nbsp;<strong>tidak memiliki dinding sel</strong>&nbsp;yang menyokong tubuh dengan kuat, seperti pada tumbuhan atau jamur. Komponen terbesar sel-sel hewan terdiri atas protein struktural kolagen.</li>\r\n	<li>Keunikan hewan yang lain adalah adanya dua jaringan yang bertanggung jawab atas penghantaran impuls dan pergerakan, yaitu jaringan saraf dan jaringan otot sehingga dapat&nbsp;<strong>bergerak secara aktif</strong>.</li>\r\n	<li>Sebagian besar hewan bereproduksi secara seksual, dengan tahapan diploid yang mendominasi siklus hidupnya.</li>\r\n	<li>Alat pernapasan pada hewan bermacam-macam tergantung pada temapt hidupya, ada yang bernapas dengan paru-paru seperti kucing, insang seperti ikan, kulit seperti cacing, trakea seperti serangga.</li>\r\n	<li>Memerlukan makanan untuk tumbuh dan bertahan hidup.</li>\r\n	<li>Tidak mempunyai indra berpikir.</li>\r\n	<li>Dapat dikendali untuk manusia (hewan piaraan/sirkus).</li>\r\n	<li>Kehidupan dapat berakhir (mati)</li>\r\n</ol>\r\n\r\n<h2>Perkembangan hewan</h2>\r\n\r\n<p>Dalam sistematika awal, binatang mencakup banyak organisme bersel tunggal yang dikelompokkan sebagai Protozoa karena sifat heterotrof dan bergerak aktif (motil). Pengelompokan ini terus dianut hingga pertengahan abad ke-20 dan hingga sekarang masih dipakai untuk kepentingan praktis. Ketika orang mulai menganggap bahwa organisme bersel satu tidak memiliki organisasi jaringan, dibentuklah kelompok Protista yang menghimpun semua organisme sederhana yang berperilaku mirip binatang (bergerak, heterotrof).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Perkembangan biologi sejak separuh akhir abad ke-20 telah menunjukkan bahwa banyak organisme bersel satu tidak dapat lagi dipertahankan sebagai binatang. Ke dalam &quot;binatang&quot; dimasukkan semua organisme bersel banyak yang sel spermanya memiliki kesamaan struktur dengan koanosit, suatu sel generatif primitif. Selain itu, penerapan konsep evolusi dan kladistik telah mengubah banyak organisasi sistematika hewan. Proses reklasifikasi ini sampai sekarang masih terus berjalan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Menurut para ahli, terbentuknya hewan-hewan di muka bumi ini dimulai dari zigot bersel satu yang mengalami pembelahan sel dan sel tersebut akan bertambah banyak yang terbentuk menyerupai bola. Bentuk seperti bola tersebut akan mengalami perkembangan, yaitu akan melekuk ke dalam sehingga akan terbentuk dua lapisan, yaitu&nbsp;<em>ektoderm</em>&nbsp;(lapisan luar) dan&nbsp;<em>endoderm</em>&nbsp;(lapisan dalam). Ektoderm dalam masa perkembangannya membentuk bagian-bagian tubuh tertentu, yaitu epidermis, kulit, dan sistem saraf, sedangkan lapisan endoderm akan berkembang menjadi sistem pencernaan dan kelenjarnya. Ada beberapa hewan yang berkembang pada tingkat kedua lapisan ini yang dinamakan&nbsp;<em>diplobastik</em>. Adapun yang termasuk golongan hewan ini adalah&nbsp;<em>Porifera</em>&nbsp;dan&nbsp;<em>Coelenterata</em>. Di antara kedua lapisan, yaitu ektoderm dan endoderm akan berkembang dan terbentuk lapisan&nbsp;<em>mesoderm</em>. Lapisan mesoderm akan berkembang membentuk bagian tubuh yang menjadi otot, sistem reproduksi, sistem sirkulasi, dan sistem ekskresi. Golongan hewan yang berkembang pada ketiga tingkat lapisan ini dinamakan&nbsp;<em>triplobastik</em>. Golongan hewan ini adalah&nbsp;<em>Platyhelminthes</em>&nbsp;dan&nbsp;<em>Nemathelminthes</em>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dari hasil penelitian diketahui pada&nbsp;<em>Platyhelminthes</em>&nbsp;belum mempunyai rongga tubuh, yaitu terlihat tubuhnya padat, tanpa rongga antara usus dan tubuh terluar sehingga digolongkan sebagai&nbsp;<em>triplobastik aselomata</em>&nbsp;(selom = rongga tubuh). Adapun pada&nbsp;<em>Nemathelminthes</em>&nbsp;mempunyai rongga tubuh semu, yaitu mesoderm belum membentuk rongga yang sesungguhnya karena tampak pada mesoderm belum terbagi menjadi lapisan dalam dan lapisan luar, yang dinamakan dengan&nbsp;<em>triplobastik pseudoselomata</em>&nbsp;dan yang mempunyai rongga tubuh dinamakan&nbsp;<em>triplobastik selomata</em>&nbsp;karena mesodermnya sudah dipisahkan oleh rongga tubuh yang terbentuk menjadi dua lapisan, yaitu dalam dan luar. Termasuk golongan hewan ini adalah&nbsp;<em>Annelida</em>&nbsp;sampai&nbsp;<em>Chordata</em>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dari uraian di atas dapat diketahui bahwa terbentuknya hewan dimulai dari&nbsp;<em>Protozoa</em>&nbsp;kemudian&nbsp;<em>Porifera, Coelenterata</em>, sampai pada tingkat&nbsp;<em>Mamalia</em>. Jadi, hewan tersebut mengalami perkembangan dari satu sel menjadi banyak sel hingga terbentuk triplobastik aselomata, pseudoselomata, sampai selomata.</p>\r\n\r\n<p>Hewan yang digolongkan dalam kelompok Avertebrata memiliki persamaan ciri, yaitu tidak mempunyai ruas-ruas tulang belakang&nbsp;<em>(vertebrae)</em>. Jika kita amati, golongan hewan ini memiliki pola organisasi tubuh yang agak sederhana, dibandingkan dengan kelompok hewan Vertebrata. Dengan dasar inilah hewan-hewan ini dianggap primitif atau merupakan bentuk-bentuk paling awal dari kehidupan yang telah mengalami sedikit perubahan.</p>\r\n', 'SMP', 'Kelas 2', 'IPA', '5.jpg', 'Thursday, 12-03-2020'),
(2, 'Pengertian Naskah Menurut Para Ahli ', '<p>Ada beberapa pengertian naskah menurut para ahli.&nbsp;Pengertian Naskah Menurut Para Ahli&nbsp;antara lain&nbsp;adalah sebagai berikut:</p>\r\n\r\n<ol>\r\n	<li>Menurut KBBI naskah adalah karangan yang masih ditulis dengan tangan yang belum diterbitkan</li>\r\n	<li>Menurut Imam Suryono Drama adalah suatu aksi atau perbuatan (bahasa yunani). Sedangkan dramatik adalah jenis karangan yang dipertunjukkan dalan suatu tingkah laku, mimik dan perbuatan. Sandiwara adalah sebutan lain dari drama di mana sandi adalah rahasia dan wara adalah pelajaran. Orang yang memainkan drama disebut aktor atau lakon</li>\r\n	<li>Menurut Molton drama adalah hidup yang dilukiskan dengan gerak (life presented in action).</li>\r\n	<li>Menurut Ferdinand Brunetierre drama haruslah melahirkan kehendak dengan action.&nbsp;Menurut Baltazhar Vallhagen drama adalah kesenian melukiskan sifat dan sikap manusia dengan gerak.</li>\r\n	<li>Menurut Sendarasik naskah drama merupakan bahan dasar sebuah pementasan dan belum sempurna betuknya apabila belum dipentaskan. Naskah drama juga sebagai ungkapan pernyataan penulis (play wright) yang berisi nilai-nilai pengalaman umum juga merupakan ide dasar bagi actor.</li>\r\n	<li>Menurut Baried dalam Venny Indria Ekowati (2003).&nbsp;Naskah adalah tulisan tangan yang menyimpan beragai ungkapan pikiran dan perasaan sebagai hasil budaya bansa masa lampau.</li>\r\n	<li>Dalam situs wikipedia.com.&nbsp;Suatu naskah manuskrip (bahasa Latin manuscript: manu scriptus ditulis tangan), secara khusus, adalah semua dokumen tertulis yang ditulis tangan, dibedakan dari dokumen cetakan atau perbanyakannya dengan cara lain. Kata &#39;naskah&#39; diambil dari bahasa Arab nuskhatum yang berarti sebuah potongan kertas.</li>\r\n	<li>Menurut Onions dalam Venny Indria Ekowati (2003).&nbsp;Naskah dapat dianggap sebagai padanan kata manuskrip</li>\r\n	<li>Dalam KBBI edisi III, 2005.&nbsp;Naskah yaitu:&nbsp;(a)&nbsp;karangan yang masih ditulis dengan tangan, (b)&nbsp;karangan seseorang yang belum diterbitkan, (c)&nbsp;bahan-bahan berita yang siap untuk diset, (d)&nbsp;rancangan</li>\r\n	<li>Dalam KBBI edisi II, 1954:&nbsp;Naskah yaitu:&nbsp;(a)&nbsp;karangan yang masih ditulis dengan tangan, (b)&nbsp;karangan seseorang sebagai karya asli, (c)&nbsp;bahan-bahan berita yang siap diset</li>\r\n	<li>Dalam Library and Information Science.&nbsp;Suatu naskah adalah semua barang tulisan tangan yang ada pada koleksi perpustakaan atau arsip; misalnya , surat-surat atau buku harian milik seseorang yang ada pada koleksi perspustakaan.</li>\r\n</ol>\r\n\r\n<p>Historiografi membedakan tiga jenis sumber naskah:</p>\r\n\r\n<ol>\r\n	<li>Sumber primer adalah bukti-bukti tertulis tangan pertama mengenai sejarah yang dibuat pada waktu peristiwa terjadi oleh orang yang ada atau hadir pada peristiwa tersebut. Contohnya adalah catatan harian, korespondensi, dan surat kabar. Jenis ini dapat pula mencakup peninggalan atau naskah yang dibuat setelah kejadian oleh orang yang ada pada peristiwa tersebut. Validitas sumber ini lebih diragukan karena kemungkinan lupa atau kemungkinan adanya keinginan untuk menulis ulang sejarah. Harap dicatat bahwa sumber primer dapat pula berupa bukti-bukti yang tak tertulis seperti temuan arkeologis: gerabah, koin, dinding, dll.</li>\r\n	<li>Sumber sekunder adalah tulisan mengenai sejarah berdasarkan bukti-bukti dari sumber pertama. Sebagai contoh dalah tulisan pada buku sejarah berdasarkan buku harian atau arsip surat kabar.</li>\r\n	<li>Sumber tersier adalah kompilasi berdasarkan sumber primer dan sekunder. Jenis ini sering ditujukan untuk menampilkan informasi yang diketahui dengan cara nyaman tanpa klaim mengenai orisinalitasnya. Contoh umum adalah ensiklopedia dan buku teks.</li>\r\n</ol>\r\n', 'SMK', 'Kelas 2', 'Bahasa Indonesia', '373-akmal.jpg', 'Thursday, 12-03-2020'),
(3, 'Simple Past Tense', '<h2><strong>Pengertian Simple Past Tense</strong></h2>\r\n\r\n<p>Simple past tense adalah kalimat tenses yang digunakan untuk menyatakan kejadian yang terjadi di masa lampau dan telah berakhir di masa lampau. Berbeda dengan past continous tense, yakni menyatakan kejadian yang terjadi di masa lampau, namun masih terjadi di masa sekarang.</p>\r\n\r\n<h2><strong>Rumus Simple Past Tense</strong></h2>\r\n\r\n<p>Untuk membentuk kalimat simple past tense, rumusnya adalah sebagai berikut</p>\r\n\r\n<p><strong>S + Verb 2 + O</strong></p>\r\n\r\n<p>Dalam kalimat simple past tense, kata kerja / verb yang digunakan merupakan bentuk kata kerja&nbsp; kedua. Terdapat 2 jenis kata kerja / Verb, yakni Regular Verb dan Irregular Verb. Untuk regular verb, tambahkan&nbsp;<strong>-ed</strong>&nbsp;/&nbsp;<strong>-d</strong>&nbsp;dibelakang setelah kata kerja bentuk pertama. Sebagai contoh</p>\r\n\r\n<ul>\r\n	<li>Stay -&gt; stayed (Tinggal)</li>\r\n	<li>Punch -&gt; Punched (Memukul)</li>\r\n	<li>Play -&gt; Played (Bermain)</li>\r\n	<li>Touch -&gt; Touched (Menyentuh)</li>\r\n	<li>Write -&gt; Writed (Menulis)</li>\r\n</ul>\r\n\r\n<p>Untuk Irregular verb , termasuk didalamnya to be, bentuk kata kerja keduanya sangat berbeda. Sebagai contoh :</p>\r\n\r\n<ul>\r\n	<li>Awake -&gt; Awoke (Terbangun)</li>\r\n	<li>Begin -&gt; Began (Memulai)</li>\r\n	<li>Drink -&gt; Drank (Minum)</li>\r\n	<li>Eat -&gt; ate (Makan)</li>\r\n	<li>Run -&gt; ran (Berlari)</li>\r\n</ul>\r\n\r\n<p>Namun, ada sebagian Irregular verb yang memiliki bentuk kata kerja yang sama dengan bentuk kata kerja dasar. Sebagai contoh :</p>\r\n\r\n<ul>\r\n	<li>Put -&gt; Put (Meletakkan)</li>\r\n	<li>Split -&gt; Split (Membagi)</li>\r\n	<li>Spread -&gt; Spread (Menyebarkan)</li>\r\n	<li>Set -&gt; Set (Mengatur)</li>\r\n	<li>Cut -&gt; Cut (Memotong)</li>\r\n</ul>\r\n\r\n<h2><strong>Contoh Kalimat Simple Past Tense Affirmative</strong></h2>\r\n\r\n<p>Berikut ini, Wall Street English berikan contoh kalimat simple past tense positif :</p>\r\n\r\n<ol>\r\n	<li>Abdul went to Bali for holiday last Sunday (Minggu kemarin, Abdul pergi ke Bali untuk berlibur)</li>\r\n	<li>She joined english club class at school yesterday. (Kemarin, dia bergabung kedalam klub bahasa Inggris di sekolah).</li>\r\n	<li>Last Monday, Joni got an accident at the office (Senin lalu, Joni terkena musibah di kantor).</li>\r\n	<li>Dani bought new laptops last night. (Dani membeli laptop baru kemarin malam)</li>\r\n	<li>They watched &ldquo;Dilan&rdquo;, the newest movie at the cinema yesterday. (Kemarin, mereka menonton film &ldquo;Dilan&rdquo;, film terbaru di bioskop)</li>\r\n	<li>Ade went to school by his new cars this morning. (Ade pergi ke sekolah menggunakan mobil barunya pagi ini)</li>\r\n	<li>Dewi applied for manager position at Wall Street English company. (Dewi melamar pekerjaan sebagai posisi manager di perusahaan Wall Street English)</li>\r\n	<li>Susilo Bambang Yudhoyono was the president of Indonesia. (Susilo Bambang Yudhoyono dulu merupakan presiden Republik Indonesia)</li>\r\n	<li>I was born on Surabaya. (Dulu, saya lahir di Surabaya)</li>\r\n	<li>My mother cooked grilled fish for my birthday party. (Ibuku dulu memasak ikan bakar untuk pesta ulang tahunku).</li>\r\n</ol>\r\n\r\n<h2><strong>Contoh kalimat simple past tense negative</strong></h2>\r\n\r\n<p>Untuk membentuk kalimat simple past tense negatif, rumusnya adalah sebagai berikut</p>\r\n\r\n<p><strong>S + did + not + Verb 1</strong></p>\r\n\r\n<p>atau</p>\r\n\r\n<p><strong>S + To Be (Was / Were) + not</strong></p>\r\n\r\n<p>Berikut ini adalah contoh kalimatnya :</p>\r\n\r\n<ol>\r\n	<li>I did not sleep well last night, (Aku tidak bisa tidur dengan nyenyak, tadi malam).</li>\r\n	<li>Rani did not come to the office yesterday. (Rani tidak datang ke kantor, kemarin)</li>\r\n	<li>Adi did not win english debate competition last month. (Adi tidak memenangkan kompetisi debat berbahasa inggris bulan lalu)</li>\r\n	<li>Arif was not the smartest students in the class. (Dulu, Arif bukan murid yang paling pintar di kelas)</li>\r\n	<li>She did not complete her job. (Dia tidak menyelesaikan tugasnya)</li>\r\n	<li>Many kids did not like horror movies. (Banyak anak-anak yang tidak menyukai film horror)</li>\r\n	<li>Dodi did not eat the vegetables. (Dodi tidak makan sayuran)</li>\r\n	<li>John did not buy a car. (John tidak membeli sebuah mobil)</li>\r\n	<li>Thomas did not come to my party yesterday (Thomas tidak pergi ke pesta saya, kemarin).</li>\r\n	<li>George did not go to the dentist because he was afraid. (George tidak pergi ke dokter gigi karena dia sangat takut)</li>\r\n</ol>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<h2><strong>Contoh Kalimat Simple Past Tense Interogative</strong></h2>\r\n\r\n<p>Untuk membentuk kalimat simple past tense interogative, rumusnya adalah sebagai berikut</p>\r\n\r\n<p><strong>Did + S + Verb 1</strong></p>\r\n\r\n<p>atau</p>\r\n\r\n<p><strong>Was / Were + S</strong></p>\r\n\r\n<p>Berikut ini adalah contoh kalimat tanya simple past tense :</p>\r\n\r\n<ol>\r\n	<li><strong>Did you see</strong>&nbsp;my bag on the table ? (Apakah kamu melihat tas ku di atas meja ?)</li>\r\n	<li><strong>Did the student come</strong>&nbsp;to school ? (Apakah para murid datang ke sekolah ?)</li>\r\n	<li><strong>Did you sleep</strong>&nbsp;enough last night ? (Apakah kamu tidur dengan nyenyak kemarin malam ?)</li>\r\n	<li><strong>Did she deliver</strong>&nbsp;the pizza on time ? (Apakah dia mengantar pizza tepat waktu ?)</li>\r\n	<li><strong>Did they allow</strong>&nbsp;you to join their english club ? (Apakah mereka mengizinkan kamu bergabung ke dalam klub bahasa Inggris ?)</li>\r\n	<li><strong>Were you late&nbsp;</strong>to come to the office at 11 am yesterday ? (Apakah kamu datang terlambat ke kantor jam 11 kemarin ?)</li>\r\n	<li><strong>Was he&nbsp;</strong>so busy ? (Apakah dia sangat sibuk ?)</li>\r\n	<li><strong>Was the movie</strong>&nbsp;so fantastic ? tell me (Apakah filmnya sangat berkesan ? Ceritakan kepadaku)</li>\r\n	<li><strong>Did he clean</strong>&nbsp;your room yesterday ? (Apakah dia membersihkan ruanganmu kemarin ?)</li>\r\n	<li><strong>Was Dewi</strong>&nbsp;happy to work here ? (Apakah dewi senang bekerja disini ?)</li>\r\n</ol>\r\n', 'SMP', 'Kelas 2', 'Bahasa Inggris', '4.jpg', 'Wednesday, 11-03-2020'),
(4, 'Conditional tenses', '<h1>CONDITIONAL</h1>\r\n\r\n<p>Conditional tenses are used to speculate about what could happen, what might have happened, and what we wish would happen. In English, most sentences using the conditional contain the word&nbsp;<em>if</em>. Many conditional forms in English are used in sentences that include verbs in one of the past tenses. This usage is referred to as&nbsp;<a href=\"https://www.ef.com/wwen/english-resources/english-grammar/unreal-past/\">&quot;the unreal past&quot;</a>&nbsp;because we use a past tense but we are not actually referring to something that happened in the past. There are five main ways of constructing conditional sentences in English. In all cases, these sentences are made up of an&nbsp;<em>if</em>&nbsp;clause and a main clause. In many negative conditional sentences, there is an equivalent sentence construction&nbsp;<a href=\"https://www.ef.com/wwen/english-resources/english-grammar/how-use-unless/\">using &quot;unless&quot;</a>&nbsp;instead of &quot;if&quot;.</p>\r\n\r\n<table>\r\n	<thead>\r\n		<tr>\r\n			<th>Conditional sentence type</th>\r\n			<th>Usage</th>\r\n			<th>If clause verb tense</th>\r\n			<th>Main clause verb tense</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>Zero</td>\r\n			<td>General truths</td>\r\n			<td>Simple present</td>\r\n			<td>Simple present</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Type 1</td>\r\n			<td>A possible condition and its probable result</td>\r\n			<td>Simple present</td>\r\n			<td>Simple future</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Type 2</td>\r\n			<td>A hypothetical condition and its probable result</td>\r\n			<td>Simple past</td>\r\n			<td>Present conditional or Present continuous conditional</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Type 3</td>\r\n			<td>An unreal past condition and its probable result in the past</td>\r\n			<td>Past perfect</td>\r\n			<td>Perfect conditional</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mixed type</td>\r\n			<td>An unreal past condition and its probable result in the present</td>\r\n			<td>Past perfect</td>\r\n			<td>Present contditional</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'SMA', 'Kelas 11', 'Bahasa Inggris', 'download.png', 'Thursday, 12-03-2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tambah`
--
ALTER TABLE `tambah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tambah`
--
ALTER TABLE `tambah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
