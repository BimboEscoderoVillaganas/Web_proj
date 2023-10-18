 $(document).ready(function () {
   
   to_nav();
    to_log_in();
    to_home();
   
 });

 function to_Sign_up() {
  $.post("pages/signup.php", {},
      function (data ) {
        $("#sub_content").html(data); 
      });
}
 function to_log_in() {
    $.post("pages/login.php", {},
        function (data ) {
          $("#contents").html(data); 
        });
 }
 function to_nav() {
  $.post("navigation/nav.php", {},
      function (data ) {
        $("#nav_content").html(data); 
     
      });
}
function to_home() {
  $.post("pages/home.php", {},
      function (data ) {
        $("#home_content").html(data); 
     
      });
}
