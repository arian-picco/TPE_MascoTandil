<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-03 01:53:14
  from '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f77bd6a387d24_00076275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19776d155901c43bb46a406dd1dfaed2d637b6ed' => 
    array (
      0 => '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/main.tpl',
      1 => 1601682784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f77bd6a387d24_00076275 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>

    <article class="contenedor-principal-index">

        <article class="contenedores-index">
            <h1>Quienes somos</h1>
            <h2>Proveedores de cuidado para Mascotas</h2>
            <p>Encontrá los mejores establecimientos para dejar a tu mascota cuando te vas de vacaciones</p>
            <section class="guard-pelu-index">
                <a href="store">
                    <h2>Servicio de guarderias</h2>
                    <div class="guard-pelu-index-img">
                        <img src="imagenes/guarderia_index.png">
                    </div>
                </a>
            </section>
            <section class="guard-pelu-index">
                <a href="hairdressing">
                    <h2>Servicio de peluquerias</h2>
                    <div class="guard-pelu-index-img">
                        <img src="imagenes/peluqueria_index.png">
                    </div>
                </a>
            </section>
        </article>

        <article class="contenedores-index">
            <section class="lista_vet">
                <h2>Centros de atención asociados</h2>
                <ul class="lis">
                    <li><a href="https://www.civetan-conicet.gob.ar/" target=_blank>Veterinaria Civetan</a> </li>
                    <li><a href="https://www.puppis.com.ar/peluqueria" target=_blank>Puppis Caninos</a> </li>
                    <li><a href="https://www.centropet.com/peluqueria/" target=_blank>Centro Pet</a> </li>
                    <li><a href="https://dougmascotas.com.ar/" target=_blank>Doug Mascotas</a> </li>
                    <li><a href="https://www.todopeluquerias.com.ar/peluqueria-canina1/" target=_blank>Todo Pelos
                            Mascota</a> </li>
                    <li><a href="https://www.kivet.com/centro-de-belleza-animal/" target=_blank>Mimo Belleza Animal</a>
                    </li>
                </ul>
            </section>

            <div class="imagen-cont-medio">
                <img src="imagenes/animales2.png" alt="animales">
            </div>
        </article>

        <article class="contenedores-index" id="fomulario">

            <div class="titulo-formulario">
                <h2>Registrate y recibí informacion semanal junto con las mejores ofertas</h2>
            </div>

            <section class="form-marco" id="form-marco">
                <form class="form">
                    <label for="name" id="name">Nombre:</label>
                    <input type="text" id="name">
                    <label for="mail" id="email">Correo electrónico:</label>
                    <input type="email" id="mail" name="user_mail">
                    <label>Tipo de Mascota</label>
                    <label for="Perro" id="Perro">Perro<input type="checkbox" id="Perro"></label>
                    <label for="Gato" id="Gato">Gato<input type="checkbox" id="Gato"></label>
                    <label for="edad" id="edad">Edad de la mascota</label>
                    <select name="edad" id="edad">
                        <option value="Cachorro">Cachorro</option>
                        <option value="Jóven">Jóven</option>
                        <option value="Jóven-Adulto">Jóven-Adulto</option>
                        <option value="Adulto">Adulto</option>
                    </select>
                    <div class="consulta-enviar">
                        <label for="consulta">Consultas</label>
                        <input type="textarea" id="consulta" placeholder="Escriba su consulta aquí...."></input>
                    </div>

                    <div class="boton-enviar" id="boton">
                        <button>Enviar</button>
                    </div>
                    <div id="captcha-contenedor">

                    </div>
                </form>
            </section>
        </article>

    </article>


</body>
    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
