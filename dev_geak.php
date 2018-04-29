<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>dev_gb</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link id="css" rel="stylesheet" href="https://static.oracle.com/cdn/jet/v4.2.0/default/css/alta/oj-alta-min.css" type="text/css"/>



<style type="text/css">
  *, *:after, *:before {
  -moz-box-sizing:border-box;
  box-sizing:border-box;
  -webkit-font-smoothing:antialiased;
  font-smoothing:antialiased;
  text-rendering:optimizeLegibility;
}

html {
  font-size:75%;
}
body {
  font: 400 normal 14px/1.4 'Lato', sans-serif;
  color: #000000;
  background: #F0F0F0;
}

.clear:before,
.clear:after {
   content: ' ';
   display: table;
}

.clear:after {
    clear: both;
}
.clear {
    *zoom: 1;
}
img {
  width: 100%;
  vertical-align: bottom;
}
a, a:visited {
  color: #2895F1;
  text-decoration: none;
}
a:hover, a:focus {
  text-decoration: none;
}
a:focus {
  outline: 1;
}

/*------------------------------------*\
    Structure
\*------------------------------------*/

.wrapper {
  width: 100%;
}

.content {
  width: 736px;
  height: 560px;
  margin: 40px auto;
  border-radius: 10px;
  box-shadow: 0 15px 30px 5px rgba(0,0,0,0.4);
}

.sidebar {
  float: left;
  width: 100%;
  max-width: 296px;
  height: 100%;
  background: #F0F0F0;
  border-radius: 10px 0 0 10px;
}

.chatbox {
  position: relative;
  float: left;
  width: 100%;
  max-width: 440px;
  height: 100%;
  background: #fdfdfd;
  border-radius: 0 10px 10px 0;
  box-shadow: inset 20px 0 30px -20px rgba(0, 0, 0, 0.6);
}

/*------------------------------------*\
    Sidebar
\*------------------------------------*/


/* Contact List */

.contact-list {
  margin: 0;
  padding: 0;
  list-style-type: none;
  height: 100%;
  max-height: 460px;
  overflow-y: hidden;
}


.contact-list .person {
  position: relative;
  padding: 12px 0;
  border-bottom: 1px solid rgba(112,108,114,0.3);
  cursor: pointer;
}


.contact-list .person.active:after {
  content: '';
  display: block;
  position: absolute;
  top: 0; left: 0; bottom: 0; right: 0;
  border-right: 4px solid #0bf9c7;
  box-shadow: inset -4px 0px 4px -4px #0bf9c7;
}

.person .avatar img {
  width: 200px;
  margin-left: 25px;
  border-radius: 100%;
}

.person .avatar {
  position: relative;
  display: inline-block;
}

.person .avatar .status {
  position: absolute;
  right: 6px;
  bottom: 0;
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background: #F0F0F0;
  border: 4px solid #222; 
}

.person .avatar .status.online {
  background: #0bf9c7;
}

.person .avatar .status.away {
  background: #f4a711;
}

.person .avatar .status.busy {
  background: #f42464;
}

.person .info {
  display: inline-block;
  width: auto;
  padding: 0 0 0 10px; 
  font-size: 16px;
  font-style: italic;
}

.person .name, .person .status-msg {
  display: inline-block;
  width: auto; 
}

.person .name {
  color: #FFFFFF;
  font-size: 17px;
  font-size: 1.7rem;
  font-weight: 700;
}

.person .status-msg {
  width: 180px;
  font-size: 14px;
  font-size: 1.4rem;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}



/*------------------------------------*\
    Chatbox
\*------------------------------------*/

.chatbox {
  color: #a0a0a0;
}

/* Chatbox header */

.chatbox .person {
  position: relative;
  margin: 12px 20px 0 0;
  padding-bottom: 12px;
  border-bottom: 1px solid rgba(112,108,114,0.2);
}

.chatbox .person .avatar .status {
  border-color: #fff;
}

.chatbox .person .info {
  width: 290px;
  padding-left: 20px;
}

.chatbox .person .name {
  color: #a0a0a0;
  font-size: 19px;
  font-size: 1.9rem;
}

.chatbox .person .login-status {
  display: block;
}

/* Chatbox messages */

.chatbox-messages {
  margin: 20px 20px 0 44px;
  height: 376px;
  overflow-y: overlay;
}

.chatbox-messages .avatar {
  float: left;
}

.chatbox-messages .avatar img {
  width: 56px;
    border-radius: 50%;
}

.chatbox-messages .message-container {
  position: relative;
  float: right;
  width: 320px;
  padding-left: 10px;
}

.chatbox-messages .message {
  display: inline-block;
  max-width: 260px;
  margin-bottom: 12px;
  border: 1px solid #dedede;
  border-radius: 25px;
}

.chatbox-messages .sender .message {
  background: #fff;
}

.chatbox-messages .user .message {
  background: #dedede;
}

.chatbox-messages .sender .message-container:first-child .message {
  border-radius: 0 50px 50px 50px;
}

.chatbox-messages .user .message-container:first-child .message {
  border-radius: 50px 0 50px 50px;
}

.chatbox-messages .message p {
  margin: 14px 24px;
  font-size: 11px;
  font-size: 1.1rem;
}

.chatbox-messages .delivered {
  position: absolute;
  top: 0;
  right: 0;
  font-size: 10px;
  font-size: 1.0rem;
}

/* Chatbox message form */

.message-form-container {
  width: 400px;
  height: 74px;
  position: absolute;
  left: 0;
  bottom: 0;
  margin: 0 20px;
  border-top: 1px solid rgba(112,108,114,0.2);
}

