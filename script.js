/*$(document).ready(function() {
    // Handle form submission
    $('#registrationForm').on('submit', function(event) {
      event.preventDefault(); // Prevent form from reloading the page
      
      // Get form data
      const name = $('#name').val();
      const email = $('#email').val();
      const dob = $('#dob').val();
      const password = $('#password').val();
      
      // Basic validation
      if (name && email && dob && password) {
        // Simulate submission and display popup
        $('#userDetails').html(`
          <strong>Name:</strong> ${name}<br>
          <strong>Email:</strong> ${email}<br>
          <strong>Date of Birth:</strong> ${dob}
        `);
        
        // Show the surprise popup
        $('#popup').fadeIn();
      } else {
        alert("Please fill in all fields!");
      }
    });
  });
  
  // Close the popup when the button is clicked
  function closePopup() {
    $('#popup').fadeOut();
  }*/







    document.getElementById('registrationForm').addEventListener('submit', function (e) {
      e.preventDefault();
    
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const phone = document.getElementById('phone').value;
      const dob = document.getElementById('dob').value;
    
      // Validate phone number length
      if (phone.length !== 10) {
        alert('Please enter a valid 10-digit phone number.');
        return;
      }
    
      // Display user details
      const userDetails = document.getElementById('userDetails');
      userDetails.innerHTML = `
        <li><strong>Name:</strong> ${name}</li>
        <li><strong>Email:</strong> ${email}</li>
        <li><strong>Phone:</strong> +91-${phone}</li>
        <li><strong>Date of Birth:</strong> ${dob}</li>
      `;
    
      // Show popup
      document.getElementById('popup').style.display = 'flex';
    });
    
    function closePopup() {
      document.getElementById('popup').style.display = 'none';
    }
 
  