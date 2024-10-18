$( document ).ready(function() {
        
    // -------------------------------------------------------------
    // Contact Form
    // -------------------------------------------------------------

    $('#contactForm').on('submit',function(e){

        e.preventDefault();

        var $action = $(this).prop('action');
        var $data = $(this).serialize();
        var $this = $(this);

        $this.prevAll('.alert').remove();

        $.post( $action, $data, function( data ) {

            if( data.response=='error' ){

                $this.before( '<div class="alert alert-danger">'+data.message+'</div>' );
            }

            if( data.response=='success' ){

                $this.before( '<div class="alert alert-success">'+data.message+'</div>' );
                $this.find('input, textarea').val('');
            }

        }, "json");

    });
});
function ReadMore(event)
{
    var toggle = $(event.toElement).text();
    var divid="#"+ $(event.toElement).attr('div-id')
    if(toggle=="Read More")
    {
        $(divid).show(500);
        toggle = "Show Less";
    }
    else
    {
        $(divid).hide(500);
        toggle="Read More";
    }
    $(event.toElement).text(toggle);

}

function doApiCall(urlpost, dataObject)
    {
        //post with ajax
        $.ajax({
            type:"POST",
            url: urlpost,
            data: JSON.stringify(dataObject),
            ContentType:"application/json",

            success:function(data){
                console.log(data);
                //alert(data.message);
                if(data.message != null && data.message.toLowerCase().indexOf('success')>=0)
                {
                    $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
                        $("#success-alert").slideUp(500);
                      });
                }
            },
            error:function(){
                alert('There is service error');
            }

        });
    }