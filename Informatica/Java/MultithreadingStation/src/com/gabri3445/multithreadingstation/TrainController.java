package com.gabri3445.multithreadingstation;

import java.util.Random;

public class TrainController extends Thread {
    private volatile CrossingState crossingState;

    public TrainController() {
        crossingState = CrossingState.WAITING;
    }

    public CrossingState getCrossingState() {
        return crossingState;
    }

    public void setCrossingState(CrossingState crossingState) {
        this.crossingState = crossingState;
    }

    @Override
    public void run() {
        int waitingNumber;
        TrainCrossing trainCrossing = new TrainCrossing(this);
        trainCrossing.start();
        Random random = new Random();
        while (true) {
            waitingNumber = random.nextInt(5000000);

            if (waitingNumber == 0) {
                crossingState = CrossingState.ARRIVING;
                while (crossingState != CrossingState.WAITING) {
                    try {
                        Thread.sleep(1000);
                    } catch (InterruptedException e) {
                        //ignored
                    }
                }
                try {
                    Thread.sleep(6000);
                } catch (InterruptedException e) {
                    //ignored
                }
            }
        }
    }
}