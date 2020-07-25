//Dry Principle
//single responsibility
public class sec {
public static boolean checkdept(String a) {
	if(a.equals("cse")||a.equals("eee")||a.equals("ece")||a.equals("etm")||a.equals("it"))
		return true;
	else 
		return false;
	
}
}