create database takalomimilo;
use takalomimilo;

create table utilisateur(
    id int primary key not null auto_increment,
    nom varchar(30),
    mail varchar(50),
    passWord varchar(50),
    sary varchar(60)
);

insert into utilisateur values (null, 'mias', 'mias@gmail.com', '123', 'U1');
insert into utilisateur values (null, 'mitia', 'mitia@gmail.com', '123', 'U2');
insert into utilisateur values (null, 'loic', 'loic@gmail.com', '123', 'U3');

create table objet(
    id int primary key not null auto_increment,
    nom varchar(30),
    sary varchar(60),
    description varchar(200),
    prixEstimatif double
);

insert into objet values (null,'Lunette de soleil','img/1.png','Tendance Femme',12);
insert into objet values (null,'Lunette de soleil','img/2.png','Tendance Femme',13);
insert into objet values (null,'Telephone','img/4.png','Samsung M5',1200);
insert into objet values (null,'Telephone','img/5.png',' Samsung S4',900);
insert into objet values (null,'Telephone','img/6.png','Iphone 12',12000);
insert into objet values (null,'Tennis','img/7.png','Nike Air Force',1500);
insert into objet values (null,'Tennis','img/8.png','Nike Air Force Marron',1200);
insert into objet values (null,'Tennis','img/9.png','Nike Air Force Blanc',1200);
insert into objet values (null,'Pull','img/10.png','Pull femme',50);
insert into objet values (null,'Pull','img/12.png','Pull femme tendance',50);
insert into objet values (null,'Tennis','img/13.png','Pull femme',25);
insert into objet values (null,'Pull','img/14.png','Pull femme',25);

create table objetAko(
    idU int,
    idObj int,
    foreign key (idU) references utilisateur (id),
    foreign key (idObj) references objet (id)
);

insert into objetAko values (1, 1);
insert into objetAko values (1, 7);
insert into objetAko values (1, 6);
insert into objetAko values (1, 3);
insert into objetAko values (2, 8);
insert into objetAko values (2, 9);
insert into objetAko values (2, 10);
insert into objetAko values (2, 11);
insert into objetAko values (2, 4);
insert into objetAko values (3, 2);
insert into objetAko values (3, 5);
insert into objetAko values (3, 12);

alter table objetako add column fotoana datetime;
update objetako set fotoana = '2023-02-07 12:51:00' where idU = 1 and idObj = 1;
update objetako set fotoana = '2023-02-07 12:51:35' where idU = 1 and idObj = 7;
update objetako set fotoana = '2023-02-07 12:52:00' where idU = 1 and idObj = 6;
update objetako set fotoana = '2023-02-07 12:53:00' where idU = 1 and idObj = 3;

update objetako set fotoana = '2023-02-07 13:01:00' where idU = 2 and idObj = 8;
update objetako set fotoana = '2023-02-07 13:02:00' where idU = 2 and idObj = 9;
update objetako set fotoana = '2023-02-07 13:04:00' where idU = 2 and idObj = 10;
update objetako set fotoana = '2023-02-07 13:05:00' where idU = 2 and idObj = 11;
update objetako set fotoana = '2023-02-07 13:07:00' where idU = 2 and idObj = 4;

update objetako set fotoana = '2023-02-07 15:07:00' where idU = 3 and idObj = 2;
update objetako set fotoana = '2023-02-07 15:10:00' where idU = 3 and idObj = 5;
update objetako set fotoana = '2023-02-07 15:12:00' where idU = 3 and idObj = 12;

create table echange(
    id int primary key not null auto_increment,
    idUM int,
    idObjGet int,
    idObjSet int,
    idUA int,
    status varchar(20),
    foreign key (idUM) references utilisateur(id),
    foreign key (idUA) references utilisateur(id),
    foreign key (idObjGet) references objet(id),
    foreign key (idObjSet) references objet(id)
);

insert into echange values (null, 1, 7, 10, 2, 'en attente');
insert into echange values (null, 2, 10, 5, 3, 'en attente');
insert into echange values (null, 3, 12, 3, 1, 'en attente');

alter table echange add column datedemande datetime;
alter table echange add column dateaccept datetime;

update echange set datedemande = '2023-02-07 15:07:00' set dateaccept = 'null'  where idUM = 1 and idObjGet = 7 and idObjSet = 10 and idUA = 2 ;
update echange set datedemande = '2023-02-07 15:10:00' set dateaccept = '2023-02-07 15:12:00' where idUM = 2 and idObjGet = 10 and idObjSet = 5 and idUA = 3;

create or replace view ObjetParUser as
select oMe.idU, o.*, oMe.fotoana from objetAko oMe
    join objet o on o.id = oMe.idObj
    order by oMe.fotoana desc;

create or replace view echangePreci as
select e.id, e.idUM, UM.nom nomUM, oG.id idObGet, oG.nom nomObjGet, oG.sary saryObjGet, oG.prixEstimatif volaObjGet, 
    oS.id idObSet, oS.nom nomObjSet, oS.sary saryObjSet, oS.prixEstimatif volaObjSet, UA.nom nomUA, e.idUA, e.datedemande, e.dateaccept from echange e
    join objet oG on oG.id = e.idObjGet
    join objet oS on oS.id = e.idObjSet
    join utilisateur UM on UM.id = e.idUM
    join utilisateur UA on UA.id = e.idUA;

