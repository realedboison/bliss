<?php
  include '../components/connection.php';

  session_start();

  if(isset($_POST['register'])) {
    $id = unique_id();

    $name = $_POST['name'];
    $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');

  
    $email = $_POST['email'];
    $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

    $pass = sha1($_POST['password']);
    $pass = htmlspecialchars($pass, ENT_QUOTES, 'UTF-8');
        // $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
   
    $cpass = sha1($_POST['cpassword']);
    $cpass = htmlspecialchars($cpass, ENT_QUOTES, 'UTF-8');
        // $cpass = password_hash($_POST['cpass'], PASSWORD_DEFAULT);

    $image = $_FILES['image']['name'];
    $image = htmlspecialchars($image, ENT_QUOTES, 'UTF-8');

    $image = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_size = $_FILES['image']['size'];
    $image_folder = '../uploaded_image/'.$image;


    // exit();

    $select_admin = $conn->prepare("SELECT * FROM `admin` WHERE email = ?");
    $select_admin->execute([$email]);

    if($select_admin->rowCount() > 0){
      $warning_msg[] = 'user already exists';

    } else {
      if($pass != $cpass){
        $warning_msg[] = 'password not matched';

      }  elseif($image_size > 200000 ) {
          $warning_msg[] = 'image size too large';
      } else {
        $insert_admin = $conn->prepare("INSERT INTO `admin` (id, name, email, password, profile) VALUES (?,?,?,?,?)");
        $insert_admin->execute([$id, $name, $email, $cpass, $image]);

        if($insert_admin){
          move_uploaded_file($image_tmp_name, $image_folder); 
          $success_msg[] = 'new admin register';
          header('location:login.php');
        } else {
          $warning_msg[] = 'image not uploaded';
        }
      }
    }
}
?> 

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css?v=<?php echo time(); ?>">
  <title>Register</title>
</head>

<?php include '../includes/navbar.php' ?>

<div class="pt-[200px]">
<div class="">
  <div class="mx-auto lg:w-6/12 w-11/12">
    <h4 class="text-center text-3xl pb-10 text-darkestGray font-semibold">Register</h4>
    <form action="register.php" method="post" enctype="multipart/form-data">
        <div class="mb-6">
          <label for="" class="pb-4"><span class="text-darkestGray">Username</span> <sup class="text-crimson text-lg ">*</sup></label>
          <input name="name" required class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" maxlength="20" placeholder="Enter your user name" oninput="this.value.replace(/\s/g,'');" type="text">
          <div class="text-crimson text-center text-sm pt-1"></div>
        </div>  

        <div class="mb-6">
          <label for="" class="pb-4"><span class="text-darkestGray">Email</span> <sup class="text-crimson text-lg ">*</sup></label>
             <input name="email" required class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" maxlength="20" placeholder="Enter your email" oninput="this.value.replace(/\s/g,'');" type="email">
          <div class="text-crimson text-center text-sm pt-1"></div>
        </div>  

        <div class="mb-6">
          <label for=""><span class="text-darkestGray">Password</span> <sup class="text-crimson text-lg mb-4">*</sup></label>
          <input name="password" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" maxlength="20" placeholder="Enter your password" oninput="this.value.replace(/\s/g,'');" type="password">
          <div class="text-crimson text-center text-sm pt-1"></div>
        </div>  

        <div class="mb-6">
          <label for=""><span class="text-darkestGray">Confirm Password</span> <sup class="text-crimson text-lg mb-4">*</sup></label>
          <input name="cpassword" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" maxlength="20" placeholder="Confirm password" oninput="this.value.replace(/\s/g,'');" type="password">
          <div class="text-crimson text-center text-sm pt-1"></div>
        </div>  

        <div class="mb-6">
          <label for="" class="pb-4"> <span class="text-darkestGray">Select Profile Image</span> <sup class="text-crimson text-lg ">*</sup></label>
          <input name="image" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" type="file" accept="image/*">
          <div class="text-crimson text-center text-sm pt-1"></div>
        </div>  

        <button name="register" type="submit" class="btn-light">Register<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        </button>
      </div>
    </form>
    <div class="pt-12 text-center pb-[60px]">
      <div class="">Already have an account ? <a href="../pages/login.php"><span class="text-crimson font-semibold"> Login</span></a> </div>
    </div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

<?php include '../components/alert.php';?>
<?php include '../includes/footer.php' ;?>