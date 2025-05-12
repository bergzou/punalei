$(function() {
  // var windowWidth = $(window).width() + getScrollbarWidth();    // 窗口宽度

  initHover()
  initProductNav()
  showOrHideNavList()
  initNavArrows()
  bindWheel()

  if (typeof ScrollReveal !== 'undefined') {
    ScrollReveal().reveal('.track:first-child', {
      duration: 2000,
      distance: '100px',
      easing: 'ease',
      delay: 0
    });
    ScrollReveal().reveal('.track:nth-child(2)', {
      duration: 2000,
      distance: '100px',
      easing: 'ease',
      delay: 100
    });
    ScrollReveal().reveal('.track:nth-child(3)', {
      duration: 2000,
      distance: '100px',
      easing: 'ease',
      delay: 200
    });
    ScrollReveal().reveal('.track:nth-child(4)', {
      duration: 2000,
      distance: '100px',
      easing: 'ease',
      delay: 300
    });
    ScrollReveal().reveal('.track:nth-child(5)', {
      duration: 2000,
      distance: '100px',
      easing: 'ease',
      delay: 400
    });
    ScrollReveal().reveal('.track:nth-child(6)', {
      duration: 2000,
      distance: '100px',
      easing: 'ease',
      delay: 500
    });
    ScrollReveal().reveal('.track:nth-child(7)', {
      duration: 2000,
      distance: '100px',
      easing: 'ease',
      delay: 600
    });
    ScrollReveal().reveal('.track:nth-child(8)', {
      duration: 2000,
      distance: '100px',
      easing: 'ease',
      delay: 700
    });
    ScrollReveal().reveal('.track:nth-child(9)', {
      duration: 2000,
      distance: '100px',
      easing: 'ease',
      delay: 800
    });
    ScrollReveal().reveal('.track:nth-child(10)', {
      duration: 2000,
      distance: '100px',
      easing: 'ease',
      delay: 900
    });
    // ScrollReveal().reveal('.global-crumbs', {
    //   duration: 1000,
    //   distance: '100px',
    //   easing: 'ease'
    // });
  }


  var notFirst = sessionStorage.getItem('notFirst');

  if (!notFirst) {
    sessionStorage.setItem('notFirst', true);
    $('.global-nav-container .global-nav').addClass('animate__animated');
  }
})


// 监听 PC端 鼠标划过事件
function initHover () {
  $(".global-nav .nav-pc .nav-li").hover(function () {
    $(this).find(".nav-hide-list").stop().slideDown()
  }, function () {
    $(this).find(".nav-hide-list").stop().slideUp(function () {
      $(".nav-hide-list.container").css('height', '')
    })
  })
}

// 初始化产品下拉导航
function initProductNav () {
  var $productNavList = $(".global-nav .nav-pc .nav-li > .nav-hide-list")
  var $header = $productNavList.find('.body-item-header')
  var $listBtnList = $productNavList.find('.list-i')
  var $productHideRightPage = $productNavList.find('.product-hide-right-page')

  var $defaultSelect =  $($listBtnList.get(0))
  $defaultSelect.addClass('active')
  $defaultSelect.parent().siblings('.body-item-header').addClass('active')
  changeNavPage($defaultSelect.data('id'))

  $listBtnList.click(function () {
    $header.removeClass('active')
    $listBtnList.removeClass('active')
    $(this).addClass('active')
    $(this).parent().siblings('.body-item-header').addClass('active')
    changeNavPage($(this).data('id'))
  })

  function changeNavPage (id) {
    $productHideRightPage.each(function (_, item) {
      if ($(item).data('id') === id) {
        $(item).addClass('active')
      } else {
        $(item).removeClass('active')
      }
    })
  }
}

// 点击打开关闭
function showOrHideNavList () {
  $(".global-nav .nav-ph .icon-caidan").click(function () {
    $(this).siblings('.nav-list-container').stop().slideDown()
  })
  $(".global-nav .nav-ph .icon-RectangleCopy").click(function () {
    $(this).parent().parent().stop().slideUp()
  })
}

function initNavArrows () {
  $('.arrows').each(function() {
    if ($(this).parent().siblings('.next-list').length === 0) {
      $(this).remove()
    }
  })

  $('.li-a-yy').click(function() {
    if ($(this).next().data('open')) {
      $(this).next().css({ 'transform': 'rotate(0deg)' })
      $(this).parent().siblings('.next-list').stop().slideUp()
      $(this).next().data('open', false)
    } else {
      $(this).next().css({ 'transform': 'rotate(90deg)' })
      $(this).parent().siblings('.next-list').stop().slideDown()
      $(this).next().data('open', true)
    }
  })

  $('.arrows').click(function () {
    if ($(this).data('open')) {
      $(this).css({ 'transform': 'rotate(0deg)' })
      $(this).parent().siblings('.next-list').stop().slideUp()
      $(this).data('open', false)
    } else {
      $(this).css({ 'transform': 'rotate(90deg)' })
      $(this).parent().siblings('.next-list').stop().slideDown()
      $(this).data('open', true)
    }
  })
}

function bindWheel () {
  $('.global-nav .product-hide-left').on('mousewheel', function (e) {
    e.stopPropagation()
  })
  $('.global-nav .product-hide-right').on('mousewheel', function (e) {
    e.stopPropagation()
  })
}




// 获取滚动条宽度
// function getScrollbarWidth() {
//   var odiv = document.createElement('div')   //创建一个div
//   var styles = {
//     width: '100px',
//     height: '100px',
//     overflowY: 'scroll'//让他有滚动条
//   }
//   var i = '';
//   var scrollbarWidth = 0;
//   for (i in styles) odiv.style[i] = styles[i];
//   document.body.appendChild(odiv);  //把div添加到body中
//   scrollbarWidth = odiv.offsetWidth - odiv.clientWidth; //相减
//   odiv.remove();  //移除创建的div
//   return scrollbarWidth;  //返回滚动条宽度
// }


function isIE() {
	if(!!window.ActiveXObject || "ActiveXObject" in window)
		return true;
	else
		return false;
}
