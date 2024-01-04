<?php
$sliderImgList = array(
    'pc' => array(
        'top_img_main_01_pc.png',
        'top_img_main_02_pc.png',
        'top_img_main_03_pc.png',
    ),
    'sp' => array(
        'top_img_main_01_sp.png',
        'top_img_main_02_sp.png',
        'top_img_main_03_sp.png',
    ),
);

?>

@if(($sliderImgList['pc'] && count($sliderImgList['pc']) > 0) || ($sliderImgList['sp'] && count($sliderImgList['sp']) > 0))

<div id="mvSlider">
    <div class="mvWrapper">
        <div class="mvInner">
            <?php
            $imgListPc = $sliderImgList[ 'pc' ];
            $imgListSp = $sliderImgList[ 'sp' ];
            ?>
            <?php if(count($imgListPc) == 1): ?>
            <div class="mvOnlyOne">
                <picture>
                    <source media="(max-width: 767px)" srcset="{{asset('images/mvSlider/'. $imgListSp[0])}}">
                    <source media="(min-width: 768px)" srcset="{{asset('images/mvSlider/'. $imgListPc[0])}}">
                    <img class="mvPicture" src="{{asset('images/mvSlider/'. $imgListPc[0])}}" alt="<?php echo $mvCatchCopy; ?>">
                </picture>
            </div>
            <?php elseif(count($imgListPc) > 1): ?>
            <div class="mvMultiple js-mvSlider">
                <div class="swiper-wrapper">
                    <?php
                    $num = 1;
                    foreach($imgListPc as $key => $imgName): ?>

                    <?php
                    $number = $num++;
                    if($number == 1){
                        $mvCatchCopy = 'いろいろな職種のイメージ';
                    } elseif ($number == 2){
                        $mvCatchCopy = '手を挙げてジャンプする三人';
                    } elseif ($number == 3){
                        $mvCatchCopy = '笑顔でスーツを着た女性社員';
                    }
                    ?>
                    <div class="swiper-slide">
                        <picture>
                            <source media="(max-width: 767px)" srcset="{{asset('images/mvSlider/'. $imgListSp[$key])}} 2x">
                            <source media="(min-width: 768px)" srcset="{{asset('images/mvSlider/'. $imgName)}} 2x">
                            <img class="mvPicture" src="{{asset('images/mvSlider/'. $imgName)}}" alt="<?php echo $mvCatchCopy; ?>">
                        </picture>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button swiper-button-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.385" height="28.284" viewBox="0 0 18.385 28.284">
                        <g id="Group_2039" data-name="Group 2039" transform="translate(1022.476 1636.245) rotate(-135)">
                            <rect id="Rectangle_1427" data-name="Rectangle 1427" width="20" height="6" transform="translate(1850 424)" fill="#fff"/>
                            <rect id="Rectangle_1428" data-name="Rectangle 1428" width="20" height="6" transform="translate(1870 424) rotate(90)" fill="#fff"/>
                        </g>
                    </svg>
                </div>
                <div class="swiper-button swiper-button-next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.385" height="28.284" viewBox="0 0 18.385 28.284">
                        <g id="Group_1751" data-name="Group 1751" transform="translate(-1004.092 -1607.961) rotate(45)">
                            <rect id="Rectangle_1427" data-name="Rectangle 1427" width="20" height="6" transform="translate(1850 424)" fill="#fff"/>
                            <rect id="Rectangle_1428" data-name="Rectangle 1428" width="20" height="6" transform="translate(1870 424) rotate(90)" fill="#fff"/>
                        </g>
                    </svg>
                </div>
            </div>
            <?php endif; ?>
            <a href="#template01">
                <div class="scrollDownGuide">
                    SCROLL DOWN
                </div>
            </a>
        </div>
    </div>

    <script>
        $(function() {
            var mySwiperTop = new Swiper('#mvSlider .js-mvSlider', {// Swiperオプション
                loop: true,
                speed: 1000,
                // effect: 'horizontal',// アニメーションを指定（'slide' 'fade' 'coverflow' 'flip'）
                loopedSlides: 3,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                autoplay: {
                    delay: 3000,// スライド間の間隔（3000=3秒）
                    stopOnLastSlide: false,
                    disableOnInteraction: false,
                    reverseDirection: false
                },
                breakpoints: {
                    767: {// スマホのみ
                        speed: 1000,// 移動速度（3000=3秒）
                        autoplay: {
                            delay: 3000,// スライド間の間隔（3000=3秒）
                        }
                    }
                },
                slidesPerView: 1,
                spaceBetween: 0,
                centeredSlides: false,
                simulateTouch: false,
                autoResize: false,
                autoHeight: false,
                resizeReInit: true,
                watchOverflow: true
            });
            $('#mvSlider .mvMultiple .swiper-slide').on('touchmove', function(){
                return true;
            });
        });
    </script>
</div>

@endif
