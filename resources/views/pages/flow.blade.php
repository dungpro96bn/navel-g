@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="contentArea">

        {{--html埋め込み部分 start--}}

        <div id="flowFaqPage">

            <div class="mainBanner mainFlow-faq">
                <div class="inner">
                    <div class="bannerContent">
                        <div class="list_person_icon">
                            <picture class="item_person_icon icon-person02">
                                <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/flow/flow_banner_icon01_sp.png')}} 2x">
                                <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/flow/flow_banner_icon01_pc.png')}} 2x">
                                <img src="{{asset('images/contentBox/flow/flow_banner_icon01_pc.png')}}" alt="">
                            </picture>
                        </div>
                        <div class="headingBanner">
                            <h1 class="heading-main">
                                <span class="ttl-ja c-l-v2">ご登録の流れ&<br class="sp-br"/>よくある質問</span>
                                <span class="ttl-en b-g">FLOW & FAQ</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flowTab">
                <div class="inner">
                    <ul class="tabList">
                        <li class="tabItem">
                            <a class="scroll" href="#flow01-tab">
                                <p class="ttl c-l-v2">派遣社員<br/>就業までの流れ</p>
                            </a>
                        </li>
                        <li class="tabItem">
                            <a class="scroll" href="#flow02-tab">
                                <p class="ttl c-l-v2">正社員<br/>採用までの流れ</p>
                            </a>
                        </li>
                        <li class="tabItem">
                            <a class="scroll" href="#flow03-tab">
                                <p class="ttl c-l-v2">よくある質問</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="flow01-tab" class="flowContent">
                <div class="inner">
                    <div class="flow_titleBox">
                        <div class="ttlBox"><p class="ttl">派遣社員の入社（就<br class="sp-br"/>業）までの流れ</p></div>
                        <p class="subTitle">ご面談時即日でお仕事決定も！お急ぎの場合は、まずはお電話ください。<span class="tel">0120-622-468</span></p>
                    </div>
                    <div class="flowStep-content">
                        <ul class="stepList">
                            <li class="stepItem">
                                <div class="step_icon">
                                    <p class="ttl b-g">STEP 1</p>
                                    <picture class="icon orange-color">
                                        <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/flow/flow_step_icon01_sp.png')}} 2x">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/flow/flow_step_icon01_pc.png')}} 2x">
                                        <img src="{{asset('images/contentBox/flow/flow_step_icon01_pc.png')}}" alt="">
                                    </picture>
                                </div>
                                <div class="stepInfo">
                                    <div class="textInfo">
                                        <p class="title txt-orange">お問い合わせまたはご登録</p>
                                        <p class="text">まずはお気軽にお問い合わせ、ご登録ください。<br/>ご登録いただいた場合は、担当スタッフより速やかに折り返しをさせていただきます。<br/>自分にできる仕事があるかわからない、就業中のためまずは登録だけしておきたい等でも構いません！</p>
                                    </div>
                                </div>
                            </li>
                            <li class="stepItem">
                                <div class="step_icon">
                                    <p class="ttl b-g">STEP 2</p>
                                    <picture class="icon orange-color">
                                        <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/flow/flow_step_icon02_sp.png')}} 2x">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/flow/flow_step_icon02_pc.png')}} 2x">
                                        <img src="{{asset('images/contentBox/flow/flow_step_icon02_pc.png')}}" alt="">
                                    </picture>
                                </div>
                                <div class="stepInfo">
                                    <div class="textInfo">
                                        <p class="title txt-orange">カウンセリング</p>
                                        <p class="text">専任の担当者があなたのご希望やスキル等をお伺いして、あなたに合ったお仕事をお探しします。<br/>担当者がご提案したお仕事の中であなたが「やってみたい！」と思うお仕事があれば応募に進みます。</p>
                                    </div>
                                </div>
                            </li>
                            <li class="stepItem">
                                <div class="step_icon">
                                    <p class="ttl b-g">STEP 3</p>
                                    <picture class="icon orange-color">
                                        <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/flow/flow_step_icon03_sp.png')}} 2x">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/flow/flow_step_icon03_pc.png')}} 2x">
                                        <img src="{{asset('images/contentBox/flow/flow_step_icon03_pc.png')}}" alt="">
                                    </picture>
                                </div>
                                <div class="stepInfo">
                                    <div class="textInfo">
                                        <p class="title txt-orange">面接</p>
                                        <p class="text">専任の担当者があなたのご希望やスキル等をお伺いして、あなたに合ったお仕事をお探しします。<br/>担当者がご提案したお仕事の中であなたが「やってみたい！」と思うお仕事があれば応募に進みます。</p>
                                    </div>
                                </div>
                            </li>
                            <li class="stepItem">
                                <div class="step_icon">
                                    <p class="ttl b-g">STEP 4</p>
                                    <picture class="icon orange-color">
                                        <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/flow/flow_step_icon04_sp.png')}} 2x">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/flow/flow_step_icon04_pc.png')}} 2x">
                                        <img src="{{asset('images/contentBox/flow/flow_step_icon04_pc.png')}}" alt="">
                                    </picture>
                                </div>
                                <div class="stepInfo">
                                    <div class="textInfo">
                                        <p class="title txt-orange">内定</p>
                                        <p class="text">内定が決まったら、入社日の調整など選任の担当者と行います。</p>
                                    </div>
                                </div>
                            </li>
                            <li class="stepItem">
                                <div class="step_icon">
                                    <p class="ttl b-g">STEP 5</p>
                                    <picture class="icon orange-color">
                                        <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/flow/flow_step_icon05_sp.png')}} 2x">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/flow/flow_step_icon05_pc.png')}} 2x">
                                        <img src="{{asset('images/contentBox/flow/flow_step_icon05_pc.png')}}" alt="">
                                    </picture>
                                </div>
                                <div class="stepInfo">
                                    <div class="textInfo">
                                        <p class="title txt-orange">就業後サポート</p>
                                        <p class="text">就業初日は専任の担当者が一緒に赴任先にご挨拶に参ります。<br/>万が一、入社後に問題が発生した場合や、希望と違う場合も、専任の担当者がフォローしますので、お気軽にご相談ください。</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="flow02-tab" class="flowContent">
                <div class="inner">
                    <div class="flow_titleBox">
                        <div class="ttlBox"><p class="ttl">正社員の採用まで<br class="sp-br"/>の流れ</p></div>
                    </div>
                    <div class="flowStep-content">
                        <ul class="stepList">
                            <li class="stepItem">
                                <div class="step_icon">
                                    <p class="ttl b-g">STEP 1</p>
                                    <picture class="icon blue-color">
                                        <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/flow/flow_step_icon01_sp.png')}} 2x">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/flow/flow_step_icon01_pc.png')}} 2x">
                                        <img src="{{asset('images/contentBox/flow/flow_step_icon01_pc.png')}}" alt="">
                                    </picture>
                                </div>
                                <div class="stepInfo">
                                    <div class="textInfo">
                                        <p class="title txt-blue">お問い合わせ・ご応募</p>
                                        <p class="text">まずは求人情報よりご応募いただくか、お問い合わせをお願いいたします。<br/>弊社からご連絡いたします。</p>
                                    </div>
                                </div>
                            </li>
                            <li class="stepItem">
                                <div class="step_icon">
                                    <p class="ttl b-g">STEP 2</p>
                                    <picture class="icon blue-color">
                                        <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/flow/flow_step_icon06_sp.png')}} 2x">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/flow/flow_step_icon06_pc.png')}} 2x">
                                        <img src="{{asset('images/contentBox/flow/flow_step_icon06_pc.png')}}" alt="">
                                    </picture>
                                </div>
                                <div class="stepInfo">
                                    <div class="textInfo">
                                        <p class="title txt-blue">書類選考</p>
                                        <p class="text">選考には書類到着から1週間ほどお時間をいただきます。</p>
                                    </div>
                                </div>
                            </li>
                            <li class="stepItem">
                                <div class="step_icon">
                                    <p class="ttl b-g">STEP 3</p>
                                    <picture class="icon blue-color">
                                        <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/flow/flow_step_icon03_sp.png')}} 2x">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/flow/flow_step_icon03_pc.png')}} 2x">
                                        <img src="{{asset('images/contentBox/flow/flow_step_icon03_pc.png')}}" alt="">
                                    </picture>
                                </div>
                                <div class="stepInfo">
                                    <div class="textInfo">
                                        <p class="title txt-blue">面接</p>
                                        <p class="text">書類選考を通過したからに、面接のご連絡を弊社よりご案内させていただきます。</p>
                                    </div>
                                </div>
                            </li>
                            <li class="stepItem">
                                <div class="step_icon">
                                    <p class="ttl b-g">STEP 4</p>
                                    <picture class="icon blue-color">
                                        <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/flow/flow_step_icon04_sp.png')}} 2x">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/flow/flow_step_icon04_pc.png')}} 2x">
                                        <img src="{{asset('images/contentBox/flow/flow_step_icon04_pc.png')}}" alt="">
                                    </picture>
                                </div>
                                <div class="stepInfo">
                                    <div class="textInfo">
                                        <p class="title txt-blue">内定</p>
                                        <p class="text">お互いに条件等が合えば内定となります。<br/>内定から入社までのお時間は話あって決定しますので、ご希望等あればお気軽にご相談ください。</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="flow03-tab" class="faqContent">
                <div class="inner">
                    <div class="flow_titleBox">
                        <div class="ttlBox"><p class="ttl">よくあるご質問</p></div>
                    </div>
                    <div class="faqTab">
                        <ul class="faqTab-list">
                            <li class="faqTab-item">
                                <a class="tab-action active" href="#faq01-tab"><span>派遣社員<br class="sp-br"/>（就業前）</span></a>
                            </li>
                            <li class="faqTab-item">
                                <a class="tab-action" href="#faq02-tab"><span>派遣社員<br class="sp-br"/>（就業後）</span></a>
                            </li>
                            <li class="faqTab-item">
                                <a class="tab-action" href="#faq03-tab"><span>正社員</span></a>
                            </li>
                        </ul>
                    </div>

                    <div class="fabTabContent">
                        <div id="faq01-tab" class="content active">
                            <ul class="faqList">
                                <li class="faqItem">
                                    <div class="faq-question active">
                                        <span class="icon b-g">Q</span>
                                        <p class="ttl">登録希望ですが、他の派遣会社にも登録しています。問題はないでしょうか？</p>
                                        <span class="icon-toggle"></span>
                                    </div>
                                    <div class="faq-answer active">
                                        <div class="answerContent">
                                            <span class="icon b-g">A</span>
                                            <div class="answerText">
                                                <p class="text">問題ありません。派遣会社によって特色がありますので、求人活動の間口を広げることは<br/>ご希望の仕事が見つかる確率が上がりますのでお勧めしております。</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="faqItem">
                                    <div class="faq-question">
                                        <span class="icon b-g">Q</span>
                                        <p class="ttl">どんなお仕事がありますか？</p>
                                        <span class="icon-toggle"></span>
                                    </div>
                                    <div class="faq-answer">
                                        <div class="answerContent">
                                            <span class="icon b-g">A</span>
                                            <div class="answerText">
                                                <p class="text">各種製造系から倉庫作業系、農作業や事務系など幅広い職種を取り扱っております。<br/>当サイトでは随時最新求人案件を掲載しますのでご確認ください。</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="faqItem">
                                    <div class="faq-question">
                                        <span class="icon b-g">Q</span>
                                        <p class="ttl">未経験でも大丈夫でしょうか？</p>
                                        <span class="icon-toggle"></span>
                                    </div>
                                    <div class="faq-answer">
                                        <div class="answerContent">
                                            <span class="icon b-g">A</span>
                                            <div class="answerText">
                                                <p class="text">未経験でも親切・丁寧に教えてくれる職場や、経験不要の単純作業などもありますのでご安心ください。<br/>各種経験を積むことはキャリアアップにもつながるので一緒にがんばりましょう！</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="faqItem">
                                    <div class="faq-question">
                                        <span class="icon b-g">Q</span>
                                        <p class="ttl">仕事は必ず紹介してもらえますか？</p>
                                        <span class="icon-toggle"></span>
                                    </div>
                                    <div class="faq-answer">
                                        <div class="answerContent">
                                            <span class="icon b-g">A</span>
                                            <div class="answerText">
                                                <p class="text">希望条件や求人状況によりますので状況によっては難しい場合もあります。</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="faqItem">
                                    <div class="faq-question">
                                        <span class="icon b-g">Q</span>
                                        <p class="ttl">紹介された仕事は断ることができますか？</p>
                                        <span class="icon-toggle"></span>
                                    </div>
                                    <div class="faq-answer">
                                        <div class="answerContent">
                                            <span class="icon b-g">A</span>
                                            <div class="answerText">
                                                <p class="text">希望に沿わない場合は辞退していただいて構いません。辞退する理由は次回の紹介に活用させていただきます。</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="faqItem">
                                    <div class="faq-question">
                                        <span class="icon b-g">Q</span>
                                        <p class="ttl">登録の年齢制限はありますか？</p>
                                        <span class="icon-toggle"></span>
                                    </div>
                                    <div class="faq-answer">
                                        <div class="answerContent">
                                            <span class="icon b-g">A</span>
                                            <div class="answerText">
                                                <p class="text">当社では20代から60代まで幅広く就業いただいております。年齢に際してご不安な点があれば、まずはお気軽にご相談ください。</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="faq02-tab" class="content">
                            <ul class="faqList">
                                <li class="faqItem">
                                    <div class="faq-question active">
                                        <span class="icon b-g">Q</span>
                                        <p class="ttl">初めて派遣で働くので不安なのですが…</p>
                                        <span class="icon-toggle"></span>
                                    </div>
                                    <div class="faq-answer active">
                                        <div class="answerContent">
                                            <span class="icon b-g">A</span>
                                            <div class="answerText">
                                                <p class="text">就業開始日は当社の担当も同行しますのでご安心ください。就業中も随時サポートしていきます。<br/>不安は一緒に解消していきましょう！</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="faqItem">
                                    <div class="faq-question">
                                        <span class="icon b-g">Q</span>
                                        <p class="ttl">通勤手当や残業代は支給されますか？</p>
                                        <span class="icon-toggle"></span>
                                    </div>
                                    <div class="faq-answer">
                                        <div class="answerContent">
                                            <span class="icon b-g">A</span>
                                            <div class="answerText">
                                                <p class="text">通勤手当は当社規定に基づいて支給し、残業代は法律に基づいた割増賃金にて支給します。</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="faqItem">
                                    <div class="faq-question">
                                        <span class="icon b-g">Q</span>
                                        <p class="ttl">派遣社員でも年次有給休暇は取れますか？</p>
                                        <span class="icon-toggle"></span>
                                    </div>
                                    <div class="faq-answer">
                                        <div class="answerContent">
                                            <span class="icon b-g">A</span>
                                            <div class="answerText">
                                                <p class="text">もちろん取得可能です。労働基準法に基づいた取得条件を満たす必要があります。</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="faqItem">
                                    <div class="faq-question">
                                        <span class="icon b-g">Q</span>
                                        <p class="ttl">就業中相談したいことがある場合はどうすればいいでしょうか？</p>
                                        <span class="icon-toggle"></span>
                                    </div>
                                    <div class="faq-answer">
                                        <div class="answerContent">
                                            <span class="icon b-g">A</span>
                                            <div class="answerText">
                                                <p class="text">実際の業務に関する内容であれば派遣先の指揮命令者や担当者にお聞きください。<br/>業務上の問題点やその他要望等は当社の営業担当へご相談ください。一緒に解決していきましょう！</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="faqItem">
                                    <div class="faq-question">
                                        <span class="icon b-g">Q</span>
                                        <p class="ttl">派遣先の正社員になることは可能ですか？</p>
                                        <span class="icon-toggle"></span>
                                    </div>
                                    <div class="faq-answer">
                                        <div class="answerContent">
                                            <span class="icon b-g">A</span>
                                            <div class="answerText">
                                                <p class="text">可能です。当社では既に多数の実績もございます。<br/>派遣先から依頼があった場合は当社の営業担当へお知らせください。</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="faq03-tab" class="content">
                            <ul class="faqList">
                                <li class="faqItem">
                                    <div class="faq-question active">
                                        <span class="icon b-g">Q</span>
                                        <p class="ttl">在職中ですが、応募はできますか？</p>
                                        <span class="icon-toggle"></span>
                                    </div>
                                    <div class="faq-answer active">
                                        <div class="answerContent">
                                            <span class="icon b-g">A</span>
                                            <div class="answerText">
                                                <p class="text">できます。就業可能日をお知らせください。<br/>ただし、タイミングによっては採用が終了してしまう場合もございますので、その際はご容赦ください。</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="faqItem">
                                    <div class="faq-question">
                                        <span class="icon b-g">Q</span>
                                        <p class="ttl">人材サービス業界の経験がありませんが大丈夫でしょうか？</p>
                                        <span class="icon-toggle"></span>
                                    </div>
                                    <div class="faq-answer">
                                        <div class="answerContent">
                                            <span class="icon b-g">A</span>
                                            <div class="answerText">
                                                <p class="text">問題ありません。異業種からの転職者も多数活躍しております。<br/>営業・販売・接客業など人と接する経験があれば適応しやすいと思います。</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="faqItem">
                                    <div class="faq-question">
                                        <span class="icon b-g">Q</span>
                                        <p class="ttl">異動や転勤はありますか？</p>
                                        <span class="icon-toggle"></span>
                                    </div>
                                    <div class="faq-answer">
                                        <div class="answerContent">
                                            <span class="icon b-g">A</span>
                                            <div class="answerText">
                                                <p class="text">当社では転居を伴うような異動・転勤は原則ございません。</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="faqItem">
                                    <div class="faq-question">
                                        <span class="icon b-g">Q</span>
                                        <p class="ttl">選考にかかる期間はどれくらいになりますか？</p>
                                        <span class="icon-toggle"></span>
                                    </div>
                                    <div class="faq-answer">
                                        <div class="answerContent">
                                            <span class="icon b-g">A</span>
                                            <div class="answerText">
                                                <p class="text">面接後1週間程度でお時間をいただいております。</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        {{--html埋め込み部分 end--}}

    </div>

@endsection
