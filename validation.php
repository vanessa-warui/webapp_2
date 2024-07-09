// Validate Name
            const name = document.getElementById('name').value;
            const namePattern = /^[A-Za-z\s\-'.]+$/;
            if (!namePattern.test(name)) {
                alert('Please enter a valid name.');
                return;
            }

            // Validate Email
            const email = document.getElementById('email').value;
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert('Please enter a valid email address.');
                return;
            }

