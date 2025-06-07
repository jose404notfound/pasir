// Handle login form submission
document.getElementById('login-form').addEventListener('submit', async (e) => {
    e.preventDefault(); // Prevent default form submission

    const username = document.getElementById('username').value; 
    const password = document.getElementById('password').value; 

    try {
        // Send login data to the server
        const response = await fetch('/services/db/auth/login.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ username, password }),
        });

        // Log the raw response for debugging
        const rawResponse = await response.text();
        console.log("Raw response:", rawResponse);  // Log the raw response in case it's HTML

        // Check if the response is JSON
        let result;
        try {
            result = JSON.parse(rawResponse);  // Try to parse the response as JSON
        } catch (error) {
            console.error("Invalid JSON response:", rawResponse); // Log error if it's not JSON
            alert('Received invalid response from server.');
            return;
        }

        // Handle the response based on the status
        if (result.status === 'success') {
            alert(result.message); // Show success message
            window.location.href = result.redirect; // Redirect on success
        } else {
            alert(result.message); // Show error message
        }
    } catch (error) {
        console.error('Login error:', error); // Log unexpected errors
        alert('An error occurred. Please try again later.');
    }
});
