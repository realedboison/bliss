<?php 
include '../components/connection.php';
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css">
  <title>Cart</title>
</head>
<?php include '../includes/navbar.php' ?>
<div class="pt-[200px] ">

<!-- container mx-auto -->
<div class="container p-3 mx-auto xl:p-2 mb-14">
  <!-- outline outline-orange-500 mb-14 -->
    <div class="relative grid gap-6 pt-2 mx-auto text-sm border-t-2 grid-cols-fluid-10 border-t-midGray">
          <div class="w-[150px]">
            <img src="../img/giftcard-1.jpg" class="" alt="gift card">
          </div>

          <div class="">
            <h4 class="pb-1 font-semibold">Product</h4>
            <p class="text-darkestGray">lorem, ipsum dolor.</p>
          </div>

          <div class="">
            <h4 class="pb-1 font-semibold">Description</h4>
            <p class="text-darkestGray">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero eaque ad accusantium molestiae dolorem veniam.</p>
      
          </div>
          <div class="product-wrapper">
            <h4 class="pb-1 font-semibold">Price</h4>
            <p class="text-darkestGray">550.00</p>
          </div>
          <div class="flex flex-col">
            <h4 class="pb-1 font-semibold ">Qty</h4>
           <div class="flex items-center justify-start gap-2 ">
            <div class="flex items-center justify-center w-6 h-6 text-xl text-white rounded-full cursor-pointer bg-darkGray">+</div>
            <div class="flex items-center justify-center updated-value "><div>400</div></div>
            <div class="flex items-center justify-center w-6 h-6 text-xl text-white rounded-full cursor-pointer bg-darkGray">-</div>
           </div>
          </div>

          <div class="product-wrapper">
            <h4 class="pb-1 font-semibold">Total</h4>
            <p class="text-darkestGray">2,550.00</p>
          </div>
      
          <div class="mb-8 product-wrapper btn-wrapper">
            <button class="btn-light">
              Checkout
            </button>
          </div>
          <a href="" class="absolute text-white top-[-19px] right-[-15px] bg-crimson size-10 flex items-center justify-center rounded-full">
              <div class="text-4xl">
              <ion-icon name="close-outline"></ion-icon>
              </div>
          </a>
    </div>
    
    <div class="relative grid gap-6 pt-2 mx-auto text-sm border-t-2 grid-cols-fluid-10 border-t-midGray">
          <div class="w-[150px]">
            <img src="../img/giftcard-1.jpg" class="" alt="gift card">
          </div>

          <div class="">
            <h4 class="pb-1 font-semibold">Product</h4>
            <p class="text-darkestGray">lorem, ipsum dolor.</p>
          </div>

          <div class="">
            <h4 class="pb-1 font-semibold">Description</h4>
            <p class="text-darkestGray">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero eaque ad accusantium molestiae dolorem veniam.</p>
      
          </div>
          <div class="product-wrapper">
            <h4 class="pb-1 font-semibold">Price</h4>
            <p class="text-darkestGray">550.00</p>
          </div>
          <div class="flex flex-col ">
            <h4 class="pb-1 font-semibold ">Qty</h4>
           <div class="flex items-center justify-start gap-2 ">
            <div class="flex items-center justify-center w-6 h-6 text-xl text-white rounded-full cursor-pointer bg-darkGray">+</div>
            <div class="flex items-center justify-center updated-value "><div>40</div></div>
            <div class="flex items-center justify-center w-6 h-6 text-xl text-white rounded-full cursor-pointer bg-darkGray">-</div>
           </div>
          </div>

          <div class="product-wrapper">
            <h4 class="pb-1 font-semibold">Total</h4>
            <p class="text-darkestGray">2,550.00</p>
          </div>
      
          <div class="mb-8">
            <button class="btn-light">
              Checkout
            </button>
          </div>
          <a href="" class="absolute text-white top-[-19px] right-[-15px] bg-crimson size-10 flex items-center justify-center rounded-full">
              <div class="text-4xl">
              <ion-icon name="close-outline"></ion-icon>
              </div>
          </a>
    </div>
</div>
</div>
<?php include '../includes/footer.php' ?>