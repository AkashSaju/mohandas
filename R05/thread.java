import java.util.Scanner;

class MultiplicationTable extends Thread {
    public void run() {
        System.out.println("Multiplication Table of 5:");
        for (int i = 1; i <= 10; i++) {
            System.out.println("5 x " + i + " = " + (5 * i));
        }
    }
}

class PrimeNumbers extends Thread {
    int start, end;

    PrimeNumbers(int start, int end) {
        this.start = start;
        this.end = end;
    }

    public void run() {
        System.out.println("\nPrime Numbers between " + start + " and " + end + ":");
        for (int num = start; num <= end; num++) {
            if (isPrime(num)) {
                System.out.print(num + " ");
            }
        }
        System.out.println(); 
    

    boolean isPrime(int number) {
        if (number <= 1) return false;
        for (int i = 2; i <= Math.sqrt(number); i++) {
            if (number % i == 0) return false;
        }
        return true;
    }
}

public class Mulprimthread {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        System.out.print("Enter starting value of range: ");
        int start = sc.nextInt();

        System.out.print("Enter ending value of range: ");
        int end = sc.nextInt();

        MultiplicationTable mt = new MultiplicationTable();
        PrimeNumbers pn = new PrimeNumbers(start, end);

        mt.start();
        pn.start();  
    }
}


