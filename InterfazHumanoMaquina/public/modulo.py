import mysql.connector
import random
import time

# Conectarse a la base de datos
mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="horus"
)

# Crear una tabla para almacenar los datos
mycursor = mydb.cursor()

# Simular datos del cansat mientras está en el aire
altitud = 400.0
tiempo = 0
while altitud > 0:
    # Simular lectura de altitud, temperatura y presión
    temperatura = random.uniform(25.0, 30.0)
    presion = random.uniform(1000.0, 1013.0)
    altitud -= random.uniform(0.0, 10.0)

    # Obtener la fecha y hora actual
    fecha_hora = time.strftime('%H:%M:%S')

    # Insertar datos en la tabla
    sql = "INSERT INTO tpa (tiempo, temperatura, altitud, presion) VALUES (%s, %s, %s, %s)"
    val = (fecha_hora, temperatura, altitud, presion)
    mycursor.execute(sql, val)

    # Guardar los cambios
    mydb.commit()

    print("Tiempo:", tiempo, "s / Altitud:", altitud, "m / Temperatura:", temperatura, "C / Presión:", presion, "hPa")

    # Actualizar el tiempo y esperar antes de la próxima iteración
    tiempo += 1
    time.sleep(0.3)

print("El cansat ha aterrizado.")