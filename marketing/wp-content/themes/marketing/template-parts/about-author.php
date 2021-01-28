<?php
/**
 * About Author Information.
 *
 * @package Marketing
 */

$about_author_text 	= mega_magazine_options( 'about_author_text' );
$view_post_text 	= mega_magazine_options( 'view_post_text' );

?>

                    <div class="author-profile">
                        <div class="author-img">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), '100' ); ?>
                        </div>
                        <div class="author-content-wrap">
                            <h1 class="page-title">
                                <?php echo esc_html( $about_author_text ).' '.get_the_author();?>
                            </h1>
                            <div class="author-desc">
                                <?php the_author_meta( 'description' ); ?>
                                <a class="authors-more-posts" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( $view_post_text ).' '.get_the_author();?></a>
                            </div>
                            
                            
                            
                            <ul class="social-list">
                                <li><a data-title="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a data-title="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a data-title="google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a data-title="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a data-title="pinterest" href="#"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <nav class="navigation posts-navigation">
                        <div class="nav-links">
                            <div class="nav-previous">
                                <a href="#" rel="prev">
                                    <i class="fas fa-chevron-left"></i>
                                    Previous Article
                                </a>
                            </div>
                            <div class="nav-next">
                                <a href="#" rel="next">
                                    <i class="fas fa-chevron-right"></i>
                                    Next Article
                                </a>
                            </div>
                        </div>
                    </nav>