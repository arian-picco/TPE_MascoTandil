<!DOCTYPE html>
<html>  
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{$title}</title>
        <base href="{BASE_URL}"
        <link href="css/registrationForm.css" rel="stylesheet" type="text/css">
        <link href="css/header.css" rel="stylesheet" type="text/css">
        <link href="css/details.css" rel="stylesheet" type="text/css">
        <link href="css/form.css" rel="stylesheet" type="text/css">
        <link href="css/main.css" rel="stylesheet" type="text/css">
        <link href="css/footer.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <nav class="navbar navbar-expand-lg navbar-light bg-light main-menu">
        <span class="navbar-brand mb-0 h1">MascoCuidados</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="menu">
          <ul class="navbar-nav d-flex justify-content-end w-100">
             {if isset($smarty.session.USER_NAME)}
            <li class="nav-item ">
              <p class="nav-link">{$smarty.session.USER_NAME}</p>
            </li>
              {/if} 
            <li class="nav-item">
              <a class="nav-link" href="home">Inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="store">Tienda</a>
            </li>
            {if {$smarty.session.IS_ADMIN} == 1}
             <li class="nav-item">
                  <a class="nav-link" href="edit_users">Gestionar Usuarios</a>
             </li>
             {/if}
             {if isset($smarty.session.USER_NAME)}
             <li class="nav-item">
                  <a class="nav-link" href="logout">Logout</a>
             </li>
             {else}
                <li class="nav-item">
                <a class="nav-link" href="login">Login</a>
              </li>
              {/if}
          </ul>
        </div>
      </nav>

   
<body>