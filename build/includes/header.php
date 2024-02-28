<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css">
  <title>Document</title>
</head>
<body>
    <?php include '../includes/navbar.php' ?>
      <div class="w-full relative">
        <img src="../img/hero-blurred.png" class="xl:h-[65vh] h-[60vh] mt-[92px] xl:mt-[125px] w-full object-cover brightness-[0.23] rounded-bl-3xl rounded-br-3xl overflow-hidden" alt="hero-image">
   
          <div class="absolute w-full inset-0 flex flex-col items-center justify-center">
            <h3 class="xl:text-6xl text-5xl mb-4 font-bold text-lightest"> 
              <span class="text-transparent bg-gradient-to-r from-red-500 to-yellow-500 bg-clip-text">Bliss Smoothies</span>   
            </h3>
            <p class="text-xl mb-6 text-lightest">blend the bliss, sip the goodness</p>
            <button class="btn-lg"> <a href="../pages/products.php">Order Now</a> </button> 
            <!-- href="../pages/terms.php"  -->
          </div>
      </div>
</body>
</html>