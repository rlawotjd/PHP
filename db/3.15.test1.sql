SELECT emp_no, first_name
FROM employees
WHERE emp_no IN(
SELECT emp_no
from salaries
WHERE salary =(

	SELECT MIN(salary)
	FROM salaries)
OR salary=(
	SELECT min(salary)
	FROM salaries
	)
AND to_date >= NOW())
;

-- SELECT AVG(salary)
-- FROM salaries;

-- SELECT emp_no,AVG(salary)
-- FROM salaries
-- GROUP BY emp_no
-- HAVING emp_no IN(10499,10975);
