<?php
/**
 * Created by PhpStorm.
 * User: Phuc
 * Date: 11/09/2015
 * Time: 19:56
 */
use Helpers\Url;

$template_name = 'MetroTemplate';
$template_url = Url::templatePath($template_name);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Metro, a sleek, intuitive, and powerful framework for faster and easier web development for Windows Metro Style.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, frontend, web development">
    <meta name="author" content="Sergey Pimenov and Metro UI CSS contributors">

    <link rel='shortcut icon' type='image/x-icon' href='<?php echo $template_url ?>favicon.ico' />

    <title>News portal :: Metro UI CSS - The front-end framework for developing projects on the web in Windows Metro Style</title>

    <link href="<?php echo $template_url ?>css/metro.css" rel="stylesheet">
    <link href="<?php echo $template_url ?>css/metro-icons.css" rel="stylesheet">
    <link href="<?php echo $template_url ?>css/metro-responsive.css" rel="stylesheet">

    <script src="<?php echo $template_url ?>js/jquery-2.1.3.min.js"></script>
    <script src="<?php echo $template_url ?>js/metro.js"></script>
    <script src="<?php echo $template_url ?>js/ga.js"></script>
    <!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->

</head>
<body>