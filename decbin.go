package main

import "fmt"

func convertDecToBin(number int) int {
	binary := 0
	counter := 1
	remainder := 1

	for number != 0 {
		remainder = number % 2
		number = number / 2
		binary += remainder * counter
		counter *= 10
	}
	return binary
}

func main() {
	var decimal int
	fmt.Print("Enter Decimal Number:")
	fmt.Scanln(&decimal)

	fmt.Println("Output ", convertDecToBin(decimal))
}
