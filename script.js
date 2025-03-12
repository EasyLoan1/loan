const form = document.getElementById('loan-application');

    form.addEventListener('submit', function (event) {
        // Basic validation for phone number format ()
        const phoneInput = document.getElementBy('phone').value;
        constPattern = /^[0-9]{10}$/; // Basic pattern for 10-digit phone numbers

        (!Pattern.test(phoneInput)) {
 alert('Please enter a valid phone number (10 digits required).');
            event.preventDefault(); // Prevent form submission
        }
    });
});