console.log($(".selectOptionCars .btn"));

$(".selectOptionCars .btn").click(function (e) {
  console.log($(e.taget));
  $(e.target).toggleClass("green");
});

$("#dDepart").on("change", () => {
  console.log($("#dDepart").val());
});

$(".submit").on("click", (e) => {
  e.preventDefault();
  // Using the core $.ajax() method
  $.ajax({
    url: "connexion.php",
    // The data to send (will be converted to a query string)
    data: {
      checkReturn: $("checkReturn").val(),
      age: $("#age").val(),
    },

    // Whether this is a POST or GET request
    type: "POST",

    // The type of data we expect back
    dataType: "json",
  })

    // Code to run if the request succeeds (is done);
    // The response is passed to the function
    .done(function (json) {
      $("#response").text(json.age);

      //alert("The request is complete!");
    })

    // Code to run if the request fails; the raw request and});
    // status codes are passed to the function
    .fail(function (xhr, status, errorThrown) {
      alert("Sorry, there was a problem!");
      console.log("Error: " + errorThrown);
      console.log("Status: " + status);
      console.dir(xhr);
    });

  // // Code to run regardless of success or failure;
  // .always(function (xhr, status) {
  //   alert("The request is complete!");
  // });
});
