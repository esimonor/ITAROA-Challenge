window.onload = start;
    function start(){
     var button = document.getElementById("send_data")
     button.addEventListener('mouseover', validate);
     button.disabled = "true";
    }

    function validate(){
        let name = document.getElementById('name').value;
        let description = document.getElementById('description').value;
        let price = document.getElementById('price').value;
        let stock = document.getElementById('stock').value;
        // let image = document.getElementById('image').value;
        let link = document.getElementById('link').value;
        let valid = 0;

        if (name =="" || description =="" || price=="" || stock=="" || link==""){
            
        }
        else{
            valid += 1;
        }

        if (valid == 1){
            console.log(valid + " enabled");
            enable_button();
        }
        else{
            console.log(valid + " disabled");
            disable_button();
        }
        
    }

    function enable_button(){
        var button = document.getElementById("send_data");
        button.disabled = false;
    }
    function disable_button(){
        var button = document.getElementById("send_data");
        button.disabled = true;
    }