<?php
if (!isset($this) || !$this instanceof \Slim\Views\PhpRenderer) {
    return;
}
$base_url = rtrim($this->container->request->getUri()->getBaseUrl(), '/');
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8">
  <title><?php echo $this->getAttribute('title');?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo $base_url;?>/assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo $base_url;?>/assets/css/pentagonal.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css">
  <script type="text/javascript">
      document.documentElement.className = document.documentElement.className.replace(/no\-/g, '');
  </script>
</head>
<body>
  <div class="wrapper">
<?php
