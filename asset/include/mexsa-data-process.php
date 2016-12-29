<?php
if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["number"]) && !empty($_POST["batch"]) && !empty($_POST["pm"]))
{

  mysql_connect("localhost","bashundh_justaio","shuvo050590");
  mysql_select_db("bashundh_justaio");

  $name=$_POST["name"];
  $email=$_POST["email"];
  $phone=$_POST["number"];
  $batch=$_POST["batch"];
  $payment_method=$_POST["pm"];
  $batch_ref_name=$_POST["batch_ref_name"];
  $bkash_tra_key=$_POST["bkash_tra_key"];
  $t_Shirt_size=$_POST["t_Shirt_size"];
   
  $uniq = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
  $plast = substr($phone, -4);
  $regid = $uniq.$batch.$plast;
$sql="SELECT * FROM mexsa WHERE email='$email' OR phone='$phone'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

if ($count>=1) {
    echo '<div class="alert alert-danger alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
								<strong>Failed!</strong> ***You Are Already Registered In Our Database***
							</div>';
} else {

if($payment_method == 'Cash'){
if(!empty($batch_ref_name)){
 $query=mysql_query("INSERT INTO mexsa(full_name, email, phone, batch,t_Shirt_size, payment_method, batch_ref_name, reg_number, date) values('$name','$email','$phone','$batch','$t_Shirt_size','$payment_method','$batch_ref_name','$regid',CURDATE()) ");
}
else{
  echo '<div class="alert alert-danger alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
								<strong>Fails!</strong>Please Enter Your Batch Representative Name
							</div>';
}

}
else{
    if(!empty($bkash_tra_key)) {
    $query=mysql_query("INSERT INTO mexsa(full_name, email, phone, batch,t_Shirt_size, payment_method, bkash_tra_key, reg_number, date) values('$name','$email','$phone','$batch','$t_Shirt_size','$payment_method','$bkash_tra_key','$regid',CURDATE()) ");
    }
    else{
        echo '<div class="alert alert-danger alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
								<strong>Fails!</strong>Please Enter Bkash Transaction Key
							</div>';
    }

}

  if($query){
echo '<div class="alert alert-success alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
								<strong>Success!</strong> You Are Successfully Registered.Please Check Your Email '.$email.' . As Well As Email Spam Folder
							</div>';
sendEmail($email,$regid);


}
   }
}

  else{
echo '<div class="alert alert-danger alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
								<strong>Failed!</strong> ***Please Fill All The Field***
							</div>';

}

