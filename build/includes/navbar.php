<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css">
  <title>Navbar</title>
</head>

  <nav class="fixed top-0 left-0 z-50 w-full p-5 text-2xl text-white bg-darkest xl:px-10 xl:py-8">
    <div class="relative mx-auto container-xxl">
      <div class="flex items-center justify-between">
        <a href="../pages/main.php">
          <img src="../img/bliss-logo.png" alt="brand logo" class="xl:size-16 size-14">
        </a>
        <div>
          <ul class="items-center justify-center hidden gap-4 text-white xl:flex">
            <li><a href="../pages/main.php" class="font-semibold underline focus:text-darkGray hover:text-midGray">Home</a></li>
            <li><a href="../pages/products.php" class="font-semibold underline focus:text-darkGray hover:text-midGray">Products</a></li>  
          </ul>
        </div>
        

        <div class="flex">
         <div class="flex items-center gap-2 text-lightGray ">
         <div class="items-center justify-center hidden gap-6 xl:flex">
          <!-- ../pages/products.php -->
          <button class="btn-sm"><a href="../pages/login.php">Login</a> </button>
          <button class="btn-sm"><a href="../pages/register.php">Register</a></button>
         </div>
         <!-- SEARCH -->
          <div class="ml-10 cursor-pointer xl:flex focus:text-darkGray hover:text-midGray"  id="show-modal">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12 ">
              <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
          </div>
          <!-- PROFILE -->
          <div class="hidden cursor-pointer xl:flex focus:text-darkGray hover:text-midGray" id="profile-btn">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
          </div>
          <!-- CART -->
          <a href="../pages/cart.php" class="relative cursor-pointer xl:flex focus:text-darkGray hover:text-midGray">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-4 size-12">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
            </svg>
          </a>
          <div class="size-[35px] bg-primary grid place-items-center rounded-full absolute xl:-top-[4px] xl:-right-[15px] -top-[4px] right-[60px]  text-sx">
             <div class="text-[17px] text-darkest font-semibold">20</div>
          </div>
         </div>
          <!-- MOBILE MENU -->
          <div class="block ml-4 cursor-pointer xl:hidden text-primary focus:text-darkGray hover:text-midGray" id="menu-btn">
            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 32 32" class="size-[58px]"  fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
            <path d="M4 8 L28 8 M4 16 L28 16 M4 24 L28 24"/>
            </svg>
          </div>
        </div>
        
      </div>
    </div>
  </nav>

 <!-- MODAL START -->
  <!-- <body>  -->
    <div id="modal" class="fixed top-0 left-0 z-50 flex items-center justify-center hidden w-full h-screen px-5 bg-darkest bg-opacity-60 backdrop-blur-sm">
        <!-- MODAL -->
        <div class="bg-darkest rounded-xl text-white xl:w-2/3 w-full p-10 overflow-y-auto max-h-full outline outline-[1px] outline-secondary">
            <div class="flex items-center justify-between">
                <div>
                  <a href="../includes/navbar.php">
                  <img src="../img/bliss-logo.png" class="size-12" alt="brand logo">
                  </a>
                </div>

                <a class="cursor-pointer" id="close-modal"  href="#">
                <div class="flex items-center justify-center rounded-full bg-crimsonWashed size-12">
                <ion-icon class="size-10 text-crimson" name="close-outline"></ion-icon>
                </div>
                </a>
            </div>
            
            <div class="my-5 bt-20">
              <div>
                <div class="text-black rounded-full">
                  <div class="relative mx-auto">
                    <!-- FORM -->
                    <form action="" >
                      <div>
                        <ion-icon name="search-outline" class="absolute z-10 size-8 text-darkGray top-3 left-2"></ion-icon>
                        <input type="search" name="search" placeholder="search product" class="w-full py-4 pl-12 pr-4 rounded-xl focus:ring-2 ring-primary">
                      </div>
                    </form>
                  </div>
                  <div class="mt-10 border-t border-t-borderColor">  
                      <div class="grid justify-center mx-auto my-4 gap-y-6 grid-cols-fluid-10">
                        <div>
                          <h4 class="pb-1 font-semibold text-white">Product </h4>
                          <img src="../img/mango.jpg" class="size-28 rounded-xl" alt="product image">
                        </div>

                        <div>
                          <h4 class="pb-1 font-semibold text-white">Product Name</h4>
                          <p class="text-sm text-midGray">lorem, ipsum dolor.</p>
                        </div>

                        <div>
                          <h4 class="pb-1 font-semibold text-white">Description</h4>
                          <p class="text-sm text-midGray">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero eaque ad accusantium molestiae dolorem veniam.</p>
                        </div>

                        <div>
                          <h4 class="pb-1 font-semibold text-white">Price</h4>
                          <p class="text-sm text-midGray">550.00</p>
                        </div>
                    
                        <div class="product-wrapper btn-wrapper">
                          <button class="btn-sm">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="flex items-center justify-end border-t border-t-borderColor" >
                <button class="btn" id="close-modal">
                Close
                </button>
            </div>
        </div>
    </div> 
<!-- MODAL END -->

<!-- PROFILE STARTS -->
    <div id="profile-wrapper-sm" class="w-50 h-54 bg-darkest rounded-xl absolute top-[137px] right-[10px] outline outline-[1px] outline-secondary p-7 hidden z-50">
      <div class="flex flex-col items-center justify-center gap-4 ">
        <img src="../img/profile-picture.jpg" alt="" class="rounded-full size-24">
        <div class="w-full font-semibold leading-6 text-center text-white">Kweku Ahinful</div>
          <div class="flex gap-5">
            <div class="btn-sm">Profile</div>
            <div class="btn-sm">Logout</div>
          </div>
      </div>
    </div>
<!-- PROFILE END -->

<!-- HAMBURGER MENU START -->
      <div id="menu" class="w-50 h-54 bg-darkest rounded-xl absolute xl:top-[137px] xl:right-[10px] top-[103px] right-[5px] outline outline-[1px] outline-secondary p-7 hidden z-50">
      <div class="flex flex-col items-center justify-center gap-4 ">
        <a href="#" class="w-full font-semibold text-center text-white underline focus:text-darkGray hover:text-midGray">Home</a>
        <a href="#" class="w-full font-semibold text-center text-white underline focus:text-darkGray hover:text-midGray">Products</a>
       
        <div class="flex gap-5 pt-4">
          <a href="../../pages/login" class="btn-sm">Login</a>
          <a href="../../pages/register" class="btn-sm">Register</a>
        </div>
       
      </div>
    </div> 
<!-- HAMBURGER MENU END -->


<script src="../js/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
