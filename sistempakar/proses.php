<?php
include 'koneksi.php';

$hari    = mysqli_real_escape_string($koneksi, $_POST['hari']);
$tanggal = (int)$_POST['tanggal'];
$bulan   = mysqli_real_escape_string($koneksi, $_POST['bulan']);
$tahun   = (int)$_POST['tahun'];

if (empty($hari) || empty($tanggal) || empty($bulan) || empty($tahun)) {
    die("Data tidak lengkap.");
}

// Karakter berdasarkan hari
switch($hari) {
    case 'Senin':
        $kar_hari = 'Orang yang lahir di hari Senin dikenal bijaksana, penyabar, dan penuh tanggung jawab. Sifatnya lembut, suka membantu orang lain, dan memiliki empati tinggi. Dalam hal percintaan, mereka cenderung setia dan mencari hubungan yang stabil.';
        break;
    case 'Selasa':
        $kar_hari = 'Kamu yang lahir hari Selasa dikenal sebagai pribadi pemberani, tegas, dan suka tantangan. Biasanya cocok jadi pemimpin atau profesional di bidang militer, teknik, atau olahraga. Dalam cinta, kamu penuh semangat, tapi kadang terlalu dominan.';
        break;
    case 'Rabu':
        $kar_hari = 'Ceria, ramah, dan mudah bergaul adalah ciri khas kelahiran hari Rabu. Memiliki kecerdasan emosional yang tinggi dan cocok bekerja di bidang komunikasi, media, atau pemasaran. Dalam cinta, mereka mudah jatuh cinta dan suka perhatian.';
        break;
    case 'Kamis':
        $kar_hari = 'Lahir hari Kamis menandakan pribadi yang cerdas, pendiam, dan suka berpikir mendalam. Cocok jadi peneliti, dosen, atau pekerja intelektual lainnya. Dalam percintaan, mereka misterius namun sangat setia ketika sudah menemukan pasangan cocok.';
        break;
    case 'Jumat':
        $kar_hari = 'Orang kelahiran Jumat dikenal romantis, religius, dan peduli lingkungan sekitar. Cocok menjadi guru, konselor, atau aktivis sosial. Dalam cinta, mereka penuh kasih sayang dan mendambakan kedamaian dalam hubungan.';
        break;
    case 'Sabtu':
        $kar_hari = 'Mandiri, suka kebebasan, dan penuh semangat hidup. Orang yang lahir hari Sabtu cocok jadi pengusaha, traveler, atau seniman. Dalam cinta, mereka butuh pasangan yang menghargai ruang pribadi.';
        break;
    case 'Minggu':
        $kar_hari = 'Percaya diri, cerah, dan optimis. Mereka mudah memotivasi orang lain dan cocok di bidang seni, hiburan, atau kepemimpinan. Dalam cinta, mereka ekspresif dan suka menunjukkan perasaannya.';
        break;
    default:
        $kar_hari = 'Karakter hari tidak dikenali.';
}

