           
            
             
                <?php    $userId = $userRow['userId'];  ?>  
    
                <script>
                function openForm(x) {

               
                   var xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                      var x = document.getElementById("messages").innerHTML = this.responseText;
                      //document.getElementById('x').style.color = "blue";
                      //document.getElementById('messagebody').scrollTop =  document.getElementById('messagebody').scrollHeight
                    }
                  };
                  xhttp.open("GET","chat_typing.php?userId=<?php echo $userRow['userId'] ?>&message_id="+x,true);
                  xhttp.send();
                
                 
                    // document.getElementById("chat").style.display = "none";
                    // document.getElementById("myForm").style.display = "block";
                   
                  }


                  


                  $(document).ready(function(){ 
                   // fetch_data_of_chat();
                      $('#mgsform').on('submit', function(e){
                    
                        // var mess = $('#mess').val(""); 
                        // alert(mess);

                           e.preventDefault();   
                           $.ajax({  
                                 url:"message_insert.php?to="+document.getElementById('to').value+"&mess="+document.getElementById('mess').value,
                                method:"POST",  
                                data:new FormData(this),  
                                contentType:false,  
                                //cache:false,  
                                processData:false,  
                                success:function(data)  
                                {   
                                $('#to').val(data);   
                                $('#mess').val("");  
                                $('#imgfile').val("");
                                $('#demos').html(data); 
                                fetch_data_of_chat();
                                // fetch_reciever_message();
                               // alert('sss');

                               // $('#streamTitle').div().ajax.reload();
                           
                               
                                              }
                                         })  
                                    });   
                               });  


                       
                        function fetch_data_of_chat(){

                          var message_id = $('#to').val();
                          var userId = <?php echo  $userId;  ?> 
                          
                          $.ajax({
                            url: 'chat_typing.php',
                            type: 'GET',
                            async: false,
                            data:{
                              message_id: message_id,
                              userId: userId,
                            },
                            success: function(response){
                               //alert('ssss');
                                  $('#messages').html(response);
                              //$("#messages").scrollTop($("#messages")[0].scrollHeight);
                              document.getElementById('messagebody').scrollTop =  document.getElementById('messagebody').scrollHeight
                              
                            }
                          });
                           }

                            function fetch_reciever_message(){

                          var userId = <?php echo  $userId;  ?> 
                          
                          $.ajax({
                            url: 'chat_typing.php',
                            type: 'GET',
                            async: false,
                            data:{
                              userId: userId,
                            },
                            success: function(response){
                               //alert('ssss');
                                  $('#messages').html(response);
                              //$("#messages").scrollTop($("#messages")[0].scrollHeight);
                              document.getElementById('messagebody').scrollTop =  document.getElementById('messagebody').scrollHeight
                              
                            }
                          });
                           }
           

       





                  // function closeForm() {

                  // if(document.getElementById('chat'))
                  //  {
                  //   document.getElementById("chat").style.display = "block";
                  //   document.getElementById("myForm").style.display = "none";
                  //  }
                  //  else
                  //  {
                  //   document.getElementById("myForm").style.display = "none";
                  //  } 
                    
                  //    }

             
                  </script> 
                </script>


                    <script>
          

                    function closestatus() {

                  if(document.getElementById('statuss'))
                   {
                    document.getElementById("statuss").style.display = "block";
                    document.getElementById("statusupdate").style.display = "none";
                   }
                   else
                   {
                    document.getElementById("statuss").style.display = "none";
                   } 
                    
                     }
                  </script>

            


                       <script>
                function fetchchat(x) {
               var message_id = document.getElementById('to').value;
             // alert(message_id);
                    var xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                      document.getElementById("chatdatafetch").innerHTML = this.responseText;
                      
                    }
                  };
                  xhttp.open("GET","chat_data_box.php?message_id="+x,true);
                  xhttp.send();
                


                }


                // $(document).ready(function(){ 
                //   setInterval(function(){ 
                  
                //   fetchchat();
                  
                //   }, 1000);
                // });
                </script>

             <script>
 
            </script>

                 <script>
                function chatting_system() {
                  var xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                      document.getElementById("chatting_system").innerHTML = this.responseText;
                      
                    }
                  };
                  xhttp.open("GET", "chatting_system.php", true);
                  xhttp.send();
                }

                $(document).ready(function(){ 
                  setInterval(function(){ 
                  
                  chatting_system();
                  
                  }, 1000);
                });
                </script>

     


                <script>
                function loadDocs() {
                  var xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                      document.getElementById("find_friend").innerHTML = this.responseText;
                      
                    }
                  };
                  xhttp.open("GET", "request.php", true);
                  xhttp.send();
                }

                $(document).ready(function(){ 
                  setInterval(function(){ 
                  
                  loadDocs();
                  
                  }, 1000);
                });



                function sendrequests(x) {
                  //alert('ddd');

                  var xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                      document.getElementById("btn").innerHTML = this.responseText;
                        $('#submit').attr('disabled', false);
                    }
                  };
                  xhttp.open("GET","sendrequest.php?request="+x,true);
                  xhttp.send();
                }


                </script>

                <script>
                function confirmrequests(x) {
                  var xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                      document.getElementById("btnn").innerHTML = this.responseText;
                      
                    }
                  };
                  xhttp.open("GET","confirm.php?confirm="+x,true);
                  xhttp.send();
                }

                $(document).ready(function(){ 
                  setInterval(function(){ 
                  
                  confirmrequests();
                  
                  }, 1000);
                });
                </script>



                


                 <script>
                function loadDocss() {
                  var xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                      document.getElementById("requent_send").innerHTML = this.responseText;
                      
                    }
                  };
                  xhttp.open("GET", "accept.php", true);
                  xhttp.send();
                }

                $(document).ready(function(){ 
                  setInterval(function(){ 
                  
                  loadDocss();
                  
                  }, 1000);
                });

                
                </script>

                 <script>
                function chatbox() {
                  var xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                      document.getElementById("chat").innerHTML = this.responseText;
                      
                    }
                  };
                  xhttp.open("GET", "chat.php", true);
                  xhttp.send();
                }

                $(document).ready(function(){ 
                  setInterval(function(){ 
                  
                  chatbox();
                  
                  }, 1000);
                });
                </script>

                 <script>
                function chatboxStatus() {
                  var xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                      document.getElementById("statuss").innerHTML = this.responseText;
                      
                    }
                  };
                  xhttp.open("GET", "status.php", true);
                  xhttp.send();
                }

                $(document).ready(function(){ 
                  setInterval(function(){ 
                  
                  chatboxStatus();
                  
                  }, 1000);
                });


                      function statusupdate(x) {

               
                   var xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                      var x = document.getElementById("statusview").innerHTML = this.responseText;
                      document.getElementById('x').style.color = "blue";
                      
                    }
                  };
                  xhttp.open("GET","status_update.php?status_id="+x,true);
                  xhttp.send();
                

                   

                 
                    document.getElementById("statuss").style.display = "none";
                    document.getElementById("statusupdate").style.display = "block";
                   

                  }


                  
           $(document).ready(function(){ 
            
              $('#mgsformss').on('submit', function(e){
              
                   e.preventDefault();   
                   $.ajax({  
                         url:"update.php?mid="+document.getElementById('mid').value,
                        method:"POST",  
                        data:new FormData(this),  
                        contentType:false,  
                        //cache:false,  
                        processData:false,  
                        success:function(data)  
                        {   
                          
                        $('#mid').val(data);  
                        $('#imgfile').val("");
                        $('#update').html(data); 

                       // $('#streamTitle').div().ajax.reload();
                   
                       
                                      }
                                 })  
                            });   
                       }); 
                </script>



                  <script type="text/javascript">
                  (function($) {
                    $(document).ready(function() {
                        var $chatbox = $('.chatbox'),
                            $chatboxTitle = $('.chatbox__title'),
                            $chatboxTitleClose = $('.chatbox__title__close'),
                            $chatboxCredentials = $('.chatbox__credentials');
                        $chatboxTitle.on('click', function() {
                            $chatbox.toggleClass('chatbox--tray');
                        });
                        $chatboxTitleClose.on('click', function(e) {
                            e.stopPropagation();
                            $chatbox.addClass('chatbox--closed');
                        });
                        $chatbox.on('transitionend', function() {
                            if ($chatbox.hasClass('chatbox--closed')) $chatbox.remove();
                        });
                        
                    });
                })(jQuery);
                  </script>






