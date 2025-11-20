USE animal_disease;
GO

INSERT INTO animal_disease (animal_type, breed, age, gender, weight, 
                            symptom1, symptom2, symptom3, symptom4, duration, 
                            appetite_loss, vomiting, diarrhea, coughing, labored_breathing, 
                            lameness, skin_lesions, nasal_discharge, eye_discharge, 
                            body_temperature, heart_rate, disease)
SELECT Animal_Type, Breed, Age, Gender, Weight, 
       Symptom_1, Symptom_2, Symptom_3, Symptom_4, Duration, 
       Appetite_Loss, Vomiting, Diarrhea, Coughing, Labored_Breathing, 
       Lameness, Skin_Lesions, Nasal_Discharge, Eye_Discharge, 
       Body_Temperature, Heart_Rate, Disease_Prediction
FROM animal_disease_clean;