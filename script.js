$(document).ready(function() {
    $('a[href^="#"]').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    if (target.length) {
        event.preventDefault();
        $('html, body').stop().animate({
        scrollTop: target.offset().top
        }, 1000);
    }
    });
});
$(document).ready(function() {
$('#login-form').submit(function(event) {
    event.preventDefault();
    // Validate user input (e.g., check for empty fields, email format, etc.)
    // Send data to login.php using AJAX
    $.ajax({
    url: 'login.php',
    type: 'POST',
    data: $(this).serialize(),
    success: function(response) {
    // Handle server response (e.g., redirect to home page or display error message)
    }
    });
});

  $('#signup-form').submit(function(event) {
    event.preventDefault();

    // Validate user input

    // Send data to signup.php using AJAX
    $.ajax({
      url: 'signup.php',
      type: 'POST',
      data: $(this).serialize(),
      success: function(response) {
        // Handle server response
      }
    });
  });
});


$(document).ready(function() {
  $('#login-form').submit(function(event) {
    event.preventDefault();

    // Validate user input (e.g., check for empty fields, email format, etc.)

    // Send data to login.php using AJAX
    $.ajax({
      url: 'login.php',
      type: 'POST',
      data: $(this).serialize(),
      success: function(response) {
        // Handle server response (e.g., redirect to home page or display error message)
      }
    });
  });

  $('#signup-form').submit(function(event) {
    event.preventDefault();

    // Validate user input

    // Send data to signup.php using AJAX
    $.ajax({
      url: 'signup.php',
      type: 'POST',
      data: $(this).serialize(),
      success: function(response) {
        // Handle server response
      }
    });
  });
});

