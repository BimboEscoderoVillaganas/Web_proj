<div class="text-center"> 
    <style>
        /* Center the frame */
        .center-frame {
            max-width: 50%;
           
            height: 80vh; /* Adjust the height as needed */
            border: 2px solid #000; /* Border style */
            padding: 20px; /* Padding inside the frame */
            background-color: #6c757d; /* Background color */
            background-color: rgba(52, 152, 219, 0.7);
        }
        /* Text color inside the frame */
        .center-frame p {
            color: #fff; 
        }
    </style>
<form method="post" action="logindb.php">
<div class="container text-center" id="frame">
    <div class="center-frame">
        <div class="text-bold"><h1>LOG IN</h1></div> 
        <div class="text-dark"><p>Please enter your log in details</p></div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="email" name="Email" id="Email"  class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-password"></span>
            <input type="password" name="Password" id="Password"  class="form-control" placeholder="Password" aria-label="Password" required>
        </div>
        <div class="container">
            <div class="text-danger"></div>
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">Save password for the next Log in?</label>
            </div>
        </div>
       <input type="submit" class="btn btn-secondary btn-lg" value="Login">
        
        </form>
        <div class="d-flex"><p>Don't have an account? </p>  
        <button type="button" class="btn btn-link" class="btn btn-dark" onclick="to_sign_up()">Sign up</button></div>

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
        $("#Binns").hide();
        // Load the content after Log in
        $.post("pages/home/home.php", {},
            function (data) {
                $("#contentAfterLogin").html(data).show();
            });
    }
    
    function to_sign_up() {
        // Hide the frame
        $("#frame").hide();
        
        // Load the content after Sign up
        $.post("pages/signup.php", {},
            function (data) {
                $("#contentAfterLogin").html(data).show();
            });
    }
</script>   

 


