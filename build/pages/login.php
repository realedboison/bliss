<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css">
  <title>Login</title>
</head>
<?php include '../includes/navbar.php' ?>
<div class="pt-[200px]">

<!-- container mx-auto -->
<div class="">
    <form action="" method="post" class="">
      <!-- lg:w-[50vw] -->
      <div class="mx-auto lg:w-6/12 w-11/12">
        <h4 class="text-center text-3xl pb-10 text-darkestGray font-semibold">Login</h4>
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

        <button class="btn-light">Submit</button>
        <div class="pt-12 text-center pb-[60px]">
          <div class="">Don't have an account ? <a href="../pages/register.php"><span class="text-crimson font-semibold"> Register</span></a> </div>
        </div>
      </div>
    </form>
</div>
</div>
<?php include '../includes/footer.php' ?>