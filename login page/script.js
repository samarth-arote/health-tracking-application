const signInBtnLink = document.querySelector('.signInBtn-link');
const signUpBtnLink = document.querySelector('.signUpBtn-link');
const wrapper = document.querySelector('.wrapper');
signUpBtnLink.addEventListener('click', () => {
    wrapper.classList.toggle('active');
});
signInBtnLink.addEventListener('click', () => {
    wrapper.classList.toggle('active');
});




/* form*/


// Back button functionality
document.getElementById('backBtn').addEventListener('click', function() {
    window.location.href = "login.html"; // Replace 'login.html' with your login page URL
  });
  
  // Form submission
  document.getElementById('myForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevents the default form submission behavior
  
    // Perform form validation if needed
    
    // If validation is successful, navigate to the next page
    window.location.href = 'welcom.html'; // Replace 'nextPage.html' with the URL of the next page
  });
  