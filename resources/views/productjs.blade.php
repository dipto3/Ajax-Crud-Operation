<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script>
    $.ajaxSetup({
headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

    
}
});
</script>
<script>
    $(document).ready(function(){
        $(document).on('click','.add_product',function(e){
            e.preventDefault();
            let name = $('#name').val();
            let price = $('#price').val();
            let description = $('#description').val();
            // console.log(name+price+description);

            $.ajax({
                url:"{{route('add.product')}}",
                method:'post',
                data:{name:name,price:price,description:description},
                success:function(res){

                    if(res.status == 'success'){
                    
                    $('#addModal').modal('hide');
                    $('#addproductform')[0].reset();
                    $('.table').load(location.href+' .table');

                }
                },error:function(err){
                    let error = err.responseJSON;
                $.each(error.errors , function(index,value){
                    $(".errormgs").append('<span class="text-danger">'+value+'</span>'+'<br>')
                });
                }
            });
        })
        //show
        $(document).on('click','.update_productform',function(){
        let id = $(this).data('id');
        let name = $(this).data('name');
        let price = $(this).data('price');
        let description = $(this).data('description');

        $('#up_id').val(id);
        $('#up_name').val(name);
        $('#up_price').val(price);
        $('#up_description').val(description);

    });

    //update
    $(document).on('click','.update_product',function(e){
        e.preventDefault();
        let up_id = $('#up_id').val();
        let up_name = $('#up_name').val();
        let up_price = $('#up_price').val();
        let up_description = $('#up_description').val();


        $.ajax({
            url:'{{ route('update.product') }}',
            method:'post',
            data:{up_id:up_id,up_name:up_name,up_price:up_price,up_description:up_description},
            success:function(res){
                if(res.status=='success'){
                    $('#updateModal').modal('hide');
                    $('#updateproductform')[0].reset();
                    $('.table').load(location.href+' .table');
                }
            },error:function(err){
                let error = err.responseJSON;
                $.each(error.errors , function(index,value){
                    $(".errormgs").append('<span class="text-danger">'+value+'</span>'+'<br>')
                });
            }
        });
    })
        // delete data
        $(document).on('click','.delete_product',function(e){
        e.preventDefault();
        let product_id = $(this).data('id');
        
        // console.log(name+price);
        if(confirm('Are you sure to delete product ?')){
            $.ajax({
            url:'{{ route('delete.product') }}',
            method:'post',
            data:{product_id:product_id},
            success:function(res){
                if(res.status=='success'){
                    
                    $('.table').load(location.href+' .table');
                }
            }
        });
        }
      
    })

    });
</script>