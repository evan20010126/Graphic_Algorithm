#include<bits/stdc++.h>
#define pii pair<int, int>
using namespace std;
int n, x, y, _map[1005][1005] = {0}, num = 0, vx[4] = {1, -1, 0, 0}, vy[4] = {0, 0, 1, -1};
pii island[1005][1005];
pii find(pii a){
    if(island[a.first][a.second] == a) return  a;
    return island[a.first][a.second] = find(island[a.first][a.second]);
}
void unite(pii a, pii b){
    a = find(a);b = find(b);
    island[b.first][b.second] = a;
}
int main(){
    ios::sync_with_stdio(0);cin.tie(0);
    cin >> n;
    for(int i = 0; i < 1005; i++)
        for(int j = 0; j < 1005; j++)
            island[i][j] = {i, j};
    for(int i = 0; i < n; i++){
        cin >> x >> y;
        if(!_map[x][y]){
            _map[x][y] = 1;
            num ++;
            for(int j = 0, nx, ny; j < 4; j++){
                nx = x + vx[j];ny = y + vy[j];
                if(_map[nx][ny] && nx <= 1000 && nx >= 1 && ny <= 1000 && ny >= 1){
                    if(find({x, y}) != find({nx, ny})){
                        num--;
                        unite({x, y}, {nx, ny});
                    }
                }
            }
        }
        cout << num << '\n';
    }
}