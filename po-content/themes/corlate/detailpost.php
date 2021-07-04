<?=$this->layout('index');?>

<!-- <div class="page-title" style="background-image: url(<?=$this->asset('/images/page-title.png')?>)">
    <h1>Single Blog</h1>
</div> -->


<section id="blog">

    <div class="blog container">
        <div class="row">
            <div class="col-md-8">

                <div class="blog-item">
                    <a href="#"><img class="img-responsive img-blog" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$post['picture'];?>" width="100%" alt="" /></a>
                    <?php if ($post['picture_description'] != '') { ?>
        						    <p class="text-center" style="padding:10px; background:#eee;"><i><?=$post['picture_description'];?></i></p>
        						<?php } ?>
                    <div class="blog-content">
                        <!-- <a href="#" class="blog_cat">UI/UX DESIGN</a> -->
                        <a href="#" class="blog_cat"><?=$this->category()->getCategory($post['id_post'], WEB_LANG_ID);?></a>
                        <h2><a href="<?=BASE_URL;?>/detailpost/<?=$post['seotitle'];?>"><?=$post['title'];?></a></h2>
                        <!-- <h2><a href="blog-item.html">Consequat bibendum quam liquam viverra</a></h2> -->
                        <div class="post-meta">
                            <p>By <a href="#"><?=$this->post()->getAuthorName($post['editor']);?></a></p>
                            <p><i class="fa fa-clock-o"></i> <a href="#"><?=$this->pocore()->call->podatetime->tgl_indo($post['date']);?></a></p>
                            <p><i class="fa fa-comment"></i> <a href="#"><?=$this->post()->getCountComment($post['id_post']);?></a></p>
                            <p><?=$post['hits'];?> kali dikunjungi</p>
                            <p>
                                share:
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-linkedin"></a>
                                <a href="#" class="fa fa-pinterest"></a>
                            </p>
                        </div>
                        <?=htmlspecialchars_decode(html_entity_decode($post['content']));?>

                        <div class="inner-meta">
                            <ul class="tags">
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Donation</a></li>
                                <li><a href="#">Sponsor</a></li>
                                <li><a href="#">People</a></li>
                            </ul>
                            <div class="social-btns">
                                <a href="#"> <i class="fa fa-heart"></i> Like</a>
                                <a href="#" class="tweet-bg"> <i class="fa fa-twitter"></i> tweet</a>
                                <a href="#" class="facebook-bg"> <i class="fa fa-facebook"></i> facebook</a>
                            </div>
                        </div>

                        <div class="comments">
                            <h2>Comments</h2>
                            <div class="single-comment">
                                <div class="comment-img">
                                    <img src="images/graverter.jpg" alt="author">
                                </div>
                                <div class="comment-content">
                                    <h5>Vincent Abbott</h5>
                                    <p>All users on MySpace will know that there are millions of people out there. Every day besides so many people joining this community, there are many others who will be looking out for friends.</p>
                                </div>
                                <div class="comment-count">
                                    <a href="#"><i class="fa fa-reply"></i> Reply (1)</a>
                                    <a href="#"><i class="fa fa-heart"></i> 15</a>
                                </div>
                            </div>
                            <div class="single-comment reply">
                                <div class="comment-img">
                                    <img src="images/graverter.jpg" alt="author">
                                </div>
                                <div class="comment-content">
                                    <h5>Vincent Abbott</h5>
                                    <p>All users on MySpace will know that there are millions of people out there. Every day besides so many people joining this community, there are many others who will be looking out for friends.</p>
                                </div>
                                <div class="comment-count">
                                    <a href="#"><i class="fa fa-reply"></i> Reply (1)</a>
                                    <a href="#"><i class="fa fa-heart"></i> 15</a>
                                </div>
                            </div>
                            <div class="single-comment">
                                <div class="comment-img">
                                    <img src="images/graverter.jpg" alt="author">
                                </div>
                                <div class="comment-content">
                                    <h5>Vincent Abbott</h5>
                                    <p>All users on MySpace will know that there are millions of people out there. Every day besides so many people joining this community, there are many others who will be looking out for friends.</p>
                                </div>
                                <div class="comment-count">
                                    <a href="#"><i class="fa fa-reply"></i> Reply (1)</a>
                                    <a href="#"><i class="fa fa-heart"></i> 15</a>
                                </div>
                            </div>
                            <div class="single-comment">
                                <div class="comment-img">
                                    <img src="images/graverter.jpg" alt="author">
                                </div>
                                <div class="comment-content comment-form">
                                    <form action="#">
                                        <textarea></textarea>
                                        <input type="submit" value="Comment">
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--/.blog-item-->


            </div>
            <!--/.col-md-8-->

            <aside class="col-md-4">
              <?=$this->insert('sidebar');?>
            </aside>
        </div>
        <!--/.row-->
    </div>
</section>
<!--/#blog-->
