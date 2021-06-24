-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jun 2021 pada 06.19
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbprakerin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblagama`
--

CREATE TABLE `tblagama` (
  `id_agama` int(11) NOT NULL,
  `ketagama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblagama`
--

INSERT INTO `tblagama` (`id_agama`, `ketagama`) VALUES
(1, 'Islam'),
(2, 'Hindu'),
(3, 'Kristen'),
(4, 'Budha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblgelombang`
--

CREATE TABLE `tblgelombang` (
  `id_gelombang` int(11) NOT NULL,
  `ketgelombang` varchar(50) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `thn_angkatan` varchar(10) NOT NULL,
  `jml_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblgelombang`
--

INSERT INTO `tblgelombang` (`id_gelombang`, `ketgelombang`, `tgl_berangkat`, `tgl_kembali`, `thn_angkatan`, `jml_kelas`) VALUES
(1, 'Pertama', '2021-01-13', '2021-02-13', '2020', 6),
(2, 'Kedua', '2021-03-01', '2021-03-31', '2020', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblguru`
--

CREATE TABLE `tblguru` (
  `id_guru` int(11) NOT NULL,
  `NIP` char(20) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `alamat_guru` varchar(50) NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_jk` char(11) NOT NULL,
  `id_agama` int(11) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblguru`
--

INSERT INTO `tblguru` (`id_guru`, `NIP`, `nama_guru`, `alamat_guru`, `tmpt_lahir`, `tgl_lahir`, `id_jk`, `id_agama`, `jabatan`) VALUES
(1, '1793922839283', 'Maimunah', 'Bondowoso', 'Sumenep', '1999-10-12', 'P', 1, 'Guru Matematika'),
(5, '196111111986031008', 'Drs. Agus Rukmawan, S.IP., M.M.', 'Dk. Ceper RT 01/06, Ds. Ceper, Kec. Ceper, Kab. Kl', 'Klaten', '1998-01-01', 'P', 1, 'GURU'),
(6, '196203161986031007', 'Drs. Bahrudin, M.M.', 'Blulukan II rt01/06 Colomadu, Karanganyar', 'Karanganyar', '1999-01-12', 'L', 1, 'KAPRODI APK'),
(7, '196001131986111001', 'Leli Suherli, S.Pd., M.Pd.', 'Desa Kelet Rt 23 Rw 4 Kecamatan Keling Kabupaten J', 'Jepara', '1998-01-26', 'L', 1, 'KAPRODI PM'),
(8, '195901181987031003', 'Drs. Ebo Agus Sunarto, M.M.', 'IL.CUT NYAK DHIEN LOR III,KOTA .HOKSUKON,LHOKSUKON', 'Meran', '1998-02-18', 'L', 1, 'GURU'),
(9, '195911141987031007', 'Drs. Dedi Kusdinar, M.M.', 'JI.wijaya kusuma 3 no 139 jakarta timur,prumnas kl', 'Jakarta', '1996-12-02', 'L', 1, 'GURU'),
(10, '196803111990031006', 'Cosmas Marojahan Sitanggang, S.Pd.,M.M.', 'Kp. Padakati Peuntas RT/RW 01/05 Desa Tegallega Ke', 'Cianjur', '1998-01-18', 'L', 1, 'GURU');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbljk`
--

CREATE TABLE `tbljk` (
  `id_jk` char(11) NOT NULL,
  `ketjk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbljk`
--

INSERT INTO `tbljk` (`id_jk`, `ketjk`) VALUES
('L', 'Laki-Laki'),
('P', 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbljurusan`
--

CREATE TABLE `tbljurusan` (
  `id_jurusan` char(10) NOT NULL,
  `ketjurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbljurusan`
--

INSERT INTO `tbljurusan` (`id_jurusan`, `ketjurusan`) VALUES
('AK', 'Akuntansi dan Keuangan Lembaga'),
('AP', 'Akomodasi Perhotelan'),
('MM', 'Multimedia'),
('OTKP', 'Otomatisasi dan Tata Kelola Perkantoran'),
('PM', 'Pemasaran'),
('RPL', 'Rekaya Perangkat Lunak'),
('TB', 'Tata Busana'),
('TKJ', 'Teknik Komputer Jaringan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblkelas`
--

CREATE TABLE `tblkelas` (
  `id_kelas` int(11) NOT NULL,
  `ketkelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblkelas`
--

INSERT INTO `tblkelas` (`id_kelas`, `ketkelas`) VALUES
(1, '10'),
(2, '11'),
(3, '12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbllogin`
--

CREATE TABLE `tbllogin` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbllogin`
--

INSERT INTO `tbllogin` (`id`, `nama_user`, `user`, `pass`, `level`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(5, 'Abdul Kafi', '1820100', '6e32a0951a3546e4e72e050a628f4916', 'siswa'),
(8, 'Abi', '821730', 'd78120b05adc75a9e35cf7ce0c6555c5', 'siswa'),
(9, 'imam', '127918', '57c5a2e28835b7939b7e944622cb8dbd', 'siswa'),
(12, 'Ali', '829120', 'aeae14a3a6d8676a238ed2b665c91d73', 'siswa'),
(15, 'Ivan Masyudi', '1804110032', '384c348fc511186416880baf1ef62480', 'siswa'),
(19, 'Bagas', '345622', '3332e0ba16d628bf8bf08aedca41dfbd', 'siswa'),
(20, 'Maimunah', '1793922839283', '4c26ae6c6234a8bd5def0fd03b2d463e', 'guru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblnilai`
--

CREATE TABLE `tblnilai` (
  `id_nilai` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nilai_teknis` int(11) NOT NULL,
  `nilai_nonteknis` int(11) NOT NULL,
  `nilai_ratarata` int(11) NOT NULL,
  `nilai_huruf` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblnilai`
--

INSERT INTO `tblnilai` (`id_nilai`, `id_siswa`, `nilai_teknis`, `nilai_nonteknis`, `nilai_ratarata`, `nilai_huruf`) VALUES
(11, 4, 80, 89, 85, 'A-'),
(12, 2, 80, 10, 45, 'D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblpembimbing`
--

CREATE TABLE `tblpembimbing` (
  `id_pembimbing` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblpembimbing`
--

INSERT INTO `tblpembimbing` (`id_pembimbing`, `id_guru`) VALUES
(1, 1),
(2, 7),
(8, 8),
(9, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblpenempatan`
--

CREATE TABLE `tblpenempatan` (
  `id_penempatan` int(11) NOT NULL,
  `id_pembimbing` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `id_gelombang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblpenempatan`
--

INSERT INTO `tblpenempatan` (`id_penempatan`, `id_pembimbing`, `id_siswa`, `id_perusahaan`, `id_gelombang`) VALUES
(5, 1, 4, 9, 1),
(14, 1, 2, 9, 1),
(15, 1, 13, 9, 1),
(18, 9, 6, 3, 1),
(19, 9, 10, 5, 1),
(21, 8, 15, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblperusahaan`
--

CREATE TABLE `tblperusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `alamat_perusahaan` varchar(100) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `fax` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblperusahaan`
--

INSERT INTO `tblperusahaan` (`id_perusahaan`, `nama_perusahaan`, `alamat_perusahaan`, `telepon`, `fax`) VALUES
(1, 'Abdi Budi Mulya, PT', 'JI. Raya Perniagaan Baru NO.2A-4C Medan, North Sumatera', '061-513243 556262', '061-324615'),
(2, 'Aek Tarum, PT', 'JI. Basuki Rahmat No. 788 Palembang 30127 South Sumatera', '0711-811921 811901 81179', '0711-811585'),
(3, 'Agra Masang Perkasa II', 'JL. A. Yani No. 102 B Ranto Prapat Labuhan Batu Sumatera', '061-571554', '061-511638'),
(5, 'Agra Paracitra, PT', 'JL. A. Yani No. 102 B Ranto Prapat Labuhan Batu Sumatera', '061-571554', '061-511638'),
(6, 'Agri Andalas, PT', 'JI. Simalungun No. 1 Medan North Sumatera', '061-54326 543527', '061-543524'),
(7, 'Agricinal, PT', 'JI Kapuas No. 16, Bengkulu', '0736-26346', '0736-23701'),
(8, 'Agrikarsa Cendana, PT', 'JI.Kali Besar Barat No 50 GG,Jakarta 11230', '(021)6903334', '(021)6906226'),
(9, 'Agritasara Prima, PT', 'II.Kedoya Baru, Blok A-IV/5 Kebon Jeruk, Jakarta Barat', '021-5801462', '021-5801463'),
(10, 'Agro Indah Sembada, PT', 'Bank Pasifik Building 17th Floor, JI.Jendral Sudirman', '021-5700700', '021-5704596'),
(11, 'Agropanca Modem', 'JITJ, 5th Floor, Jl.Mangga Dua Raya Jakarta 14430', '021-601796 6017998', '021-6016181'),
(14, 'Kantor Bupati Sumenep', 'Jl Color, Sumenep', '1820-91029-102', '061-5116282');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblsiswa`
--

CREATE TABLE `tblsiswa` (
  `id_siswa` int(11) NOT NULL,
  `NIS` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_jk` char(11) NOT NULL,
  `id_agama` int(11) NOT NULL,
  `id_jurusan` char(10) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblsiswa`
--

INSERT INTO `tblsiswa` (`id_siswa`, `NIS`, `nama`, `alamat`, `tmpt_lahir`, `tgl_lahir`, `id_jk`, `id_agama`, `id_jurusan`, `id_kelas`) VALUES
(2, 829120, 'Ali', 'Bangkalan', 'Sumenep', '2021-01-06', 'P', 1, 'PM', 2),
(4, 1820100, 'Abdul Kafi', 'Bangkalan', 'Sumenep', '2009-12-01', 'L', 1, 'MM', 2),
(6, 821730, 'Abi', 'Jakarta', 'Sumenep', '2001-01-04', 'L', 1, 'MM', 3),
(10, 127918, 'imam', 'Sumenep, Bluto', 'Sumenep', '2000-02-02', 'L', 1, 'RPL', 3),
(13, 1804110032, 'Ivan Masyudi', 'Sumenep, Bluto', 'Sumenep', '2021-01-19', 'L', 1, 'RPL', 3),
(15, 345622, 'Bagas', 'Sumenep, Bluto', 'Sumenep', '2014-01-14', 'L', 1, 'TKJ', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tblagama`
--
ALTER TABLE `tblagama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indeks untuk tabel `tblgelombang`
--
ALTER TABLE `tblgelombang`
  ADD PRIMARY KEY (`id_gelombang`);

--
-- Indeks untuk tabel `tblguru`
--
ALTER TABLE `tblguru`
  ADD PRIMARY KEY (`id_guru`),
  ADD KEY `fk_jk_guru` (`id_jk`),
  ADD KEY `fk_agama_guru` (`id_agama`);

--
-- Indeks untuk tabel `tbljk`
--
ALTER TABLE `tbljk`
  ADD PRIMARY KEY (`id_jk`);

--
-- Indeks untuk tabel `tbljurusan`
--
ALTER TABLE `tbljurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `tblkelas`
--
ALTER TABLE `tblkelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `tbllogin`
--
ALTER TABLE `tbllogin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tblnilai`
--
ALTER TABLE `tblnilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `fk_nilai_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `tblpembimbing`
--
ALTER TABLE `tblpembimbing`
  ADD PRIMARY KEY (`id_pembimbing`),
  ADD KEY `fk_pembimbing` (`id_guru`);

--
-- Indeks untuk tabel `tblpenempatan`
--
ALTER TABLE `tblpenempatan`
  ADD PRIMARY KEY (`id_penempatan`),
  ADD KEY `fk_gelombang` (`id_gelombang`),
  ADD KEY `fk_penbimbing_tempat` (`id_pembimbing`),
  ADD KEY `fk_perusahaan` (`id_perusahaan`),
  ADD KEY `fk_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `tblperusahaan`
--
ALTER TABLE `tblperusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indeks untuk tabel `tblsiswa`
--
ALTER TABLE `tblsiswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `fk_jk_siswa` (`id_jk`),
  ADD KEY `fk_agama_siswa` (`id_agama`),
  ADD KEY `fk_kelas` (`id_kelas`),
  ADD KEY `fk_jurusan` (`id_jurusan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tblagama`
--
ALTER TABLE `tblagama`
  MODIFY `id_agama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tblgelombang`
--
ALTER TABLE `tblgelombang`
  MODIFY `id_gelombang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tblguru`
--
ALTER TABLE `tblguru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tblkelas`
--
ALTER TABLE `tblkelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbllogin`
--
ALTER TABLE `tbllogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tblnilai`
--
ALTER TABLE `tblnilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tblpembimbing`
--
ALTER TABLE `tblpembimbing`
  MODIFY `id_pembimbing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tblpenempatan`
--
ALTER TABLE `tblpenempatan`
  MODIFY `id_penempatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tblperusahaan`
--
ALTER TABLE `tblperusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tblsiswa`
--
ALTER TABLE `tblsiswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tblguru`
--
ALTER TABLE `tblguru`
  ADD CONSTRAINT `fk_agama_guru` FOREIGN KEY (`id_agama`) REFERENCES `tblagama` (`id_agama`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jk_guru` FOREIGN KEY (`id_jk`) REFERENCES `tbljk` (`id_jk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tblnilai`
--
ALTER TABLE `tblnilai`
  ADD CONSTRAINT `fk_nilai_siswa` FOREIGN KEY (`id_siswa`) REFERENCES `tblsiswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tblpembimbing`
--
ALTER TABLE `tblpembimbing`
  ADD CONSTRAINT `fk_pembimbing` FOREIGN KEY (`id_guru`) REFERENCES `tblguru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tblpenempatan`
--
ALTER TABLE `tblpenempatan`
  ADD CONSTRAINT `fk_gelombang` FOREIGN KEY (`id_gelombang`) REFERENCES `tblgelombang` (`id_gelombang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_penbimbing_tempat` FOREIGN KEY (`id_pembimbing`) REFERENCES `tblpembimbing` (`id_pembimbing`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_perusahaan` FOREIGN KEY (`id_perusahaan`) REFERENCES `tblperusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_siswa` FOREIGN KEY (`id_siswa`) REFERENCES `tblsiswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tblsiswa`
--
ALTER TABLE `tblsiswa`
  ADD CONSTRAINT `fk_agama_siswa` FOREIGN KEY (`id_agama`) REFERENCES `tblagama` (`id_agama`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jk_siswa` FOREIGN KEY (`id_jk`) REFERENCES `tbljk` (`id_jk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `tbljurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `tblkelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
