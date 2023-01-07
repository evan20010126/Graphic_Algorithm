#include <iostream>
#include <typeinfo>
using namespace std;

typedef struct node *nodeptr;
struct node {
    int data;
    int count;
    nodeptr head;
    nodeptr next;
    nodeptr rear;
    node() : data(0), count(0), head(NULL), next(NULL), rear(NULL){};
};

void make_set(nodeptr ptr, int data) {
    ptr->data = data;
    ptr->count = 1;
    ptr->head = ptr;
    ptr->next = NULL;
    ptr->rear = ptr;
}

// nodeptr find_set(nodeptr ptr) {
//     return ptr->head;
// }

void union_set(nodeptr ptr0, nodeptr ptr1) {
    /* ptr0 append ptr1 */
    nodeptr tmp;

    nodeptr ptr0_leader = ptr0->head;
    // nodeptr ptr0_leader = find_set(ptr0);
    nodeptr ptr1_leader = ptr1->head;
    // nodeptr ptr1_leader = find_set(ptr1);
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
    } else {
        /* do nothing */
    }
}

void fight(nodeptr ptr0, nodeptr ptr1) {
    nodeptr tmp;

    nodeptr ptr0_leader = ptr0->head;
    nodeptr ptr1_leader = ptr1->head;
    // nodeptr ptr0_leader = find_set(ptr0);
    // nodeptr ptr1_leader = find_set(ptr1);

    if (ptr0_leader == ptr1_leader) {
        cout << "peace" << endl;
    } else {
        int count0 = ptr0_leader->count, count1 = ptr1_leader->count;

        // for (tmp = ptr0_leader; tmp != NULL; tmp = tmp->next) {
        //     ++count0;
        // }
        // for (tmp = ptr1_leader; tmp != NULL; tmp = tmp->next) {
        //     ++count1;
        // }
        if (count0 == count1) {
            cout << "draw" << endl;
        } else if (count0 < count1) {
            cout << "lose" << endl;
        } else {
            cout << "win" << endl;
        }
    }
}

int main() {
    int n, m;
    cin >> n >> m;

    nodeptr disjoin_set = new node[n];

    for (int i = 0; i < n; ++i) {
        make_set(disjoin_set + i, i + 1);
    }

    /* instruction i */
    for (int j = 0; j < m; ++j) {
        int i, x, y;
        cin >> i >> x >> y;
        nodeptr country0 = disjoin_set + x - 1;
        nodeptr country1 = disjoin_set + y - 1;

        switch (i) {
        case 1:
            /* contract */
            union_set(country0, country1);
            break;

        case 2:
            fight(country0, country1);
            break;
        }
    }

    return 0;
}