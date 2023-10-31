
    <!-- News Section -->
    <section class="sidebar-page-container">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="news-block-two blog-single-post">
                        <div class="inner-box">
                            <div class="upper-content">
                                <div class="category">[ <i class="far fa-folder-open"></i> <?= $article->category; ?> ]</div>
                                <h3><?= $article->title; ?></h3>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-user"></i>MDS Metals</a></li>
                                    <li><a href="#"><i class="far fa-clock"></i><?= $article->date; ?></a></li>
                                </ul>
                            </div>
                            <div class="image">
                                <img src="assets/images/blog/image-2.jpg" alt="">
                            </div>
                            <div class="lower-content">                                
                                <?= $article->content; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>












