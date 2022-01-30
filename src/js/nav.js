export const nav_mobile = () => {
  (function (cb) {
    // browser event has already occurred.
    if (document.readyState === "complete") {
      document.getElementById('background').style.display = "none";
      return setTimeout(cb);
    }
    // Mozilla, Opera and webkit style
    if (window.addEventListener) {
      document.getElementById('background').style.display = "none";
      return window.addEventListener("load", cb, false);
    }
    // If IE event model is used
    if (window.attachEvent) {
      document.getElementById('background').style.display = "none";
      return window.attachEvent("onload", cb);
    }
  })(function () {
    document.querySelectorAll('.nav_mobile__btn').forEach(function (el) {
      el.addEventListener('click', function () {
        var nav    = this.parentElement,
            _class = 'open';

        if (nav.classList.contains(_class)) {
          document.getElementById('nav_mobile_menu').style.display = "none";
          nav.classList.remove(_class);
          setTimeout(function() {
            document.getElementById('background').style.display = "none";
          }, 1000);
        } else {
          document.getElementById('background').style.display = "flex";
          setTimeout(function() {
            nav.classList.add(_class);
            setTimeout(function() {
              document.getElementById('nav_mobile_menu').style.display = "block";
            }, 1000);
          }, 200);
        }
      });
    });
  });   
}