<?php
// session_start();
$notif = isset($url[1]) ? true : false;
if(isset($_SESSION['status'])){
echo "<script>
document.location.href='" . BASE_URL . "dashboard';
</script>";
}
?>
<main>
  <center>
  <div class="section"></div>
  <div class="container">
    <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
      <img class="responsive-img" style="width: 220px;" src="<?= BASE_URL.'img/logo.jpeg' ?>" />
      <br>
      <form action="<?= BASE_URL."app/function/proses_login.php"; ?>" method="POST">
        <div class='row'>
          <div class='input-field col s12'>
            <input class='validate' type='text' name='username' id='username' />
            <label for='username'>Masukan Username</label>
          </div>
        </div>
        <div class='row'>
          <div class='input-field col s12'>
            <input class='validate' type='password' name='password' id='password' />
            <label for='password'>Masukan password</label>
          </div>
          <label style='float: right;'>
            <a class='pink-text' href='#!'><b>Forgot Password?</b></a>
          </label>
        </div>
        <br />
        <center>
        <div class='row'>
          <button type="submit"class=' col s12 btn btn-large waves-effect indigo'/>Login</button>
        </div>
        </center>
      </form>
      <div id="formFooter">
        <?php
        if($notif == true)
        echo "
        <label style='float: right;'>
          <div class='pink-text'>Maaf, username atau password yang kamu masukan tidak cocok</div>
        </label>";
        ?>
      </div>
    </div>
  </div>
  </center>
</main>