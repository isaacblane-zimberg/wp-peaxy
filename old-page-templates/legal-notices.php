<?php 
/* Template Name: Legal Notices */ 
?>

<?php get_header(); ?>

<!-- CONTENT -->
<div class="content" id="legal-notices">
	<h4>Legal Notices</h4>
	<h5>Trademarks</h5>
	<p><?php the_field('trademarks_text') ?></p>
	<h5>Export Notifications</h5>
	<p><?php the_field('export_notifications_text') ?></p>
</div>

<!-- FOOTER -->
<?php get_footer(); ?>