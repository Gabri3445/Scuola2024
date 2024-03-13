create database gestione_cinema;

use gestione_cinema;

create table zona
(
    codice int primary key auto_increment,
    nome   varchar(20) not null
);

create table casaProd
(
    nome varchar(20) primary key,
    sede varchar(20) not null
);

create table film
(
    titolo  varchar(20) primary key,
    regista varchar(20) not null,
    anno    date        not null,
    nome    varchar(20),
    check ( anno >= "1800-01-01"),
    FOREIGN KEY (nome) references casaProd (nome)
);

create table cinema
(
    nome     varchar(20) primary key,
    orario   varchar(20) not null,
    tel      varchar(20) not null,
    indirzzo varchar(20) not null,
    titolo   varchar(20),
    codice   int,
    FOREIGN KEY (titolo) references film (titolo),
    FOREIGN KEY (codice) references zona (codice)
);

create table attore
(
    codice  int primary key auto_increment,
    cognome varchar(20) not null,
    nome    varchar(20) not null
);

create table recita
(
    codice int,
    titolo varchar(20),
    PRIMARY KEY (codice, titolo),
    FOREIGN KEY (codice) references attore (codice),
    FOREIGN KEY (titolo) references film (titolo)
)
