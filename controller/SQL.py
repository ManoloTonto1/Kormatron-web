import mysql.connector
import serial
import datetime
import random

#init serial communication
ser = serial.Serial('COM9', baudrate = 115200, timeout=1)
#declare variables for the string check, these shouold be arrays for production.
substring_warning = "warning"
substring_toilet = "1"


def query1(toilet_var):
    
# run sql query
    mydb = mysql.connector.connect(
        host="localhost",
        user="root",
        password="mypass",
        database="kormatron_"

    )
    mycursor = mydb.cursor()
    date = datetime.datetime.now()
    sql = "INSERT INTO toilet_log (toilet_id, time) VALUES (%s, %s)"
    val = (toilet_var, date)
    mycursor.execute(sql, val)
    mydb.commit()

def query2(toilet_var):
    
# run sql query
    mydb = mysql.connector.connect(
        host="localhost",
        user="root",
        password="mypass",
        database="kormatron_"

    )
    mycursor = mydb.cursor()
    
    sql2 = "UPDATE toilet SET status = %s WHERE id = %s"
    mycursor.execute(sql2, (1,toilet_var))
    mydb.commit()


print(datetime.datetime.now())
#get info from microbit
while 1:
        
        if ser.is_open == False:
                ser.open()

                
        
        #turn into readable variables
        data = ser.readline().decode('ascii')
        print(data)
        ser.close()
   
        if substring_warning in data:
                warning_var = substring_warning
        else:
                warning_var = None
              
        #random number for toilet
        if substring_toilet in data:
                toilet_var = random.randrange(1,5)
        else:
                toilet_var = None

        
        if toilet_var is not None:
        
                #run sql query
                query1(toilet_var)
                query2(toilet_var)
                print(datetime.datetime.now())


         
        


