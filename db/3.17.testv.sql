-- CREATE VIEW test_view
-- 	as
-- 		SELECT emp.emp_no
-- 			,CONCAT_WS(' ',LASt_name,first_name)
-- 			,dep.dept_name
-- 		FROM departments dep
-- 			INNER join dept_emp d_e
-- 				ON dep.dept_no= d_e.dept_no
-- 			INNER join employees emp
-- 				ON d_e.emp_no=emp.emp_no
-- ;

-- SELECT *
-- FROM test_view;