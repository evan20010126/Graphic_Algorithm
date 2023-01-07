/**
 * @file Kth_Smallest_Element_in_a_Sorted_Matrix.cpp
 * @author evan (evan20010126@gmail.com)
 * @brief
 * @version 0.1
 * @date 2022-11-13
 *
 **/

#include <algorithm>
#include <iostream>
#include <vector>
using namespace std;

int main() {
    int n;
    cin >> n;
    // vector<vector<int>> vec(n, vector<int>(n, 0);
    int k;
    cin >> k;
    vector<int> vec;
    for (int i = 0; i < n; ++i) {
        for (int j = 0; j < n; ++j) {
            int tmp;
            cin >> tmp;
            vec.push_back(tmp);
        }
    }

    sort(vec.begin(), vec.end());
    cout << vec[k - 1] << endl;

    return 0;
}

// [
//     [ 1, 5, 9 ],
//     [ 10, 11, 13 ],
//     [ 12, 13, 15 ],
// ]