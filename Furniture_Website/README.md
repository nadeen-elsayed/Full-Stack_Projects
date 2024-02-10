# Furniture Website

Welcome to our Furniture Website, a dynamic and interactive platform for exploring and purchasing a wide range of furniture items. This web application is built using HTML, JavaScript, and pure CSS for the frontend, with PHP handling the backend operations. Users can easily browse through the available furniture, add items to their cart, and seamlessly manage their selections.

## Features

1. **User-friendly Interface:**
   - Intuitive design for easy navigation.
   - Responsive layout for a seamless experience across devices.

2. **Browse Furniture:**
   - View a variety of furniture items with detailed information.

3. **Add to Cart:**
   - Users can add furniture items to their shopping cart.

4. **Remove from Cart:**
   - Easily remove items from the cart if needed.

5. **PHP Backend:**
   - PHP handles backend operations, including database interactions.

6. **Database Integration:**
   - Furniture details are stored in a PHPMyAdmin database.

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/nadeen-elsayed/Furniture_Website.git
    ```

2. Set up a local server (e.g., XAMPP, WAMP).

3. Place files in the server's web directory.

4. Import SQL file into PHPMyAdmin for database setup.

## Usage

1. Start your local server.

2. Access the website:

    ```bash
    http://localhost/Furniture_Website/templates/index.php
    ```

3. Explore, add items to your cart, and enjoy shopping.

## Database

- **Tables:**
    - `furniture`: Contains details of each item (e.g., `id`, `name`, `price`, `image`).
    - `cart`: Stores user-specific cart information (e.g., `id`, `user_id`, `furniture_id`, `quantity`).

