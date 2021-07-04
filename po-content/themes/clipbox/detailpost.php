<?=$this->layout('index');?>

<!-- Blog Details Area Start -->
<section class="blog-details-area section-padding-80">
    <div class="container">
        <div class="section-heading text-center">
            <h2><?=$post['title'];?></h2>                           
        </div>

        <!-- Post Details Text -->
        <div class="post-details-text">
            <div class="row justify-content-center">

                <div class="col-12 col-md-8 col-lg-8">
                    <div>
                        <i class="icon_calendar rezo-color"></i> <a href="#"><?=$this->pocore()->call->podatetime->tgl_indo($post['date']);?></a>
                        <i class="icon_profile rezo-color"></i> Ditulis oleh <a href="#"><?=$this->post()->getAuthorName($post['editor']);?></a>
                    </div>
                    <img class="img-thumbnail mb-2" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$post['picture'];?>">
                    <!-- post share -->
                    <div class="razo-post-share d-flex">
                        <h6 class="d-inline-block">Bagikan :</h6>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="Facebook" class="facebook ml-1 mr-1"><i class="fa fa-facebook"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="Twitter" class="twitter mr-1"><i class="fa fa-twitter"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="Instagram" class="instagram mr-1"><i class="fa fa-instagram"></i></a>
                    </div>

                    <?=htmlspecialchars_decode(html_entity_decode($post['content']));?>

                    <!-- Post Catagories -->
                    <div class="d-flex align-items-center justify-content-between">
                        <!-- Post Catagories -->
                        <div class="post-catagories">
                            <ul class="d-flex flex-wrap align-items-center">
                                <li><i class="fa fa-tag"></i> Tag:</li>
                                <?php
                                	// param:
                                	// 1. tag
                                	// 2. pemisah
                                	// 3. tag buka
                                	// 4. tag tutup
                                ?>
                                <?=$this->post()->getPostTag($post['tag'], '', '<li>', '</li>');?>
                            </ul>
                        </div>
                    </div>

                <?php if ($post['comment'] == 'Y') { ?>
                    <!-- Comments Area -->
                    <div id="comments" class="comment_area mb-50 clearfix">
                        <h5 class="title"><span><?=$this->post()->getCountComment($post['id_post']);?></span> <?=$this->e($front_comment);?></h5>
                        <?php
						$com_parent = $this->post()->getCommentByPost($post['id_post'], '6', 'DESC', $this->e($page));
						$com_template = array(
							'parent_tag_open' => '<li class="single_comment_area" id="li-comment-{$comment_id}">',
							'parent_tag_close' => '</li>',
							'child_tag_open' => '<ol class="children">',
							'child_tag_close' => '</ol>',
							'comment_list' => '
								<!-- Comment Content -->
                                <div id="comment-{$comment_id}" class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="{$comment_avatar}" alt="author">
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <a href="{$comment_url}" class="author-name">{$comment_name} <span class="post-date">- {$comment_datetime}</span></a>
                                        <p>{$comment_content}</p>
                                        <a href="#" class="like">Like</a>
                                        <a class="reply" id="{$comment_id}" href="#respond" title="'.$this->e($comment_reply).'">Reply</a>
                                    </div>
                                </div>
							'
						);
					?>
                        <ol>
                        	<?=$this->post()->generateComment($com_parent, 'DESC', $com_template);?>
                        </ol>
                    </div>

                    <script type='text/javascript'>  
						$(function(){  
							$("a.reply").click(function() {
								var id = $(this).attr("id");
								$("#id_parent").val(id);
							});
							return true;
						});
					</script>  

                    <!-- Leave A Reply -->
                    <div id="respond" class="razo-contact-form">
                        <h2 class="mb-4"><?=$this->e($front_leave_comment);?></h2>
                        <?=$this->pocore()->call->poflash->display();?>

                        <!-- Form -->
                        <form action="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $post);?>#comments" method="post" id="commentform">
                        	<input type="hidden" name="id_parent" id="id_parent" value="0" />
							<input type="hidden" name="id" name="id" value="<?=$post['id_post'];?>" />
							<input type="hidden" name="seotitle" id="seotitle" value="<?=$post['seotitle'];?>" />
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="name" id="name" value="<?=(isset($_POST['name']) ? $_POST['name'] : '');?>" class="form-control mb-30" placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" name="email" id="email" value="<?=(isset($_POST['email']) ? $_POST['email'] : '');?>" class="form-control mb-30" placeholder="Email">
                                </div>
                                <div class="col-12">
                                    <textarea  name="comment" class="form-control mb-30" placeholder="Comment"><?=(isset($_POST['comment']) ? $_POST['comment'] : '');?></textarea>
                                </div>
                                <div class="col-12">
                                	<div class="g-recaptcha" data-sitekey="<?=$this->pocore()->call->posetting[21]['value'];?>"></div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" id="submit-button" tabindex="5" class="btn razo-btn btn-3 mt-15"><?=$this->e($comment_submit);?></button>
                                </div>
                            </div>
                        </form>
                        <script type="text/javascript">
							$("#commentform").validate();
						</script>
                    </div>
                <?php } ?>
                </div>

                <div class="col-12 col-md-4 col-lg-4">
                    <?=$this->insert('sidebar');?>
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