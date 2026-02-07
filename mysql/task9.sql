SELECT id, name, status_id, last_login 
FROM objects 
WHERE status_id = 0;



UPDATE objects
SET status_id = 1, 
    last_login = '2022-08-25'
WHERE status_id = 0;



SELECT id, name, status_id, last_login 
FROM objects;