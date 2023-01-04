# HR-PROJECT-MANAGEMENT
This is a hr project management project which deals with the managing of projects with employees by a manager. Manager will assign the projects to the employees and deletes the projects after completion of the project.

-> This is done using PHP

->Resource Management System
Create a Resource Management System where HR can allocate employees to projects. The HR can view
the employees for a given project and delete the allocation if required.
Below are the tables which are required
Employee Table
Column DataType             Constraint
EmployeeID                  Int ,Primary Key, AUTO_INCREMENT starting with 100
EmployeeName                Varchar(50) –Not null
Experience                  Int - Check Constraint > 0,Not null

Insert two records into Employee table using direct sql query.

Project Table
Column DataType             Constraint
ProjectID                   Int ,Primary Key ,AUTO_INCREMENT
ProjectName                 Varchar(50) –Not null
ClientName                  Varchar(50) -null

Insert two records into Project table using direct sql query.

ProjectAllocation
Column DataType            Constraint
AllocationID               Int ,Primary Key ,AUTO_INCREMENT
Projectid                  Int set as foreign key to corresponding table –not null
EmployeeID                 Int set as foreign key to corresponding table-not null
StartDate                  DateTime –not null
End Date                   DateTime – not null

The HR can log into application, assign employees to a project for a specified duration, view the
employees mapped to a project and delete the allocation.

Complete login for HR using Forms authentication. After login HR should be redirected to a menu page
which will have menu options for Home, Assign Project and ViewAllocation and Logout. The logged in
user id can be shown in all pages.
Both Assign Project and ViewAllocation menu option will navigate to “Select Project” page. Logout
options should clear session and redirect to home page.
Select project Page
Controls are listed as below
Project Drop down- Populated from Project table using ado.net.Value should be project id and Text
should be project name.First option should be select.
Assign Button
View Allocation button
When Assign Button is clicked navigate to “AssignAllocation” page and when View Allocation Button is
clicked redirect to “ViewAllocation” page.Assign Projectid and project name to session when both Assign
button and View Allocation is clicked and then redirect to corresponding pages. Complete mandatory
validation using javascript for Project dropdown.
Assign Allocation Page
Has below controls
Field Remarks
Project –label Name Should be populated using session
EmployeeID – TextBox Mandatory Validation Enter one of the id from Employee Table
Start Allocation Date –Date-Mandatory Validation Should be future date
End Allocation Date – Date –Mandatory Validation Should be future date

On Click of submit button add the details to Project allocation table. The details added should be
employeeid, projectid (from session), start date and end date.
Before adding just check the difference between the start and end allocation date. It should be > 0.
If difference is > 0 then insert into allocation table, else show the error message in a separate label
below all fields.

View Allocation Page
Show the details of employees such as Allocationid,Employeeid,Employeename,StartDate,EndDate in a
table format for the passed project id in session. Complete the deletion for any allocation id in the
gridview.
Hint- Use Joins to display the employee name along with the other required details.
Complete Master Page (header & footer) for all pages. Master Page should have the heading as Resouce
Management system. Complete validations as required. Exceptions (run time errors) should be handled
properly.
The UI should be consistent for all pages.



->Tools:
        VS CODE/ATOM
        XAMPP
        


