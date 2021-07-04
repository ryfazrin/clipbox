<?=$this->layout('index');?>

<!-- Blog Details Post Thumbnail Area Start -->
<!-- <section class="blog-details-post-thumbnail-area bg-overlay bg-img jarallax" style="background-image: url(<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$post['picture'];?>);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="post-title-text">
                    <h2><?=$this->e($pages['title']);?></h2>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Blog Details Post Thumbnail Area End -->

<!-- Blog Details Area Start -->
<section class="blog-details-area section-padding-80">
    <div class="container">

        <!-- Post Details Text -->
        <div class="post-details-text">
            <div class="row justify-content-center">
            	<div class="col-lg-12 mb-5">
            		<div class="text-center post-title-text">
                		<h2><?=$pages['title'];?></h2>                    		
                	</div>
            	</div>
                <div class="col-1 col-md-1 col-lg-1">
                    <!-- Post Share -->
                    <div class="razo-post-share">
                        <h5>Share</h5>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="Facebook" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="Twitter" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="Google Plus" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="Pinterest" class="pinterest"><i class="fa fa-pinterest"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="Instagram" class="instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-9 col-md-9 col-lg-9">
                    <?=htmlspecialchars_decode(html_entity_decode($this->e($pages['content'])));?>
                </div>
                <div class="col-lg-2">
                	
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Area End -->

<!-- Related News Area Start -->
<div class="related-news-area section-padding-80 bg-overlay bg-img jarallax"  style="background-image: url(<?=$this->asset('/img/bg-img/1.jpg')?>);">
    <div class="container">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="section-heading text-center white">
                    <h2>RELATED POSTS</h2>
                </div>
            </div>
        </div>

        <div class="row">
        	<?php
                $posts = $this->post()->getPost('3', 'DESC', WEB_LANG_ID);
                foreach($posts as $list_post){
            ?>
            <!-- Single Blog Item -->
            <div class="col-12 col-sm-6 col-lg-4 razo-blog-masonary-item mb-80">
                <div class="razo-blog-masonary-single-item bg-light">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                        <a href="<?=BASE_URL;?>/detailpost/<?=$list_post['seotitle'];?>">
                        	<img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$list_post['picture'];?>" alt="<?=$list_post['title'];?>">
                        </a>
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                        <div class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i> <?= $this->pocore()->call->podatetime->tgl_indo($list_post['date'])?></div>
                        <a href="<?=BASE_URL;?>/detailpost/<?=$list_post['seotitle'];?>" class="post-title"><?=$list_post['title'];?></a>
                        <a href="<?=BASE_URL;?>/detailpost/<?=$list_post['seotitle'];?>" class="btn read-more-btn"><?=$this->e($front_readmore);?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</div>
<!-- Related News Area End -->