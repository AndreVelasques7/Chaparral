<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Chaparral Snooker Bar - Sinuca Premium em Curitiba</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Chaparral Snooker Bar: ambiente premium para sinuca em Curitiba. Venha conhecer nossos torneios, cardápio e horários.">
    <meta name="keywords" content="sinuca, bar, Curitiba, torneios, cerveja, lazer">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- AOS Animation CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <!-- Hero Section -->
    <section class="section" id="inicio">
        <div class="container text-center hero-content" data-aos="fade-up">
            <img src="assets/imagens/logo.png" alt="Logo Chaparral Snooker Bar" 
                 class="img-fluid mb-4" 
                 style="max-width: 350px; transition: max-width 0.3s ease;"
                 loading="lazy">
            <hr>
            <h1>Chaparral Snooker Bar</h1>
            <p class="lead fs-5 mb-4">Experiência única em entretenimento e gastronomia</p>
            <a href="#destaques" class="btn btn-primary btn-lg px-5">
                Conheça Mais <i class="bi bi-arrow-down-circle ms-2"></i>
            </a>
        </div>
    </section>

    <!-- Destaques -->
    <section class="section" id="destaques">
        <div class="container">
            <h2 class="text-center mb-5 display-4 fw-bold" data-aos="fade-up">Destaques</h2>
            <div class="row g-4">
                <!-- CARD DO VÍDEO -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card card-highlight h-100">
                        <div class="video-container" style="height: 400px; overflow: hidden;">
                            <video controls preload="metadata" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
                                <source src="assets/imagens/video.mp4" type="video/mp4">
                                Seu navegador não suporta vídeos HTML5
                            </video>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><i class="bi bi-camera-reels me-2"></i>Nosso Ambiente</h5>
                            <p class="card-text">Venha conhecer nossa estrutura completa e ambiente acolhedor perfeito para jogar sinuca!</p>
                        </div>
                    </div>
                </div>

                <!-- CARD 1 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card card-highlight h-100">
                        <a href="https://restaurantguru.com.br/Chaparral-Snooker-Bar-Curitiba" class="text-decoration-none text-dark">
                            <div style="height: 400px; overflow: hidden;">
                                <img src="assets/imagens/background_3.jpg" alt="Avaliações do Chaparral Snooker Bar" 
                                     style="width: 100%; height: 100%; object-fit: cover;"
                                     loading="lazy">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-dice-5 me-2"></i>Avaliações</h5>
                                <p class="card-text">O menu deste pub & bar é recomendado para os amantes da culinária. Chaparral Snooker Bar é um local para experimentar boa cerveja. Serviço espetacular e ambiente calmo. Nota 4.6 no Google.</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card card-highlight h-100">
                        <a href="https://youtu.be/IULsENUe7HQ" class="text-decoration-none text-dark">
                            <div style="height: 400px; overflow: hidden;">
                                <img src="assets/imagens/destaque_2 (2).jpeg" alt="Torneios de Sinuca no Chaparral" 
                                     style="width: 100%; height: 100%; object-fit: cover;"
                                     loading="lazy">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-trophy me-2"></i>Torneios</h5>
                                <p class="card-text">Torneios regulares com os melhores jogadores da região. Ambiente profissional e organizado para competições emocionantes.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- História -->
    <section class="section bg-dark" id="historia">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <h2 class="display-5 mb-4">Nossa História</h2>
                    <p class="lead">Desde 2010 proporcionando momentos memoráveis...</p>
                    <p>O Chaparral Snooker Bar nasceu da paixão pelo esporte e pela gastronomia, criando um espaço único em Curitiba que combina sinuca de alto nível com um ambiente acolhedor e drinks especiais.</p>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <img src="assets/historia.jpg" alt="História do Chaparral Snooker Bar" class="img-fluid rounded-3" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Galeria -->
    <section class="section" id="galeria">
        <div class="container" data-aos="fade-up">
            <h2 class="text-center mb-5 display-4 fw-bold">Galeria</h2>
            <div class="row g-3">
                <div class="col-md-4 gallery-item">
                    <img src="assets/galeria1.jpg" class="img-fluid" alt="Galeria Chaparral 1" loading="lazy">
                </div>
                <div class="col-md-4 gallery-item">
                    <img src="assets/galeria2.jpg" class="img-fluid" alt="Galeria Chaparral 2" loading="lazy">
                </div>
                <div class="col-md-4 gallery-item">
                    <img src="assets/galeria3.jpg" class="img-fluid" alt="Galeria Chaparral 3" loading="lazy">
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-outline-primary">Ver Mais Fotos</a>
            </div>
        </div>
    </section>

    <!-- Contato -->
    <section class="section bg-dark" id="contato">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center" data-aos="fade-up">
                    <h2 class="display-5 mb-5">Venha nos Visitar</h2>
                    <div class="contact-info">
                        <a href="https://maps.app.goo.gl/xWQ5hY2NfcHSNsxi7" class="text-decoration-none text-white" aria-label="Endereço no Google Maps">
                            <i class="bi bi-geo-alt-fill contact-icon"></i>
                            <h4>Endereço</h4>
                            <p>R. Eduardo Sprada, 5197 - Campo Comprido, Curitiba - PR, 81270-010</p>
                        </a>
                        
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <a href="tel:+5541987362240" class="text-decoration-none text-white" aria-label="Telefone">
                                    <i class="bi bi-telephone-fill contact-icon"></i>
                                    <h5>Telefone</h5>
                                    <p>(41) 98736-2240</p>
                                </a>
                                <a href="https://www.instagram.com/explore/locations/1514866241975657/chaparral-snooker-bar/" 
                                   target="_blank" 
                                   class="text-decoration-none text-white"
                                   aria-label="Instagram">
                                    <i class="bi bi-instagram contact-icon mt-3"></i>
                                    <h5>Instagram</h5>
                                    <p>@chaparral-snooker-bar</p>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <i class="bi bi-clock-fill contact-icon"></i>
                                <h5>Funcionamento</h5>
                                <p class="mb-1">Quinta: 14:30–00:00</p>
                                <p class="mb-1">Sexta: 13:30–00:00</p>
                                <p class="mb-1">Sábado: 11:30–00:00</p>
                                <p class="mb-1">Domingo: 11:30–22:00</p>
                                <p class="mb-1 text-danger">Segunda: Fechado</p>
                                <p class="mb-1">Terça: 14:30–00:00</p>
                                <p class="mb-1">Quarta: 14:30–00:00</p>
                            </div>
                        </div>
                        
                        <!-- Mapa incorporado -->
                        <div class="mt-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.102254143143!2d-49.31055492437492!3d-25.48097787754711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce3a5cdc84e51%3A0x1b7f6e5f8a3e3e1c!2sChaparral%20Snooker%20Bar!5e0!3m2!1spt-BR!2sbr!4v1712345678901" 
                                    width="100%" height="300" style="border:0; border-radius: 8px;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-center py-3">
        <div class="container">
            <p class="mb-0">© 2024 Chaparral Snooker Bar. Todos os direitos reservados.</p>
            <div class="mt-2">
                <a href="#" class="text-white mx-2">Termos de Uso</a>
                <a href="#" class="text-white mx-2">Política de Privacidade</a>
            </div>
        </div>
    </footer>

    <!-- Botão WhatsApp -->
    <a href="https://wa.me/41987362240" class="btn btn-success position-fixed bottom-0 end-0 m-3 whatsapp-btn" aria-label="WhatsApp">
        <i class="bi bi-whatsapp fs-4"></i>
    </a>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
        
        // Adiciona classe quando o usuário rola a página
        window.addEventListener('scroll', function() {
            const logo = document.querySelector('.hero-content img');
            if (window.scrollY > 50) {
                logo.style.maxWidth = '250px';
            } else {
                logo.style.maxWidth = '350px';
            }
        });
    </script>
</body>
</html>