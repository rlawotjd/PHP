-- delimiter $$
-- CREATE TRIGGER test_trigger
-- after UPDATE
-- ON departments
-- FOR EACH ROW
-- 
-- BEGIN
-- 	UPDATE titles
-- 	SET title='trigger test'
-- 	WHERE emp_no= 10001;
-- END $$
-- delimiter ;
-- 
-- UPDATE departments
-- SET dept_name= 'UPDATE test'
-- WHERE dept_no= 'd010';

-- SHOW TRIGGERS;

-- drop TRIGGERS test_trigger;