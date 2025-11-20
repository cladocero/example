USE animal_disease;
GO

SELECT *
INTO animal_disease_clean
FROM animal_disease_staging;
GO

-- Change data type
ALTER TABLE animal_disease_clean
ALTER COLUMN Animal_Type VARCHAR(100) NOT NULL;

ALTER TABLE animal_disease_clean
ALTER COLUMN Breed VARCHAR(100) NOT NULL;

ALTER TABLE animal_disease_clean
ALTER COLUMN Age INT NOT NULL;

ALTER TABLE animal_disease_clean
ALTER COLUMN Gender VARCHAR(100) NOT NULL;

ALTER TABLE animal_disease_clean
ALTER COLUMN Weight FLOAT NOT NULL;

ALTER TABLE animal_disease_clean
ALTER COLUMN Symptom_1 VARCHAR(100) NOT NULL;

ALTER TABLE animal_disease_clean
ALTER COLUMN Symptom_2 VARCHAR(100) NOT NULL;

ALTER TABLE animal_disease_clean
ALTER COLUMN Symptom_3 VARCHAR(100) NOT NULL;

ALTER TABLE animal_disease_clean
ALTER COLUMN Symptom_4 VARCHAR(100) NOT NULL;

ALTER TABLE animal_disease_clean
ALTER COLUMN Duration VARCHAR(100) NOT NULL;

UPDATE animal_disease_clean
SET Appetite_Loss = CASE WHEN Appetite_Loss = 'Yes' THEN 1 ELSE 0 END,
    Vomiting = CASE WHEN Vomiting = 'Yes' THEN 1 ELSE 0 END,
    Diarrhea = CASE WHEN Diarrhea = 'Yes' THEN 1 ELSE 0 END,
    Coughing = CASE WHEN Coughing = 'Yes' THEN 1 ELSE 0 END,
    Labored_Breathing = CASE WHEN Labored_Breathing = 'Yes' THEN 1 ELSE 0 END,
    Lameness = CASE WHEN Lameness = 'Yes' THEN 1 ELSE 0 END,
    Skin_Lesions = CASE WHEN Skin_Lesions = 'Yes' THEN 1 ELSE 0 END,
    Nasal_Discharge = CASE WHEN Nasal_Discharge = 'Yes' THEN 1 ELSE 0 END,
    Eye_Discharge = CASE WHEN Eye_Discharge = 'Yes' THEN 1 ELSE 0 END;

ALTER TABLE animal_disease_clean
ALTER COLUMN Appetite_Loss INT;

ALTER TABLE animal_disease_clean
ALTER COLUMN Vomiting INT;

ALTER TABLE animal_disease_clean
ALTER COLUMN Diarrhea INT;

ALTER TABLE animal_disease_clean
ALTER COLUMN Coughing INT;

ALTER TABLE animal_disease_clean
ALTER COLUMN Labored_Breathing INT;

ALTER TABLE animal_disease_clean
ALTER COLUMN Lameness INT;

ALTER TABLE animal_disease_clean
ALTER COLUMN Skin_Lesions INT;

ALTER TABLE animal_disease_clean
ALTER COLUMN Nasal_Discharge INT;

ALTER TABLE animal_disease_clean
ALTER COLUMN Eye_Discharge INT;

ALTER TABLE animal_disease_clean
ALTER COLUMN Appetite_Loss BIT NOT NULL;

ALTER TABLE animal_disease_clean
ALTER COLUMN Vomiting BIT NOT NULL;

ALTER TABLE animal_disease_clean
ALTER COLUMN Diarrhea BIT NOT NULL;

ALTER TABLE animal_disease_clean
ALTER COLUMN Coughing BIT NOT NULL;

ALTER TABLE animal_disease_clean
ALTER COLUMN Labored_Breathing BIT NOT NULL;

ALTER TABLE animal_disease_clean
ALTER COLUMN Lameness BIT NOT NULL;

ALTER TABLE animal_disease_clean
ALTER COLUMN Skin_Lesions BIT NOT NULL;

ALTER TABLE animal_disease_clean
ALTER COLUMN Nasal_Discharge BIT NOT NULL;

ALTER TABLE animal_disease_clean
ALTER COLUMN Eye_Discharge BIT NOT NULL;

ALTER TABLE animal_disease_clean
ALTER COLUMN Body_Temperature NVARCHAR(255) NOT NULL;

ALTER TABLE animal_disease_clean
ALTER COLUMN Heart_Rate INT NOT NULL;

ALTER TABLE animal_disease_clean
ALTER COLUMN Disease_Prediction VARCHAR(100) NOT NULL;