addEventListener("scroll", (event) => {
  console.log("scrolling");
  var pageTop = document.documentElement.scrollTop;
  var pageBottom = pageTop + window.innerHeight;
  var tags = document.querySelectorAll(".tag");
  console.log(tags);

  console.log(pageTop);
  console.log(pageBottom);

  for (var i = 0; i < tags.length; i++) {
    var tag = tags[i];
    console.log(tags[i]);
    console.log(tag.offsetTop);
    if (tag.offsetTop < pageBottom) {
      tags[i].classList.add("visible");
    } else {
      tags[i].classList.remove("visible");
    }
  }
});
