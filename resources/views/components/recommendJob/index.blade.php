<section id="recommendJob" class="recommendJob">
    <div class="recommendJobInner">
        <h2 class="recommendJobTitle">
            <span class="ja">新着の求人情報</span>
            <span class="en">NEW JOBS</span>
        </h2>
        <div class="recommendJobBox">

            <div id="recommendJobSlide" class="recommendJobSlide swiper-recommendJobSlide">

            </div>

            <button type="button" class="recommendJobButton recommendJobButtonPrev">
                <svg xmlns="http://www.w3.org/2000/svg" width="18.385" height="28.284" viewBox="0 0 18.385 28.284">
                    <g id="Group_1751" data-name="Group 1751" transform="translate(-1004.092 -1607.961) rotate(45)">
                        <rect id="Rectangle_1427" data-name="Rectangle 1427" width="20" height="6" transform="translate(1850 424)" fill="#fff"/>
                        <rect id="Rectangle_1428" data-name="Rectangle 1428" width="20" height="6" transform="translate(1870 424) rotate(90)" fill="#fff"/>
                    </g>
                </svg>
            </button>
            <button type="button" class="recommendJobButton recommendJobButtonNext">
                <svg xmlns="http://www.w3.org/2000/svg" width="18.385" height="28.284" viewBox="0 0 18.385 28.284">
                    <g id="Group_1751" data-name="Group 1751" transform="translate(-1004.092 -1607.961) rotate(45)">
                        <rect id="Rectangle_1427" data-name="Rectangle 1427" width="20" height="6" transform="translate(1850 424)" fill="#fff"/>
                        <rect id="Rectangle_1428" data-name="Rectangle 1428" width="20" height="6" transform="translate(1870 424) rotate(90)" fill="#fff"/>
                    </g>
                </svg>
            </button>
        </div>
    </div>
</section>

<script>
    $(function() {

        searchRecommendJob();

        function searchRecommendJob() {

            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });
            $.ajax({
                type: 'POST',
                url: "{{ route('ajax.recommendJobs') }}",
                data: {},
            })
                .then((...args) => { // done
                    const [data, textStatus, jqXHR] = args;

                    let dataStr = data;

                    if(dataStr) {
                        let parent = document.getElementById('recommendJobSlide');
                        let div = document.createElement('div');
                        div.className = 'recommendJobList swiper-wrapper';
                        div.innerHTML = dataStr;

                        parent.append(div);
                        $('.recommendJob').show();

                        loadSwiperRecommend();
                    }

                })
                .catch((...args) => { // fail
                    const [jqXHR, textStatus, errorThrown] = args;
                });
        }

        function loadSwiperRecommend() {
            let mySwiperRecommend = new Swiper('.swiper-recommendJobSlide', {
                loop: true,
                effect: 'slide',
                speed: 900,
                slidesPerView: 3,
                spaceBetween: 30,
                centeredSlides: false,
                autoplay: {
                    delay: 3000,
                    stopOnLastSlide: false,
                    disableOnInteraction: false,
                    reverseDirection: false
                },
                navigation: {
                    nextEl: '.recommendJobButtonNext',
                    prevEl: '.recommendJobButtonPrev'
                },
                breakpoints: {
                    767: {
                        slidesPerView: 1,
                        centeredSlides: true
                    }
                },
                simulateTouch: false,
                autoResize: true,
                autoHeight: false,
                resizeReInit: true,
                watchOverflow: true
            });
        }
    });
</script>
