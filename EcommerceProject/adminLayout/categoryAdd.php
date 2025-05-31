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

</style></head>

<div id="app">
    <div class="main-wrapper">
        <?php include 'adminHeader.php';?>
        <div class="main-content">
            <section class="section">
                <h1 class="section-header">
                    <div>Add Category</div>
                </h1>
                <div class="section-body">
                    <form action="CategoryCrud.php" method="post" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group wrap-input1 mt-5">
                                    <label for="name">CategoryName:</label>
                                    <input type="text" class="form-control input1" id="name"
                                        placeholder="Enter Your Category name" name="name">
                                </div>

                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="d-flex flex-column align-items-center text-center  user-profile-image">

                                    <input class="form-control" type="file" id="Pro_Image" name="uploaded" hidden/>

                                    <img  style="width:350px;" src="./dist/img/noImg.jpg" id="UserImage">

                                    <div class="upload-photo text-center ">
                                      
                                        <img src="./dist/img/camera.png" alt="cameraImg" class="img-responsive">

                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success ml-5" name="AddCategory">Submit</button>

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