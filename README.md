# Student_Performance_database
Student Database design and normalizing the database

# Background
This project presents a design for a student performance database that monitors student statistics, well-being, academic progress, extracurricular activities, and more. The database’s goal is to offer insightful information about the elements infuencing a student’s success. Studentinfo, P arentinfo,
StudentHealth, OverallAssessment, and Extracurricular are the fve tables that make up the database design. The database is in Boyce Codd Normal Form, and the tables are neatly organized with stated primary and foreign keys. Sample SQL queries, an ER diagram, and indexing advice are also included
in the document. Overall, the database design appears to be effective, simple to maintain, and will support the identifcation and resolution of the diffcult query problem.

There are two methods for building tables and importing data. Here are the steps for each method:
Method 1:


1.        Run the create.sql file, which contains the script for creating the database and tables, in PgAdmin.
•        Import the CSV files (travel_time.csv, study_time.csv, student_info.csv, student_health.csv, rate.csv, parent_info.csv, overall_assessment.csv, job_role.csv, extra_curricular.csv, education.csv) into their respective tables:
•        Right-click on the table you want to import data into.
•        Select "Import/Export Data."
•        Choose "Import" and provide the path to the CSV file.
Method 2:


1.        Create the database (Student_Performance_DB) by executing the "Database: Student_Performance_DB" query from the create.sql file.
2.        Right-click on the created Student_Performance_DB database.
3.        Select the "Restore" option.
4.        Choose the format as "Custom" or "tar" and provide the location of the Student_Performance_DB.sql file.
Click on "Restore" to import the data.
