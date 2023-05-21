<?php

function getSqlQuery($array)
{

  return;
}



/*
INSERT INTO 
`movies` (`name`, `release_date`, `rating`, `storyline`, `img`, `imdb_link`, `genres`)
VALUES 
('name', '2023-05-23', 4.6, 'storyline', 'img_url', 'imdb_url', '["","","",""]'), 


(
  'name', 
  '2023-05-23', 
  4.6, 
  'storyline', 
  'img_url', 
  'imdb_url', 
  '["",""]'
)

(
  'The Godfather',
  '1972-01-01', 9.2, 
  'Don Vito Corleone, head of a mafia family, decides to hand over his empire to his youngest son Michael. However, his decision unintentionally puts the lives of his loved ones in grave danger.', 
  'upload/thegodfather.jpg', 
  'https://www.imdb.com/title/tt0068646/?ref_=hm_tpks_tt_i_4_pd_tp1_pbr_ic', 
  '["Crime","Drama"]'
),
(
  'The Godfather Part II',
  '1974-01-01', 
  9.0, 
  'The early life and career of Vito Corleone in 1920s New York City is portrayed, while his son, Michael, expands and tightens his grip on the family crime syndicate.', 
  'upload/thegodfather2.jpg', 
  'https://www.imdb.com/title/tt0071562/?ref_=tt_sims_tt_t_1', 
  '["Crime","Drama"]'
),
(
  'Goodfellas', 
  '1990-05-23', 
  8.7, 
  'The story of Henry Hill and his life in the mafia, covering his relationship with his wife Karen and his mob partners Jimmy Conway and Tommy DeVito.', 
  'upload/MV5BY2NkZjEzMDgtN2RjYy00YzM1LWI4ZmQtMjIwYjFjNmI3ZGEwXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_QL75_UX380_CR0,3,380,562_ (1).jpg', 
  'imdb_url', 
  '["Biography","Crime","Drama"]'
),
(
  'Se7en', 
  '1995-05-23', 
  8.6, 
  'Two detectives, a rookie and a veteran, hunt a serial killer who uses the seven deadly sins as his motives.', 
  'upload/MV5BOTUwODM5MTctZjczMi00OTk4LTg3NWUtNmVhMTAzNTNjYjcyXkEyXkFqcGdeQXVyNjU0OTQ0OTY@.jpg', 
  'https://www.imdb.com/title/tt0114369/?ref_=tt_sims_tt_i_1', 
  '["Mystery","Crime","Drama"]'
),
(
  'Fight Club', 
  '1999-05-23', 
  8.8, 
  'An insomniac office worker and a devil-may-care soap maker form an underground fight club that evolves into much more.', 
  'upload/MV5BNDIzNDU0YzEtYzE5Ni00ZjlkLTk5ZjgtNjM3NWE4YzA3Nzk3XkEyXkFqcGdeQXVyMjUzOTY1NTc@.jpg', 
  'https://www.imdb.com/title/tt0137523/?ref_=tt_sims_tt_t_1', 
  '["Drama"]'
),
(
  'Inception', 
  '2010-05-23', 
  8.8, 
  'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O., but his tragic past may doom the project and his team to disaster.', 
  'upload/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@.jpg', 
  'https://www.imdb.com/title/tt1375666/?ref_=tt_sims_tt_i_1', 
  '["Sci-Fi","Adventure", "Action"]'
),
(
  'Se7en', 
  '2023-05-23', 
  4.6, 
  'storyline', 
  'upload/', 
  'imdb_url', 
  '["",""]'
)


INSERT INTO 
`movies` (`name`, `rating`, `release_date`, `storyline`, `img`, `imdb_link`, `genres`)
VALUES 

('Joker',8.4,'2019-11-10','The rise of Arthur Fleck, from aspiring stand-up comedian and pariah to Gotham's clown prince and leader of the revolution.','upload/MV5BNGVjNWI4ZGUtNzE0MS00YTJmLWE0ZDctN2ZiYTk2YmI3NTYyXkEyXkFqcGdeQXVyMTkxNjUyNQ@@.jpg','https://www.imdb.com/title/tt7286456/?ref_=tt_sims_tt_i_8','["Crime","Drama","Thriller"]'),
('Django Unchained',8.4,'2012-11-10','With the help of a German bounty-hunter, a freed slave sets out to rescue his wife from a brutal plantation owner in Mississippi.','upload/MV5BMjIyNTQ5NjQ1OV5BMl5BanBnXkFtZTcwODg1MDU4OA@@.jpg','https://www.imdb.com/title/tt1853728/?ref_=tt_tpks_tt_i_3_pd_detail_2_pbr_ic','["Drama","Western"]'),
('The Wolf of Wall Street',8.2,'2013-11-10','Based on the true story of Jordan Belfort, from his rise to a wealthy stock-broker living the high life to his fall involving crime, corruption and the federal government.','upload/MV5BMjIxMjgxNTk0MF5BMl5BanBnXkFtZTgwNjIyOTg2MDE@.jpg','https://www.imdb.com/title/tt0993846/?ref_=tt_sims_tt_i_2','["Biography","Comedy","Crime"]'),
('Shutter Island',8.2,'2010-11-10','Teddy Daniels and Chuck Aule, two US marshals, are sent to an asylum on a remote island in order to investigate the disappearance of a patient, where Teddy uncovers a shocking truth about the place.','upload/MV5BYzhiNDkyNzktNTZmYS00ZTBkLTk2MDAtM2U0YjU1MzgxZjgzXkEyXkFqcGdeQXVyMTMxODk2OTU@.jpg','https://www.imdb.com/title/tt1130884/?ref_=tt_sims_tt_i_1','["Mystery","Thriller"]'),
('Catch Me If You Can',8.1,'2002-11-10','Barely 21 yet, Frank is a skilled forger who has passed as a doctor, lawyer and pilot. FBI agent Carl becomes obsessed with tracking down the con man, who only revels in the pursuit.','upload/MV5BMTY5MzYzNjc5NV5BMl5BanBnXkFtZTYwNTUyNTc2.jpg','https://www.imdb.com/title/tt0264464/?ref_=tt_sims_tt_i_6','["Biography","Crime","Drama"]'),
('The Truman Show',8.2,'1998-11-10','An insurance salesman discovers his whole life is actually a reality TV show.','upload/MV5BMDIzODcyY2EtMmY2MC00ZWVlLTgwMzAtMjQwOWUyNmJjNTYyXkEyXkFqcGdeQXVyNDk3NzU2MTQ@.jpg','https://www.imdb.com/title/tt0120382/?ref_=tt_sims_tt_i_3','["Comedy","Drama"]'),
('Eternal Sunshine of the Spotless Mind',8.3,'2004-11-10','When their relationship turns sour, a couple undergoes a medical procedure to have each other erased from their memories for ever.','upload/MV5BMTY4NzcwODg3Nl5BMl5BanBnXkFtZTcwNTEwOTMyMw@@.jpg','https://www.imdb.com/title/tt0338013/?ref_=tt_sims_tt_i_3','["Drama","Romance","Sci-Fi"]'),
('Requiem for a Dream',8.3,'2000-11-10','The drug-induced utopias of four Coney Island people are shattered when their addictions run deep.','upload/MV5BOTdiNzJlOWUtNWMwNS00NmFlLWI0YTEtZmI3YjIzZWUyY2Y3XkEyXkFqcGdeQXVyNjU0OTQ0OTY@.jpg','https://www.imdb.com/title/tt0180093/?ref_=tt_sims_tt_i_2','["Drama"]'),
('American Beauty',8.3,'1999-11-10','A sexually frustrated suburban father has a mid-life crisis after becoming infatuated with his daughter's best friend.','upload/MV5BNTBmZWJkNjctNDhiNC00MGE2LWEwOTctZTk5OGVhMWMyNmVhXkEyXkFqcGdeQXVyMTMxODk2OTU@.jpg','https://www.imdb.com/title/tt0169547/?ref_=tt_sims_tt_i_2','["Drama"]'),
('The Usual Suspects',8.5,'1995-11-10','A sole survivor tells of the twisty events leading up to a horrific gun battle on a boat, which began when five criminals met at a random police lineup.','upload/MV5BYTViNjMyNmUtNDFkNC00ZDRlLThmMDUtZDU2YWE4NGI2ZjVmXkEyXkFqcGdeQXVyNjU0OTQ0OTY@.jpg','https://www.imdb.com/title/tt0114814/?ref_=tt_sims_tt_i_5','["Crime","Drama","Mystery"]'),
('The Departed',8.5,'2006-11-10','An undercover cop and a mole in the police attempt to identify each other while infiltrating an Irish gang in South Boston.','upload/MV5BMTI1MTY2OTIxNV5BMl5BanBnXkFtZTYwNjQ4NjY3.jpg','https://www.imdb.com/title/tt0407887/?ref_=tt_sims_tt_i_2','["Crime","Drama","Thriller"]'),
('The Prestige',8.5,'2006-11-10','After a tragic accident, two stage magicians in 1890s London engage in a battle to create the ultimate illusion while sacrificing everything they have to outwit each other.','upload/MV5BMjA4NDI0MTIxNF5BMl5BanBnXkFtZTYwNTM0MzY2.jpg','https://www.imdb.com/title/tt0482571/?ref_=tt_sims_tt_i_1','["Drama","Mystery","Sci-Fi"]'),
('Interstellar',8.7,'2014-11-10','When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet for humans.','upload/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@.jpg','https://www.imdb.com/title/tt0816692/?ref_=tt_sims_tt_i_6','["Adventure","Drama","Sci-Fi"]'),
('The Dark Knight',9.0,'2008-11-10','When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.','upload/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@.jpg','https://www.imdb.com/title/tt0468569/?ref_=tt_sims_tt_i_2','["Action","Crime","Drama"]'),
('The Shawshank Redemption',9.3,'1994-11-10','Over the course of several years, two convicts form a friendship, seeking consolation and, eventually, redemption through basic compassion.','upload/MV5BNDE3ODcxYzMtY2YzZC00NmNlLWJiNDMtZDViZWM2MzIxZDYwXkEyXkFqcGdeQXVyNjAwNDUxODI@.jpg','https://www.imdb.com/title/tt0111161/?ref_=tt_sims_tt_i_4','["Drama"]'),
('Schindler's List',9.0,'1993-11-10','In German-occupied Poland during World War II, industrialist Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazis.','upload/MV5BNDE4OTMxMTctNmRhYy00NWE2LTg3YzItYTk3M2UwOTU5Njg4XkEyXkFqcGdeQXVyNjU0OTQ0OTY@.jpg','https://www.imdb.com/title/tt0108052/?ref_=tt_sims_tt_i_8','["Biography","Drama","History"]'),
('Saving Private Ryan',8.6,'1998-11-10','Following the Normandy Landings, a group of U.S. soldiers go behind enemy lines to retrieve a paratrooper whose brothers have been killed in action.','upload/MV5BZjhkMDM4MWItZTVjOC00ZDRhLThmYTAtM2I5NzBmNmNlMzI1XkEyXkFqcGdeQXVyNDYyMDk5MTU@.jpg','https://www.imdb.com/title/tt0120815/?ref_=tt_sims_tt_i_4','["Drama","War"]'),
('Gladiator',8.5,'2000-11-10','A former Roman General sets out to exact vengeance against the corrupt emperor who murdered his family and sent him into slavery.','upload/MV5BMDliMmNhNDEtODUyOS00MjNlLTgxODEtN2U3NzIxMGVkZTA1L2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@.jpg','https://www.imdb.com/title/tt0172495/?ref_=tt_sims_tt_i_4','["Action","Adventure","Drama"]'),
('The Silence of the Lambs',8.6,'1991-11-10','A young F.B.I. cadet must receive the help of an incarcerated and manipulative cannibal killer to help catch another serial killer, a madman who skins his victims.','upload/MV5BNjNhZTk0ZmEtNjJhMi00YzFlLWE1MmEtYzM1M2ZmMGMwMTU4XkEyXkFqcGdeQXVyNjU0OTQ0OTY@.jpg','https://www.imdb.com/title/tt0102926/?ref_=tt_sims_tt_i_8','["Crime","Drama","Thriller"]'),
('One Flew Over the Cuckoo's Nest',8.7,'1975-11-10','In the Fall of 1963, a Korean War veteran and criminal pleads insanity and is admitted to a mental institution, where he rallies up the scared patients against the tyrannical nurse.','upload/MV5BZjA0OWVhOTAtYWQxNi00YzNhLWI4ZjYtNjFjZTEyYjJlNDVlL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyMTQxNzMzNDI@.jpg','https://www.imdb.com/title/tt0073486/?ref_=tt_sims_tt_i_10','["Drama"]'),
('The Good, the Bad and the Ugly',8.8,'1966-11-10','A bounty hunting scam joins two men in an uneasy alliance against a third in a race to find a fortune in gold buried in a remote cemetery.','upload/MV5BNjJlYmNkZGItM2NhYy00MjlmLTk5NmQtNjg1NmM2ODU4OTMwXkEyXkFqcGdeQXVyMjUzOTY1NTc@.jpg','https://www.imdb.com/title/tt0060196/?ref_=tt_sims_tt_i_4','["Adventure","Western"]'),
('12 Angry Men',9.0,'1957-11-10','The jury in a New York City murder trial is frustrated by a single member whose skeptical caution forces them to more carefully consider the evidence before jumping to a hasty verdict.','upload/MV5BMWU4N2FjNzYtNTVkNC00NzQ0LTg0MjAtYTJlMjFhNGUxZDFmXkEyXkFqcGdeQXVyNjc1NTYyMjg@.jpg','https://www.imdb.com/title/tt0050083/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_12','["Crime","Drama"]'),




('Joker',8.4,'2019-11-10','The rise of Arthur Fleck, from aspiring stand-up comedian and pariah to Gothams clown prince and leader of the revolution.','upload/MV5BNGVjNWI4ZGUtNzE0MS00YTJmLWE0ZDctN2ZiYTk2YmI3NTYyXkEyXkFqcGdeQXVyMTkxNjUyNQ@@.jpg','https://www.imdb.com/title/tt7286456/?ref_=tt_sims_tt_i_8','["Crime","Drama","Thriller"]'),
('Django Unchained',8.4,'2012-11-10','With the help of a German bounty-hunter, a freed slave sets out to rescue his wife from a brutal plantation owner in Mississippi.','upload/MV5BMjIyNTQ5NjQ1OV5BMl5BanBnXkFtZTcwODg1MDU4OA@@.jpg','https://www.imdb.com/title/tt1853728/?ref_=tt_tpks_tt_i_3_pd_detail_2_pbr_ic','["Drama","Western"]'),
('The Wolf of Wall Street',8.2,'2013-11-10','Based on the true story of Jordan Belfort, from his rise to a wealthy stock-broker living the high life to his fall involving crime, corruption and the federal government.','upload/MV5BMjIxMjgxNTk0MF5BMl5BanBnXkFtZTgwNjIyOTg2MDE@.jpg','https://www.imdb.com/title/tt0993846/?ref_=tt_sims_tt_i_2','["Biography","Comedy","Crime"]'),
('Shutter Island',8.2,'2010-11-10','Teddy Daniels and Chuck Aule, two US marshals, are sent to an asylum on a remote island in order to investigate the disappearance of a patient, where Teddy uncovers a shocking truth about the place.','upload/MV5BYzhiNDkyNzktNTZmYS00ZTBkLTk2MDAtM2U0YjU1MzgxZjgzXkEyXkFqcGdeQXVyMTMxODk2OTU@.jpg','https://www.imdb.com/title/tt1130884/?ref_=tt_sims_tt_i_1','["Mystery","Thriller"]'),
('Catch Me If You Can',8.1,'2002-11-10','Barely 21 yet, Frank is a skilled forger who has passed as a doctor, lawyer and pilot. FBI agent Carl becomes obsessed with tracking down the con man, who only revels in the pursuit.','upload/MV5BMTY5MzYzNjc5NV5BMl5BanBnXkFtZTYwNTUyNTc2.jpg','https://www.imdb.com/title/tt0264464/?ref_=tt_sims_tt_i_6','["Biography","Crime","Drama"]'),
('The Truman Show',8.2,'1998-11-10','An insurance salesman discovers his whole life is actually a reality TV show.','upload/MV5BMDIzODcyY2EtMmY2MC00ZWVlLTgwMzAtMjQwOWUyNmJjNTYyXkEyXkFqcGdeQXVyNDk3NzU2MTQ@.jpg','https://www.imdb.com/title/tt0120382/?ref_=tt_sims_tt_i_3','["Comedy","Drama"]'),
('Eternal Sunshine of the Spotless Mind',8.3,'2004-11-10','When their relationship turns sour, a couple undergoes a medical procedure to have each other erased from their memories for ever.','upload/MV5BMTY4NzcwODg3Nl5BMl5BanBnXkFtZTcwNTEwOTMyMw@@.jpg','https://www.imdb.com/title/tt0338013/?ref_=tt_sims_tt_i_3','["Drama","Romance","Sci-Fi"]'),
('Requiem for a Dream',8.3,'2000-11-10','The drug-induced utopias of four Coney Island people are shattered when their addictions run deep.','upload/MV5BOTdiNzJlOWUtNWMwNS00NmFlLWI0YTEtZmI3YjIzZWUyY2Y3XkEyXkFqcGdeQXVyNjU0OTQ0OTY@.jpg','https://www.imdb.com/title/tt0180093/?ref_=tt_sims_tt_i_2','["Drama"]'),
('American Beauty',8.3,'1999-11-10','A sexually frustrated suburban father has a mid-life crisis after becoming infatuated with his daughters best friend.','upload/MV5BNTBmZWJkNjctNDhiNC00MGE2LWEwOTctZTk5OGVhMWMyNmVhXkEyXkFqcGdeQXVyMTMxODk2OTU@.jpg','https://www.imdb.com/title/tt0169547/?ref_=tt_sims_tt_i_2','["Drama"]'),
('The Usual Suspects',8.5,'1995-11-10','A sole survivor tells of the twisty events leading up to a horrific gun battle on a boat, which began when five criminals met at a random police lineup.','upload/MV5BYTViNjMyNmUtNDFkNC00ZDRlLThmMDUtZDU2YWE4NGI2ZjVmXkEyXkFqcGdeQXVyNjU0OTQ0OTY@.jpg','https://www.imdb.com/title/tt0114814/?ref_=tt_sims_tt_i_5','["Crime","Drama","Mystery"]'),
('The Departed',8.5,'2006-11-10','An undercover cop and a mole in the police attempt to identify each other while infiltrating an Irish gang in South Boston.','upload/MV5BMTI1MTY2OTIxNV5BMl5BanBnXkFtZTYwNjQ4NjY3.jpg','https://www.imdb.com/title/tt0407887/?ref_=tt_sims_tt_i_2','["Crime","Drama","Thriller"]'),
('The Prestige',8.5,'2006-11-10','After a tragic accident, two stage magicians in 1890s London engage in a battle to create the ultimate illusion while sacrificing everything they have to outwit each other.','upload/MV5BMjA4NDI0MTIxNF5BMl5BanBnXkFtZTYwNTM0MzY2.jpg','https://www.imdb.com/title/tt0482571/?ref_=tt_sims_tt_i_1','["Drama","Mystery","Sci-Fi"]'),
('Interstellar',8.7,'2014-11-10','When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet for humans.','upload/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@.jpg','https://www.imdb.com/title/tt0816692/?ref_=tt_sims_tt_i_6','["Adventure","Drama","Sci-Fi"]'),
('The Dark Knight',9.0,'2008-11-10','When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.','upload/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@.jpg','https://www.imdb.com/title/tt0468569/?ref_=tt_sims_tt_i_2','["Action","Crime","Drama"]'),
('The Shawshank Redemption',9.3,'1994-11-10','Over the course of several years, two convicts form a friendship, seeking consolation and, eventually, redemption through basic compassion.','upload/MV5BNDE3ODcxYzMtY2YzZC00NmNlLWJiNDMtZDViZWM2MzIxZDYwXkEyXkFqcGdeQXVyNjAwNDUxODI@.jpg','https://www.imdb.com/title/tt0111161/?ref_=tt_sims_tt_i_4','["Drama"]'),
('Schindlers List',9.0,'1993-11-10','In German-occupied Poland during World War II, industrialist Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazis.','upload/MV5BNDE4OTMxMTctNmRhYy00NWE2LTg3YzItYTk3M2UwOTU5Njg4XkEyXkFqcGdeQXVyNjU0OTQ0OTY@.jpg','https://www.imdb.com/title/tt0108052/?ref_=tt_sims_tt_i_8','["Biography","Drama","History"]'),
('Saving Private Ryan',8.6,'1998-11-10','Following the Normandy Landings, a group of U.S. soldiers go behind enemy lines to retrieve a paratrooper whose brothers have been killed in action.','upload/MV5BZjhkMDM4MWItZTVjOC00ZDRhLThmYTAtM2I5NzBmNmNlMzI1XkEyXkFqcGdeQXVyNDYyMDk5MTU@.jpg','https://www.imdb.com/title/tt0120815/?ref_=tt_sims_tt_i_4','["Drama","War"]'),
('Gladiator',8.5,'2000-11-10','A former Roman General sets out to exact vengeance against the corrupt emperor who murdered his family and sent him into slavery.','upload/MV5BMDliMmNhNDEtODUyOS00MjNlLTgxODEtN2U3NzIxMGVkZTA1L2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@.jpg','https://www.imdb.com/title/tt0172495/?ref_=tt_sims_tt_i_4','["Action","Adventure","Drama"]'),
('The Silence of the Lambs',8.6,'1991-11-10','A young F.B.I. cadet must receive the help of an incarcerated and manipulative cannibal killer to help catch another serial killer, a madman who skins his victims.','upload/MV5BNjNhZTk0ZmEtNjJhMi00YzFlLWE1MmEtYzM1M2ZmMGMwMTU4XkEyXkFqcGdeQXVyNjU0OTQ0OTY@.jpg','https://www.imdb.com/title/tt0102926/?ref_=tt_sims_tt_i_8','["Crime","Drama","Thriller"]'),
('One Flew Over the Cuckoos Nest',8.7,'1975-11-10','In the Fall of 1963, a Korean War veteran and criminal pleads insanity and is admitted to a mental institution, where he rallies up the scared patients against the tyrannical nurse.','upload/MV5BZjA0OWVhOTAtYWQxNi00YzNhLWI4ZjYtNjFjZTEyYjJlNDVlL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyMTQxNzMzNDI@.jpg','https://www.imdb.com/title/tt0073486/?ref_=tt_sims_tt_i_10','["Drama"]'),
('The Good, the Bad and the Ugly',8.8,'1966-11-10','A bounty hunting scam joins two men in an uneasy alliance against a third in a race to find a fortune in gold buried in a remote cemetery.','upload/MV5BNjJlYmNkZGItM2NhYy00MjlmLTk5NmQtNjg1NmM2ODU4OTMwXkEyXkFqcGdeQXVyMjUzOTY1NTc@.jpg','https://www.imdb.com/title/tt0060196/?ref_=tt_sims_tt_i_4','["Adventure","Western"]'),
('12 Angry Men',9.0,'1957-11-10','The jury in a New York City murder trial is frustrated by a single member whose skeptical caution forces them to more carefully consider the evidence before jumping to a hasty verdict.','upload/MV5BMWU4N2FjNzYtNTVkNC00NzQ0LTg0MjAtYTJlMjFhNGUxZDFmXkEyXkFqcGdeQXVyNjc1NTYyMjg@.jpg','https://www.imdb.com/title/tt0050083/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_12','["Crime","Drama"]'),




function getSqlFormila() {
    const title = document.querySelector('#__next > main > div > section.ipc-page-background.ipc-page-background--base.sc-f9e7f53-0.ifXVtO > section > div:nth-child(4) > section > section > div.sc-385ac629-3.kRUqXl > div.sc-52d569c6-0.kNzJA-D > h1 > span').innerText
    const rating = document.querySelector('#__next > main > div > section.ipc-page-background.ipc-page-background--base.sc-f9e7f53-0.ifXVtO > section > div:nth-child(4) > section > section > div.sc-385ac629-3.kRUqXl > div.sc-3a4309f8-0.fjtZsE.sc-52d569c6-1.knkDWf > div > div:nth-child(1) > a > span > div > div.sc-bde20123-0.gtEgaf > div.sc-bde20123-2.gYgHoj > span.sc-bde20123-1.iZlgcd').innerText
    const year = document.querySelector('#__next > main > div > section.ipc-page-background.ipc-page-background--base.sc-f9e7f53-0.ifXVtO > section > div:nth-child(4) > section > section > div.sc-385ac629-3.kRUqXl > div.sc-52d569c6-0.kNzJA-D > ul > li:nth-child(1) > a').innerText
    const storyLine = document.querySelector('#__next > main > div > section.ipc-page-background.ipc-page-background--base.sc-f9e7f53-0.ifXVtO > section > div:nth-child(4) > section > section > div.sc-385ac629-4.dDTLMQ > div.sc-385ac629-6.nnaaE > div.sc-385ac629-10.SacCW > section > p > span.sc-2eb29e65-2.jBnwaA').innerText
    const genresDocs = document.querySelectorAll('#__next > main > div > section.ipc-page-background.ipc-page-background--base.sc-f9e7f53-0.ifXVtO > section > div:nth-child(4) > section > section > div.sc-385ac629-4.dDTLMQ > div.sc-385ac629-6.nnaaE > div.sc-385ac629-10.SacCW > section > div.ipc-chip-list--baseAlt.ipc-chip-list > div.ipc-chip-list__scroller > a span')
    const genresArray = [...genresDocs].map(gen => gen.innerText)
    const genres = JSON.stringify(genresArray)
    const imdbUrl = window.location.href
    const string = `('${title}',${rating},'${year}-01-01','${storyLine}','upload/','${imdbUrl}','${genres}'),`
    return string.split(`\n`).join('').trim()
}

function getSqlFormila(imgUrl) {
    const title = document.querySelector('#__next > main > div > section.ipc-page-background.ipc-page-background--base.sc-f9e7f53-0.ifXVtO > section > div:nth-child(4) > section > section > div.sc-385ac629-3.kRUqXl > div.sc-52d569c6-0.kNzJA-D > h1 > span').innerText
    const rating = document.querySelector('#__next > main > div > section.ipc-page-background.ipc-page-background--base.sc-f9e7f53-0.ifXVtO > section > div:nth-child(4) > section > section > div.sc-385ac629-3.kRUqXl > div.sc-3a4309f8-0.fjtZsE.sc-52d569c6-1.knkDWf > div > div:nth-child(1) > a > span > div > div.sc-bde20123-0.gtEgaf > div.sc-bde20123-2.gYgHoj > span.sc-bde20123-1.iZlgcd').innerText
    const year = document.querySelector('#__next > main > div > section.ipc-page-background.ipc-page-background--base.sc-f9e7f53-0.ifXVtO > section > div:nth-child(4) > section > section > div.sc-385ac629-3.kRUqXl > div.sc-52d569c6-0.kNzJA-D > ul > li:nth-child(1) > a').innerText
    const storyLine = document.querySelector('#__next > main > div > section.ipc-page-background.ipc-page-background--base.sc-f9e7f53-0.ifXVtO > section > div:nth-child(4) > section > section > div.sc-385ac629-4.dDTLMQ > div.sc-385ac629-6.nnaaE > div.sc-385ac629-10.SacCW > section > p > span.sc-2eb29e65-2.jBnwaA').innerText
    const genresDocs = document.querySelectorAll('#__next > main > div > section.ipc-page-background.ipc-page-background--base.sc-f9e7f53-0.ifXVtO > section > div:nth-child(4) > section > section > div.sc-385ac629-4.dDTLMQ > div.sc-385ac629-6.nnaaE > div.sc-385ac629-10.SacCW > section > div.ipc-chip-list--baseAlt.ipc-chip-list > div.ipc-chip-list__scroller > a span')
    const genresArray = [...genresDocs].map(gen => gen.innerText)
    const genres = JSON.stringify(genresArray)
    const imdbUrl = window.location.href
    const string = `
('${title}',${rating},'${year}-01-01','${storyLine}','upload/${imgUrl}','${imdbUrl}','${genres}'),
    `
    return string.split(`\n`).join('').trim()
}
*/