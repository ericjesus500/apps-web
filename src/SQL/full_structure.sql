CREATE DATABASE codigos CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci ;
USE codigos;

CREATE TABLE tecnologia(
tecno_id int not null auto_increment,
tecno_nombre varchar(255) not null,
tecno_file varchar(150),
primary key(tecno_id)
)Engine=InnoDB;

CREATE TABLE autor(
autor_id int not null auto_increment,
autor_nombre varchar(200) not null,
autor_canal varchar(100) null,
autor_url varchar(200) null,
autor_web varchar(200) null,
autor_twitter varchar(100) null,
autor_facebook varchar(100) null,
autor_twitch varchar(100) null,
autor_discord varchar(100) null,
autor_file varchar(150) null,
primary key(autor_id)
)Engine=InnoDB;

CREATE TABLE tipo_video(
tipo_video_id int not null auto_increment,
tipo_video_nombre varchar(200) not null,
primary key(tipo_video_id)
)Engine=InnoDB;

CREATE TABLE videos(
video_id int not null auto_increment,
video_titulo varchar(200) not null,
video_url varchar(255) not null,
video_autor_id int(10),
video_tecno_id int(10),
video_tipo_id int(10),
video_estado_id int(10),
primary key(video_id)
)Engine=InnoDB;

CREATE TABLE estado_video(
estado_id int not null auto_increment,
estado_nombre varchar(100) not null,
primary key(estado_id)
)Engine=InnoDB;

CREATE TABLE guia(
guia_id int not null auto_increment,
guia_titulo varchar(200) not null,
guia_autor int null,
guia_categoria int null,
guia_href varchar(200) null,
primary key(guia_id)
)engine=InnoDB;

/*Agregar columna: guia_href_local (varchar 200)*/
USE codigos;
alter table guia ADD guia_href_local VARCHAR(200);

/*Agregar indices secundarios*/
alter table videos add index(video_autor_id);
alter table videos add index(video_tecno_id);
alter table videos add index(video_tipo_id);
alter table videos add index(video_estado_id);
alter table guia add index(guia_autor);
alter table guia add index(guia_categoria);

/*Establecer relacion con llaves foraneas*/
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`video_autor_id`) REFERENCES `autor` (`autor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `videos_ibfk_2` FOREIGN KEY (`video_tecno_id`) REFERENCES `tecnologia` (`tecno_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `videos_ibfk_3` FOREIGN KEY (`video_tipo_id`) REFERENCES `tipo_video` (`tipo_video_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `videos_ibfk_4` FOREIGN KEY (`video_estado_id`) REFERENCES `estado_video` (`estado_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

ALTER TABLE `guia`
	ADD CONSTRAINT `guia_ibfk_1` FOREIGN KEY (`guia_autor`) REFERENCES `autor` (`autor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
	ADD CONSTRAINT `guia_ibfk_2` FOREIGN KEY (`guia_categoria`) REFERENCES `tecnologia` (`tecno_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

ALTER TABLE `videos`
	ADD CONSTRAINT `videos_ibfk_2` FOREIGN KEY (`video_tecno_id`) REFERENCES `tecnologia` (`tecno_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;