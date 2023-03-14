EXPLAIN
SELECT emp_no, first_name, last_name, gender
FROM employees
WHERE emp_no in(
	SELECT emp_no
	FROM salaries
	GROUP BY emp_no
	HAVING avg(salary)>=70000
	)
	;
EXPLAIN
SELECT emp_no, first_name, last_name, gender
FROM employees
WHERE emp_no = any(
	SELECT emp_no
	FROM salaries
	GROUP BY emp_no
	HAVING avg(salary)>=70000
	)
	;