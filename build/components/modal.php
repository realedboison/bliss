<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css">
  <title>Modal</title>
</head>

<!-- hidden -->
<div id="modal" class="h-screen w-full bg-darkest bg-opacity-60 backdrop-blur-sm fixed top-0 left-0 flex justify-center items-center px-10">
        <!-- modal -->
        <div class="bg-black rounded-2xl text-white xl:w-2/3 w-full p-10 ">
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