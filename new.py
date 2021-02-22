#!/usr/bin/env python
import mysql.connector
import textblob
import pandas as pd
from textblob import TextBlob, Word, Blobber

mydb = mysql.connector.connect(host="localhost", user="root", passwd="", database="cftdc")

mycursor = mydb.cursor()

mycursor.execute("select comment from comments ")
result = mycursor.fetchall()
#blob = TextBlob(result)
for i in result:
     i = str([cell.encode('utf-8') for cell in i])
     blob = TextBlob(i).sentiment.polarity
     print(i,blob)
     