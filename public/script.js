window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
    document.getElementById("navbar").style.padding = "35px 5px";
    document.getElementById("logo").style.fontSize = "20px";
  } else {
    document.getElementById("navbar").style.padding = "50px 4px";
    document.getElementById("logo").style.fontSize = "30px";
  }
}



