// $("#save").click(function (e) {
    
//     console.log(`${login} ${loginsec} ${message}`)
//   });


  //Отправка запроса БД
  $(function($){
  	$('#save').click( function(e){
        login = $(this).closest("#exampleModal").find("#recipient-name").val()
        loginsec = $(this).closest("#exampleModal").find("#recipient-lastname").val()
        message = $(this).closest("#exampleModal").find("#message-text").val()
                  $.ajax({
                      url: '/ajax/save.php',
                      method: 'post',
                      dataType: 'html',
                      data: {login, loginsec, message},
                          success: function(data){
                          alert(data)
                          location.reload()
                      }
                  });
  	});
  });

  // $.ajax({
  //     url: '/ajax/read.php',
  //     method: 'post',
  //     dataType: 'json',
  //         success: function(data){
  //             console.log(data[0])
  //     //         for
  //     //         code clone
  //     //  $('body').append(data)
  //     }
  // });