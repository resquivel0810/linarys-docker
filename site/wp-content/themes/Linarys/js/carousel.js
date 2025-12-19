$('.center-1')
.on("init", () => {
    $('.slick-slide[data-slick-index="-1"]').addClass("lt1");
    $('.slick-slide[data-slick-index="1"]').addClass("gt1");
  })
.slick({
  infinite: true,
  centerMode: true,
  centerPadding: '0px',
  slidesToScroll: 1,
  slidesToShow: 2,
  arrows: true,
  dots: true,
  autoplay: true,
  autoplaySpeed: 3800,
      responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          arrows: false,
          centerMode: true,
          centerPadding: '6px',
        }
      },
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '6px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 575,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '0px',
          slidesToShow: 1
        }
      }
    ]
})
$('.center-1').on("beforeChange", function(event, slick, current, next){
  $(".slick-slide.gt1").removeClass("gt1");
  $(".slick-slide.lt1").removeClass("lt1");


  var lt1 = current < next && current > 0 ? current : next - 1;
  var gt1 = current < next || next === 0 ? next + 1 : current;


  $(`.slick-slide[data-slick-index="${lt1}"]`).addClass("lt1");
  $(`.slick-slide[data-slick-index="${gt1}"]`).addClass("gt1");

  // $('.slick-slide[data-slick-index="0"]').addClass("lt1");
  // $('.slick-slide[data-slick-index="1"]').addClass("gt1");

  if (current === 2 && next === 0){
    $('.slick-slide[data-slick-index="1"]').addClass("gt1");
    $('.slick-slide[data-slick-index="1"]').removeClass("lt2");
    console.log('beforeChange', current, '*', next);
  }

  if (current === 0 && next === 1) {


    $('.slick-slide[data-slick-index="0"]').addClass("lt1");
    $('.slick-slide[data-slick-index="1"]').addClass("gt1");

    // $(`.slick-slide[data-slick-index="${current}"]`).addClass("gt1");
    // $(`.slick-slide[data-slick-index="${current - 1}"]`).addClass("lt1");


    // console.log('beforeChange', current, ':', next);
  }

  if (current === 1 && next === 2) {
    $('.slick-slide[data-slick-index="1"]').removeClass("gt2");
    $('.slick-slide[data-slick-index="1"]').addClass("lt1");
    $('.slick-slide[data-slick-index="3"]').addClass("gt1");

    // $(`.slick-slide[data-slick-index="${current}"]`).addClass("lt1");
    // $(`.slick-slide[data-slick-index="${current + 1}"]`).addClass("gt1");
    // console.log('beforeChange', current, ':', next);

  }

  // console.log('beforeChange', current, ':', next);


});


// $(document).on('ready', function() {
//
//
//
//   $(".center-1")
//   .on("init", () => {
//     $('.slick-slide[data-slick-index="-1"]').addClass("lt1");
//     $('.slick-slide[data-slick-index="1"]').addClass("gt1");
//   })
//   $('.carousel-1').slick({
//     infinite: true,
//     slidesToShow: 2,
//     slidesToScroll: 3,
//     arrows: true,
//     centerMode: true,
//     centerPadding: '0px',
//     dots: true,
//     autoplay: false,
//     autoplaySpeed: 3800,
//     rows: 1,
//     focusOnSelect: false,
//     responsive: [
//     {
//       breakpoint: 992,
//       settings: {
//         arrows: false,
//         centerMode: true,
//         centerPadding: '6px',
//         slidesToShow: 2,
//       }
//     },
//     {
//       breakpoint: 768,
//       settings: {
//         arrows: false,
//         centerMode: true,
//         centerPadding: '6px',
//         slidesToShow: 1,
//       }
//     },
//     {
//       breakpoint: 575,
//       settings: {
//         arrows: false,
//         centerMode: true,
//         centerPadding: '0px',
//         slidesToShow: 1,
//       }
//     }
//   ]
//
//   })
//   .on("beforeChange", (event_1, slick, current_1, next_1) => {
//     $(".slick-slide.gt1").removeClass("gt1");
//     $(".slick-slide.lt1").removeClass("lt1");
//
//     const lt1 = current_1 < next_1 && current_1 > 0 ? current_1 : next_1 - 1;
//     const gt1 = current_1 < next_1 || next_1 === 0 ? next_1 + 1 : current_1;
//
//
//     $(`.slick-slide[data-slick-index="${lt1}"]`).addClass("lt1");
//     $(`.slick-slide[data-slick-index="${gt1}"]`).addClass("gt1");
//
//
//     if (current_1 === 3 && next_1 === 0) {
//       $(`.slick-slide[data-slick-index="${current_1}"]`).addClass("lt1");
//       $(`.slick-slide[data-slick-index="${current_1 + 1}"]`).addClass("gt1");
//     }
//
//     if (current_1 === 0 && next_1 === 3) {
//        $(`.slick-slide[data-slick-index="${current_1}"]`).addClass("gt1");
//        $(`.slick-slide[data-slick-index="${current_1 - 1}"]`).addClass("lt1");
//      }
//
//     console.log('beforeChange', current_1, ':', lt1, next_1, gt1);
//
//   });
//
//
//
//
//
//
// });
