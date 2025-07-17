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
                <h3>About Me</h3>
                <p>Saya seorang mahasiswi aktif semester 6 dengan
program studi Teknik Informatika di STMIK MARDIRA INDONESIA yang berada di Bandung , Saya aktif dalam
mengembangkan diri pada bidang informatika dan
Desain Grafis. Memiliki kemampuan Interpersonal
yang baik seperti komunikasi , disiplin,kerja sama
tim dan juga berani untuk mencoba tantangan
baru serta mudah beradaptasi dengan lingkungan
pekerjaan
</p>
                <h4>Bahasa Pemrograman</h4>
                <div className="skills">
                    <FaPhp />
                    <FaBootstrap /><FaLaravel /><FaGit />

                </div>
            </div>
        </section>
    )
}

export default About