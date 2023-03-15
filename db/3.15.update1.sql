
UPDATE employees
SET birth_date = DATE(11111111)
	,first_name='unknow'
	,last_name='unknow'
	,gender='m'
WHERE emp_no=500000;

rollback

