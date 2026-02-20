(function($) {
    "use strict";

    // Spinner
    var spinner = function() {
        setTimeout(function() {
            if ($("#spinner").length > 0) {
                $("#spinner").removeClass("show");
            }
        }, 1);
    };
    spinner();

    // Initiate the wowjs
    new WOW().init();

    // Sticky Navbar
    $(window).on("scroll", function() {
        if ($(this).scrollTop() > 45) {
            $(".navbar").addClass("sticky-top shadow-sm");
        } else {
            $(".navbar").removeClass("sticky-top shadow-sm");
        }
    });

    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000,
    });

    // Back to top button
    $(window).on("scroll", function() {
        if ($(this).scrollTop() > 100) {
            $(".back-to-top").fadeIn("slow");
        } else {
            $(".back-to-top").fadeOut("slow");
        }
    });

    $(".back-to-top").on("click", function() {
        $("html, body").animate({ scrollTop: 0 });
    });

    $("#quoteForm").on("submit", function(event) {
        event.preventDefault();

        const name = $("#nameField").val().trim();
        const phone = $("#phoneField").val().trim(); // Tambahkan ini
        const service = $("#serviceField").val().trim();
        const message = $("#messageField").val().trim();

        // GANTI URL INI dengan URL dari hasil Deployment Baru (Langkah di bawah)
        const scriptURL = 'https://script.google.com/macros/s/AKfycbwN4Yti9nhsA51KXgprkZa8Is1br7RYST0xHtLh2FouUsgQXO1rRLvMA0FnuG-MXT13VA/exec';

        // 1. Proses Simpan ke Spreadsheet (Latar Belakang)
        const formData = new FormData();
        formData.append('name', name);
        formData.append('phone', phone);
        formData.append('service', service);
        formData.append('message', message);

        fetch(scriptURL, {
                method: 'POST',
                body: formData,
                mode: 'no-cors' // Menghindari blokir CORS browser
            })
            .then(() => console.log("Berhasil simpan ke Sheets"))
            .catch(error => console.error("Gagal simpan ke Sheets:", error));

        // 2. Proses Kirim ke WhatsApp (Langsung)
        const text = `Halo, saya *${name}* (${phone}). Saya ingin bertanya tentang *${service}*. ${message}`;
        window.open(
            `https://wa.me/6281331181861?text=${encodeURIComponent(text)}`,
            "_blank"
        );

        // Opsional: Reset form setelah kirim
        // $(this)[0].reset();
    });

    // Auto active nav link
    const sections = $("section");
    const navlinks = $("nav div div a");

    $(window).on("scroll", function() {
        let currentSection = "home";

        sections.each(function() {
            const sectionTop = $(this).offset().top;
            const sectionHeight = $(this).outerHeight();
            if (
                pageYOffset >= sectionTop - 180 &&
                pageYOffset < sectionTop + sectionHeight
            ) {
                currentSection = $(this).attr("id");
            }
        });

        navlinks.removeClass("active");
        navlinks.each(function() {
            if ($(this).attr("href") === "#" + currentSection) {
                $(this).addClass("active");
            }
        });
    });

    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: true,
        loop: true,
        center: true,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
        },
    });

    $(".portfolio-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: true,
        loop: true,
        center: true,
        margin: 30,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
        },
    });

    $(".promo-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: true,
        loop: true,
        center: true,
        margin: 30,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
        },
    });
})(jQuery);