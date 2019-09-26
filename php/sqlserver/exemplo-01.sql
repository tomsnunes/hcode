create table tb_usuarios (
	idusuario int not null identity primary key,
    deslogin varchar(64) not null,
    dessenha varchar(256) not null,
    dtcadastro datetime not null default getdate()
);

select * from tb_usuarios;

insert into tb_usuarios (deslogin, dessenha) values ('user', '1236544');