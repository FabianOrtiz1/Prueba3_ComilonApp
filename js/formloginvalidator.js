$(document).ready(function () {
  $("#signupForm").validate({
    rules: {
      correo2: {
          required: true,
          correo2: true,
        },
      contraseña2: {
        required: true,
        minlength: 5,
      },
    messages: {
      contraseña2: {
        required: "Por favor ingresa una contraseña",
        minlength:
          "Tu contraseña debe ser de no menos de 5 caracteres de longitud",
      }
      correo2: "Por favor ingresa un correo válido",
      agree: "Por favor acepta nuestra política",
      
    },
    errorElement: "em",
    errorPlacement: function (error, element) {
      // Add the `help-block` class to the error element
      error.addClass("help-block");

      if (element.prop("type") === "checkbox") {
        error.insertAfter(element.parent("label"));
      } else {
        error.insertAfter(element);
      }
    },
    highlight: function (element, errorClass, validClass) {
      $(element)
        .parents(".col-sm-10")
        .addClass("has-error")
        .removeClass("has-success");
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element)
        .parents(".col-sm-10")
        .addClass("has-success")
        .removeClass("has-error");
    },
  });
});