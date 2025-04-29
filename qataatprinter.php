<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include("header.php");
include("config.php");

// دریافت تصاویر مرتبط با صفحه
$sql = "SELECT * FROM images_page3";
$result = $conn->query($sql);
?>


</head>

<body dir="rtl">
    <section class="container my-4">
        <div class="row text-center">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='col-12 col-md-4 mb-3'>";
                    echo "<div class='image-container'>";
                    echo "<a href='#'>";
                    echo "<img src='uploads/" . $row['filename'] . "' alt=''>";
                    echo "<p>" . $row['description'] . "</p>";
                    echo "</a>";
                    if (isset($_SESSION["role"]) && $_SESSION["role"] == 'admin') {
                        echo "<button class='edit-button' onclick='toggleActionButtons(this)'><i class='fas fa-edit'></i></button>";
                        echo "<div class='action-buttons'>";
                        echo "<form action='editqataatprinter.php' method='post' enctype='multipart/form-data' class='mb-2'>";
                        echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
                        echo "<input type='text' name='description' placeholder='توضیح جدید' class='form-control mb-2' required>";
                        echo "<input type='file' name='image' class='form-control mb-2' required>";
                        echo "<button type='submit' class='btn btn-primary w-100 mb-2'>ویرایش</button>";
                        echo "</form>";
                        echo "<form action='deleteqataatprinter.php' method='post'>";
                        echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
                        echo "<button type='submit' class='btn btn-danger w-100 mb-2'>حذف</button>";
                        echo "</form>";
                        echo "</div>";
                    }
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<p>هیچ تصویری موجود نیست.</p>";
            }
            ?>
        </div>
        <?php if (isset($_SESSION["role"]) && $_SESSION["role"] == 'admin') { ?>
        <div class="text-center">
            <form action="add.php" method="post" enctype="multipart/form-data" class="row justify-content-center">
                <input type="hidden" name="page" value="page3"> <!-- افزودن فیلد صفحه -->
                <div class="                <div class="col-md-4 col-12">
                    <input type="text" name="description" placeholder="توضیح" class="form-control mb-2" required>
                </div>
                <div class="col-md-4 col-12">
                    <input type="file" name="image" class="form-control mb-2" required>
                </div>
                <div class="col-md-4 col-12">
                    <button type="submit" class="btn btn-success w-100 mb-2">افزودن</button>
                </div>
            </form>
        </div>
        <?php } ?>
    </section>

<?php
include("pagefooter.html")
?>

<!-- لینک جاوااسکریپت بوت استرپ -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

<script>
    function toggleActionButtons(button) {
        var actionButtons = button.nextElementSibling;
        if (actionButtons.style.display === "none" || actionButtons.style.display === "") {
            actionButtons.style.display = "block";
        } else {
            actionButtons.style.display = "none";
        }
    }
</script>

</body>
</html>
