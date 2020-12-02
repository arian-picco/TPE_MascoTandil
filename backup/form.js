document.addEventListener('DOMContentLoaded', () => {

  
    function autoSubmit(){
        var orderForm = document.querySelector('#order-form');

        orderForm.addEventListener('change', function submitSelected(e){
            e.preventDefault();
            
            
        })
    }

    autoSubmit();
  
    });




