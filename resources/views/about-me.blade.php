<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <title>About Me | Ben Jong Sii Lung</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->

        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/about-me.css') }}" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">About Me</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#introduction">Introduction</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#education">Education</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#working-experience">Working Experience</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#skills">Skills</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Introduction Section-->
        <section class="page-section bg-primary text-white mb-0 mt-5" id="introduction">
            <div class="container">
                <!-- Introduction Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Introduction</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Introduction Section Content-->
                <div class="row">
                    <div class="col text-center">
                      <p class="lead text-justify">
                        Hello, I'm <span class="fw-bold text-decoration-underline">Ben</span>, a young and passionate backend developer with one year of professional experience. I am dedicated to building robust and scalable web applications with a focus on the server-side architecture.

                        My expertise lies in <span class="fw-bold text-decoration-underline">developing and maintaining backend systems using MVC (Model-View-Controller)</span> frameworks like Laravel, which I find particularly exciting due to its elegant structure and efficient development workflow.
                      </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Education Section-->
        <section class="page-section mb-0 mt-5 text-secondary" id="education">
            <div class="container">
                <!-- Education Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary">Education</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Education Section Content-->
                <div class="row">
                    <div class="col text-center">
                        <p class="lead text-justify">
                            I graduated from <span class="fw-bold text-decoration-underline">Swinburne University of Technology Sarawak</span> in 2022, earning a <span class="fw-bold text-decoration-underline">Bachelor's degree in Computer Science</span> with a <span class="fw-bold text-decoration-underline"> major in Software Development</span>. My education equipped me with a strong foundation in computer science principles and practical software development skills. Through hands-on projects, I've developed a passion for innovative problem-solving and effective teamwork.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Working Experience Section-->
        <section class="page-section bg-primary text-white mb-0 mt-5" id="working-experience">
            <div class="container">
                <!-- Working Experience Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Working Experience</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Working Experience Section Content-->
                <div class="row">
                    <div class="resume-box text-center">
                        <div class="mb-5">
                            <span class="time fw-bold">August 2022 - June 2023</span>
                            <h5>Junior Web Developer - Job Majestic</h5>
                            <p>As a Junior Web Developer, I collaborated closely with the project manager. I successfully implemented crucial features, including <span class="fw-bold text-decoration-underline">JWT authentication</span> for enhanced security, <span class="fw-bold text-decoration-underline">refactored product, order, and payment systems</span> for improved performance and flexibility, integrated an <span class="fw-bold text-decoration-underline">EDM (Electronic Direct Mail) system</span> for targeted communication, and revamped the <span class="fw-bold text-decoration-underline">job application journey</span> to enhance user experience</p>
                        </div>
            
                        <span class="time fw-bold">May 2022 - July 2022</span>
                        <h5>Full Stack Developer (Internship) - Job Majestic</h5>
                        <p>During my internship, I have successfully developed features like <span class="fw-bold text-decoration-underline">Talent Unlock, Resume Unlock and Bookmark Job Seeker</span>. I also gained experience in debugging web applications during my internship.</p>                      
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section-->
        <section class="page-section mb-0 mt-5 text-secondary" id="skills">
            <div class="container">
                <!-- Skills Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary">Skills</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Skills Section Content-->
                <div class="row">
                    <div class="col text-center">
                        <p class="lead text-justify">
                            Agile Methodologies: <span class="fw-bold text-decoration-underline">Scrum</span>
                        </p>
                        <p class="lead text-justify">
                            Front-end Frameworks: <span class="fw-bold text-decoration-underline">React.js</span>, <span class="fw-bold text-decoration-underline">React Native</span>, <span class="fw-bold text-decoration-underline">Tailwind CSS</span>, <span class="fw-bold text-decoration-underline">Bootstrap</span>
                        </p>
                        <p class="lead text-justify">
                            Front-end Technology: <span class="fw-bold text-decoration-underline">HTML</span>, <span class="fw-bold text-decoration-underline">CSS</span>, <span class="fw-bold text-decoration-underline">Javascript</span>
                        </p>
                        <p class="lead text-justify">
                            Back-end Frameworks: <span class="fw-bold text-decoration-underline">Laravel</span>, <span class="fw-bold text-decoration-underline">ASP .NET MVC</span>, <span class="fw-bold text-decoration-underline">Slim 3 (Microframework)</span>
                        </p>
                        <p class="lead text-justify">
                            Programming Languages: <span class="fw-bold text-decoration-underline">Python</span>, <span class="fw-bold text-decoration-underline">Java</span>, <span class="fw-bold text-decoration-underline">Javascript</span>, <span class="fw-bold text-decoration-underline">C#</span>, <span class="fw-bold text-decoration-underline">C++</span>, <span class="fw-bold text-decoration-underline">PHP</span>
                        </p>
                        <p class="lead text-justify">
                            Version Control: <span class="fw-bold text-decoration-underline">Git</span>
                        </p>
                        <p class="lead text-justify">
                            Database: <span class="fw-bold text-decoration-underline">MySQL</span>
                        </p>
                        <p class="lead text-justify">
                            Basic Knowledge of AWS Services: <span class="fw-bold text-decoration-underline">VPC</span>, <span class="fw-bold text-decoration-underline">EC2</span>, <span class="fw-bold text-decoration-underline">ECS</span>, <span class="fw-bold text-decoration-underline">WAF</span>, <span class="fw-bold text-decoration-underline">RDS</span>, <span class="fw-bold text-decoration-underline">CloudWatch</span>, <span class="fw-bold text-decoration-underline">SES</span>
                        </p>
                        <p class="lead text-justify">
                            Basic Knowledge of <span class="fw-bold text-decoration-underline">Docker</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Section-->
        <section class="page-section bg-primary text-white mb-0 mt-5" id="portfolio">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white mb-0">Portfolio</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="row text-center">
                    <div class="mb-4">
                        <h5>EMTP (Expert Management Training Portal)<a href="https://github.com/victorlee071200/development_project_2" target="_blank"><i class="bi bi-github ms-2"></i></h5></a>
                        <span class="fw-bold">Frameworks: Tailwind CSS, Laravel</span>
                        <p>A web application that allows a company to organize and plan a training program</p>
                    </div>
        
                    <div class="mb-4">
                        <h5>Social Running Application<a href="https://github.com/ben1234456/FYP-Social-Running-App" target="_blank"><i class="bi bi-github ms-2"></i></h5></a>
                        <span class="fw-bold">Frameworks: React Native, Laravel</span>
                        <p>A cross-platform mobile application that allows the users to join virtual run events and also track their activities</p>
                    </div>     
                    
                    <div class="mb-4">
                        <h5>Sliding Puzzle Application<a href="https://github.com/ben1234456/Sliding-Puzzle" target="_blank"><i class="bi bi-github ms-2"></i></h5></a>
                        <p>A simple sliding puzzle game that is made by using Python</p>
                    </div>  

                    <div class="mb-4">
                        <h5>Climate Change Visualisation Project<a href="https://github.com/ben1234456/Data-Visualisation-Project" target="_blank"><i class="bi bi-github ms-2"></i></h5></a>
                        <p>A web application with visualizations using D3.js</p>
                    </div>  
                </div>
            </div>
        </section>

        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="d-flex justify-content-center">
                    <a href="mailto:benjsl1211@gmail.com"><p class="me-3"><i class="bi bi-envelope-at me-2"></i>benjsl1211@gmail.com</p></a>
                    <a href="https://www.linkedin.com/in/ben-jong-036764202" target="_blank"><p class="me-3"><i class="bi bi-linkedin me-1"></i>LinkedIn Profile</p></a>
                    <a href="https://github.com/ben1234456" target="_blank"><p class="me-3"><i class="bi bi-github me-1"></i>GitHub Profile</p></a>
                </div>
            </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/about-me.js') }}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
