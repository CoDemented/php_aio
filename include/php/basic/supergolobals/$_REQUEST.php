<?php
include '../../../../include/header.php';

function filePath() {
    highlight_file(__FILE__);
}

define("Ref", "");
define("Vid", "");
?>
<!--================================================= Code-->                 



<h3 class="text-primary mt-5">Request</h3>
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
if (isset($_REQUEST['name']) && isset($_REQUEST['pass'])) {
    $name = $_REQUEST['name'];
    $pass = $_REQUEST['pass'];

    if ($name == "") {
        echo '<h2 class="text-danger">Enter Email and Password</h2>';
    } else {
        echo "<h4>Email: $name</h4>";
        echo "<h4>Pswrd: $pass</h4>";
        echo "<h5 class='text-success'>REQUEST can be used for both GET and POST to retrieve Value but does not print value in the address bar like POST</h5>";
    }
}
?>




<!--================================================= Code-->
<?php include '../../../../include/footer.php'; ?>   