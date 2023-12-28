@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="contentArea">

        {{--html埋め込み部分 start--}}

        <div id="businessPage">

            <div class="mainBanner">
                <div class="inner">
                    <div class="bannerContent">
                        <div class="list_person_icon">
                            <picture class="item_person_icon icon-person01">
                                <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_banner_icon01_sp.png')}} 2x">
                                <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/business/business_banner_icon01_pc.png')}} 2x">
                                <img src="{{asset('images/contentBox/business/business_banner_icon01_pc.png')}}" alt="">
                            </picture>
                            <picture class="item_person_icon icon-person02">
                                <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_banner_icon02_sp.png')}} 2x">
                                <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/business/business_banner_icon02_pc.png')}} 2x">
                                <img src="{{asset('images/contentBox/business/business_banner_icon02_pc.png')}}" alt="">
                            </picture>
                        </div>
                        <div class="headingBanner">
                            <h1 class="heading-main">
                                <span class="ttl-ja c-l-v2">事業紹介</span>
                                <span class="ttl-en b-g">BUSINESS</span>
                            </h1>
                        </div>
                    </div>
                </div>

            </div>

            <div class="header-btn">
                <div class="inner">
                    <div class="headerBtn-list">
                        <div class="headerBtn-item item01" data-aos="fade-up">
                            <a class="scroll" href="#business01">
                                <picture class="icon">
                                    <source srcset="{{asset('images/contentBox/business/business_header_btn_icon01_pc.png')}} 2x">
                                    <img src="{{asset('images/contentBox/business/business_header_btn_icon01_pc.png')}}" alt="">
                                </picture>
                                <div class="btnInfo">
                                    <p class="t1 c-l-v2">ネイヴルソリューションスタッフで</p>
                                    <p class="t2 c-l-v2">派遣社員として<br/>働く魅力</p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                    <g id="Group_2385" data-name="Group 2385" transform="translate(-697 -6198)">
                                        <circle id="Ellipse_118" data-name="Ellipse 118" cx="16" cy="16" r="16" transform="translate(697 6198)" fill="#0d0d0d"/>
                                        <path id="Union_25" data-name="Union 25" d="M-1408.5-29a1,1,0,0,1-1-1v-7.4h-7.4a1,1,0,0,1-1-1V-40a1,1,0,0,1,1-1h10a1,1,0,0,1,1,1v10a1,1,0,0,1-1,1Z" transform="translate(-309.627 7185.609) rotate(135)" fill="#fff"/>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div class="headerBtn-item item02" data-aos="fade-up">
                            <a class="scroll" href="#business02">
                                <picture class="icon">
                                    <source srcset="{{asset('images/contentBox/business/business_header_btn_icon02_pc.png')}} 2x">
                                    <img src="{{asset('images/contentBox/business/business_header_btn_icon02_pc.png')}}" alt="">
                                </picture>
                                <div class="btnInfo">
                                    <p class="t2 c-l-v2">初めての方へ</p>
                                    <p class="t1 c-l-v2">人材派遣の仕組み</p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                    <g id="Group_2385" data-name="Group 2385" transform="translate(-697 -6198)">
                                        <circle id="Ellipse_118" data-name="Ellipse 118" cx="16" cy="16" r="16" transform="translate(697 6198)" fill="#0d0d0d"/>
                                        <path id="Union_25" data-name="Union 25" d="M-1408.5-29a1,1,0,0,1-1-1v-7.4h-7.4a1,1,0,0,1-1-1V-40a1,1,0,0,1,1-1h10a1,1,0,0,1,1,1v10a1,1,0,0,1-1,1Z" transform="translate(-309.627 7185.609) rotate(135)" fill="#fff"/>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="headerBtn-bottom">
                        <div class="btn-bottom" data-aos="fade-up">
                            <a class="scroll" href="#business03">
                                <picture class="icon">
                                    <source srcset="{{asset('images/contentBox/business/business_header_btn_icon03_pc.png')}} 2x">
                                    <img src="{{asset('images/contentBox/business/business_header_btn_icon03_pc.png')}}" alt="">
                                </picture>
                                <div class="btnInfo">
                                    <p class="text c-l-v2">ネイヴルソリューションスタッフの<span>正社員をご検討の方へ</span></p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                    <g id="Group_2385" data-name="Group 2385" transform="translate(-697 -6198)">
                                        <circle id="Ellipse_118" data-name="Ellipse 118" cx="16" cy="16" r="16" transform="translate(697 6198)" fill="#fff"/>
                                        <path id="Union_25" data-name="Union 25" d="M-1408.5-29a1,1,0,0,1-1-1v-7.4h-7.4a1,1,0,0,1-1-1V-40a1,1,0,0,1,1-1h10a1,1,0,0,1,1,1v10a1,1,0,0,1-1,1Z" transform="translate(-309.627 7185.609) rotate(135)" fill="#0d0d0d"/>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="business01" class="business-working">

                <picture class="business-working-bg bg01">
                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_bg_icon01_sp.png')}} 2x">
                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/business/business_bg_icon01_pc.png')}} 2x">
                    <img src="{{asset('images/contentBox/business/business_bg_icon01_pc.png')}}" alt="">
                </picture>
                <picture class="business-working-bg bg02">
                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_bg_icon02_sp.png')}} 2x">
                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/business/business_bg_icon02_pc.png')}} 2x">
                    <img src="{{asset('images/contentBox/business/business_bg_icon02_pc.png')}}" alt="">
                </picture>
                <picture class="business-working-bg bg03">
                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_bg_icon03_sp.png')}} 2x">
                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/business/business_bg_icon03_pc.png')}} 2x">
                    <img src="{{asset('images/contentBox/business/business_bg_icon03_pc.png')}}" alt="">
                </picture>
                <picture class="business-working-bg bg04">
                    <source srcset="{{asset('images/contentBox/business/business_bg_icon04_pc.png')}} 2x">
                    <img src="{{asset('images/contentBox/business/business_bg_icon04_pc.png')}}" alt="">
                </picture>
                <picture class="business-working-bg bg05">
                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_bg_icon05_sp.png')}} 2x">
                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/business/business_bg_icon05_pc.png')}} 2x">
                    <img src="{{asset('images/contentBox/business/business_bg_icon05_pc.png')}}" alt="">
                </picture>


                <div class="inner">
                    <picture class="business-working-bg bg06">
                        <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_bg_icon06_sp.png')}} 2x">
                        <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/business/business_bg_icon06_pc.png')}} 2x">
                        <img src="{{asset('images/contentBox/business/business_bg_icon06_pc.png')}}" alt="">
                    </picture>
                    <div class="header-entry">
                        <picture class="icon" data-aos="fade-up">
                            <source srcset="{{asset('images/contentBox/business/business_heading_icon01_pc.png')}} 2x">
                            <img src="{{asset('images/contentBox/business/business_heading_icon01_pc.png')}}" alt="">
                        </picture>
                        <h2 class="headingBusiness-block" data-aos="fade-up">
                            <span class="t1">ネイヴルソリューションスタッフで</span>
                            <span class="t2">派遣社員として働く<br class="sp-br"/><strong>3つの魅力</strong></span>
                        </h2>
                        <p class="descriptionBusiness" data-aos="fade-up">株式会社ネイヴルソリューションスタッフは1986年創業、1999年に設立し、北海道に根付いた総合人材サービスを展開しております。企業と皆様の素晴らしい出会いを演出することを目標としております。仕事が充実すれば休日がもっと楽しくなる。<br/>あなたの力を活かしてみませんか？</p>
                    </div>
                    <div class="business-working-list">
                        <div class="business-working-item" data-aos="fade-up">
                            <div class="itemBox">
                                <span class="ttl c-l-v2">魅力</span>
                                <span class="number b-g">1</span>
                            </div>
                            <div class="workingInfo">
                                <h3 class="title">あなた専任の担当者が<br/>二人三脚で就業をフォロー！</h3>
                                <p class="text">就業中はあなたの選任の担当者が二人三脚でフォローします！<br/>あなたにあったお仕事のご紹介から、就業後のお悩み等のご相談、満期後の新しいお仕事のご紹介まで、専任の担当者が就くので安心してお仕事をしていただけます！</p>
                            </div>
                            <div class="imageContent">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_image01_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/business/business_image01_pc.png')}}">
                                    <img src="{{asset('images/contentBox/business/business_image01_pc.png')}}" alt="">
                                </picture>
                            </div>
                        </div>
                        <div class="business-working-item" data-aos="fade-up">
                            <div class="itemBox">
                                <span class="ttl c-l-v2">魅力</span>
                                <span class="number b-g">2</span>
                            </div>
                            <div class="workingInfo">
                                <h3 class="title">希望を叶えるマッチングで<br/>あなたに合ったお仕事をご紹介！</h3>
                                <p class="text">働き方や収入面などあなたのご要望をしっかりお伺いして、希望になるべく沿ったお仕事をご紹介します。<br/>万が一、就業後にお仕事や就業先との相性が合わなかった場合でも、別のお仕事をしっかりご紹介するのでご安心ください。</p>
                            </div>
                            <div class="imageContent">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_image02_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/business/business_image02_pc.png')}}">
                                    <img src="{{asset('images/contentBox/business/business_image02_pc.png')}}" alt="">
                                </picture>
                            </div>
                        </div>
                        <div class="business-working-item" data-aos="fade-up">
                            <div class="itemBox">
                                <span class="ttl c-l-v2">魅力</span>
                                <span class="number b-g">3</span>
                            </div>
                            <div class="workingInfo">
                                <h3 class="title">幅広い業種から<br/>やりたい仕事が見つかる！</h3>
                                <p class="text">当社では、一般事務から製造業、物流倉庫でのピッキング等様々な職種をご紹介しております。<br/>今までのスキルを活かして、高時給を狙ったり、未経験から新しい職種にチャレンジしたり、今のあなたに合った働き方ややりたいお仕事をご紹介することが可能です。</p>
                            </div>
                            <div class="imageContent">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_image03_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/business/business_image03_pc.png')}}">
                                    <img src="{{asset('images/contentBox/business/business_image03_pc.png')}}" alt="">
                                </picture>
                            </div>
                        </div>
                    </div>

                    <div id="telContactBanner">
                        <x-contentBox.telContactBanner />
                    </div>

                </div>
            </div>

            <div id="business02" class="beginner-guide">

                <picture class="beginner-guide-bg bg01">
                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_beginner_guide_bg_icon01_sp.png')}} 2x">
                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/business/business_beginner_guide_bg_icon01_pc.png')}} 2x">
                    <img src="{{asset('images/contentBox/business/business_beginner_guide_bg_icon01_pc.png')}}" alt="">
                </picture>
                <picture class="beginner-guide-bg bg03">
                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_beginner_guide_bg_icon03_sp.png')}} 2x">
                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/business/business_beginner_guide_bg_icon03_pc.png')}} 2x">
                    <img src="{{asset('images/contentBox/business/business_beginner_guide_bg_icon03_pc.png')}}" alt="">
                </picture>
                <picture class="beginner-guide-bg bg04">
                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_beginner_guide_bg_icon04_sp.png')}} 2x">
                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/business/business_beginner_guide_bg_icon04_pc.png')}} 2x">
                    <img src="{{asset('images/contentBox/business/business_beginner_guide_bg_icon04_pc.png')}}" alt="">
                </picture>
                <picture class="beginner-guide-bg bg05">
                    <source srcset="{{asset('images/contentBox/business/business_beginner_guide_bg_icon05_pc.png')}} 2x">
                    <img src="{{asset('images/contentBox/business/business_beginner_guide_bg_icon05_pc.png')}}" alt="">
                </picture>
                <picture class="beginner-guide-bg bg06">
                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_beginner_guide_bg_icon06_sp.png')}} 2x">
                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/business/business_beginner_guide_bg_icon06_pc.png')}} 2x">
                    <img src="{{asset('images/contentBox/business/business_beginner_guide_bg_icon06_pc.png')}}" alt="">
                </picture>

                <div class="inner">
                    <picture class="beginner-guide-bg bg02">
                        <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_beginner_guide_bg_icon02_sp.png')}} 2x">
                        <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/business/business_beginner_guide_bg_icon02_pc.png')}} 2x">
                        <img src="{{asset('images/contentBox/business/business_beginner_guide_bg_icon02_pc.png')}}" alt="">
                    </picture>
                    <div class="header-entry">
                        <picture class="icon" data-aos="fade-up">
                            <source srcset="{{asset('images/contentBox/business/business_heading_icon02_pc.png')}} 2x">
                            <img src="{{asset('images/contentBox/business/business_heading_icon02_pc.png')}}" alt="">
                        </picture>
                        <h2 class="headingBusiness-block" data-aos="fade-up">
                            <span class="t2">初めての方へ</span>
                            <span class="t3">人材派遣の仕組み</span>
                        </h2>
                    </div>

                    <div class="about-worker-dispatch" data-aos="fade-up">
                        <h3 class="title" data-aos="fade-up">労働者派遣について</h3>
                        <div class="workerContent">
                            <div class="textContent" data-aos="fade-up">
                                <ol>
                                    <li>派遣会社と雇用契約を締結し、派遣会社から紹介された『派遣先企業』で働くという勤務形態です。</li>
                                    <li>『直接雇用』との大きな違いは『雇用主』と『就業先』の会社が異なる点となります。</li>
                                    <li>雇用管理（給与支払いや保険加入手続き等）は『雇用主』である派遣会社が、業務の指揮命令は『就業先』である派遣先企業が行います。</li>
                                </ol>
                            </div>
                            <div class="imageContent" data-aos="fade-up">
                                <picture class="image">
                                    <source srcset="{{asset('images/contentBox/business/business_image04_pc.png')}}">
                                    <img src="{{asset('images/contentBox/business/business_image04_pc.png')}}" alt="">
                                </picture>
                            </div>
                        </div>
                    </div>

                    <div class="advantages-seasonal-employees">
                        <div class="titleBox" data-aos="fade-up">
{{--                            <picture class="icon">--}}
{{--                                <source srcset="{{asset('images/contentBox/business/business_icon01_pc.png')}} 2x">--}}
{{--                                <img src="{{asset('images/contentBox/business/business_icon01_pc.png')}}" alt="">--}}
{{--                            </picture>--}}
                            <p class="ttl">派遣社員として働くメリット</p>
                        </div>
                        <div class="advantages-slider" data-aos="fade-up">
                            <div class="advantagesList-slider">
                                <ul class="advantagesList swiper-wrapper">
                                    <li class="advantagesItem swiper-slide">
                                        <picture class="image">
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_image05_sp.png')}}">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/business/business_image05_pc.png')}}">
                                            <img src="{{asset('images/contentBox/business/business_image05_pc.png')}}" alt="">
                                        </picture>
                                        <div class="infoItem">
                                            <h4 class="ttl">
                                                <span class="num b-g">1</span>
                                                <span class="txt">自身のキャリアプランに<br/>沿ったオシゴトを見つけるチャンス</span>
                                            </h4>
                                            <p class="text">ひとりでは見つけられなかったオシゴトも、派遣会社が一緒に探しますので、見つかるチャンスが広がります。</p>
                                        </div>
                                    </li>
                                    <li class="advantagesItem swiper-slide">
                                        <picture class="image">
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_image06_sp.png')}}">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/business/business_image06_pc.png')}}">
                                            <img src="{{asset('images/contentBox/business/business_image06_pc.png')}}" alt="">
                                        </picture>
                                        <div class="infoItem">
                                            <h4 class="ttl">
                                                <span class="num b-g">2</span>
                                                <span class="txt">大手企業や地元の優良企業で<br class="pc-br"/>働くチャンス</span>
                                            </h4>
                                            <p class="text">大手企業などに直接雇用されるのは難しい場合がありますが、まずは派遣社員として就業し、そこで評価されれば直接雇用されるチャンスが広がります。</p>
                                        </div>
                                    </li>
                                    <li class="advantagesItem swiper-slide">
                                        <picture class="image">
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_image07_sp.png')}}">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/business/business_image07_pc.png')}}">
                                            <img src="{{asset('images/contentBox/business/business_image07_pc.png')}}" alt="">
                                        </picture>
                                        <div class="infoItem">
                                            <h4 class="ttl">
                                                <span class="num b-g">3</span>
                                                <span class="txt">ワークライフバランスに<br/>合わせてオシゴトができます</span>
                                            </h4>
                                            <p class="text">勤務時間や勤務日数など希望に合わせたオシゴト選びが可能ですので、ワークライフバランスに合わせてオシゴトができます。</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="swiper-button swiper-button-prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6" viewBox="0 0 11.056 17.009">
                                        <g id="Group_2039" data-name="Group 2039" transform="translate(1016.839 1624.97) rotate(-135)">
                                            <rect id="Rectangle_1427" data-name="Rectangle 1427" width="12.027" height="3.608" rx="1" transform="translate(1850 424)" fill="#fff"/>
                                            <rect id="Rectangle_1428" data-name="Rectangle 1428" width="12.027" height="3.608" rx="1" transform="translate(1862.027 424) rotate(90)" fill="#fff"/>
                                        </g>
                                    </svg>
                                </div>
                                <div class="swiper-button swiper-button-next">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6" viewBox="0 0 11.056 17.009">
                                        <g id="chevron" transform="translate(72.056 813.646) rotate(180)">
                                            <g id="Group_2039" data-name="Group 2039" transform="translate(1077.839 2421.608) rotate(-135)">
                                                <rect id="Rectangle_1427" data-name="Rectangle 1427" width="12.027" height="3.608" rx="1" transform="translate(1850 424)" fill="#fff"/>
                                                <rect id="Rectangle_1428" data-name="Rectangle 1428" width="12.027" height="3.608" rx="1" transform="translate(1862.027 424) rotate(90)" fill="#fff"/>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="process-working">
                        <div class="titleBox" data-aos="fade-up">
{{--                            <picture class="icon">--}}
{{--                                <source srcset="{{asset('images/contentBox/business/business_icon02_pc.png')}} 2x">--}}
{{--                                <img src="{{asset('images/contentBox/business/business_icon02_pc.png')}}" alt="">--}}
{{--                            </picture>--}}
                            <p class="ttl">派遣社員として働くまでの流れ</p>
                        </div>
                        <ul class="processWorking-list">
                            <li class="processWorking-item" data-aos="fade-up">
                                <span class="boxStep b-g">STEP 1</span>
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_image08_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/business/business_image08_pc.png')}}">
                                    <img src="{{asset('images/contentBox/business/business_image08_pc.png')}}" alt="">
                                </picture>
                                <p class="text">まず、派遣会社へ登録していただきます。<br/>（この時点では雇用契約は締結しておりません）</p>
                            </li>
                            <li class="processWorking-item" data-aos="fade-up">
                                <span class="boxStep b-g">STEP 2</span>
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_image09_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/business/business_image09_pc.png')}}">
                                    <img src="{{asset('images/contentBox/business/business_image09_pc.png')}}" alt="">
                                </picture>
                                <p class="text">その後、派遣会社から派遣先を<br class="pc-br"/>紹介されますので、就業する・しないを選択して下さい。</p>
                            </li>
                            <li class="processWorking-item" data-aos="fade-up">
                                <span class="boxStep b-g">STEP 3</span>
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_image10_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/business/business_image10_pc.png')}}">
                                    <img src="{{asset('images/contentBox/business/business_image10_pc.png')}}" alt="">
                                </picture>
                                <p class="text">就業することが決まったのちに雇用契約を締結し、派遣先で就業していただきます。</p>
                            </li>
                        </ul>
                    </div>

                    <div class="workingCheck-info">
                        <div class="workingCheck-item" data-aos="fade-up">
                            <picture class="icon">
                                <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_icon03_sp.png')}} 2x">
                                <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/business/business_icon03_pc.png')}} 2x">
                                <img src="{{asset('images/contentBox/business/business_icon03_pc.png')}}" alt="">
                            </picture>
                            <div class="workingCheck-box">
                                <p class="title">紹介予定派遣について</p>
                                <ul class="textList">
                                    <li class="textItem">一定期間（最長6ヵ月）は当社と雇用契約を締結し、派遣社員として派遣先で就業していただきます。</li>
                                    <li class="textItem">派遣就業しながら企業・業務等の確認ができます。</li>
                                    <li class="textItem">その後、派遣先と派遣社員の双方合意により派遣先で『直接雇用』となり、雇用主が変わります。</li>
                                </ul>
                                <picture class="imageItem">
{{--                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_image11_sp.png')}}">--}}
                                    <source srcset="{{asset('images/contentBox/business/business_image11_pc.png')}}">
                                    <img src="{{asset('images/contentBox/business/business_image11_pc.png')}}" alt="">
                                </picture>
                            </div>
                        </div>
                        <div class="workingCheck-item" data-aos="fade-up">
                            <picture class="icon">
                                <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_icon04_sp.png')}} 2x">
                                <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/business/business_icon04_pc.png')}} 2x">
                                <img src="{{asset('images/contentBox/business/business_icon04_pc.png')}}" alt="">
                            </picture>
                            <div class="workingCheck-box">
                                <p class="title">有料職業紹介について</p>
                                <ul class="textList">
                                    <li class="textItem">オシゴトをお探しの方は当社に『求職者』として登録していただきます。</li>
                                    <li class="textItem">企業様から依頼のある求人内容のうち、条件の合致するオ<br class="pc-br"/>シゴトをご紹介いたします。</li>
                                    <li class="textItem">企業様にも『求職者』として紹介いたします。</li>
                                    <li class="textItem">企業様と『求職者』で条件が合えば、企業様に『直接雇<br class="pc-br"/>用』となります。</li>
                                </ul>
                                <div class="note">
                                    <p class="text-note"><span>※</span>当社では求職者から費用を頂戴することはございません。</p>
                                    <p class="text-note"><span>※</span>当社とは雇用契約を締結しませんので、給与支払いや保険加入手続き等は採用される企業様となります。</p>
                                </div>
                                <picture class="imageItem">
{{--                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_image12_sp.png')}}">--}}
                                    <source srcset="{{asset('images/contentBox/business/business_image12_pc.png')}}">
                                    <img src="{{asset('images/contentBox/business/business_image12_pc.png')}}" alt="">
                                </picture>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div id="business03" class="solution-staff">

                <picture class="solution-staff-bg bg01">
                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_solution_staff_bg_icon01_sp.png')}} 2x">
                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/business/business_solution_staff_bg_icon01_pc.png')}} 2x">
                    <img src="{{asset('images/contentBox/business/business_solution_staff_bg_icon01_pc.png')}}" alt="">
                </picture>
                <picture class="solution-staff-bg bg02">
                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_solution_staff_bg_icon02_sp.png')}} 2x">
                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/business/business_solution_staff_bg_icon02_pc.png')}} 2x">
                    <img src="{{asset('images/contentBox/business/business_solution_staff_bg_icon02_pc.png')}}" alt="">
                </picture>
                <picture class="solution-staff-bg bg03">
                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/business/business_solution_staff_bg_icon03_sp.png')}} 2x">
                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/business/business_solution_staff_bg_icon03_pc.png')}} 2x">
                    <img src="{{asset('images/contentBox/business/business_solution_staff_bg_icon03_pc.png')}}" alt="">
                </picture>

                <div class="inner">
                    <div class="header-entry">
                        <picture class="icon" data-aos="fade-up">
                            <source srcset="{{asset('images/contentBox/business/business_heading_icon03_pc.png')}} 2x">
                            <img src="{{asset('images/contentBox/business/business_heading_icon03_pc.png')}}" alt="">
                        </picture>
                        <h2 class="headingBusiness-block" data-aos="fade-up">
                            <span class="t1">ネイヴルソリューションスタッフの</span>
                            <span class="t2">正社員をご検討の方へ</span>
                        </h2>
                    </div>

                    <div class="solutionStaff-box">
                        <div class="solutionStaff-content">
                            <p class="text" data-aos="fade-up">ネイヴルソリューションスタッフでは弊社で働いていただく正社員も募集しております。<br/>詳しくはお仕事検索ページより「正社員」でご検索いただくか、お電話にてお問い合わせください。</p>
                            <a href="tel:0120622468" data-aos="fade-up">
                                <picture class="tel-icon">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/tel_icon_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/tel_icon_pc.png')}}">
                                    <img src="{{asset('images/contentBox/tel_icon_pc.png')}}" alt="">
                                </picture>
                                <div class="telInfo">
                                    <p class="ttl-number b-g">0120-622-468</p>
                                    <p class="t2 text-pc">スマホから番号タップでお電話がつながります！</p>
                                </div>
                                <p class="t2 text-sp">スマホから番号タップでお電話がつながります！</p>
                            </a>
                        </div>
                        <div class="solutionStaff-image" data-aos="fade-up">
                            <picture class="imageItem">
                                <source srcset="{{asset('images/contentBox/business/business_image13_pc.png')}} 2x">
                                <img src="{{asset('images/contentBox/business/business_image13_pc.png')}}" alt="">
                            </picture>
                        </div>
                    </div>

                </div>
            </div>


        </div>


        {{--html埋め込み部分 end--}}

    </div>

    <script>
        $(function() {
            new Swiper('.advantagesList-slider', {// Swiperオプション
                loop: false,
                speed: 1000,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                // autoplay: {
                //     delay: 3000,// スライド間の間隔（3000=3秒）
                //     stopOnLastSlide: false,
                //     disableOnInteraction: false,
                //     reverseDirection: false
                // },
            });
        });
    </script>

@endsection
