#include <algorithm>
#include <iostream>
#include <queue>
#include <vector>
using namespace std;

// void find_k_largest(priority_queue<int> qu, int k) {
//     if (qu.size() < k || k < 1) {
//         cout << "BAONU" << endl;
//     } else {
//         priority_queue<int> tmp_qu{qu};
//         for (int i = 0; i < k - 1; ++i)
//             qu.pop();
//         cout << qu.top() << endl;
//     }
// }

int main() {
    int cas;
    int tmp;
    int count = 1;
    string op;
    // priority_queue<int, vector<int>, less<int>> qu;
    vector<int> qu;
    cin >> cas;
    for (int i = 0; i < cas; ++i) {
        cin >> op;
        if (op == "DIOU") {
            cin >> tmp;
            qu.push_back(tmp);
        } else {
            // find_k_largest(qu, count);
            if (qu.size() < count || count < 1) {
                cout << "BAONU" << endl;
            } else {
                if (count < qu.size() / 2) {
                    priority_queue<int, vector<int>, greater<int>> tmp_qu{qu.begin(), qu.end()};
                    for (int i = 0; i < qu.size() - count; ++i)
                        tmp_qu.pop();
                    cout << tmp_qu.top() << endl;
                } else {
                    priority_queue<int> tmp_qu{qu.begin(), qu.end()};
                    for (int i = 0; i < count - 1; ++i)
                        tmp_qu.pop();
                    cout << tmp_qu.top() << endl;
                }
                // sort(qu.begin(), qu.end());
                // cout << qu[qu.size() - count] << endl;
            }
            if (op == "MUMIMUMI") {
                ++count;
            } else if (op == "<3DONGDONG") {
                --count;
            }
        }
    }
    return 0;
}