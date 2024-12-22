<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Chat Messenger</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Անուն</label>
            <input type="text" name="fname" placeholder="Անուն" required>
          </div>
          <div class="field input">
            <label>Ազգանուն</label>
            <input type="text" name="lname" placeholder="Ազգանուն" required>
          </div>
        </div>
        <div class="field input">
          <label>Էլեկտրոնային հասցե</label>
          <input type="text" name="email" placeholder="Մուտքագրեք ձեր էլ․ հասցեն" required>
        </div>
        <div class="field input">
          <label>Գաղտնաբառ</label>
          <input type="password" name="password" placeholder="Մուտքագրեք նոր գաղտնաբառը" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Ընտրեք նկարը</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Շարունակել">
        </div>
      </form>
      <div class="link">Արդեն գրանցվա՞ծ եք։ <a href="login.php">Մուտք գործեք հիմա</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
