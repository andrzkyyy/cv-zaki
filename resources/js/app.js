import * as bootstrap from "bootstrap";
import "bootstrap/dist/css/bootstrap.min.css";

import AOS from "aos";
import "aos/dist/aos.css";

import GLightbox from "glightbox";
import "glightbox/dist/css/glightbox.min.css";

/*==================================================
AOS
==================================================*/

AOS.init({
    duration: 1000,
    once: true,
    easing: "ease-in-out",
});

/*==================================================
GLIGHTBOX
==================================================*/

GLightbox({
    selector: ".glightbox",
    loop: true,
    touchNavigation: true,
    zoomable: false,
    draggable: false,
});

/*==================================================
DOM READY
==================================================*/

document.addEventListener("DOMContentLoaded", () => {

    /*==============================================
    ELEMENT
    ==============================================*/

    const navbar = document.querySelector(".navbar-custom");
    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll(".navbar .nav-link");

    const loader = document.getElementById("loader");

    const menuToggle = document.getElementById("menuToggle");
    const navbarCollapse = document.getElementById("navbarNav");

    /*==============================================
    PRELOADER
    ==============================================*/

    if (loader) {

        setTimeout(() => {

            loader.classList.add("hide");

            setTimeout(() => {

                loader.remove();

            }, 600);

        }, 1200);

    }

/*==============================================
NAVBAR SCROLL + ACTIVE MENU
==============================================*/

function updateNavbar() {

    if (navbar) {

        navbar.classList.toggle(
            "scrolled",
            window.scrollY > 0
        );

    }

    let current = "";

    sections.forEach(section => {

        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;

        if (
            window.scrollY >= sectionTop - 150 &&
            window.scrollY < sectionTop + sectionHeight - 150
        ) {

            current = section.dataset.section || section.id;

        }

    });

    navLinks.forEach(link => {

        link.classList.remove("active");

        if (
            link.getAttribute("href") === "#" + current
        ) {

            link.classList.add("active");

        }

    });

}


    /*==============================================
    COUNTER
    ==============================================*/

    const counters = document.querySelectorAll(".counter");

    const observer = new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if (!entry.isIntersecting) return;

            const counter = entry.target;

            const target = Number(counter.dataset.target);

            const suffix = counter.dataset.suffix || "";

            const duration = 2500;

            const start = performance.now();

            function animate(now) {

                const progress = Math.min((now - start) / duration, 1);

                counter.innerText =
                    Math.floor(progress * target) + suffix;

                if (progress < 1) {

                    requestAnimationFrame(animate);

                } else {

                    counter.innerText = target + suffix;

                }

            }

            requestAnimationFrame(animate);

            observer.unobserve(counter);

        });

    }, {

        threshold: 0.5

    });

    counters.forEach(counter => observer.observe(counter));

    /*==============================================
    HAMBURGER
    ==============================================*/

    if (menuToggle && navbarCollapse) {

        navbarCollapse.addEventListener("show.bs.collapse", () => {

            menuToggle.classList.add("active");

        });

        navbarCollapse.addEventListener("hide.bs.collapse", () => {

            menuToggle.classList.remove("active");

        });

    }


/*==============================================
SMOOTH SCROLL + ACTIVE MENU
==============================================*/

navLinks.forEach(link => {

    link.addEventListener("click", function (e) {

        const targetId = this.getAttribute("href");
        const target = document.querySelector(targetId);

        if (!target) return;

        e.preventDefault();

        /* LANGSUNG AKTIF SAAT KLIK */
        navLinks.forEach(navLink => {
            navLink.classList.remove("active");
        });

        this.classList.add("active");

        /* SMOOTH SCROLL */
        const navbarHeight = navbar
            ? navbar.offsetHeight
            : 0;

        window.scrollTo({
            top: target.offsetTop - navbarHeight,
            behavior: "smooth"
        });

        /* TUTUP MENU MOBILE */
        if (navbarCollapse) {

            const collapse =
                bootstrap.Collapse.getOrCreateInstance(
                    navbarCollapse
                );

            collapse.hide();

        }

    });

});
/*==============================================
SCROLL TO TOP
==============================================*/

const scrollTopBtn = document.getElementById("scrollTopBtn");

console.log(scrollTopBtn);

if (scrollTopBtn) {

    window.addEventListener("scroll", () => {

        scrollTopBtn.classList.toggle(
            "show",
            window.scrollY > 300
        );

    });

    scrollTopBtn.addEventListener("click", () => {

        window.scrollTo({

            top: 0,

            behavior: "smooth"

        });

    });

}
});