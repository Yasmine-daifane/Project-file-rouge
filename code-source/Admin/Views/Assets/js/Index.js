var _Query = "";
// Handle pagination link click event
$(document).on("click", ".service-page", function (e) {
  // alert("pagination loaded");
  e.preventDefault();
  let pageId = $(this).data("page");
  let Deprtmnet = $(this).data("department");
  console.log(pageId);
  console.log(Deprtmnet);
  $.ajax({
    url: "index.php",
    type: "POST",
    data: {
      Id_department: Deprtmnet,
      Query: _Query,
      pageId: pageId,
    },
    success: function (response) {
      // Handle the response
      $("#result").html(response);
    },
    error: function (xhr, status, error) {
      console.log("Error:", error);
      console.log("xhr:", xhr);
    },
  });
});

$(document).on("keyup", "#search", function () {
  let value = $(this).val();
  _Query = value;
  console.log(_Query);
  $.ajax({
    url: "index.php",
    type: "POST",
    data: { Query: value },
    success: function (response) {
      $("#result").html(response);
    },
    error: function (xhr, status, error) {
      console.log("Error:", error);
      console.log("xhr:", xhr);
    },
  });
});

$(document).on("keyup", "#search_task", function () {
  let value = $(this).val();
  let id = $("#id").val();
  console.log(id);
  _Query = value;
  console.log(_Query);
  $.ajax({
    url: "index.php",
    type: "POST",
    data: {
      Query: value,
      Id_department: id,
    },
    success: function (response) {
      $("#result").html(response);
      // console.log(response);
    },
    error: function (xhr, status, error) {
      console.log("Error:", error);
      console.log("xhr:", xhr);
    },
  });
});
