Project Name: Sports Memorabilia Store Web App
Project Description

Sports Memorabilia Store Web App is a PHP-based web application designed to allow users to view and purchase sports memorabilia online. Users can add products to their shopping cart and proceed to checkout. The web app integrates a dynamic product listing and cart management system with PHP and MySQL.

Features

Product Listing: Displays sports memorabilia products from the database with product names, descriptions, prices, stock availability, and images.

Shopping Cart: Users can add products to their shopping cart, view cart contents, and track the quantity of items.

Product Images: Each product has an associated image that is displayed beside the product name in the product listing.

Persistence: Cart data persists across page reloads within the current session.

Responsive Design: The application is fully responsive, adjusting the layout to fit desktop, tablet, and mobile screen sizes.

Project Tasks

Task 1: Set up the development environment

Set up PHP and MySQL on the local development server.

Configure Apache or Nginx for hosting the web application locally.

Initialize the Git repository and connect to GitHub for version control.

Task 2: Create and Configure Database

Design the products table in MySQL to store product data (name, description, price, stock, image filename).

Populate the products table with sample products and images.

Task 3: Develop the Product Listing Page

Query the MySQL database to fetch product data and display it in an HTML table format.

Ensure that the product images are displayed correctly beside each product.

Implement a clean, responsive layout for the product catalog.

Task 4: Implement Shopping Cart Functionality

Use PHP sessions to create a shopping cart that persists across page reloads.

Add a mechanism to add products to the cart by clicking an "Add to Cart" button.

Create a cart page that displays added products, along with their quantities and total price.

Task 5: Implement Cart Interaction

Add features for users to update product quantities (if applicable).

Provide an option to remove products from the cart.

Display the total cost of items in the cart.

Task 6: Image Handling

Store product images in a designated images folder within the project directory.

Retrieve image filenames from the database and display them beside the product information.

Task 7: Testing and Debugging

Test the functionality of the product listing and cart system.

Verify that products can be added to the cart and that the cart contents persist.

Check that images load properly, and the cart updates when adding/removing items.

Task 8: Documentation

Document the features and structure of the web app in a comprehensive README file.

Provide clear instructions on setting up the project and testing the functionality.

Project Skills Learned

Frontend Development with PHP: Used PHP to generate dynamic content based on database queries.

Backend Development: Implemented cart functionality using PHP sessions to track items.

Database Management with MySQL: Designed and managed a MySQL database to store product information.

Responsive Design: Ensured the web application is responsive using HTML and CSS.

Image Handling: Integrated product images into the catalog using the images folder.

Session Management: Utilized PHP sessions to persist cart data across page reloads.

Debugging and Testing: Performed manual testing of the product catalog and cart features, ensuring proper functionality.


Technologies Used

PHP: Server-side language used for dynamic content generation and handling cart functionality.

MySQL: Relational database to store product information, including names, descriptions, prices, stock, and images.

HTML/CSS: Used for creating the user interface, ensuring a clean and responsive design.



Sessions: PHP session management to persist cart data across different pages.

Development Process Used

Iterative Development: Developed the application in stages, starting with the basic product listing, followed by the cart functionality, and finally implementing image handling and cart management features.

Manual Testing: Performed thorough testing to ensure the cart updates correctly when adding/removing products and that the product images load correctly.

