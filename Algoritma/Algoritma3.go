package main

import (
	"fmt"
	"bufio"
	"os"
	"strings"
)

func main(){
	reader := bufio.NewReader(os.Stdin)
	fmt.Print("Input Number: ")
	text, _ := reader.ReadString('\n')
	text = strings.TrimSuffix(text, "\n")
	num := strings.Replace(text,".","",-1)
	lenNum := len(num)
	for i:=0;i<lenNum;i++{
		fmt.Print(string(num[i]))
		for j:=i+1;j<lenNum;j++{
			fmt.Print("0")
		}
		fmt.Println()
	}

}
