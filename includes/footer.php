
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/css/bootstrap.min.css"></script>
    <script src="assets/js/custom.js"></script>

    
    
     <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>


    <script>

    alertify.set('notifier','position', 'top-right');


      <?php 

      if(isset($_SESSION['message'])) 
      	{ 

      ?>

      alertify.success('<?= $_SESSION['message'] ?>');

      <?php

       unset($_SESSION['message']); 

   		} 

      ?>


    </script>


  </body>
</html>