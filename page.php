<?php get_header(); ?>

<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="archive.html">Blog</a></li>
			</ul>
		</div>
		<div id="main-content" class="col-2-3">
			<div class="wrap-content">

				<?php while(have_posts()): the_post(); ?>
				<article>
					<div class="art-header">
						<?php the_content(); ?>
				</article>
			<?php endwhile; ?>


			</div>
		</div>
		<div id="sidebar" class="col-1-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>