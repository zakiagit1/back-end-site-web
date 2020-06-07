/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de cr�ation :  05/06/2020 01:00:27                      */
/*==============================================================*/

/*
alter table AJOUTER 
   drop foreign key FK_AJOUTER_AJOUTER_PANIER;

alter table AJOUTER 
   drop foreign key FK_AJOUTER_AJOUTER2_CLIENT;

alter table CLIENT 
   drop foreign key FK_CLIENT_GERE_USER;

alter table CLIENT 
   drop foreign key FK_CLIENT_HABIT_VILLE;

alter table COMMANDE 
   drop foreign key FK_COMMANDE_PASSER_CLIENT;

alter table POSSEDE 
   drop foreign key FK_POSSEDE_POSSEDE_PRODUITS;

alter table POSSEDE 
   drop foreign key FK_POSSEDE_POSSEDE2_COMMANDE;

alter table POSSEDER 
   drop foreign key FK_POSSEDER_POSSEDER2_COMMANDE;

alter table PRODUITS 
   drop foreign key FK_PRODUITS_APPARTIEN_CATEGORI;

alter table USER 
   drop foreign key FK_USER_SE_SITUE_VILLE;


alter table AJOUTER 
   drop foreign key FK_AJOUTER_AJOUTER2_CLIENT;

alter table AJOUTER 
   drop foreign key FK_AJOUTER_AJOUTER_PANIER;

drop table if exists AJOUTER;

drop table if exists CATEGORIE_PRODUIT;


alter table CLIENT 
   drop foreign key FK_CLIENT_HABIT_VILLE;

alter table CLIENT 
   drop foreign key FK_CLIENT_GERE_USER;

drop table if exists CLIENT;


alter table COMMANDE 
   drop foreign key FK_COMMANDE_PASSER_CLIENT;

drop table if exists COMMANDE;

drop table if exists MODE_PAIMENT;

drop table if exists PANIER;


alter table POSSEDE 
   drop foreign key FK_POSSEDE_POSSEDE2_COMMANDE;

alter table POSSEDE 
   drop foreign key FK_POSSEDE_POSSEDE_PRODUITS;

drop table if exists POSSEDE;


alter table POSSEDER 
   drop foreign key FK_POSSEDER_POSSEDER2_COMMANDE;

drop table if exists POSSEDER;


alter table PRODUITS 
   drop foreign key FK_PRODUITS_APPARTIEN_CATEGORI;

drop table if exists PRODUITS;


alter table USER 
   drop foreign key FK_USER_SE_SITUE_VILLE;

drop table if exists USER;

drop table if exists VILLE;*/

/*==============================================================*/
/* Table : AJOUTER                                              */
/*==============================================================*/
create table AJOUTER
(
   ID_CLIENT            int not null  comment '',
   ID_PANIER            int not null  comment '',
   primary key (ID_CLIENT, ID_PANIER)
);

/*==============================================================*/
/* Table : CATEGORIE_PRODUIT                                    */
/*==============================================================*/
create table CATEGORIE_PRODUIT
(
   ID_CATEG             int not null  comment '',
   CATEG_LIBELLE        text  comment '',
   primary key (ID_CATEG)
);

/*==============================================================*/
/* Table : CLIENT                                               */
/*==============================================================*/
create table CLIENT
(
   ID_CLIENT            int not null  comment '',
   ID_VILLE             int not null  comment '',
   ID_USER              int not null  comment '',
   CLIENT_NOM           text  comment '',
   CLIENT_PRENOM        text  comment '',
   CLIENT_ADRESSE       text  comment '',
   CLIENT_TEL           text  comment '',
   CLIENT_EMAIL         text  comment '',
   primary key (ID_CLIENT)
);

/*==============================================================*/
/* Table : COMMANDE                                             */
/*==============================================================*/
create table COMMANDE
(
   ID_COMMANDE          int not null  comment '',
   ID_CLIENT            int not null  comment '',
   CMD_LIBELLE          text  comment '',
   CMD_DATE             text  comment '',
   primary key (ID_COMMANDE)
);

