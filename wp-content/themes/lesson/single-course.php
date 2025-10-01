<?php get_header(); ?>
    <?php while(have_posts()): the_post(); ?>
        <?php 
            $price = get_post_meta(get_the_ID(), 'price', true) ?: '0.00';
            $original_price = get_post_meta(get_the_ID(), 'original_price', true) ?: '0.00';
            $discount = '';
            $video_hours = get_post_meta(get_the_ID(), 'video_hours', true) ?: '0';
            $articles = get_post_meta(get_the_ID(), 'articles', true) ?: '0';
            $resources = get_post_meta(get_the_ID(), 'resources', true) ?: '0';
            $language = get_post_meta(get_the_ID(), 'language', true) ?: 'English';
            $subtitles = get_post_meta(get_the_ID(), 'subtitles', true) ?: '';

            if (!empty($original_price) && $original_price > $price) {
                $discount = round((($original_price - $price)/$original_price) * 100);
            }
        ?>
        <section class="single-course">
            <div class="container">
                <div class="course-header">
                    <div class="breadcrumb">
                        <a href="<?php echo get_post_type_archive_link('course'); ?>">Courses</a> / <span><?php the_title(); ?></span>
                    </div>
                    <h2>UI/UX Design</h2>
                    <div class="course-meta">
                        <div class="rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span>4.8 (1,245 reviews)</span>
                        </div>
                        <div class="enrolled">
                            <i class="fas fa-users"></i>
                            <span>3,450 students enrolled</span>
                        </div>
                    </div>
                </div>
                <!-- COURSE CONTENT -->
                <div class="course-content">
                    <!-- COURSE MAIN CONTENT -->
                    <div class="course-main">
                        <div class="course-main-inner">
                            <!-- Course Hero -->
                            <div class="course-hero">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php echo the_post_thumbnail('full', [
                                        'class' => 'course-image',
                                        'alt' => get_the_title()
                                    ]); ?>
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/course-1.png" alt="Web App Design Course" class="course-image">
                                <?php endif; ?>

                                <div class="price-box">
                                    <?php if(!empty($price)): ?>
                                        <div class="current-price">$<?php echo esc_html($price); ?></div>
                                    <?php endif; ?>
                                    <?php if(!empty($original_price)): ?>
                                        <div class="original-price">$<?php echo esc_html($original_price); ?></div>
                                    <?php endif; ?>
                                    <?php if(!empty($discount)): ?>
                                        <div class="discount-badge"><?php echo esc_html($discount); ?>% OFF</div>
                                    <?php endif; ?>
                                    <button class="enroll-btn">Enroll Now</button>
                                    <div class="includes">
                                        <h4>This course includes:</h4>
                                        <ul>
                                            <?php if(!empty($video_hours)): ?>
                                                <li><i class="far fa-file-video"></i> <?php echo esc_html($video_hours) ?> hours on-demand video</li>
                                            <?php endif; ?>
                                            <?php if(!empty($articles)): ?>
                                                <li><i class="far fa-file-alt"></i> <?php echo esc_html($articles) ?> articles</li>
                                            <?php endif; ?>
                                            <?php if(!empty($resources)): ?>
                                                <li><i class="fas fa-download"></i> <?php echo esc_html($resources) ?> downloadable resources</li>
                                            <?php endif; ?>
                                            <li><i class="fas fa-infinity"></i> Full lifetime access</li>
                                            <li><i class="fas fa-mobile-alt"></i> Access on mobile and TV</li>
                                            <li><i class="fas fa-trophy"></i> Certificate of completion</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Course Tab -->
                            <div class="course-tabs">
                                <nav class="tabs-nav">
                                    <button class="tab-btn active" data-tab="overview">Overview</button>
                                    <button class="tab-btn" data-tab="curriculum">Curriculum</button>
                                    <button class="tab-btn" data-tab="instructor">Instructor</button>
                                    <button class="tab-btn" data-tab="reviews">Reviews</button>
                                </nav>
                                <!-- Tab Content 1 -->
                                <div class="tab-content active" id="overview">
                                    <h2>Course Description</h2>
                                    <p>Master the art of designing modern web applications with this comprehensive course. You'll learn industry-standard tools and techniques used by professional UI/UX designers to create beautiful, functional web applications.</p>
                                </div>

                                <h2>What You'll Learn</h2>
                                <ul class="learn-list">
                                    <li><i class="fas fa-check"></i> Principles of effective web app design</li>
                                    <li><i class="fas fa-check"></i> User experience research methods</li>
                                    <li><i class="fas fa-check"></i> Creating wireframes and prototypes</li>
                                    <li><i class="fas fa-check"></i> Design systems and component libraries</li>
                                    <li><i class="fas fa-check"></i> Responsive design techniques</li>
                                </ul>

                                <h2>Requirments</h2>
                                <ul class="requirements-list">
                                    <li><i class="fas-fa-circle"></i> Basic computer skills</li>
                                    <li><i class="fas-fa-circle"></i> Familiarity with any design tool (optional)</li>
                                    <li><i class="fas-fa-circle"></i> Passion for design and creativity</li>
                                </ul>
                            </div>
                            
                            <!-- Tab Content 2 -->
                            <div class="tab-content" id="curriculum">
                                <h2>Course Curriculum</h2>
                                <div class="accordion">
                                    <div class="accordion-item">
                                        <button class="accordion-header">
                                            <span>Section 1: Introduction to Web App Design</span>
                                            <span>6 lectures . 45 min</span>
                                        </button>
                                        <div class="accordion-content">
                                            <ul>
                                                <li><i class="far fa-play-circle"></i> Welcome to the course <span>5:20</span></li>
                                                <li><i class="far fa-play-circle"></i> What is web design? <span>8:15</span></li>
                                                <li><i class="far fa-play-circle"></i> Industry tools overview <span>12:40</span></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <button class="accordion-header">
                                            <span>Section 2: User Reasearch</span>
                                            <span>8 lectures . 1 hr 20 min</span>
                                        </button>
                                        <div class="accordion-content">
                                            <ul>
                                                <li><i class="far fa-play-circle"></i> Understanding user needs <span>15:20</span></li>
                                                <li><i class="far fa-play-circle"></i> Creating user personas <span>18:30</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab Content 3 -->
                            <div class="tab-content" id="curriculum">
                                <div class="instructor-profile">
                                    <img src="assets/images/instructor.jpg" alt="Instructor">
                                    <div class="instructor-info">
                                        <span class="title">Senior UI/UX Designer at TechCorp</span>
                                        <div class="rating">
                                            <div class="stars">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span>4.9 Instructor Rating</span>
                                        </div>
                                        <div class="stats">
                                            <div class="stat">
                                                <span class="number">12,540</span>
                                                <span class="label">Students</span>
                                            </div>
                                            <div class="stat">
                                                <span class="number">8</span>
                                                <span class="label">Courses</span>
                                            </div>
                                        </div>
                                        <p>Sarah has been designing digital products for over 10 years, specializing in web and mobile applicaionts. She has worked with startups and Fortune 500 companies to create intuitive, beautiful user experiences.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- COURSE SIDEBAR -->
                    <div class="course-sidebar">
                        <div class="course-sidebar-inner">
                            <!-- Sidebar Card 1 -->
                            <div class="sidebar-card">
                                <h3 class="sidebar-card-title">Course Details</h3>
                                <ul class="course-details-list">
                                    <li>
                                        <i class="far fa-clock"></i>
                                        <div>
                                            <span>Duration</span>
                                            <strong><?php echo esc_html($video_hours); ?> hours</strong>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="far fa-calendar-alt"></i>
                                        <div>
                                            <span>Last Updated</span>
                                            <strong><?php echo get_the_modified_date(); ?></strong>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fas fa-language"></i>
                                        <div>
                                            <span>Language</span>
                                            <?php if(!empty($language)): ?>
                                                <strong><?php echo esc_html($language); ?></strong>
                                            <?php else: ?>
                                                <strong>Not Defiend</strong>
                                            <?php endif; ?>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="far fa-closed-captioning"></i>
                                        <div>
                                            <span>Subtitles</span>
                                            <?php if(!empty($subtitles)): ?>
                                                <strong><?php echo esc_html($subtitles); ?></strong>
                                            <?php else: ?>
                                                <strong>No Subtitles avilable</strong>
                                            <?php endif; ?>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <!-- Sidebar Card 2 -->
                            <div class="sidebar-card">
                                <h3 class="sidebar-card-title">Who this course it for</h3>
                                <ul class="course-details-list">
                                    <li>
                                        <i class="fas fa-check"></i>
                                        <span> Aspiring UI/UX desiners</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>
                                        <span> Web developers wanting design skills</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>
                                        <span> Graphic designers transitioning to  digital</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>
                                        <span> Product managers</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>
<?php get_footer(); ?>