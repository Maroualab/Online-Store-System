<?php
session_start(); 

// Make sure no output before header() or any HTML
require_once '../layouts/header.php'; // This is where potential output could start, so it should be included later
include '../../controllers/showProduct.php'; 

// Get the products globally
global $products;

// Check if user is logged in
if (!isset($_SESSION['user']['user_id'])) {
  // Redirect if not logged in
  header("location: ../../public/index.php");
  exit();
}

// Rest of your code for logged-in users
$user = isset($_SESSION['user']) ? $_SESSION['user'] : [];
?>

<!-- HTML and product display code goes here -->


<p>Welcome, <?php print_r($_SESSION['user']); ?>!</p>




<div class="font-sans p-4 mx-auto lg:max-w-6xl md:max-w-3xl">
  <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">


<?php
    foreach($products as $product){
      echo "
      <div class='bg-white flex flex-col overflow-hidden cursor-pointer hover:shadow-md transition-all'>
      <div class='w-full'>
        <img src='/online-store-system/public/images/" . htmlspecialchars($product['image_url']) . "' alt='Product_img'
          class='w-full object-cover object-top aspect-[230/307]' />
      </div>

      <div class='p-2 flex-1 flex flex-col'>
        <div class='flex-1'>
          <h5 class='text-sm sm:text-base font-bold text-gray-800 truncate'>$product[name]</h5>
          <p class='mt-1 text-gray-500 truncate'>$product[description]</p>
          <div class='flex flex-wrap justify-between gap-2 mt-2'>
            <div class='flex gap-2'>
              <h6 class='text-sm sm:text-base font-bold text-gray-800'>$$product[price]</h6>
            </div>
            
          </div>
        </div>
        <div class='flex items-center gap-2 mt-4'>
          <div class='bg-pink-100 hover:bg-pink-200 w-12 h-9 flex items-center justify-center rounded cursor-pointer'
            title='Wishlist'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16px' class='fill-pink-600 inline-block' viewBox='0 0 64 64'>
              <path
                d='M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z'
                data-original='#000000'></path>
            </svg>
          </div>
          <button type='button'
            class='text-sm px-2 min-h-[36px] w-full bg-blue-600 hover:bg-blue-700 text-white tracking-wide ml-auto outline-none border-none rounded'>Add
            to cart</button>
        </div>
      </div>
    </div>";

    }
?>


  </div>
</div>


<?php
require_once '../layouts/footer.php';
?>