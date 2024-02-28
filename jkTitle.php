<?php
   /*
   * Plugin Name: Jk Title
   * Plugin URI: https://github.com/
   * Description: test plugin
   * Version: 1.0
   * Author: Javiko500
   * Author URI: https://github.com/JaviKo500
   * License: GPL2
   */
   add_filter('the_title', 'updateTitles');
   // add_filter('the_content', 'updateContentText');
   add_filter('list_cats', 'updateCategoriesText');

   // modify title
   function updateTitles ($text) {
      return 'Filter text example ---> '.$text;
   }

   function updateContentText( $text ) {
      return strtoupper( $text );
   }

   function updateCategoriesText( $text ) {
      return strtolower( $text );
   }
?>
