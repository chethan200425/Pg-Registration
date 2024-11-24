package javaprograms;
import java.util.*;
public class ck {
    public static void main(String[] args) {
      int search=12;
      int n;
        Scanner sc=new Scanner(System.in);
      System.out.println("enter the size of array:");
      int size=sc.nextInt();
      int arr[]=new int[size];
      System.out.println("enter the array elements:");
      for(int i=0;i<size;i++)
      {
        arr[i]=sc.nextInt();
      }
      System.out.println("enter the searching element:");
      int target=sc.nextInt();
      boolean found=false;
      int index=-1;

      for(int i=0;i<size;i++)
      {
        if(arr[i]==target)
        {
          found=true;
          index=i;
          break;
        }
      }
      if(found)
      {
        System.out.println("the element found at"+index);
      }
      else{
        System.out.println("the element not found:");
      }




    }

    
} 