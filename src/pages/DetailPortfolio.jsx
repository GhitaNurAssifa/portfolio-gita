import { useParams, Navigate, useNavigate } from "react-router-dom";
import { portfolioList } from "../data/DataPortfolio";
import Navbar from "../components/Navbar";
import Footer from "../components/Footer";
import ScrollToTop from "../components/ScrollToTop";
import "../styles/DetailPortfolio.css";

function DetailPortfolio() {
  const { id } = useParams();
  const navigate = useNavigate();
  const data = portfolioList.find((item) => item.id === id);

  if (!data) {
    return <Navigate to="/page-not-found" />;
  }

  return (
    <>
      <Navbar />
      <section id="detail-portfolio">
        <div className="wrapper">
          <h1 className="title">{data.title}</h1>
          <img src={data.image} alt={data.title} className="portfolio-image" />
          <p className="description">{data.description}</p>
          <button className="btn-kembali" onClick={() => navigate(-1)}>
            ← Kembali
          </button>
        </div>
      </section>
      <Footer />
      <ScrollToTop />
    </>
  );
}

export default DetailPortfolio;
