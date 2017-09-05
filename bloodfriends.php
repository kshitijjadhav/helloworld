 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/mycss.css" type="text/css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
      </head>

    <body>
       <?php
        include 'header.php';
        include 'footer.php';
        include 'form.php';
        ?>
      <form>
        <div class="input-field" id="find">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
          <a class="waves-effect waves-light btn" id="search_btn">search</a>
      </form>
    
              <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
         $(document).ready(function() {
        $('select').material_select();
    $("#find").focusin(function(){
        $("#broadcast_form").fadeOut();
        $(this).animate({left:"30%"});
        $("#search_btn").css("visibility","visible");         
    });
    $("#find").focusout(function(){
        $("#broadcast_form").fadeIn();
        $(this).animate({left:"10%"});
        $("#search_btn").css("visibility","hidden"); 
    });
         });
        </script>
      </body>
  </html>
