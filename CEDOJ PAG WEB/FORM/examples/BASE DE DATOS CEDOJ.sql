create database paginasweb;
use paginasweb;

create table maestros(
    id_maestros int not null,
    nombre text,
    direccion text,
    edad int,
    sueldo int,
    horario date,
    tipo text,
    primary key(id_maestros)    
);

create table cursos(
    id_cursos int not null,
    nombre varchar(100),
    horario date,
    lugar text,
    costo int,
    primary key(id_cursos)
);

create table grupos(
    id_grupos int not null,
    horario date,
    cupo varchar(70),
    FKmaestros int,
    FKcursos int,
    primary key(id_grupos),
    foreign key (FKmaestros) references maestros(id_maestros),
    foreign key (FKcursos) references cursos(id_cursos)
);

create table instalaciones(
    id_instalaciones int not null,
    nombre text,
    lugar text,
    FKgrupos int,
    primary key(id_instalaciones),
    foreign key (FKgrupos) references grupos(id_grupos)
);

create table clientes(
    id_clientes int not null,
    nombre varchar(80),
    direccion varchar(70),
    edad int,
    correo text,
    telefono varchar(10),
    primary key(id_clientes)
);

create table clientesgrupos(
    FKclientes int,
    FKgrupos int,
    foreign key (FKclientes) references clientes(id_clientes),
    foreign key (FKgrupos) references grupos(id_grupos)
);

create table horarios(
    id_horario int not null,
    horario date,
    FKgrupos int,
    primary key(id_horario),  
    constraint fk_id03 foreign key (FKgrupos) references grupos(id_grupos)
);