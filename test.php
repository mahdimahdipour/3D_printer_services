
    <style>
        .slideshow-container {
            position: relative;
            max-width: 800px;
            margin: auto;
        }

        .slides {
            display: none;
            text-align: center;
        }

        .slides img {
            width: 100%;
        }

        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            background-color: rgba(0,0,0,0.5);
            border: none;
            font-size: 18px;
            transition: 0.3s;
        }

        .prev {
            left: 0;
        }

        .next {
            right: 0;
        }

        .dots-container {
            text-align: center;
            margin-top: 15px;
        }

        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }
    </style>
</head>
<body>
    <div class="slideshow-container">
        <div class="slides">
            <img src="image1.jpg" alt="تصویر 1">
        </div>
        <div class="slides">
            <img src="image2.jpg" alt="تصویر 2">
        </div>
        <div class="slides">
            <img src="image3.jpg" alt="تصویر 3">
        </div>
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
    </div>
    <div class="dots-container">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("slides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
</body>
</html>
