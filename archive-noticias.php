<?php get_header(); 


?>
<main class="conteudo col-lg-12" style="padding-top: 20px !important; padding-left: 20px !important; padding-right: 20px !important">
	<section class="single-noticias home-last-news col-lg-12">
		<div class="row">
			<h1 class="col-lg-2">Noticias</h1> 
		</div>

		<?php while (have_posts()):
		the_post();
		$post_id = get_the_ID();
		?>
		<div class="col-lg-4" style="padding: 2px">
			<div class="thumbnail col-lg-12" style="border:0; margin:0; padding-left: 0; padding-right:0 ;">
				<a class="home-last-news-link" href="<?= get_post_permalink(); ?>">
					<figure class="col-lg-12">
						<span class="home-last-news-tag">

							<?= get_the_terms($post_id, 'post_tag')[0]->name; ?>
						</span>

						<span class="single-noticias-date">
							<i class="fa fa-calendar"></i>
							<?php echo get_the_date( 'd/m/Y' ); ?>
						</span>

						<img src="https://s.profissionaisti.com.br/wp-content/uploads/2014/02/gerenciamento-aquisicoes-projetos-ti.jpg" class="img-responsive">

						<h2 class="text-center news-title col-lg-12" style=""><?php the_title(); ?></h2>
					</figure>
				</a>
			</div>
		</div>	
	<?php endwhile;  ?>
		<section class="pagination col-lg-12 text-center">
			<?php wordpress_pagination(); ?>
		</section>
	</section>

</main> 

<?php get_footer(); ?>