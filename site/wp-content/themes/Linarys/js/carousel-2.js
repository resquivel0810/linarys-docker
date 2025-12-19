$('.center')
.on("init", () => {
    $('.slick-slide[data-slick-index="-1"]').addClass("lt2");
    $('.slick-slide[data-slick-index="1"]').addClass("gt2");
  })
.slick({
  infinite: true,
  centerMode: true,
  centerPadding: '0px',
  slidesToScroll: 1,
  slidesToShow: 2,
  arrows: true,
  dots: true,
  autoplay: false,
  autoplaySpeed: 3800,
      responsive: [
      {
        breakpoint: 992,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '25px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
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
$('.center').on("beforeChange", function(event, slick, current_1, next_1){
  $(".slick-slide.gt2").removeClass("gt2");
  $(".slick-slide.lt2").removeClass("lt2");


  var lt2 = current_1 < next_1 && current_1 > 0 ? current_1 : next_1 - 1;
  var gt2 = current_1 < next_1 || next_1 === 0 ? next_1 + 1 : current_1;


  $(`.slick-slide[data-slick-index="${lt2}"]`).addClass("lt2");
  $(`.slick-slide[data-slick-index="${gt2}"]`).addClass("gt2");

  // $('.slick-slide[data-slick-index="0"]').addClass("lt1");

  if (current_1 === 2 && next_1 === 0){
    $('.slick-slide[data-slick-index="1"]').addClass("gt2");
    $('.slick-slide[data-slick-index="1"]').removeClass("lt1");
    $('.slick-slide[data-slick-index="1"]').removeClass("gt1");

  }

  if (current_1 === 0 && next_1 === 1) {


    $('.slick-slide[data-slick-index="0"]').addClass("lt2");
    $('.slick-slide[data-slick-index="1"]').addClass("gt2");

    // $(`.slick-slide[data-slick-index="${current_1}"]`).addClass("gt1");
    // $(`.slick-slide[data-slick-index="${current_1 - 1}"]`).addClass("lt1");


    console.log('beforeChange', current_1, ':', next_1);
  }

  if (current_1 === 1 && next_1 === 2) {
    $('.slick-slide[data-slick-index="3"]').addClass("gt2");
    $('.slick-slide[data-slick-index="1"]').removeClass("gt1");
    $('.slick-slide[data-slick-index="1"]').removeClass("gt2");
    $('.slick-slide[data-slick-index="1"]').addClass("lt2");


    // $(`.slick-slide[data-slick-index="${current_1}"]`).addClass("lt1");
    // $(`.slick-slide[data-slick-index="${current_1 + 1}"]`).addClass("gt1");
    console.log('beforeChange', current_1, ':', next_1);

  }

  console.log('beforeChange', current_1, ':', next_1);

});

// $(document).on('ready', function() {
//
//   $(".center")
//   .on("init", () => {
//     $('.slick-slide[data-slick-index="-1"]').addClass("lt1");
//     $('.slick-slide[data-slick-index="1"]').addClass("gt1");
//   })
//   $('.carousel-2').slick({
//     infinite: true,
//     slidesToShow: 2,
//     slidesToScroll: 1,
//     arrows: true,
//     centerMode: true,
//     centerPadding: '0px',
//     dots: true,
//     autoplay: false,
//     autoplaySpeed: 3800,
//
//     responsive: [
//     {
//       breakpoint: 992,
//       settings: {
//         arrows: false,
//         centerMode: true,
//         centerPadding: '25px',
//         slidesToShow: 2
//       }
//     },
//     {
//       breakpoint: 768,
//       settings: {
//         arrows: false,
//         centerMode: true,
//         centerPadding: '40px',
//         slidesToShow: 1
//       }
//     },
//     {
//       breakpoint: 575,
//       settings: {
//         arrows: false,
//         centerMode: true,
//         centerPadding: '0px',
//         slidesToShow: 1
//       }
//     }
//   ]
//
//   })
//   .on("beforeChange", (event, slick, current_1, next_1) => {
//     $(".slick-slide.gt1").removeClass("gt1");
//     $(".slick-slide.lt1").removeClass("lt1");
//
//     const lt1 = current_1 < next_1 && current_1 > 0 ? current_1 : next_1 - 1;
//     const gt1 = current_1 < next_1 || next_1 === 0 ? next_1 + 1 : current_1;
//
//
//
//     $(`.slick-slide[data-slick-index="${lt1}"]`).addClass("lt1");
//     $(`.slick-slide[data-slick-index="${gt1}"]`).addClass("gt1");
//
//     if (current_1 === 3 && next_1 === 0) {
//       $(`.slick-slide[data-slick-index="${current_1}"]`).addClass("lt1");
//       $(`.slick-slide[data-slick-index="${current_1 + 1}"]`).addClass("gt1");
//     }
//
//     if (current_1 === 0 && next_1 === 3) {
//        $(`.slick-slide[data-slick-index="${current_1}"]`).addClass("gt1");
//        $(`.slick-slide[data-slick-index="${current_1 -1}"]`).addClass("lt1");
//      }
//
//     console.log('beforeChange', current_1, ':', lt1, next_1, gt1);
//   });
//
// });
