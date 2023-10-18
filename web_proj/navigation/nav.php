<style>
        body {
            background-image: url('https://s40424.pcdn.co/in/wp-content/uploads/2022/07/info-systems.jpg.optimal.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
    </style>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
   <div id="binss">
<nav class="navbar navbar-danger bg-dark" >
    <div class="container-fluid">
      <div class="d-flex"> <a class="navbar-brand" href="#">
            <img src="C:\xampp\htdocs\img/380851073_654812536754983_8831620948755717178_n__1_-removebg-preview.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            SYNCMINER INFORMATION SYSTEM
        </a>
        <div class="container">
    <div class="text-center">
        <button class="btn btn-primary" data-bs-toggle="collapse" onclick="to_login()">Log in</button>
       
    </div>
</div>
    </div></div> 
</nav></div>




<!-- Create elements to load content into -->
<div id="contents"></div>
<div id="sub_content"></div>


<script> 
function to_home_up() {
    $.post("pages/home/home.php", {},
        function (data ) {
          $("#home_content").html(data); 
        alert("log in successful")
        });
}
</script>
<script>
    function to_login(){
    $("#carouselExampleCaptions").hide(); 

        $.post("pages/login/login.php", {},
            function (data) {
                $("#contents").html(data);
            });
    }
</script>

<script>
    function to_sign_up() {
        $.post("pages/signup.php", {},
            function (data) {
                $("#sub_content").html(data);
            });
    }
</script>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://img.freepik.com/premium-photo/document-management-system-dms-businessman-hold-doctor-document-icon-software-archiving-searching-managing-corporate-files-information-internet-technology-concept-digital-security_150455-10040.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.ctfassets.net/estpihr4wt1v/20shIVmpplwA3X02vZKrhG/4e891c18091b0440d0a775d090b921cb/Shawn_Kennedy_-_What_Is_a_Student_Information_System_Six_Features_of_the_System.png?w=1200&h=630&fit=fill&f=face" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://static.vecteezy.com/system/resources/previews/010/434/992/non_2x/information-system-word-concepts-turquoise-banner-computer-based-data-infographics-with-icons-on-color-background-isolated-typography-illustration-with-text-vector.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>