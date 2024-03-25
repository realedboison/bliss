<?php
  include '../components/connection.php';

  if(isset($_POST['login'])) {

    session_start();

    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);

    $pass = sha1($_POST['password']);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);

    $select_admin = $conn->prepare("SELECT * FROM `admin` WHERE email = ? AND password = ?");
    $select_admin->execute([$email, $pass]);

    if($select_admin->rowCount() > 0){
      $fetch_admin_id = $select_admin->fetch(PDO::FETCH_ASSOC);
      $_SESSION['admin_id'] = $fetch_admin_id['id'];
      header('Location: profile.php');
      exit;
    } else {
        $warning_msg[] = 'invalid email or password';
       }
}
?>



<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="../css/styles.css?v=1.0"> -->
  <link rel="stylesheet" href="../css/styles.css?v=<?php echo time(); ?>">
  <title>Login</title>
</head>
<?php include '../includes/navbar.php' ?>
<div class="pt-[200px]" id="admin_login">

<!-- container mx-auto -->
<div class="">
  <!-- lg:w-[50vw] -->
  <div class="mx-auto lg:w-6/12 w-11/12">
    <h4 class="text-center text-3xl pb-10 text-darkestGray font-semibold">Login</h4>
    <form action="login.php" method="post" enctype="multipart/form-data">
        <div class="mb-6">
          <label for="" class="pb-4"> <span class="text-darkestGray">Email</span> <sup class="text-crimson text-lg ">*</sup></label>
          <input name="email" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" type="text" maxlength="20" required  placeholder="Enter your user email" oninput="this.value.replace(/\s/g,'')">
          <div class="text-crimson text-center text-sm pt-1"></div>
        </div>  

        <div class="mb-6">
          <label for=""><span class="text-darkestGray">Password</span> <sup class="text-crimson text-lg mb-4">*</sup></label>
          <input name="password" class="w-full ring-2 ring-midGray rounded-full focus:outline-none focus:ring-2 focus:ring-primary py-3 px-6" type="password" maxlength="20" required  placeholder="Enter your password" oninput="this.value.replace(/\s/g,'')">
          <div class="text-crimson text-center text-sm pt-1"></div>
        </div>  

        <button class="btn-light" type="submit" name="login">Submit</button>
        <div class="pt-12 text-center pb-[60px]">
          <div class="">Don't have an account ? <a href="../pages/register.php"><span class="text-crimson font-semibold"> Register</span></a> </div>
        </div>          
      </div>
    </form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php include '../components/alert.php' ?>
<?php include '../includes/footer.php' ?>