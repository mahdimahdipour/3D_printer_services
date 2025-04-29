<?php
include("header.php");
?>
<style>
    .product-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: flex-start;
        margin-top: 30px;
    }
    .product-image {
        width: 400px;
        border-radius: 20px;
    }
    .product-details {
        max-width: 400px;
        margin-right: 50px;
        text-align: right;
    }
    .product-title {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .price {
        font-size: 22px;
        color: #7dd3fc;
        font-weight: bold;
        margin-bottom: 20px;
    }
    .description {
        font-size: 18px;
        margin-bottom: 20px;
        color: #e0e0e0;
    }
    #downlod {
        display: inline-block;
        font-size: 18px;
        background-color: #7dd3fc;
        color: #ffffff;
        padding: 10px 20px;
        border-radius: 10px;
        text-decoration: none;
        transition: background-color 0.3s;
    }
    #downlod:hover {
        background-color: #38bdf8;
    }
    @media (max-width: 768px) {
        .product-container {
            flex-direction: column;
            align-items: center;
        }
        .product-details {
            margin-right: 0;
            text-align: center;
        }
    }
    
</style>

</head>
<body>
    <div class="container product-container">
        <img class="product-image" src="uploads/image.png" alt="مدل سه‌بعدی اسکلت">
        
        <div class="product-details">
            <h1 class="product-title">مدل سه بعدی فرفره</h1>
            <p class="price">0 تومان</p>
            <p class="description">
                این مدل سه‌بعدی به صورت تک‌پارچه و بدون نیاز به ساپورت پرینت می‌شود.
            </p>
            <a  id="downlod" href="uploads/springy-benchy20250409-1-tf8bkx.zip">دانلود فایل</a>             </div>
    </div>
</body>
</html>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php include("pagefooter.html"); ?>

