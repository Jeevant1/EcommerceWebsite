<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-xr8U8tZFd7vPwz4D6KlZK6w6uZaZkUcBAEnZmlgj3gcAb9D5ryDJ3I5Fv5gMFn2/umIE5MAn4xgphDO9I49tXQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* Style for cart items */
/* Add the following CSS to your existing stylesheet */

/* Style for cart items */
#cart-items{
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    margin-top: 50px; /* Add margin at the top if needed */
}
.cart-item {
    margin-bottom: 20px; /* Add margin between cart items */
}

/* Style for product image in cart */
.cart-item img {
    width: 50px;
    height: 50px;
    margin-right: 10px;
}

/* Style for product name in cart */
.cart-item span {
    font-size: 18px;
    margin-right: 20px;
}

/* Style for quantity buttons */
.quantity-buttons button {
    
    color: white;
    border: none;
    cursor: pointer;
    font-size: 1.2em;
    padding: 8px 15px;
    margin-right: 5px;
}

/* Style for delete button */


/* Apply hover effect on buttons */
.quantity-buttons button:hover,


/* Style for quantity display */
.quantity-text {
    font-size: 18px;
    margin-right: 20px;
    border: none; /* Remove border */
    background: none; /* Remove background */
}

/* Cart items container styles */
#cart-items {
    margin-top: 20px;
}

/* Optional: Add a container style for quantity buttons and delete button */
.quantity-buttons-container {
    display: flex;
    align-items: center;
}



/* Modify the CSS for quantity display */
/* Modify the CSS for quantity display */
.cart-item input[type="text"] {
    font-size: 18px;
    margin-right: 20px;
    border: none;
    background: none;
    outline: none; /* Remove outline when focused (optional) */
}
h1 {
            text-align: center;
            margin-top: 20px; /* Add margin at the top if needed */
        }

/* Center the cart items and their content */
#cart-items {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    margin-top: 20px; /* Add margin at the top if needed */
}

.cart-item {
    display: flex;
    align-items: center;
    justify-content: center; /* Center the content horizontally */
    margin-bottom: 20px; /* Add margin between cart items */
}

.cart-item img {
    width: 50px;
    height: 50px;
    margin-right: 10px;
}

.cart-item span {
    font-size: 18px;
    margin-right: 20px;
}

/* Center the cart items and their content */
#cart-items {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    margin-top: 20px; /* Add margin at the top if needed */
}

.cart-item {
    display: flex;
    align-items: center;
    justify-content: center; /* Center the content horizontally */
    margin-bottom: 20px; /* Add margin between cart items */
}

.cart-item img {
    width: 50px;
    height: 50px;
    margin-right: 10px;
}

.cart-item span {
    font-size: 18px;
    margin-right: 10px;
}

/* Style for quantity buttons container */
.quantity-buttons {
    display: flex;
    align-items: center;
}

/* Style for quantity buttons */
/* Style for quantity buttons */
/* Style for quantity buttons */
/* Style for quantity buttons */
.quantity-buttons button {
    color: blue;
    background: none; /* Set background to none */
    border: 1px solid white; /* Add border to make the buttons visible */
    cursor: pointer;
    font-size: 1.7em;

}

/* Style for delete button */
delete-button {
    background-color: #dc3545;
    color: white;
    border: none;
    cursor: pointer;
    font-size: 1.2em;
    padding: 8px 15px;
    transition: background-color 0.3s ease; /* Add smooth transition effect */
    border-radius: 5px; /* Add rounded corners */
}

.delete-button {
    background-color: #dc3545;
    color: white;
    border: none;
    cursor: pointer;
    font-size: 1.2em;
    padding: 8px 15px;
    transition: background-color 0.3s ease;
    border-radius: 5px;
}

.delete-button:hover {
    background-color: #c82333;
}
h1 {
    text-align: center;
    margin-top: 20px; /* Add margin at the top if needed */
    background-color: lightgreen; /* Set background color */
    padding: 10px; /* Add padding inside the heading */
    border-radius: 10px; /* Add border-radius for rounded corners */
}

.cart-item {
    display: flex;
    align-items: center;
    justify-content: center; /* Center the content horizontally */
    margin-bottom: 20px; /* Add margin between cart items */
    background-color: lightblue; /* Set background color */
    padding: 10px; /* Add padding inside each cart item */
    border-radius: 10px; /* Add border-radius for rounded corners */
}
#proceed-to-pay {
    display: block;
    margin: 20px auto; /* Center the button horizontally and provide some margin */
    background-color: #007bff; /* Change the background color to blue */
    color: white; /* Set text color to white */
    border: none;
    padding: 10px 20px;
    font-size: 1.2em;
    cursor: pointer;
    border-radius: 5px;
}
#proceed-to-pay:hover {
    background-color: #0056b3; /* Darken the background color on hover */
}

    </style>
