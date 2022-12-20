<?php
function  createConfirmationmbox(){
    echo '<script type="text/javascript"> ';
    echo ' function openulr(newurl) {';
    echo '  if (confirm("Are you sure you want to open new URL")) {';
    echo '    document.location = newurl;';
    echo '  }';
    echo '}';
    echo '</script>';

header('location:index.php');

}
?>
<?php
createConfirmationmbox();
?>