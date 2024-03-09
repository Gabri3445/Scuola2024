/*
 https://www.w3resource.com/mysql/date-and-time-functions/date-and-time-functions.php
2. Trovare gli allenatori che non sono stati esonerati
3. Trovare le nazionalità (senza ripetizioni) degli allenatori
4. Trovare il nome degli allenatori che sono nati di sabato
5. Trovare il nome degli allenatori che sono nati di febbraio
6. Trovare gli allenatori che hanno meno di 40 anni
7. Trovare il nome gli allenatori delle squadre di calcio alla sesta giornata di calcio
8. Trovare il nome delle squadre diverse dal nome della città
9. Trovare il nome delle squadre che sono state promosse in serie A (ma non quella entrata dopo
play-off)
10. Trovare gli stadi dove si sono disputate le partite della decima giornata
11. Indicare il nome dei giocatori, la squadra e lo stadio di coloro che sono capitani in ordine alfabetico
per nome
12. Trovare l’elenco dei portieri per ogni squadra
13. Trovare l’elenco della difesa del Sassuolo
14. Indicare le date in cui il Milan ha vinto
15. Trovare il numero di gol segnati dall'inter in tutte le partite
16. Indicare tutti i dati delle partite disputate a milanoà
17. Trovare il capitano della squadra allenata da Eusebio Di Francesco
18. Contare le partite vinte in casa e ordinarle in modo decrescente
19. Trovare l'allenatore piu vecchio
20. Trovare la squadra che ha fatto piu gol fuori casa in una singola partita
 */
-- 2
select allenatori.Allenatore, allenatori.Datanascita, allenatori.Nazionalita, a.Squadra, a.Dagiornata
from allenatori
         join allena a on allenatori.Allenatore = a.Allenatore
where a.Agiornata is null;
-- 3
select distinct Nazionalita
from allenatori;
-- 4
select Allenatore
from allenatori
where dayofweek(Datanascita) = 7;
-- 5
select Allenatore
from allenatori
where monthname(Datanascita) = 'February';
-- 6
select Allenatore
from allenatori
where Datanascita > date_sub(current_date, interval 40 year);
-- 7
select allena.allenatore
from allena
         join partite p on p.SquadraCasa = allena.Squadra
where (Agiornata >= 6 or Agiornata is null)
  and Dagiornata <= 6
  and p.Giornata = 6
union
select allena.allenatore
from allena
         join partite p on p.SquadraOspite = allena.Squadra
where (Agiornata >= 6 or Agiornata is null)
  and Dagiornata <= 6
  and p.Giornata = 6;
-- 8
select Club
from squadre_2023_24
where Club != Citta;
-- 9
select Club
from squadre_2023_24
where Serieprecedente = 'B'
  and PostoStagionePrecedente <= 2;
-- 10
select Stadio
from squadre_2023_24
         join partite p on squadre_2023_24.Club = p.SquadraCasa
where Giornata = 10;
-- 11
select NomeCalciatore, Squadra, s.Stadio
from giocatori
         join squadre_2023_24 s on giocatori.Squadra = s.Club
where Capitano = true
order by NomeCalciatore;
-- 12
select NomeCalciatore, Squadra
from giocatori
where Ruolo = 'P';
-- 13
select NomeCalciatore
from giocatori
where (Ruolo = 'P' or Ruolo = 'D')
  and Squadra = 'Sassuolo';
-- 14
select Data
from partite
where (SquadraCasa = 'Milan' and GolCasa > GolOspite)
   or (SquadraOspite = 'Milan' and GolOspite > partite.GolCasa)
order by Data;
-- 15
select sum(case
               when SquadraCasa = 'Inter' then GolCasa
               when SquadraOspite = 'Inter' then GolOspite END)
           as 'Gol segnati Inter'
from partite;
-- 16
select *
from partite
         join squadre_2023_24 s on partite.SquadraCasa = s.Club
where s.Citta = 'Milano'
union
select *
from partite
         join squadre_2023_24 s on partite.SquadraOspite = s.Club
where s.Citta = 'Milano';
-- 17 Eusebio Di Francesco
select NomeCalciatore
from giocatori
         join squadre_2023_24 s on giocatori.Squadra = s.Club
         join allena a on s.Club = a.Squadra
where Capitano = true
  and a.Allenatore = 'Eusebio Di Francesco';
-- 18
select SquadraCasa, count(*)
from partite
where GolCasa > partite.GolOspite
group by partite.SquadraCasa
order by count(*) desc;
-- 19
select Allenatore, Datanascita
from allenatori
order by Datanascita
limit 1;
-- 20
select SquadraCasa, SquadraOspite, max(GolOspite), Data
from partite;
-- 21 classifica, 3 punti v, 1 p, 0 persa
select squadra,
       sum(totaleGol) as totaleGol
from (select SquadraCasa as squadra,
             sum(case
                     when GolCasa > partite.GolOspite then 3
                     when GolCasa = GolOspite then 1
                 end)    as totaleGol
      from partite
      group by SquadraCasa
      union all
      select SquadraOspite as squadra,
             sum(case
                     when GolCasa < partite.GolOspite then 3
                     when GolCasa = GolOspite then 1
                 end)      as totaleGol
      from partite
      group by SquadraOspite) as GolPerSquadra
group by squadra
order by totaleGol desc