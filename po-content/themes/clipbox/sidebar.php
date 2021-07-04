<!-- Insert sidebar script here -->

    <div class="trending-news-area mb-50">

        <!-- Section Heading -->
        <div>
            <h2>Trending</h2>
        </div>

        <!-- Featured Post Area -->
        <?php
            $posts = $this->post()->getPost('1', 'DESC', WEB_LANG_ID);
            foreach($posts as $list_post){
        ?>
        <!-- <div class="featured-post-area small-featured-post bg-img bg-overlay mb-30" style="background-image: url(<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$list_post['picture'];?>);"> -->
            <!-- Post Overlay -->
            <!-- <div class="post-overlay">
                <div class="post-meta">
                    <a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $list_post);?>#comments"><i class="fa fa-comments-o" aria-hidden="true"></i> <?=$this->post()->getCountComment($list_post['id_post']);?> </a>
					<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?=$list_post['hits'];?></a>
                </div>
                <a href="single-blog.html" class="post-title"><?=$list_post['title'];?></a>
            </div>
        </div> -->
    	<?php
    	 }

        $headlines = $this->post()->getHeadline('6', 'DESC', WEB_LANG_ID);
            foreach($headlines as $headline){
        ?>
        <!-- Single Post Area -->
        <div class="razo-single-post d-flex mb-30">
            <!-- Post Thumbnail -->
            <div class="post-thumbnail">
                <a href="single-blog.html"><img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$headline['picture'];?>" alt=""></a>
            </div>
            <!-- Post Content -->
            <div class="post-content">
                <div class="post-meta">
                    <a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $headline);?>#comments"><i class="fa fa-comments-o" aria-hidden="true"></i> <?=$this->post()->getCountComment($headline['id_post']);?> </a>
                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?=$headline['hits'];?></a>
                </div>
                <a href="<?=BASE_URL;?>/detailpost/<?=$list_post['seotitle'];?>" class="post-title" style="font-size: 15px;"><?=$headline['title'];?></a>
            </div>
        </div>
        <?php } ?>
    </div>
    <div class="trending-news-area mb-50">
        <div>
            <h2>Kategori</h2>
        </div>
        <ul>
            <?php
                $categorys_side = $this->category()->getAllCategory(WEB_LANG_ID);
                foreach($categorys_side as $category_side){
            ?>
                <li><a href="<?=BASE_URL;?>/category/<?=$category_side['seotitle'];?>"><?=$category_side['title'];?></a></li>
            <?php } ?>
        </ul>
    </div>