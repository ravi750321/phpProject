document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
  
    // Get input values
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
  
    // Basic validation
    if (username && password) {
      alert('Login successful!');
      // Here you can add your logic to handle the login (e.g., send data to a server)
    } else {
      alert('Please fill in all fields.');
    }
  });