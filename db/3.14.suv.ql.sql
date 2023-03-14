SELECT *
FROM dept_manager
WHERE dept_no=(
	SELECT dept_no 
	FROM dept_manager
	WHERE emp_no=111784
	);