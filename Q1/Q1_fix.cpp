#include <algorithm>
#include <iostream>
#include <vector>

using namespace std;

int main() {
    int count;
    cin >> count;
    vector<int> nums;
    vector<int> v;
    nums.clear();
    nums.resize(count, 0);

    for (int i = 0; i < count; i++) {
        int temp;
        cin >> temp;
        nums[i] = temp; /*0~9*/
    }

    for (auto n : nums) {
        vector<int>::iterator it = lower_bound(v.begin(), v.end(), n);
        if (it == v.end())
            v.push_back(n);
        else
            *it = n;

        for (auto k : v) {
            cout << k << " ";
        }
        cout << endl;
    }
    cout << v.size();
    return 0;
}
