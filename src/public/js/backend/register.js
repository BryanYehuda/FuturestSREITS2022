
$("button#submit").on('click', function(){
    let form = $('#form')[0];
    let data = new FormData(form);
    
    data.append('submit', 'bisa');
     
    $('form').submit(function(){
        return false;
    });
    
    $("button#submit").attr("disabled", "disabled");
    document.querySelector("#loading").classList.remove("d-none");
    
    $.ajax({
        url: url,
        type: "POST",
        enctype: 'multipart/form-data',
        data: data,
        datatype: JSON,
        processData: false,
        contentType: false,
        cache: false,
        success: function(response){
            if(response == "1"){
                Swal.fire({
                    title: 'Thank you for your interest and registration in the Grand Talkshow!',
                    text: 'Kindly check your email for further notice!',
                    type: 'success',
                    icon: 'success',
                    confirmButtonText: 'Go Back'
                }).then( function(){
                    window.location.href = base_url;
                });
                document.querySelector("#loading").classList.add("d-none");
                $("button#submit").removeAttr("disabled");
            }else{
                //console.log(response)
                let ok = JSON.parse(response)
                let key = Object.keys(ok);
                for(let datakey of data.keys()){
                    if(datakey != 'prioritze' && datakey != 'willingness' && datakey != 'committed'){
                         document.querySelector("#"+datakey).classList.remove("is-invalid");
                    }
                }

                for(let key of Object.keys(ok)){
                    //console.log(key)
                    //console.log(ok[key])
                    if(ok[key] != ""){
                        document.querySelector("#"+key).classList.add("is-invalid");
                        $("#"+key+"-false").html(ok[key])
                    }
                }
                document.querySelector("#loading").classList.add("d-none");
                $("button#submit").removeAttr("disabled");
            }
        }
    })    
})  
