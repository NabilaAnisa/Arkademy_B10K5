function count_vowels(str1)
{
  let vowel_list = 'aeiouAEIOU';
  let vcount = 0;
  
  for(let x = 0; x < str1.length ; x++)
  {
    if (vowel_list.indexOf(str1[x]) !== -1)
    {
      vcount += 1;
    }
  }
  return vcount;
}
console.log(count_vowels("TheQuick Brown Fox Jump Over The"));