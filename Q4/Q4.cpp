#include <algorithm>
#include <stdio.h>
#include <vector>
using namespace std;

// vector<vector<int>> tab;

bool all_find(int x[], int y[], int n, int m, int step) {
    // vector<int> selected;
    // selected.clear();
    int j = 0;
    for (int i = 0; i < n; ++i) {
        bool someone_find = false;
        for (; j < m; ++j) {
            // cout << bm << " ";
            if (abs(x[i] - y[j]) <= step) {

                someone_find = true;
                ++j;
                break;
            }
        }
        if (!someone_find) { // 若回合完全沒找到人
            return false;
        }
    }

    return true;
}

int main() {
    int n, m;
    scanf("%d %d", &n, &m);
    int x[n], y[m];

    for (int i = 0; i < n; ++i)
        scanf("%d", &x[i]);
    for (int i = 0; i < m; ++i)
        scanf("%d", &y[i]);

    sort(x, x + n);
    sort(y, y + m);
    // vector<int> temp;
    // temp.resize(m, 0);
    // tab.clear();
    // tab.resize(n, temp);

    // for (int i = 0; i < n; ++i) {
    //     int target = x[i];
    //     for (int j = 0; j < m; j++) {
    //         tab[i][j] = abs(target - y[j]);
    //     }
    // }

    int l = 0, r = 1000000001;

    while (l < r) {
        int mid = (r + l) >> 1;
        // if mid個步伐，有人沒辦法走到其中一個奇牙 => 鎖定 mid+1 ~ r
        // else 大家都可以走到一個奇牙 => 鎖定 l~mid
        if (!all_find(x, y, n, m, mid)) {
            l = mid + 1;
        } else {
            r = mid;
        }
    }
    printf("%d\n", r);
    return 0;
}
