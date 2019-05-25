function ganti_kata(kata, find, replace)
{
  let kataArr = kata.split('');

  for(let i=0; i<kataArr.length; i++)
  {
    if(kataArr[i]==find)
    {
      kataArr[i]=replace;
    }
  }

  kata = kataArr.join('');
  return kata;
}

let ganti = ganti_kata('halosayang', 'a', 'o');
console.log(ganti);