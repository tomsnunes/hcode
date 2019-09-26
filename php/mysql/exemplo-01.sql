use dbphp7;

create table tb_usuarios (
	idusuario int not null primary key auto_increment,
    deslogin varchar(64) not null,
    dessenha varchar(256) not null,
    dtcadastro timestamp not null default current_timestamp()
);

select * from tb_usuarios;

update tb_usuarios set dessenha = '@123*' where idusuario = 1;

desc tb_usuarios;

insert into tb_usuarios (deslogin, dessenha) values ('root', '123456*');

delete from tb_usuarios where idusuario = 1;

truncate table tb_usuarios;