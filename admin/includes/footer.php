    </div>
    </div>
    </div>
    <footer class="footer-dark text-light bg-dark">
<div class="text-center">&copy; Querypup <?php echo (date('Y') - 1) ?>-<?php echo date('Y') ?></div>
    </footer>
    <script scr="js/validation.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="../js/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content' );
    </script>
    <script>
      $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
    <script>
      $('.d-flex .list-group .nav-item .nav-link').click(function(){
          $(this).find('i').toggleClass('fa-angle-right fa-angle-down');
      });
    </script>
    </body>

    </html>
