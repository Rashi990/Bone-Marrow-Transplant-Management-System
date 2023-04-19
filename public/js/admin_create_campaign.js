window.onload=function(){
        var today = new Date().toISOString().split('T')[0];
        document.getElementsByName("date")[0].setAttribute('min', today);
            

        //     var hospital_options = document.getElementById('hospital_options');
        //     var add_more_fields = document.getElementById('add_more_fields');
        //     var remove_fields = document.getElementById('remove_fields');
            
        //     add_more_fields.onclick = function(){
        //       var newField = document.createElement('select');
        //       var newField = document.createElement('option');
        //       newField.setAttribute('type','text');
        //       // newField.setAttribute('name','hname');
        //       // newField.setAttribute('class','hospital_options');
        //       // newField.setAttribute('placeholder','Enter hospital Name');
        //       hospital_options.appendChild(newField);
        //     }
            
        //     remove_fields.onclick = function(){
        //       var input_tags = hospital_options.getElementsByTagName('select');
        //       if(input_tags.length > 2) {
        //         hospital_options.removeChild(input_tags[(input_tags.length) - 1]);
        //       }
        //     }                     
                    
        // }
      