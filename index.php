<?php
/**
 * Entrepreneur Pro
 * index.php
 *
 * @package Entrepreneurpro
 * @version 1.0.0
 */


/**
 * header
 */
 get_header();
 $postType = get_post_type();

if ( !$postType ) {
  global $wp_query;
  if ($wp_query->query_vars['post_type']) {
      $postType = $wp_query->query_vars['post_type'];
  }
} ?>

<?
/**
 * footer
 */
<?php get_footer(); ?>
