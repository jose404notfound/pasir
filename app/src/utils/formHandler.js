// Handle form submissions for user management
document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', async event => {
        event.preventDefault();

        // Remove previous messages (except for listing users)
        if (form.id !== 'list-users-form') {
            const previousMessages = form.querySelectorAll('p.success, p.error');
            previousMessages.forEach(msg => msg.remove());
        }

        const formData = new FormData(form);
        const action = form.action;

        try {
            // Send a POST request to the server
            const response = await fetch(action, {
                method: 'POST',
                body: formData,
            });

            const message = await response.text();

            if (form.id === 'list-users-form') {
                // Special handling for listing users
                const usersListContainer = document.getElementById('users-list');

                // Create a structured container for users
                const usersContainer = document.createElement('div');
                usersContainer.innerHTML = message;

                // Clear the main container and add the content
                usersListContainer.innerHTML = '';
                usersListContainer.appendChild(usersContainer);

                // Add "Clear list" button if there is content
                if (message.trim() !== '') {
                    const clearButton = document.createElement('button');
                    clearButton.textContent = 'Clear List.';
                    clearButton.addEventListener('click', () => {
                        usersListContainer.innerHTML = '';
                    });
                    usersListContainer.appendChild(clearButton);
                }
            } else {
                // Standard handling for other forms
                const messageContainer = document.createElement('p');
                messageContainer.className = response.ok ? 'success' : 'error';
                messageContainer.textContent = message;
                form.append(messageContainer);

                // Clear form fields
                form.reset();

                // Remove message after 5 seconds
                setTimeout(() => messageContainer.remove(), 5000);
            }
        } catch (error) {
            console.error('Error:', error);
            const messageContainer = document.createElement('p');
            messageContainer.className = 'error';
            messageContainer.textContent = 'Connection error';
            form.append(messageContainer);
            // Remove message after 5 seconds
            setTimeout(() => messageContainer.remove(), 5000);
        }
    });
});
