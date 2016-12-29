--Criando tabela pessoa
create table pessoa(
    id int primary key auto_increment,
    nome varchar(80) not null,
    usuario varchar(80) not null,
    senha varchar(32) not null
);

--Criando tabela ponto
create table ponto(
	id int primary key auto_increment,
	diaTrabalhado date not null,
	horaEntradaManha varchar(4) not null,
	horaSaidaManha varchar(4) not null,
	horaEntradaTarde varchar(4) not null,
	horaSaidaTarde varchar(4) not null,
	minutosTrabalhados int(11) not null,
	minutosTempoExtra int(11) not null,
	flagHorasNormais varchar(1) not null,
    observacao text,
	idPessoa int,
    FOREIGN KEY(idPessoa) REFERENCES pessoa(id)
);

--Criando tabela horadevida
create table horadevida(
	id int primary key auto_increment,
	idPessoa int not null,
	flagAtivo varchar(1) not null,
	qtdHora int,
	FOREIGN KEY(idPessoa) REFERENCES pessoa(id)
);