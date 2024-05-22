/*
練習用
*/
create table pollapp.topics (
	id int(10) not null unsigned comment 'トピックID',
  title varchar(30) not null comment 'トピック本文',
  published int(1) not null comment '公開状態',
  views int(10) not null comment 'PV数',
  likes int(10) not null comment '賛成数',
  dislikes int(10) not null comment '反対数',
  user_id varchar(11) not null comment '作成したユーザーID',
  del_flag int(30) not null comment '削除フラグ(1: 削除、0: 有効)',
  updated_by varchar(20) not null comment '最終更新者',
  updated_at timestamp not null comment '最終更新日時',
);

create table pollapp.comments (
	id int(10) not null unsigned comment 'コメントID',
	topic_id int(10) not null unsigned comment 'トピックID',
	agree int(1) not null comment '賛否(賛成: 1、反対: 0)',
  body varchar(100) comment '本文',
  user_id varchar(10) not null comment '作成したユーザーID',
  del_flag int(1) not null comment '削除フラグ(1: 削除、0: 有効)',
  updated_by varchar(20) not null comment '最終更新者',
  updated_at timestamp not null comment '最終更新日時',
);

create table pollapp.users (
	id int(10) not null comment 'ユーザーID',
  pwd varchar(60) not null comment 'パスワード',
  nickname varchar(10) not null comment '画面表示用名',
  del_flag int(1) not null comment '削除フラグ(1: 削除、0: 有効)',
  updated_by varchar(20) not null comment '最終更新者',
  updated_at timestamp not null comment '最終更新日時',
);

