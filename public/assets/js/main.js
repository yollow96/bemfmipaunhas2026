/**
 * Template Name: UpConstruction
 * Updated: Mar 10 2023 with Bootstrap v5.2.3
 * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */
document.addEventListener("DOMContentLoaded", () => {
    "use strict";

    /**
     * Preloader
     */
    const preloader = document.querySelector("#preloader");
    if (preloader) {
        window.addEventListener("load", () => {
            preloader.remove();
        });
    }

    /**
     * Mobile nav toggle
     */

    const mobileNavCheckbox = document.getElementById("mobileNavCheckbox");

    mobileNavCheckbox.addEventListener("change", function () {
        mobileNavToggle();
    });

    /**
     * Toggle mobile nav visibility
     */
    function mobileNavToggle() {
        const body = document.querySelector("body");
        const mobileNavShow = document.querySelector(".mobile-nav-show");
        const mobileNavHide = document.querySelector(".mobile-nav-hide");

        body.classList.toggle("mobile-nav-active", mobileNavCheckbox.checked);
        mobileNavShow.classList.toggle("d-none", mobileNavCheckbox.checked);
        mobileNavHide.classList.toggle("d-none", !mobileNavCheckbox.checked);
    }

    /**
     * Hide mobile nav on same-page/hash links
     */
    document.querySelectorAll("#navbar a").forEach((navbarlink) => {
        if (!navbarlink.hash) return;

        let section = document.querySelector(navbarlink.hash);
        if (!section) return;

        navbarlink.addEventListener("click", () => {
            if (mobileNavCheckbox.checked) {
                mobileNavToggle();
            }
        });
    });

    /**
     * Toggle mobile nav dropdowns
     */
    const navDropdowns = document.querySelectorAll(".navbar .dropdown > a");

    navDropdowns.forEach((el) => {
        el.addEventListener("click", function (event) {
            if (document.querySelector(".mobile-nav-active")) {
                event.preventDefault();
                this.classList.toggle("active");
                this.nextElementSibling.classList.toggle("dropdown-active");

                let dropDownIndicator = this.querySelector(
                    ".dropdown-indicator"
                );
                dropDownIndicator.classList.toggle("bi-chevron-up");
                dropDownIndicator.classList.toggle("bi-chevron-down");
            }
        });
    });

    /**
     * Scroll top button
     */
    const scrollTop = document.querySelector(".scroll-top");
    if (scrollTop) {
        const togglescrollTop = function () {
            window.scrollY > 100
                ? scrollTop.classList.add("active")
                : scrollTop.classList.remove("active");
        };
        window.addEventListener("load", togglescrollTop);
        document.addEventListener("scroll", togglescrollTop);
        scrollTop.addEventListener(
            "click",
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            })
        );
    }

    /**
     * Initiate glightbox
     */
    const glightbox = GLightbox({
        selector: ".glightbox",
    });

    /**
     * Porfolio isotope and filter
     */
    let portfolionIsotope = document.querySelector(".portfolio-isotope");

    if (portfolionIsotope) {
        let portfolioFilter = portfolionIsotope.getAttribute(
            "data-portfolio-filter"
        )
            ? portfolionIsotope.getAttribute("data-portfolio-filter")
            : "*";
        let portfolioLayout = portfolionIsotope.getAttribute(
            "data-portfolio-layout"
        )
            ? portfolionIsotope.getAttribute("data-portfolio-layout")
            : "masonry";
        let portfolioSort = portfolionIsotope.getAttribute(
            "data-portfolio-sort"
        )
            ? portfolionIsotope.getAttribute("data-portfolio-sort")
            : "original-order";

        window.addEventListener("load", () => {
            let portfolioIsotope = new Isotope(
                document.querySelector(".portfolio-container"),
                {
                    itemSelector: ".portfolio-item",
                    layoutMode: portfolioLayout,
                    filter: portfolioFilter,
                    sortBy: portfolioSort,
                }
            );

            let menuFilters = document.querySelectorAll(
                ".portfolio-isotope .portfolio-flters li"
            );
            menuFilters.forEach(function (el) {
                el.addEventListener(
                    "click",
                    function () {
                        document
                            .querySelector(
                                ".portfolio-isotope .portfolio-flters .filter-active"
                            )
                            .classList.remove("filter-active");
                        this.classList.add("filter-active");
                        portfolioIsotope.arrange({
                            filter: this.getAttribute("data-filter"),
                        });
                        if (typeof aos_init === "function") {
                            aos_init();
                        }
                    },
                    false
                );
            });
        });
    }

    /**
     * Init swiper slider with 1 slide at once in desktop view
     */
    new Swiper(".slides-1", {
        speed: 600,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        slidesPerView: "auto",
        pagination: {
            el: ".swiper-pagination",
            type: "bullets",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    /**
     * Init swiper slider with 2 slides at once in desktop view
     */
    new Swiper(".slides-2", {
        speed: 600,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        slidesPerView: "auto",
        pagination: {
            el: ".swiper-pagination",
            type: "bullets",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 20,
            },

            1200: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
        },
    });

    /**
     * Initiate pURE cOUNTER
     */
    new PureCounter();

    /**
     * Animation on scroll function and init
     */
    function aos_init() {
        AOS.init({
            duration: 800,
            easing: "slide",
            once: true,
            mirror: false,
        });
    }
    window.addEventListener("load", () => {
        aos_init();
    });
});
//Hide Navbar on Scroll
var prevScrollPos = window.pageYOffset;
var header = document.querySelector(".header");

