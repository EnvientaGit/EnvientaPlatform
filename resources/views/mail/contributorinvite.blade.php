<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Makerspace project invite</title>
    <!-- Forked from a design by https://github.com/kaytcat -->
    <style type="text/css">
    /* Take care of image borders and formatting */
    img {
    max-width: 600px;
    outline: none;
    text-decoration: none;
    -ms-interpolation-mode: bicubic;
    }
    a {
    text-decoration: none;
    border: 0;
    outline: none;
    color: #777777;
    }
    a img {
    border: none;
    }
    /* General styling */
    td, h1, h2, h3  {
    font-family: Helvetica, Arial, sans-serif;
    font-weight: 400;
    }
    td {
    text-align: center;
    }
    body {
    -webkit-font-smoothing:antialiased;
    -webkit-text-size-adjust:none;
    width: 100%;
    height: 100%;
    color: #37302d;
    background: #ffffff;
    font-size: 16px;
    }
    table {
    border-collapse: collapse !important;
    }
    .headline {
    color: #666666;
    font-size: 32px;
    }
    .force-full-width {
    width: 100% !important;
    }
    </style>
    <style type="text/css" media="screen">
    @media screen {
    /*Thanks Outlook 2013! http://goo.gl/XLxpyl*/
    td, h1, h2, h3 {
    font-family: 'Helvetica Neue', 'Arial', 'sans-serif' !important;
    }
    }
    </style>
    <style type="text/css" media="only screen and (max-width: 480px)">
    /* Mobile styles */
    @media only screen and (max-width: 480px) {
    table[class="w320"] {
    width: 320px !important;
    }
    }
    </style>
  </head>
  <body class="body" style="padding:0; margin:0; display:block; background:#ffffff; -webkit-text-size-adjust:none" bgcolor="#ffffff">
    <table align="center" cellpadding="0" cellspacing="0" width="100%" height="100%" >
      <tr>
        <td align="center" valign="top" bgcolor="#ffffff"  width="100%">
          <center>
          <table style="margin: 0 auto;" cellpadding="0" cellspacing="0" width="600" class="w320">
            <tr>
              <td align="center" valign="top">
                <table style="margin: 0 auto; border-bottom: 1px solid #dddddd;" cellpadding="0" cellspacing="0" width="100%">
                  <tr>
                    <td style="font-size: 30px; text-align:center;">
                      <img src="http://platform.envienta.org/img/logo_mail.png" alt="Logo" title="Logo" style="display:block; margin: 1em auto;" width="300" />
                    </td>
                  </tr>
                </table>
                <table style="margin: 0 auto;" cellpadding="0" cellspacing="0" width="100%">
                  <tr style="height: 4em;">
                    <td>
                      <font style="font-size: 21px;">
                        Dear {{$user->realname}},
                      </font>
                      <br />
                      <font style="font-size: 18px;">
                        You are receiving this email, because you are invited to project: "{{$projectName}}""
                      </font>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <font style="font-size: 18px;">
                        Project url: <a href="http://platform.envienta.org/project/{{$projectUrl}}" target="_blank">http://platform.envienta.org/project/{{$projectUrl}}</a><br/>
                      </font>
                    </td>
                  </tr>
                </table>
                <table style="margin: 0 auto;" cellpadding="0" cellspacing="0" class="force-full-width" bgcolor="#eeeeee" style="margin: 0 auto">
                  <tr>
                    <td style="color:#aaaaaa; font-size:11px; line-height: 20px;">
                      <font style="line-height: 10px;"><br></font>
                       <font style="font-size: 11px;"><a href="https://www.facebook.com/envienta/">Facebook</a> &nbsp;
	                       <a href="https://twitter.com/envienta">Twitter</a> &nbsp;
	                       <a href="http://envienta.co/">Website</a> &nbsp;
	                       <a href="http://envienta.co/help">Help</a> &nbsp;
	                       <a href="http://envienta.co/community">Community</a>
                       </font>
                       <br>Sent by Asociación ENVIENTA C/ Lanzarote Duplex Eurovillas No. 15. 35100 San Fernando De Maspalomas<br>
                    </td>
                  </tr>
                  <tr>
                    <td style="color:#aaaaaa; font-size:10px;">
                      <font style="line-height: 1px;"><br></font>
                      Don't reply to this email.<br>
                      <font style="line-height: 10px;"><br></font>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
          </center>
        </td>
      </tr>
    </table>
    </body>
</html>
