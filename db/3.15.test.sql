-- INSERT INTO employees(
-- 	emp_no
-- 	,birth_date
-- 	,first_name
-- 	,last_name
-- 	,gender
-- 	,hire_date
-- 	)
-- VALUES(
-- 	500001
-- 	,DATE(19970311)
-- 	,'jeasaong'
-- 	,'kim'
-- 	,'m'
-- 	,now()
-- 	)
-- ;
-- INSERT INTO salaries(
-- 	emp_no
-- 	,salary
-- 	,from_date
-- 	,to_date
-- 	)
-- VALUES(
-- 	500001
-- 	,60000
-- 	,NOW()
-- 	,DATE(99990909)
-- 	)
-- ;
-- INSERT INTO titles(
-- 	emp_no
-- 	,title
-- 	,from_date
-- 	,to_date
-- 	)
-- VALUES(
-- 	500001
-- 	,'unknown'
-- 	,NOW()
-- 	,DATE(99990909)
-- 	)
-- ;
-- INSERT INTO dept_emp(
-- 	emp_no
-- 	,dept_no
-- 	,from_date
-- 	,to_date
-- 	)
-- VALUES(
-- 	500001
-- 	,'d001'
-- 	,NOW()
-- 	,DATE(99990909)
-- 	)
-- ;
-- DELETE FROM dept_emp
-- WHERE emp_no=500002;

-- UPDATE dept_emp
-- SET dept_no='d009'
-- where emp_no =500001;

-- UPDATE titles
-- SET to_date=NOW()
-- WHERE emp_no=500001;

-- UPDATE departments
-- SET dept_name = 'jeasaong'
-- WHERE dept_no = 'd009';

-- INSERT INTO titles(
-- 	emp_no
-- 	,title
-- 	,from_date
-- 	,to_date
-- 	)
-- VALUES(
-- 	500001
-- 	,'senior engineer'
-- 	,NOW()
-- 	,DATE(99990909)
-- 	)
-- ;
SELECT emp_no, first_name
from employees
WHERE emp_no IN(
	SELECT emp_no
	from salaries
	GROUP BY salary
	HAVING MIN(salary), MAX(salary)
	)
;

