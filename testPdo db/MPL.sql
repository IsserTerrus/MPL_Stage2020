--DATABASE MPL--
CREATE TABLE PHOTO
(
	IDPHOTO BIGINT PRIMARY KEY NOT NULL,
	NOMPHOTO VARCHAR(32),
	MINIATURE VARCHAR(255),
	DESCRIPTION TEXT,
	DATEAJOUT DATETIME,
	BOOLPUBLIC BOOLEAN,
	URI VARCHAR(255),
	URL VARCHAR(255),
	IDPHOTOGRAPHE INT
);
CREATE INDEX IDX_PHOTO_IDPHOTOGRAPHE ON PHOTO (IDPHOTOGRAPHE);

CREATE TABLE ALBUM 
(
	IDALBUM BIGINT PRIMARY KEY NOT NULL,
	NOMALBUM VARCHAR(32),
	DESCRIPTION TEXT,
	URLALBUM VARCHAR(255),
	IDPHOTO INT,
	IDPHOTOGRAPHE INT
);
CREATE INDEX IDX_ALBUM_IDPHOTOGRAPHE ON ALBUM (IDPHOTOGRAPHE);
CREATE INDEX IDX_ALBUM_IDPHOTO ON ALBUM (IDPHOTO);

CREATE TABLE PHOTOGRAPHE
(
	IDPHOTOGRAPHE BIGINT PRIMARY KEY NOT NULL,
	NOMAFFICHE VARCHAR(50),
	LOGO VARCHAR(255),
	DESCRIPTION TEXT,
	ADRESSE VARCHAR(255),
	MAIL VARCHAR(255),
	PASSWORD VARCHAR(255),
	BOOLADMIN BOOLEAN
);

CREATE TABLE RELATIONPHOTOALBUM
(
	IDPHOTO BIGINT,
	IDALBUM BIGINT
);
CREATE INDEX IDX_RELATIONPHOTOALBUM_IDPHOTO ON RELATIONPHOTOALBUM (IDPHOTO);
CREATE INDEX IDX_RELATIONPHOTOALBUM_IDALBUM ON RELATIONPHOTOALBUM (IDALBUM);

CREATE TABLE VISITE
(
	IDVISITE BIGINT PRIMARY KEY NOT NULL,
	DATEVISITE DATETIME,
	IPVISITEUR VARCHAR(100)
);
CREATE INDEX IDX_VISITE_IPVISITEUR ON VISITE (IDVISITE);




