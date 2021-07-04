<!-- Insert sidebar script here -->
<div class="widget search">
    <form role="form" action="<?=BASE_URL;?>/search" method="POST">
        <input type="text" class="form-control search_box" autocomplete="off" placeholder="<?=$this->e($front_search);?>...">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>
<!--/.search-->


<div class="widget archieve">
    <h3><?=$this->e($front_categories);?></h3>
    <div class="row">
        <div class="col-sm-12">
            <ul class="blog_archieve">
              <?php
        				$categorys_side = $this->category()->getAllCategory(WEB_LANG_ID);
        				foreach($categorys_side as $category_side){
        			?>
        				<li><a href="<?=BASE_URL;?>/category/<?=$category_side['seotitle'];?>"><?=$category_side['title'];?></a></li>
        			<?php } ?>
            </ul>
        </div>
    </div>
</div>
<!--/.archieve-->

<div class="widget archieve">
    <h3><?=$this->e($front_tag);?></h3>
    <div class="row">
        <div class="col-sm-12">
            <ul class="tag-cloud">
          		<?=$this->post()->getAllTag('RAND()', '30', '&nbsp;', true, '<li>', '</li>', 'btn btn-xs btn-primary');?>
          	</ul>
        </div>
    </div>
</div>
<!--/.archieve-->

<div class="widget popular_post">
    <h3>Popular Post</h3>
    <ul>
      <?php
      	$populars_side = $this->post()->getPopular('3', 'DESC', WEB_LANG_ID);
      	foreach($populars_side as $popular_side){
      ?>
        <li>
            <a href="<?=BASE_URL;?>/detailpost/<?=$popular_side['seotitle'];?>">
                <img src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$popular_side['picture'];?>" alt="">
                <p><?=$popular_side['title'];?> </p>
            </a>
        </li>
      <?php } ?>
    </ul>
</div>
<!--/.archieve-->


<div class="widget blog_gallery">
    <h3>Our Gallery</h3>
    <ul class="sidebar-gallery clearfix">
      <?php
      	$albums = $this->gallery()->getAlbum('8', 'id_album ASC', $this->e($page));
      	foreach($albums as $alb){
      ?>
        <li>
            <a href="<?=BASE_URL.'/gallery/'.$this->e($alb['seotitle']);?>"><img src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$alb['picture'];?>" alt="" /></a>
        </li>
      <?php } ?>
    </ul>
</div>
<!--/.blog_gallery-->

<div class="widget social_icon">
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-linkedin"></a>
    <a href="#" class="fa fa-pinterest"></a>
    <a href="#" class="fa fa-github"></a>
</div>
