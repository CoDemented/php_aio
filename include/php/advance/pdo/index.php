<?php
include '../../../../include/header.php';

function filePath() {
    highlight_file(__FILE__);
}
define("_pdo", _siteUrl . "include/php/Advance/pdo/");
define("Ref", "#");
define("Vid", "https://www.youtube.com/watch?v=T6ULdzlYWXk&list=PLbGui_ZYuhigFdLdbSI2EM2MrJB7I0j-B&index=28");
echo "<div class='container pt-5'>";
?>
<!--================================================= Code-->

<h1 class="display-4"  id="secTitle">
    <a href="<?php echo _pdo; ?>index.php"><?php echo basename(__DIR__);  ?></a>
</h1>

<div class="box-container pt-5">
    <a href="pdo-connect.php">
        <div class="box">
            <h6>1. Connection</h6>
        </div>
    </a>
    <a href="">
        <div class="box">
            <h6>Connection</h6>
        </div>
    </a>
    <a href="">
        <div class="box">
            <h6>Connection</h6>
        </div>
    </a>
    <a href="">
        <div class="box">
            <h6>Connection</h6>
        </div>
    </a>
    <a href="">
        <div class="box">
            <h6>Connection</h6>
        </div>
    </a>
    <a href="">
        <div class="box">
            <h6>Connection</h6>
        </div>
    </a>
 
 
</div>






<!--================================================= Code-->
<br><br>
<a  href="<?php echo Ref; ?>">[ Reference ]</a>
<a href="<?php echo Vid; ?>">[ Video ]</a>
<a href="#" data-toggle="modal" data-target="#modalCode">[ Code ]</a>
<?php echo '</div>'; ?>
<?php include '../../../../include/footer.php'; ?>
