#include <bits/stdc++.h>
using namespace std;
vector<int> a;
vector<int> b;
int n, m;
bool df(int range) {
    // range這個數字是否可以讓每個都走到 其中一個奇牙
    int i = 0;
    int an = 0, bm = 0;
    for (an = 0; an < n; an++) {
        if (bm >= m)
            break;
        while (abs(a[an] - b[bm]) > range) { // 每個都在range外
            bm++;
            if (bm >= m) {
                an = 2e9; // l~mid
                break;
            }
        }
        bm++;
    }
    if (an == n)
        return true; // mid~r
    return false;    // l~mid
}
signed main() {
    cin.tie(0);
    ios::sync_with_stdio(false);
    cin >> n >> m;
    a.clear();
    a.resize(n);
    b.clear();
    b.resize(m);
    for (int i = 0; i < n; i++) {
        cin >> a[i];
    }
    for (int i = 0; i < m; i++) {
        cin >> b[i];
    }
    sort(a.begin(), a.end());
    sort(b.begin(), b.end());
    int le = 0;
    int ri = 1000000001;
    while (le < ri) {
        int mid = (le + ri - 1) / 2;
        if (df(mid))
            ri = mid;
        else {
            le = mid + 1;
        }
    }
    cout << ri << endl;
    return 0;
}