<?php include '../connection.php'?>

<head>
    <style>
    .user-profile-image {
        /* border:1px solid #ededed; */
        border-radius: 3px;
    }

    .user-profile-image img {
        height: 220px;
        cursor: pointer;
    }

    .user-profile-image:hover .upload-photo {
        transform: scaleY(1);
    }

    .user-profile-image .upload-photo {
        background-color: #242424;
        opacity: 0.4;
        width: 350px;
        height: 50px;
        position: absolute;
        bottom: 0;
        left: 100px;
        cursor: pointer;
        transform: scaleY(0);
        transition: 0.5s;
        transform-origin: bottom;
    }

    .user-profile-image .upload-photo::before {
        content: 'Change Photo';
        color: #ffffff;
        position: absolute;
        top: 7px;
        left: 110px;
        opacity: 1;
        font-size: 24px;
    }

    .user-profile-image .upload-photo img {
        height: 30px;
        width: 30px;
        filter: brightness(0)invert(1);
        color: rgb(91, 226, 145) !important;
        position: absolute;
        top: 7px;
        left: 70px;
    }
    </style>
</head>

<div id="app">
    <div class="main-wrapper">
        <?php include 'adminHeader.php';?>
        <div class="main-content">
            <section class="section">
                <h1 class="section-header">
                    <div>Add Products</div>
                </h1>
                <div class="section-body">
                    <form action="ProductCrud.php" method="post" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">

                                <div class="form-group wrap-input1 mt-5">
                                    <label for="name">Product Name:</label>
                                    <input type="text" class="form-control input1" id="name"
                                        placeholder="Enter Your Product name" name="Pname">
                                </div>
                                <div class="form-group wrap-input1">
                                    <label for="name">Select Category:</label>
                                    <select class="form-control wrap-input1" id="cat" name="Category">
                                        <option value="">--Select--</option>
                                        <!-- Get dropdown data code -->

                                        <?php
                                $query = "select * from categories";
                                $rs = mysqli_query($con,$query);
                                if(mysqli_num_rows($rs) > 0){
                                    while($data  = mysqli_fetch_array($rs)){?>
                                        <option value="<?= $data['CategoryId']?>"><?= $data['CategoryName']?></option>
                                        <?php
                            }
                            }else{  ?>
                                        <option>NO records Found</option>
                                        <?php } ?>
                                    </select>
                                </div>


                                <div class="form-group wrap-input1 mt-5">
                                    <label for="name">Product Description:</label>
                                    <input type="text" class="form-control input1" id="name"
                                        placeholder="Enter Your Product Description" name="Pdesc">
                                </div>
                                <div class="form-group wrap-input1 mt-5">
                                    <label for="name">Price:</label>
                                    <input type="number" class="form-control input1" id="name"
                                        placeholder="Enter Your Price" name="Pprice">
                                </div>
                                <div class="form-group wrap-input1 mt-5">
                                    <label for="name">Stock:</label>
                                    <input type="number" class="form-control input1" id="name"
                                        placeholder="Enter Your Stock" name="Pstock">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="d-flex flex-column align-items-center text-center  user-profile-image">

                                    <input class="form-control" type="file" id="Pro_Image" name="uploaded" hidden />

                                    <img style="width:350px;" src="./dist/img/noImg.jpg" id="UserImage">

                                    <div class="upload-photo text-center ">

                                        <img src="./dist/img/camera.png" alt="cameraImg" class="img-responsive">

                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success ml-5" name="AddProduct">Submit</button>

                        </div>
                    </form>
                </div>
            </section>
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2018 <div class="bullet"></div> Design By <a
                    href="https://multinity.com/">Multinity</a>
            </div>
            <div class="footer-right"></div>
        </footer>

    </div>

</div>

<script>
$(document).ready(function() {


    $(".upload-photo").click(function() {
        $("#Pro_Image").trigger('click')
    })

    $("#UserImage").click(function() {
        $("#Pro_Image").trigger('click')
    })
    $("#Pro_Image").change(function() {
        if (this.files && this.files[0]) {
            var fileReader = new FileReader();
            fileReader.readAsDataURL(this.files[0]);
            fileReader.onload = function(x) {

                $("#UserImage").attr('src', x.target.result);
            }
        }
    })
})
</script>