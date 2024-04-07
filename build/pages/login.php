<?php
  include '../components/connection.php';

  session_start();
  
  if(isset($_POST['login'])) {

    $email = $_POST['email'];
    $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
  
    $pass = sha1($_POST['password']);
    // $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);

    $select_admin = $conn->prepare("SELECT * FROM `admin` WHERE email = ? AND password = ?");
    $select_admin->execute([$email, $pass]);
    $row = $select_admin->fetch(PDO::FETCH_ASSOC);

    
    if($select_admin->rowCount() > 0){
      if($row['user_type'] == 'admin'){
        $_SESSION['admin_id'] =  $row['id'];
        header('location:profile.php');
        
      } elseif($row['user_type'] == 'user'){
        $_SESSION['user_id'] = $row['id'];
        header('location:profile.php');
        
      } else {
        $warning_msg[] = 'no user found';
      }
    } else {
      $warning_msg[] = 'invalid email or password';
    }
  }
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css?v=<?php echo time(); ?>">
  <title>Login</title>
</head>
<?php include '../includes/navbar.php' ?>
<div class="pt-[200px]" id="admin_login">


<div class="">
    <form action="login.php" method="post" enctype="multipart/form-data">
      <div class="mx-auto lg:w-6/12 w-11/12">
        <h4 class="text-center text-3xl pb-10 text-darkestGray font-semibold">Login</h4>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php include '../components/alert.php' ;?>
<?php include '../includes/footer.php' ;?>