function sendEmail($email,$regid){
    $to = $email;
$message = ' <html><head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style type="text/css">
.font-sans-serif {
  font-family: sans-serif;
}
.font-avenir {
  font-family: Avenir, sans-serif;
}
.mso .wrapper .font-avenir {
  font-family: sans-serif !important;
}
.font-lato {
  font-family: Lato, Tahoma, sans-serif;
}
.mso .wrapper .font-lato {
  font-family: Tahoma, sans-serif !important;
}
.font-cabin {
  font-family: Cabin, Avenir, sans-serif;
}
.mso .wrapper .font-cabin {
  font-family: sans-serif !important;
}
.font-open-Sans {
  font-family: "Open Sans", sans-serif;
}
.mso .wrapper .font-open-Sans {
  font-family: sans-serif !important;
}
.font-roboto {
  font-family: Roboto, Tahoma, sans-serif;
}
.mso .wrapper .font-roboto {
  font-family: Tahoma, sans-serif !important;
}
.font-ubuntu {
  font-family: Ubuntu, sans-serif;
}
.mso .wrapper .font-ubuntu {
  font-family: sans-serif !important;
}
.font-pt-sans {
  font-family: "PT Sans", "Trebuchet MS", sans-serif;
}
.mso .wrapper .font-pt-sans {
  font-family: "Trebuchet MS", sans-serif !important;
}
.font-georgia {
  font-family: Georgia, serif;
}
.font-merriweather {
  font-family: Merriweather, Georgia, serif;
}
.mso .wrapper .font-merriweather {
  font-family: Georgia, serif !important;
}
.font-bitter {
  font-family: Bitter, Georgia, serif;
}
.mso .wrapper .font-bitter {
  font-family: Georgia, serif !important;
}
.font-pt-serif {
  font-family: "PT Serif", Georgia, serif;
}
.mso .wrapper .font-pt-serif {
  font-family: Georgia, serif !important;
}
.font-pompiere {
  font-family: Pompiere, "Trebuchet MS", sans-serif;
}
.mso .wrapper .font-pompiere {
  font-family: "Trebuchet MS", sans-serif !important;
}
.font-roboto-slab {
  font-family: "Roboto Slab", Georgia, serif;
}
.mso .wrapper .font-roboto-slab {
  font-family: Georgia, serif !important;
}
@media only screen and (max-width: 620px) {
  .wrapper .column .size-8 {
    font-size: 8px !important;
    line-height: 14px !important;
  }
  .wrapper .column .size-9 {
    font-size: 9px !important;
    line-height: 16px !important;
  }
  .wrapper .column .size-10 {
    font-size: 10px !important;
    line-height: 18px !important;
  }
  .wrapper .column .size-11 {
    font-size: 11px !important;
    line-height: 19px !important;
  }
  .wrapper .column .size-12 {
    font-size: 12px !important;
    line-height: 19px !important;
  }
  .wrapper .column .size-13 {
    font-size: 13px !important;
    line-height: 21px !important;
  }
  .wrapper .column .size-14 {
    font-size: 14px !important;
    line-height: 21px !important;
  }
  .wrapper .column .size-15 {
    font-size: 15px !important;
    line-height: 23px !important;
  }
  .wrapper .column .size-16 {
    font-size: 16px !important;
    line-height: 24px !important;
  }
  .wrapper .column .size-17 {
    font-size: 17px !important;
    line-height: 26px !important;
  }
  .wrapper .column .size-18 {
    font-size: 17px !important;
    line-height: 26px !important;
  }
  .wrapper .column .size-20 {
    font-size: 17px !important;
    line-height: 26px !important;
  }
  .wrapper .column .size-22 {
    font-size: 18px !important;
    line-height: 26px !important;
  }
  .wrapper .column .size-24 {
    font-size: 20px !important;
    line-height: 28px !important;
  }
  .wrapper .column .size-26 {
    font-size: 22px !important;
    line-height: 31px !important;
  }
  .wrapper .column .size-28 {
    font-size: 24px !important;
    line-height: 32px !important;
  }
  .wrapper .column .size-30 {
    font-size: 26px !important;
    line-height: 34px !important;
  }
  .wrapper .column .size-32 {
    font-size: 28px !important;
    line-height: 36px !important;
  }
  .wrapper .column .size-34 {
    font-size: 30px !important;
    line-height: 38px !important;
  }
  .wrapper .column .size-36 {
    font-size: 30px !important;
    line-height: 38px !important;
  }
  .wrapper .column .size-40 {
    font-size: 32px !important;
    line-height: 40px !important;
  }
  .wrapper .column .size-44 {
    font-size: 34px !important;
    line-height: 43px !important;
  }
  .wrapper .column .size-48 {
    font-size: 36px !important;
    line-height: 43px !important;
  }
  .wrapper .column .size-56 {
    font-size: 40px !important;
    line-height: 47px !important;
  }
  .wrapper .column .size-64 {
    font-size: 44px !important;
    line-height: 50px !important;
  }
}
body {
  margin: 0;
  padding: 0;
  min-width: 100%;
}
.mso body {
  mso-line-height-rule: exactly;
}
.no-padding .wrapper .column .column-top,
.no-padding .wrapper .column .column-bottom {
  font-size: 0px;
  line-height: 0px;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
td {
  padding: 0;
  vertical-align: top;
}
.spacer,
.border {
  font-size: 1px;
  line-height: 1px;
}
.spacer {
  width: 100%;
}
img {
  border: 0;
  -ms-interpolation-mode: bicubic;
}
.image {
  font-size: 12px;
  mso-line-height-rule: at-least;
}
.image img {
  display: block;
}
.logo {
  mso-line-height-rule: at-least;
}
.logo img {
  display: block;
}
strong {
  font-weight: bold;
}
h1,
h2,
h3,
p,
ol,
ul,
blockquote,
.image {
  font-style: normal;
  font-weight: 400;
}
ol,
ul,
li {
  padding-left: 0;
}
blockquote {
  Margin-left: 0;
  Margin-right: 0;
  padding-right: 0;
}
.column-top,
.column-bottom {
  font-size: 32px;
  line-height: 32px;
  transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
  transition-duration: 150ms;
  transition-property: all;
}
.half-padding .column .column-top,
.half-padding .column .column-bottom {
  font-size: 16px;
  line-height: 16px;
}
.column {
  text-align: left;
}
.contents {
  table-layout: fixed;
  width: 100%;
}
.padded {
  padding-left: 32px;
  padding-right: 32px;
  word-break: break-word;
  word-wrap: break-word;
}
.wrapper {
  display: table;
  table-layout: fixed;
  width: 100%;
  min-width: 620px;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
}
.wrapper a {
  transition: opacity 0.2s ease-in;
}
table.wrapper {
  table-layout: fixed;
}
.one-col,
.two-col,
.three-col {
  Margin-left: auto;
  Margin-right: auto;
  width: 600px;
}
.centered {
  Margin-left: auto;
  Margin-right: auto;
}
.btn a {
  border-radius: 3px;
  display: inline-block;
  font-size: 14px;
  font-weight: 700;
  line-height: 24px;
  padding: 13px 35px 12px 35px;
  text-align: center;
  text-decoration: none !important;
}
.btn a:hover {
  opacity: 0.8;
}
.two-col .btn a {
  font-size: 12px;
  line-height: 22px;
  padding: 10px 28px;
}
.three-col .btn a {
  font-size: 11px;
  line-height: 19px;
  padding: 6px 18px 5px 18px;
}
@media only screen and (max-width: 620px) {
  .btn a {
    display: block !important;
    font-size: 14px !important;
    line-height: 24px !important;
    padding: 13px 10px 12px 10px !important;
  }
}
.two-col .column {
  width: 300px;
}
.two-col .first .padded {
  padding-left: 32px;
  padding-right: 16px;
}
.two-col .second .padded {
  padding-left: 16px;
  padding-right: 32px;
}
.three-col .column {
  width: 200px;
}
.three-col .first .padded {
  padding-left: 32px;
  padding-right: 0;
}
.three-col .second .padded {
  padding-left: 16px;
  padding-right: 16px;
}
.three-col .third .padded {
  padding-left: 0;
  padding-right: 32px;
}
@media only screen and (min-width: 0) {
  .wrapper {
    text-rendering: optimizeLegibility;
  }
}
@media only screen and (max-width: 620px) {
  [class=wrapper] {
    min-width: 320px !important;
    width: 100% !important;
  }
  [class=wrapper] .one-col,
  [class=wrapper] .two-col,
  [class=wrapper] .three-col {
    width: 320px !important;
  }
  [class=wrapper] .column,
  [class=wrapper] .gutter {
    display: block;
    float: left;
    width: 320px !important;
  }
  [class=wrapper] .padded {
    padding-left: 16px !important;
    padding-right: 16px !important;
  }
  [class=wrapper] .block {
    display: block !important;
  }
  [class=wrapper] .hide {
    display: none !important;
  }
  [class=wrapper] .image img {
    height: auto !important;
    width: 100% !important;
  }
}


@media only screen and (max-width: 620px) {
  .footer {
    width: 320px !important;
  }
  .footer td {
    display: none;
  }
  .footer .inner,
  .footer .inner td {
    display: block;
    text-align: center !important;
    max-width: 320px !important;
    width: 320px !important;
  }
  .footer .sharing {
    Margin-bottom: 40px;
  }
  .footer .sharing div {
    display: inline-block;
  }
  .footer .fblike,
  .footer .tweet,
  .footer .linkedinshare,
  .footer .forwardtoafriend {
    display: inline-block !important;
  }
}
.wrapper h1,
.wrapper h2,
.wrapper h3,
.wrapper p,
.wrapper ol,
.wrapper ul,
.wrapper li,
.wrapper blockquote,
.image,
.btn,
.divider {
  Margin-bottom: 0;
  Margin-top: 0;
}
.wrapper .column h1 + * {
  Margin-top: 21px;
}
.wrapper .column h2 + * {
  Margin-top: 20px;
}
.wrapper .column h3 + * {
  Margin-top: 16px;
}
.wrapper .column p + *,
.wrapper .column ol + *,
.wrapper .column ul + *,
.wrapper .column blockquote + *,
.rounded-image-bleed + .contents td > :first-child {
  Margin-top: 25px;
}
.contents:nth-last-child(n+3) h1:last-child,
.no-padding .contents:nth-last-child(n+2) h1:last-child {
  Margin-bottom: 21px;
}
.contents:nth-last-child(n+3) h2:last-child,
.no-padding .contents:nth-last-child(n+2) h2:last-child {
  Margin-bottom: 20px;
}
.contents:nth-last-child(n+3) h3:last-child,
.no-padding .contents:nth-last-child(n+2) h3:last-child {
  Margin-bottom: 16px;
}
.contents:nth-last-child(n+3) p:last-child,
.no-padding .contents:nth-last-child(n+2) p:last-child,
.contents:nth-last-child(n+3) ol:last-child,
.no-padding .contents:nth-last-child(n+2) ol:last-child,
.contents:nth-last-child(n+3) ul:last-child,
.no-padding .contents:nth-last-child(n+2) ul:last-child,
.contents:nth-last-child(n+3) blockquote:last-child,
.no-padding .contents:nth-last-child(n+2) blockquote:last-child,
.contents:nth-last-child(n+3) .image,
.no-padding .contents:nth-last-child(n+2) .image,
.contents:nth-last-child(n+3) .divider,
.no-padding .contents:nth-last-child(n+2) .divider,
.contents:nth-last-child(n+3) .btn,
.no-padding .contents:nth-last-child(n+2) .btn {
  Margin-bottom: 25px;
}
.two-col .column p + *,
.two-col .column ol + *,
.two-col .column ul + *,
.two-col .column blockquote + *,
.two-col .rounded-image-bleed + .contents td > :first-child {
  Margin-top: 23px;
}
.two-col .contents:nth-last-child(n+3) p:last-child,
.no-padding .two-col .contents:nth-last-child(n+2) p:last-child,
.two-col .contents:nth-last-child(n+3) ol:last-child,
.no-padding .two-col .contents:nth-last-child(n+2) ol:last-child,
.two-col .contents:nth-last-child(n+3) ul:last-child,
.no-padding .two-col .contents:nth-last-child(n+2) ul:last-child,
.two-col .contents:nth-last-child(n+3) blockquote:last-child,
.no-padding .two-col .contents:nth-last-child(n+2) blockquote:last-child,
.two-col .contents:nth-last-child(n+3) .image,
.no-padding .two-col .contents:nth-last-child(n+2) .image,
.two-col .contents:nth-last-child(n+3) .divider,
.no-padding .two-col .contents:nth-last-child(n+2) .divider,
.two-col .contents:nth-last-child(n+3) .btn,
.no-padding .two-col .contents:nth-last-child(n+2) .btn {
  Margin-bottom: 23px;
}
.three-col .column p + *,
.three-col .column ol + *,
.three-col .column ul + *,
.three-col .column blockquote + *,
.three-col .rounded-image-bleed + .contents td > :first-child {
  Margin-top: 21px;
}
.three-col .contents:nth-last-child(n+3) p:last-child,
.no-padding .three-col .contents:nth-last-child(n+2) p:last-child,
.three-col .contents:nth-last-child(n+3) ol:last-child,
.no-padding .three-col .contents:nth-last-child(n+2) ol:last-child,
.three-col .contents:nth-last-child(n+3) ul:last-child,
.no-padding .three-col .contents:nth-last-child(n+2) ul:last-child,
.three-col .contents:nth-last-child(n+3) blockquote:last-child,
.no-padding .three-col .contents:nth-last-child(n+2) blockquote:last-child,
.three-col .contents:nth-last-child(n+3) .image,
.no-padding .three-col .contents:nth-last-child(n+2) .image,
.three-col .contents:nth-last-child(n+3) .divider,
.no-padding .three-col .contents:nth-last-child(n+2) .divider,
.three-col .contents:nth-last-child(n+3) .btn,
.no-padding .three-col .contents:nth-last-child(n+2) .btn {
  Margin-bottom: 21px;
}
@media only screen and (max-width: 620px) {
  .wrapper p + *,
  .wrapper ol + *,
  .wrapper ul + *,
  .wrapper blockquote + *,
  .rounded-image-bleed + .contents td > :first-child {
    Margin-top: 25px !important;
  }
  .contents:nth-last-child(n+3) p:last-child,
  .no-padding .contents:nth-last-child(n+2) p:last-child,
  .contents:nth-last-child(n+3) ol:last-child,
  .no-padding .contents:nth-last-child(n+2) ol:last-child,
  .contents:nth-last-child(n+3) ul:last-child,
  .no-padding .contents:nth-last-child(n+2) ul:last-child,
  .contents:nth-last-child(n+3) blockquote:last-child,
  .no-padding .contents:nth-last-child(n+2) blockquote:last-child,
  .contents:nth-last-child(n+3) .image:last-child,
  .no-padding .contents:nth-last-child(n+2) .image:last-child,
  .contents:nth-last-child(n+3) .divider:last-child,
  .no-padding .contents:nth-last-child(n+2) .divider:last-child,
  .contents:nth-last-child(n+3) .btn:last-child,
  .no-padding .contents:nth-last-child(n+2) .btn:last-child {
    Margin-bottom: 25px !important;
  }
}
.wrapper .preheader,
.wrapper .header,
.wrapper .feature {
  Margin-left: auto;
  Margin-right: auto;
}
.wrapper .one-col,
.wrapper .two-col,
.wrapper .three-col {
  background-color: #ffffff;
  border-radius: 4px;
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
  table-layout: fixed;
}
.wrapper center.divider img {
  display: block;
  Margin-left: auto;
  Margin-right: auto;
}
.wrapper .preheader {
  width: 600px;
}
.wrapper .preheader table {
  width: 536px;
}
.wrapper .preheader .inner {
  padding-top: 11px;
  padding-bottom: 12px;
}
.wrapper .preheader .title {
  text-align: left;
}
.wrapper .preheader .webversion {
  text-align: right;
  width: 240px;
}
.wrapper .preheader .webversion a {
  letter-spacing: 0.03em;
}
.wrapper h1 a,
.wrapper h2 a,
.wrapper h3 a {
  text-decoration: none;
}
.wrapper h1 {
  font-size: 36px;
  line-height: 44px;
  text-align: center;
}
.wrapper h2 {
  font-size: 24px;
  line-height: 32px;
}
.wrapper h3 {
  font-size: 15px;
  line-height: 21px;
}
.wrapper p,
.wrapper ol,
.wrapper ul {
  font-size: 15px;
  line-height: 24px;
}
.wrapper ol,
.wrapper ul {
  Margin-left: 39px;
}
.wrapper .btn {
  text-align: center;
}
.wrapper blockquote {
  Margin-left: 1em;
  padding-left: 1em;
}
.preheader a,
.header a {
  text-decoration: none;
}
.preheader .title,
.preheader .webversion {
  font-size: 11px;
  font-weight: normal;
  letter-spacing: 0.01em;
  line-height: 17px;
}
.two-col ol,
.two-col ul {
  Margin-left: 32px;
}
.three-col ol,
.three-col ul {
  Margin-left: 24px;
}
.feature-top,
.feature-bottom {
  font-size: 0;
  line-height: 0;
  width: 600px;
}
.feature-top img,
.feature-bottom img {
  display: inline-block;
}
.feature {
  width: 600px;
}
.feature .inner {
  background-color: #ffffff;
  padding-top: 28px;
  padding-bottom: 20px;
}
.feature .one-col {
  text-align: center;
  width: 536px;
}
.wrapper .feature .one-col {
  box-shadow: none;
}
.feature .padded {
  padding-left: 32px;
  padding-right: 32px;
}
.feature h2 {
  text-align: center;
}
.feature h3 {
  text-align: center;
}
.feature p {
  text-align: center;
}
.feature ol,
.feature ul {
  text-align: left;
}
.feature blockquote {
  border-left: 0;
  Margin-left: 0;
  padding-left: 0;
}
.frame-bottom td {
  line-height: 9px;
}
.frame-bottom .left,
.frame-bottom .right {
  width: 258px;
}
.mso .frame-bottom .left,
.mso .frame-bottom .right {
  width: 259px !important;
}
.heart {
  mso-line-height-rule: at-least;
  vertical-align: middle;
  width: 18px;
}
.heart img {
  display: block;
}
.header {
  width: 600px;
}
.logo div.logo-center {
  text-align: center;
}
.logo div.logo-center img {
  Margin-left: auto;
  Margin-right: auto;
}
.wrapper h3 {
  font-weight: bold;
}
.wrapper blockquote {
  font-style: italic;
  font-weight: 500;
}
.column:first-child .gnd-corner-image-top.gnd-corner-image-center,
.column:first-child .gnd-corner-image-top.gnd-corner-image-left {
  border-top-left-radius: 4px;
  -moz-border-top-left-radius: 4px;
}
.column:last-child .gnd-corner-image-top.gnd-corner-image-center,
.column:last-child .gnd-corner-image-top.gnd-corner-image-right {
  border-top-right-radius: 4px;
  -moz-border-top-right-radius: 4px;
}
.feature .one-col .column .gnd-corner-image-top {
  border-top-left-radius: 0;
  -moz-border-top-left-radius: 0;
  border-top-right-radius: 0;
  -moz-border-top-right-radius: 0;
}
.no-padding .column:first-child .gnd-corner-image-bottom.gnd-corner-image-center,
.no-padding .column:first-child .gnd-corner-image-bottom.gnd-corner-image-left {
  border-bottom-left-radius: 4px;
  -moz-border-bottom-left-radius: 4px;
}
.no-padding .column:last-child .gnd-corner-image-bottom.gnd-corner-image-center,
.no-padding .column:last-child .gnd-corner-image-bottom.gnd-corner-image-right {
  border-bottom-right-radius: 4px;
  -moz-border-bottom-right-radius: 4px;
}
.no-padding .feature .one-col .column .gnd-corner-image-bottom {
  border-bottom-left-radius: 0;
  -moz-border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
  -moz-border-bottom-right-radius: 0;
}
@media only screen and (max-width: 620px) {
  [class=wrapper] .preheader,
  [class=wrapper] .preheader table,
  [class=wrapper] .header,
  [class=wrapper] .feature {
    width: 320px !important;
  }
  [class=wrapper] .preheader .title {
    display: none;
  }
  [class=wrapper] .preheader .webversion {
    text-align: center !important;
  }
  [class=wrapper] .logo {
    padding-left: 10px !important;
    padding-right: 10px !important;
  }
  [class=wrapper] .logo img {
    max-width: 280px !important;
    height: auto !important;
  }
  [class=wrapper] .second .column-top,
  [class=wrapper] .third .column-top {
    display: none;
  }
  [class=wrapper] .column-top,
  [class=wrapper] .column-bottom {
    font-size: 25px !important;
    line-height: 25px !important;
  }
  [class=wrapper] h1 {
    font-size: 36px !important;
    line-height: 44px !important;
  }
  [class=wrapper] h2 {
    font-size: 24px !important;
    line-height: 32px !important;
  }
  [class=wrapper] h3 {
    font-size: 15px !important;
    line-height: 21px !important;
  }
  [class=wrapper] .one-col p,
  [class=wrapper] .two-col p,
  [class=wrapper] .three-col p,
  [class=wrapper] .one-col ol,
  [class=wrapper] .two-col ol,
  [class=wrapper] .three-col ol,
  [class=wrapper] .one-col ul,
  [class=wrapper] .two-col ul,
  [class=wrapper] .three-col ul {
    font-size: 15px !important;
    line-height: 25px !important;
  }
  [class=wrapper] ol,
  [class=wrapper] ul {
    margin-left: 26px !important;
  }
  [class=wrapper] .feature-top img,
  [class=wrapper] .feature-bottom img {
    display: block !important;
  }
  [class=wrapper] .feature-top .right,
  [class=wrapper] .feature-bottom .right {
    display: none !important;
  }
  [class=wrapper] .gnd-corner-image-top {
    border-top-left-radius: 0 !important;
    -moz-border-top-left-radius: 0 !important;
    border-top-right-radius: 0 !important;
    -moz-border-top-right-radius: 0 !important;
  }
  [class=wrapper] .column:first-child .gnd-corner-image-top.gnd-corner-image-center,
  [class=wrapper] .column:first-child .gnd-corner-image-top.gnd-corner-image-left {
    border-top-left-radius: 4px !important;
    -moz-border-top-left-radius: 4px !important;
  }
  [class=wrapper] .column:first-child .gnd-corner-image-top.gnd-corner-image-center,
  [class=wrapper] .column:first-child .gnd-corner-image-top.gnd-corner-image-right {
    border-top-right-radius: 4px !important;
    -moz-border-top-right-radius: 4px !important;
  }
  .no-padding [class=wrapper] .gnd-corner-image-bottom {
    border-bottom-left-radius: 0 !important;
    -moz-border-bottom-left-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
    -moz-border-bottom-right-radius: 0 !important;
  }
  .no-padding [class=wrapper] .column:last-child .gnd-corner-image-bottom.gnd-corner-image-center,
  .no-padding [class=wrapper] .column:last-child .gnd-corner-image-bottom.gnd-corner-image-left {
    border-bottom-left-radius: 4px !important;
    -moz-border-bottom-left-radius: 4px !important;
  }
  .no-padding [class=wrapper] .column:last-child .gnd-corner-image-bottom.gnd-corner-image-center,
  .no-padding [class=wrapper] .column:last-child .gnd-corner-image-bottom.gnd-corner-image-right {
    border-bottom-right-radius: 4px !important;
    -moz-border-bottom-right-radius: 4px !important;
  }
  [class=wrapper] .feature .one-col .column .gnd-corner-image {
    border-top-left-radius: 0 !important;
    -moz-border-top-left-radius: 0 !important;
    border-top-right-radius: 0 !important;
    -moz-border-top-right-radius: 0 !important;
    border-bottom-left-radius: 0 !important;
    -moz-border-bottom-left-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
    -moz-border-bottom-right-radius: 0 !important;
  }
  [class=wrapper] .feature .one-col,
  [class=wrapper] .feature .column {
    width: 288px !important;
  }
  [class=wrapper] .feature .padded {
    padding-left: 16px !important;
    padding-right: 16px !important;
  }
  [class=wrapper] .feature .column-top,
  [class=wrapper] .feature .column-bottom {
    font-size: 16px !important;
    line-height: 16px !important;
  }
  [class=wrapper] .feature .frame-bottom .left,
  [class=wrapper] .feature .frame-bottom .right {
    width: 134px !important;
  }
}
@media only screen and (-webkit-min-device-pixel-ratio: 1) {
  .divider img,
  .heart img {
    outline: 1px solid #ffffff;
  }
  .divider img {
    Margin: 1px;
  }
  .feature-top img,
  .feature-bottom img {
    float: left;
  }
}
</style>
  <!--[if !mso]><!--><style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Cabin:400,700,400italic,700italic|PT+Sans:400,700,400italic,700italic|PT+Serif:400,700,400italic,700italic);
</style><link href="https://fonts.googleapis.com/css?family=Cabin:400,700,400italic,700italic|PT+Sans:400,700,400italic,700italic|PT+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css"><!--<![endif]--><style type="text/css">
.wrapper h1{}.wrapper h1{font-family:"PT Serif",Georgia,serif}.mso .wrapper h1{font-family:Georgia,serif !important}.wrapper h2{}.wrapper h2{font-family:"PT Sans","Trebuchet MS",sans-serif}.mso .wrapper h2{font-family:"Trebuchet MS",sans-serif !important}.wrapper h3{}.wrapper h3{font-family:Cabin,Avenir,sans-serif}.mso .wrapper h3{font-family:sans-serif !important}.wrapper p,.wrapper ol,.wrapper ul,.wrapper .image{}.wrapper p,.wrapper ol,.wrapper ul,.wrapper .image{font-family:"PT Serif",Georgia,serif}.mso .wrapper p,.mso .wrapper ol,.mso .wrapper ul,.mso .wrapper .image{font-family:Georgia,serif !important}.wrapper .btn a{}.wrapper .btn a{font-family:"PT Serif",Georgia,serif}.mso .wrapper .btn a{font-family:Georgia,serif !important}.logo div{}.logo div{font-family:Roboto,Tahoma,sans-serif}.mso .logo div{font-family:Tahoma,sans-serif
!important}.title,.webversion,.fblike,.tweet,.linkedinshare,.forwardtoafriend,.link,.address,.permission,.campaign{}.title,.webversion,.fblike,.tweet,.linkedinshare,.forwardtoafriend,.link,.address,.permission,.campaign{font-family:Cabin,Avenir,sans-serif}.mso .title,.mso .webversion,.mso .fblike,.mso .tweet,.mso .linkedinshare,.mso .forwardtoafriend,.mso .link,.mso .address,.mso .permission,.mso .campaign{font-family:sans-serif !important}body,.wrapper,.emb-editor-canvas{background-color:#f0eee7}.wrapper h1{color:#b59859}.wrapper h2{color:#555}.wrapper h3{color:#555}.wrapper p,.wrapper ol,.wrapper ul{color:#61606c}.wrapper .image{color:#61606c}.wrapper a{color:#41637e}.wrapper a:hover{color:#30495c !important}.wrapper .btn a{background-color:#cca95e;color:#fff}.wrapper .btn a:hover{color:#fff !important}.logo div{color:#555}.logo div a{color:#555}.logo div a:hover{color:#555
!important}blockquote{border-left:4px solid #f0eee7}center.divider span,center.divider img{background-color:#b59859}.feature .one-col{border-top:1px dashed #cca95e;border-left:1px dashed #cca95e;border-right:1px dashed #cca95e}.frame-bottom .left,.frame-bottom .right{border-bottom:1px dashed #cca95e;mso-border-bottom-alt:1pt dashed #cca95e}.frame-bottom .left{border-left:1px dashed #cca95e;mso-border-left-alt:1pt dashed #cca95e}.frame-bottom .right{border-right:1px dashed #cca95e;mso-border-right-alt:1pt dashed #cca95e}.heart span,.heart img{background-color:#cca95e}.header{border-top:1px dashed #b3b3b3}.title,.webversion,.footer .inner td{color:#b3b3b3}.wrapper .title a,.wrapper .webversion a,.wrapper .footer a{color:#b3b3b3}.wrapper .title a:hover,.wrapper .webversion a:hover,.wrapper .footer a:hover{color:#8d8d8d !important}.wrapper .footer .fblike,.wrapper .footer .tweet,.wrapper
.footer .linkedinshare,.wrapper .footer .forwardtoafriend{background-color:#787774}
</style><meta name="robots" content="noindex,nofollow">
<meta property="og:title" content="My First Campaign">
</head>
<!--[if mso]>
  <body class="mso">
<![endif]-->
<!--[if !mso]><!-->
  <body class="full-padding" style="margin: 0;padding: 0;min-width: 100%;background-color: #f0eee7;">
<!--<![endif]-->
    <center class="wrapper" style="display: table;table-layout: fixed;width: 100%;min-width: 620px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;background-color: #f0eee7;">



          <table class="one-col centered" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;width: 600px;background-color: #ffffff;border-radius: 4px;box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);table-layout: fixed;" emb-background-style="">
            <tbody><tr>
              <td class="column" style="padding: 0;vertical-align: top;text-align: left;">

              <div class="rounded-image-bleed">
                <div class="image" style="font-size: 12px;mso-line-height-rule: at-least;font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 0;font-family: &quot;PT Serif&quot;,Georgia,serif;color: #61606c;" align="center">
                  <img class="gnd-corner-image gnd-corner-image-center gnd-corner-image-top" style="border: 0;-ms-interpolation-mode: bicubic;display: block;border-top-left-radius: 4px;-moz-border-top-left-radius: 4px;border-top-right-radius: 4px;-moz-border-top-right-radius: 4px;max-width: 805px;" src="http://www.justaio.com/images/page/mexsa.jpg" alt="" width="600" height="309">
                </div>
              </div>

                  <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%;">
                    <tbody><tr>
                      <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word;">

            <center class="divider" style="Margin-bottom: 25px;Margin-top: 25px;"><span style="background-color: #b59859;"><img style="border: 0;-ms-interpolation-mode: bicubic;background-color: #b59859;display: block;Margin-left: auto;Margin-right: auto;" src="https://i4.createsend1.com/static/eb/master/02-blush/images/waves.png" width="32" height="4" alt=""></span></center>

                      </td>
                    </tr>
                  </tbody></table>

                  <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%;">
                    <tbody><tr>
                      <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word;">

            <h1 style="font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 0;font-size: 36px;line-height: 44px;text-align: center;font-family: &quot;PT Serif&quot;,Georgia,serif;color: #b59859;">MExSA Presents MCSK Reunion 2016</h1><br/>

                      </td>
                    </tr>
                  </tbody></table>

                  <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%;">
                    <tbody><tr>
                      <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word;">

            <p style="font-style: normal;font-weight: 400;Margin-bottom: 25px;Margin-top: 0;font-size: 15px;line-height: 24px;font-family: &quot;PT Serif&quot;,Georgia,serif;color: #61606c;text-align: center;"><strong style="font-weight: bold;">&nbsp;Congratulation!!!&nbsp;</strong><br>
You have successfully registered for MCSK Reunion 2016 organized by MEXSA. The date of our reunion is 7th to 9th January,2016 the venue for the reunion is our own MCSK campus.<br>
<b>Your unique Registration ID: </b> '.$regid.'<br>
You are requested to carry this printed copy along with a valid photo ID (National ID/Driving License/Student ID) with you to collect the Entry Pass from Registration Committee.<br>
<strong style="font-weight: bold;">For Queries or suggestions regarding the following issues contact with the following persons:</strong><br>
1. Registration Process - Sk Tariqul Islam (1st Batch) Mob: 01711134602 or Farhad Kabir Shohan (2nd Batch) Mob: 01711032032 or Batch representative<br>
&nbsp;</p>

                      </td>
                    </tr>
                  </tbody></table>



                <div class="column-bottom" style="font-size: 32px;line-height: 32px;transition-timing-function: cubic-bezier(0, 0, 0.2, 1);transition-duration: 150ms;transition-property: all;">&nbsp;</div>
              </td>
            </tr>
          </tbody></table>

    </center>
  <img style="border: 0 !important;-ms-interpolation-mode: bicubic;visibility: hidden !important;display: block !important;height: 1px !important;width: 1px !important;margin: 0 !important;padding: 0 !important;" src="https://o.createsend1.com/t/i-o-ijjhkly-l/o.gif" width="1" height="1" border="0" alt="">

</body></html>';

$subject = "MEXSA REUNION REGISTRATION-2016 Conformation" ;
$headers = "From: skrasel11@gmail.com\r\n";
$headers .= "Reply-To: skrasel11@gmail.com\r\n";

$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($to, $subject, $message, $headers);

}

?>