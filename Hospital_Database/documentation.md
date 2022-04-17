<h1>Hospital Database Management System</h1>

<h2>Authors;</h2>
<h3>&emsp;Evan Morrison<br>
&emsp;Dante Masciotra<br>
&emsp;Zach Wasylyk</h3>

<hr>

&emsp;&emsp; This project was completed by utilizing an ER diagram, schema, and ultimately implemented as a database. 
We created a python program to automate the creation of the insert statements for the database's tables. 
The ER diagram displays the relationships interpreted and thought necessary from the project question guidelines. 
The schema is an extension of this where the tables of the schema are modeled after the relationships within the ER diagram. 
The database is the final implementation of our ideas and do contain some differences of our original ER diagram and schema.
To demonstrate the relationships within the database, we designed advanced queries that utilize different sql functions such 
as `INNER JOIN` and `UNION`.

<br>

&emsp;&emsp; The ER diagram has the `Hospital` at its center, everything stems from it. 
The `Doctors` and `Nurses` have a **1-to-N** relationship and the `Patients` are admitted to the `Hospital` at a 
**1-to-N** relationship. 
`Attending Doctors` and `Attending Nurses` have an **N-to-M** relationship with the `Patients`, however, `Doctors` also have a 
**1-to-N** relationship with `Patients` in the event that they are the <u>primary doctor</u>. 
`Patients` possess an **N-to-M** relationship with `Diseases` and `Diseases` has an **N-to-1** relationship with `Treatments`.
The `Treatment` is connected to the `Bill` with an **N-to-M** relationship and the `Hospital` receives an `Invoice` which is 
linked to the `Pharmacy` in an associative relationship.


|Words|
--------
|       |
---------
|       |

Tables: 
> Treatment <br>
> &emsp;&emsp;PRIMARY Key(s): id INT<br>
> &emsp;&emsp;UNIQUE Key(s): name VARCHAR(30)<br>
> &emsp;&emsp;FOREIGN Key(s):<br>
> &emsp;&emsp;Key(s): is_drug INT, cost FLOAT

> Disease <br>
> &emsp;&emsp;PRIMARY Key(s): id INT<br>
> &emsp;&emsp;UNIQUE Key(s): name VARCHAR(30)<br>
> &emsp;&emsp;FOREIGN Key(s): treatment_id INT<br>
> &emsp;&emsp;Key(s): 

> Hospital <br>
> &emsp;&emsp;PRIMARY Key(s): id INT<br>
> &emsp;&emsp;UNIQUE Key(s): name VARCHAR(30)<br>
> &emsp;&emsp;FOREIGN Key(s): <br>
> &emsp;&emsp;Key(s): location VARCHAR(50)

> Doctor <br>
> &emsp;&emsp;PRIMARY Key(s): id CHAR(7)<br>
> &emsp;&emsp;UNIQUE Key(s): <br>
> &emsp;&emsp;FOREIGN Key(s): hospital_id INT<br>
> &emsp;&emsp;Key(s): name VARCHAR(30)

> Nurse <br>
> &emsp;&emsp;PRIMARY Key(s): id CHAR(7)<br>
> &emsp;&emsp;UNIQUE Key(s): <br>
> &emsp;&emsp;FOREIGN Key(s): hospital_id INT<br>
> &emsp;&emsp;Key(s): name VARCHAR(30)

> Patient <br>
> &emsp;&emsp;PRIMARY Key(s): id CHAR(15)<br>
> &emsp;&emsp;UNIQUE Key(s): <br>
> &emsp;&emsp;FOREIGN Key(s): disease INT, primary_doctor CHAR(7), hospital_id INT<br>
> &emsp;&emsp;Key(s): name VARCHAR(30), phone_number VARCHAR(10), gender CHAR(1), age INT, height INT

> Pharmacy <br>
> &emsp;&emsp;PRIMARY Key(s): <br>
> &emsp;&emsp;UNIQUE Key(s): <br>
> &emsp;&emsp;FOREIGN Key(s): <br>
> &emsp;&emsp;Key(s): 

> Disease <br>
> &emsp;&emsp;PRIMARY Key(s): <br>
> &emsp;&emsp;UNIQUE Key(s): <br>
> &emsp;&emsp;FOREIGN Key(s): <br>
> &emsp;&emsp;Key(s): 

> Disease <br>
> &emsp;&emsp;PRIMARY Key(s): <br>
> &emsp;&emsp;UNIQUE Key(s): <br>
> &emsp;&emsp;FOREIGN Key(s): <br>
> &emsp;&emsp;Key(s): 

> Disease <br>
> &emsp;&emsp;PRIMARY Key(s): <br>
> &emsp;&emsp;UNIQUE Key(s): <br>
> &emsp;&emsp;FOREIGN Key(s): <br>
> &emsp;&emsp;Key(s):

> Disease <br>
> &emsp;&emsp;PRIMARY Key(s): <br>
> &emsp;&emsp;UNIQUE Key(s): <br>
> &emsp;&emsp;FOREIGN Key(s): <br>
> &emsp;&emsp;Key(s):

> Disease <br>
> &emsp;&emsp;PRIMARY Key(s): <br>
> &emsp;&emsp;UNIQUE Key(s): <br>
> &emsp;&emsp;FOREIGN Key(s): <br>
> &emsp;&emsp;Key(s):