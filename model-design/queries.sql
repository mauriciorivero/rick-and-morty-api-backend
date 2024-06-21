-- inserts carachters
INSERT INTO RM_CHARACTER VALUES (null, 'Rick Sanchez', 'Alive', 'Human','Male', 'https://rickandmortyapi.com/api/character/avatar/1.jpeg', '', '2024-06-20', 1);
INSERT INTO RM_CHARACTER VALUES (null, 'Morty Smith', 'Alive', 'Human','Male', 'https://rickandmortyapi.com/api/character/avatar/2.jpeg', '', '2024-06-20', 1);
INSERT INTO RM_CHARACTER VALUES (null, 'Summer Smith', 'Alive', 'Human','Female', 'https://rickandmortyapi.com/api/character/avatar/3.jpeg', '', '2024-06-20', 1);
INSERT INTO RM_CHARACTER VALUES (null, 'Beth Smith', 'Alive', 'Human','Female', 'https://rickandmortyapi.com/api/character/avatar/4.jpeg', '', '2024-06-20', 1);
INSERT INTO RM_CHARACTER VALUES (null, 'Jerry Smith', 'Alive', 'Human','Male', 'https://rickandmortyapi.com/api/character/avatar/5.jpeg', '', '2024-06-20', 1);
INSERT INTO RM_CHARACTER VALUES (null, 'Abadango Cluster Princess', 'Alive', 'Alien','Female', 'https://rickandmortyapi.com/api/character/avatar/6.jpeg', '', '2024-06-20', 1);
INSERT INTO RM_CHARACTER VALUES (null, 'Abradolf Lincler', 'Unknown', 'Human','Male', 'https://rickandmortyapi.com/api/character/avatar/7.jpeg', '', '2024-06-20', 1);
INSERT INTO RM_CHARACTER VALUES (null, 'Adjudicator Rick', 'Dead', 'Human','Male', 'https://rickandmortyapi.com/api/character/avatar/8.jpeg', '', '2024-06-20', 1);
INSERT INTO RM_CHARACTER VALUES (null, 'Agency Director', 'Dead', 'Human','Male', 'https://rickandmortyapi.com/api/character/avatar/9.jpeg', '', '2024-06-20', 1);
INSERT INTO RM_CHARACTER VALUES (null, 'Alan Rails', 'Dead', 'Human','Male', 'https://rickandmortyapi.com/api/character/avatar/10.jpeg', '', '2024-06-20', 1);

-- Inserts episodes
INSERT INTO EPISODE VALUES (null, 'Pilot', 'Dec 2 2013', 'S01E01', '', '2024-06-20', 1); 
INSERT INTO EPISODE VALUES (null, 'Lawnmower Dog', 'Dec 9 2013', 'S01E02', '', '2024-06-20', 1); 
INSERT INTO EPISODE VALUES (null, 'Anatomy Park', 'Dec 16 2013', 'S01E03', '', '2024-06-20', 1); 
INSERT INTO EPISODE VALUES (null, 'M. Night Shaym-Aliens!', 'Jan 13 2014', 'S01E04', '', '2024-06-20', 1); 
INSERT INTO EPISODE VALUES (null, 'Meeseeks and Destroy', 'Jan 20 2014', 'S01E05', '', '2024-06-20', 1); 
INSERT INTO EPISODE VALUES (null, 'Rick Potion #9', 'Jan 27 2014', 'S01E06', '', '2024-06-20', 1); 
INSERT INTO EPISODE VALUES (null, 'Raising Gazorpazorp', 'Mar 10 2014', 'S01E07', '', '2024-06-20', 1); 
INSERT INTO EPISODE VALUES (null, 'Rixty Minutes', 'Mar 17 2014', 'S01E08', '', '2024-06-20', 1); 
INSERT INTO EPISODE VALUES (null, 'Something Ricked This Way Comes', 'Mar 24 2014', 'S01E09', '', '2024-06-20', 1); 
INSERT INTO EPISODE VALUES (null, 'Close Rick-counters of the Rick Kind', 'Apr 7 2014', 'S01E10', '', '2024-06-20', 1); 

