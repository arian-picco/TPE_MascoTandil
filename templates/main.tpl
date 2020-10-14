{include 'header.tpl'}
        <article class="main-body bg-image " style="background-image: url(imagenes/background.jpg)">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="intro-body">
                  <p class="intro-title-top">Bienvenido  {$smarty.session.USER_NAME}
                    <br> Encuentre los mejores productos para su mascota!</p>
                  <h1 class="intro-title mb-4">
                    <span class="color-b">Masco </span> Cuidados
                    <br>Productos para recreación y peluqería</h1>
                  <p class="intro-subtitle intro-price">
                    <a href="store" style="text-decoration:none;"><span class="price-a">Visite nuestra tienda</span></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </article>
    {include 'footer.tpl'}
