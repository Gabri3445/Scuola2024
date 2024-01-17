use terremoti;

select * from terremotiita;

select * from terremotiita order by Magnitudo desc;

select * from terremotiita order by PROFONDITAKm;

select count(*) from terremotiita;

select Data, Ora, Luogo from terremotiita;

select Data, Ora from terremotiita where Luogo="Vesuvio";

select * from terremotiita where Luogo like "%Pesaro-Urbino%";

select * from terremotiita where Luogo like "%Pesaro-Urbino%" and Magnitudo>25;

select count(*) from terremotiita where Luogo like "%Pesaro-Urbino%";

select Data, Ora, Magnitudo from terremotiita where Luogo like "%(BA)%";

select * from terremotiita where (day(Data)=14 or day(Data)=25) and (month(Data)=2 or month(Data)=10);

select * from terremotiita where luogo like "%(MARE)%";

select * from terremotiita where Luogo like "%Adriatico%";

select * from terremotiita where year(Data)=2023 and day(Data)=1 and month(Data)=1;

select * from terremotiita where year(Data)=2023 and Luogo like "%Germania%" and day(Data)=1 and month(Data)=1;

select * from terremotiita where year(Data)=2023;

select count(*) from terremotiita where year(Data)=2023;

select Data, Ora, Luogo, Magnitudo from terremotiita where MagType like "%Mwp%";

select * from terremotiita where Luogo like "1 km%" order by Magnitudo;

select * from terremotiita where Luogo like "1 km%" order by PROFONDITAKm desc;

select distinct Luogo from terremotiita;

select * from terremotiita order by Magnitudo desc limit 1;

select avg(PROFONDITAKm) from terremotiita;

select avg(PROFONDITAKm) from terremotiita where Luogo like "%Southeast of Honshu%";

select * from terremotiita where Luogo like "%Kuril Islands%" order by Magnitudo limit 1;

select avg(Magnitudo), MagType from terremotiita group by MagType;

select count(*), Data from terremotiita group by Data;

select count(*), Data from terremotiita group by Data order by count(*) desc;

select count(*), Data from terremotiita group by Data order by count(*) desc limit 1;

select * from terremotiita where Data="2023-02-06";

select * from terremotiita where Data="2023-02-06";

select * from terremotiita where month(Data)=10;

select * from terremotiita where day(Data)=15;

select * from terremotiita where day(Data)>=15 and day(Data)<=20;

select * from terremotiita where dayofweek(Data)=7;

select * from terremotiita where hour(Ora)=7 or hour(Ora)=8;

select * from terremotiita where hour(Ora)=7 and minute(Ora)<10;