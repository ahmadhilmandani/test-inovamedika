<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="en">

  <script src="https://cdn.tailwindcss.com"></script>


  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

  <div class="w-full min-h-screen flex justify-center items-center">
    <?php echo $content; ?>
  </div>

</body>

</html>