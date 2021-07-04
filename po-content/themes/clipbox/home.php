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
    <section class="uza-news-area section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Post Terbaru</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row razo-blog-masonary">
            <?php
                $posts = $this->post()->getAllPost('6', 'DESC', $this->e($page), WEB_LANG_ID);
                foreach($posts as $list_post){
            ?>
                <!-- Single Blog Item -->
                <div class="col-12 col-sm-6 col-lg-4 razo-blog-masonary-item mb-30">
                    <div class="razo-blog-masonary-single-item">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <a href="<?=BASE_URL;?>/detailpost/<?=$headline['seotitle'];?>"><img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$list_post['picture'];?>" alt="<?=$list_post['title'];?>"></a>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i> <?=$this->pocore()->call->podatetime->tgl_indo($list_post['date']);?></div>
                            <a href="<?=BASE_URL;?>/detailpost/<?=$headline['seotitle'];?>" class="post-title"><?=$list_post['title'];?></a>
                            <p><?=$this->pocore()->call->postring->cuthighlight('post', $list_post['content'], '50');?>...</p>
                            <a href="<?=BASE_URL;?>/detailpost/<?=$headline['seotitle'];?>" class="btn razo-btn"><?=$this->e($front_readmore);?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <!-- <a href="#" class="btn razo-btn mt-30">Load More</a> -->
                    <ul class="pagination">
                        <?=$this->post()->getAllPaging('6', $this->e($page), '1', $this->e($front_paging_prev), $this->e($front_paging_next));?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->