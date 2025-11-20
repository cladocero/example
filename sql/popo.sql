-- USE master;
-- GO
-- ALTER DATABASE animal_disease
-- SET SINGLE_USER WITH ROLLBACK IMMEDIATE;
-- DROP DATABASE animal_disease;

-- USE master;
-- GO
-- DROP TABLE AnimalDisease_staging;

-- USE animal_disease;
-- GO
-- SELECT TOP 10 *
-- FROM dbo.AnimalDisease_staging;

-- USE animal_disease;
-- GO
-- DESCRIBE AnimalDisease_staging;

-- EXEC sp_help 'dbo.AnimalDisease_staging';

-- EXEC sp_help 'dbo.AnimalDisease_staging';


USE animal_disease;
GO
SELECT TOP 10 *
FROM dbo.animal_disease;

-- SELECT COUNT(*)
-- FROM AnimalDisease
-- WHERE Animal_Type = 'Cat';




-- USE animal_disease
-- GO
-- DROP TABLE [dbo].[task];

-- TRUNCATE TABLE animal_disease;
