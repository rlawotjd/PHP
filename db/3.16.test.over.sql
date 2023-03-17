SELECT emp.gender
	,COUNT(emp.gender)
FROM employees AS emp
	INNER JOIN (
		SELECT emp_no
		FROM titles
		GROUP BY emp_no
		HAVING MAX(to_date) != DATE(99990101)
		) AS tit
	ON tit.emp_no=emp.emp_no
	GROUP BY emp.gender;
	