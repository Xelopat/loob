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
		cout << "���� �� ������\n\n"; 
		return -1;
	} else {
		cout << "��� ��\n\n";
		return 1;
	}
	fin >> d;
	
 
}
