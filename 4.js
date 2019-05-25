function cetak_gambar(jumlah)
{
  let gambar ='';

  if(jumlah%2 != 0)
  {
    let tengah = Math.floor(jumlah/2);
    for(let i=0; i<jumlah; i++)
    {
      for(let j=0; j<jumlah; j++)
      {
        if(i == 0 || i == jumlah-1){gambar+='x ';}
        else 
        {
          if(j == tengah){gambar+='x ';}
          else{gambar+='= ';}
        }
      }
      gambar += ' \n';
    }
    return gambar;
  }
  else {return 'Masukkan Hanya Bilangan Ganjil'};
}

console.log(cetak_gambar(13));
