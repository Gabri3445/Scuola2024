use crimine;

-- 1
select * from serialkiller;

-- 2
select count(*) from serialkiller;

-- 3
select * from serialkiller order by Vittimeaccertate desc limit 1;

-- 4
select * from serialkiller order by PossibiliVittime desc limit 1;

-- 5
select * from serialkiller where AnnoInizio>=1980 and AnnoInizio<=1995 and AnnoFine<=1995;

-- 6
select * from serialkiller where Note is not null;

-- 7
select * from serialkiller where Nazione like "%Italy%" order by Vittimeaccertate desc;

-- 8
select * from serialkiller where Vittimeaccertate>=10 and Vittimeaccertate<=20;

-- 9
select * from serialkiller where AnnoFine<=1990;

-- 10
select * from serialkiller order by Vittimeaccertate limit 1;

-- 11
select * from serialkiller where Nazione like "%United States%" order by Vittimeaccertate limit 1;

-- 12
select distinct Nazione from serialkiller;

-- 13
select * from serialkiller where AnnoFine=0 and AnnoInizio=0;

-- 14
select * from serialkiller where AnnoFine=AnnoInizio+10;

-- 15
select avg(Vittimeaccertate) from serialkiller where Nazione like "%Russia%";

-- 16
select * from serialkiller where Nome like "_B%";

-- 17
select * from serialkiller where PossibiliVittime>20;

-- 18
select * from serialkiller where Nome="Richard Ramirez";

-- 19
select * from serialkiller where PossibiliVittime!=0;

-- 20
select * from serialkiller where Note like "%Known%" or Note like "%Nicknamed%";

-- 21
select count(*) from serialkiller where AnnoFine=0;

-- 22
select count(*) from serialkiller where AnnoFine!=0;

-- 23
select * from serialkiller where Vittimeaccertate=15 and Nazione like "%United States%";

-- 24
select * from serialkiller where AnnoFine<2000 and AnnoFine!=0;

-- 25
select * from serialkiller where Note like "%The Butcher of Rostov%";

-- 26
select * from serialkiller where Vittimeaccertate>5 and Nazione like "%India%";

-- 27
select * from serialkiller where Nazione like "%,%";

-- 28
select * from serialkiller where AnnoInizio=0 and AnnoFine=0;

-- 29
select * from serialkiller where Vittimeaccertate>10 or PossibiliVittime>25;

-- 30
select AnnoInizio, AnnoFine, Vittimeaccertate from serialkiller;

-- 31
select sum(Vittimeaccertate) from serialkiller;

-- 32
select Nome, Note from serialkiller;

-- 33
select avg(Vittimeaccertate) from serialkiller;

-- 34
select Nome, AnnoInizio, AnnoFine from serialkiller where Vittimeaccertate>10;

-- 35
select sum(Vittimeaccertate), sum(PossibiliVittime) from serialkiller;

-- 36
select count(*) from serialkiller where AnnoFine<1980;

-- 37
select Nome, Nazione, Note from serialkiller;

-- 38
select * from serialkiller order by Vittimeaccertate desc limit 1;

-- 39
select Nome, PossibiliVittime from serialkiller where PossibiliVittime>5;

-- 40
select count(*) from serialkiller where AnnoFine<2000;

-- 41
select Nome, AnnoInizio from serialkiller where AnnoFine=0;

-- 42
select * from serialkiller order by Vittimeaccertate limit 1;

-- 43
select Nome, Nazione from serialkiller where AnnoInizio>1979 and AnnoFine<2001;

-- 44
select sum(Vittimeaccertate), Nazione from serialkiller group by Nazione;

-- 45
select Nome, AnnoInizio, AnnoFine from serialkiller where Vittimeaccertate>20;

-- 46
select * from serialkiller where Note like "%Psychopath%";

-- 47
select Nome, Vittimeaccertate+PossibiliVittime from serialkiller;

-- 48
select * from serialkiller order by Vittimeaccertate+PossibiliVittime desc limit 1;

-- 49
select count(*), Nazione from serialkiller group by Nazione;

-- 50
select AVG(AnnoFine - AnnoInizio) from serialkiller;

-- 51
select Nome, Nazione from serialkiller where AnnoFine!=0;

-- 52
select count(*) from serialkiller where Vittimeaccertate>3;

-- 53
select Nome, Note from serialkiller where AnnoFine=0;

-- 54
select * from serialkiller where Vittimeaccertate>=18;

-- 55
select Nome, Nazione from serialkiller;

-- 56
select Nome, Nazione from serialkiller where Vittimeaccertate>=18;

-- 57
select * from serialkiller where AnnoInizio>=1980 and AnnoFine <=1990;

-- 58
select * from serialkiller where AnnoInizio < 1990 and (AnnoFine is not null and AnnoFine between 1990 and 1999);