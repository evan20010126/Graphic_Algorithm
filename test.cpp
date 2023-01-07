#include <iostream>
using namespace std;

struct my_test {
    /* data */
    int data;
    int hello() {
        cout << "hello";
    }
};

int main() {
    my_test *a = new my_test;
    // a->hello();
    // hello();
    return 0;
}