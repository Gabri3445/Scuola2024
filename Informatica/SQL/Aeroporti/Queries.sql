use DBAeroporti;

-- 1
select *
from aeroporti
where IATA = "CLE";

-- 2
select count(*)
from aeroporti;

-- 3
select Citta
from aeroporti
where IATA = "IAG";

-- 4
select Citta
from aeroporti
order by MediaPasseggeri desc;

-- 5
select distinct Citta
from aeroporti
order by Citta desc;

-- 6
select *
from aeroporti
where Citta like "%Chicago%"
order by MediaPasseggeri;

-- 7
select sum(MediaPasseggeri)
from aeroporti
where Citta like "%Columbus%";

-- 8
select *
from aeroporti
where Citta like "M%";

-- 9
select avg(MediaPasseggeri) as Risultato
from aeroporti;

-- 10
select *
from DBAeroporti.aeroporti
where MediaPasseggeri > (select AVG(MediaPasseggeri) from DBAeroporti.aeroporti);

-- 11
select count(*), Citta
from aeroporti
group by Citta
order by count(*) desc;

-- 12
select *
from aeroporti
where nomeaeroporto like "%International%";

-- 13
select *
from aeroporti
where nomeaeroporto like "%port";

-- 14
select *
from aeroporti
order by MediaPasseggeri desc
limit 1;

-- 15
select *
from aeroporti
order by MediaPasseggeri
limit 1;

-- 16
select *
from aeroporti
where MediaPasseggeri between 1000000 and 2000000;

-- 17
select *
from aeroplani
where ICAOcode = 'SB20';

-- 18
select count(*) as "Totale Aerei"
from aeroplani;

-- 19
select ICAOcode
from aeroplani
where Nome = "Embraer Legacy 600";

-- 20
select *
from aeroplani
where Nome like 'B%'
order by Nome;

-- 21
select *
from aeroplani
where Nome like "A%"
  and Nome like '%0';

-- 22
select *
from voli
where id = 1089;

-- 23
select count(*)
from voli
where aeroportoP = "LAX";

-- 24
select count(*)
from voli
where aeroportoA = "ATL";

-- 25
select count(*)
from voli
where TipoAereo = "MD81";

-- 26
select *
from voli
where TipoAereo = "B74D"
  and aeroportoP != "CLT";

-- 27
select *
from voli
where giornosett = 7;

-- 28
select count(*)
from voli
where giornosett = 3;

-- 29
select count(*)
from voli
where giornosett = 2
  and aeroportoP != "JFK";

-- 30
select count(*)
from voli
where giornosett = 4;

-- join

-- 31
select partenza.nomeaeroporto as partenza_aeroporto, arrivo.nomeaeroporto as arrivo_aeroporto
from voli
         join aeroporti as partenza on voli.aeroportop = partenza.iata
         join aeroporti as arrivo on voli.aeroportoa = arrivo.iata
where voli.id = 7284;

-- 32
select nome
from voli
         join aeroporti as partenza on voli.aeroportop = partenza.iata
         join aeroporti as arrivo on voli.aeroportoa = arrivo.iata
         join aeroplani on voli.tipoaereo = aeroplani.icaocode
where partenza.citta = 'Albuquerque'
  and arrivo.citta = 'Los Angeles'
order by nome;

-- 33
select Nome
from voli
         join aeroplani a on a.ICAOcode = voli.TipoAereo
         join aeroporti a2 on voli.aeroportoP = a2.IATA
where a2.Citta = "Austin";

-- 34
select distinct Nome
from voli
         join aeroplani a on a.ICAOcode = voli.TipoAereo
         join aeroporti a2 on voli.aeroportoP = a2.IATA
where IATA = (select IATA from aeroporti order by MediaPasseggeri desc limit 1);

-- 35
select a2.Citta
from voli
         join aeroporti a on voli.aeroportoA = a.IATA
         join aeroporti a2 on voli.aeroportoP = a2.IATA
where a.Citta = 'Salt Lake City';

-- 36
select partenza.Citta, arrivo.Citta
from voli
         join aeroplani a on a.ICAOcode = voli.TipoAereo
         join aeroporti partenza on voli.aeroportoP = partenza.IATA
         join aeroporti arrivo on voli.aeroportoA = arrivo.IATA
where a.Nome = 'British Aerospace Jetstream 31';

-- 37
select partenza.Citta
from voli
         join aeroporti arrivo on voli.aeroportoA = arrivo.IATA
         join aeroporti partenza on partenza.IATA = voli.aeroportoP
where arrivo.Citta = 'Birmingham'
  and (partenza.Citta != 'Las Vegas' and giornosett != 4)
  and (arrivo.Citta != 'Buffalo' and giornosett != 6);

-- 38
select count(*)
from voli
         join aeroporti a on a.IATA = voli.aeroportoP
where a.Citta = 'Baltimore'
  and giornosett = 2;

-- 39
select Nome
from voli
         join aeroporti p on p.IATA = voli.aeroportoP
         join aeroporti a on a.IATA = voli.aeroportoA
         join aeroplani a2 on voli.TipoAereo = a2.ICAOcode
where a.nomeaeroporto = 'Chippewa Valley Regional Airport'
   or (p.Citta = 'Daytona Beach' and voli.giornosett = 1);

-- 40
select distinct Citta
from aeroplani
         join voli v on aeroplani.ICAOcode = v.TipoAereo
         join aeroporti a on v.aeroportoP = a.IATA or v.aeroportoA = a.IATA
where Nome like '%Airbus%';