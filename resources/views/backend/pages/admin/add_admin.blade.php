@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="page-content">
    <div class="row profile-body">
        <!-- left wrapper start -->
    
        <!-- left wrapper end -->
        <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
        <div class="card">
              <div class="card-body">
                <h6 class="card-title">Add Admin</h6>
                <form id="myForm" method="POST" action="{{ route('store.admin') }}" class="forms-sample">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="exampleInputName1" class="form-label">Admin User Name</label>
                        <input type="text" name="username" class="form-control">
                    </div> 
                    <div class="form-group mb-3">
                        <label for="exampleInputName1" class="form-label">Admin Name</label>
                        <input type="text" name="name" class="form-control">
                    </div> 
                    <div class="form-group mb-3">
                        <label for="exampleInputName1" class="form-label">Admin Email</label>
                        <input type="text" name="email" class="form-control">
                    </div> 
                    <div class="form-group mb-3">
                        <label for="exampleInputName1" class="form-label">Admin Phone</label>
                        <input type="text" name="phone" class="form-control">
                    </div> 
                    <div class="form-group mb-3">
                        <label for="exampleInputName1" class="form-label">Admin Address</label>
                        <input type="text" name="address" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputName1" class="form-label">Admin password</label>
                        <input type="text" name="password" class="form-control">
                    </div> 
                    <div class="form-group mb-3">
                        <label for="exampleInputName1" class="form-label">Role Name</label>
                        <select name="roles" class="form-select" id="exampleFormControlSelect1">
                            <option selected="" disabled="">Select Group</option>
                            @foreach($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div> 
                    <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                </form>
              </div>
            </div>
        </div>
        </div>
        <!-- middle wrapper end -->
        <!-- right wrapper start -->
        
        <!-- right wrapper end -->
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                amenitie_name: {
                    required : true,
                }, 
                
            },
            messages :{
                amenitie_name: {
                    required : 'Please Enter Amenities Name',
                }, 
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>

@endsection 