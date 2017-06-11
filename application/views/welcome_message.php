
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/login.css">
  
</head>

<body>
  <html lang="en-US">
<head>
  <meta charset="utf-8">
    <title>Login</title>
    
   

</head>



    <div id="photo">

        <img id = "myphoto" src="<?php echo base_url(); ?>assets/dist/img/shiva.jpg" style="float: center">
    </div>
    <div id="namepasal">
      <h2  id ="myheading" style="float: center"><font color="white">ईश्वर प्लम्बिङ सेवा </font></h2>
    </div>
  

    <div id="login">
        
      
      <?php echo form_open('users/login'); ?>

        <span class="fontawesome-user"></span>
          <input type="text" name="username" placeholder="Username" class="form-control">
       
        <span class="fontawesome-lock"></span>
          <input type="password" name ="password" placeholder="Password" class="form-control">
        
        <input type="submit" value="Login">
    <?php echo form_close(); ?>

    <div id="valerror">
          <p><font color="white"> <?php echo validation_errors(); ?></font> </p>
       
    </div>
    <?php if($this->session->flashdata('login_failed')): ?>
    <div id="valerror">
          <p><font color="white"> <?php echo $this->session->flashdata('login_failed'); ?></font> </p>
       
    </div>
     <?php endif ?>


   </div>
    

  
  
</body>
</html>
