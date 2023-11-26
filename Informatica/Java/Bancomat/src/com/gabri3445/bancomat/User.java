package com.gabri3445.bancomat;

import java.util.Random;

public class User extends Thread {
    private final ATM ATM;

    private final int id;

    public User(ATM ATM, int id) {
        this.ATM = ATM;
        this.id = id;
    }

    @Override
    public void run() {
        while (true) {
            try {
                Thread.sleep(new Random().nextInt(1000, 10001));
            } catch (InterruptedException e) {
                throw new RuntimeException(e);
            }
            int operation = new Random().nextInt(2);
            System.out.print("User: " + id + " ");
            if (operation == 0) {
                ATM.deposit(new Random().nextInt(105));
            } else {
                ATM.withdraw(new Random().nextInt(105));
            }
        }
    }
}
