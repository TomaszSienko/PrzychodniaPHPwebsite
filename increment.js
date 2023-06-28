function decrement(button) {
    var input = button.previousElementSibling;
    var value = parseInt(input.value);
    if (value > 0) {
    input.value = value - 1;
    }
  }
  
  function increment(button) {
    var input = button.previousElementSibling.previousElementSibling;
    var value = parseInt(input.value);
    
      input.value = value + 1;
    
  }
  
  
  
  
  