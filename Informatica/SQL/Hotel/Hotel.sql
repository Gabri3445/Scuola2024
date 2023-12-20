create database Hotel;

use Hotel;

create table utente
(
    id            int primary key,
    email         varchar(30) not null,
    password      varchar(30) not null,
    nome          varchar(30) not null,
    cognome       varchar(30) not null,
    sesso         varchar(1)  not null,
    dataNascita   blob        default null,
    Ntelefono     varchar(10) not null,
    fotoProfilo   varchar(30) default null,
    descrizione   varchar(30) not null,
    lingueParlate varchar(30) null,
    check (sesso in ('m', 'f', 'x')),
    check (dataNascita >= '1900-01-01')
);

create table citta
(
    nome        varchar(30) primary key,
    descrizione varchar(500) default null
);

create table tipo_alloggio
(
    nome        varchar(30) primary key,
    descrizione varchar(500) default null
);

create table servizio
(
    nome        varchar(30) primary key,
    descrizione varchar(500) default null
);

create table alloggio
(
    id                 int primary key,
    nome               varchar(30) not null,
    prezzoxnotte       float       not null,
    descrizione        varchar(500) default null,
    nposti             int         not null,
    via                varchar(30) not null,
    foto               blob         default null,
    nome_citta         varchar(30),
    nome_tipo_alloggio varchar(30),
    id_utente          int,
    foreign key (nome_citta) references citta (nome),
    foreign key (nome_tipo_alloggio) references tipo_alloggio (nome),
    foreign key (id_utente) references utente (id)
);

create table prenotazione
(
    id             int primary key,
    data_checkin   date  not null,
    data_checkout  date  not null,
    prezzo         float not null,
    nposti         int   not null,
    data_richiesta date  not null,
    id_utente      int,
    id_alloggio    int,
    foreign key (id_utente) references utente (id),
    foreign key (id_alloggio) references alloggio (id)
);

create table recensisce
(
    id_utente   int,
    id_alloggio int,
    data        date         default null,
    voto        float not null,
    testo       varchar(500) default null,
    primary key (id_utente, id_alloggio),
    foreign key (id_utente) references utente (id),
    foreign key (id_alloggio) references alloggio (id)
);

create table dotato
(
    nome_servizio varchar(30),
    id_alloggio   int,
    primary key (nome_servizio, id_alloggio),
    foreign key (nome_servizio) references servizio (nome),
    foreign key (id_alloggio) references alloggio (id)
);

create table valuta_ospite
(
    id_utente1 int,
    id_utente2 int,
    data       date         default null,
    voto       float not null,
    testo      varchar(500) default null,
    primary key (id_utente1, id_utente2),
    foreign key (id_utente1) references utente (id),
    foreign key (id_utente2) references utente (id)
)