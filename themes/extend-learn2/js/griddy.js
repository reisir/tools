$(function () {
  $(".griddy-item").each(function () {
    $(this).click(function () {
      window.location.assign(`${this.dataset.href}`);
    });
  });
});
