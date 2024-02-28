<body>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="./images/1.png" >
            <div class="text">Caption Text</div>
        </div>
        <div class="mySlides fade">

            <img src="./images/2.png" >
            <div class="text">Caption Two</div>
        </div>
        <div class="mySlides fade">
            
            <img src="./images/3.png" >
            <div class="text">Caption Three</div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
    </div>
    <br>
    <div style="text-align:center; margin-top: -25px;">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <script src="./js/slider.js"></script>
</body>