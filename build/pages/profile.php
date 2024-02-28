<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css">
  <title>Profile</title>
</head>
<?php include '../includes/navbar.php' ?>

<div class="pt-[160px]">
  <div class="container p-3 mx-auto xl:p-2 mb-14">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 ">
    
      <!-- outline outline-green-500 -->
      <div class="md:col-span-1 p-4  md:border-r-2 md:border-r-lightGray">
          <div class="flex flex-col items-center justify-start gap-y-10">     
            <div class="">
              <img src="../img/profile-picture.jpg" class="w-36 rounded-full" alt="">
              <p class="text-center font-semibold pt-4 text-darkestGray">Kweku Ahinful</p>
            </div>
            <div class="font-semibold flex flex-col items-center justify-center underline gap-y-3">
            <ul>
              <li><a href="?page=dashboard">Dashboard</a></li>
              <li><a href="?page=orders">Orders</a></li>
              <li><a href="?page=account">Account Details</a></li>
              <li><a href="../pages/main.php">Logout</a></li>
            </ul>
            </div>
          </div>
      </div>

  
      <div class="md:col-span-2 p-6">
      <div class="profile-details">
        <?php
          $currentPage = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

          switch ($currentPage) {
            case 'dashboard':
              echo '<h4 class="border-b-2 border-b-lightGray text-3xl font-semibold pb-1 ">Hello, Kweku !</h4>';
              echo '<p class="my-10 text-darkestGray">Welcome to the profile page</p>';
              break;
            case 'orders':
              echo '<h4 class="border-b-2 border-b-lightGray text-3xl font-semibold pb-1 ">Orders</h4>';
              echo '<div class="my-10 text-darkestGray flex items-center justify-between">
                      <p >No orders made yet.</p>
                      <div class="btn-light"><a href="../pages/products.php">Browse Products</a></div>
                    </div>';
              break;
            case 'account': 
              echo '<div class="">
                <form action="">
                <div class="mx-auto lg:w-[70%] w-11/12">
                
                <div class="mb-6">
                  <label for="" class="pb-4"><span class="text-darkestGray">First name</span> <sup class="text-crimson text-lg ">*</sup></label>
                  <input name="name" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" type="text">
                  <div class="text-crimson text-center text-sm pt-1">error msg</div>
                </div>  

                <div class="mb-6">
                  <label for="" class="pb-4"><span class="text-darkestGray">Last name</span> <sup class="text-crimson text-lg ">*</sup></label>
                  <input name="name" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" type="text">
                  <div class="text-crimson text-center text-sm pt-1">error msg</div>
                </div>  
        
                <div class="mb-6">
                  <label for="" class="pb-4"><span class="text-darkestGray">Display name</span> <sup class="text-crimson text-lg ">*</sup></label>
                  <input name="name" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" type="text">
                  <div class="text-crimson text-center text-sm pt-1">error msg</div>
                </div>  
        
                <div class="mb-6">
                  <label for="" class="pb-4"> <span class="text-darkestGray">Email</span> <sup class="text-crimson text-lg ">*</sup></label>
                  <input name="email" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" type="text">
                  <div class="text-crimson text-center text-sm pt-1">error msg</div>
                </div>  
        
                <div class="text-midGray pt-4 mb-5 italic text-sm border-b-2 border-b-lightGray">Change Password</div>

                <div class="mb-6">
                  <label for=""><span class="text-darkestGray">Current Password</span> <sup class="text-crimson text-lg mb-4">*</sup></label>
                  <input name="password" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" type="password">
                  <div class="text-crimson text-center text-sm pt-1">error msg</div>
                </div>

                <div class="mb-6">
                  <label for=""><span class="text-darkestGray">New Password</span> <sup class="text-crimson text-lg mb-4">*</sup></label>
                  <input name="password" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" type="password">
                  <div class="text-crimson text-center text-sm pt-1">error msg</div>
                </div>  
        
                <div class="mb-6">
                  <label for=""><span class="text-darkestGray">Confirm Password</span> <sup class="text-crimson text-lg mb-4">*</sup></label>
                  <input name="confirm-password" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" type="password">
                  <div class="text-crimson text-center text-sm pt-1">error msg</div>
                </div>  
                <button class="btn-light" type="submit" value="Submit">Save Changes</button>
                </form>
            </div>';
              break;
              }
          ?>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include '../includes/footer.php' ?>