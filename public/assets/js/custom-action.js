$(document).ready(function(){

    // Super Admin Account Remove Action
    $('.delete-account').on('click', function(ev) {
        var d_actionurl = $(this).attr('value');
        $('#s_delete_form').attr('action', d_actionurl);
    });

    $('#s_delete-btn').on('click', function(){
        $('#s_delete_form').submit();
    });

    // Super Admin Profile image upload
    $('#s_pp_upload').on('change', function() {

        var reader = new FileReader();
        
        reader.onload = function (e) {
            // get loaded data and render thumbnail.
            $('#s_profile_img').attr('src', e.target.result);
        };
    
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    })

    $('#s_updata_profile').on('click', function(ev) {

        ev.preventDefault();

        // Clone to inside of submit form
        var $file1 = $('#s_pp_upload');
        var $clone = $file1.clone();
        $('#div_s_pp_img').empty();
        $file1.after($clone).appendTo($('#div_s_pp_img'));

        // Change id
        $('#div_s_pp_img input').attr('id', 's_pp_img');

        // Form submit
        $('#s_profile_form').submit();
    });
});
