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

    /* int edad;
    cout << "Ingrese su edad" << endl;
    cin >> edad;
    if (edad >= 18 && edad <= 40)
    {
        cout << "Si puede votar" << endl ;
    }
    else {
        cout << "No cumple con los parametros de edad requeridos , no puede votar";
    } */

    //--------------------------------------------------
    
    /* int opcion;
    cout << "Ingrese la opcion deseada ";
    cin >> opcion;
    switch (opcion) {
        case 1:
            cout<< "Opcion 1" << endl;
            break;
        case 2:
            cout << "Opcion 2" << endl;
            break;
    
    default:
        cout << "Esto no existe" << endl;
        break;
    } */

    //---------------------------------------------------

    /* int entre;
    cout << "Limite: " << endl;
    cin >> entre; */

    
    int entre[] = {100 , 200 , 300 , 400};
    int limite = sizeof(entre) / sizeof(entre[1]);
    
    for (int i = 0; i < limite; i++){
        cout << entre[i] << endl;
    }
    
    

}
