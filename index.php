<?php get_header();?>

<section id="main">
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

	<article>
		<h2 id="post-<?php the_ID(); ?>">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>
		<small><?php the_time('F jS, Y') ?> by <?php the_author() ?> </small>

		<div class="entry">
			<?php the_content('Read the rest of this entry &raquo;'); ?>
		</div>

	</article>
	<?php endwhile; ?>
<?php endif ;?>

</section>
</body>

<?php get_footer();?>