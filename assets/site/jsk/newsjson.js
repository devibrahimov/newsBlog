
let  content = function(jsondata){

  let response = fetch(jsondata).then(function(response){
      return response.json(response);
  }).then(function(resdata){

  //console.log(resdata);

  });
}
