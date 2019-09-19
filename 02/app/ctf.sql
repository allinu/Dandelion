create database ctf;
use ctf;

create table answer
(
    id      int          not null,
    content varchar(100) null,
    constraint answer_id_uindex
        unique (id)
);

alter table answer
    add primary key (id);

INSERT INTO ctf.answer (id, content) VALUES (1, 'danderlion{sql_injection_?}');
create table info
(
    id      int          not null,
    message varchar(300) null,
    constraint info_id_uindex
        unique (id)
);

alter table info
    add primary key (id);

INSERT INTO ctf.info (id, message) VALUES (1, 'safdfadjsfhdjfbnjdsabfasdabfladbfdhasfbdslhj is not flag');
INSERT INTO ctf.info (id, message) VALUES (2, 'safdfafasdfdfdsafdsfdsaggergbfasdabfladbfdhasfbdslhj is not flag');
INSERT INTO ctf.info (id, message) VALUES (3, 'safdfafasdfdfdsafdsfdsaggergbfasdabfladbfdsadASDadhasfbdslhj is not flag');
INSERT INTO ctf.info (id, message) VALUES (5, 'safdfasdffafasdfadsffdfdsafdfasdsfdsaggergbfasdabfladbfdsadASDadhasfbdslhj is not flag');
INSERT INTO ctf.info (id, message) VALUES (6, 'safdfasdfdsadfafasdfadfdasfsffdfdsafdfdasfasdffasdsfdsaggergbfasdabfladbfdsadASDadhasfbdslhj is not flag');
create table test
(
    id   int default 0 not null,
    name varchar(20)   null,
    info varchar(200)  null,
    constraint test_id_uindex
        unique (id)
);

alter table test
    add primary key (id);

INSERT INTO ctf.test (id, name, info) VALUES (1, 'liona', 'test');
INSERT INTO ctf.test (id, name, info) VALUES (2, 'zhans', 'info');
INSERT INTO ctf.test (id, name, info) VALUES (3, 'lisi', 'In there ?');
INSERT INTO ctf.test (id, name, info) VALUES (4, 'xiaou', 'No May not');
