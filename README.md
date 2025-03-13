# Spoof-Mail
This PHP script creates a simple email spoofing web interface using the `mail()` function. It includes a form for entering email details, sends the email, and displays a success or failure message.

This PHP script creates a simple email spoofing tool that allows users to send emails by entering the recipient's email (to), sender's email (from), subject, and message. The script uses PHP's mail() function to send the email. The interface is styled with the Poppins font and includes a form for input, a send button, and a loader animation. The script also displays a success or failure message after attempting to send the email.

Key Features:
Email Spoofing:

The script sends emails using the mail() function, allowing users to spoof the sender's email address.

User Interface:

A simple HTML form is provided for users to input email details.

The form includes fields for to, from, subject, and message.

Styling:

The page is styled with the modern Poppins font and includes a clean, centered layout.

A loader animation is included for visual feedback (though it is not functional in this script).

Error Handling:

The script checks if the email was sent successfully and displays either "Mail Sent" or "Mail Not Sent".

How to Use:
Set Up:

Save the code in a .php file (e.g., spoof.php).

Upload the file to a PHP-enabled web server.

Access the Tool:

Open the file in a web browser (e.g., http://yourserver.com/spoof.php).

Enter Email Details:

Fill in the form fields:

To: Recipient's email address.

From: Spoofed sender's email address.

Subject: Email subject.

Message: Email content.

Send the Email:

Click the "SEND NOW" button to submit the form.

The script will attempt to send the email and display a success or failure message.

Important Notes:
Email Functionality:

The mail() function requires proper server configuration (e.g., SMTP settings) to work. If the server is not configured correctly, emails may not be sent.

Security Risks:

This script is for educational purposes only. Spoofing emails can be illegal and unethical if used maliciously. Always use such tools responsibly and with permission.

Improvements:

Add input validation and sanitization to prevent security vulnerabilities (e.g., XSS, email header injection).

Use a secure method (e.g., PHPMailer with SMTP) for sending emails instead of the mail() function.

Example Usage:
URL: http://yourserver.com/spoof.php?to=recipient@example.com&from=spoofed@example.com&subject=Test&message=Hello

Output: The script will attempt to send the email and display "Mail Sent" or "Mail Not Sent" based on the result.

This tool is a basic demonstration of email spoofing and should be used responsibly.
