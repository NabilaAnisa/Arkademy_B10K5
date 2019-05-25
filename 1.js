
function myBio()
{
  let bioObj = {
               name : 'Nabila Anisa',
               address : 'Jakarta, Indonesia',
               hobbies : ['eat', 'sleep', 'code'],
               is_married : false,
               school : {  highSchool : 'SMK N 1 Magelang',
                              university : 'Hacktiv8'},
               skills : [
                              {name:'.NET' ,
                              score: 90},
                              {name: 'SQLServer',
                              score: 85},
                              {name: 'HTML' ,
                              score: 80},
                              {name: 'CSS',
                              score: 80},
                              {name: 'JavaScript',
                              score: 70}    
                            ]


  }

  return JSON.stringify(bioObj);
}



console.log(myBio());