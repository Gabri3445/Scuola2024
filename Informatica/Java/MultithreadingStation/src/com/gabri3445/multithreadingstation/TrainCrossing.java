package com.gabri3445.multithreadingstation;

public class TrainCrossing extends Thread {
    TrainController trainController;

    public TrainCrossing(TrainController trainController) {
        this.trainController = trainController;
    }

    @Override
    public void run() {
        //wait until the state is set to arriving
        while (true) {
            while (trainController.getCrossingState() != CrossingState.ARRIVING) {
                try {
                    Thread.sleep(1000);
                } catch (InterruptedException e) {
                    throw new RuntimeException(e);
                }
            }
            try {
                //replace with system.out.println
                System.out.println("--------------");
                System.out.println("The barrier is down");
                System.out.println("The lights are red");
                System.out.println("The train is arriving");
                System.out.println("--------------");
                System.out.println();
                Thread.sleep(2000);
                trainController.setCrossingState(CrossingState.CROSSING);
                System.out.println("--------------");
                System.out.println("The barrier is down");
                System.out.println("The lights are red");
                System.out.println("The train is crossing");
                System.out.println("--------------");
                System.out.println();
                Thread.sleep(2000);
                trainController.setCrossingState(CrossingState.WAITING);
                System.out.println("--------------");
                System.out.println("The barrier is up");
                System.out.println("The lights are green");
                System.out.println("The crossing is waiting for a train");
                System.out.println("--------------");
                System.out.println();
            } catch (InterruptedException e) {
                //ignored
            }
        }
    }
}
