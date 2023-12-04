#include<stdio.h>
#include<stdlib.h>
#include<string.h>

struct node
	{
	  int value;
	  struct node *next;
	};
//	 struct linkedlist;
//	 struct linkedlist *head = NULL;
//	 struct linkedlist *current = NULL;
void printlist(struct node *p)
	{
	//  struct linkedlist *p=head;
	//  printf("\n[");
	  while(p!=NULL)
	  	{
	  	  printf("%d",p->value);
	  	  p=p->next;
	  	}
	}	 
int main()
	{
	 struct node *head;
	 struct node *one = NULL;
	 struct node *two = NULL;
	 struct node *three = NULL;
	 struct node *four = NULL;
	 
	 one = (struct node*)malloc(sizeof(struct node));
	 two = (struct node*)malloc(sizeof(struct node));
	 three =(struct node*)malloc(sizeof(struct node));
	 four = (struct node*)malloc(sizeof(struct node));
	 
	 one->value=1;
	 two->value=2;
	 three->value=3;
	 four->value=4;
	 
	 one->next = two;
	 two->next = three;
	 three->next = four;
	 four->next = NULL;
	 
	 head = one;
	 printlist(head);
	}
	
