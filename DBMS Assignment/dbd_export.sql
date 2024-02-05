-- DDL Generated from https:/databasediagram.com

CREATE TABLE Students (
  StudentID int PRIMARY KEY,
  FirstName varchar(50),
  LastName varchar(50),
  DateOfBirth date,
  ContactNumber varchar(15),
  Email varchar(100)
);

CREATE TABLE Instructors (
  InstructorID int PRIMARY KEY,
  FirstName varchar(50),
  LastName varchar(50),
  ContactNumber varchar(15),
  Email varchar(100)
);

CREATE TABLE Classes (
  ClassID int PRIMARY KEY,
  ClassName varchar(50),
  ClassDescription varchar(255)
);

CREATE TABLE Courses (
  CourseID int PRIMARY KEY,
  CourseName varchar(50),
  InstructorID int REFERENCES Instructors(InstructorID),
  ClassID int REFERENCES Classes(ClassID),
  Credits int,
  Semester varchar(20)
);

CREATE TABLE Enrollments (
  EnrollmentID int PRIMARY KEY,
  StudentID int REFERENCES Students(StudentID),
  CourseID int REFERENCES Courses(CourseID),
  EnrollmentDate date
);

CREATE TABLE Grades (
  GradeID int PRIMARY KEY,
  EnrollmentID int REFERENCES Enrollments(EnrollmentID),
  Grade varchar(2)
);

CREATE TABLE AdministrativeStaff (
  StaffID int PRIMARY KEY,
  FirstName varchar(50),
  LastName varchar(50),
  Position varchar(50),
  ContactNumber varchar(15),
  Email varchar(100)
);