.message-form textarea {
  width: 290px;
  margin: 6px 0 0 24px;
  resize: none;
  border: 0;
  color: #a0a0a0;
  outline: 0;
}

.message-form textarea::-webkit-input-placeholder { color: #a0a0a0; }
.message-form textarea::-moz-placeholder { color: #a0a0a0;  }
.message-form textarea::-ms-placeholder { color: #a0a0a0; }
.message-form textarea:-moz-placeholder { color: #a0a0a0; }

.message-form textarea:focus::-webkit-input-placeholder { color: transparent; }
.message-form textarea:focus::-moz-placeholder { color: transparent;  }
.message-form textarea:focus::-ms-placeholder { color: transparent; }
.message-form textarea:focus:-moz-placeholder { color: transparent; }

/*------------------------------------*\
    Contacts List - Custom Scrollbar
\*------------------------------------*/
</style>
</head>


                <div class="content">

                  <div class="sidebar">

                <br><br>

                    <div class="contacts">

                   <li class="person">
                          <span class="avatar">
                            <img src="http://res.cloudinary.com/devgeaks/image/upload/v1523731563/2017-03-02_08.30.03.jpg" alt="Sacha Griffin" />
                            <span class="status online"></span>
                          </span>
                          <span class="info">
                            <br/>
                            “My name is Akinduko Olugbenga.<br/><br/>I enjoy meeting new people and finding ways to help them have an uplifting experience.<br/><br/>I have had a variety of Software development opportunities, through which I was able to solve real life problems.<br/><br/>Would you like to reach me? Drop a message” 
                        </span>
                        </li>
                      </ul><!-- /.contact-list -->

                    </div><!-- /.contacts -->

                  </div><!-- /.sidebar -->

                  <div class="chatbox">

                    <div class="person">
                      <span class="info">
                       <span class="login-status">Online    | <?php
            echo "" . date("h:i:a");
            ?>, <?php
            
            $ip=$_SERVER['REMOTE_ADDR'];
            $reply = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
            echo var_export('you are in '. $reply['geoplugin_countryName'] .' in '. $reply['geoplugin_regionName']);
            ?></span>
                        
                      </span>
                    </div><!-- /.person -->
                <script>
            $(document).ready(function(){
            var hiddenDiv = $(".messages");
            var show = function() {
            hiddenDiv.fadeIn();
            play();

            };

            hiddenDiv.hide();
            setTimeout(show, 2000);


            });
                </script>
                    <div class="chatbox-messages" >
                      <div class="messages clear"><span class="avatar"><img src="https://store.storeimages.cdn-apple.com/4974/as-images.apple.com/is/image/AppleInc/aos/published/images/H/LJ/HLJ02/HLJ02?wid=572&hei=572&fmt=jpeg&qlt=95&op_usm=0.5,0.5&.v=1503083822390" alt="Support" /></span><div class="sender"><div class="message-container"><div class="message"><p>
                      Welcome to Dev_GB's profile page <i class="em em-sunglasses"></i> How can i be of help to you? <i class="em em-smiley"></i></p>
                              <p>Tips: Type "commands' to see FAQ.<br>To Train: train#Question#Answer#Password</p>
                              </div><span class="delivered">
                                <?php echo "" . date("h:i:a");?>
                                  
                                </span>
                              </div>
                    </div>
                    </div>
                            <div class="push"></div>

                    </div><!-- /.chatbox-messages -->


                    <div class="message-form-container">

                      <script type="text/javascript">

                                  $(document).ready(function(){
               $('#msg').keypress(
                function(e){
                    if (e.keyCode == 13) {
                        e.preventDefault();
                        var msg = $(this).val();
                  $(this).val('');
                        if(msg !== '' )
                  $('<div class="messages clear"><div class="user"><div class="message-container"><div class="message"><p>'+msg+'</p></div><span class="delivered"><?php
            echo "" . date("h:i:a");
            ?></span></div></div><!-- /.user --></div>').insertBefore('.push');
                  $('.chatbox-messages').scrollTop($('.chatbox-messages')[0].scrollHeight);

                  formSubmit();

                    }

                function formSubmit(){
                var message = $("#msg").val();
                    var dataString = 'msg=' + msg;
                    jQuery.ajax({
                        url: "/profiles/juliet.php",
                        data: dataString,
                        type: "POST",
                         cache: false,
                             success: function(response) {
            setTimeout(function(){
                     $(' <div class="messages clear"><span class="avatar"><img src="http://res.cloudinary.com/julietezekwe/image/upload/v1523964204/robot.jpg"alt="Debby Jones" /></span><div class="sender"><div class="message-container"><div class="message"><p>'+response+'</p></div><span class="delivered"><?php
            echo "" . date("h:i:a");
            ?></span></div><!-- /.message-container -</div><!-- /.sender --></div><!-- /.messages --></div>').insertBefore('.push');
                  $('.chatbox-messages').scrollTop($('.chatbox-messages')[0].scrollHeight);
                  play();
                },  1000);

                  },
                        error: function (){}
                    });
                return true;
                }
                    });
            });
             
            </script>

                      <form class="message-form" method="POST" action="" >
                        <textarea id="msg" name="msg" value=""  placeholder="Type a message here..."></textarea>
                          </form><!-- /.search-form -->


                    </div><!-- /.message-form-container -->

                  </div><!-- /.chatbox -->


        </div>
      </div>
      <!-- /.row -->

    

    </div>

</html>
