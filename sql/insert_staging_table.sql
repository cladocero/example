USE animal_disease;
GO
BULK INSERT animal_disease_staging
FROM '/data/cleaned_animal_disease_prediction.csv'
WITH (
    FIRSTROW = 2,
    FIELDTERMINATOR = ',',
    ROWTERMINATOR = '\n',
    TABLOCK
);