</head>

<body>
    
    <div id="header">
        <a href="index.php"><img src= "images/logo.png" class="logo" alt="" width="200px"></a>

        <div>
            <ul id="navbar">
                <li><a class="one" href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="about_us.php">About Us</a></li>
                <li><a href="Sign_up.php">Sign Up</a></li>
                <li><a href="contact_us.php">Contact us</a></li>
                <img src="images/cart.png" id="cart-icon" width="30" height="30">


            </ul>
        </div>

    </div>
    <h1>Cart Items</h1>
    <div id="cart-items"></div>
    <button id="proceed-to-pay">Proceed to Pay</button>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
    const cartItemsContainer = document.getElementById('cart-items');
    const emptyCartMessage = document.createElement('h2');
    emptyCartMessage.textContent = 'No items in cart. ';
    const browseLink = document.createElement('a');
    browseLink.textContent = 'Browse Products here';
    browseLink.href = 'products.php';
    browseLink.style.marginTop = '20px'; // Add margin at the top of the link
    emptyCartMessage.appendChild(browseLink);

    const storedCartItems = localStorage.getItem('cartItems');
    const cartItems = storedCartItems ? JSON.parse(storedCartItems) : [];

    function renderCartItems() {
        if (cartItems.length === 0) {
            cartItemsContainer.innerHTML = ''; // Clear the cart items container
            cartItemsContainer.appendChild(emptyCartMessage); // Append the empty cart message
            return;
        }

        cartItemsContainer.innerHTML = ''; // Clear the cart items container

        cartItems.forEach((item, index) => {
            const cartItemDiv = document.createElement('div');
            cartItemDiv.classList.add('cart-item');

            const productImage = document.createElement('img');
            productImage.src = item.image;
            productImage.alt = item.name;

            const productName = document.createElement('span');
            productName.textContent = item.name;

            const quantityDiv = document.createElement('div');
            quantityDiv.textContent = item.quantity;
            quantityDiv.classList.add('quantity-text');

            const decreaseButton = createButton('-', () => {
                if (item.quantity > 1) {
                    item.quantity--;
                    quantityDiv.textContent = item.quantity;
                    localStorage.setItem('cartItems', JSON.stringify(cartItems));
                }
            });

            const increaseButton = createButton('+', () => {
                item.quantity++;
                quantityDiv.textContent = item.quantity;
                localStorage.setItem('cartItems', JSON.stringify(cartItems));
            });

            const deleteButton = createButton('Delete', () => {
                cartItems.splice(index, 1);
                localStorage.setItem('cartItems', JSON.stringify(cartItems));
                renderCartItems();
            });
            deleteButton.classList.add('delete-button'); // Add delete-button class for styling

            const quantityButtonsDiv = document.createElement('div');
            quantityButtonsDiv.classList.add('quantity-buttons');
            quantityButtonsDiv.appendChild(decreaseButton);
            quantityButtonsDiv.appendChild(quantityDiv);
            quantityButtonsDiv.appendChild(increaseButton);

            cartItemDiv.appendChild(productImage);
            cartItemDiv.appendChild(productName);
            cartItemDiv.appendChild(quantityButtonsDiv);
            cartItemDiv.appendChild(deleteButton);
            cartItemsContainer.appendChild(cartItemDiv);
        });
    }

    function createButton(text, onClick) {
        const button = document.createElement('button');
        button.textContent = text;
        button.addEventListener('click', onClick);
        return button;
    }

    renderCartItems();

    const proceedToPayButton = document.getElementById('proceed-to-pay');
    proceedToPayButton.addEventListener('click', () => {
        // Handle the logic for proceeding to payment, e.g., redirect to a payment page
        // You can add your logic here or redirect the user to a payment page using window.location.href
        // For example: window.location.href = 'payment.php';
        alert('Redirecting to payment page...');
    });
});

    </script>
<div class="footer">
  <div class="container">
      <div class="colhead">
          <div class="footer-col-1">
              <h3>Download our app on Andoid and iOS devices</h3>
              <img src="images/My project (3).png" height="150px">
          </div>
          <div class="footer-col-2">
              <img src="images/logo.png" class="logo" alt="" width="200px">
              <p>Our aim is to provide football merchandise to people all over India hassle-free</p>
          </div>
          <div class="footer-col-3">
              <h3>Follow us On:</h3>
              <li>FaceBook</li>
              <li>Twitter</li>
              <li>Instagram</li>
          </div>
</div>
</body>
</html>
