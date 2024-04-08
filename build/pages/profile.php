<?php

include '../components/connection.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['update'])){

  $name = $_POST['name'];
  $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');

  $email = $_POST['email'];
  $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

  $update_profile = $conn->prepare("UPDATE `admin` SET name = ?, email = ? WHERE id = ?");
  $update_profile->execute([$name, $email, $user_id]);

  $old_image = $_POST['old_image'];
  $image = $_FILES['image']['name'];
  $image_tmp_name = $_FILES['image']['tmp_name'];
  $image_size = $_FILES['image']['size'];
  $image_folder = '../uploaded_image/'.$image;

  if(!empty($image)){

      if($image_size > 2000000){
        $warning_msg[] = 'image size is too large';
      } else {
        $update_image = $conn->prepare("UPDATE `admin` SET profile = ? WHERE id = ?");
        $update_image->execute([$image, $user_id]);

        if($update_image) {
          move_uploaded_file($image_tmp_name, $image_folder);
          unlink('../uploaded_image/'.$old_image);
          $success_msg[] = 'image is updated!';
        }
      }
  }

  $old_pass = $_POST['old_pass'];

  $previous_pass = sha1($_POST['previous_pass']);
  $previous_pass = htmlspecialchars($previous_pass, ENT_QUOTES, 'UTF-8');

  $new_pass = sha1($_POST['new_pass']);
  $new_pass = htmlspecialchars($new_pass, ENT_QUOTES, 'UTF-8');

  $confirm_pass = sha1($_POST['confirm_pass']);
  $confirm_pass = htmlspecialchars($confirm_pass, ENT_QUOTES, 'UTF-8');


  if(!empty($previous_pass) || !empty($new_pass) || !empty($confirm_pass)){
    if($previous_pass != $old_pass){
      $warning_msg[] = 'old password not matched';
    }elseif($new_pass != $confirm_pass){
      $warning_msg[] = 'confirm passwords not matched';
    }else {
      $update_password = $conn->prepare("UPDATE `admin` SET password = ? WHERE id = ?");
      $update_password->execute([$confirm_pass, $user_id]);
      $success_msg[] = 'password has been updated!';
    }
  }
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
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <?php
            $select_profile = $conn->prepare("SELECT * FROM `admin` WHERE id = ?");
            $select_profile->execute([$user_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC); 
        ?>    

        <div class="md:col-span-1 p-4 md:border-r-2 md:border-r-lightGray">
          <div class="flex flex-col items-center justify-start gap-y-10">
         
              <img src="../uploaded_image/<?php echo empty($fetch_profile['profile']) ? '../uploaded_image/avatar.png' : $fetch_profile['profile'] ?>" alt="profile image" class="w-36 h-36 rounded-full" >
              
              <p class="capitalize font-bold text-xl">
                <?= $fetch_profile['name']; ?>
              </p>
            
            <div class="font-semibold flex flex-col items-center justify-center underline gap-y-3">


              <ul>
                <li><a href="?page=dashboard">Dashboard</a></li>
                <li><a href="?page=orders">Orders</a></li>
                <li><a href="?page=account">Account Details</a></li>
                <li><a href="../pages/logout.php">Logout</a></li>
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
              $select_profile = $conn->prepare("SELECT * FROM `admin` WHERE id = ?");
              $select_profile->execute([$user_id]);
              $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
              // ?>    
            <div class="">
              <form method="post" enctype="multipart/form-data">
                <div class="mx-auto lg:w-[70%] w-11/12">
                
                <div class="mb-6">
                  <label  class="pb-4"><span class="text-darkestGray">Name</span> <sup class="text-crimson text-lg ">*</sup></label>
                  <input name="name" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" type="text" value="<?= $fetch_profile['name']; ?>">
                </div>  

                <div class="mb-6">
                  <label class="pb-4"> <span class="text-darkestGray">Email</span> <sup class="text-crimson text-lg ">*</sup></label>
                  <input name="email" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" type="email" value="<?= $fetch_profile['email']; ?>">
                </div>  

                <div class="text-midGray pt-4 mb-5 italic text-sm border-b-2 border-b-lightGray">Change Password</div>
                
                <div class="mb-6">
                  <input type="hidden" name="old_pass" value="<?= $fetch_profile['password']; ?>">

                  <div class="mb-6">
                  <label><span class="text-darkestGray">Previous Password</span> <sup class="text-crimson text-lg mb-4">*</sup></label>
                  <input name="previous_pass" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" placeholder="Enter old password" type="password">
                  </div>

                  <div class="mb-6">
                  <label><span class="text-darkestGray">New Password</span> <sup class="text-crimson text-lg mb-4">*</sup></label>
                  <input name="new_pass" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" placeholder="Enter new password" type="password">
                  </div>

                  <div class="mb-6">
                  <label><span class="text-darkestGray">Confirm Password</span> <sup class="text-crimson text-lg mb-4">*</sup></label>
                  <input name="confirm_pass" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" placeholder="Confirm new password" type="password">
                  </div>
                </div>

                <div class="mb-6">
                  <label for="" class="pb-4"> <span class="text-darkestGray">Select New Profile Image</span> <sup class="text-crimson text-lg ">*</sup></label>
                  
                  <input name="old_image" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" type="hidden" value="<?= $fetch_profile['profile']; ?>">

                
                  <div class="mb-6">
                  <input name="image" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" type="file" accept="image/*">
                  </div>
                  
                </div>  
                
                <button class="btn-light" type="submit" value="update profile" name="update">
                  Save Changes
                </button>
                </form>
                </div>
              </form>
                </div>
          <?php     
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
