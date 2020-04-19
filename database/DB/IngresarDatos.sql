-- php artisan serve
-- php artisan make:controller GrupoAlmasen
                --   @dd(($Grupo_Almacen))
INSERT INTO IVE_Grupo_Almacen (cod_grupo_almacen,desc_grupo_almacen,cuenta_trans_articulo,cuenta_grupo_articulo,cuenta_consumo_int,cuenta_diferencia_articulo,cod_sucursal,enviado,cod_almacen,cod_moneda)
VALUES ('12345','Prueba','Prueba','Prueba','Prueba','Prueba','Pr','Prueba', 'Prueb', 'BO');

INSERT INTO IVE_Grupo_Almacen (cod_grupo_almacen,desc_grupo_almacen,cuenta_trans_articulo,cuenta_grupo_articulo,cuenta_consumo_int,cuenta_diferencia_articulo,cod_sucursal,enviado)
VALUES ('12345','Prueba','Prueba','Prueba','Prueba','Prueba','Pr','Prueba');


INSERT INTO GNL_config_moneda (cod_moneda,cod_sucursal,enviado)
VALUES ('1a','Prueba','Si');