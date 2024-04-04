use movie;

insert into genre (name) values ('action'), ('science fiction');

insert into movie (title, synopsys, releaseYear) VALUE ('Pacific rim', 'Pacific Rim is a 2013 American science fiction monster film directed by Guillermo del Toro, starring Charlie Hunnam, Idris Elba, Rinko Kikuchi, Charlie Day, Robert Kazinsky, Max Martini, and Ron Perlman, and the first film in the Pacific Rim franchise. The screenplay was written by Travis Beacham and del Toro from a story by Beacham. The film is set in the not-too-distant future, when Earth is at war with the Kaijus,[a] colossal sea monsters which have emerged from an interdimensional portal on the bottom of the Pacific Ocean. To combat the monsters, humanity unites to create the Jaegers,[b] gigantic humanoid mechas, each controlled by two co-pilots whose minds are joined by a mental link. Focusing on the war''s later days, the story follows Raleigh Becket, a washed-up Jaeger pilot called out of retirement and teamed with rookie pilot Mako Mori as part of a last-ditch effort to defeat the Kaiju and their secret masters once and for all.', 2013);

insert into person (category, name, middleName, surname, bDate) VALUES ('director', 'Guillermo', 'del', 'Toro', '1964-10-9'), ('actor', 'Idris', null, 'Elba', '1972-9-6');

insert into genres (genre, movie) VALUES (1, 1), (2, 1);

insert into directs (director, movie) VALUES (1, 1);

insert into interprets (actor, movie) VALUES (2, 1)