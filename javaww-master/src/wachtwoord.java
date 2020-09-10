import java.util.Scanner;
import java.util.InputMismatchException;

public class wachtwoord {
    public static void main(String[] args) {
        int lengten;
        boolean validInput = false;
        Scanner input = new Scanner(System.in);

        // hier word gecheckt als er eenn getal word in gevuld
        while (!validInput) {
            try {
                System.out.print("hoe veel karakters mag uw wachtword hebben: ");
                lengten = input.nextInt();

                validInput = true;
                //vraagt hoeveel karakters je wachtword wilt hebben
                String resultaat = maakwachtword(lengten);
                System.out.println(resultaat);
            } catch (InputMismatchException e) {
                System.out.println("Gebruik een getal!");
                input.next();
            }





        }

    }

    public  static String maakwachtword(int length){
        String wachtwoord = "";
        // hier word random door alle leters sybolen en nummers gehusselt zo dat er een hussel wacht word komt
        for (int i = 0; i < length - 2; i++){
            wachtwoord = wachtwoord + Randomtekens("abcdefghijknopqrstuvwxyz");

        }
        //hier voeg ik de numers to aan mijn hussel
        String Randomgetalen = Randomtekens("012356789");
        wachtwoord = husselen(wachtwoord, Randomgetalen );
        //hier komen de symbolen voor de hussel er ook nog bij
        String Randomsymbolen = Randomtekens("+-*/?!@#%&");
        wachtwoord = husselen (wachtwoord,Randomsymbolen);
        return wachtwoord;
    }


    public static String Randomtekens(String tekens){
        //hier kijkt hij hoeveel karakters het wachtword nodig heeft
        int n = tekens.length();
        int r = (int) (n * Math.random());
        return tekens.substring(r, r + 1);
    }

    public static String husselen (String str , String hussel){
        //hier husselt hij alle nummers of leters en syolen door elkaar heen
        int n = str.length();
        int r = (int) ((n + 1) * Math.random());
        return str.substring(0, r) + hussel + str.substring(r);
    }

}
