document.addEventListener('invalid', (function () {
    return function (e) {
      e.preventDefault();
      document.getElementById("vardas").focus();
    };
  })(), true);