$('#new_avatar_path').change(function(){
    if($.trim($('#new_avatar_path').val())){
        var formData = new FormData();
        formData.append('new_avatar', $('#new_avatar_path')[0].files[0]);
        $.ajax({
            type: 'post',
            url: '/app/ajax/loadFile.php',
            contentType: false,
            processData: false,
            data: formData,
            dataType: 'json',
            success: function(response){
                $('#warning').html(response.error);
                $('#new_avatar_img').attr('src', '/uploads/'+response.filename);
                $('#new_avatar_name').val(response.filename);
            }
        });
    } else {
        $('#warning').html("You must select imagefile");
    }
});
$('#change_avatar').click(function(){
    if($.trim($('#new_avatar_name').val())){
        $('#user_avatar').val($('#new_avatar_name').val());
    }
});