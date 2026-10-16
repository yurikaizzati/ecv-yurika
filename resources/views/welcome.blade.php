
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yurika Alfa Izzati | Portfolio</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f7f9fc;
            color: #17243a;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 22px 9%;
            background: white;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #17243a;
        }

        nav a {
            text-decoration: none;
            color: #34445c;
            margin-left: 22px;
            font-size: 14px;
        }

        .hero {
            min-height: 82vh;
            display: flex;
            align-items: center;
            padding: 70px 12%;
            background: #17243a;
            color: white;
        }

        
        .hero-image {
            margin-left: auto;
            flex-shrink: 0;
        }

        .hero-image img {
            width: 250px;
         height: 250px;
         object-fit: cover;
         border-radius: 50%;
         border: 4px solid #91bbff;
        }


        .hero-content {
            max-width: 680px;
        }

        .tag {
            color: #91bfff;
            letter-spacing: 3px;
            font-size: 13px;
            margin-bottom: 22px;
        }

        h1 {
            font-size: clamp(38px, 6vw, 64px);
            line-height: 1.15;
            margin-bottom: 18px;
        }

        h1 span {
            color: #91bfff;
        }

        .hero p {
            color: #d0d9e8;
            font-size: 17px;
            line-height: 1.8;
            margin-bottom: 28px;
        }

        .button {
            display: inline-block;
            background: #91bfff;
            color: #17243a;
            padding: 13px 22px;
            border-radius: 7px;
            text-decoration: none;
            font-weight: bold;
        }

        
.download-button {
    margin-left: 10px;
    background: transparent;
    color: #91bfff;
    border: 1px solid #91bfff;
}

.download-button:hover {
    background: #91bfff;
    color: #17243a;
}


        section {
            padding: 75px 12%;
        }

        h2 {
            font-size: 30px;
            margin-bottom: 18px;
        }

        .about p {
            max-width: 750px;
            color: #596579;
            line-height: 1.9;
        }

        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 22px;
        }

        .skills span {
            background: white;
            border: 1px solid #dce4ef;
            padding: 12px 17px;
            border-radius: 8px;
        }

        footer {
            text-align: center;
            padding: 25px;
            background: #17243a;
            color: #d0d9e8;
            font-size: 14px;
        }

        @media (max-width: 650px) {
            nav {
                padding: 20px 6%;
                flex-wrap: wrap;
                gap: 16px;
            }

            nav a {
                margin-left: 0;
                margin-right: 12px;
            }

            .hero {
                padding: 65px 7%;
            }

            section {
                padding: 55px 7%;
            }
        }

        
/* Kartu pada bagian Tentang Saya */
.about-cards {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 35px;
}

.about-card {
    background: #ffffff;
    padding: 25px 20px;
    border-radius: 15px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 5px 18px rgba(23, 36, 58, 0.08);
    text-align: center;
    transition: transform 0.3s ease;
}

.about-card:hover {
    transform: translateY(-5px);
}

.card-icon {
    font-size: 32px;
    margin-bottom: 12px;
}

.about-card h3 {
    color: #17243a;
    margin-bottom: 10px;
}

.about-card p {
    color: #315da8;
    font-weight: bold;
    margin-bottom: 8px;
}

.about-card span {
    color: #64748b;
    font-size: 14px;
    line-height: 1.6;
}

/* Tampilan untuk layar HP */
@media (max-width: 768px) {
    .about-cards {
        grid-template-columns: 1fr;
    }
}


.contact {
    padding: 70px 12%;
    text-align: left;
    background: #f4f6fa;
}

.contact h2 {
    color: #17243a;
    font-size: 32px;
    margin-bottom: 12px;
}

.contact-description {
    color: #64748b;
    margin-bottom: 25px;
}

.contact-icons {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 22px;
}


.contact-icons {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    gap: 14px;
    width: 100%;
}


.contact-icons a:hover {
    color: #ffffff;
    background: #315da8;
    transform: translateY(-4px);
}

.contact-icons svg {
    width: 25px;
    height: 25px;
}


/* PROJECTS */
.project {
    padding: 80px 12%;
    background: #ffffff;
    text-align: center;
}

.project h2 {
    color: #17243a;
    font-size: 32px;
    margin-bottom: 12px;
}

.projects-description {
    color: #64748b;
    max-width: 650px;
    margin: 0 auto 35px;
    line-height: 1.7;
}

.project-cards {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 22px;
    text-align: left;
}

.project-card {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 5px 18px rgba(23, 36, 58, 0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.project-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(23, 36, 58, 0.13);
}

.project-image {
    height: 145px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #e8efff;
    font-size: 48px;
}

.project-content {
    padding: 22px;
}

.project-content h3 {
    color: #17243a;
    font-size: 18px;
    line-height: 1.5;
    margin: 0 0 12px;
}

.project-content p {
    color: #64748b;
    font-size: 14px;
    line-height: 1.7;
    margin: 0 0 18px;
}

.project-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 7px;
}

