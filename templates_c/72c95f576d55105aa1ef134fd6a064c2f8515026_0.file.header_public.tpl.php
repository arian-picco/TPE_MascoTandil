<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-13 22:11:03
  from '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/header_public.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8609d766a171_08148984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72c95f576d55105aa1ef134fd6a064c2f8515026' => 
    array (
      0 => '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/header_public.tpl',
      1 => 1602619856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8609d766a171_08148984 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>  
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <base href="<?php echo BASE_URL;?>
"
        <link href="css/header.css" rel="stylesheet" type="text/css">
        <link href="css/details.css" rel="stylesheet" type="text/css">
        <link href="css/form.css" rel="stylesheet" type="text/css">
        <link href="css/main.css" rel="stylesheet" type="text/css">
                <link href="css/footer.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">MascoCuidados</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="menu">
          <ul class="navbar-nav d-flex w-100">
            <li class="nav-item ml-auto">
              <a class="nav-link" href="home">Inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="store">Tienda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin">Login</a>
              </li>
          </ul>
        </div>
      </nav>

   <body><?php }
}
