@section('script')
<script language="javascript">
    $(document).ready(function(){
    	
    	$('.songuoi').change(function(){
    		var songuoi = $(this).val();
    		var _token = $('input[name="_token"]').val();
    // 		alert(songuoi);
    // 		alert(_token);
    		$.ajax({
    			type:'POST',
    			cache: false,
    			url:"{{ route('numberoftable') }}",
    			data:{
    				_token:_token,songuoi:songuoi
    			},
    			success:function(data){
              		$('.soban').html(data);
              }
    		});
    	});
    	
    	$('.date').change(function(){
    		var ngay = $('input[name="ngay"]:text').val();
    		var _token = $('input[name="_token"]').val();
    		
    // 		alert(ngay);
    // 		alert(_token);
    		$.ajax({
    			type:'POST',
    			cache: false,
    			url:"{{ route('kiemtrangaycheckout') }}",
    			data:{
    				_token:_token,ngay:ngay
    			},
    			success:function(data){
              		$('.loingay').html(data);
              }
    		});
    	});
    	
    	$('.time').change(function(){
    		var thoigian = $('input[name="thoigian"]:text').val();
    		var _token = $('input[name="_token"]').val();
    		var ngay = $('input[name="ngay"]:text').val();
    // 		alert(ngay);
    // 		alert(_token);
    		$.ajax({
    			type:'POST',
    			cache: false,
    			url:"{{ route('kiemtrathoigiancheckout') }}",
    			data:{
    				_token:_token,thoigian:thoigian,ngay:ngay
    			},
    			success:function(data){
              		$('.loithoigian').html(data);
              }
    		});
    	});
    	
    	$(".loaiban").on('change',function(){
    		var loaiban = $(this).val();
    		var ngay = $('input[name="ngay"]:text').val();
    		var _token = $('input[name="_token"]').val();
    // 		alert(loaiban);
    // 		alert(_token);
    		$.ajax({
    			type:'POST',
    			cache: false,
    			url:"{{ route('tienloaiban') }}",
    			data:{
    				_token:_token,ngay:ngay,loaiban:loaiban
    			},
    			success:function(data){
              		$('.tienloaiban').html(data);
              }
    		});
    	});
    	
    	$('.new').click(function(){
    		window.location = "{{route('datbanmoi')}}";
    	});
    	
    	
    	
    });
</script>
@endsection

<script type="text/javascript">
    $(document).on('click', '.sub',function(){
console.log(1);
    });
</script>