-- insert characters in relation with episodes
INSERT INTO EPISODE_CHARACTER_RELATION VALUES (1, 1);
INSERT INTO EPISODE_CHARACTER_RELATION VALUES (1, 2);
INSERT INTO EPISODE_CHARACTER_RELATION VALUES (1, 4);
INSERT INTO EPISODE_CHARACTER_RELATION VALUES (2, 1);
INSERT INTO EPISODE_CHARACTER_RELATION VALUES (2, 2);
INSERT INTO EPISODE_CHARACTER_RELATION VALUES (2, 4);
INSERT INTO EPISODE_CHARACTER_RELATION VALUES (3, 1);
INSERT INTO EPISODE_CHARACTER_RELATION VALUES (3, 2);
INSERT INTO EPISODE_CHARACTER_RELATION VALUES (4, 1);
INSERT INTO EPISODE_CHARACTER_RELATION VALUES (4, 2);
INSERT INTO EPISODE_CHARACTER_RELATION VALUES (4, 4);

-- Insert Users
INSERT INTO USER VALUES (null, 'Mauricio', 'Rivero', 'mauriciorivero', 'e50dc11c913d1073e1712e3d87470e56');

-- insert Activities
INSERT INTO ACTIVITY VALUES (null, 'mauriciorivero', 'create', 'character', '2024-06-20');
INSERT INTO ACTIVITY VALUES (null, 'mauriciorivero', 'create', 'episode', '2024-06-20');
INSERT INTO ACTIVITY VALUES (null, 'mauriciorivero', 'update', 'character', '2024-06-20');
INSERT INTO ACTIVITY VALUES (null, 'mauriciorivero', 'update', 'episode', '2024-06-20');

-- insert LOGS Activities
INSERT INTO LOG_ACTIVITY VALUES (1, 1);
INSERT INTO LOG_ACTIVITY VALUES (1, 2);
INSERT INTO LOG_ACTIVITY VALUES (1, 3);

-- updates of characters
UPDATE RM_CHARACTER
SET name='', status='', species = '', gender = '', image = '', url = '', isActive = 1
WHERE id = 1;

-- updates of episodes
UPDATE EPISODE
SET name='', air_date='', episode = '', url = '', isActive = 1
WHERE id = 1;

-- update of relation between characters and episode
UPDATE EPISODE_CHARACTER_RELATION
SET EPISODE_id = 2
where RM_CHARACTER_id = 1
and EPISODE_id = 1

UPDATE EPISODE_CHARACTER_RELATION
SET RM_CHARACTER = 1
where EPISODE_id = 1
and RM_CHARACTER_id = 2

-- remove episode relation from character
DELETE FROM EPISODE_CHARACTER_RELATION 
WHERE EPISODE_id=1;
and RM_CHARACTER_id =2

-- remove character relation from episode
DELETE FROM EPISODE_CHARACTER_RELATION 
WHERE RM_CHARACTER_id=1;
WHERE EPISODE_id=1;

-- remove episode
DELETE FROM EPISODE
WHERE id=1;

-- remove character
DELETE FROM RM_CHARACTER
WHERE id=1;

-- get all characters
select * from RM_CHARACTER;

-- get all episodes
select * EPISODE;

-- get all characters of any given episode, 1 for example
SELECT ch.id, ch.name, ch.status, ch.species, ch.gender, ch.image
FROM RM_CHARACTER as ch,  EPISODE as ep, EPISODE_CHARACTER_RELATION as rel
WHERE ch.id = rel.RM_CHARACTER_id
AND ep.id = rel.EPISODE_id
AND ep.id = 1

-- get all episodes of any given charcter, 1 for example
SELECT ep.id, ep.name, ep.air_date, ep.episode
FROM RM_CHARACTER as ch,  EPISODE as ep, EPISODE_CHARACTER_RELATION as rel
WHERE ep.id = rel.EPISODE_id
AND ch.id = rel.RM_CHARACTER_id
AND ch.id = 1


