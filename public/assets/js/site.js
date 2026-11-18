(function () {
  document.documentElement.classList.add('js');

  var toggle = document.querySelector('.menu-toggle');
  var nav = document.getElementById('hovednav');
  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      var open = nav.classList.toggle('open');
      toggle.setAttribute('aria-expanded', String(open));
    });
  }

  var items = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('in');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0, rootMargin: '0px 0px -5% 0px' });
    items.forEach(function (el) { observer.observe(el); });
    window.setTimeout(function () {
      items.forEach(function (el) { el.classList.add('in'); });
    }, 1500);
  } else {
    items.forEach(function (el) { el.classList.add('in'); });
  }

  var buttons = document.querySelectorAll('[data-make]');
  buttons.forEach(function (button) {
    button.addEventListener('click', function () {
      buttons.forEach(function (b) { b.setAttribute('aria-pressed', 'false'); });
      button.setAttribute('aria-pressed', 'true');
      var code = button.getAttribute('data-code');
      document.querySelector('[data-out="make"]').textContent = button.getAttribute('data-make');
      document.querySelector('[data-out="code"]').textContent = code;
    });
  });
})();
