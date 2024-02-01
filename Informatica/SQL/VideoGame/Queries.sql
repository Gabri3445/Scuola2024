use videogiochi;

select *
from videogame;

select distinct nome
from videogame;

select *
from videogame
order by user_review desc;

select *
from videogame
order by meta_score;

select count(*)
from videogame;

select nome, piattaforma, data_rilascio
from videogame;

select nome, data_rilascio
from videogame
where piattaforma = " PlayStation 4";

select nome, data_rilascio
from videogame
where piattaforma like "%Playstation%";

select *
from videogame
where piattaforma = " Switch"
   or piattaforma = " Wii"
   or piattaforma = " Wii U";

select *
from videogame
where piattaforma like "%PlayStation%"
   or piattaforma = " DS";

select distinct nome
from videogame
order by nome;

select *
from videogame
where piattaforma = " Nintendo 64"
  and user_review > 70;

select count(*)
from videogame
where piattaforma = " PC";

select avg(meta_score - user_review)
from videogame;

select nome, piattaforma, data_rilascio
from videogame
where nome like "%Super Mario%";

select *
from videogame
where data_rilascio = "2014-10-18"
   or data_rilascio = "2021-10-15";

select *
from videogame
where nome like "M_R%";

select *
from videogame
where nome like "%Marvel%";

select sum(user_review)
from videogame
where piattaforma = " 3DS";

select *
from videogame
where year(data_rilascio) < 2024 - 18;

select avg(user_review)
from videogame
where nome like "%Mario Kart%";

select id
from videogame
where nome = "Mortal Kombat X";

select count(*)
from videogame
where nome like "%Zelda%";

select distinct piattaforma
from videogame;

select count(*)
from videogame
group by data_rilascio
order by count(*) desc;

select count(*)
from videogame
group by piattaforma;

select piattaforma
from videogame
group by piattaforma
order by count(*)
limit 1;

select *
from videogame
order by data_rilascio
limit 1;

select *
from videogame
where month(data_rilascio) = 2;

select *
from videogame
where day(data_rilascio) = 15;

select *
from videogame
where month(data_rilascio) = 2
  and (day(data_rilascio) = 15 or day(data_rilascio) = 20);

select *
from videogame
where dayofweek(data_rilascio) = 3;

select *
from videogame
where year(data_rilascio) = 2005
   or year(data_rilascio) = 2006;

select *
from videogame
order by user_review desc
limit 5;