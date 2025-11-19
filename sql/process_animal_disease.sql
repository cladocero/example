USE animal_disease;
GO

SELECT *
INTO AnimalDisease
FROM AnimalDisease_staging;
GO

-- Add primary key
ALTER TABLE AnimalDisease
ADD [id] INT IDENTITY(1,1) PRIMARY KEY;
GO

-- Change data type
ALTER TABLE AnimalDisease
ALTER COLUMN Age INT;

ALTER TABLE AnimalDisease
ALTER COLUMN Weight FLOAT;

UPDATE AnimalDisease
SET Appetite_Loss = CASE WHEN Appetite_Loss = 'Yes' THEN 1 ELSE 0 END,
    Vomiting = CASE WHEN Vomiting = 'Yes' THEN 1 ELSE 0 END,
    Diarrhea = CASE WHEN Diarrhea = 'Yes' THEN 1 ELSE 0 END,
    Coughing = CASE WHEN Coughing = 'Yes' THEN 1 ELSE 0 END,
    Labored_Breathing = CASE WHEN Labored_Breathing = 'Yes' THEN 1 ELSE 0 END,
    Lameness = CASE WHEN Lameness = 'Yes' THEN 1 ELSE 0 END,
    Skin_Lesions = CASE WHEN Skin_Lesions = 'Yes' THEN 1 ELSE 0 END,
    Nasal_Discharge = CASE WHEN Nasal_Discharge = 'Yes' THEN 1 ELSE 0 END,
    Eye_Discharge = CASE WHEN Eye_Discharge = 'Yes' THEN 1 ELSE 0 END;

ALTER TABLE AnimalDisease
ALTER COLUMN Appetite_Loss INT;

ALTER TABLE AnimalDisease
ALTER COLUMN Vomiting INT;

ALTER TABLE AnimalDisease
ALTER COLUMN Diarrhea INT;

ALTER TABLE AnimalDisease
ALTER COLUMN Coughing INT;

ALTER TABLE AnimalDisease
ALTER COLUMN Labored_Breathing INT;

ALTER TABLE AnimalDisease
ALTER COLUMN Lameness INT;

ALTER TABLE AnimalDisease
ALTER COLUMN Skin_Lesions INT;

ALTER TABLE AnimalDisease
ALTER COLUMN Nasal_Discharge INT;

ALTER TABLE AnimalDisease
ALTER COLUMN Eye_Discharge INT;

ALTER TABLE AnimalDisease
ALTER COLUMN Appetite_Loss BIT;

ALTER TABLE AnimalDisease
ALTER COLUMN Vomiting BIT;

ALTER TABLE AnimalDisease
ALTER COLUMN Diarrhea BIT;

ALTER TABLE AnimalDisease
ALTER COLUMN Coughing BIT;

ALTER TABLE AnimalDisease
ALTER COLUMN Labored_Breathing BIT;

ALTER TABLE AnimalDisease
ALTER COLUMN Lameness BIT;

ALTER TABLE AnimalDisease
ALTER COLUMN Skin_Lesions BIT;

ALTER TABLE AnimalDisease
ALTER COLUMN Nasal_Discharge BIT;

ALTER TABLE AnimalDisease
ALTER COLUMN Eye_Discharge BIT;

ALTER TABLE AnimalDisease
ALTER COLUMN Heart_Rate INT;