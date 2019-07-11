#include <iostream>
using namespace std;
char sq[10] = {'o','1','2','3','4','5','6','7','8','9'};
int checkwin_situation();
void board();
int main()
{
	int player=1,i,ch;
        char markit;
        do
        {
          board();
          player=(player%2)?1:2;
         cout << "Player "<< player<< "enter a number:";
          cin >> ch;
        markit=(player == 1) ? 'X' : 'O';
       if(ch==1 && sq[1] == '1')
            sq[1] = markit;
        else if(ch== 2 && sq[2] == '2')
            sq[2] = markit;
        else if(ch == 3 && sq[3] == '3')
            sq[3] = markit;
        else if(ch == 4 && sq[4] == '4')
             sq[4] = markit;
        else if(ch == 5 && sq[5] == '5')
            sq[5] = markit;
        else if(ch == 6 && sq[6] == '6')
            sq[6] = markit;
        else if(ch == 7 && sq[7] == '7')
            sq[7] = markit;
        else if(ch == 8 && sq[8] == '8')
            sq[8] = markit;
        else if (ch == 9 && sq[9] == '9')
            sq[9] = markit;
        else
        {
            cout<<"Invalid move ";
             player--;
        }
        i=checkwin_situation();

        player++;
    }while(i==-1);
    board();
    if(i==1)

        cout<<"Player "<<--player<<" YOU WON the match ";
    else
        cout<<" draw match";
    return 0;
}

int checkwin_situation()
{
    if(sq[1] == sq[2] && sq[2] == sq[3])
        return 1;
    else if(sq[4] == sq[5] && sq[5] == sq[6])
        return 1;
    else if(sq[7] == sq[8] && sq[8] == sq[9])
        return 1;
    else if(sq[1] == sq[4] && sq[4] == sq[7])
        return 1;
    else if (sq[2] == sq[5] && sq[5] == sq[8])
        return 1;
    else if(sq[3] == sq[6] && sq[6] == sq[9])
         return 1;
    else if(sq[1] == sq[5] && sq[5] == sq[9])
        return 1;
    else if (sq[3] == sq[5] && sq[5] == sq[7])
        return 1;
    else
        return -1;
}
void board()
{
  
    cout<< "\n\n\tTic Tac Toe\n\n";

    cout<< "Player 1 (X)  -  Player 2 (O)" << endl << endl;
    cout<< endl;
    cout<< "     |     |     " << endl;
    cout<< "  " << sq[1]<< "  |  "<<sq[2]<< "  |  " <<sq[3]<<endl;
    cout<< "_____|_____|_____"<<endl;
    cout<< "     |     |     "<<endl;
    cout<< "  " <<sq[4]<< "  |  "<< sq[5]<< "  |  " <<sq[6]<<endl;
    cout<< "_____|_____|_____"<<endl;
    cout<< "     |     |     "<<endl;
    cout<< "  " << sq[7] << "  |  " <<sq[8] << "  |  " <<sq[9] << endl;
    cout << "     |     |     " << endl << endl;
}



