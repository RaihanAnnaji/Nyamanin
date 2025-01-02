<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Help and Support</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
        .accordion-button:not(.collapsed) {
            color: #fff;
            background-color: #6AAFB3;
        }
        
        .accordion-item {
            border: none;
        }
        
        h1 {
            font-weight: bold;
        }
        
        .faq-image {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto 20px;
        }
        
        .contact-section {
            margin-top: 30px;
            text-align: center;
        }
        
        .contact-section a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }
        
        .contact-section a:hover {
            text-decoration: underline;
        }
        
        .contact-icon {
            font-size: 2rem;
            margin-bottom: 10px;
        }
    </style>
</head>

<body class="horizontal-layout horizontal-menu 2-columns navbar-floating footer-static" data-open="hover" data-menu="horizontal-menu" data-col="2-columns" style="overflow-x: hidden;">

    @include('layouts.front.header')

    <main class="container py-5">
        <section class="text-dark mx-auto p-4" style="max-width: 700px;">
            <div class="card-body">
                <img src="https://raw.githubusercontent.com/MizAndhre/FAQ-accordion-card/2ff2a02d093554f14d0390a409e825669313a16e/images/illustration-woman-online-desktop.svg" alt="Ilustrasi FAQ" class="faq-image">
                <h2 class="card-title text-center my-5">Pertanyaan yang Sering Diajukan</h1>
                <div class="accordion" id="faqAccordion">
                    <!-- Pertanyaan 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Bagaimana cara mencari kos di Nyamanin?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show card bg-light rounded-4 rounded-top-0" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Masukkan kata kunci atau lokasi di kolom pencarian pada halaman Eksplor, lalu klik tombol cari.
                            </div>
                        </div>
                    </div>
                    <!-- Pertanyaan 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Apakah saya bisa memfilter hasil pencarian?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse card bg-light rounded-4 rounded-top-0" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Ya, gunakan filter seperti harga, fasilitas, atau lokasi yang tersedia di bagian pencarian.
                            </div>
                        </div>
                    </div>
                    <!-- Pertanyaan 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Apa yang harus saya lakukan jika ada pertanyaan lain?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse card bg-light rounded-4 rounded-top-0" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Hubungi layanan pelanggan melalui WhatsApp menggunakan nomor yang tersedia di halaman FAQ.
                            </div>
                        </div>
                    </div>
                    <!-- Pertanyaan 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Bagaimana cara memposting kos di Nyamanin?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse card bg-light rounded-4 rounded-top-0" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Daftar sebagai mitra, masuk ke akun Anda, lalu unggah detail kos melalui dashboard mitra.
                            </div>
                        </div>
                    </div>
                    <!-- Pertanyaan 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Apakah saya bisa mengedit data kos yang sudah diposting?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse card bg-light rounded-4 rounded-top-0" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Ya, masuk ke dashboard Anda, pilih kos yang ingin diedit, lalu perbarui informasi tersebut.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="contact-section text-center mt-4">
            <p>Masih ada pertanyaan? Hubungi kami melalui WhatsApp:</p>
            <a href="https://wa.me/6282182683627" target="_blank" class="btn btn-success">
                <i class="bi bi-whatsapp"></i> Hubungi Sekarang
            </a>
        </div>
    </main>

    {{-- Scripts --}}
    @include('layouts.front.scripts')
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>


</html>