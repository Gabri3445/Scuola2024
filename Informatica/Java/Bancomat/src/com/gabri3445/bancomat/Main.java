package com.gabri3445.bancomat;

import java.util.ArrayList;
import java.util.List;

public class Main {
    public static void main(String[] args) {
        ATM ATM = new ATM();
        List<User> users = new ArrayList<>();

        for (int i = 0; i < 6; i++) {
            users.add(new User(ATM, i));
            users.get(i).start();
        }
    }
}
