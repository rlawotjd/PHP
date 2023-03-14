SELECT emp_no, last_name
FROM employees
WHERE emp_no =ANY(
	SELECT emp_no
	FROM titles
	WHERE to_date>=NOW()
	and title ='Senior Engineer'
	)
	;