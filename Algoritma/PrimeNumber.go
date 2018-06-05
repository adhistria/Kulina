package main

import (
	"fmt"
)
func cekPrime(n int) bool{
	count := 0
	for i:=2;i<n;i++{
		if(n%i==0){
			count+=1
		}
	}
	if(count>=1){
		return false
	}else{
		return true
	}

}

func main(){
	var num int
	fmt.Print("Input Number : ")
	fmt.Scanf("%d",&num)
	//count := 0
	for i:=2 ; i<=num;i++{
		if(cekPrime(i)){
			fmt.Println(i)
		}
	}
}