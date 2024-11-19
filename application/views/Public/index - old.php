<!doctype html>
<html lang="en">

<head>
    <!-- required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- AMIUTUcss-->
    <link rel="stylesheet" href="assets/css/amiutu.css">
    <!-- AOS animate-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Box Icon css-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>

    <title>AMI - UTU</title>


</head>

<body>
    <!-- navbar section-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/brand/Nvas(2).png" alt="brand">
            </a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <box-icon name='menu'></box-icon>
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAArUlEQVRoQ+2WQQrAIBDE9P+Prj+QgTAs0vTsrLuJYvd6/NuP978cYNqgBjQACXiEIEAc1wBGCAv8wsAHIdH4FXJiwAGgAg1AgN14cge6HcDqDgAB4rgGMEJYIDHgQ9aErAFIN4njX4lkk7E1yREaay7Z2AESSs01GmjSTWonBnyJE5KXNfgd0MC0Abh/N55c4m4HsLoDQIA4rgGMEBbQAASI4xrACGEBDUCAOH4Al9kMMZG0RokAAAAASUVORK5CYII=" />
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="https://www.utu.ac.id">Web UTU</a>
                </div>
                <a href="<?= base_url('auth'); ?>" class="btn btn-primary shadow-none"> Login</a>
            </div>
        </div>
    </nav>
    <!-- hero section-->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copy" data-aos="fade-up" data-aos-duration="3000">
                        <div class="text-label">
                            Sistem Informasi Audit Mutu Internal (AMI) Digital
                        </div>
                        <div class="text-hero-bold">
                            UNIVERSITAS TEUKU UMAR
                        </div>
                        <div class="text-hero-regular">
                            Audit Mutu Internal (AMI) aims to assess and enhance the effectiveness of academic and administrative processes, ensuring compliance with educational standards, regulations, and institutional policies.
                        </div>
                        <div class="cta">
                            <a href="<?= base_url('auth'); ?>" class="btn btn-secondary shadow-none"> Login</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="3000">
                    <img src="assets/img/illustration/Screen Shot 2023-11-11 at 18.40.20.png" width="650" height="500" alt="png">
                </div>
            </div>
        </div>
    </section>

    <!-- Brand Section-->


    <!-- footer-->
    <footer>
        <div class="row">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
        </div>
    </footer>

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <p>
            <p>Sistem Informasi - Audit Mutu Internal (AMI)- Universitas Teuku Umar </p>
            &copy; <span id="displayYear"></span> Copyright by
            <a href="utu.ac.id/">Universitas Teuku Umar 2023</a>
            </p>
        </div>
    </footer>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>