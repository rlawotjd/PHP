SELECT * ,NOW()
FROM titles
WHERE emp_no = 10009
AND to_date>= NOW()
;
