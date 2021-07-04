<?=$this->layout('index');?>

<section id="blog">
    <div class="center">
      <h2><?=$this->e($page_title);?></h2>
    </div>

    <div class="blog container">
        <div class="row">
            <div class="col-md-8">

              <?php
                $search = $this->post()->getPostFromSearch('3', 'post.id_post DESC', $this->e($query), $this->e($page), WEB_LANG_ID);
    						foreach($search as $post){
    					?>
                <div class="blog-item">
                    <img class="img-responsive img-blog" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$post['picture'];?>" width="100%" alt="" />
                    <div class="blog-content">
                      <a href="<?=BASE_URL;?>/detailpost/<?=$post['seotitle'];?>"><img class="img-responsive img-blog" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$post['picture'];?>" width="100%" alt="" /></a>
								<h2><a href="<?=BASE_URL;?>/detailpost/<?=$post['seotitle'];?>"><?=$post['title'];?></a></h2>
								<h3><?=$this->pocore()->call->postring->cuthighlight('post', $post['content'], '200');?>...</h3>
								<a class="btn btn-primary readmore" href="<?=BASE_URL;?>/detailpost/<?=$post['seotitle'];?>">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
              <?php } ?>
                <!--/.blog-item-->

            </div>
            <!--/.col-md-8-->

            <aside class="col-md-4">
              <?=$this->insert('sidebar');?>
            </aside>

        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="pagination pagination-lg">
                  <?=$this->post()
                    ->getCategoryPaging(
                      '3',
                      $category,
                      $this->e($page),
                      '1',
                      $this->e($front_paging_prev),
                      $this->e($front_paging_next)
                    );
                    ?>
                    <!-- <li><a href="#"><i class="fa fa-long-arrow-left"></i></a></li>
                    <li><a href="#"><i class="fa fa-long-arrow-right"></i></a></li> -->
                </ul>
                <!--/.pagination-->
            </div>
        </div>
    </div>
</section>
<!--/#blog-->
