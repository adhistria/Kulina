package main
import (
	"fmt"
)

func main()  {
	var num int
	fmt.Print("Input Number : ")
	fmt.Scanf("%d",&num)
	//fmt.Println(num)
	fmt.Println("Bilangan Fibonacei : ",fibonaci(num))
	fibonaci2(num)
}

func fibonaci(a int) int {
	if(a==2){
		return 1
	}else if(a==1){
		return 0
	}else{
		return fibonaci(a-1) + fibonaci(a-2)
	}
}

func fibonaci2(num int){
	//if(a==1) {
	//	fmt.Println(0)
	//}
	fmt.Print("Deret Fibonacci : ")
	a := 0
	b := 1
	for i:=1 ; i<=num;i++{
		if(i==1){
			fmt.Print(a," ")
		}else if(i==2){
			fmt.Print(b," ")
		}else{
			num:=a+b
			fmt.Print(num," ")
			a=b
			b=num
		}
	}

}