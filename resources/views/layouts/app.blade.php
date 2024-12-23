<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} @yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="build/assets/frontend/styles/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div id="particles-js"></div>
    <div class="scroll-progress"></div>

    @include('includes.header')

    @include('includes.home')

    <section id="sobre-mi" class="section">
        <div class="animate container">
            <h2 class="section-title">Sobre M&#xed;</h2>
            <p>Soy un desarrollador web apasionado por crear experiencias digitales &#xfa;nicas y funcionales. Con
                experiencia
                en el desarrollo full stack, me especializo en construir aplicaciones web modernas y escalables.</p>
        </div>
    </section>

    <section id="habilidades" class="section">
        <div class="animate container">
            <h2 class="section-title">Mis Habilidades</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <i class="fa-3x fa-html5 fab" style="color: #e34f26;"></i>
                    <h3>HTML5</h3>
                    <p>Estructuraci&#xf3;n sem&#xe1;ntica y accesible</p>
                </div>
                <div class="skill-card">
                    <i class="fa-3x fa-css3-alt fab" style="color: #1572b6;"></i>
                    <h3>CSS3</h3>
                    <p>Dise&#xf1;o responsivo y animaciones</p>
                </div>
                <div class="skill-card">
                    <i class="fa-3x fa-js fab" style="color: #f7df1e;"></i>
                    <h3>JavaScript</h3>
                    <p>Desarrollo frontend y backend</p>
                </div>
                <div class="skill-card">
                    <i class="fa-3x fa-react fab" style="color: #61dafb;"></i>
                    <h3>React</h3>
                    <p>Desarrollo de SPA modernas</p>
                </div>
            </div>
        </div>
    </section>

    <section id="proyectos" class="section">
        <div class="animate container">
            <h2 class="section-title">Mis Proyectos</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-img"></div>
                    <div class="project-content">
                        <h3>E-commerce Website</h3>
                        <p>Plataforma de comercio electr&#xf3;nico con React y Node.js</p>
                        <a href="https://github.com/tuuser/proyecto1" class="btn">Ver Proyecto</a>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-img"></div>
                    <div class="project-content">
                        <h3>Dashboard Analytics</h3>
                        <p>Sistema de an&#xe1;lisis de datos en tiempo real</p>
                        <a href="https://github.com/tuuser/proyecto2" class="btn">Ver Proyecto</a>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-img"></div>
                    <div class="project-content">
                        <h3>App de Gesti&#xf3;n</h3>
                        <p>Aplicaci&#xf3;n web para gesti&#xf3;n de proyectos</p>
                        <a href="https://github.com/tuuser/proyecto3" class="btn">Ver Proyecto</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('includes.contac')

    @include('includes.footer')

    <script src="build/assets/frontend/js/home.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <script>
        particlesJS('particles-js', {
            particles: {
                number: {
                    value: 80,
                    density: {
                        enable: true,
                        value_area: 800
                    }
                },
                color: {
                    value: '#00d2ff'
                },
                shape: {
                    type: 'circle'
                },
                opacity: {
                    value: 0.5,
                    random: false
                },
                size: {
                    value: 3,
                    random: true
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: '#00d2ff',
                    opacity: 0.2,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 2,
                    direction: 'none',
                    random: false,
                    straight: false,
                    out_mode: 'out',
                    bounce: false,
                }
            },
            interactivity: {
                detect_on: 'canvas',
                events: {
                    onhover: {
                        enable: true,
                        mode: 'repulse'
                    },
                    onclick: {
                        enable: true,
                        mode: 'push'
                    },
                    resize: true
                }
            },
            retina_detect: true
        });
    </script>
</body>

</html>
