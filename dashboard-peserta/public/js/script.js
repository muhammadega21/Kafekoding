// Dropdown Sidebar
$(".side-class .sideClass-link").click(function (e) {
  $(".side-class ").toggleClass("active");
  $(".side-class .sideClass-link").toggleClass("active");
});

// Assigment class

$(".assigment-list .action .btn >").each(function (i) {
  $(this).on("click", function () {
    $(this).closest(".assigment-list").toggleClass("active");
  });
});
