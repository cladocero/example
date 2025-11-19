USE animal_disease
GO

SELECT DISTINCT
    Animal_Type,
    Eye_Discharge,
    COUNT(*) OVER (PARTITION BY Animal_Type, Eye_Discharge) AS Animal_Count,
    PERCENTILE_CONT(0.5) WITHIN GROUP (ORDER BY Age)
        OVER (PARTITION BY Animal_Type, Eye_Discharge) AS Median_Age,
    PERCENTILE_CONT(0.5) WITHIN GROUP (ORDER BY Heart_Rate)
        OVER (PARTITION BY Animal_Type, Eye_Discharge) AS Median_Heart_Rate,
    PERCENTILE_CONT(0.5) WITHIN GROUP (ORDER BY Weight)
        OVER (PARTITION BY Animal_Type, Eye_Discharge) AS Median_Weight
INTO AnimalDiseaseStats
FROM AnimalDisease;

ALTER TABLE AnimalDiseaseStats
ALTER COLUMN Animal_Type VARCHAR(100) NOT NULL;

ALTER TABLE AnimalDiseaseStats
ALTER COLUMN Eye_Discharge BIT NOT NULL;

ALTER TABLE AnimalDiseaseStats
ADD CONSTRAINT PK_AnimalDiseaseStats PRIMARY KEY (Animal_Type, Eye_Discharge);
