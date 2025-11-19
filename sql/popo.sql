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


-- USE animal_disease;
-- GO
-- SELECT TOP 10 *
-- FROM AnimalDisease;

-- SELECT COUNT(*)
-- FROM AnimalDisease
-- WHERE Animal_Type = 'Cat';

-- SELECT COLUMN_NAME, DATA_TYPE, CHARACTER_MAXIMUM_LENGTH, IS_NULLABLE
-- FROM INFORMATION_SCHEMA.COLUMNS
-- WHERE TABLE_NAME = 'AnimalDisease'
--   AND COLUMN_NAME IN ('Animal_Type','Nasal_Discharge', 'Diarrhea', 'Age', 'Weight', 'Vomiting');

USE animal_disease
GO
DROP TABLE AnimalDisease_staging;