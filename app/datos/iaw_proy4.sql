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

CREATE TABLE books_books (
	id INTEGER PRIMARY KEY NOT NULL,
	book_id INTEGER NOT NULL,
	r_book_id INTEGER NOT NULL
);

CREATE TABLE users (
	id INTEGER PRIMARY KEY  NOT NULL,
	username TEXT,
	password TEXT
);

INSERT INTO users(username,password) VALUES('admin','21232f297a57a5a743894a0e4a801fc3');

INSERT INTO books VALUES(1,3,'El Prisionero del Cielo','Un lindo libro','Carlos Ruiz Zafón','Novela','Barcelona, 1957. Daniel Sempere y su amigo Fermín, los héroes de La Sombra del Viento, regresan de nuevo a la aventura para afrontar el mayor desafío de sus vidas. Justo cuando todo empezaba a sonreírles, un inquietante personaje visita la librería de Sempere y amenaza con desvelar un terrible secreto que lleva enterrado dos décadas en la oscura memoria de la ciudad. 

Al conocer la verdad, Daniel comprenderá que su destino le arrastra inexorablemente a enfrentarse con la mayor de las sombras: la que está creciendo en su interior. Rebosante de intriga y emoción, El Prisionero del Cielo es una novela magistral donde los hilos de La Sombra del Viento y El Juego del Ángel convergen a través del embrujo de la literatura y nos conduce hacia el enigma que se oculta en el corazón del Cementerio de los Libros Olvidados.','2011','Editorial Planeta',' 978-84-08-10582-4',384,'Español',5.0,4.0,2,'http://t3.gstatic.com/images?q=tbn:ANd9GcQd9E9dePjdbZgdOqlJXJAH6cUa3kjjDcy6iyKIkr-p0F9sJxYYtPG9dHRgFw','http://cronicasliterarias.com/wp-content/uploads/2012/02/el-prisionero-del-cielo.jpg','www.google.com');
INSERT INTO books(id,titulo,autores) VALUES(2,'libro2','autor');
INSERT INTO books(id,titulo,autores) VALUES(3,'libro3','autor');

INSERT INTO books_books(book_id,r_book_id) VALUES(1,2);
INSERT INTO books_books(book_id,r_book_id) VALUES(1,3);


INSERT INTO tags(nombre) VALUES ('tag10');
INSERT INTO tags(nombre) VALUES ('tag11');
INSERT INTO tags(nombre) VALUES ('tag2');

INSERT INTO books_tags VALUES(1,1);
INSERT INTO books_tags VALUES(1,2);
INSERT INTO books_tags VALUES(2,3);
INSERT INTO books_tags VALUES(3,2);
