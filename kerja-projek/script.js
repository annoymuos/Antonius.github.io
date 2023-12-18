var navbarItems = document.querySelectorAll('.navbar a');

    navbarItems.forEach(function(item) {
        item.addEventListener('click', function(e) {
            e.preventDefault(); // Hindari navigasi standar

            var targetId = this.getAttribute('href').substring(1);
            var targetSection = document.getElementById(targetId);

            targetSection.scrollIntoView({ behavior: 'smooth' });

            navbarItems.forEach(function(innerItem) {
                innerItem.classList.remove('active');
            });

            this.classList.add('active');
        });
    });

    window.addEventListener('scroll', function() {
        var currentScrollPos = window.scrollY;

        navbarItems.forEach(function(item) {
            var targetId = item.getAttribute('href').substring(1);
            var targetSection = document.getElementById(targetId);

            if (isElementInViewport(targetSection)) {
                navbarItems.forEach(function(innerItem) {
                    innerItem.classList.remove('active');
                });

                item.classList.add('active');
            }
        });
    });

    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top <= 50 && // Sesuaikan dengan kebutuhan, 50 adalah margin dari atas
            rect.bottom >= 50 // Sesuaikan dengan kebutuhan, 50 adalah margin dari bawah
        );
      }