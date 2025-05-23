<?php  include 'header.php' ?>





<div class="container"> <br>
    <h3>Insert Data In DataBase</h3> <br>

    <form action="crud.php" method="post">

        <div class="form-group">
            <label for="name" class="fw-bold">StudentName:</label>
            <input type="text" class="form-control mt-3" id="name" placeholder="Enter Your name" name="StudName">
        </div>

        <div class="form-group">
            <label for="gen" class="fw-bold">Gender:</label>
            <div class="form-check-inline ml-3">
                <label class="form-check-label mt-3">
                    Male: <input type="radio" class="form-check-input" name="Gender" value="Male">
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label mt-3">
                    Female: <input type="radio" class="form-check-input" name="Gender" value="Female">
                </label>
            </div>
        </div>


        <div class="form-group">
            <label for="city" class = "mt-3 fw-bold">Select City:</label>
            <select class="form-control mt-3" id="city" name="city">
                <option value="">--Select--</option>
                <option value="Karachi">Karachi</option>
                <option value="Lahore">Lahore</option>
                <option value="Islamabad">Islamabad</option>
                <option value="Peshawar">Peshawar</option>
            </select>
        </div>

        <div class="form-group">
            <label for="course" class="fw-bold">Select Courses:</label>
            <div class="form-check-inline ml-4">
                <label class="form-check-label mt-3">
                    MVC <input type="checkbox" class="form-check-input" value="MVC" name="Course[]">
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label mt-3">
                    PHP <input type="checkbox" class="form-check-input" value="PHP" name="Course[]">
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label mt-3">
                    MY SQL <input type="checkbox" class="form-check-input" value="MYSQL" name="Course[]">
                </label>
            </div>
        </div>

        <div class="form-group">
            <label for="pwd" class = "mt-3 fw-bold">Education:</label>
            <input type="text" class="form-control mt-3" id="edu" placeholder="Enter your Education" name="Education">
        </div>

        <div class="form-group">
            <label for="fee" class = "mt-3 fw-bold">Fees:</label>
            <input type="number" class="form-control mt-3" id="fee" placeholder="Enter your Fees" name="Fees">
        </div>

        <button type="submit" class="btn btn-primary mt-5" name="ins">Submit</button>
    </form>
</div>



<?php  include 'footer.php' ?>