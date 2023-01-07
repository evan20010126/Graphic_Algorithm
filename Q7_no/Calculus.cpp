#include <algorithm>
#include <iostream>
#include <map>
using namespace std;

int main() {
    int n, m;
    int max_x = 0;
    cin >> n >> m;
    int a[n], b[n];
    int x[m];
    for (int i = 0; i < n; ++i)
        cin >> a[i];
    for (int i = 0; i < n; ++i)
        cin >> b[i];
    for (int i = 0; i < m; ++i) {
        cin >> x[i];
        if (x[i] > max_x)
            max_x = x[i];
    }

    map<int, int> heightmap;
    map<int, int>::iterator it;
    for (int i = 0; i < n; ++i) {
        for (int j = a[i]; j < b[i]; ++j) {
            it = heightmap.find(j);
            if (it != heightmap.end()) {
                ++heightmap[j];
            } else {
                heightmap[j] = 1;
            }
        }
    }
    int summary_sum[max_x];
    // for (int i = 0; i < max_x; ++i) {
    //     summary_sum[i] = -1;
    // }

    int sum = 0;
    for (int j = 0; j < max_x; ++j) {
        sum += heightmap[j];
        summary_sum[j] = sum;
    }
    for (int i = 0; i < m; ++i) {
        int sum = 0;
        // if (summary_sum[x[i] - 1] != -1) {
        sum = summary_sum[x[i] - 1];
        // }

        cout << sum;
        if (i == m - 1)
            cout << "\n";
        else
            cout << " ";
    }

    return 0;
}