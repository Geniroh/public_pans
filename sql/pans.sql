CREATE TABLE users(
    user_id int(7) not null AUTO_INCREMENT PRIMARY KEY,
    first_name varchar(256) not null,
    last_name varchar(256) not null,
    mat_no varchar(256) not null,
    user_phone int(11) not null,
    email varchar(256) not null,
    gender varchar(256) not null,
    mob varchar(256) not null,
    exco varchar(256) not null,
    user_pwd varchar(256) not null
);

CREATE TABLE newsletter(
    id int(7) not null AUTO_INCREMENT PRIMARY KEY,
    email varchar(256) not null
);

CREATE TABLE blog_categories(
  cat_id int(7) NOT NULL,
  cat_title varchar(255) NOT NULL
);

CREATE TABLE comments (
  comment_id int(7) NOT NULL,
  comment_post_id int(7) NOT NULL,
  comment_author varchar(255) NOT NULL,
  comment_email varchar(255) NOT NULL,
  comment_content text NOT NULL,
  comment_status varchar(255) NOT NULL,
  comment_date date NOT NULL
);

CREATE TABLE posts (
  post_id int(7) NOT NULL,
  post_category_id int(7) NOT NULL,
  post_title varchar(255) NOT NULL,
  post_author varchar(255) NOT NULL,
  post_desc varchar(255) NOT NULL,
  post_date date NOT NULL,
  post_image text NOT NULL,
  post_img_caption text NOT NULL,
  post_content text NOT NULL,
  post_tags varchar(255) NOT NULL,
  post_comment_count varchar(255) NOT NULL,
  post_status varchar(255) NOT NULL DEFAULT 'draft',
  post_views_count int(11) NOT NULL
);

CREATE TABLE halloffame (
    hall_id int(7) NOT NULL,
    hall_name varchar(255) NOT NULL,
    hall_img text NOT NULL,
    hall_office varchar(255) NOT NULL,
    hall_description varchar(255) NOT NULL
);

CREATE TABLE events (
  event_id int(7) NOT NULL,
  img_path text NOT NULL,
  link varchar(255) NOT NULL,
  link_name varchar(255) NOT NULL,
  event_description text NOT NULL,
  published_date varchar(255) NOT NULL
);

CREATE TABLE pansIdCards (
  id int(7) NOT NULL,
  first_name varchar(255) NOT NULL,
  last_name varchar(255) NOT NULL,
  middle_name varchar(255) NOT NULL,
  gender varchar(255) NOT NULL,
  dob date NOT NULL,
  img_name TEXT
);


CREATE TABLE passwordReset(
  id int(7) NOT NULL,
  pwdResetEmail varchar(255) NOT NULL,
  pwdResetSelector TEXT NOT NULL,
  pwdResetToken TEXT NOT NULL,
  pwdResetExpires date NOT NULL
);
