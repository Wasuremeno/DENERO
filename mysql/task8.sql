SELECT 
    u.id,
    o.name,
    u.email,
    u.password,
    s.status,
    o.last_login,
    o.created
FROM users u
INNER JOIN objects o ON u.object_id = o.id
INNER JOIN status s ON o.status_id = s.id
WHERE s.status = 'Онлайн' 
  AND o.created > '2020-01-01';