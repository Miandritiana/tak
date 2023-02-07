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