
$(document).ready(() => {

 
    var timerId = setInterval(loadNewMessages(), 1000);
    loadNewMessages();
});


   function loadNewMessages(){
        var timeLastMessage = null;
        var messages = $('.dateMsgSent');
        if(messages.length){
            timeLastMessage = messages[0].attributes['dateSent'];
        }
        console.log(timeLastMessage);
    // console.log(messages);
        
         $.ajax({
             type: "POST",
             url: "http://localhost/api_chat/interface.php",
             data:  {
                 time: timeLastMessage
             },
             dataType: "json",
             success: function(response){
                 console.log(response);
                 console.log(JSON.parse(response));
             },
             fail: function(error){
                 console.log(error);
                 console.log(JSON.parse(error));
             }
         });
   }