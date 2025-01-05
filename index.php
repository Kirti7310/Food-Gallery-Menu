<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sizzle & Spice</title>
  <link rel="stylesheet" href="css/food.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>
<body>
  <header>
    <h1>Sizzle & Spice</h1>
  </header>

  <div class="filter-buttons">
  <button id="veg-filter"><i class="fa fa-leaf"></i> Veg</button>
  <button id="non-veg-filter"><i class="fa fa-drumstick-bite"></i> Non-Veg</button>
  <button id="all-filter"><i class="fa fa-utensils"></i> All</button>
</div>

  <div class="container-main">
    <div class="sub-container">
      <!-- Dish 1 -->
      <div class="menu-item">
        <img src="images/Spaghetti Carbonara.jpg" alt="Dish 1" class="main-img">
        <div class="dish-details">
          <h3 class="dish-title">Spaghetti Carbonara</h3>
          <p class="dish-price"><i class="fas fa-inr"></i>380</p>
        </div>
        <p class="category" style="display: none;">Non-Veg</p> 
        <div class="dish-hover">
          <p class="recipe">Ingredients: Spaghetti, Eggs, Parmesan, Pancetta, Black Pepper</p>
          <button class="order-btn">Order Now</button>
        </div>
      </div>

      <!-- Dish 2 -->
      <div class="menu-item">
        <img src="images/Chicken Alfredo_ Creamy, Dreamy, and Delicious.jpg" alt="Dish 2" class="main-img">
        <div class="dish-details">
          <h3 class="dish-title">Chicken Alfredo</h3>
          <p class="dish-price"><i class="fas fa-inr"></i>490</p>
        </div>
        <p class="category" style="display: none;">Non-Veg</p> 
        <div class="dish-hover">
          <p class="recipe">Ingredients: Fettuccine, Chicken, Cream, Garlic, Parmesan</p>
          <button class="order-btn">Order Now</button>
        </div>
      </div>

      <!-- Dish 3 -->
      <div class="menu-item">
        <img src="images/Margherita Pizza.jpg" alt="Dish 3" class="main-img">
        <div class="dish-details">
          <h3 class="dish-title">Margherita Pizza</h3>
          <p class="dish-price"><i class="fas fa-inr"></i>290</p>
        </div>
        <p class="category" style="display: none;">Veg</p> 
        <div class="dish-hover">
          <p class="recipe">Ingredients: Dough, Tomato Sauce, Mozzarella, Basil</p>
          <button class="order-btn">Order Now</button>
        </div>
      </div>


      <div class="menu-item">
  <img src="images/Marinated Salmon with Garlic and Herbs.jpg" alt="Dish 4" class="main-img">
  <div class="dish-details">
    <h3 class="dish-title">Grilled Salmon</h3>
    <p class="dish-price"><i class="fas fa-inr"></i>290</p>
    </div>
  <p class="category" style="display: none;">Non-Veg</p> 
  <div class="dish-hover">
    <p class="recipe">Ingredients: Fresh Salmon, Lemon, Olive Oil, Garlic, Herbs</p>
    <button class="order-btn">Order Now</button>
  </div>
</div>

<!-- Dish 5 -->
<div class="menu-item">
  <img src="images/Classic Cheeseburger [25 Minutes].jpg" alt="Dish 5" class="main-img">
  <div class="dish-details">
    <h3 class="dish-title">Classic Cheeseburger</h3>
    <p class="dish-price"><i class="fas fa-inr"></i>200</p>
    </div>
  <p class="category" style="display: none;">Non-Veg</p> 
  <div class="dish-hover">
    <p class="recipe">Ingredients: Chicken Patty, Cheddar Cheese, Lettuce, Tomato, Pickles</p>
    <button class="order-btn">Order Now</button>
  </div>
</div>

<!-- Dish 6 -->
<div class="menu-item">
  <img src="images/Chocolate Lava Cake.jpg" alt="Dish 6" class="main-img">
  <div class="dish-details">
    <h3 class="dish-title">Chocolate Lava Cake</h3>
    <p class="dish-price"><i class="fas fa-inr"></i>200</p>
    </div>
  <p class="category" style="display: none;">Non-Veg</p> 
  <div class="dish-hover">
    <p class="recipe">Ingredients: Dark Chocolate, Butter, Sugar, Eggs, Flour</p>
    <button class="order-btn">Order Now</button>
  </div>
</div>

<!-- Dish 7 -->
<div class="menu-item">
  <img src="images/Chicken Fajita Tacos [35 Minutes].jpg" alt="Dish 7" class="main-img">
  <div class="dish-details">
    <h3 class="dish-title">Chicken Tacos</h3>
    <p class="dish-price"><i class="fas fa-inr"></i>250</p>
    </div>
  <p class="category" style="display: none;">Non-Veg</p> 
  <div class="dish-hover">
    <p class="recipe">Ingredients: Grilled Chicken, Taco Shells, Lettuce, Cheese, Salsa</p>
    <button class="order-btn">Order Now</button>
  </div>
</div>

<div class="menu-item">
  <img src="images/EASY Vegetable Stir Fry Recipe.jpg" alt="Dish 8" class="main-img">
  <div class="dish-details">
    <h3 class="dish-title">Vegetable Stir-Fry</h3>
    <p class="dish-price"><i class="fas fa-inr"></i>240</p>
    </div>
  <p class="category" style="display: none;">Veg</p> 
  <div class="dish-hover">
    <p class="recipe">Ingredients: Broccoli, Bell Peppers, Carrots, Soy Sauce, Sesame Oil</p>
    <button class="order-btn">Order Now</button>
  </div>
</div>

<div class="menu-item">
  <img src="images/Classic Caesar Salad.jpg" alt="Dish 9" class="main-img">
  <div class="dish-details">
    <h3 class="dish-title">Caesar Salad</h3>
    <p class="dish-price"><i class="fas fa-inr"></i>200</p>
    </div>
  <p class="category" style="display: none;">Veg</p> 
  <div class="dish-hover">
    <p class="recipe">Ingredients: Romaine Lettuce, Croutons, Parmesan, Caesar Dressing</p>
    <button class="order-btn">Order Now</button>
  </div>
</div>

    </div>
  </div>

  <script src="js/script.js"></script>
</body>
</html>
