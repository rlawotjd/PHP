SELECT *
FROM dept_manager
WHERE emp_no in (  
	SELECT emp_no 
	FROM dept_manager
	WHERE dept_no='d009'
	);
	
SELECT *
FROM dept_manager
WHERE emp_no= any (  
	SELECT emp_no 
	FROM dept_manager
	WHERE dept_no='d009'
	);

SELECT *
FROM dept_manager
WHERE dept_no= all(
	SELECT dept_no 
	FROM dept_manager
	WHERE emp_no in(111784,111692)
	);
	