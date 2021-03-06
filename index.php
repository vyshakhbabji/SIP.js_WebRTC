<!DOCTYPE html>
<html>
    <head>
        <title>SIP Phone by Ghanshyam Katriya</title>
        <meta content="width=device-width, initial-scale=0.5" name="viewport" />
        <link rel="stylesheet" href="bootstrap.css" media="screen" />
        <style>
            textarea {
                resize: none;
            }
        </style>
    </head>

    <body>
    <div class="container">
        <div class="row" style="min-height:150px;">
            <div class="col-md-4 col-md-offset-4">
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="well">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>SIP Phone</h3>
                            <span id="status"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-inline" role="form">                                
                                    <input id="number" type="text" placeholder="Enter phone number" class="search-query form-control">
                                    <a id="dial_num" class="btn btn-primary">
                                        Dial
                                    </a>
                                <a href='' id="settings" class="btn btn-default" data-toggle="modal" data-target="#myModal">
                                        SIP
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="oncall">
                        <div class="col-md-12">
                                <video id="remoteVideo" width="320px;"></video>
                        </div>
                        <div class="col-md-12">
                                <a id="hold" class="btn btn-default">Hold</a>
                                <a id="unhold" class="btn btn-default">Unhold</a>
                                <a id="mute" class="btn btn-default">Mute</a>
                                <a id="unmute" class="btn btn-default">Unmute</a>
                        </div>
                        <div class="col-md-12">
                            <div class="form-inline" role="form"> 
                                <input id="dtmf" type="text" placeholder="Enter DTMF Number" class="search-query form-control">
                                <a id="send_dtmf" class="btn btn-primary">
                                        Send DTMF
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="oncall_msg">
                        <div class="col-md-12">
                                <div class="form-inline" role="form">  
                                        <div id="messages" class="search-query form-control" style="width:320px;height:160px;overflow:scroll;" ></div>
                                </div>
                        </div>
                        <div class="col-md-12">
                                <input id="msg_text" type="text" placeholder="Enter your message" class="search-query form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">SIP Settings</h4>
          </div>
          <div class="modal-body">

            <form class="form-horizontal" role="form">
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="string" class="form-control" id="yourname" placeholder="Display Name">
                </div>
              </div>
              <div class="form-group">
                <label for="uri" class="col-sm-2 control-label">URI</label>
                <div class="col-sm-10">
                  <input type="string" class="form-control" id="sipuri" placeholder="SIP Server">
                </div>
              </div>
              <div class="form-group">
                <label for="uri" class="col-sm-2 control-label">Auth User</label>
                <div class="col-sm-10">
                  <input type="string" class="form-control" id="authname" placeholder="Auth User" >
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="col-sm-2 control-label">SIP Password</label>
                <div class="col-sm-10">
                  <input type="string" class="form-control" id="password" placeholder="SIP Password">
                </div>
              </div>
              <div class="form-group">
                <label for="wsServer" class="col-sm-2 control-label">WS server</label>
                <div class="col-sm-10">
                  <input type="string" class="form-control" id="wssuri" placeholder="wss://sip.server.com:7443">
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="saveSettings">Save</button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="incomingCallModal" tabindex="-1" role="dialog" aria-labelledby="incomingCallModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Incoming call</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="answerCall">Answer</button>
            <button type="button" class="btn btn-danger" id="rejectCall">Reject</button>
          </div>
        </div>
      </div>
    </div>
    <script src="jquery.js"></script>
    <script src="bootstrap.js"></script>
    <script src="sip.js"></script>
    <script src="sipjs_demo.js"></script>
    </body>
</html>
