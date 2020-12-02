//An experiment by Bhavya Tyagi(102097014)
#include<stdio.h>
#include<string.h>
void print(char* a)
{
	int i;
	for(i=0;i<15;i++)
	printf("%c",a[i]);
	printf("\n");
}
void main()
{
	char a1[15]="Welcome to SU Login\n";
	int flag=0;
	
	printf("Please Enter Password to continue: ");
	gets(a1);
	if(strcmp(a1,"gradeMeGood"))
	{
		printf("Wrong password\n\n");
	}	
	else{
	printf("Correct Password\n\n");
	flag=1;
	
	}
	if(flag){
		printf("Root priveldges given to user\n");
	}
	
}