.project-tags span {
    background: #e8efff;
    color: #315da8;
    padding: 6px 10px;
    border-radius: 20px;
    font-size: 12px;
}

/* RESPONSIVE */
@media (max-width: 900px) {
    .project-cards {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}

@media (max-width: 600px) {
    .projects {
        padding: 60px 7%;
    }

    .projects h2 {
        font-size: 28px;
    }

    .project-cards {
        grid-template-columns: 1fr;
    }
}


/* CERTIFICATIONS */
.certifications {
    padding: 80px 12%;
    background: #f4f6fa;
    text-align: center;
}

.certifications h2 {
    color: #17243a;
    font-size: 32px;
    margin-bottom: 12px;
}

.certifications-description {
    color: #64748b;
    max-width: 650px;
    margin: 0 auto 35px;
    line-height: 1.7;
}

.certificate-cards {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 22px;
    text-align: left;
}

.certificate-card {
    display: flex;
    align-items: flex-start;
    gap: 18px;
    padding: 24px;
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    box-shadow: 0 5px 18px rgba(23, 36, 58, 0.07);
    transition: transform 0.3s ease;
}

.certificate-card:hover {
    transform: translateY(-5px);
}

.certificate-icon {
    flex-shrink: 0;
    width: 52px;
    height: 52px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #e8efff;
    border-radius: 12px;
    font-size: 27px;
}

.certificate-content h3 {
    color: #17243a;
    font-size: 18px;
    margin: 0 0 10px;
}

.certificate-content p {
    color: #64748b;
    font-size: 14px;
    line-height: 1.7;
    margin: 0 0 14px;
}

.certificate-label {
    display: inline-block;
    padding: 6px 11px;
    border-radius: 20px;
    background: #e8efff;
    color: #315da8;
    font-size: 12px;
}

@media (max-width: 700px) {
    .certifications {
        padding: 60px 7%;
    }

    .certificate-cards {
        grid-template-columns: 1fr;
    }
}

    </style>
</head>

<body>

    <nav>
        <div class="logo"></div>

        <div>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#project">Project</a>
             <a href="#certifications">Certifications</a>

            <a href="#contact">Contact</a>
        </div>
    </nav>

    <header class="hero" id="home">
    <div class="hero-content">
    
        <h1>Hi, I'm <span>Yurika Alfa Izzati</span></h1>
        
        <h2 class="hero-tagline">
           Exploring Ideas, Understanding Systems, Creating Digital Solutions.
        </h2>


        <p class="hero-description">
            Tertarik memahami permasalahan, menganalisis kebutuhan,
            dan mengeksplorasi solusi digital yang efektif serta terstruktur.
        </p>

        <a href="#about" class="button">Kenali Saya</a>
        <a href="{{ asset('files/CV_Yurika Alfa Izzati.pdf') }}"
   class="button download-button"
   download>
    Download CV
</a>
    </div>

    <div class="hero-image">
        <img src="/images/yurika.jpg.jpeg" alt="Foto Yurika">
    </div>
</header>


    <section class="about" id="about">
        <h2>Tentang Saya</h2>

        <p>
            Saya merupakan mahasiswa S1 Sistem Informasi di Universitas 
            Bina Sarana Informatika yang memiliki ketertarikan pada Analisis
            sistem dan desain. Memiliki pemahaman dalam merancang kebutuhan 
            pengguna dengan solusi teknologi melalui pembuatan dokumentasi 
            sistem dan desain antarmuka (UI/UX). Berpengalaman berkolaborasi 
            dalam tugas kelompok perkuliahan untuk menganalisis kebutuhan 
            serta merancang pengembangan website dan aplikasi.
        </p>

        
<div class="about-cards">
    <div class="about-card">
        <div class="card-icon">🎓</div>
        <h3>Pendidikan</h3>
        <p>S1 Sistem Informasi</p>
        <span>Universitas Bina Sarana Informatika</span>
    </div>

    <div class="about-card">
        <div class="card-icon">💡</div>
        <h3>Keahlian</h3>
        <p>Analisis Sistem</p>
        <span>Analisis Proses Bisnis dan Microsoft Office</span>
    </div>

    <div class="about-card">
        <div class="card-icon">✨</div>
        <h3>Pengembangan Diri</h3>
        <p>Terus Belajar</p>
        <span>Meningkatkan kemampuan dan pengalaman di bidang teknologi informasi</span>
    </div>
</div>

        
    </section>

    <section id="skills">
        <h2>Keahlian</h2>

        <div class="skills">
            <span>Analisis Sistem</span>
            <span>Database SQL</span>
            <span>Figma</span>
             <span>HTML & CSS</span>
             <span>PHP & Laravel</span>
            <span>Microsoft Word</span>
            <span>Microsoft Excel</span>
        </div>
    </section>

<section class="project" id="project">
    <h2>Project</h2>

    <p class="projects-description">
        Berikut beberapa proyek yang pernah saya kerjakan
        sebagai bagian dari pengembangan kemampuan di bidang teknologi informasi.
    </p>

    <div class="project-cards">

        <div class="project-card">
            <div class="project-image">📱</div>
            <div class="project-content">
                <h3>Aplikasi Mobile Penentuan Ranking Kelulusan TPQ Tunas Muslim</h3>
                <p>
                    Aplikasi untuk membantu proses penilaian dan penentuan
                    ranking kelulusan santri menggunakan metode AHP dan
                    Weighted Scoring.
                </p>
                <div class="project-tags">
                    <span>Mobile App</span>
                    <span>AHP</span>
                    <span>Weighted Scoring</span>
                </div>
            </div>
        </div>

        <div class="project-card">
            <div class="project-image">💻</div>
            <div class="project-content">
                <h3>Sistem Informasi Penggajian Karyawan Berbasis Web</h3>
                <p>
                    Sistem informasi berbasis web untuk mendukung pengelolaan
                    data karyawan dan proses penggajian menggunakan PHP dan MySQL.
                </p>
                <div class="project-tags">
                    <span>PHP</span>
                    <span>MySQL</span>
                    <span>Web Development</span>
                </div>
            </div>
        </div>

        <div class="project-card">
            <div class="project-image">🎨</div>
            <div class="project-content">
                <h3>UI/UX Design</h3>
                <p>
                    Perancangan antarmuka dan pengalaman pengguna menggunakan
                    Figma dengan memperhatikan tata letak dan kemudahan navigasi.
                </p>
                <div class="project-tags">
                    <span>Figma</span>
                    <span>UI Design</span>
                    <span>UX Design</span>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="certifications" id="certifications">
    <h2>Certifications</h2>

    <p class="certifications-description">
    </p>

    <div class="certificate-cards">

        <div class="certificate-card">
            <div class="certificate-icon">🗄️</div>
            <div class="certificate-content">
                <h3>Database Administrator</h3>
                <p>
                    Pengelolaan basis data untuk menyimpan, dan mengelola data yang sesuai dengan
                    kebutuhan sistem.
                </p>
                 <span class="certificate-label">LSP UBSI</span>
                <span class="certificate-label">BNSP</span>
            </div>
        </div>

        <div class="certificate-card">
            <div class="certificate-icon">💻</div>
            <div class="certificate-content">
                <h3>Analis Program</h3>
                <p>
                    Pengembangan website sistem informasi penggajian karyawan untuk membantu pengelolaan 
                    data karyawan dan proses perhitungan gaji secara terstruktur menggunakan PHP dan MySQL.
                </p>
                 <span class="certificate-label">LSP UBSI</span>
                <span class="certificate-label">BNSP</span>
            </div>
        </div>

    </div>
</section>

<section class="contact" id="contact">
    <h2>Contact</h2>

    <p class="contact-description">
        Silakan hubungi saya jika ada kebutuhan profesional.
    </p>

    <div class="contact-icons">
        <a href="https://wa.me/089638534219"
           target="_blank"
           aria-label="WhatsApp"
           title="WhatsApp">
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path fill="currentColor" d="M12.04 2a9.8 9.8 0 0 0-8.4 14.85L2.35 22l5.28-1.38A9.95 9.95 0 1 0 12.04 2Zm0 18.2a8.2 8.2 0 0 1-4.18-1.14l-.3-.18-3.13.82.84-3.05-.2-.32a8.2 8.2 0 1 1 6.97 3.87Zm4.5-6.14c-.25-.13-1.48-.73-1.7-.81-.23-.08-.4-.13-.56.13-.17.25-.64.81-.78.98-.15.17-.29.19-.54.06-.25-.13-1.06-.39-2.02-1.24-.75-.66-1.25-1.48-1.4-1.73-.15-.25-.02-.39.11-.52.11-.11.25-.29.38-.44.13-.15.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.36-.77-1.86-.2-.49-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.09s.9 2.43 1.02 2.6c.13.17 1.77 2.7 4.29 3.79.6.26 1.07.41 1.44.52.61.19 1.16.16 1.6.1.49-.07 1.48-.6 1.69-1.19.21-.59.21-1.1.15-1.2-.06-.1-.23-.17-.48-.3Z"/>
            </svg>
        </a>

        <a href="https://mailto:yurikaizzati@gmail.com"
           aria-label="Email"
           title="Email">
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path fill="currentColor" d="M3 5h18a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2Zm9 8L3.5 7h17L12 13Zm-9 4h18V8.5l-9 6-9-6V17Z"/>
            </svg>
        </a>
    </div>
</section>

```



    <footer>
        © 2026 Yurika Alfa Izzati · E-CV
    </footer>

</body>
</html>
