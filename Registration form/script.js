$(document).ready(function () {
  // Validation before submitting
  $("#registrationForm").submit(function (event) {
    var valid = true;
    $("input, textarea").each(function () {
      if ($(this).val() === "") {
        valid = false;
        alert("Please fill all fields");
        event.preventDefault();
        return false;
      }
    });
    return valid;
  });
});
