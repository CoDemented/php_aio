<?php include '../../../../include/header.php'; ?>
<?php
echo "<div class='container pt-5'>";
define("Ref", "#");
define("Vid", "https://www.youtube.com/watch?v=jdOj7-pXgbY");
?>                  



<h3 class="text-primary mt-5">POST</h3>
<form action="" method="POST">
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="text" class="form-control" id="email" name="name">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" name="pass">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br><br>
<?php
if (isset($_POST['name']) && isset($_POST['pass'])) {
    $name = $_POST['name'];
    $pass = $_POST['pass'];

    if ($name == "") {
        echo '<h2 class="text-danger">Enter Email and Password</h2>';
    } else {
        echo "<h4>Email: $name</h4>";
        echo "<h4>Pswrd: $pass</h4>";
        echo "<h5 class='text-success'>Get does not print the values in Address Bar</h5>";
    }
}
?>




<br><br>
<a class="" href="<?php echo Ref; ?>">[ Reference ]</a>
<a class="" href="<?php echo Vid; ?>">[ Video ]</a>
<?php echo '<br>File Path:<br>' . __FILE__; ?>

<?php echo '</div>'; ?>
<?php include '../../../../include/footer.php'; ?> 