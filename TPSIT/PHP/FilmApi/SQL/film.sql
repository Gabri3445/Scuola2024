drop database movie;

create database movie;

use movie;

create table genre (
    name varchar(50),
    id int auto_increment primary key
);

create table movie (
    id int auto_increment primary key,
    title varchar(50),
    synopsys text,
    releaseYear int(4)
);

create table person (
    category enum('actor', 'director'),
    id int auto_increment primary key,
    name varchar(50),
    middleName varchar(50) default null,
    surname varchar(50),
    bDate date
);

create table interprets (
    actor int,
    movie int,
    primary key (actor, movie),
    foreign key (movie) references movie(id),
    foreign key (actor) references person(id)
);

create table directs (
    director int,
    movie int,
    primary key (director, movie),
    foreign key (movie) references movie(id),
    foreign key (director) references person(id)
);

create table genres (
    genre int,
    movie int,
    primary key (genre, movie),
    foreign key (movie) references movie(id),
    foreign key (genre) references genre(id)
);