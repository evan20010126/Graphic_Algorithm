#include <bits/stdc++.h>
using namespace std;

int main() {
    int n;
    cin >> n;
    pair<int, int> wall[n];
    for (int i = 0; i < n; ++i) {
        if (wall[i].first > wall[i].second) {
            int tmp = wall[i].first;
            wall[i].first = wall[i].second;
            wall[i].second = tmp;
        }
    }

    for (int i = 0; i < n; ++i) {
        }
    return 0;
}