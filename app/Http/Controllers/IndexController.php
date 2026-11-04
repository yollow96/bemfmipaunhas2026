<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Mail\kirimEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Blog;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();
        $carousels = Carousel::orderBy('waktu_pelaksanaan', 'asc')->get();

        return view('index', compact('blog', 'carousels'));
    }

    public function submitForm(Request $request)
    {
        // Validasi data formulir jika diperlukan
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
            'phone' => 'required|string',
        ]);

        // Ambil data dari formulir
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        $phone = $request->input('phone');

        // Format pesan dengan menyertakan nomor telepon
        $isi_email = '
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
    xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <!--[if gte mso 9]>
   <xml>
    <o:OfficeDocumentSettings>
     <o:AllowPNG />
     <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
   </xml>
  <![endif]-->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="format-detection" content="date=no" />
    <meta name="format-detection" content="address=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="x-apple-disable-message-reformatting" />
    <!--[if !mso]><!-->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,700,700i" rel="stylesheet" />
    <!--<![endif]-->
    <title>*|MC:SUBJECT|*</title>
    <!--[if gte mso 9]>
   <style type="text/css" media="all">
    sup {
     font-size: 100% !important;
    }
   </style>
  <![endif]-->

    <style type="text/css" media="screen">
        /* Linked Styles */
        body {
            padding: 0 !important;
            margin: 0 !important;
            display: block !important;
            min-width: 100% !important;
            width: 100% !important;
            background: #360000;
            -webkit-text-size-adjust: none;
        }

        a {
            color: #66c7ff;
            text-decoration: none;
        }

        p {
            padding: 0 !important;
            margin: 0 !important;
        }

        img {
            -ms-interpolation-mode: bicubic;
            /* Allow smoother rendering of resized image in Internet Explorer */
        }

        .mcnPreviewText {
            display: none !important;
        }

        .cke_editable,
        .cke_editable a,
        .cke_editable span,
        .cke_editable a span {
            color: #000001 !important;
        }

        /* Mobile styles */
        @media only screen and (max-device-width: 480px),
        only screen and (max-width: 480px) {
            .mobile-shell {
                width: 100% !important;
                min-width: 100% !important;
            }

            .text-header,
            .m-center {
                text-align: center !important;
            }

            .center {
                margin: 0 auto !important;
            }

            .container {
                padding: 20px 10px !important;
            }

            .td {
                width: 100% !important;
                min-width: 100% !important;
            }

            .m-br-15 {
                height: 15px !important;
            }

            .p30-15 {
                padding: 30px 15px !important;
            }

            .m-td,
            .m-hide {
                display: none !important;
                width: 0 !important;
                height: 0 !important;
                font-size: 0 !important;
                line-height: 0 !important;
                min-height: 0 !important;
            }

            .m-block {
                display: block !important;
            }

            .fluid-img img {
                width: 100% !important;
                max-width: 100% !important;
                height: auto !important;
            }

            .column,
            .column-top,
            .column-empty,
            .column-empty2,
            .column-dir-top {
                float: left !important;
                width: 100% !important;
                display: block !important;
            }

            .column-empty {
                padding-bottom: 10px !important;
            }

            .column-empty2 {
                padding-bottom: 30px !important;
            }

            .content-spacing {
                width: 15px !important;
            }
        }
    </style>
</head>

<body class="body"
    style="
            padding: 0 !important;
            margin: 0 !important;
            display: block !important;
            min-width: 100% !important;
            width: 100% !important;
            background: #360000;
            -webkit-text-size-adjust: none;
        ">
    <!--*|IF:MC_PREVIEW_TEXT|*-->
    <!--[if !gte mso 9]><!-->
    <span class="mcnPreviewText"
        style="
                display: none;
                font-size: 0px;
                line-height: 0px;
                max-height: 0px;
                max-width: 0px;
                opacity: 0;
                overflow: hidden;
                visibility: hidden;
                mso-hide: all;
            ">*|MC_PREVIEW_TEXT|*</span>
    <!--<![endif]-->
    <!--*|END:IF|*-->
    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#364d59">
        <tr>
            <td align="center" valign="top">
                <table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
                    <tr>
                        <td class="td container"
                            style="
                                    width: 650px;
                                    min-width: 650px;
                                    font-size: 0pt;
                                    line-height: 0pt;
                                    margin: 0;
                                    font-weight: normal;
                                    padding: 55px 0px;
                                ">
                            <!-- Article / Full Width Image + Title + Copy + Button -->
                            <div mc:repeatable="Select" mc:variant="Article / Full Width Image + Title + Copy + Button">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td style="padding-bottom: 10px">
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0"
                                                bgcolor="#4b0e0e">
                                                <tr>
                                                    <td class="fluid-img"
                                                        style="
                                                                font-size: 0pt;
                                                                line-height: 0pt;
                                                                text-align: left;
                                                            ">
                                                        <img src="https://fastly.4sqi.net/img/general/600x600/12681378_FxghK8SJJCU3TUTi8Ygsrh_Lj9rFXX4ftP1Is4Bsq0E.jpg"
                                                            width="650" height="366" mc:edit="image_2"
                                                            style="max-width: 650px" border="0" alt="" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p30-15" style="padding: 50px 30px">
                                                        <table width="100%" border="0" cellspacing="0"
                                                            cellpadding="0">
                                                            <tr>
                                                                <td class="h3 pb20"
                                                                    style="
                                                                            color: #ffffff;
                                                                            font-family:  Arial, sans-serif;
                                                                            font-size: 25px;
                                                                            line-height: 32px;
                                                                            text-align: left;
                                                                            padding-bottom: 20px;
                                                                        ">
                                                                    <div mc:edit="text_5">
                                                                        FROM: ' . $name . '
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text pb20"
                                                                    style="
                                                                            color: #ffffff;
                                                                            font-family: Arial, sans-serif;
                                                                            font-size: 14px;
                                                                            line-height: 26px;
                                                                            text-align: left;
                                                                            padding-bottom: 20px;
                                                                        ">
                                                                    <div mc:edit="text_6">
                                                                        Nomor telephon: ' . $phone . '<br />
                                                                        Email: ' . $email . '<br />
                                                                    </div>
                                                                    <div mc:edit="text_6">
                                                                        <br />
                                                                        Pesan: ' . nl2br($message) . '
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <!-- Footer -->
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td class="p30-15 bbrr"
                                        style="
                                                padding: 50px 30px;
                                                border-radius: 0px 0px 26px 26px;
                                            "
                                        bgcolor="#4b0e0e">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td class="text-footer1 pb10"
                                                    style="
                                                            color: #c1cddc;
                                                            font-family:  Arial, sans-serif;
                                                            font-size: 16px;
                                                            line-height: 20px;
                                                            text-align: center;
                                                            padding-bottom: 10px;
                                                        ">
                                                    <div mc:edit="text_36">Himatika FMIPA Unhas</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-footer2"
                                                    style="
                                                            color: #8297b3;
                                                            font-family: Arial, sans-serif;
                                                            font-size: 12px;
                                                            line-height: 26px;
                                                            text-align: center;
                                                        ">
                                                    <div mc:edit="text_37">Universitas hasanuddin</div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <!-- END Footer -->
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>';


        // Data untuk dikirim melalui email
        $data_email = [
            'subject' => $name,
            'sender_email' => $email,
            'isi' => $isi_email,
        ];

        // Simpan data email di session
        Session::put('data_email', $data_email);

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect('/kirimEmail');
    }
}
