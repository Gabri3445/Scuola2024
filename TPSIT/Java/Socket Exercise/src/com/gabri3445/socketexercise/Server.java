package com.gabri3445.socketexercise;

import java.io.OutputStream;
import java.io.PrintWriter;
import java.net.ServerSocket;
import java.net.Socket;

public class Server {
    public static void main(String[] args) {
        try (ServerSocket serverSocket = new ServerSocket(4560)) {
            System.out.println("Waiting");
            while (true) {
                Socket socket = serverSocket.accept();
                OutputStream writer = socket.getOutputStream();
                PrintWriter printWriter = new PrintWriter(writer);
                printWriter.println("Hello World");
                printWriter.close();
                printWriter.flush();
                socket.close();
            }
        } catch (Exception ignored) { }
    }
}
