import mysql.connector

import datetime
import random

# init serial communication

toilet_var = random.randrange(1, 5)
# run sql query
mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    password="mypass",
    database="kormatron_"

)


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

toilet_var = random.randrange(1, 5)
query1(toilet_var)
query2(toilet_var)



print(mydb)
print(datetime.datetime.now())
