<?=$this->layout('index');?>

<div class="page-title" style="background-image: url(<?=$this->asset('/images/page-title.png')?>)">
    <h1><?=$this->e($pages['title']);?></h1>
</div>

<section id="about-us">
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-7">
                <div class="about-img">
                    <img src="<?=$this->asset('/images/about-img.png')?>" alt="">
                </div>
            </div> -->
            <div class="col-md-12">
                <div class="about-content">
                    <!-- <h2>PopojiCMS</h2> -->
                    <?=htmlspecialchars_decode(html_entity_decode($this->e($pages['content'])));?>
                </div>
            </div>
        </div>
    </div>
</section>
