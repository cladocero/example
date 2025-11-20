USE animal_disease
GO

SELECT DISTINCT
    animal_type,
    eye_discharge,
    COUNT(*) OVER (PARTITION BY animal_type, eye_discharge) AS animal_count,
    PERCENTILE_CONT(0.5) WITHIN GROUP (ORDER BY age)
        OVER (PARTITION BY animal_type, eye_discharge) AS median_age,
    PERCENTILE_CONT(0.5) WITHIN GROUP (ORDER BY weight)
        OVER (PARTITION BY animal_type, eye_discharge) AS median_weight,
    PERCENTILE_CONT(0.5) WITHIN GROUP (ORDER BY heart_rate)
        OVER (PARTITION BY animal_type, eye_discharge) AS median_heart_rate
INTO animal_disease_stats_clean
FROM animal_disease;

ALTER TABLE animal_disease_stats_clean
ALTER COLUMN animal_type NVARCHAR(255) NOT NULL;

ALTER TABLE animal_disease_stats_clean
ALTER COLUMN eye_discharge BIT NOT NULL;

ALTER TABLE animal_disease_stats_clean
ADD CONSTRAINT PK_animal_disease_stats_clean PRIMARY KEY (Animal_Type, Eye_Discharge);

ALTER TABLE animal_disease
ADD CONSTRAINT FK_clean2stats
FOREIGN KEY (animal_type, eye_discharge)
REFERENCES animal_disease_stats (animal_type, eye_discharge);
