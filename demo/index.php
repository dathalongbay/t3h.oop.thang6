<?php
$errors = "";
if (count($_POST)) {
    if (isset($_POST["photo_image"]) && isset($_POST["photo_desc"]) && isset($_POST["photo_name"]) && $_POST["photo_image"] && $_POST["photo_desc"] && $_POST["photo_name"]) {
        include_once 'CrudController.php';
        $crudcontroller = new CrudController();
        $result = $crudcontroller->add($_POST);
        header("Location: list.php");
        exit;
    } else {
        $errors = "<div style='color:red'>Vui lòng nhập đủ hình ảnh, tên và mô tả</div>";
    }
}

?>
<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
    type="text/javascript"></script>
<script type="text/javascript" src="jquery.form.min.js"></script>

<script type="text/javascript">
$(document).ready(function () {
    $('#submitButton').click(function () {
    	    $('#uploadForm').ajaxForm({
    	        target: '#outputImage',
    	        url: 'uploadFile.php',
    	        beforeSubmit: function () {
    	        	  $("#outputImage").hide();
    	        	   if($("#uploadImage").val() == "") {
    	        		   $("#outputImage").show();
    	        		   $("#outputImage").html("<div class='error'>Choose a file to upload.</div>");
                    return false; 
                }
    	            $("#progressDivId").css("display", "block");
    	            var percentValue = '0%';

    	            $('#progressBar').width(percentValue);
    	            $('#percent').html(percentValue);
    	        },
    	        uploadProgress: function (event, position, total, percentComplete) {

    	            var percentValue = percentComplete + '%';
    	            $("#progressBar").animate({
    	                width: '' + percentValue + ''
    	            }, {
    	                duration: 5000,
    	                easing: "linear",
    	                step: function (x) {
                        percentText = Math.round(x * 100 / percentComplete);
    	                    $("#percent").text(percentText + "%");
                        if(percentText == "100") {
                        	   $("#outputImage").show();
                        }
    	                }
    	            });
    	        },
    	        error: function (response, status, e) {
    	            alert('Oops something went.');
    	        },
    	        
    	        complete: function (xhr) {
    	            if (xhr.responseText && xhr.responseText != "error")
    	            {
    	                console.log(xhr.responseText);
    	            	  $("#outputImage").html('<img src="'+xhr.responseText+'" />');
    	            	  $("#outputInput").val(xhr.responseText);
    	            }
    	            else{  
    	               	$("#outputImage").show();
        	            	$("#outputImage").html("<div class='error'>Problem in uploading file.</div>");
        	            	$("#progressBar").stop();
    	            }
    	        }
    	    });
    });
});
</script>

</head>
<body>

    <div class="container-fluid" style="padding-top: 50px;padding-bottom: 50px; background-color: #39469a; color: white; text-align: center">
        <h1>Tạo album ảnh</h1>
    </div>


    <div class="container" style="min-height: 500px">
        <div class="row">
            <div class="col-md-12">
                <a href="list.php" class="btn btn-info" style="margin: 20px">Danh sách album</a>
                <?php echo $errors ?>
                <div class="form-container">
                    <form action="uploadFile.php" id="uploadForm" name="frmupload"
                          method="post" enctype="multipart/form-data">
                        <input type="file" id="uploadImage" name="uploadImage" /> <input
                                id="submitButton" type="submit" name='btnSubmit'
                                value="Submit Image" />

                    </form>
                    <div class='progress' id="progressDivId" style="height: 60px">
                        <div class='progress-bar' id='progressBar'></div>
                        <div class='percent' id='percent'>0%</div>
                    </div>


                    <div style="height: 10px;"></div>
                    <div id='outputImage'>
                    </div>

                    <form action="index.php" id="album" name="frmalbum"
                          method="post" enctype="multipart/form-data">
                        <input type="hidden" id='outputInput' name="photo_image" value="" />

                        <div class="form-group">
                            <label for="email">Tên ảnh:</label>
                            <input type="text" name="photo_name" class="form-control" placeholder="Nhập Tên ảnh" id="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Mô tả:</label>
                            <input type="text"  name="photo_desc" class="form-control" placeholder="Nhập Mô tả" id="pwd">
                        </div>

                        <button type="submit" class="btn btn-primary">Tạo album</button>

                    </form>
                </div>

            </div>


        </div>
    </div>

    <div class="container-fluid" style="margin-top: 100px;padding-top: 50px;padding-bottom: 50px; background-color: #39469a; color: white; text-align: center">
        <h1>Tạo album ảnh đơn giản với PHP</h1>
    </div>

</body>
</html>