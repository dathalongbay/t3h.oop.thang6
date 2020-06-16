<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


        <style type="text/css">
            /* The Modal (background) */
            .modal {
                display: none;
                position: fixed;
                z-index: 1;
                padding-top: 100px;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: black;
            }

            /* Modal Content */
            .modal-content {
                position: relative;
                background-color: #fefefe;
                margin: auto;
                padding: 0;
                width: 90%;
                max-width: 1200px;
            }

            /* The Close Button */
            .close {
                color: white;
                position: absolute;
                top: 10px;
                right: 25px;
                font-size: 35px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: #999;
                text-decoration: none;
                cursor: pointer;
            }

            /* Hide the slides by default */
            .mySlides {
                display: none;
            }

            /* Next & previous buttons */
            .prev,
            .next {
                cursor: pointer;
                position: absolute;
                top: 50%;
                width: auto;
                padding: 16px;
                margin-top: -50px;
                color: white;
                font-weight: bold;
                font-size: 20px;
                transition: 0.6s ease;
                border-radius: 0 3px 3px 0;
                user-select: none;
                -webkit-user-select: none;
            }

            /* Position the "next button" to the right */
            .next {
                right: 0;
                border-radius: 3px 0 0 3px;
            }

            /* On hover, add a black background color with a little bit see-through */
            .prev:hover,
            .next:hover {
                background-color: rgba(0, 0, 0, 0.8);
            }

            /* Number text (1/3 etc) */
            .numbertext {
                color: #f2f2f2;
                font-size: 12px;
                padding: 8px 12px;
                position: absolute;
                top: 0;
            }

            /* Caption text */
            .caption-container {
                text-align: center;
                background-color: black;
                padding: 2px 16px;
                color: white;
            }

            img.demo {
                opacity: 0.6;
            }

            .active,
            .demo:hover {
                opacity: 1;
            }

            img.hover-shadow {
                transition: 0.3s;
            }

            .hover-shadow:hover {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
        </style>
</head>
<body>
<?php
include_once 'CrudController.php';
$crudcontroller = new CrudController();
$result = $crudcontroller->readData();

?>

<div class="container-fluid" style="padding-top: 50px;padding-bottom: 50px; background-color: #39469a; color: white; text-align: center">
    <h1>Tạo album ảnh</h1>
</div>

<div class="container" style="margin-top: 100px">
    <h2>Danh sách album</h2> <a href="index.php" class="btn btn-info">Thêm mới</a>
    <table class="table" style="margin-top: 20px">
        <thead>
        <tr>
            <th>Id</th>
            <th>Tên</th>
            <th>Mô tả</th>
            <th>Hình ảnh</th>
            <th>Thời gian tạo</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            <?php if ($result) :
                $i = 1; ?>
            <?php foreach ($result as $item) : ?>
                    <tr>
                        <td><?php echo $item['photo_id'] ?></td>
                        <td><?php echo $item['photo_name'] ?></td>
                        <td><?php echo $item['photo_desc'] ?></td>
                        <td>
                            <?php if ($item['photo_image']) : ?>
                            <img src="<?php echo $item['photo_image'] ?>" onclick="openModal();currentSlide(<?php echo $i ?>)" style="width: 100px" />
                            <?php endif; ?>
                        </td>
                        <td><?php echo date('H:i:s d.m.Y', $item['photo_created']) ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $item['photo_id'] ?>" class="btn btn-warning">Sửa</a>
                            <a href="delete.php?id=<?php echo $item['photo_id'] ?>" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>


<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">

        <?php if ($result) : ?>
        <?php foreach ($result as $item) : ?>

        <div class="mySlides">
            <img src="<?php echo $item['photo_image'] ?>" style="width:100%">
        </div>

            <?php endforeach; ?>
        <?php endif; ?>


    </div>
</div>


<div class="container-fluid" style="margin-top: 100px;padding-top: 50px;padding-bottom: 50px; background-color: #39469a; color: white; text-align: center">
    <h1>Tạo album ảnh đơn giản với PHP</h1>
</div>
<script>
    // Open the Modal
    function openModal() {
        document.getElementById("myModal").style.display = "block";
    }

    // Close the Modal
    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        //dots[slideIndex-1].className += " active";
        //captionText.innerHTML = dots[slideIndex-1].alt;
    }
</script>

</body>
</html>