#DATABASE NAME = gamedb
#CREATE DATABASE IF NOT EXISTS gamedb;
#USE gamedb;
CREATE TABLE IF NOT EXISTS tbl_usuario (
  id_usuario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(80) NOT NULL,
  email VARCHAR(120) NOT NULL,
  username VARCHAR(30) NOT NULL,
  password VARCHAR(30) NOT NULL,
  data_nascimento DATE NOT NULL,
  PRIMARY KEY(id_usuario)
);
CREATE TABLE IF NOT EXISTS tbl_post (
  id_post INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  fk_id_usuario INTEGER UNSIGNED NOT NULL,
  mensagem TEXT NOT NULL,
  date_post DATE NULL,
  PRIMARY KEY(id_post),
  INDEX tbl_post_FKIndex1(fk_id_usuario)
);


CREATE VIEW view_posts AS
SELECT p.mensagem, p.date_post , u.nome, u.id_usuario, p.id_post
FROM tbl_usuario u
INNER JOIN tbl_post p
ON p.fk_id_usuario = u.id_usuario ORDER BY p.date_post DESC;


INSERT INTO tbl_usuario VALUES (default, 'Emerson Torres','lima.emerson2009@gmail.com','emerson','1303','2000-03-13');
INSERT INTO tbl_usuario VALUES (default, 'Vitoria Alves','vitoriaalvesinubia@gmail.com','vitoria','123','2001-08-01');
INSERT INTO tbl_usuario VALUES (default, 'Adrian Jose','adrianjose002@gmail.com','adrian','321','2001-05-16');
INSERT INTO tbl_usuario VALUES (default, 'Deborah Brito','deborah.barbosa.1994@gmail.com','deborah','456','2001-03-28');
INSERT INTO tbl_usuario VALUES (default, 'Gustavo Gama','gustavogama6060@gmail.com','gustavo','654','2001-01-26');

INSERT INTO tbl_post VALUES(default,1,'Lorem ipsum fames etiam vestibulum a dui arcu ut senectus ornare pharetra congue','2020-05-16');
INSERT INTO tbl_post VALUES(default,1,'Sit fames massa litora erat commodo donec aliquam, augue etiam iaculis dictumst ','2017-03-16');
INSERT INTO tbl_post VALUES(default,2,'Ipsum massa ornare porttitor mauris dictum quisque, justo nisi aliquet purus sed praesent porta','2016-05-07');
INSERT INTO tbl_post VALUES(default,2,'Ullamcorper magna arcu donec cras laoreet mollis luctus urna nam ac','2019-09-25');
INSERT INTO tbl_post VALUES(default,3,'Vel dictumst metus urna ad blandit ornare mi quis sem consectetur','2020-02-15');
INSERT INTO tbl_post VALUES(default,3,'vestibulum augue aptent ut fames lobortis cras pharetra, lacus donec nulla curabitur ut','2015-01-03');
INSERT INTO tbl_post VALUES(default,4,'laoreet porta litora cras ornare semper senectus quisque. maecenas donec fringilla ','2020-05-17');
INSERT INTO tbl_post VALUES(default,4,'sollicitudin, praesent posuere adipiscing himenaeos semper conubia dictumst. nam ','2014-06-18');
INSERT INTO tbl_post VALUES(default,5,'vulputate nec quisque libero dictumst. urna praesent aptent proin malesuada nisi amet','2018-06-16');
INSERT INTO tbl_post VALUES(default,5,'vulputate nec quisque libero dictumst. urna praesent aptent proin malesuada nisi amet','2019-12-12');


