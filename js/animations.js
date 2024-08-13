addEventListener("scroll", (event) => {
  var pageTop = document.documentElement.scrollTop;
  var pageBottom = pageTop + window.innerHeight;
  var tags = document.querySelectorAll(".tag");


  for (var i = 0; i < tags.length; i++) {
    var tag = tags[i];
    if (tag.offsetTop < pageBottom) {
      tags[i].classList.add("visible");
    } else {
      tags[i].classList.remove("visible");
    }
  }
});
