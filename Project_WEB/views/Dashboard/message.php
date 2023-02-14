<?php 
if(isset($_SESSION['message'])){
?>

<div>
    <strong>Hey</strong> <?= $_SESSION['message'];?>
    <button type="button" aria-label="Close"></button>
</div>



<?php
unset($_SESSION['message']);
}
?>