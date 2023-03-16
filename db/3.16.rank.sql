SELECT *,RANK() over(ORDER BY salary ASC) AS 'unranking'
FROM salaries;
SELECT *, ROW_NUMBER() over(ORDER BY salary ASC) AS 'unranking'
FROM salaries;