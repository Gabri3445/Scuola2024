package com.gabri3445.schoolclass;

import java.util.Scanner;

public class Main {
    private static final Scanner scanner = new Scanner(System.in);
    private static final Class schoolClass = new Class();

    public static void main(String[] args) {

        boolean exit = false;
        int choice;
        do {
            System.out.println("""
                    [1] Insert a student
                    [2] Print the class info
                    [3] Search for name and surname
                    [4] Exit
                    Enter the corresponding number
                    """);
            choice = scanner.nextInt();
            switch (choice) {
                default -> System.out.println("Enter a valid number from 1 to 4");
                case 1 -> insertStudent();
                case 2 -> System.out.println(schoolClass);
                case 3 -> searchStudent();
                case 4 -> exit = true;
            }
        } while (!exit);
    }

    private static void insertStudent() {
        System.out.println("Enter the student's name");
        String name = scanner.next();
        System.out.println("Enter the student's surname");
        String surname = scanner.next();
        System.out.println("Enter the student's age");
        int age = scanner.nextInt();
        Student student = new Student(name, surname, age);
        schoolClass.addStudent(student);
    }



    private static void searchStudent() {
        System.out.println("Enter the student's name");
        String name = scanner.next();
        System.out.println("Enter the student's surname");
        String surname = scanner.next();
        Student student = schoolClass.searchStudent(name, surname);
        if (student == null) {
            System.out.println("Student does not exist");
        } else {
            System.out.println(student);
        }
    }
}