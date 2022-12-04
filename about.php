<?php 
session_start(); 
include "conn.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fonts.css">
    <title>Gallery</title>

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="css/bootstrap4.5.3.min.css">
    <title>Document<<title>Document</title>
    <style>
        .img-logo {
            max-width: 142px;
        }
    </style>
</head>
<body style="background-color: #FAFAFA;">
<section>
     <nav class="navbar navbar-expand-md navbar-light pt-md-3 bg-white">
            <div class="container">
                <a href="#home" class="navbar-brand d-flex align-items-center " id="logo">
                        <img src="img/tup-logo.png" alt="TUPV Logo" id="logo">
                        <div class="collapse navbar-collapse">
                            <p class="logo-text fw-pp mb-0 ms-2">
                            Technological University of the Philippines Visayas
                            </p>
                        </div>
                </a>

                <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse"
                data-bs-target="#nav-menu"
                >
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="nav-menu">
                    <ul class="navbar-nav ms-auto d-flex align-items-center text-light" id="nav-link-ul">
                        <li class="nav-item mx-1 ">
                            <a href="index.php" class="nav-link fw-pp">Home</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a href="alumni_page.php" class="nav-link fw-pp">Alumni</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a href="gallery_page.php" class="nav-link fw-pp">Gallery</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a href="about.php" class="nav-link fw-pp active-link">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
<section>
    
<!-- HERO -->
<div class="container">
    <div>
        <img class="img-fluid img-logo mx-auto d-block" src="img/Group 1.png" alt="" srcset="">
        <p class="text-center fs-5 mt-3 fw-semibold gallery-head"> 
        ABOUT THE OFFICE OF TUP VISAYAS ALUMNI ASSOCIATION INCORPORATED
        </p>
    </div>
    <div class="content mx-lg-5">
        <p class="fw-normal mb-5 text-center">
        Created and established under the Office of the President, the Office of TUP Visayas Alumni Association Incorporated (TUPVAAI) serves as the link between the alumni and the rest of the academic community. The TUPVAAI aims to promote maximum alumni engagement, involvement, support, and dedication to the university's social mission. It supports the TUP and its Alumni Association (TUPVAA) in locating, fostering, and including alumni in institutional and alumni programs, events, and activities. It also represents the TUP and the TUPVAA at institutional and alumni programs, events, and activities both locally, on-and off-campus, and foreign venues whenever possible.
        </p>
        <div class="mb-5">
            <header class="c-tupv fw-semibold text-center mb-3 fs-4">
            GOALS
            </header>
            <ol>
                <li>Connecting the TUP Alumni Association to mentor fellow graduates, patience and dedication.</li>
                <li>Enabling the TUPV-Alumni Association to exercise the highest degree of leadership.</li>
                <li>Serve the TUP-Alumni Association to create and strengthen a service to community with fellow graduates.</li>
            </ol>
        </div>
        <div class="mb-5">
            <header class="c-tupv fw-semibold mb-3"> 
            Its objectives include:
            </header>
            <ol>
                <li>To uphold the good name and reputation of the PSAT/PCAT/TUP progressive and dynamic institution of learning which has produced leaders in industry, in technological education and other aspects of endeavor.</li>
                <li>To serve instrument in promoting the interest and welfare of its members.</li>
                <li>To work and collaborate with other agencies towards the attainment of social, economic, educational, scientific and technological development of the country.</li>
            </ol>
        </div>
        <div class="mb-5">
        <div class="bg-primary1 py-2 px-4 text-center mb-4">
            <p class="text-light mb-0 fw-semibold">
                TUPVAAI OFFICERS (2020-2021)
            </p>
        </div>
        <table class="mx-auto officers">
            <tr>
                <th class="px-4 pb-2">President:</th>
                <td class="px-4 pb-2 fw-semibold">Noel G. Tan</td>
            </tr>
            <tr>
                <th class="px-4 pb-2">Vice President (Internal):</th>
                <td class="px-4 pb-2 fw-semibold">Benjamin E. Esmana</td>
            </tr>
            <tr>
                <th class="px-4 pb-2">Vice President (External):</th>
                <td class="px-4 pb-2 fw-semibold">Ramon Jimmy Jose A. Espedido</td>
            </tr>
            <tr>
                <th class="px-4 pb-2">Secretary:</th>
                <td class="px-4 pb-2 fw-semibold">Ma. Ruby Q. Sales</td>
            </tr>
            <tr>
                <th class="px-4 pb-2">Treasurer:</th>
                <td class="px-4 pb-2 fw-semibold">Susana D. Nobleza</td>
            </tr>
            <tr>
                <th class="px-4 pb-2">Auditor:</th>
                <td class="px-4 pb-2 fw-semibold">Carlos L. Armoness</td>
            </tr>
            <tr>
                <th class="px-4 pb-2">Business Manager:</th>
                <td class="px-4 pb-2 fw-semibold">Maria Victoria B. Reosura</td>
            </tr>
            <tr>
                <th class="px-4 pb-2">PIO:</th>
                <td class="px-4 pb-2 fw-semibold">Ian P. Velano, Rey G. Decena</td>
            </tr>
            <tr>
                <th class="px-4 pb-2">Board Members:</th>
                <td class="px-4 pb-2 fw-semibold">Joemar P. Palomaria</td>
            </tr>
            <tr>
                <th class="px-4 pb-2"></th>
                <td class="px-4 pb-2 fw-semibold">Edgardo B. Etac</td>
            </tr>
            <tr>
                <th class="px-4 pb-2"></th>
                <td class="px-4 pb-2 fw-semibold">Macroosvil S. Hinolan</td>
            </tr>
            <tr>
                <th class="px-4 pb-2"></th>
                <td class="px-4 pb-2 fw-semibold">Russel R. Mapa</td>
            </tr>
            <tr>
                <th class="px-4 pb-2"></th>
                <td class="px-4 pb-2 fw-semibold">Federic R. Inion</td>
            </tr>
            <tr>
                <th class="px-4 pb-2"></th>
                <td class="px-4 pb-2 fw-semibold">Remus I. Jereza</td>
            </tr>
        </table>
        </div>
        <div class="mb-5">
        <header class="c-tupv fw-semibold text-center mb-3 fs-4">
            Mission
        </header>
        <p class="fw-normal mb-5 text-center">
        The TUP Visayas Alumni Association Incorporated is an independent caring and God-centered organization that nurtures lifelong relationship with an among previous current and future TUP graduates. As a committed partner of the University, the association promotes mutual understanding, care, corporation, camaraderie, career-sharing values of engineering, technological advancement, educational growth contribution among its members, offers programs of relevance and service to alumni and creates active support for the development of the University, to the community and to our country.
        </p>
        </div>
        <div class="mb-5">
        <header class="c-tupv fw-semibold text-center mb-3 fs-4">
            Vision
        </header>
        <p class="fw-normal mb-5 text-center">
        To envision our alumni association being a distinguished and highly effective organization within the TUP School Systems in the entire country.                                         
        </p>
        </div>

    </div>
