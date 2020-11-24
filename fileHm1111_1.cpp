#include <string> 
#include <iostream>
#include <cstring>
#include <fstream>
using namespace std;

int main() {
	string s,sCount,d="LKMLKDML";
	ifstream fin("in.txt");
	ofstream fout("out.txt");
	if (!fin) 
	{
		cout << "файл не открыт\n\n"; 
		return -1;
	} else {
		cout << "все ок\n\n";
		return 1;
	}
	fin >> d;
	
 
}
