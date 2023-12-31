$(function(){
  // userAgent
  const ua = navigator.userAgent;
  const uaLowerCase = navigator.userAgent.toLowerCase();
  const isSp = ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || (ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0);
  const isTablet = ua.indexOf('iPad') > 0 || (ua.indexOf('Android') > 0 && ua.indexOf('Mobile') == -1) || ua.indexOf('A1_07') > 0 || ua.indexOf('SC-01C') > 0 || uaLowerCase.indexOf('macintosh') > 0 && 'ontouchend' in document;
  const isPc = (! isSp && ! isTablet);

  //AOS初期化
  // AOS.init({
  //   // disable: 'mobile',
  //   // disable: window.innerWidth < 1024,
  //   offset: 0,
  //   duration: 800,
  //   easing: 'ease-out-sine',
  //   delay: 200,
  // });

    // only IE
  if(ua.indexOf('Trident') !== -1) {
    $('.sizes').each(function() {
      var objElement = $(this);
      var objOmg = new Image();
      objOmg.src = objElement.attr('src');
      if (objOmg.width != 0) {
        objElement.css({'width': objOmg.width / 2});
      }
    });
  }

  // viewport
  !(function() {
    const viewport = document.querySelector('meta[name="viewport"]');
    const deviceWidth = 320;
    function switchViewport() {
      if (isSp) {
        const value =
          window.outerWidth >= deviceWidth
            ? 'width=device-width'
            : 'width=' + deviceWidth;
        if (viewport.getAttribute('content') !== value) {
          viewport.setAttribute('content', value);
        }
      } else if (isPc) {
        viewport.setAttribute('content', 'width=device-width');
      }
    }
    addEventListener('resize', switchViewport, false);
    switchViewport();
  })();

  // fadein
  var ptop, scroll, firstView, windowHeight;

  function scrollIn () {
    $('.js-fadein').each(function() {
      ptop = $(this).offset().top;
      scroll = $(window).scrollTop();
      windowHeight = $(window).height();
      if (scroll > ptop - windowHeight) {
        $(this).addClass('scroll-in');
      }
    });
  }

  $(document).ready(function() {
    scrollIn();

    $(window).scroll(function () {
      scrollIn();
    });
  });

  // smooth sc
  $('a[href^="#"]:not([data-lity])').click(function() {
    if(!($('#contentLayout').length)) {
      var speed = 500; // 好みに応じて変更
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      $('body,html').animate({
        scrollTop:(position - $('#headerMenu .headerNav').height())
      }, speed, 'swing');
    }
    return false;
  });

  //js-clickitemリンク要素をクリックすると遷移するクラス
  $('.js-clickitem').click(function() {
    window.location = $(this).find('a').attr('href');
  });

  //js-clickitemリンク要素をクリックすると遷移するクラス
  $('.js-clickitemBlank').click(function() {//target_blank用のclickitem
    window.open().location.href = $(this).find('a').attr('href');
  });

  //js-clickitemリンク要素をクリックすると遷移するクラスIcon付き
  $('.js-clickitemBlankIcon').click(function() {//target_blank用のclickitem
    window.open().location.href = $(this).find('a').attr('href');
  });

  // 別ページからのリンク
  function otherPageAnchorLink() {
    // var otherPageHeaderHeight;
    // var otherPageWinW = $(window).width();
    // if(otherPageWinW <= parseInt(import.meta.env.VITE_BREAK_POINT)) {
    //   otherPageHeaderHeight = 70; //ヘッダの高さ（SP）
    // } else {
    //   otherPageHeaderHeight = 80; //ヘッダの高さ（PC）
    // }
    if(document.URL.match("#")) {
      var otherPageStr = location.href ;
      var otherPageCut_str = "#";
      var otherPageIndex = otherPageStr.indexOf(otherPageCut_str);
      var otherPageHref = otherPageStr.slice(otherPageIndex);
      var otherPageTarget = otherPageHref;
      var otherPagePosition = $(otherPageTarget).offset().top - $('#headerMenu .headerNav').height();
      $("html, body").scrollTop(otherPagePosition);
      return false;
    }
  }

  $(document).ready(function() {
    otherPageAnchorLink();
  });

    $(function(){
        $('.scroll').click(function(event){
            event.preventDefault();
            var url = $(this).attr('href');
            var dest = url.split('#');var target = dest[1];
            var target_offset = $('#'+target).offset();
            var target_top = target_offset.top - 50;
            $('html, body').animate({scrollTop:target_top}, 500, 'swing');
            return false;
        });
    });

    $(".faqList .faqItem:first-child .faq-answer").slideDown();
    $(".faq-question").click(function () {
        $(this).next().slideToggle();
        $(this).next().toggleClass("active");
        $(this).toggleClass("active");
    });

    $('.tab-action').click(function(event){
        event.preventDefault();
        $(".faqTab-item a").removeClass("active");
        $(".faqContent .fabTabContent .content").removeClass("active");
        var url = $(this).attr('href');
        var dest = url.split('#');
        var target = dest[1];
        $(this).addClass("active");
        $('#'+target).addClass("active");
    });


    // AOS.init({
    //     once: true,
    //     duration: 1000,
    //     delay: 0,
    // });

});
