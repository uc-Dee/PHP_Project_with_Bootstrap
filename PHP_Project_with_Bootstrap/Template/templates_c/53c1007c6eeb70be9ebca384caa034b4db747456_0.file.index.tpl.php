<?php
/* Smarty version 4.3.0, created on 2023-03-16 09:49:56
  from 'C:\xampp\htdocs\smarty\PHP_Project_with_Bootstrap\Template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6412d8340f6179_49475845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53c1007c6eeb70be9ebca384caa034b4db747456' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\PHP_Project_with_Bootstrap\\Template\\index.tpl',
      1 => 1678956512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6412d8340f6179_49475845 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <link rel="stylesheet" href="../css/index.css">

</head>

<body>
    <nav class="navbar navbar-light bg-light" id="nav1">
        <img src="../img/uCertifyLogo.png" width="30" height="30" class="d-inline-block align-top" alt="uCertify Logo"
            id='img1'>
        <p id="p1"><b>uCertify Test Prep</b></p>
    </nav>
    <hr id="hr1">
    <!-- Image and text -->
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>


</body>

</html><?php }
}
