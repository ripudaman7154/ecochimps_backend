<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <style type="text/css">
        body {
            Margin: 0;
            padding: 0;
            background: #f6f9fc;
        }
        table {
            border-spacing: 0;
        }
        td {
            padding: 0;
        }
        img {
            border: 0;
        }
        @media screen and (max-width: 600px) {
        }
        @media screen and (max-width: 400px) {
        }
    </style>
</head>
<body>
<center style="width: 100%;table-layout: fixed;background-color: #f6f9fc;">
    <div style="max-width: 600px;background-color: #FFFFFF;">
        <table style="Margin:0 auto;width: 100%;max-width:600px;font-family: sans-serif;color: #4a4a4a;" align="center">
            <tr>
                <td style="background-color: #6EC7E0;padding:20px 10px;text-align: center;">
                    <!-- <h2
                    style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;float:left;color:black;padding:6px 6px 6px 30px; margin-left:-10px;margin-top:5%;font-size: 15px;text-transform: uppercase;"
                    >Email Confirmation</h2> -->
                    <a href="https://kedebah.com"><img src="https://1.bp.blogspot.com/-OG0Bh3fAWbE/YL-ks9C2wZI/AAAAAAAAFxo/gaQOxrvxUKIPqs4Wdm-j7ko5aJUMoa6JACLcBGAsYHQ/s320/kedebah.jpeg" alt="kedebah-logo" title="kedebah" style="height: 50px;width: auto;"></a>
                </td>
            </tr>

            <tr>
                <td style="padding:0px 20px;">
                    <p style="font-size: 14px; color: #25383C; font-weight: 400;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                        <span style="font-weight: 700;font-size: 18px;">Hello {{$user->name }},<br/> <br/> </span>
                        You have requested to reset your password, kindly click on the button below to reset your password.
                    </p>
                </td>
            </tr>

            <tr>
                <td style="padding: 30px;text-align: center;">
                    <a style="cursor:pointer; background-color: white; border:3px solid #6EC7E0;text-decoration:none;color: #6EC7E0;font-size: 18px;font-weight: bold;padding: 12px 22px;border-radius: 15px;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"

                       href="{{route('show.password.reset.form')."?token={$token}&tenant={$tenant->id}"}}" target="_blank">Reset Password

                    </a>
                </td>
            </tr>

            <tr>
                <td style="padding:0px 20px;">
                    <p style="font-size: 14px; color: #25383C; font-weight: 400;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                        or you may copy and paste the link below in your browser to reset your password
                    </p>
                </td>
            </tr>

            <tr >
                <td style="padding:0px 20px;">
                    <a href="{{route('show.password.reset.form')."?token={$token}&tenant={$tenant->id}"}}" target="_blank" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">{{env('show.password.reset.form')."?token={$token}&tenant={$tenant->id}"}}</a></td>
            </tr>
            <tr>
                <td style="padding:0px 20px;">
                    <p style="font-size: 14px; color: #25383C; font-weight: 400;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                        Please ignore this mail if you didn't perform this operation.
                    </p>
                </td>
            </tr>
            <tr>
                <td style="padding:0px 20px;">
                    <p style="font-size: 14px; color: #25383C; font-weight: 400;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                        Thanks,<br/>
                        <span style="font-weight: 700;">Kedebah ERP</span>
                    </p>
                </td>
            </tr>
        </table>
    </div>
</center>
</body>
</html>
