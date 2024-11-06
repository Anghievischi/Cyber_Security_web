<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Pagina de Contato</title>

    <style type="text/css" media="screen">
        body {
            font-family: 'sans-serif'
        }

        .tb-info tr td {
            padding: 10px;
            border: 1px solid #ccc;
            font-size: 14px;
            font-family: sans-serif;
        }
    </style>

</head>

<body>

    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td>
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600"
                    style="border-collapse: collapse;">
                    <tr>
                        <td align="center" bgcolor="#206ab2"
                            style="padding: 40px 0 30px 0; text-transform: uppercase; font-weight: 600; font-size: 18px; font-family: sans-serif; color: #ffffff;">
                            {{ env('MAIL_FROM_NAME') }} - @yield('title')
                        </td>
                    </tr>

                    {{-- CONTENT --}}
                    @yield('content')

                    <tr>
                        <td bgcolor="#206ab2" style="padding: 30px 30px 30px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td width="75%"
                                        style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;">
                                        ® {{ env('MAIL_FROM_NAME') }}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

</body>

</html>
