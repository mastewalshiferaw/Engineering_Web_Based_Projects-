num1 = float(input())
num2 = float(input())
operation = input()

def perform_operation(operation):
  if operation == 'add':
    return num1+num2
  elif operation == 'substract':
    return num1-num2
  elif operation == 'multiply':
    return num1*num2
  elif operation == 'divide':
    if num2 !=0:
      return num1/num2
    else:
      print("not defined, can't divide by zero") 
  else:
    print("check your operation")