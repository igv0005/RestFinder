            function openPage(){
              var x = document.getElementById("search").value;

              if(x === "piamontesa"){
                window.open("mesapia.html");  
                window.close();            
              }

              if(x === "distopia"){
                window.open("mesadistopia.html");       
                window.close();       
              }

              if(x === "serenata"){
                window.open("mesasere.html");    
                window.close();         
              }

              if(x === "living room"){
                window.open("mesaliving.html");    
                window.close();
              }
                
              if(x === "raimunda"){
                window.open("mesaraimunda.html"); 
                window.close();             
              }
              
                if(x === "dragon khan"){
                window.open("mesadragon.html");    
                window.close();
              }

              if(x === "rincon"){
                window.open("mesarincon.html");      
                window.close();        
              }

                if(x === "masia"){
                window.open("mesamasia.html");    
                window.close();
              }
              else{

                  Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Parece que este restaurante no existe',
                  confirmButtonColor: '#f05168'
                  })

                  }
            }