/*==============================================================*/
/* Table : MODE_PAIMENT                                         */
/*==============================================================*/
create table MODE_PAIMENT
(
   ID_PAIMENT           int  comment '',
   PAIMENT_LIBELLE      text  comment ''
);

/*==============================================================*/
/* Table : PANIER                                               */
/*==============================================================*/
create table PANIER
(
   ID_PANIER            int not null  comment '',
   primary key (ID_PANIER)
);

/*==============================================================*/
/* Table : POSSEDE                                              */
/*==============================================================*/
create table POSSEDE
(
   ID_COMMANDE          int not null  comment '',
   ID_PRODUITS          int not null  comment '',
   primary key (ID_COMMANDE, ID_PRODUITS)
);

/*==============================================================*/
/* Table : POSSEDER                                             */
/*==============================================================*/
create table POSSEDER
(
   ID_COMMANDE          int not null  comment '',
   primary key (ID_COMMANDE)
);

/*==============================================================*/
/* Table : PRODUITS                                             */
/*==============================================================*/
create table PRODUITS
(
   ID_PRODUITS          int not null  comment '',
   ID_CATEG             int not null  comment '',
   PRDT_NOM             text  comment '',
   PRDT_DESCRIPTION     text  comment '',
   PRDT_QUANTITE_STOCK  int  comment '',
   PRDT_PRIX            decimal  comment '',
   primary key (ID_PRODUITS)
);

/*==============================================================*/
/* Table : USER                                                 */
/*==============================================================*/
create table USER
(
   ID_USER              int not null  comment '',
   ID_VILLE             int not null  comment '',
   USER_USERNAME        text  comment '',
   USER_PASSWORD        text  comment '',
   USER_EMAIL           text  comment '',
   USER_ADRESSE         text  comment '',
   USER_NOM             text  comment '',
   USER_PRENOM          text  comment '',
   primary key (ID_USER)
);

/*==============================================================*/
/* Table : VILLE                                                */
/*==============================================================*/
create table VILLE
(
   ID_VILLE             int not null  comment '',
   VILLE_CP             text  comment '',
   VILLE_NOM_COMMUNE    text  comment '',
   VILLE_NOM_REGION     text  comment '',
   primary key (ID_VILLE)
);
/*
alter table AJOUTER add constraint FK_AJOUTER_AJOUTER_PANIER foreign key (ID_PANIER)
      references PANIER (ID_PANIER) on delete restrict on update restrict;

alter table AJOUTER add constraint FK_AJOUTER_AJOUTER2_CLIENT foreign key (ID_CLIENT)
      references CLIENT (ID_CLIENT) on delete restrict on update restrict;

alter table CLIENT add constraint FK_CLIENT_GERE_USER foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table CLIENT add constraint FK_CLIENT_HABIT_VILLE foreign key (ID_VILLE)
      references VILLE (ID_VILLE) on delete restrict on update restrict;

alter table COMMANDE add constraint FK_COMMANDE_PASSER_CLIENT foreign key (ID_CLIENT)
      references CLIENT (ID_CLIENT) on delete restrict on update restrict;

alter table POSSEDE add constraint FK_POSSEDE_POSSEDE_PRODUITS foreign key (ID_PRODUITS)
      references PRODUITS (ID_PRODUITS) on delete restrict on update restrict;

alter table POSSEDE add constraint FK_POSSEDE_POSSEDE2_COMMANDE foreign key (ID_COMMANDE)
      references COMMANDE (ID_COMMANDE) on delete restrict on update restrict;

alter table POSSEDER add constraint FK_POSSEDER_POSSEDER2_COMMANDE foreign key (ID_COMMANDE)
      references COMMANDE (ID_COMMANDE) on delete restrict on update restrict;

alter table PRODUITS add constraint FK_PRODUITS_APPARTIEN_CATEGORI foreign key (ID_CATEG)
      references CATEGORIE_PRODUIT (ID_CATEG) on delete restrict on update restrict;

alter table USER add constraint FK_USER_SE_SITUE_VILLE foreign key (ID_VILLE)
      references VILLE (ID_VILLE) on delete restrict on update restrict;

