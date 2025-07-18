import { VerticalTimeline, VerticalTimelineElement } from 'react-vertical-timeline-component';
import 'react-vertical-timeline-component/style.min.css';

import { RiNextjsFill } from "react-icons/ri";
import { FaVuejs } from "react-icons/fa";
import { FaReact } from "react-icons/fa";
import { FaLaravel } from "react-icons/fa";

import Navbar from '../components/Navbar'
import Footer from '../components/Footer'
import ScrollToTop from '../components/ScrollToTop'



function Experience() {
    return (
        <>
            <Navbar />
            <div className="wrapper">
                <h1>Work Experience</h1>
                <VerticalTimeline>
                    <VerticalTimelineElement
                        className="vertical-timeline-element--work"
                        date="2022 - 2023"
                        iconStyle={{ background: '#222831', color: '#fff' }}
                        icon={<RiNextjsFill />}
                    >
                        <h3 className="vertical-timeline-element-title">PKL PT TELKOM AKSES BANDUNG</h3>
                        <h4 className="vertical-timeline-element-subtitle">PT Telkom Akses Witel Bandung bagian survei
Drawing Inventory selama 3 bulan, saya melakukan
pekerjaan meluruskan suatu ODP (Optical
Distribution Point) dan ODC (Optical Distribution
Cabinet) yang ada di PRAbac agar sesuai dengan
yang ada di lapangan dan memastikan agar
pekerjaan mengejar target sesuai yang di harapkan</h4>
                        
                    </VerticalTimelineElement>
                    <VerticalTimelineElement
                        className="vertical-timeline-element--work"
                        date="2023 - 2024"
                        iconStyle={{ background: '#222831', color: '#fff' }}
                        icon={<FaVuejs />}
                    >
                        <h3 className="vertical-timeline-element-title">Presensi Berbasis QR Code</h3>
                        <h4 className="vertical-timeline-element-subtitle"> Untuk posisi ini saya terlibat sebagai ketua
pelaksana dan juga pembawa acara (MC) selama
sesi acara berlangsung hingga berakhir di SMK KP
2 Margahayu, Kami membuat sebuah Apk berbasis
web yaitu Sistem Presensi QR Code untuk Siswa &
Guru, Dengan adanya sistem ini bertujuan untuk
memudahkan Siswa & Guru lebih mudah
mengakses kehadiran</h4>
                       
                    </VerticalTimelineElement>
                    <VerticalTimelineElement
                        className="vertical-timeline-element--work"
                        date="2024 - Now"
                        iconStyle={{ background: '#222831', color: '#fff' }}
                        icon={<FaReact />}
                    >
                        <h3 className="vertical-timeline-element-title">Komisi Pemilihan Umum</h3>
                        <h4 className="vertical-timeline-element-subtitle">Anggota Kpps & Sirekap, untuk posisi ini saya terlibat dalam penulisan surat
suara dan sistem sirekap serta mengawasi dan
memastikan keakuratan dan keamanan data.
Setelah itu saya membuat laporan rekapitulasi hasil
pemungutan kepada PPK (Panitia Pemilihan
Kecamatan)</h4>
                    </VerticalTimelineElement>
                </VerticalTimeline>
            </div>
            <Footer />
            <ScrollToTop />
        </>
    )
}

export default Experience