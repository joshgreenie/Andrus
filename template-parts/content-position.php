<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Firetoss_Theme
 */


$license_required = get_field('license_required');
$type = get_field('type');
$state = get_field('state');
$city = get_field('city');
$benefits = get_field('benefits');
$requirements = get_field('requirements');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

        <h1 class="entry-title"><?php the_title( ); ?>
            <?= $license_required ? "<span class='license'>$license_required</span>" : "";?>
            <?= $type ? "<span class='type'>$type</span>" : "";?>
            <?= $state ? "<span class='state'>$state</span>" : "";?>
        </h1>
        <?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php firetoss_seed_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'firetoss_seed' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'firetoss_seed' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php firetoss_seed_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
