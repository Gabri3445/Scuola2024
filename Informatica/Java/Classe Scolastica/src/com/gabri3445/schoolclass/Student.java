package com.gabri3445.schoolclass;

public record Student(String name, String surname, int age) {
    @Override
    public String toString() {
        return "\n" +
                "Student " + name + " " + surname + "\n" +
                "Age: " + age + "\n";
    }
}
