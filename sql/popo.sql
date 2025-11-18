-- USE master;
-- GO
-- ALTER DATABASE animal_disease
-- SET SINGLE_USER WITH ROLLBACK IMMEDIATE;
-- DROP DATABASE animal_disease;

-- USE master;
-- GO
-- DROP TABLE AnimalDisease_staging;
USE animal_disease;
GO
SELECT TOP 10 *
FROM dbo.AnimalDisease_staging;