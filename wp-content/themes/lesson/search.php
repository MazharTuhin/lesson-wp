<?php get_header(); ?>
    <section class="blog search-results">
        <div class="container">
            <!-- Serach Tite -->
            <div class="section-header">
                <h3 class="section-title">
                    <?php printf(esc_html__('Search Resuts for: %s', 'lessonlms'), get_search_query()); ?>
                </h3>
            </div>

            <!-- Search Result -->
            <?php if(have_posts()): ?>
                <div class="blog-list">
                    <?php while(have_posts()): the_post(); ?>
                        <article class="blog-item">
                            <div class="blog-heading">
                                <h3 class="blog-title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                            </div>

                            <div class="blog-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
            <?php else: ?>
                <p class="no-results">
                    <?php __('No results found!', 'lessonlms'); ?>
                </p>
            <?php endif; ?>
        </div>
    </section>

<?php get_footer(); ?>