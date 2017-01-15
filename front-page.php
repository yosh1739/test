<?php
/*
Template Name: トップページテンプレート
*/
?>

<?php get_header(); ?>

<section id="topguide">
	<!-- begin topGuideBox -->
	 <div id="topGuideBox" class="clearfix">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- 1-slide-sta -->
                <div class="swiper-slide">
                    <div class="feature-box-main-title">【女子必見！】桃山高校自然科学科”リケジョ”に聞いた！＜高校生活編＞</div>
                    <div class="trim">
                        <a href="http://www.manavate.info/20170110150204/"><img src="<?php echo get_template_directory_uri(); ?>/images/slide-momo.jpg" class="desktopHidden" id="slide-1"></a></div>
                </div>
                <!-- 1-slide-fin-->
                <!-- 2-slide-sta -->
                <div class="swiper-slide">
                    <h3 class="feature-box-main-title">食べれば合格!?京都の専門学科名前入り！ゲン担ぎの食べ物</h3>
                    <div class="trim">
                        <a href="http://www.manavate.info/20161222223552/"><img src="<?php echo get_template_directory_uri(); ?>/images/slide-2.jpg" class="desktopHidden" id="slide-2"></a></div>
                </div>
                <!-- 2-slide-fin -->
                <!-- 3-slide-sta -->
                <div class="swiper-slide">
                    <h3 class="feature-box-main-title">合格者が語る！
        「中学1・2年の過ごし方」3ヶ条</h3>
                    <div class="trim">
                        <a href="http://www.manavate.info/20161110165315/">
        <img src="<?php echo get_template_directory_uri(); ?>/images/slide-3.jpg" class="desktopHidden" id="slide-3"></a></div>
                </div>
                <!-- 3-slide-fin -->
                <div class="swiper-slide">
        <!-- <div class="layer"></div> -->
        <div class="feature-box-main-title">-西京前高校校長村上先生が語る-</br>西京高校への道程</div>
        <div class="trim">
            <a href="http://www.manavate.info/20160921224529/"><img src="<?php echo get_template_directory_uri(); ?>/images/slide-4.jpg" class="desktopHidden" id="slide-4"></a></div>
	</div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <script>
                var swiper = new Swiper('.swiper-container', {
                    pagination: '.swiper-pagination',
                    paginationClickable: true,
                    parallax: true,
                    autoplay: 3500,
                    speed: 600,
                    nextButton: '.swiper-button-next',
                    prevButton: '.swiper-button-prev',
                });
            </script>
        </div>
    </div>

    <!-- スマホ画面終わり -->
	<!-- end topGuideBox -->
</section>


	<!-- begin contentsWrapper -->
	<div id="contentsWrapper" class="clearfix">

		<!-- begin contents -->
		<div id="contents">
			<section id="archive">
				<div id="archiveBox">
				<h2 class="large-title">ブランチを作成してみました。/h2>
					<ul>
	
<?php
$postlist = get_posts(array(
	"cat" => -1,
	"numberposts" => 10,
));
foreach($postlist as $post):
setup_postdata($post);
?>
						<li class="clearfix">
							<article>
							<?php
$days = 10; //Newを表示させたい期間の日数
$today = date_i18n('U');
$entry = get_the_time('U');
$kiji = date('U',($today - $entry)) / 86400 ;
if( $days > $kiji ){ ?>
<div class="article-list-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/New-logo.png"></div> 
<?php } ?>
								<div class="left_box js-matchHeight">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail( array(280,173) ); ?>
									</a>
								</div>
								<div class="right_box js-matchHeight">
									<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
									<div class="bot_box clearfix">
										<p class="article_categ">
											<?php the_category(' > ', 'multiple', ''); ?>
										</p>
										<p class="article_tag">
                                            <?php the_tags('','', ''); ?>
                                        </p>
										<p class="article_date"><?php the_time('Y年n月j日'); ?></p>
									</div>
								</div>
							</article>
						</li>
<?php
endforeach;
wp_reset_postdata();
?>						
					</ul>
					<a class="btn center-block" href="/articles/">新着記事一覧<span class="glyphicon glyphicon-play-circle"></span></a>
				</div>
			</section>
			<section id="sidebar">
			    <?php get_sidebar(); ?>
			</section>	
		</div>
		<!-- end contents -->
		
	</div>
	<!-- end contentsWrapper -->


<?php get_footer(); ?>