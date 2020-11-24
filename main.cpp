#include <iostream>
#include <string>
#include <cmath>
using namespace std;
 
#define ll long long
int function_type;
int main() {
    cin >> function_type;
    if (function_type == 1) {
        string teacher; // имя учителя
        cin >> teacher; // вводится с сайта
        ll arr[15], sm = 0;
        for (int i = 0; i < 15; i++) {
            cin >> arr[i]; // ответы на на каждый из 15 вопросов, вводится с сайта
            sm += arr[i];
        }
        ll amount_teacher, teacher_score;
        cin >> amount_teacher >> teacher_score; // количество прохождений теста 1 для учителя, его рейтинг, принимается с БД
        amount_teacher *= 15;
        ll teacher_summ = teacher_score * amount_teacher + sm;
        amount_teacher += 15;
        ll final_score = round((double)teacher_summ / amount_teacher); // итоготвый счёт учителя
        cout << final_score;
    }
    else {
        string teacher, comment;
        cin >> teacher; // вводится с сайта
        int result;
        cin >> result; // результат опроса, вводится с сайта
        cin >> comment; // подразумевается, что коммент - одна строка, вводится с сайта
        result *= 5; // ценится в пять раз больше
        ll amount_teacher, teacher_score;
        cin >> amount_teacher >> teacher_score; // количество прохождений теста 1 для учителя, его рейтинг, принимается с БД
        amount_teacher *= 15;
        ll teacher_summ = teacher_score * amount_teacher + result;
        amount_teacher += 1;
        ll final_score = round((double)teacher_summ / amount_teacher); // итоготвый счёт учителя
        cout << final_score;
        
        // обработка коммента
        
        string s;
        for (int i = 0; i < comment.size(); i++) {
            if (s[i] != '/') s.push_back(s[i]);
        }
        
        cout << s; // обработанный коммент
    }
}
