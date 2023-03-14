SELECT emp_no ,AVG(salary) AS avg_s -- as 별칭
FROM salaries
-- ORDER BY emp_no DESC,
GROUP BY emp_no 
HAVING avg_s>=30000
and avg_s<=50000;

SELECT CONCAT(last_name,' ', first_name) AS full_namedept_emp
FROM employees;
