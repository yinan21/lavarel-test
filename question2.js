function arrayFind(word, arr)
{
    return (arr.indexOf(word) > -1);
}

var arr = ["abc", "de", "fg"];
var res = arrayFind('de',arr);
console.log(res);
