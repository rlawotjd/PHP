-- SELECT emp.emp_no
-- 	, demp.dept_no
-- 	, emp.first_name
-- FROM employees AS emp
-- INNER JOIN dept_emp AS demp
-- 	ON emp.emp_no = demp.emp_no;

SELECT dept.dept_no, dept.dept_name,d_m.emp_no
FROM departments AS dept
 left OUTER JOIN dept_manager AS d_m
	ON dept.dept_no = d_m.dept_no;
	
SELECT dept.dept_no, dept.dept_name,d_m.emp_no
FROM departments AS dept
 right OUTER JOIN dept_manager AS d_m
	ON dept.dept_no = d_m.dept_no;
	
-- SELECT dept.dept_no, dept.dept_name,d_m.emp_no
-- FROM departments AS dept
--  full OUTER JOIN dept_manager AS d_m
-- 	ON dept.dept_no = d_m.dept_no;
-- 여긴없음

-- SELECT dept.dept_no, dept.dept_name,d_m.emp_no
-- FROM departments AS dept
--  cross JOIN dept_manager AS d_m;
--  쓰면 뒤짐

SELECT emp2.*
FROM employees emp1
	INNER JOIN employees emp2
		ON emp1.sup_no = emp2.emp_no
WHERE emp2.emp_no =10001;
