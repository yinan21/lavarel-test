// Try edit message
class Node {
    constructor(data) {
        this.data = data;
        this.next = null;
        this.previous = null;
    }
}

node = [];
head = new Node(2);
node[1] = new Node(4);
head.next = node[1];
node[1].previous = head;
node[2] = new Node(6);
node[1].next = node[2];
node[2].previous = node[1];

function findPrevious(head, input) {
  var current = head;
  while (current !== null) {
    if (current.data == input) {
      let pre = current.previous;
      if (pre !== null) {
         return pre.data;
      }  else {
         return null;
      }
    }
    current = current.next;
  }
}

var n = findPrevious(head,6);
console.log(n);

// return 4

