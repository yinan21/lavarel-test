function pmFunction(asyncFn) {
  const promises = [];
  for (i = 0; i < asyncFn.length; ++i) {
    promises.push(asyncFn());
  }

  return Promise.all(promises);
}

function pmFunction2(asyncFn) {
  asyncFn.reduce(function(promise, item) {
    return promise.then(function() {
       console.log("then:", item);
       return item;
    }), Promise.resolve();
  });
}


