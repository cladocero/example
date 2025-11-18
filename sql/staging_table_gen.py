import pandas as pd

# Ruta del CSV
csv_path = '/home/cladocero/internship/cleaned_animal_disease_prediction.csv'

# Leer solo la primera fila
df = pd.read_csv(csv_path, nrows=0)

# Generar CREATE TABLE dinámico
table_name = 'AnimalDisease_staging'
sql = f"CREATE TABLE {table_name} (\n"
for col in df.columns:
    # TODO: ajustar tipos si quieres heurística
    sql += f"    [{col}] NVARCHAR(255),\n"
sql = sql.rstrip(",\n") + "\n);"

# Guardar en un archivo .sql
with open('sql/create_staging_table.sql', 'w', encoding='utf-8') as f:
    f.write(sql)

print("SQL para tabla staging generado:")
print(sql)
