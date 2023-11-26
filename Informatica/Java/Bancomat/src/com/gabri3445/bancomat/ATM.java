package com.gabri3445.bancomat;

public class ATM {
    private final Account account;

    public ATM() {
        this.account = new Account(5);
    }

    public synchronized void deposit(float amount) {
        account.balance += amount;
        System.out.println("You've deposited:" + String.format("%.2f", amount) + "\n" + "Now your balance is:" + String.format("%.2f", account.balance));
    }

    public synchronized void withdraw(float amount) {
        if (account.balance >= amount) {
            System.out.println("You've withdrawn:" + String.format("%.2f", amount) + "\n" + "Now your balance is:" + String.format("%.2f", account.balance));
            account.balance -= amount;
        } else {
            System.out.println("Withdraw failed: You tried to withdraw " + String.format("%.2f", amount) + " but only have " + String.format("%.2f", account.balance));
        }
    }
}
