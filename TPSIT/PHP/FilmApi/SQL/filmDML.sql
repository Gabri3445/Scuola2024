use movie;

insert into genre (name)
values ('action'),
       ('science fiction');

insert into movie (title, synopsys, releaseYear) VALUE ('Pacific rim',
                                                        'Pacific Rim is a 2013 American science fiction monster film directed by Guillermo del Toro, starring Charlie Hunnam, Idris Elba, Rinko Kikuchi, Charlie Day, Robert Kazinsky, Max Martini, and Ron Perlman, and the first film in the Pacific Rim franchise. The screenplay was written by Travis Beacham and del Toro from a story by Beacham. The film is set in the not-too-distant future, when Earth is at war with the Kaijus,[a] colossal sea monsters which have emerged from an interdimensional portal on the bottom of the Pacific Ocean. To combat the monsters, humanity unites to create the Jaegers,[b] gigantic humanoid mechas, each controlled by two co-pilots whose minds are joined by a mental link. Focusing on the war''s later days, the story follows Raleigh Becket, a washed-up Jaeger pilot called out of retirement and teamed with rookie pilot Mako Mori as part of a last-ditch effort to defeat the Kaiju and their secret masters once and for all.',
                                                        2013);

INSERT INTO movie.movie (title, synopsys, releaseYear)
VALUES ('Pacific Rim Uprising', 'Pacific Rim Uprising is a 2018 American science fiction monster film directed by Steven S. DeKnight (in his feature-film directorial and writing debut), and written by DeKnight, Emily Carmichael, Kira Snyder and T.S. Nowlin. It is the sequel to the 2013 film Pacific Rim, and second installment in the Pacific Rim franchise. Guillermo del Toro, director of the first movie, serves as a producer; while production studios Legendary Pictures and Double Dare You Productions developed the movie. The sequel stars John Boyega, as well as Scott Eastwood, Cailee Spaeny in her film debut, Jing Tian, Adria Arjona and Zhang Jin, with Rinko Kikuchi, Charlie Day, and Burn Gorman returning from the original film. The film takes place in 2035, ten years after the events of the first film. The story follows Jake Pentecost, who is given one last chance to live up to his father''s legacy after Kaiju, giant sea monsters, are unleashed back into the world and aim to destroy it.

Principal photography began in November 2016 in Queensland, Australia.[6] Pacific Rim Uprising premiered in Hollywood, Los Angeles, on March 15, 2018, and was released in the United States on March 23, by Universal Pictures (unlike its predecessor, which was released by Warner Bros. Pictures). With a gross of $290.9 million worldwide, the film was a box-office disappointment.[5] It also received mixed reviews; many critics considered it inferior to del Toro''s film and criticized its story, while praising its visual effects, action sequences, and performances of Boyega, Eastwood and Spaeny.[7][8] It was followed in 2021 by a 14-episode animated series on Netflix.',
        2018);


insert into person (category, name, middleName, surname, bDate)
VALUES ('director', 'Guillermo', 'del', 'Toro', '1964-10-9'),
       ('actor', 'Idris', null, 'Elba', '1972-9-6');

INSERT INTO movie.person (category, name, middleName, surname, bDate)
VALUES ('director', 'Steven', 'S.', 'DeKnight', '1965-10-28');

INSERT INTO movie.person (category, name, middleName, surname, bDate)
VALUES ('actor', 'Charlie', 'Peckham', 'Day', '1976-02-09');

INSERT INTO movie.person (category, name, middleName, surname, bDate)
VALUES ('actor', 'John', 'Adedayo Bamidele', 'Adegboyega', '1992-03-17');

INSERT INTO movie.genre (name, id)
VALUES ('monster', 3);

INSERT INTO movie.person (category, name, middleName, surname, bDate)
VALUES ('actor', 'Ronald', 'N.', 'Perlman', '1950-04-13');

INSERT INTO movie.person (category, name, middleName, surname, bDate)
VALUES ('actor', 'Burn', 'Hugh', 'Gorman', '1974-09-01');

INSERT INTO movie.interprets (actor, movie)
VALUES (6, 2);

INSERT INTO movie.interprets (actor, movie)
VALUES (3, 2);

INSERT INTO movie.interprets (actor, movie)
VALUES (7, 1);

INSERT INTO movie.interprets (actor, movie)
VALUES (7, 2);

INSERT INTO movie.genres (genre, movie)
VALUES (3, 1);

INSERT INTO movie.genres (genre, movie)
VALUES (1, 2);

INSERT INTO movie.genres (genre, movie)
VALUES (2, 2);

INSERT INTO movie.genres (genre, movie)
VALUES (3, 2);

insert into genres (genre, movie)
VALUES (1, 1),
       (2, 1);

insert into directs (director, movie)
VALUES (1, 1);

INSERT INTO movie.directs (director, movie)
VALUES (5, 2);

insert into interprets (actor, movie)
VALUES (2, 1);

INSERT INTO movie.interprets (actor, movie)
VALUES (3, 1);

INSERT INTO movie.interprets (actor, movie)
VALUES (4, 1);
