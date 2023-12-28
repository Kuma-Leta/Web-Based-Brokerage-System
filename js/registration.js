document.getElementById('registration-form').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent form submission

  // Reset errors
  clearErrors();

  // Get form values
  var name = document.getElementById('name').value.trim();
  var email = document.getElementById('email').value.trim();
  var password = document.getElementById('password').value;
  var confirmPassword = document.getElementById('confirm-password').value;

  // Validate form fields
  var isValid = true;

  if (name === '') {
    displayError('name', 'Name is required.');
    isValid = false;
  }

  if (email === '') {
    displayError('email', 'Email is required.');
    isValid = false;
  } else if (!isValidEmail(email)) {
    displayError('email', 'Invalid email address.');
    isValid = false;
  }

  if (password === '') {
    displayError('password', 'Password is required.');
    isValid = false;
  }

  if (confirmPassword === '') {
    displayError('confirm-password', 'Confirm Password is required.');
    isValid = false;
  } else if (password !== confirmPassword) {
    displayError('confirm-password', 'Password and Confirm Password must match.');
    isValid = false;
  }

  if (isValid) {
    // Form validation successful, proceed with registration
    // Add your registration logic here
    alert('Registration successful!');
    document.getElementById('registration-form').reset();
  }
});

function displayError(fieldId, errorMessage) {
  var errorElement = document.getElementById(fieldId + '-error');
  errorElement.innerText = errorMessage;
}

function clearErrors() {
  var errorElements = document.getElementsByClassName('error');
  for (var i = 0; i < errorElements.length; i++) {
    errorElements[i].innerText = '';
  }
}

function isValidEmail(email) {
  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailPattern.test(email);
}
