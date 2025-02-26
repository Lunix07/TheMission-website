<header>
    <style>
        /* Sticky Header */
        .header-sticky {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000000;
            background-color: #fff;
            transition: all 0.3s ease;
            height: 85px;
            background-color: white;
        }

        /* Ensure no overlap when sticky */
        .main-header {
            padding: 20px 0;
        }

        /* Active menu item */
        .main-menu ul li a.active {
            color: orange !important;
            font-weight: bold;
        }

        /* Normal link styling */
        .main-menu ul li a {
            color: black;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        /* Hover effect */
        .main-menu ul li a:hover {
            color: orange;
        }
     /* Adjust Logo Styling */
            .logo img {
            margin-top: 10px;
            max-height: 200px;
            width: 300px;
            display: block;
        }
        /* Ensure proper alignment */
        .logo {
            display: flex;
            align-items: center;
            height: 65px; /* Match header height */
        }

    </style>

    <link rel="stylesheet" href="assets/css/style.css">

    <div class="header-area">
        <div class="main-header">
            <div class="header-bottom header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/mission.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-8">
                            <div class="header-left d-flex f-right align-items-center">
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.php" class="nav-link" data-section="accueil">Accueil</a></li>
                                            <li><a href="formation.php" class="nav-link" data-page="formation">Nos formations</a></li>
                                            <li><a href="app.php" class="nav-link" data-page="app">Notre application</a></li>
                                            <li><a href="contactus.php" class="nav-link" data-page="contactus">Contact</a></li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".nav-link");
    const sections = document.querySelectorAll("section");
    const currentPage = window.location.pathname.split("/").pop(); // Get current page filename
    const hash = window.location.hash.substring(1); // Get the hash (#contact, #about, etc.)

    function highlightActiveSection() {
        let scrollPosition = window.scrollY + 70; // Adjust for sticky header

        // Remove 'active' class from all links
        navLinks.forEach(link => link.classList.remove("active"));

        if (currentPage === "index.php" || currentPage === "") {
            // 🔹 Check hash immediately on load
            if (hash) {
                let activeHashLink = document.querySelector(`.nav-link[data-section="${hash}"]`);
                if (activeHashLink) {
                    activeHashLink.classList.add("active");
                    return; // Stop further checking
                }
            }

            // Highlight sections while scrolling
            sections.forEach(section => {
                let sectionTop = section.offsetTop;
                let sectionHeight = section.offsetHeight;

                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    let activeLink = document.querySelector(`.nav-link[data-section="${section.id}"]`);
                    if (activeLink) {
                        activeLink.classList.add("active");
                    }
                }
            });

            // Default highlight for "Accueil" when at the top
            if (scrollPosition < 200) {
                let accueilLink = document.querySelector('.nav-link[href="index.php"]');
                if (accueilLink) accueilLink.classList.add("active");
            }
        } else {
            // Highlight full-page links like formations.php & app.php
            let activePageLink = document.querySelector(`.nav-link[data-page="${currentPage.replace('.php', '')}"]`);
            if (activePageLink) {
                activePageLink.classList.add("active");
            }
        }
    }

    // 🔹 If redirected with a hash (e.g., index.php#contact), highlight immediately
    if ((currentPage === "index.php" || currentPage === "") && hash) {
        setTimeout(() => {
            let activeHashLink = document.querySelector(`.nav-link[data-section="${hash}"]`);
            if (activeHashLink) {
                activeHashLink.classList.add("active");
            }
        }, 100); // Small delay ensures it applies before user scrolls
    }

    // Handle clicks on section links instantly
    navLinks.forEach(link => {
        link.addEventListener("click", function () {
            let sectionId = this.getAttribute("data-section");
            if (sectionId) {
                navLinks.forEach(l => l.classList.remove("active"));
                this.classList.add("active");
            }
        });
    });

    // Run on load & scroll
    window.addEventListener("scroll", highlightActiveSection);
    highlightActiveSection();
});

</script>
