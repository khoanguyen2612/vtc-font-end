<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title_for_layout ?> </title>

    <?php echo $this->html->meta('icon',
            'vtc-logo.png',
             array('type' =>'icon'));
    ?>

    <?php echo $this->Html->charset() . "\n"; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->Html->css('bootstrap.min.css'). "\n"; ?>
    <?php echo $this->Html->script('jquery.min.js'). "\n"; ?>
    <?php echo $this->Html->script('bootstrap.min.js'). "\n"; ?>
    <?php echo $this->Html->css('style'). "\n"; ?>
    <link href='http://fonts.googleapis.com/css?family=Ruge+Boogie' rel='stylesheet' type='text/css'>

</head>
