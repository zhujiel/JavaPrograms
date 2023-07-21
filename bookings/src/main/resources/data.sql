INSERT INTO hotels (Name, Default_price, Capacity)
select * from (
	SELECT 'Panorama' n, 150 d, 50 c
	union
	SELECT 'Hilton' n, 250 d, 0 c
	union
	SELECT 'Four Season' n, 300 d, 50 c
	union
	SELECT 'Eden' n, 150 d, 50 c
	union
	SELECT 'Almanac' n, 200 d, 50 c
	union
	SELECT 'xxx' n, 200 d, 50 c
) data where n not in (select Name from hotels);

INSERT INTO users (Name, Username, Password, Role)
select * from (
	SELECT 'Zhu' n, 'myday' u, 'notgood123' p, 'USER' r
	union
	SELECT 'Admin' n, 'admin' u, 'admin123' p, 'ADMIN' r
) data where u not in (select Username from users);

