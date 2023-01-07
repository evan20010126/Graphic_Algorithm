/**
 * @file Q3.cpp
 * @author evan (evan20010126@gmail.com)
 * @brief Snowman
 * @version 0.1
 * @date 2022-10-22
 **/
#include <algorithm>
#include <iostream>
using namespace std;

int main() {
    long long int n_day;

    /*Input*/
    cin >> n_day;
    long long int x[n_day];
    long long int c[n_day];

    for (int i = 0; i < n_day; ++i)
        cin >> x[i];

    long long int previous_tmp = 0;
    for (int i = 0; i < n_day; ++i) {
        cin >> c[i];
        c[i] = c[i] + previous_tmp;
        previous_tmp = c[i];
        // cout << c[i] << " ";
    }
    // cout << endl;

    /*algorithm*/
    for (int i = 0; i < n_day; ++i) {

        long long int target;
        /*why + c[i-1] => 抵銷還沒開始累加融化的值*/
        if (i == 0)
            target = x[i];
        else
            target = x[i] + c[i - 1];

        /*judgment*/
        if (target > c[n_day - 1]) {
            cout << "-1 ";
        } else {
            long long int *it = lower_bound(c + i, c + n_day - 1, target);
            cout << it - c + 1 << " ";
        }
    }
    cout << endl;
    return 0;
}
// 6
// 46
// 115.0