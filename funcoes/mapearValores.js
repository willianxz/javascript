//Recebe um valor minimo e um valor maximo e retorna um valor aleatório.

var randInt = function(m, n){
  var ranger = m - n;
  var frand = Math.random()*ranger;
  
  return m+Math.floor(frand);
};