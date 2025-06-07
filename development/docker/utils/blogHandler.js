// Handle form submissions for blog management
document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', async event => {
        event.preventDefault();

        // Remove previous messages (except for listing entries)
        if (form.id !== 'list-entries-form') {
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

            if (form.id === 'list-entries-form') {
                // Special handling for listing blog entries
                const entriesListContainer = document.getElementById('blog-entries');

                // Clear any previous content before inserting new entries
                entriesListContainer.innerHTML = '';

                // Insert the raw HTML content (entries) into the container
                entriesListContainer.innerHTML = message;

                // Add "Clear list" button if there are entries
                if (message.trim() !== '') {
                    const clearButton = document.createElement('button');
                    clearButton.id = 'clear-list-btn';
                    clearButton.textContent = 'Clear List';
                    clearButton.addEventListener('click', () => {
                        entriesListContainer.innerHTML = ''; // Clear the list
                    });
                    entriesListContainer.appendChild(clearButton);
                }
            } else {
                // Standard handling for other forms (create/delete)
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
