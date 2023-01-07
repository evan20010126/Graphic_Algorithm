/**
 * @file Q1.cpp
 * @author evan
 * @brief Longest Increasing Subsequence
 */
#include <iostream>
#include <vector>
using namespace std;

int binary_search(vector<int> vec, int key) {
    int l = 0;
    int r = vec.size() - 1;
    while (r - l > 1) {
        int mid = (r + l) / 2;
        if (vec[mid] >= key) {
            r = mid;
        } else {
            l = mid;
        }
    }
    return r;
}

int main() {
    int n;
    cin >> n;
    int round = 0;
    vector<int> vec;
    for (int i = 0; i < n; ++i) {
        int temp;
        cin >> temp;
        if (vec.size() == 0)
            vec.push_back(temp);
        else if (temp > vec[vec.size() - 1])
            vec.push_back(temp);
        else {
            int index = binary_search(vec, temp);
            vec[index] = temp;
        }
        cout << "round " << round++ << "->";
        for (auto item : vec) {
            cout << item << " ";
        }
        cout << endl;
    }
    cout << vec.size() - 1 << endl;
    return 0;
}