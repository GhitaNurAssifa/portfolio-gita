import '../styles/About.css'

import { FaPhp, FaHtml5, FaReact, FaBootstrap, FaRust, FaLaravel, FaGit } from "react-icons/fa";
import { SiJavascript } from "react-icons/si";
import { MdOutlineCss } from "react-icons/md";
import { FaGolang } from "react-icons/fa6";
import { RiTailwindCssFill } from "react-icons/ri";
import { DiCodeigniter } from "react-icons/di";


function About() {
    return (
        <section id="about">
            <div className='wrapper'>
                <h3>Tentang Saya</h3>
                <p>Saya adalah seorang yang memiliki ketertarikan tinggi pada bidang desain grafis dan administrasi perkantoran. Terampil dalam menggunakan berbagai tools desain grafis dan mahir dalam Microsoft Office (Word, Excel, PowerPoint). Saya percaya bahwa kreativitas dan ketelitian adalah kunci untuk menciptakan hasil kerja yang berkualitas.</p>
                <h4>Bahasa Pemrograman</h4>
                <div className="skills">
                    <FaPhp /><FaHtml5 /><SiJavascript /><FaReact /><MdOutlineCss />
                    <FaBootstrap /><FaLaravel /><FaGit />

                </div>
            </div>
        </section>
    )
}

export default About