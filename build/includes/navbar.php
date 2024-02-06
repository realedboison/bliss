

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css">
  <title>Navbar</title>
</head>

  <nav class="fixed w-full top-0 left-0 bg-darkest text-white px-10 py-8 text-2xl rounded-bl-3xl rounded-br-3xl">
    <!-- outline-gray-600 outline -->
    <div class="mx-auto container-xxl ">
      <div class="flex justify-between items-center">
        <div class="">
          <!-- h-[6px] w-[6px] -->
          <img src="../img/bliss-logo.png" alt="brand logo" class="size-16">
        </div>
        <div class="">
          <ul class="xl:flex justify-center items-center gap-4 hidden text-primary">
            <li><a href="" class="focus:text-darkGray hover:text-midGray font-semibold underline">Home</a></li>
            <li><a href="" class="focus:text-darkGray hover:text-midGray font-semibold underline">Products</a></li>  
          </ul>
        </div>
        <div class="flex">
         <div class="flex items-center gap-2  text-primary ">
          <div class="xl:flex hover:text-yellowWashed "  id="show-modal">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
              <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
          </div>
          <div class="xl:flex hidden hover:text-yellowWashed">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
            
          </div>
          <div class="xl:flex hidden hover:text-yellowWashed">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12 ml-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
            </svg>
            
          </div>
         </div>

          <div class="ml-4 block xl:hidden text-primary focus:text-darkGray hover:text-midGray">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-16">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </div>
        </div>
        
      </div>
    </div>
  </nav>


  <div class="mt-48">
    tae repellendus quos culpa suscipit doloribus laborum pariatur illo natus error. Vero qui dicta voluptates sed possimus deleniti placeat ipsam odit eum saepe. Itaque quae perspiciatis, aut a laborum praesentium!
  </div>

  <!-- MODAL START -->
  <!-- <body class=""> -->
    <!-- <button class="bg-green-600 px-3 py-1 rounded-2xl m-5 text-white" id="show-modal">show modal</button> -->
    
    <div id="modal" class="h-screen w-full bg-darkest bg-opacity-60 backdrop-blur-sm fixed top-0 left-0 flex justify-center items-center hidden">
        <!-- modal -->
        <div class="bg-black rounded-2xl text-white w-2/3 p-10 ">
            <div class="border-b flex justify-between leading-10">
                <div class="">
                    <h3 class="">Lorem, ipsum dolor.</h3>
                </div>
                <a class="cursor-pointer" id="close-modal"  href="#">
                  <!-- <div></div> -->
                  
          
                &#10006;
                </a>
            </div>
            
            <div class="bt-20 my-5">
                <p class="">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae laborum iste, explicabo quidem nostrum ratione. Tempore ea consequatur harum vero!
                </p>
            </div>

            <div class="border-t " >
                <button class="bg-primary text-darkest  flex justify-end
                items-center self- mt-6 px-4 py-2 rounded-md cursor-pointer" id="close-modal">
                close
                </button>
            </div>
        </div>
    </div>

    <script src="../js/modal.js"></script>
<!-- </body>                -->

  <!-- MODAL END -->
  <style src="../js/script.js"></style>
