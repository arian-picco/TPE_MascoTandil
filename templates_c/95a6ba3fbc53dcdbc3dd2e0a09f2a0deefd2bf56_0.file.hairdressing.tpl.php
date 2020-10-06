<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-06 04:46:19
  from '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/hairdressing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7bda7be5acb4_87270145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95a6ba3fbc53dcdbc3dd2e0a09f2a0deefd2bf56' => 
    array (
      0 => '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/hairdressing.tpl',
      1 => 1601952223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7bda7be5acb4_87270145 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>


    <article class="contenedor-principal-peluquerias">

        <section class="tabla-imagenes-peluquerias">
            <div class="lista_pelu">
                <h2 id="tituloList">LISTA DE PELUQUERIAS DISPONIBLE</h2>
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
            </div>
        </section>

        <section class="cuadro-imagenes-peluqueria">

            <div class="contenedor-imagenes">
                <img src="imagenes/banio.png">
            </div>

            <div class="contenedor-imagenes">
                <img src="imagenes/peinado.png">
            </div>

            <div class="contenedor-imagenes">
                <img src="imagenes/corte.png">

            </div>

        </section>

    </article>
</body>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
