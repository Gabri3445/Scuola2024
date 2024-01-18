use crimine;

select * from serialkiller;

select count(*) from serialkiller;

select * from serialkiller order by Vittimeaccertate des*c limit 1;

select * from serialkiller order by PossibiliVittime desc limit 1;

select * from serialkiller where AnnoInizio>=1980 and AnnoInizio<=1995 and AnnoFine<=1995;

select * from serialkiller where Note is not null;

select * from serialkiller where Nazione like "%Italy%" order by Vittimeaccertate desc;

select * from serialkiller where Vittimeaccertate>=10 and Vittimeaccertate<=20;

select * from serialkiller where AnnoFine<=1990;

select * from serialkiller order by Vittimeaccertate limit 1;

select * from serialkiller where Nazione like "%United States%" order by Vittimeaccertate limit 1;

select distinct Nazione from serialkiller;

select * from serialkiller where AnnoFine=0 and AnnoInizio=0;

select * from serialkiller where AnnoFine=AnnoInizio+10;

select avg(Vittimeaccertate) from serialkiller where Nazione like "%Russia%";

