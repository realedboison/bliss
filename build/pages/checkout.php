<?php 
include '../components/connection.php';
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css">
  <!-- <script defer src="../js/script.js"></script>   -->
  <title>Checkout</title>
</head>
<?php include '../includes/navbar.php' ?>

<div class="pt-[160px]">
  <div class="container mx-auto pb-32">
    <div class="grid md:grid-cols-3 grid-cols-1 gap-6 md:flex-col-reverse">
    <div class="md:col-span-2">
    <div class="">
    <form action="" method="post">
      <!-- lg:w-[50vw] -->
        <div class="mx-auto lg:w-[70%] w-11/12">
          <div class="mb-6">
            <label for="" class="pb-4"><span class="text-darkestGray">Name</span> <sup class="text-crimson text-lg ">*</sup></label>
            <input name="name" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" type="text">
            <div class="text-crimson text-center text-sm pt-1">error msg</div>
          </div>  

          <div class="mb-6">
            <label for="" class="pb-4"> <span class="text-darkestGray">Email</span> <sup class="text-crimson text-lg ">*</sup></label>
            <input name="email" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" type="text">
            <div class="text-crimson text-center text-sm pt-1">error msg</div>
          </div>  

          <div class="mb-6">
            <label for=""><span class="text-darkestGray">Password</span> <sup class="text-crimson text-lg mb-4">*</sup></label>
            <input name="password" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" type="password">
            <div class="text-crimson text-center text-sm pt-1">error msg</div>
          </div>  

          <div class="mb-6">
            <label for=""><span class="text-darkestGray">Confirm Password</span> <sup class="text-crimson text-lg mb-4">*</sup></label>
            <input name="confirm-password" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" type="password">
            <div class="text-crimson text-center text-sm pt-1">error msg</div>
          </div>  

          <button class="btn-light">Submit</button>
          <div class="pt-12 text-center pb-[60px]">
            <!-- <div class="">Already have an account ? <a href="../pages/login.php"><span class="text-crimson font-semibold"> Login</span></a> </div> -->
          </div>
      </div>
    </form>
   </div>
  </div>
  <!-- side -->
        <div class="md:col-span-1 bg-lightGray p-10 rounded-xl">
          <div class="flex justify-between items-center border-b-2 border-b-midGray pb-4">
          <h4 class="font-semibold text-xl">Item</h4>
          <h4 class="font-semibold text-xl">Subtotal</h4>
          </div>
 
          <div class="flex justify-between items-center text-darkGray border-b-2 border-b-midGray py-2">
              <p class="text-sm">Lorem ipsum dolor. <span class="text-darkestGray">X 2</span> </p>
              <p class="text-sm">180</p>
          </div>
          <div class="flex justify-between items-center text-darkGray border-b-2 border-b-midGray py-2">
              <p class="text-sm">Lorem ipsum dolor. <span class="text-darkestGray">X 2</span> </p>
              <p class="text-sm">180</p>
          </div>
          <div class="flex justify-between items-center text-darkGray border-b-2 border-b-midGray py-2">
              <p class="text-sm">Lorem ipsum dolor.  <span class="text-darkestGray">X 2</span> </p>
              <p class="text-sm">180</p>
          </div>
          <div class="flex justify-between items-center font-semibold text-darkestGray border-b-2 border-b-midGray pb-2 pt-5">
              <p class="text-lg">Total</p>
              <p class="text-lg">180</p>
          </div>
         

          <div class="pt-10">
              <form action="">
              <div id="accordion">
                <!-- id="cash-on-delivery" -->
                <label for="cash-on-delivery">
                  <input type="radio" name="radio btn"  id="cash-on-delivery" class="mb-1 pb-2">&nbsp; Cash on delivery
                </label>

                <p id="cash-on-delivery-info" class="text-darkGray bg-dark p-3 border-2 rounded-xl mb-2 hidden paymentItem">
                  Pay with cash on delivery
                </p>
              </div>

              <div id="accordion">
                <label for="all-payments">
                  <input type="radio" name="radio btn"  id="all-payments" class="mb-1 pb-2">&nbsp; Paystack
                </label>
                
                <p id="all-payments-info" class="text-darkGray bg-dark p-3 border-2 rounded-xl mb-2 all-payments hidden paymentItem">
                  Africa-wide payments: Banks, mobile wallets, & cards accepted.
                </p>
              </div>
              </form>

              <div class="pt-5">
                <p class="text-sm text-darkGray ">
                To process your order and personalize your website experience, we collect some personal data.<br>
                We value your privacy. Learn how we use your data during checkout and to improve your experience<br> 
                <a class="underline" href="../pages/terms.php" target="_blank">(link to privacy policy)</a>.
                </p>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>
<?php include '../includes/footer.php' ?>

  
<script>

// const cashOnDeliveryBtn = document.querySelector("#cash-on-delivery");
// const cashOnDeliveryInfo = document.querySelector("#cash-on-delivery-info")
// const accordions = document.querySelectorAll('#accordion');

// const allPaymentsBtn = document.querySelector("#all-payments");
// const allPaymentsInfo = document.querySelector("#all-payments-info")

const accordions = document.querySelectorAll('#accordion'); 

for (const accordion of accordions) {
  accordion.addEventListener("click", function(e) {
    console.log(e);
    console.log(this);
    e.target.nextElementSibling.classList.toggle("hidden"); 
  });
};





// console.log(cashOnDeliveryBtn);
// console.log(cashOnDeliveryInfo);

// console.log(allPaymentsBtn); 
// console.log(allPaymentsInfo); 
console.log(accordions);

</script>  


