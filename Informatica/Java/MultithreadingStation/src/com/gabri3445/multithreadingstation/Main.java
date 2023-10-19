package com.gabri3445.multithreadingstation;

import java.util.Scanner;

public class Main {
    public static void main(String[] args) throws InterruptedException {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Enter q to quit");
        TrainController trainController = new TrainController();


        trainController.start();
        Thread inputThread = new Thread(() -> {
            while (true) {
                String input = scanner.next().toLowerCase();
                if (input.length() == 1 && input.charAt(0) == 'q') {
                    trainController.interrupt();
                    System.exit(0);
                }
            }
        });

        inputThread.start();
    }
}
