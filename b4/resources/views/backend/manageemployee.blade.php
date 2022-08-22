<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- csrf -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- font awsome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   <div class="container">
<div class="row mt-5">
    <div class="col-md-4 ">
      
            <div class="form-group">
                <label for="">First Name</label>
               <input type="text"  class="fname form-control">
            </div>

            <div class="form-group">
                <label for="">Last Name</label>
               <input type="text" class="lname form-control">
            </div>
            <div class="form-group">
                <label for="">Address</label>
              <textarea class="address form-control" id="" cols="30" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="">Phone Number</label>
               <input type="text" class=" phone form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
               <input type="text"  class="email form-control">
            </div>
            <div class="form-group">
                <label for="">status</label>
              <select name="status"class="status form-control">
                <option value="0">----select status------</option>
                <option value="1">Active</option>
                <option value="2">Inactive</option>
            </select>
            </div>
            <button class="btn btn-primary mt-3 addemployee">Save</button>
     
    </div>
    <div class="col-md-8">
        <table class="table table-danger table-striped">
            <thead>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
            </thead>
            <tbody class="alldata">

            </tbody>
        </table>
       
       </div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are sure want to delete this Employee?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btnDelete btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" id="ufname" class="fname form-control">
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" id="ulname" class="lname form-control">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="address form-control" id="uaddress" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" id="uphone" class="phone form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="uemail" class="email form-control">
                    </div>
                    <div class="form-group">
                        <label for="Status">Status</label>
                        <select name="status" id="ustatus" class="status form-control">
                            <option value="0">-----Select Status-----</option>
                            <option value="1">Active</option>
                            <option value="2">Inactive</option>
                        </select>
                    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="update btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    

<script>
    jQuery(document).ready(function(){
        show();
        // update start
jQuery(document).on("click",".update",function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                var id = jQuery(this).val();
                var fName = jQuery("#ufname").val();
                var lName = jQuery("#ulname").val();
                var address = jQuery("#uaddress").val();
                var phone = jQuery("#uphone").val();
                var email = jQuery("#uemail").val();
                var status = jQuery("#ustatus").val();
                $.ajax({
                    url:"employeeupdate/"+id,
                    type:"POST",
                    dataType:"JSON",
                    data:{
                        fName:fname,
                        lName:lname,
                        address:address,
                        phone:phone,
                        email:email,
                        status:status
                    },
                    success:function(result){
                        if(result["msg"]=="404"){
                            jQuery(".msg").html('<div class="alert alert-danger">Data Not Updated</div>')
                            jQuery(".alert").fadeOut(1000);
                            jQuery("#update").modal("hide");
                            show();
                        }
                        else if(result.msg=="success"){
                            show();
                            jQuery(".msg").html('<div class="alert alert-success">Data Update</div>');
                            jQuery(".alert").fadeOut(1000);
                            jQuery("#update").modal("hide");
                        }
                    }
                })
            })
// update end


// edit strat
            jQuery(document).on("click",".edit",function(){
                var id=jQuery(this).val();
                jQuery(".update").val(id);
                $.ajax({
                    url:"editemployee/"+id,
                    type:"GET",
                    dataType:"JSON",
                    success:function(result){
                        jQuery("#ufname").val(result.alldata.fname);
                        jQuery("#ulname").val(result.alldata.lname);
                        jQuery("#uaddress").val(result.alldata.address);
                        jQuery("#uphone").val(result.alldata.phone);
                        jQuery("#uemail").val(result.alldata.email);
                    }
                })
            })

// edit end


// delete start
jQuery(document).on("click", ".deleteId", function(){
                var id=jQuery(this).val();
                jQuery(".btnDelete").val(id);
            })
            jQuery(document).on("click",".btnDelete", function(){
                var id=jQuery(this).val();
                $.ajax({
                    url:"deleteemployee/"+id,
                    type:"GET",
                    dataType:"JSON",
                    success:function(result){
                        if(result.status=="404"){
                            alert("data not found")
                        }
                        else{
                            show();
                            jQuery("#delete").modal("hide");
                        }
                    }
                })
            })
// delete end



        function show(){
                $.ajax({
                    url:"showemployee",
                    type:"GET",
                    dataType:"JSON",
                    success:function(result){
                        if(result.status=="success"){
                           
                            var allData="";
                            $.each(result.alldata, function(key, item){
                                allData += '<tr>\
                                <td>'+item.fname+' '+item.lname+'</td>\
                                <td>'+item.address+'</td>\
                                <td>'+item.phone+'</td>\
                                <td>'+item.email+'</td>\
                                <td>'+item.status+'</td>\
                                <td>\
                                    <button data-toggle="modal" data-target="#update" value="'+item.id+'" class="edit btn btn-info btn-sm"> <i class="fa fa-edit"></i> </button>\
                                    <button data-toggle="modal" data-target="#delete" value="'+item.id+'" class="deleteId btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </button>\
                                </td>\
                             </tr>'
                            });
                            jQuery(".alldata").html(allData);
                                
                            
                        }
                        else if(result.status=="404"){
                            alert("Error 404: Data Not Found");
                        }
                    }
                });
            }












        jQuery (".addemployee").click(function(){
            $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
    }
});
          var fname=jQuery(".fname").val();
          var lname=jQuery(".lname").val();
          var address=jQuery(".address").val();
          var phone=jQuery(".phone").val();
          var email=jQuery(".email").val();
          var status=jQuery(".status").val();
        $.ajax({
            url:'employeestore',
            type:'POST',
            datatype:'JSON',
            data:{
                fname:fname,
                lname:lname,
                address:address,
                phone:phone,
                email:email,
                status:status
            },
            success:function(result){
                        if(result["msg"]=="404"){
                            jQuery(".msg").html('<div class="alert alert-danger">Data Not Submited</div>')
                            jQuery(".alert").fadeOut(1000);
                        }
                        else if(result.msg=="success"){
                            show();
                            jQuery(".msg").html('<div class="alert alert-success">Data Submited</div>');
                            jQuery(".alert").fadeOut(1000);
                        }
                    }
        });
        });

    });
</script>





</body>
</html>