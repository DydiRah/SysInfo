create table user(
    idUser integer primary key auto_increment,
    nom varchar(255),
    mail varchar(255),
    mdp varchar(255)
);
insert into user values(default,'user1','u1@gmail.com','u1');

create table societe(
    idSociete integer primary key auto_increment,
    NomEntreprise varchar(255),
    NomDirigeant varchar(255),
    Objet varchar(255),
    DebutExercice timestamp,
    Siege varchar(255),
    IdFiscale varchar(255),
    Stat varchar(255),
    RCS varchar(255),
    Statut varchar(255),
    TenuCompte varchar(255),
    DeviseEquivalence varchar(255)
);

