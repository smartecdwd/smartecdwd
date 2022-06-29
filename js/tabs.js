$(function() {
    
    $('#validate').validate({
        ignore: [],
        errorPlacement: function() {},
        submitHandler: function() {
            alert('Successfully saved!');
        },
        invalidHandler: function() {
            setTimeout(function() {
                $('.nav-tabs a small.required').remove();
                var validatePane = $('.tab-content.tab-validate .tab-pane:has(input.error)').each(function() {
                    var id = $(this).attr('id');
                    $('.nav-tabs').find('a[href^="#' + id + '"]').append(' <small class="required">***</small>');
                });
            });            
        },
        rules: {
            name: 'required',
            email: {
                required: true,
                email: true
            },
            zipcode: 'required',
            address: 'required',
            city: 'required'
        }
    });
    
});