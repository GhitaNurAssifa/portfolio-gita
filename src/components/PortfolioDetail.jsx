import { useParams, useNavigate } from 'react-router-dom';
import { portfolioList } from '../data/DataPortfolio';
import '../styles/PortfolioDetail.css'; // Tambahkan file CSS jika ingin gaya terpisah

function PortfolioDetail() {
    const { id } = useParams();
    const navigate = useNavigate();

    // Cari item berdasarkan ID dari URL
    const item = portfolioList.find((item) => item.id === id);

    if (!item) {
        return (
            <div style={{ textAlign: 'center', marginTop: '2rem' }}>
                <h2>Data tidak ditemukan</h2>
                <button onClick={() => navigate('/')} style={buttonStyle}>Kembali</button>
            </div>
        );
    }

    return (
        <div className="portfolio-detail" style={containerStyle}>
            <h2>{item.title}</h2>
            <img
                src={item.image}
                alt={item.title}
                style={imageStyle}
            />
            <p style={descriptionStyle}>{item.description}</p>

            <button onClick={() => navigate('/')} style={buttonStyle}>
                Kembali ke Portfolio
            </button>
        </div>
    );
}

// Inline style (bisa diganti ke CSS file)
const containerStyle = {
    padding: '2rem',
    textAlign: 'center',
};

const imageStyle = {
    width: '300px',
    borderRadius: '10px',
    marginBottom: '1rem',
};

const descriptionStyle = {
    fontSize: '1rem',
    maxWidth: '600px',
    margin: '0 auto',
};

const buttonStyle = {
    marginTop: '2rem',
    padding: '0.5rem 1rem',
    backgroundColor: '#007BFF',
    color: '#fff',
    border: 'none',
    borderRadius: '5px',
    cursor: 'pointer',
};

export default PortfolioDetail;
