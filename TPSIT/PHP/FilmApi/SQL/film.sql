drop database if exists movie;

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
    middle_name varchar(50) default null,
    surname varchar(50),
    bDate date
);

create table user (
    id int auto_increment primary key,
    name varchar(50),
    surname varchar(50),
    email varchar(50),
    password varchar(255),
    registration_date datetime default current_timestamp
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

create table watched_movies (
    user int,
    movie int,
    primary key (user, movie),
    foreign key (user) references user(id),
    foreign key (movie) references movie(id)
)