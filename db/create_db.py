
"""
This file is meant to be run to be able to automatically create the required database for the website.

This file should not be kept within a place that is findable by apache web server. This is only for dev purposes.

This file is a python file since it is far easier to run a python file, compared to a php file.
"""

import mysql.connector
def filter_empty(x):
  if x == '':
    return True
  else:
    return False


# connect to database
mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="password"
)

# read file and execute commands
with open("setup.sql") as sqlFile:
  sqlCommands = sqlFile.read().split(';')
  sqlCommands = filter(filter_empty,sqlCommands)
  cursor = mydb.cursor()

  # iterate through commands and execute them
  for command in sqlCommands:
    cursor.execute(command)
    print(command)

  cursor.close()


