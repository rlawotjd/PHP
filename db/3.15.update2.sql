UPDATE departments
SET dept_name= 'unknow'
WHERE dept_no = 'd001' OR dept_no = 'd004';
-- 현제 키잠금으로 인해 적용불가능
