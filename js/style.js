function inputnum(number) {
    return prompt(number);
  }
  
  
  const num = parseInt(inputnum("Enter a number:"));
  
  
  const names = []; 
  
  for (let i = 0; i < num; i++) {
    const name = inputnum(`Enter name ${i+1}:`);
    names.push(name);
  }
  
  
  console.log("Names entered:");
  names.forEach(name => console.log(name));
  