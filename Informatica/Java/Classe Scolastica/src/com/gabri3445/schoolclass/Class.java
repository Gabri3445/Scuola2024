package com.gabri3445.schoolclass;

import java.util.ArrayList;
import java.util.List;

public class Class {
    @Override
    public String toString() {
        String returnString = "The class has " + students.size() + " students\n";

        for (Student student: students) {
            returnString = returnString.concat(student.toString());
        }

        return returnString;
    }

    private List<Student> students = new ArrayList<>();

    public List<Student> getStudents() {
        return students;
    }

    public void setStudents(List<Student> students) {
        this.students = students;
    }

    public void addStudent(Student student) {
        if (student != null && searchStudent(student.name(), student.surname()) == null) {
            students.add(student);
            return;
        }
        System.out.println("Student is not valid or student already exists with given name and surname");
    }

    public Student searchStudent(String name, String surname) {
        for (Student student : students) {
            if (student.name().equals(name) && student.surname().equals(surname)) {
                return student;
            }
        }
        return null;
    }
}