// Karakter berdasarkan bulan
switch($bulan) {
    case 'Januari':
        $kar_bulan = 'Kelahiran Januari menandakan orang yang pekerja keras, perfeksionis, dan realistis. Pekerjaan yang cocok seperti manajer, akuntan, atau ahli strategi. Dalam hubungan, mereka butuh pasangan yang serius dan punya tujuan hidup.';
        break;
    case 'Februari':
        $kar_bulan = 'Kreatif, romantis, dan sensitif. Orang Februari suka menyendiri tapi punya ide luar biasa. Cocok di bidang seni, penulis, atau psikolog. Dalam cinta, mereka penuh imajinasi namun sulit ditebak.';
        break;
    case 'Maret':
        $kar_bulan = 'Artistik, penyayang, dan sangat intuitif. Mereka cocok menjadi pelukis, musisi, atau konselor. Dalam percintaan, mereka tulus dan rela berkorban demi kebahagiaan pasangannya.';
        break;
    case 'April':
        $kar_bulan = 'Enerjik, suka tantangan, dan penuh gairah hidup. Cocok menjadi atlet, pengusaha, atau pemimpin tim. Dalam cinta, mereka spontan dan penuh kejutan.';
        break;
    case 'Mei':
        $kar_bulan = 'Stabil, memiliki prinsip kuat, dan praktis. Cocok bekerja di bidang keuangan, hukum, atau administrasi. Dalam hubungan, mereka setia dan suka rutinitas yang nyaman.';
        break;
    case 'Juni':
        $kar_bulan = 'Pintar berbicara, analitis, dan ekspresif. Cocok menjadi presenter, guru, atau penulis. Dalam cinta, mereka romantis dan sangat perhatian.';
        break;
    case 'Juli':
        $kar_bulan = 'Penuh kasih, penyayang keluarga, dan suka rumah. Cocok di bidang kuliner, pendidikan anak, atau desain interior. Dalam cinta, mereka sangat setia dan penyayang.';
        break;
    case 'Agustus':
        $kar_bulan = 'Pemimpin alami, percaya diri, dan suka tampil. Cocok menjadi tokoh publik, manajer, atau artis. Dalam percintaan, mereka dominan tapi penuh perhatian.';
        break;
    case 'September':
        $kar_bulan = 'Perfeksionis, logis, dan teliti. Cocok di bidang kesehatan, analisis data, atau akuntansi. Dalam cinta, mereka butuh pasangan yang konsisten dan jujur.';
        break;
    case 'Oktober':
        $kar_bulan = 'Adil, diplomatis, dan romantis. Cocok jadi pengacara, HRD, atau mediator. Dalam cinta, mereka sangat loyal dan tidak suka konflik.';
        break;
    case 'November':
        $kar_bulan = 'Penuh misteri, emosional, dan kuat tekad. Cocok menjadi detektif, peneliti, atau pengusaha. Dalam cinta, mereka intens dan serius.';
        break;
    case 'Desember':
        $kar_bulan = 'Optimis, sosial, dan dermawan. Cocok menjadi pengajar, public speaker, atau aktivis. Dalam cinta, mereka terbuka dan suka berbagi kebahagiaan.';
        break;
    default:
        $kar_bulan = 'Karakter bulan tidak dikenali.';
}

// Karakter berdasarkan tahun
if ($tahun >= 1990 && $tahun <= 1999) {
    $kar_tahun = "Kamu termasuk generasi milenial awal, dikenal adaptif, terbuka terhadap perubahan, dan berjiwa mandiri. Pekerjaan fleksibel dan kreatif cocok untukmu. Dalam cinta, kamu menghargai komunikasi yang terbuka.";
} elseif ($tahun >= 2000 && $tahun <= 2009) {
    $kar_tahun = "Generasi digital native, cepat belajar, penuh semangat, dan inovatif. Cocok bekerja di dunia startup, konten kreator, atau teknologi. Dalam hubungan, kamu suka mencoba hal baru bersama pasangan.";
} elseif ($tahun >= 2010 && $tahun <= 2020) {
    $kar_tahun = "Kamu termasuk generasi Z muda, sangat akrab dengan teknologi, kreatif, dan mandiri. Dalam cinta, kamu cenderung eksploratif dan mengutamakan kenyamanan.";
} else {
    $kar_tahun = "Kamu memiliki karakter unik dan khas di zamannya. Sifatmu dipengaruhi oleh banyak hal termasuk lingkungan sosial dan budaya. Dalam percintaan, kamu fleksibel dan mudah beradaptasi.";
}

// Gabungkan hasil ramalan
$hasil = "$kar_hari $kar_bulan $kar_tahun";

// Simpan ke database
$query = "INSERT INTO riwayat_ramalan (hari, tanggal, bulan, tahun, hasil) 
          VALUES ('$hari', $tanggal, '$bulan', $tahun, '$hasil')";

if (mysqli_query($koneksi, $query)) {
    header("Location: result.php?hasil=" . urlencode($hasil));
    exit();
} else {
    echo "Gagal menyimpan ramalan: " . mysqli_error($koneksi);
}
?>
