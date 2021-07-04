<?=$this->layout('index');?>

<!-- Razo Event Area Start -->
    <section class="razo-events-area section-padding-0-80">
    	<div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12 pt-5">
                    <div class="section-heading text-center">
                        <h2><?=$this->e($page_title);?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
            <?php
				$search = $this->post()->getPostFromSearch('6', 'post.id_post DESC', $this->e($query), $this->e($page), WEB_LANG_ID);
				foreach($search as $post){
			?>
                <!-- Single Razo Event Area -->
                <div class="col-12">
                    <div class="single-razo-event-area d-flex flex-wrap align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Thumbnail -->
                        <div class="event-thumbnail">
                            <img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$post['picture'];?>" alt="<?=$post['title'];?>">
                        </div>
                        <!-- Event Content -->
                        <div class="event-content d-flex align-items-center">
                            <div class="event-text">
                                <h5><?=$post['title'];?></h5>
                                <div class="event-meta">
                                    <a href="#" class="event-date"><i class="icon_calendar"></i> <?=$this->pocore()->call->podatetime->tgl_indo($post['date']);?></a>
                                    <a href="#" class="event-time"><i class="fa fa-user"></i> <?=$this->post()->getAuthorName($post['editor']);?></a>
                                    <a href="#" class="event-address"> <i class="fa fa-comment"></i> <?=$this->post()->getCountComment($post['id_post']);?></a>
                                </div>
                                <p><?=$this->pocore()->call->postring->cuthighlight('post', $post['content'], '100');?>...</p>
                                <!-- <a href="#" class="btn read-more-btn">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> -->
                                <!-- <ul class="event-meta">
                                	<li><i class="icon-folder-open"></i> <?=$this->post()->getPostTag($post['tag']);?></li>
                                </ul> -->
                                <a href="#" class="btn razo-btn"><?=$this->e($front_readmore);?> <i class="fa fa-angle-double-right"></i></a>
                            </div>
                            <!-- Event Purchase Button -->
                            <div class="event-purchase-button">
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>

            <div class="row">
                <!-- <div class="col-12 text-center"> -->
                    <!-- <a href="#" class="btn razo-btn mt-30">Load More</a> -->
                    <div class="col-md-12 text-center" style="margin-top:30px;">
					<ul class="pagination">
						<?=$this->post()->getSearchPaging('6', $this->e($query), $this->e($page), WEB_LANG_ID, '1', $this->e($front_paging_prev), $this->e($front_paging_next));?>
					</ul>
				</div>
                <!-- </div> -->
            </div>
        </div>
    </section>
    <!-- Razo Event Area End -->