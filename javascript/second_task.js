// Задание 2


// function setGetParams(newGetparams) {
// 	let newString
// 	for(key in newGetParams)
// 		newString += (newString ? '&' : '') + key + '=' + newGetParams[i]
// 	return window.location.href + '?' + newString
// }

//newGetparams => newGetParams
// 'newGetparams' is declared but its value is never read.ts(6133)
//console не выдавала никаких errors
//
//есть личный вопрос, почему не TypeScript?
//типизация параметра и в for in цикле перебора была бы заметно при компиляции

function setGetParams(newGetParams) {
  let newString = '';
  for(let key in newGetParams)
    newString += (newString ? '&' : '') + key + '=' + newGetParams[key];//i=>key
  return window.location.href + '?' + newString;
}
