function commonWord(str)
{
    var words = str.split(" ");
    var counter = {};
    var common = words[0], maxCount = 1;
    for(var i = 0; i < words.length; i++)
    {
        var current = words[i];
        if(counter[current] == null)
            counter[current] = 1;
        else
            counter[current]++;  
        if(counter[current] > maxCount)
        {
            common = current;
            maxCount = counter[current];
        }
    }
    return common;
}
var x = commonWord('abc abc ce');
console.log(x);

// return abc
