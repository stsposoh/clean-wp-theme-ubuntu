;(function () {
  'use-strict';





  //Запрет перетаскивать картинки
  jQuery("img, a").on("dragstart", function (event) {
    event.preventDefault();
  });
})();
