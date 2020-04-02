DROP DATABASE IF EXISTS yupro4;
CREATE DATABASE yupro4;
USE yupro4;

create table IVE_Almacen
(
    cod_almacen  varchar(10) not null primary key,
    desc_almacen varchar(50) null,
    cod_sucursal varchar(2)  null,
    enviado      char        not null,
    cod_grupo_almacen          varchar(100) null
);

create table GNL_config_moneda
(
    cod_moneda   varchar(2) not null primary key,
    cod_sucursal varchar(2) null,
    enviado      char       null
);

create table IVE_Grupo_Almacen
(
    cod_grupo_almacen          varchar(100) not null primary key,
    desc_grupo_almacen         varchar(20)  null,
    cuenta_trans_articulo      varchar(20)  null,
    cuenta_grupo_articulo      varchar(20)  null,
    cuenta_consumo_int         varchar(20)  null,
    cuenta_diferencia_articulo varchar(20)  null,
    cod_sucursal               varchar(2)   null,
    enviado                    char         not null,
    cod_almacen                varchar(5)   null,
    cod_moneda                 varchar(2)   null,
    foreign key (cod_almacen) references IVE_Almacen (cod_almacen),
    foreign key (cod_moneda) references GNL_config_moneda (cod_moneda)
);

create table IVE_unidad
(
    cod_unidad   varchar(5)  not null primary key,
    desc_unidad  varchar(50) null,
    cod_sucursal varchar(2)  not null,
    enviado      char        not null
);

create table IVE_articulo
(
    cod_articulo            varchar(5)   not null primary key,
    desc_articulo           varchar(100) null,
    glosa_articulo          varchar(250) null,
    costo_unidad_articulo   decimal      not null,
    saldo_cantidad_articulo decimal      not null,
    stock_minimo_articulo   int          not null,
    cod_sucursal            varchar(2)   null,
    enviado                 char         not null,
    stock_maximo_articulo   int          null,
    cod_almacen             varchar(5)   null,
    cod_unidad              varchar(5)   null,
    cod_moneda              varchar(2)   null,
        foreign key (cod_almacen) references IVE_Almacen (cod_almacen),
        foreign key (cod_unidad) references IVE_unidad (cod_unidad),
        foreign key (cod_moneda) references GNL_config_moneda (cod_moneda)
);

create table IVE_transacciones_articulo
(
    nc_trans_articulo int auto_increment primary key,
    cod_articulo            varchar(20)                         null,
    cod_moneda              varchar(2)                          null,
    cuenta_solicitud        varchar(20)                         null,
    cod_unidad              varchar(5)                          null,
    cuenta_consumo          varchar(20)                         null,
    fecha_trans_articulo    DateTime                            null,
    hora_trans_articulo     varchar(12)                         not null,
    glosa_trans_articulo    varchar(100)                        null,
    cantidad_trans_articulo int                                 null,
    costo_unidad_articulo   double                              null,
    saldo_cantidad_articulo int                                 null,
    saldo_costo_articulo    int                                 null,
    usuario_registro        varchar(10)                         null,
    usuario_consumo         varchar(10)                         null,
    cod_sucursal            varchar(2)                          null,
    enviado                 char                                null,
    foreign key (cod_articulo) references IVE_articulo (cod_articulo),
    foreign key (cod_unidad) references IVE_unidad (cod_unidad),
    foreign key (cod_moneda) references GNL_config_moneda (cod_moneda)
);
