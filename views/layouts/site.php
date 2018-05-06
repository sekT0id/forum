<?php
/**
 * @var string $content
 * @var \realize\base\BaseView $this
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>php</title>

    <?php $this->registerCss();?>
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">php</nav>


<?php echo $content;?>


<?php $this->registerJs();?>

</body></html>