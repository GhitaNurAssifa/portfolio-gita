import React, { useState } from 'react';
import { useNavigate } from 'react-router-dom'; // ✅ Import navigate
import 'bootstrap/dist/css/bootstrap.min.css';

const SistemPakar = () => {
  const navigate = useNavigate(); // ✅ Inisialisasi navigate

  const [input, setInput] = useState({
    hari: '',
    tanggal: '',
    bulan: '',
    tahun: '',
  });

  const [hasil, setHasil] = useState(null);

  const handleChange = (e) => {
    setInput({
      ...input,
      [e.target.name]: e.target.value,
    });
  };

  const ramalKepribadian = (e) => {
    e.preventDefault();
    const { hari, tanggal, bulan, tahun } = input;

    if (!hari || !tanggal || !bulan || !tahun) {
      setHasil({ error: '⚠️ Mohon lengkapi semua kolom terlebih dahulu!' });
      return;
    }

    const hariKepribadian = {
      Senin: 'Pemikir yang mendalam, tenang, bijaksana, dan suka membantu orang lain.',
      Selasa: 'Pekerja keras, mandiri, dan penuh ambisi.',
      Rabu: 'Ramah, komunikatif, penuh ide, dan menyenangkan.',
      Kamis: 'Bijak dan penuh pertimbangan, berjiwa pemimpin.',
      Jumat: 'Sangat sosial, hangat, mudah bergaul dan penuh cinta.',
      Sabtu: 'Penuh energi dan spontanitas, suka tantangan.',
      Minggu: 'Kreatif, percaya diri, dan senang menjadi pusat perhatian.',
    };

    const bulanKepribadian = {
      Januari: 'Serius, terorganisir, pekerja keras.',
      Februari: 'Kreatif, romantis, penuh ide.',
      Maret: 'Lembut, penyayang, dan intuitif.',
      April: 'Berani, enerjik, suka tantangan.',
      Mei: 'Praktis, setia, keras kepala.',
      Juni: 'Ceria, komunikatif, cerdas.',
      Juli: 'Penuh emosi dan imajinasi.',
      Agustus: 'Pemimpin alami, percaya diri.',
      September: 'Perfeksionis, teliti, dan kritis.',
      Oktober: 'Mencintai keindahan dan harmoni.',
      November: 'Bersemangat, penuh rahasia.',
      Desember: 'Optimis, suka petualangan.',
    };

    const zodiak = (tgl, bln) => {
      tgl = parseInt(tgl);
      const z = [
        ['Capricorn', 19], ['Aquarius', 18], ['Pisces', 20], ['Aries', 19],
        ['Taurus', 20], ['Gemini', 20], ['Cancer', 22], ['Leo', 22],
        ['Virgo', 22], ['Libra', 22], ['Scorpio', 21], ['Sagitarius', 21],
        ['Capricorn', 31]
      ];
      const index = [
        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
      ].indexOf(bln);
      return tgl <= z[index][1] ? z[index][0] : z[index + 1][0];
    };

    const tahunKepribadian = (tahun) => {
      const y = parseInt(tahun);
      return y % 2 === 0
        ? 'Tahun genap → logis, rasional, dan analitis.'
        : 'Tahun ganjil → intuitif, kreatif, dan mengandalkan perasaan.';
    };

    const result = {
      hari: hariKepribadian[hari],
      bulan: bulanKepribadian[bulan],
      zodiak: zodiak(tanggal, bulan),
      tahun: tahunKepribadian(tahun),
    };

    setHasil(result);
  };

  return (
    <div className="container my-5">
      <div className="card shadow p-4">
        <h2 className="text-center mb-4 text-primary">🔮 Sistem Pakar Kepribadian Berdasarkan Tanggal Lahir</h2>
        <form onSubmit={ramalKepribadian}>
          <div className="mb-3">
            <label className="form-label">Hari Lahir</label>
            <select className="form-select" name="hari" value={input.hari} onChange={handleChange}>
              <option value="">-- Pilih Hari --</option>
              <option>Senin</option>
              <option>Selasa</option>
              <option>Rabu</option>
              <option>Kamis</option>
              <option>Jumat</option>
              <option>Sabtu</option>
              <option>Minggu</option>
            </select>
          </div>
          <div className="mb-3">
            <label className="form-label">Tanggal</label>
            <input
              type="number"
              name="tanggal"
              className="form-control"
              value={input.tanggal}
              onChange={handleChange}
              placeholder="Contoh: 15"
              min="1"
              max="31"
            />
          </div>
          <div className="mb-3">
            <label className="form-label">Bulan</label>
            <select className="form-select" name="bulan" value={input.bulan} onChange={handleChange}>
              <option value="">-- Pilih Bulan --</option>
              <option>Januari</option>
              <option>Februari</option>
              <option>Maret</option>
              <option>April</option>
              <option>Mei</option>
              <option>Juni</option>
              <option>Juli</option>
              <option>Agustus</option>
              <option>September</option>
              <option>Oktober</option>
              <option>November</option>
              <option>Desember</option>
            </select>
          </div>
          <div className="mb-4">
            <label className="form-label">Tahun</label>
            <input
              type="number"
              name="tahun"
              className="form-control"
              value={input.tahun}
              onChange={handleChange}
              placeholder="Contoh: 2004"
            />
          </div>
          <button type="submit" className="btn btn-primary w-100">🔍 Lihat Ramalan Kepribadian</button>
        </form>

        {hasil && (
          <div className="alert alert-info mt-4">
            {hasil.error ? (
              <div>{hasil.error}</div>
            ) : (
              <>
                <h5 className="fw-bold">✨ Hasil Ramalan:</h5>
                <p><strong>Hari Lahir:</strong> {input.hari}</p>
                <p>{hasil.hari}</p>
                <p><strong>Bulan Lahir:</strong> {input.bulan}</p>
                <p>{hasil.bulan}</p>
                <p><strong>Zodiak:</strong> {hasil.zodiak}</p>
                <p><strong>Tahun Lahir:</strong> {input.tahun}</p>
                <p>{hasil.tahun}</p>
              </>
            )}
          </div>
        )}

        {/* ✅ Tombol kembali ke awal */}
        <button
          className="btn btn-secondary mt-4 w-100"
          onClick={() => navigate('/')}
        >
          🔙 Kembali ke Awal
        </button>
      </div>
    </div>
  );
};

export default SistemPakar;
