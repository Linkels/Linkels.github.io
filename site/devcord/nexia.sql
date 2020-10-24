#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: user
#------------------------------------------------------------

CREATE TABLE user(
        id_user  Int  Auto_increment  NOT NULL ,
        pseudo   Varchar (15) NOT NULL ,
        statut   Varchar (25) NOT NULL ,
        password Varchar (1000) NOT NULL
	,CONSTRAINT user_PK PRIMARY KEY (id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: article
#------------------------------------------------------------

CREATE TABLE article(
        id_article  Int  Auto_increment  NOT NULL ,
        nom_article Varchar (25) NOT NULL ,
        description Varchar (2000) NOT NULL ,
        contenu     Text NOT NULL ,
        id_user     Int NOT NULL
	,CONSTRAINT article_PK PRIMARY KEY (id_article)

	,CONSTRAINT article_user_FK FOREIGN KEY (id_user) REFERENCES user(id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: commentaire
#------------------------------------------------------------

CREATE TABLE commentaire(
        id_comm     Int  Auto_increment  NOT NULL ,
        commentaire Varchar (4000) NOT NULL ,
        id_user     Int NOT NULL ,
        id_article  Int NOT NULL
	,CONSTRAINT commentaire_PK PRIMARY KEY (id_comm)

	,CONSTRAINT commentaire_user_FK FOREIGN KEY (id_user) REFERENCES user(id_user)
	,CONSTRAINT commentaire_article0_FK FOREIGN KEY (id_article) REFERENCES article(id_article)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: commande
#------------------------------------------------------------

CREATE TABLE commande(
        id_commande Int  Auto_increment  NOT NULL ,
        pseudo_disc Varchar (100) NOT NULL ,
        pack        Varchar (50) NOT NULL ,
        pack_bot    Varchar (20) NOT NULL ,
        nom_bot     Varchar (15) NOT NULL ,
        details_bot Text NOT NULL ,
        pack_site   Varchar (20) NOT NULL ,
        nom_site    Varchar (20) NOT NULL ,
        id_user     Int
	,CONSTRAINT commande_PK PRIMARY KEY (id_commande)

	,CONSTRAINT commande_user_FK FOREIGN KEY (id_user) REFERENCES user(id_user)
)ENGINE=InnoDB;

