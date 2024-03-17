"""
This file is meant to be run to be able to automatically create the required database for the website.

This file should not be kept within a place that is findable by apache web server. This is only for dev purposes.

This file is a python file since it is far easier to run a python file, compared to a php file.
"""

import mysql.connector

# You can add any extra sql files to be run on startup in the list here before running
files = ['setup.sql', 'makeUsers.sql']

# connect to database
mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    password="password"
)
cursor = mydb.cursor()

for file in files:
    # read files and execute commands
    with open(file) as sqlFile:
        # split and remove last, empty query from each file
        sqlCommands = sqlFile.read().rsplit(';')
        sqlCommands = sqlCommands[:-1]

        # iterate through commands and execute them
        for command in sqlCommands:
            print(command)
            cursor.execute(command)

cursor.close()
mydb.commit()
