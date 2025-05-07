import java.io.*;

public class Random {

    public static void main(String[] args) {

        try {

            

            RandomAccessFile numbersFile = new RandomAccessFile("numbers.txt", "rw");

            for (int i = 1; i <= 20; i++) {

                numbersFile.writeBytes(i + "\n");

            }

            numbersFile.close();

            

            RandomAccessFile readFile = new RandomAccessFile("numbers.txt", "r");

            RandomAccessFile evenFile = new RandomAccessFile("even.txt", "rw");

            RandomAccessFile oddFile = new RandomAccessFile("odd.txt", "rw");

            String line;

            while ((line = readFile.readLine()) != null) {

                int num = Integer.parseInt(line.trim());

                if (num % 2 == 0) {

                    evenFile.writeBytes(num + "\n");

                } else {

                    oddFile.writeBytes(num + "\n");

                }

            }

            readFile.close();

            evenFile.close();

            oddFile.close();


            System.out.println("Contents of numbers.txt:");

            displayFile("numbers.txt");

            System.out.println("\nContents of even.txt:");

            displayFile("even.txt");

            System.out.println("\nContents of odd.txt:");

            displayFile("odd.txt");

        } catch (IOException e) {

            System.out.println("Error: " + e.getMessage());

        }

    }



    public static void displayFile(String filename) throws IOException {

        RandomAccessFile file = new RandomAccessFile(filename, "r");

        String line;

        while ((line = file.readLine()) != null) {

            System.out.println(line);

        }

        file.close();

    }

}

