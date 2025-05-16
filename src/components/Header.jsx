import profilePicture from '../assets/profile-picture.png'
import { FaInstagram } from "react-icons/fa";
import { FaTiktok } from "react-icons/fa";
//import { FaTwitter } from "react-icons/fa";//
//import { FaFacebookF } from "react-icons/fa";   //
import '../styles/Header.css'
function Header() {
    return (
        <header>
            <div className="header-jumbotron">
                <img src={profilePicture} />
                <h3>Ghita Nur Assifa</h3>
                <p>Desain Grafis</p>
                <div className='socialMedia'>
                    <a href="https://https://www.instagram.com/akughitaaaa?igsh=MTViOG5rcW9nYXZ2NQ==" target="_blank" rel="noopener noreferrer">
                    <FaInstagram />
                    </a>
                    <a href="https://tiktok.com/@akughitaa" target="_blank" rel="noopener noreferrer">
                    <FaTiktok />
                    </a>
                </div>
            </div>
        </header>
    )
}

export default Header