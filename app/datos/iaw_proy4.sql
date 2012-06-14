CREATE TABLE books(
	id INTEGER PRIMARY KEY NOT NULL,
	id_google INTEGER,
	titulo TEXT NOT NULL,
	subtitulo TEXT,
	autores TEXT,
	categoria TEXT,
	resumen TEXT,
	fechapub TEXT,
	editorial TEXT,
	isbn TEXT,
	pags INTEGER,
	idioma TEXT,
	calif_google REAL,
	calif_prom REAL,
	calif_cant INTEGER,
	thumbnail TEXT,
	image TEXT,
	link_google TEXT
);
	
CREATE TABLE tags (
	id INTEGER PRIMARY KEY NOT NULL,
	nombre TEXT NOT NULL
);

CREATE TABLE  books_tags(
	book_id INTEGER NOT NULL,
	tag_id INTEGER NOT NULL
);
/*
CREATE TABLE relateds (
	book_id INTEGER NOT NULL,
	related_id INTEGER NOT NULL
);
*/
CREATE TABLE users (
	id INTEGER PRIMARY KEY  NOT NULL,
	user TEXT,
	pass TEXT
);

INSERT INTO users(user,pass) VALUES('admin','21232f297a57a5a743894a0e4a801fc3');

INSERT INTO books(id,titulo,autores) VALUES(1,'libro1','autor');
INSERT INTO books(id,titulo,autores) VALUES(2,'libro2','autor');



INSERT INTO tags(nombre) VALUES ('tag10');
INSERT INTO tags(nombre) VALUES ('tag11');
INSERT INTO tags(nombre) VALUES ('tag2');

INSERT INTO books_tags VALUES (1,1);
INSERT INTO books_tags VALUES (1,2);
INSERT INTO books_tags VALUES (2,3);
