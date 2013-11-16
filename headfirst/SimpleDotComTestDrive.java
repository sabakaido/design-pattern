public class SimpleDotComTestDrive {
  public static void main (String[] args) {
    SimpleDotCom dot = new SimpleDotCom();

    int [] locations = {2,3,4};
    dot.setLocationCells(locations);

    String userGuess = "2";
    String result = dot.checkYourself(userGuess);
    String testResult = "faidled";

    if (result.equals("hit")) {
      testResult = "passed";
    }

    System.out.println(testResult);

    userGuess = "5";
    result = dot.checkYourself(userGuess);
    testResult = "faidled";

    if (result.equals("miss")) {
      testResult = "passed";
    }

    System.out.println(testResult);
  }
}