</div>
<div class="text-light" id="footer">
                <br>
                <br>
                

                <footer class="container c-light-500 pb-5">
                    <div class="row">
                        <div class="col-lg-4 col-12 text-lg-start txt-center mb-3">
                            <p class="fw-semibold">OFFICE OF TUPV ALUMNI ASSOCIATION INCORPORATED</p>
                            <p>
                            Rm. 2 Conference Hall (TUPVAAI Center) TUP Visayas,
 Talisay City, Philippines 6115
                            </p>
                        </div>
                        <div class="col-lg-4 col-12 text-lg-start txt-center mb-3">
                        <p class="fw-semibold">EMAIL</p>
                        <p class="mb-1">Admin Section: <span class="text-primary"><u>oaai.admin@tup.edu.ph</u></span></p>
                        <p class="mb-1">Database Section: <span class="text-primary"><u>oaai.database@tup.edu.ph</u></span></p>
                        <p class="">Communications Section: <span class="text-primary"><u>tupv.alumnioffice@tup.edu.ph</u></span></p>
                        </div>
                        <div class="col-lg-4 col-12 text-lg-start txt-center mb-3">
                        <p class="fw-semibold">
                        TUPV TRUNKLINE
                        </p>
                        <p><em>+63 (034) 495.3480</em> local 8753 (Staff) and 2341 (Director)</p>
                        </div>
                    </div>

                </footer>
            </div>
<section>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>