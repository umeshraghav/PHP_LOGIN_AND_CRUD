//Ajax for insert

$(document).ready(function(){


    //retireve data
    
    function showData(){
        output="";
        $.ajax({
            
            url : "retrieve.php",
            method : "GET",
            dataType : 'json',
            success: function(data){
                //console.log(data);
               
                if(data){
                    x= data;
                }else{
                    x="";
                }
    
                     for(i=0;i<x.length;i++){
                         output+="<tr><td>"+x[i].pid+"</td><td>"+x[i].firstName+"</td><td>"+x[i].lastName+"</td><td>"+x[i].gender+"</td><td>"+x[i].DOB+"</td><td>"+  x[i].address+", "+x[i].city+ ", "+x[i].province+", "+x[i].postalCode+"</td><td>" + x[i].phone +"</td><td>"+ x[i].email +"</td><td>"+ x[i].medication + 
                         "</td><td>"+ x[i].allergies +"</td><td>"+ x[i].refDoctor +
                         "</td><td> <button class='btn btn-sm btn-warning btn-edit' data-toggle='modal' data-target='#updateModal'  data-id=" + x[i].pid + ">Edit </button> <button  class='btn btn-sm btn-danger btn-del' data-id=" + x[i].pid + ">Delete</button> </td></tr>";
                     }   
    
                        $("#tbody").html(output);
    
            }
         })
    }
    
    showData();
    
    
    
    $("#btnadd").click(function (e) {
    
    e.preventDefault();
    console.log("Svae clicked")
    
         var firstName = $.trim($('#firstName').val()); 
         var lastName = $.trim($('#lastName').val());
         var gender = $.trim($('#gender').find(":selected").val()); 
         var DOB = $.trim($('#DOB').val());
         var address = $.trim($('#address').val());
         var city = $.trim($('#city').val());
         var province = $.trim($('#province').val());
         var postalCode = $.trim($('#postalCode').val());
         var phone = $.trim($('#phone').val());
         var email = $.trim($('#email').val());
         var medication = $.trim($('#medication').val());
         var allergies = $.trim($('#allergies').val());
         var refDoctor = $.trim($('#refDoctor').val());
    
    mydata = {
        firstName : firstName,
        lastName : lastName,
        gender : gender,
        DOB : DOB,
        address : address,
        city : city,
        province : province,
        postalCode : postalCode,
        phone : phone,
        email : email,
        medication : medication,
        allergies : allergies,
        refDoctor : refDoctor

    };
    
    $.ajax({
        url : "insert.php",
        method : "POST",
        data : JSON.stringify(mydata),
        success : function(data){
            //console.log(data);
            msg = "<div class='alert alert-dark'>"+data+"</div>";
            $("#msg").html(msg);
            $("#myform")[0].reset();
            showData();
        },
    })
    
    });
     
    
    
    
    
    
    
    //Delete Data 
    $("#tbody").on("click", ".btn-del", function(){
        console.log("Delete Clicked");
        var pid = $(this).attr("data-id");
        //console.log(id);
    
        mydata = {pid: pid};
        mythis = this;
        $.ajax({
            url : "delete.php",
            method : "POST",
            data : JSON.stringify(mydata),
    
            success : function(data){
                //console.log(data);
    
                if(data ==1)
                {
                    msg = "<div class='alert alert-dark'> Record Deleted Successfully</div>";
                    $("#msg").html(msg);
                    $(mythis).closest("tr").fadeOut();
        
                }else{
                    msg = "<div class='alert alert-dark'>Unable to delete Record </div>";
                    $("#msg").html(msg);
                }
    
        
            },
        })
    });
    
    
    
    
    
    //update the data
    $("tbody").on("click", ".btn-edit", function(){
        console.log("Edit Clicked");
        var pid = $(this).attr("data-id");
         
    
    mydata = {pid:pid};
     console.log(mydata);
    $.ajax({
        url : "edit.php",
        method : "POST",
        dataType: "json",
        data : JSON.stringify(mydata),
        success: function(data)
        {
            console.log(data);

          


            
            $("#firstName1").val(data.firstName);
            $("#lastName1").val(data.lastName);
            $("#gender1").val(data.gender);
            $("#DOB1").val(data.DOB);
            $("#address1").val(data.address);
            $("#city1").val(data.city);
            $("#province1").val(data.province);
            $("#postalCode1").val(data.postalCode);
            $("#phone1").val(data.phone);
            $("#email1").val(data.email);
            $("#medication1").val(data.medication);
            $("#allergies1").val(data.allergies);
            $("#refDoctor1").val(data.refDoctor);
    
            updates(data.pid);
        }
    })
    
    
    });
    
    
    function updates(pid){
        console.log("Update Called " +pid);
    
    
        $("#btnupdate").click(function (e) {
            e.preventDefault();
    
            var firstName = $.trim($('#firstName1').val()); 
            var lastName = $.trim($('#lastName1').val());
            var gender = $.trim($('#gender1').find(":selected").val()); 
            var DOB = $.trim($('#DOB1').val());
            var address = $.trim($('#address1').val());
            var city = $.trim($('#city1').val());
            var province = $.trim($('#province1').val());
            var postalCode = $.trim($('#postalCode1').val());
            var phone = $.trim($('#phone1').val());
            var email = $.trim($('#email1').val());
            var medication = $.trim($('#medication1').val());
            var allergies = $.trim($('#allergies1').val());
            var refDoctor = $.trim($('#refDoctor1').val());
            
            mydata = {
                pid:pid,
                firstName : firstName,
                lastName : lastName,
                gender : gender,
                DOB : DOB,
                address : address,
                city : city,
                province : province,
                postalCode : postalCode,
                phone : phone,
                email : email,
                medication : medication,
                allergies : allergies,
                refDoctor : refDoctor
            };
            
            
            $.ajax({
                url : "update.php",
                method : "POST",
                data : JSON.stringify(mydata),
                success : function(data){
                    //console.log(data);
                    msg = "<div class='alert alert-dark'>"+data+"</div>";
                    $("#msg").html(msg);
                    $("#myform1")[0].reset();
                    showData();
                },
            })
    
    
           
        })
    
    
     
      
     
         
    
    
    
    }
    
    
    });
    