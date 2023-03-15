-- SELECT CAST('1234' AS INT);
-- SELECT CAST('1234' AS CHAR(4));
-- SELECT CONVERT('1234' , CHAR(4));
-- -- 형변화함수
-- SELECT if(to_date>NOW(),'현직','퇴직')
-- FROM salaries;
-- 
SELECT IFNULL('a','aa');
-- 
-- SELECT if(NULL=' ',NULL,'0');
SELECT NULLIF(1,1);

SELECT emp_no, gender, case gender
	when 'm' then '남자'
	when 'f' then '여자'
	ELSE null
	end
FROM employees LIMIT 10;