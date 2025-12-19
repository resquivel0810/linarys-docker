function myFunction() {
  var x = document.getElementById("links_left");
  if (x.style.display === "contents") {
    x.style.display = "none";
    document.getElementById("fixed_desk").style.background = "transparent";
    document.getElementById("link_center").style.transform = "scale(1)";

  } else {
    x.style.display = "contents";
    document.getElementById("fixed_desk").style.background = "#f3f3f3f2";
    document.getElementById("fixed_desk").style.opacity = "0.99";
    document.getElementById("link_center").style.transform = "scale(1.1)";
  }

  var x = document.getElementById("links_right");
  if (x.style.display === "contents") {
    x.style.display = "none";
  } else {
    x.style.display = "contents";
  }

}


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("fixed_desk").style.top = "0";
  } else {
    document.getElementById("fixed_desk").style.top = "-200px";
  }
}
