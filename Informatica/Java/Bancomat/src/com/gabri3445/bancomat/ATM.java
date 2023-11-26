package com.gabri3445.bancomat;

public class ATM {
    private float balance = 104;

    public synchronized void deposit(float amount) {
        balance += amount;
        System.out.println("You've deposited:" + String.format("%.2f", amount) + "\n" +
                "Now your balance is:" + String.format("%.2f", balance));
    }

    public synchronized void withdraw(float amount) {
        if (balance >= amount) {
            balance -= amount;
            System.out.println("You've withdrawn:" + String.format("%.2f", amount) + "\n" +
                    "Now the balance is:" + String.format("%.2f", balance));
        } else {
            System.out.println("You don't have enough balance, withdraw failed:" + String.format("%.2f", amount));
        }
    }
}