<script>
        
 // function displayChat(){
 //  alert('fhff');
 //    id = <?php echo $mess; ?>;
 //    $.ajax({
 //      url: 'fetch_chat.php',
 //      type: 'POST',
 //      async: false,
 //      data:{
 //        id: id,
 //        fetch: 1,
 //      },
 //      success: function(response){
 //        $('#chat_area').html(response);
 //        // $("#chat_area").scrollTop($("#chat_area")[0].scrollHeight);
 //      }
 //    });
 //     }

 //       $(document).ready(function(){ 
 //                  setInterval(function(){ 
                  
 //                  displayChat();
                  
 //                  }, 1000);
 //                });

     
</script>

<script type="text/javascript">

$(document).ready(function(){

  displayChat();
 
     $(document).on('click', '#send_msg', function(){

      id = <?php echo $to; ?>;
      if($('#chat_msg').val() == ""){
        //alert('Please write message firsts');
      }else{
        var msg = $('#chat_msg').val();
        // var sender = $('#sender').val();
        $.ajax({
          type: "POST",
          url: "message_save.php",
          data: {
            msg: msg,
            id: id,
            // sender: sender,
          },
          success: function(){
            $('#chat_msg').val("");
             alertMe();
            displayChat();
         
          }
        });
      }
     });
     });


function displayChat(){
    id = <?php echo $to; ?>;
    session = <?php echo $xxx; ?>;
    $.ajax({
      url: 'fetch_message.php',
      type: 'POST',
      async: false,
      data:{
        id: id,
        session: session,
        fetch: 1,
      },
      success: function(response){
        $('#chat_area').html(response);
        //$("#chat_area").scrollTop($("#chat_area")[0].scrollHeight);
       
      }
    });
     }
