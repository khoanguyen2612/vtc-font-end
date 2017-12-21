<!DOCTYPE html>
<html>
    <?php echo $this->element('Home/head');?>
<body>
    <?php echo $this->element('Home/nav'); ?>
    <?php echo $this->fetch('content'); ?>
    <?php echo $this->element('Home/footer'); ?>
</body>
</html>