<div class="container text-center" id="frame">
    <div class="center-frame">
        <form method="post" action="add_user.php"> <!-- Change the action to your signup handling script -->
            <div class="text-bold"><h1>SIGN UP</h1></div> 
            <div class="text-dark"><p>Please fill out the required information</p></div>
            <div class="input-group mb-3">
                <span class="input-group-password"></span>
                <input type="text" name="First_Name" class="form-control" placeholder="First Name" aria-label="First Name" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-password"></span>
                <input type="text" name="Last_Name" class="form-control" placeholder="Last Name" aria-label="Last Name" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="email" name="Email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-password"></span>
                <input type="text" name="Password" class="form-control" placeholder="Password" aria-label="Password" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-password"></span>
                <input type="text" name="Confirm_Password" class="form-control" placeholder="Confirm Password" aria-label="Confirm Password" required>
            </div>
            <div class="container">
                <div class="text-danger"></div>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">User Type</label>
                        <select id="inputState" name="User_Type" class="form-select">
                            <option selected>Admin</option>
                            <option>Manager</option>
                            <option>Employee</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" required>
                            <label class="form-check-label" for="gridCheck">
                                I agree to the Terms and Privacy Policy of Syncminer Technology
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <input class="btn btn-primary" type="reset" value="Reset">
                        <input type="submit" class="btn btn-secondary btn-lg" value="Login">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="contentAfterLogin" style="display: none;">
    <!-- Content to display after Log in or Sign up -->
</div>
<script>
    function to_home_up() {
        // Hide the frame
        $("#frame").hide();
        $("#carouselExampleCaptions").hide();
        
        // Load the content after Log in
        $.post("pages/home/home.php", {},
            function (data) {
                $("#contentAfterLogin").html(data).show();
                alert("Sign in Successful")
            });
    }
    </script>

