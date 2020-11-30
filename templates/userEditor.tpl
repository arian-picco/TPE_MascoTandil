{include file="header.tpl"}
<main role="main">
  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Bienvenido {$smarty.session.USER_NAME} </h1>
      <p class="lead text-muted">
       Editar Usuarios
      </p>
    </div>
  </section>

  <div class="container">
   
    <div class="row product-table">
        <div class="col-md-12 order-md-1">
            
            <h2> Lista de usuarios registrados </h2>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Administrador</th>
                  </tr>
                </thead>
                <tbody>
                  {foreach from=$users item=user}
                  <tr>
                      <td>
                       {$user->name}
                      </td>
                      <td>
                        {$user->email}
                      </td>
                      <td>{if {$user->admin} == 1 }
                        Sí {else}
                        No
                        {/if}
                      </td>
                      <td>

                {if $smarty.session.IS_ADMIN == 1 && $smarty.session.ID_USER != $user->id}
                      <button class="btn-delete">
                          <a href="deleteUser/{$user->id}">Borrar</a>
                      </button>
                      <button class="btn-delete">
                          <a href="grantAdmin/{$user->id}">Otorgar Permiso</a>
                      </button>
                      <button class="btn-delete">
                          <a href="quitAdmin/{$user->id}">Quitar Permiso</a>
                      </button>
                        </td>
                {/if}
                  </tr>
              {/foreach}
                </tbody>
              </table>
        </div>
    </div>

  </div>
</main>
{include file="footer.tpl"}