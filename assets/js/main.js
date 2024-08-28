const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');
    
        signUpButton.addEventListener('click', () =>
        container.classList.add('right-panel-active'));

        signInButton.addEventListener('click', () =>
        container.classList.remove('right-panel-active'));

        function validateForm() {
            const email = document.getElementById('email').value;
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if (!email || !password || !name) {
                alert('Please fill in all fields.');
                return false;
            }
            // Additional validation logic (e.g., password strength) can be added here

            // If all fields are filled, allow form submission
            return true;
        }

        function checkAvailability(inputField, dataType) {
  var username = document.getElementById('username').value;
  var email = document.getElementById('email').value;

  if (username && email) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'checkAvailability.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
        var response = xhr.responseText;

        if (response === 'taken') {
          alert(dataType + ' is already taken.');
          inputField.value = ''; // Clear the input field
        } else {
          //  Username or email is available
        }
      }
    };
    xhr.send('username=' + username + '&email=' + email + '&dataType=' + dataType);
  } else {
    alert('Please fill in both username and email fields.');
  }
}