/**
 * @file Q2.cpp
 * @author evan (evan20010126@gmail.com)
 * @brief Minimum Size Subarray Sum
 * @version 0.1
 * @date 2022-10-17
 **/
#include <climits>
#include <iostream>
#include <vector>
using namespace std;

int main() {
    int n;
    int s;
    int min_seq = INT_MAX;
    vector<int> vec;
    vec.clear();

    cin >> n >> s;
    for (int i = 0; i < n; ++i) {
        int temp;
        cin >> temp;
        vec.push_back(temp);
    }

    int i = 0;
    int j = 0;
    int sum = 0;
    int j_is_out = false;
    while (true) {
        // cout << "i: " << i << " j:" << j << " sum:" << sum << " min:" <<
        // min_seq << endl;
        if (i == n - 1 && j == n - 1)
            break;

        if (sum < s) {
            if (j < n) {
                // 還在範圍內 可以加
                sum += vec[j];
                j++;
            } else {
                // sum < s 但不在範圍內了，不能在往後
                j_is_out = true;
                break;
            }
        } else if (sum >= s) {
            if (i < n) {
                if (j_is_out) {
                    min_seq = min((j - i + 1 - 1), min_seq);
                } else {
                    min_seq = min((j - i), min_seq);
                }

                sum -= vec[i];
                i++;
            } else {
                break;
            }
        }
    }

    // for (int i = 0; i < n; ++i) {
    //     int sum = 0;
    //     for (int j = i; j < n; ++j) {
    //         sum += vec[j];
    //         if (sum >= s) {
    //             min_seq = min((j - i + 1), min_seq);
    //             break;
    //         }
    //     }
    //     if (min_seq == 1)
    //         break;
    // }
    if (min_seq == INT_MAX)
        cout << "0" << endl;
    else
        cout << min_seq << endl;
    return 0;
}