#include <iostream>
#include <stdlib.h>
using namespace std;

typedef struct node *nodeptr;
struct node {
    pair<int, int> data;
    int count;
    nodeptr head;
    nodeptr next;
    nodeptr rear;
    node() : data(), count(1), head(this), next(NULL), rear(this){};
};

void make_set(nodeptr ptr, int x, int y) {
    ptr->data = make_pair(x, y);
    // ptr->count = 1;
    // ptr->head = ptr;
    // ptr->next = NULL;
    // ptr->rear = ptr;
}

// nodeptr find_set(nodeptr ptr) {
//     return ptr->head;
// }

void union_set(nodeptr ptr0, nodeptr ptr1, int &count) {
    if (ptr0->head->count < ptr1->head->count) {
        /* switch */
        nodeptr tmp;
        tmp = ptr0;
        ptr0 = ptr1;
        ptr1 = tmp;
    }
    /* ptr0 append ptr1 */
    nodeptr tmp;
    nodeptr ptr0_leader = ptr0->head; // nodeptr ptr0_leader = find_set(ptr0);
    nodeptr ptr1_leader = ptr1->head; // nodeptr ptr1_leader = find_set(ptr1);
    if (ptr0_leader != ptr1_leader) {
        // for (tmp = ptr0; tmp->next != NULL; tmp = tmp->next)
        //     ;
        // tmp->next = ptr1_leader;
        ptr0_leader->rear->next = ptr1_leader;
        ptr0_leader->rear = ptr1_leader->rear;

        for (tmp = ptr1_leader; tmp != NULL; tmp = tmp->next) {
            ++ptr0_leader->count;
            tmp->head = ptr0_leader;
        }
        --count;
    } else {
        /* do nothing */
    }
}

bool isNear(pair<int, int> p1, pair<int, int> p2) {
    if ((p1.second == p2.second) && abs(p1.first - p2.first) <= 1) {
        return true;
    } else if ((p1.first == p2.first) && abs(p1.second - p2.second) <= 1) {
        return true;
    } else
        return false;
}

int main() {
    ios::sync_with_stdio(false);
    cout.tie(NULL);
    int n;
    cin >> n;

    nodeptr disjoin_set = new node[n];
    int count = 0;
    int tmp1, tmp2;
    for (int i = 0; i < n; ++i) {
        cin >> tmp1 >> tmp2;

        bool stop = false;
        for (int j = 0; j < i; ++j) {
            if ((disjoin_set + j)->data.first == tmp1 && (disjoin_set + j)->data.second == tmp2) {
                stop = true;
                cout << count << "\n";
                break;
            }
        }
        if (stop) {
            continue;
        }

        ++count;
        make_set(disjoin_set + i, tmp1, tmp2);
        for (int j = 0; j < i; ++j) {
            if (isNear((disjoin_set + i)->data, (disjoin_set + j)->data)) {
                union_set(disjoin_set + i, disjoin_set + j, count);
            }
        }
        cout << count << "\n";
    }
    return 0;
}