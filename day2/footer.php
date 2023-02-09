<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">  

<div class="row">
<footer style="background-color: rgb(65, 7, 109); color: white;">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright
  </div>
  <!-- Copyright -->
  <div class="text-center">
   <?php
    echo "Last modified on ".date("F d Y H:i:s.", filemtime($_SERVER['SCRIPT_FILENAME'])); 
    ?>
    </div>
</footer></div>
