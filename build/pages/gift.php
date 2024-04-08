<?php 
include '../components/connection.php';
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css">
  <title>Gift Cards</title>
</head>
<?php include '../includes/navbar.php' ?>

<div class="container mx-auto pt-[160px] ">
<div>
<h4 class="mb-4 text-3xl font-semibold px-6">
  Gift Cards
</h4>
<div class="gap-12 my-14 grid grid-cols-fluid-15 px-6">

    <!-- Card 1 -->
    <div class="block border-8 border-lightGray rounded-xl overflow-hidden">
    <img
      alt=""
      src="../img/giftcard-1.jpg"
      class="h-64 w-full object-cover sm:h-80 lg:h-96"
    />

    <div class="p-5 text-center bg-lightGray mx-auto">
      <h3 class="mt-4 text-lg font-bold text-gray-900 sm:text-xl">Lorem, ipsum dolor.</h3>
      <p class="mt-2 max-w-sm text-gray-700 ">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni reiciendis sequi ipsam incidunt.
      
      </p>
      <p class="pt-4 text-2xl font-semibold border-t mt-4">
        ¢125.00
      </p>
      <div class="mt-10 mb-5">
      <a href="" class="btn-light">Add to Cart</a>
      </div>
    </div>
    </div>
    
    <!-- Card 2 -->
    <div class="block border-8 border-lightGray rounded-xl overflow-hidden">
    <img
      alt=""
      src="../img/giftcard-2.jpg"
      class="h-64 w-full object-cover sm:h-80 lg:h-96"
    />

    <div class="p-5 text-center bg-lightGray">
      <h3 class="mt-4 text-lg font-bold text-gray-900 sm:text-xl">Lorem, ipsum dolor.</h3>
      <p class="mt-2 max-w-sm text-gray-700">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni reiciendis sequi ipsam incidunt.
      </p>
      <p class="pt-4 text-2xl font-semibold border-t mt-4">
        ¢198.00
      </p>
      <div class="mt-10 mb-5">
      <a href="" class="btn-light">Add to Cart</a>
      </div>
    </div>
    </div>

    <!-- Card 3 -->
    <div class="block border-8 border-lightGray rounded-xl overflow-hidden">
    <img
      alt=""
      src="../img/giftcard-6.png"
      class="h-64 w-full object-cover sm:h-80 lg:h-96"
    />

    <div class="p-5 text-center bg-lightGray">
      <h3 class="mt-4 text-lg font-bold text-gray-900 sm:text-xl">Lorem, ipsum dolor.</h3>
      <p class="mt-2 max-w-sm text-gray-700">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni reiciendis sequi ipsam incidunt.
      </p>
      <p class="pt-4 text-2xl font-semibold border-t mt-4">
        ¢213.00
      </p>
      <div class="mt-10 mb-5">
      <a href="" class="btn-light">Add to Cart</a>
      </div>
    </div>
    </div>
</div>
</div>
</div>