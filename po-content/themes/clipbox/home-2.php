<?=$this->layout('index');?>

    <!-- Latest News Area Start -->
    <section class="razo-latest-news-area bg-overlay bg-img jarallax" style="background-image: url(<?=$this->asset('/img/bg-img/33.jpg')?>);">
        <!-- Razo Latest News Slide -->
        <div class="razo-latest-news-slide owl-carousel">
            <?php
                $headlines = $this->post()->getHeadline('5', 'DESC', WEB_LANG_ID);
                foreach($headlines as $headline){
            ?>
            <!-- Single Latest News Area -->
            <div class="razo-single-latest-news-area bg-overlay bg-img" style="background-image: url(<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$headline['picture'];?>);">
                <!-- Post Content -->
                <div class="post-content">
                    <a href="<?=BASE_URL;?>/detailpost/<?=$headline['seotitle'];?>" class="post-title"><?=$headline['title'];?></a>
                    <p><?=$this->pocore()->call->postring->cuthighlight('post', $headline['content'], '50');?>...</p>
                </div>
                <!-- Post Date -->
                <div class="post-date">
                    <h2><?=substr($this->pocore()->call->podatetime->tgl_indo($headline['date']), 0, 2);?></h2>
                    <p><?=substr($this->pocore()->call->podatetime->tgl_indo($headline['date']), 3);?></p>
                </div>
                <!-- Read More -->
                <div class="read-more-btn">
                    <a href="<?=BASE_URL;?>/detailpost/<?=$headline['seotitle'];?>" class="btn"><?=$this->e($front_readmore);?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    <!-- Latest News Area End -->

    <!-- Blog Area Start -->
    <section class="razo-blog-area section-padding-80-0">
        <div class="container">
            <div class="row">
                <!-- Weekly News Area -->
                <div class="col-12 col-md-8">
                    <div class="weekly-news-area mb-50">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <h2>Blog New</h2>
                        </div>
                        <div class="row">
                        <?php
                            $posts = $this->post()->getPost('6', 'DESC', WEB_LANG_ID);
                            foreach($posts as $list_post){
                        ?>
                            <!-- Single Post Area -->
                            <div class="col-12 col-md-6">
                                <div class="razo-blog-masonary-single-item mb-30">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <a href="<?=BASE_URL;?>/detailpost/<?=$list_post['seotitle'];?>">
                                            <img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$list_post['picture'];?>" alt="<?=$list_post['title'];?>">
                                        </a>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $list_post);?>#comments"><i class="fa fa-comments-o" aria-hidden="true"></i> <?=$this->post()->getCountComment($list_post['id_post']);?> </a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?=$list_post['hits'];?></a>
                                            <a href="#"><i class="fa fa-book" aria-hidden="true"></i> <?=$this->pocore()->call->podatetime->tgl_indo($headline['date']);?></a>
                                        </div>
                                        <a href="<?=BASE_URL;?>/detailpost/<?=$list_post['seotitle'];?>" class="post-title"><?=$list_post['title'];?></a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- insert sidebar -->
                <div class="col-12 col-md-4">
                    <?=$this->insert('sidebar');?>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->