window.addEventListener("DOMContentLoaded", function () {

    // slider


    let more = document.querySelector('.more'),
        overlay = document.querySelector('.overlay'),
        close = document.querySelector('.popup-close');
        

    more.addEventListener('click', function () {
        overlay.style.display = 'block';
        this.classList.add('more-splash');
        document.body.style.overflow = 'hidden';
    });

    close.addEventListener('click', function () {
        overlay.style.display = 'none';
        more.classList.remove('more-splash');
        document.body.style.overflow = '';
    });

    // form

    let message = {
        loading: 'Загрузка...',
        success: 'Спасибо! Скоро мы с вами свяжемся!',
        failure: 'Что-то пошло не так...'
    };

    let form = document.querySelector('.main-form'),
        input = form.getElementsByTagName('input'),
        statusMessage = document.createElement('div');

    statusMessage.classList.add('status');

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        form.appendChild(statusMessage);

        let request = new XMLHttpRequest();
        request.open('POST', 'server.php');
        request.setRequestHeader('Content-type', 'application/json; charset=utf-8');

        let formData = new FormData(form);

        let obj = {};
        formData.forEach(function (value, key) {
            obj[key] = value;
        });
        let json = JSON.stringify(obj);

        request.send(json);

        request.addEventListener('readystatechange', function () {
            if (request.readyState < 4) {
                statusMessage.innerHTML = message.loading;
            } else if (request.readyState === 4 && request.status == 200) {
                statusMessage.innerHTML = message.success;
            } else {
                statusMessage.innerHTML = message.failure;
            }
        });

        for (let i = 0; i < input.length; i++) {
            input[i].value = '';
        }
    });

    document.getElementById("trigger").onclick = function () {
        open()
    };

    function open() {
        document.getElementById("menu").classList.toggle("show");
    }


    

    let slideDounIndex = 1,
        slidesDoun = document.querySelectorAll('.solutions_img'),
        prevDoun = document.querySelector('.solutions_prev'),
        nextDoun = document.querySelector('.solutions_next'),
        dotsWrapDoun = document.querySelector('.solutions_mnu_items'),
        dotsDoun = document.querySelectorAll('.solutions_mnu_item');

        showSlides(slideDounIndex);

        function showSlides(n) {
            if (n > slidesDoun.length) {
                slideDounIndex = 1;
            }
            if (n < 1) {
                slideDounIndex = slidesDoun.length;
            }
    
            slidesDoun.forEach((item) => item.style.display = 'none');
            dotsDoun.forEach((item) => item.classList.remove('solutions_mnu_item-active'));
    
            slidesDoun[slideDounIndex - 1].style.display = 'block';
            dotsDoun[slideDounIndex - 1].classList.add('solutions_mnu_item-active');
        }

        function plusSlides(n) {
            showSlides(slideDounIndex += n);
        }
    
        function currentSlide(n) {
            showSlides(slideDounIndex = n);
        }
    
    
        prevDoun.addEventListener('click', function () {
            plusSlides(-1);
        });
    
        nextDoun.addEventListener('click', function () {
            plusSlides(1);
        });

        dotsWrapDoun.addEventListener('click', function (event) {
            for (let i = 0; i < dotsDoun.length + 1; i++) {
                if (event.target.classList.contains('solutions_mnu_item') && event.target == dotsDoun[i - 1]) {
                    currentSlide(i);
                }
            }
        });
});