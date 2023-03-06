BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS "login" (
	"id"	integer NOT NULL,
	"usuario"	text NOT NULL,
	"password"	text NOT NULL,
	PRIMARY KEY("id" AUTOINCREMENT)
);
INSERT INTO "login" VALUES (1,'Giovanny','123');
INSERT INTO "login" VALUES (2,'mariana','324');
INSERT INTO "login" VALUES (3,'pablo2','jajaja');
INSERT INTO "login" VALUES (4,'lalo','asdad');
COMMIT;
