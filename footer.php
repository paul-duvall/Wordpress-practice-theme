 
  <footer>
    This is my footer 
  </footer>


    <!-- Adds the second menu in the footer section - the second string is the name assigned to the menu in the functions.php file -->
    <?php wp_nav_menu(array('theme_location'=>'secondary')); ?>
    <!-- Activates the footer functionality so wordpress will recognise this file as the footer information  -->
    <?php wp_footer(); ?>
  </body>
</html>