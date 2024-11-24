import java.util.*;
public class pro2 {
    public static void main(String[] args) {
        Scanner sc=new Scanner(System.in);
        System.out.println("enter the size:");
        int size=sc.nextInt();
        int arr[]=new int[size];
        System.out.println("enter the array elements:");
        for(int i=0;i<size;i++)
        {
            arr[i]=sc.nextInt();
        }
        int count=0;
        int index=-1;
        for(int i=0;i<size;i++)
        {
            for(int j=i+1;j<size;j++)
            {
                if(arr[i]==arr[j])
                {
                    count=arr[i];
                    index=i;
                    break;
                }
            }
        }
        System.out.println("the duplicate value :"+count+" index find in :"+index);
    }
}
