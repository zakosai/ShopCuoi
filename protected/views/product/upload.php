	<div class="upload">
            <input type="file" name="file0" value="file" id="file">
            <a onclick="addImage()" class="btn btn-primary" href="" id="addImg">Thêm Ảnh</a> <br>
        </div>
    <input type="hidden" name="number" id="number" value="1">


       	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
    var i = 1;
    $('#addImg').on('click', function(){
        
    var addDiv = $('.upload');
        $('<input type="file" name="file'+i+'" id="file" value="file"><br>').appendTo(addDiv);
        i++;
        $('#number').val(i);
        return false;
        
    });
    
</script>