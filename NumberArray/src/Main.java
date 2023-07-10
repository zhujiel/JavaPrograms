import java.util.*;

public class Main {
    public static void main(String[] args) {
        createArray();

    }
    static void createArray() {
        Scanner sc = new Scanner(System.in);
        System.out.print("Type a number: ");
        String n = sc.nextLine();
        int size = 0;

        for(char c : n.toCharArray()) {
            if (!Character.isDigit(c)) {
                System.out.println("Invalid number!");
                break;
            } else {
                size = Integer.parseInt(n);
                int[] pole = new int[size];
                putRandomNumberIntoArray(pole, size);

                System.out.print("Original number array: ");
                for(int i : pole){
                    System.out.print(i + " ");
                }

                System.out.println(" ");
                System.out.print("Sorted number array: ");
                int[] sortArray = bubbleSort(pole);

                for (int i: sortArray) {
                    System.out.print(i + " ");
                }
            }
        }
    }

    static int[] putRandomNumberIntoArray(int[] array, int n) {
        for(int i = 0; i < n; ++i) {
            array[i] = createRandomNumber();
        }
        return array;
    }

    static int createRandomNumber() {
        Random random = new Random();
        return random.nextInt(Integer.MAX_VALUE) + 1;
    }

    static int[] bubbleSort(int[] array) {
        for(int i = 0; i < array.length - 1; ++i) {
            for(int j = 0; j < array.length - i - 1; ++j) {
                if (array[j] > array[j + 1]) {
                    int temp = array[j];
                    array[j] = array[j + 1];
                    array[j + 1] = temp;
                }
            }
        }
        return array;
    }
}