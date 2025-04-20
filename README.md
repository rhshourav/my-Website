# Modern Personal Website

A modern, responsive personal website built with PHP, featuring a clean design and smooth animations.

## Features

- Responsive design that works on all devices
- Modern UI with smooth animations
- Contact form with PHP backend
- Mobile-friendly navigation
- Skills showcase section
- Project portfolio section
- Social media integration
- Clean and maintainable code structure
- Automatic deployment to cPanel

## Setup Instructions

1. Make sure you have PHP installed on your server (PHP 7.4 or higher recommended)
2. Clone this repository to your web server's directory
3. Configure your web server (Apache/Nginx) to point to the project directory
4. Update the email address in `process.php` to receive contact form submissions
5. Customize the content in `index.php` with your personal information
6. Update social media links in the footer section
7. Add your projects to the projects section

## Automatic Deployment to cPanel

This project includes scripts for automatic deployment to cPanel. To set it up:

1. Create a copy of `config.php` and update it with your cPanel credentials:
   ```php
   'cpanel' => [
       'username' => 'YOUR_CPANEL_USERNAME',
       'password' => 'YOUR_CPANEL_PASSWORD',
       'domain' => 'YOUR_DOMAIN.com',
       'remote_path' => '/public_html/', // Path on your cPanel server
   ],
   ```

2. Generate a random webhook secret and update it in the config file:
   ```php
   'webhook' => [
       'secret' => 'YOUR_RANDOM_SECRET_STRING',
       'allowed_branches' => ['main', 'master'],
   ],
   ```

3. Set up a webhook in your Git repository (GitHub, GitLab, or Bitbucket):
   - For GitHub: Go to your repository → Settings → Webhooks → Add webhook
   - Set the Payload URL to: `https://your-domain.com/webhook.php`
   - Set the Content type to: `application/json`
   - For GitHub, add the secret you generated in step 2
   - Select the events you want to trigger the webhook (usually just "Push")

4. Make sure the `deploy.php` and `webhook.php` files are accessible via your web server

5. Test the deployment by pushing changes to your repository or manually triggering it:
   ```
   https://your-domain.com/webhook.php?manual=true
   ```

## Directory Structure

```
├── index.php              # Main website file
├── process.php           # Contact form handler
├── deploy.php            # Deployment script (not in repo)
├── webhook.php           # Webhook handler (not in repo)
├── config.php            # Configuration file (not in repo)
├── assets/
│   ├── css/
│   │   └── style.css    # Stylesheet
│   └── js/
│       └── main.js      # JavaScript functionality
└── README.md            # This file
```

## Customization

- Update the color scheme by modifying the CSS variables in `style.css`
- Add or remove sections in `index.php`
- Modify the contact form fields in both `index.php` and `process.php`
- Update the skills and projects sections with your information

## Requirements

- PHP 7.4 or higher
- Web server (Apache/Nginx)
- Modern web browser
- cPanel hosting (for automatic deployment)

## Security

- Input sanitization for the contact form
- CSRF protection (to be implemented)
- Secure email handling
- XSS prevention
- Webhook signature verification
- Secure credential storage

## License

This project is open source and available under the MIT License.