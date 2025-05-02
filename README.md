# Antoine Bookstore Mobile Application

This is a jQuery Mobile application for Antoine Bookstore, created for Homework II.

## Deployment to Render

### Option 1: Deploy from GitHub

1. Push this repository to your GitHub account
2. Log in to [Render](https://render.com/)
3. Click on "New" and select "Static Site"
4. Connect your GitHub account and select this repository
5. Configure your site with the following settings:
   - **Name**: antoine-bookstore (or any name you prefer)
   - **Build Command**: Leave empty (as this is a static site)
   - **Publish Directory**: MobileApp
6. Click "Create Static Site"

### Option 2: Deploy manually

1. Log in to [Render](https://render.com/)
2. Click on "New" and select "Static Site"
3. Choose "Upload Files" option
4. Upload the entire MobileApp directory
5. Configure your site with the following settings:
   - **Name**: antoine-bookstore (or any name you prefer)
   - **Publish Directory**: MobileApp
6. Click "Create Static Site"

## Notes about WebSQL

This application uses WebSQL for database functionality. However, please note:

- WebSQL is deprecated and may not be supported in all browsers
- For a production application, consider using alternatives like IndexedDB or a server-side database
- On Render, the WebSQL database will be created for each user session and won't persist between visits

## Contact Form Limitations

Since this is a static site, the contact form's backend processing (process.php) won't function on Render's static hosting. For a fully functional contact form, you would need:

1. A server-side component (using Render's Web Service instead of Static Site)
2. Or an integration with a form processing service like Formspree

## Images

Make sure that all the required images are properly uploaded to the images directory:
- books.png
- book.png
- about.png
- Book cover images (Visual Basic for Beginners.png, etc.) 