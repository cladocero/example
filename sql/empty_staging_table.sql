USE animal_disease;
GO
CREATE TABLE animal_disease_staging (
    [Animal_Type] NVARCHAR(255),
    [Breed] NVARCHAR(255),
    [Age] NVARCHAR(255),
    [Gender] NVARCHAR(255),
    [Weight] NVARCHAR(255),
    [Symptom_1] NVARCHAR(255),
    [Symptom_2] NVARCHAR(255),
    [Symptom_3] NVARCHAR(255),
    [Symptom_4] NVARCHAR(255),
    [Duration] NVARCHAR(255),
    [Appetite_Loss] NVARCHAR(255),
    [Vomiting] NVARCHAR(255),
    [Diarrhea] NVARCHAR(255),
    [Coughing] NVARCHAR(255),
    [Labored_Breathing] NVARCHAR(255),
    [Lameness] NVARCHAR(255),
    [Skin_Lesions] NVARCHAR(255),
    [Nasal_Discharge] NVARCHAR(255),
    [Eye_Discharge] NVARCHAR(255),
    [Body_Temperature] NVARCHAR(255),
    [Heart_Rate] NVARCHAR(255),
    [Disease_Prediction] NVARCHAR(255)
);