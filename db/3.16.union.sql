SELECT * FROM employees
WHERE emp_no = 100001
	OR emp_no= 100005
UNION all
SELECT * FROM employees
WHERE emp_no =100005;

SELECT * FROM employees
WHERE emp_no = 100001
	OR emp_no= 100005
UNION
SELECT * FROM employees
WHERE emp_no =100005;
