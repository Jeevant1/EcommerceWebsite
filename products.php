<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
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
        <div id="search_bar">
            <input type="text" id="search_input" placeholder="Search">
            <button id="search_button">Search</button>
          </div>
          
          
          
    </div>

    
    <h2 class="products_heading">All Products</h2>
    <select>
        <option value="">Default Sorting</option>
        <option value="asc">Price Ascending</option>
        <option value="desc">Price Descending</option>
        
    </select>
    <style>
        select {
  font-family: inherit;
  font-size: 16px;
  font-weight: 400;
  color: #333;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #f7f7f7;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

select:focus {
  outline: none;
  border-color: #6b6b6b;
}

option {
  font-family: inherit;
  font-size: 16px;
  font-weight: 400;
  color: #333;
  background-color: #f7f7f7;
}
</style>
        </div>
        <div class="colhead" id="colhead">
        <div class="col2">
          <img src="images/argentina.png" width="200" height="360">
          <h4>Argentina Jersey</h4>
          <p>Rs. 1250</p>
          <button class="add-to-cart-button" data-name="Argentina Jersey" data-price="1250" data-image="images/argentina.png">Add to Cart</button>
        </div>

      <div class="col2">
          <img src="images/brazil.png" width="200" height="360">
          <h4>Brazil Jersey</h4>
          <p>Rs. 1200</p>
          <button class="add-to-cart-button" data-name="Brazil Jersey" data-price="1200" data-image="images/brazil.png">Add to Cart</button>
      </div>

      <div class="col2">
          <img src="images/france.png" width="200" height="360">
          <h4>France Jersey</h4>
          <p>Rs. 1250</p>
          <button class="add-to-cart-button" data-name="France Jersey" data-price="1250" data-image="images/france.png">Add to Cart</button>
      </div>

      <div class="col2">
          <img src="images/liver.png" width="200" height="360">
          <h4>Liverpool T-shirt</h4>
          <p>Rs. 750</p>
          <button class="add-to-cart-button" data-name="Liverpool T-shirt" data-price="750" data-image="images/liver.png">Add to Cart</button>
      </div>

      <div class="col2">
          <img src="images/psg.png" width="200" height="360">
          <h4>PSG T-shirt</h4>
          <p>Rs. 700</p>
          <button class="add-to-cart-button" data-name="PSG T-shirt" data-price="700" data-image="images/psg.png">Add to Cart</button>
      </div>

      <div class="col2">
          <img src="images/arsenal.png" width="200" height="360">
          <h4>Arsenal T-shirt</h4>
          <p>Rs. 750</p>
          <button class="add-to-cart-button" data-name="Arsenal T-shirt" data-price="750" data-image="images/arsenal.png">Add to Cart</button>
      </div>

      <div class="col2">
          <img src="images/city.png" width="200" height="360">
          <h4>Manchester City T-shirt</h4>
          <p>Rs. 750</p>
          <button class="add-to-cart-button" data-name="Manchester City T-shirt" data-price="750" data-image="images/city.png">Add to Cart</button>
      </div>

      <div class="col2">
          <img src="images/man_united_jersey.jpg" width="200" height="360">
          <h4>Manchester United Jersey</h4>
          <p>Rs. 1250</p>
          <button class="add-to-cart-button" data-name="Manchester United Jersey" data-price="1250" data-image="images/man_united_jersey.jpg">Add to Cart</button>
      </div>

      <div class="col2">
          <img src="images/psg_shoes.png" width="200" height="360">
          <h4>PSG Shoes</h4>
          <p>Rs. 2600</p>
          <button class="add-to-cart-button" data-name="PSG Shoes" data-price="2600" data-image="images/psg_shoes.png">Add to Cart</button>
      </div>

      <div class="col2">
          <img src="images/barca_shoes.avif" width="200" height="360">
          <h4>Barcelona Shoes</h4>
          <p>Rs. 3700</p>
          <button class="add-to-cart-button" data-name="Barcelona Shoes" data-price="3700" data-image="images/barca_shoes.avif">Add to Cart</button>
      </div>

      <div class="col2">
          <img src="images/arsenal_shoes.jpg" width="200" height="360">
          <h4>Arsenal Shoes</h4>
          <p>Rs. 2900</p>
          <button class="add-to-cart-button" data-name="Arsenal Shoes" data-price="2900" data-image="images/arsenal_shoes.jpg">Add to Cart</button>
      </div>

      <div class="col2">
          <img src="images/puma_shoes.webp" width="200" height="360">
          <h4>Puma Shoes</h4>
          <p>Rs. 3100</p>
          <button class="add-to-cart-button" data-name="Puma Shoes" data-price="3100" data-image="images/puma_shoes.webp">Add to Cart</button>
      </div>

    </div>
 

    <script>
        const selectElem = document.querySelector('select');
        const colheadElem = document.querySelector('.colhead');
      
        selectElem.addEventListener('change', () => {
          const sortValue = selectElem.value;
          const col2Elems = Array.from(colheadElem.querySelectorAll('.col2'));
      
          col2Elems.sort((a, b) => {
            const aPrice = parseInt(a.querySelector('p').textContent.replace(/[^0-9]/g, ''));
            const bPrice = parseInt(b.querySelector('p').textContent.replace(/[^0-9]/g, ''));
      
            if (sortValue === 'asc') {
              return aPrice - bPrice;
            } else if (sortValue === 'desc') {
              return bPrice - aPrice;
            } else {
              return 0;
            }
          });
      
          col2Elems.forEach(col2Elem => {
            colheadElem.appendChild(col2Elem);
          });
        });


      </script>
      
        <!-- <div class="footer">
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
        </div>
        </div> -->
      
  <script>
    const searchInput = document.querySelector('#search_input');
const searchButton = document.querySelector('#search_button');
const col2Elems = Array.from(document.querySelectorAll('.col2'));

searchButton.addEventListener('click', () => {
  const searchTerm = searchInput.value.toLowerCase();
  
  col2Elems.forEach(col2Elem => {
    const text = col2Elem.textContent.toLowerCase();
    
    if (text.includes(searchTerm)) {
      col2Elem.style.display = 'block';
    } else {
      col2Elem.style.display = 'none';
    }
  });
});
</script> 
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Define and initialize cartItems as an empty array
    let cartItems = [];

    // Select the cart icon by ID
    const cartIcon = document.getElementById('cart-icon');

    // Attach event listener to the cart icon
    cartIcon.addEventListener('click', () => {
        // Redirect to cart.php when the cart icon is clicked
        window.location.href = 'cart.php';
    });

    // Select all elements with the class 'add-to-cart-button'
    const addToCartButtons = document.querySelectorAll('.add-to-cart-button');

    // Iterate over the NodeList and attach event listeners to each button
    addToCartButtons.forEach(addToCartButton => {
        addToCartButton.addEventListener('click', () => {
            const productName = addToCartButton.getAttribute('data-name');
            const productPrice = parseInt(addToCartButton.getAttribute('data-price'));
            const productImage = addToCartButton.getAttribute('data-image');
            
            if (productName && !isNaN(productPrice)) {
                addToCartHandler(productName, productPrice, productImage);
            } else {
                console.error('Invalid product data. Please check the data attributes.');
            }
        });
    });

    function addToCartHandler(productName, price, image) {
        const existingCartItem = cartItems.find(item => item.name === productName);
        if (existingCartItem) {
            existingCartItem.quantity++;
        } else {
            cartItems.push({ name: productName, price: price, image: image, quantity: 1 });
        }
        localStorage.setItem('cartItems', JSON.stringify(cartItems));
    }
});
</script>
</body>
</html>