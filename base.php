<?php
/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de cr�ation :  10/06/2020 23:21:13                      */
/*==============================================================*/

/*
alter table ACHTER 
   drop foreign key FK_ACHTER_ACHTER_PRODUITS;

alter table ACHTER 
   drop foreign key FK_ACHTER_ACHTER2_CLIENT;

alter table AJOUTER 
   drop foreign key FK_AJOUTER_AJOUTER_PANIER;

alter table AJOUTER 
   drop foreign key FK_AJOUTER_AJOUTER2_CLIENT;

alter table CATEGORIE_PRODUITS 
   drop foreign key FK_CATEGORI_APPARTIEN_PRODUITS;


alter table ACHTER 
   drop foreign key FK_ACHTER_ACHTER2_CLIENT;

alter table ACHTER 
   drop foreign key FK_ACHTER_ACHTER_PRODUITS;

drop table if exists ACHTER;


alter table AJOUTER 
   drop foreign key FK_AJOUTER_AJOUTER2_CLIENT;

alter table AJOUTER 
   drop foreign key FK_AJOUTER_AJOUTER_PANIER;

drop table if exists AJOUTER;


alter table CATEGORIE_PRODUITS 
   drop foreign key FK_CATEGORI_APPARTIEN_PRODUITS;

drop table if exists CATEGORIE_PRODUITS;

drop table if exists CLIENT;

drop table if exists PANIER;

drop table if exists PRODUITS;

/*==============================================================*/
/* Table : ACHTER                                               */
/*==============================================================*/
create table ACHTER
(
   ID_CLIENT            int not null  comment '',
   ID_PRODUITS          int not null  comment '',
   primary key (ID_CLIENT, ID_PRODUITS)
);

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
/* Table : CATEGORIE_PRODUITS                                   */
/*==============================================================*/
create table CATEGORIE_PRODUITS
(
   ID_CAT_PRDT          int not null  comment '',
   ID_PRODUITS          int not null  comment '',
   CAT_PRDT             text  comment '',
   primary key (ID_CAT_PRDT)
);

/*==============================================================*/
/* Table : CLIENT                                               */
/*==============================================================*/
create table CLIENT
(
   ID_CLIENT            int not null  comment '',
   CLT_NOM              text  comment '',
   CLT_EMAIL            text  comment '',
   CLTT_PASSWORD        text  comment '',
   CLTT_COFIRM          text  comment '',
   primary key (ID_CLIENT)
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
/* Table : PRODUITS                                             */
/*==============================================================*/
create table PRODUITS
(
   ID_PRODUITS          int not null  comment '',
   PRDT_NOM             text  comment '',
   PRDT_DESCRIPTION     text  comment '',
   PRDTT_QTE_STOCK      int  comment '',
   PRDT_PRIX            decimal  comment '',
   primary key (ID_PRODUITS)
);

alter table ACHTER add constraint FK_ACHTER_ACHTER_PRODUITS foreign key (ID_PRODUITS)
      references PRODUITS (ID_PRODUITS) on delete restrict on update restrict;

alter table ACHTER add constraint FK_ACHTER_ACHTER2_CLIENT foreign key (ID_CLIENT)
      references CLIENT (ID_CLIENT) on delete restrict on update restrict;

alter table AJOUTER add constraint FK_AJOUTER_AJOUTER_PANIER foreign key (ID_PANIER)
      references PANIER (ID_PANIER) on delete restrict on update restrict;

alter table AJOUTER add constraint FK_AJOUTER_AJOUTER2_CLIENT foreign key (ID_CLIENT)
      references CLIENT (ID_CLIENT) on delete restrict on update restrict;

alter table CATEGORIE_PRODUITS add constraint FK_CATEGORI_APPARTIEN_PRODUITS foreign key (ID_PRODUITS)
      references PRODUITS (ID_PRODUITS) on delete restrict on update restrict;

?>