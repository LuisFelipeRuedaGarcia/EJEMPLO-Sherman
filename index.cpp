#include <iostream>

using namespace std;

int main() {
    
    //------------------------------------------------

    /* int edad = 20;
    edad = 17;
    char letra = 'a';
    const int edades[] = {18 , 30 , 21 , 34};
    cout << edad << endl;
    cout << letra << endl;
    cout << edades[1] << endl; */

    //------------------------------------------------
    
    /* const int number1 = 3;
    const int number2 = 5;
    int numero = number1 + number2;
    if (numero == 8)
    {
        cout << sizeof(numero) << endl ;  
    } 
    else
    {
        cout << 2 << endl;
    } */
    
    //-----------------------------------------------

    /* int lista[] = {29 , 32};
    cout << sizeof(lista) / sizeof(lista[0]) << endl; */

    //------------------------------------------------

    /* int edad;
    cout << "Edad: " << endl;
    cin >> edad;
    cout << "Tu edad es " << edad <<endl;  */

    //-------------------------------------------------

    int edad;
    cout << "Ingrese su edad" << endl;
    cin >> edad;
    if (edad >= 18 && edad <= 40)
    {
        cout << "Si puede votar" << endl ;
    }
    else {
        cout << "No cumple con los parametros de edad requeridos , no puede votar";
    }
    

}
