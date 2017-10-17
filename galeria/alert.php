<?php
    $msg = filter_input(INPUT_GET, 'msg');
    $msg_type = filter_input(INPUT_GET, 'msg_type');
?>
<?php
    if(isset($msg)) {
?>
    <div class="alert alert-<?php echo $msg_type ?>" role="alert"><?php echo $msg ?></div>
<?php } ?>