<?php
session_start();

include '../components/connection.php';

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
  header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css?v=<?php echo time(); ?>">
  <title>Profile</title>
</head>

<?php include '../includes/navbar.php' ?>

<div class="pt-[160px]">
  <div class="container p-3 mx-auto xl:p-2 mb-14">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 ">
        <?php
            $select_profile = $conn->prepare("SELECT * FROM `admin` WHERE id = ?");
            $select_profile->execute([$admin_id]);

            if ($select_profile->rowCount() > 0) {
                $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC); 
            }
        ?>
        <div class="md:col-span-1 p-4 md:border-r-2 md:border-r-lightGray">
          <div class="flex flex-col items-center justify-start gap-y-10">

            <!-- <img src="/uploaded_image/<?= $fetch_profile['profile']; ?>" class="w-36 rounded-full"> -->
                    
            <!-- <p class="capitalize"><?= $fetch_profile['name']; ?></p> -->
                
            <?php if (!empty($fetch_profile)) : ?>
                        <!-- Profile Image -->
                        <img src="/uploaded_image/<?= $fetch_profile['profile']; ?>" class="w-36 rounded-full">

                        <!-- Profile Name -->
                        <p class="capitalize"><?= $fetch_profile['name']; ?></p>
            <?php else : ?>
                        <!-- Default Profile Image -->
                        <img src="/path/to/default/image.jpg" class="w-36 rounded-full">
                        <!-- Placeholder Name -->
                        <p class="capitalize">Guest User</p>
            <?php endif; ?>


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
              echo '<h4 class="capitalize border-b-2 border-b-lightGray text-3xl font-semibold pb-1">' . $fetch_profile['name'] . '</h4>';
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
                  <input name="first_name" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" type="text">
                  <div class="text-crimson text-center text-sm pt-1">error msg</div>
                </div>  

                <div class="mb-6">
                  <label for="" class="pb-4"><span class="text-darkestGray">Last name</span> <sup class="text-crimson text-lg ">*</sup></label>
                  <input name="last_name" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" type="text">
                  <div class="text-crimson text-center text-sm pt-1">error msg</div>
                </div>  

                <div class="mb-6">
                  <label for="" class="pb-4"><span class="text-darkestGray">Display name</span> <sup class="text-crimson text-lg ">*</sup></label>
                  <input name="display_name" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" type="text">
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
                  <input name="current_password" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" type="password">
                  <div class="text-crimson text-center text-sm pt-1">error msg</div>
                </div>

                <div class="mb-6">
                  <label for=""><span class="text-darkestGray">New Password</span> <sup class="text-crimson text-lg mb-4">*</sup></label>
                  <input name="new_password" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" type="password">
                  <div class="text-crimson text-center text-sm pt-1">error msg</div>
                </div>  

                <div class="mb-6">
                  <label for=""><span class="text-darkestGray">Confirm Password</span> <sup class="text-crimson text-lg mb-4">*</sup></label>
                  <input name="confirm_password" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" type="password">
                  <div class="text-crimson text-center text-sm pt-1">error msg</div>
                </div>  
                <button class="btn-light" type="submit" value="Submit">Save Changes</button>
                </form>
                </div>

                  <button class="btn-light" type="submit" value="Submit">Save Changes
                  </button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
<?php include '../components/alert.php';?>
<?php include '../includes/footer.php';?>