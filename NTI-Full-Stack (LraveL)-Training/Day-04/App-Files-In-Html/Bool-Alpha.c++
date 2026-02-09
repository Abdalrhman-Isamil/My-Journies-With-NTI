#include <iostream>
#include <iomanip>
using namespace std;

int main() {
    bool x = true;
    bool y = false;

    cout << x << endl;             
    cout << y << endl;             

    cout << boolalpha;   
    cout << x << endl;             
    cout << y << endl;             
}
