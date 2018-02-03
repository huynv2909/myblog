// Applied globally on all textareas with the "autoExpand" class
$(document)
    .one('focus.autoExpand', 'textarea.autoExpand', function(){
        var savedValue = this.value;
        this.value = '';
        this.baseScrollHeight = this.scrollHeight;
        this.value = savedValue;
    })
    .on('input.autoExpand', 'textarea.autoExpand', function(){
        var minRows = this.getAttribute('data-min-rows')|0, rows;
        this.rows = minRows;
        rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 17);
        if (rows < 6) this.rows = minRows + rows;
        else this.rows = minRows + 6;
    });

// textbox Sent ask to me
$(document).ready(function(){
    $('.autoExpand').focus(function() {
        $(this).css("box-shadow", "0px 0px 5px 2px #1abc9c");
    });

    $('.autoExpand').focusout(function() {
        $(this).css("box-shadow", "-2px -1px 88px 0px rgba(0,0,0,0.17)");
    });

    $("#ask-me").submit(function(event){
        event.preventDefault();

        var content = $("#ask-content").val();

        if ($.trim(content) == "") {
            $("#notify-errors-js").fadeIn();
            setTimeout(function(){
                $("#notify-errors-js").fadeOut();
            }, 5000);

            $("#ask-content").focus();
            return false;
        }

        var url = $(this).attr("action");

        $.ajax({
            url : url,
            type : 'post',
            data : {
                content : content
            },
            success : function(result) {
                $("#ask-content").val('');

                $("#notify-success-js").fadeIn();
                setTimeout(function(){
                    $("#notify-success-js").fadeOut();
                }, 5000);
            }
        });
    })

    // I will update !
    $("#sub-form").submit(function(event){
        event.preventDefault();

        var email = $("#email").val();

        if ($.trim(email) == "") {
            $("#notify-oh-js").fadeIn();
            setTimeout(function(){
                $("#notify-oh-js").fadeOut();
            }, 5000);

            $("#email").focus();
            return false;
        }

        var url = $(this).attr("action");

        $.ajax({
            url : url,
            type : 'post',
            data : {
                email : email
            },
            success : function(result) {
                $("#email").val('');

                $("#notify-thanks-js").fadeIn();
                setTimeout(function(){
                    $("#notify-thanks-js").fadeOut();
                }, 5000);
            }
        });
    })

    // Load more comment
    var count_cmt = 0;
        
    $("div.comment").slice(0, 5).show();
      $("#load-more-cmt").on('click', function (e) {
        count_cmt = $("div.comment:visible").length;
         e.preventDefault();
         $("div.comment:hidden").slice(0, 3).slideDown(300);
         count_cmt += 3;
         // Load more by ajax
         
         if ($("div.comment:hidden").length == 0) {
            $.ajax({
              url: $(this).attr('href'),
              type: 'post',
              dataType: 'text',
              data: {
                post: $(this).data('post'),
                index: count_cmt
              },
              success: function(result) {
                $('#more-cmt').before(result);
                if (!result.trim()) {
                  $('#cmt-end-message').html('<div class="end">End</div>').fadeIn();
                  $("#load-more-cmt").fadeOut();
                }
              }
            })
            .done(function() {
              console.log("success");
            })
            .fail(function() {
              console.log("error");
            });
            
          }
      });

    // Comment
    $("#cmt-form").submit(function(event){
        event.preventDefault();

        var cmt = $("#cmt").val();

        if ($.trim(cmt) == "") {
            $("#notify-empty-js").fadeIn();
            setTimeout(function(){
                $("#notify-empty-js").fadeOut();
            }, 5000);

            $("#cmt").focus();
            return false;
        }

        count_cmt++;

        var url = $(this).attr("action");

        $.ajax({
            url : url,
            type : 'post',
            data : {
                post : $(this).data('post'),
                comment : cmt
            },
            beforeSend : function() {
                $('#submit-cmt').attr('disabled', true);
            },
            success : function(result) {
                $('#cmt-list').prepend(result);
                $("div.comment").slice(0, 1).show();
                $('html,body').animate({
                    scrollTop: $('#comment').offset().top
                }, 1000);
                $("#cmt").val('');
            },
            complete: function() {
                $('#submit-cmt').removeAttr('disabled');
            }
        });
    })
});