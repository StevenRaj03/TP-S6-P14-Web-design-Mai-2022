CREATE  TABLE "public"."categorie" (
	id                   serial  NOT NULL  ,
	nom              	 varchar(50)  NOT NULL  ,
	CONSTRAINT pk_categorie PRIMARY KEY ( id )
 );

CREATE  TABLE "public".contenu (
	id                   serial  NOT NULL  ,
	titre                varchar(50)  NOT NULL  ,
	visuel               text    ,
	body                 text    ,
	"date"               timestamp  NOT NULL  ,
	lieu                 varchar(50)    ,
	idprofil 	         integer not null,
	idcategorie 	     integer not null,
	CONSTRAINT pk_contenu PRIMARY KEY ( id )
 );

CREATE  TABLE "public"."profil" (
	id                   serial  NOT NULL  ,
	idtype_profil		 integer not null,
	nom                  varchar(30)  NOT NULL  ,
	email                varchar(50)  NOT NULL  ,
	"password"           varchar(255)  NOT NULL  ,
	CONSTRAINT pk_profil PRIMARY KEY ( id )
 );

CREATE  TABLE "public"."type_profil" (
	id                   serial  NOT NULL  ,
	nom              	 varchar(50)  NOT NULL  ,
	CONSTRAINT pk_type_profil PRIMARY KEY ( id )
 );

ALTER TABLE profil ADD FOREIGN KEY (idtype_profil) REFERENCES type_profil (id);
ALTER TABLE contenu ADD FOREIGN KEY (idprofil) REFERENCES profil (id);
ALTER TABLE contenu ADD FOREIGN KEY (idcategorie) REFERENCES categorie (id);
