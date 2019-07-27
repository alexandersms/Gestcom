$('#add-image').click(function(){
    const index = +$('#widgets-counter').val(); // length pour connaitre la longeur du tableau qui m'a été renvoyé
    
    const tmpl = $('#annonce_images').data('prototype').replace(/__name__/g, index);

    $('#annonce_images').append(tmpl);

    $('#widgets-counter').val(index + 1);

    deleteButtons();

});

function deleteButtons() {
    $('button[data-action="delete"]').click(function () {
       const target = this.dataset.target;

       $(target).remove();
        
    });
}

function upDateCounter() 
{
    const count = +$('#ad_images div.form-group').length;
    $('#widgets-counter').val(count);   
}

upDateCounter();

deleteButtons();