window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;

    if (prevScrollPos > currentScrollPos) {
        header.style.marginTop = "1rem";
    } else {
        header.style.marginTop = "-" + header.offsetHeight + "px";
    }

    prevScrollPos = currentScrollPos;
};

// Variabel untuk menyimpan ukuran font awal
var ukuranFontAwal = 26;

function sesuaikanUkuranFont() {
    var headerText = document.getElementsByClassName("ContentText")[0];

    // Hitung panjang teks tanpa spasi
    var panjangTeks = headerText.textContent.replace(/\s/g, "").length;

    // Tentukan faktor perubahan ukuran font per karakter teks
    var faktorPerubahan = 0.07; // Sesuaikan sesuai kebutuhan

    // Tentukan batas minimum ukuran font
    var ukuranFontMinimum = 12;

    // Hitung ukuran font berdasarkan faktor perubahan linear
    var ukuranFont = Math.max(
        ukuranFontAwal - panjangTeks * faktorPerubahan,
        ukuranFontMinimum
    );

    headerText.style.fontSize = ukuranFont + "px";
}

window.onload = function () {
    sesuaikanUkuranFont(); // Atur ukuran font awal

    // Hitung ulang ukuran font saat jendela diubah ukurannya
    window.addEventListener("resize", sesuaikanUkuranFont);

    // Hitung ulang ukuran font saat konten berubah
    var observer = new MutationObserver(sesuaikanUkuranFont);
    observer.observe(document.body, { subtree: true, childList: true });
};

////card proker
document.addEventListener("DOMContentLoaded", function () {
    const scrollImages = document.querySelector(".scroll-images");
    const scrollLength = scrollImages.scrollWidth - scrollImages.clientWidth;
    const leftButton = document.querySelector(".left");
    const rightButton = document.querySelector(".right");

    function checkScroll() {
        const currentScroll = scrollImages.scrollLeft;
        if (currentScroll === 0) {
            leftButton.setAttribute("disabled", "true");
            rightButton.removeAttribute("disabled");
        } else if (currentScroll === scrollLength) {
            rightButton.setAttribute("disabled", "true");
            leftButton.removeAttribute("disabled");
        } else {
            leftButton.removeAttribute("disabled");
            rightButton.removeAttribute("disabled");
        }
    }

    scrollImages.addEventListener("scroll", checkScroll);
    window.addEventListener("resize", checkScroll);
    checkScroll();

    function leftScroll() {
        const cardWidth =
            1.05 *
            parseFloat(getComputedStyle(document.querySelector(".item")).width);
        scrollImages.scrollBy({
            left: -cardWidth,
            behavior: "smooth",
        });
    }

    function rightScroll() {
        const cardWidth =
            1.05 *
            parseFloat(getComputedStyle(document.querySelector(".item")).width);
        scrollImages.scrollBy({
            left: cardWidth,
            behavior: "smooth",
        });
    }

    leftButton.addEventListener("click", leftScroll);
    rightButton.addEventListener("click", rightScroll);
});
