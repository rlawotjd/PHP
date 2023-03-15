SELECT emp_no
	,case title
		when 'Senior Engineer' then '관리자'
		else '팀원'
	END
	AS 'k_title'
from titles;
INSERT