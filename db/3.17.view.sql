-- CREATE OR REPLACE VIEW test_view
-- AS 
-- 	SELECT ti.title
-- 		,COUNT(*) cnt
-- 	FROM employees emp
-- 		INNER JOIN titles ti
-- 			ON emp.emp_no=ti.emp_no
-- 		WHERE emp.gender = 'f'
-- 			AND ti.to_date >=NOW()
-- 		GROUP BY ti.title
-- 	;
-- 	
-- SELECT * FROM test_view
-- WHERE title = 'staff';
-- 
-- DROP view test_view;
