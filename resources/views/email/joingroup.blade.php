@component('mail::message')
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<!--[if gte mso 9]>
	<xml>
		<o:OfficeDocumentSettings>
		<o:AllowPNG/>
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
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i" rel="stylesheet" />
    <!--<![endif]-->
	<title>Email Template</title>
	<!--[if gte mso 9]>
	<style type="text/css" media="all">
		sup { font-size: 100% !important; }
	</style>
	<![endif]-->
	

	<style type="text/css" media="screen">
		/* Linked Styles */
		body { padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f4f4f4; -webkit-text-size-adjust:none }
		a { color:#66c7ff; text-decoration:none }
		p { padding:0 !important; margin:0 !important } 
		img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
		.mcnPreviewText { display: none !important; }

				
		/* Mobile styles */
		@media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
			.mobile-shell { width: 100% !important; min-width: 100% !important; }
			.bg { background-size: 100% auto !important; -webkit-background-size: 100% auto !important; }
			
			.text-header,
			.m-center { text-align: center !important; }
			
			.center { margin: 0 auto !important; }
			.container { padding: 0px 10px 10px 10px !important }
			
			.td { width: 100% !important; min-width: 100% !important; }

			.text-nav { line-height: 28px !important; }
			.p30 { padding: 15px !important; }

			.m-br-15 { height: 15px !important; }
			.p30-15 { padding: 30px 15px !important; }
			.p40 { padding: 20px !important; }

			.m-td,
			.m-hide { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }

			.m-block { display: block !important; }

			.fluid-img img { width: 100% !important; max-width: 100% !important; height: auto !important; }

			.column,
			.column-top,
			.column-empty,
			.column-empty2,
			.column-dir-top { float: left !important; width: 100% !important; display: block !important; }
			.column-empty { padding-bottom: 10px !important; }
			.column-empty2 { padding-bottom: 20px !important; }
			.content-spacing { width: 15px !important; }
		}
	</style>
</head>
<body class="body" style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f4f4f4; -webkit-text-size-adjust:none;">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f4f4f4">
		<tr>
			<td align="center" valign="top">
				<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
					<tr>
						<td style=" min-width:650px; font-size:0pt; line-height:0pt; margin:0; font-weight:normal; padding:0px 0px 40px 0px;">
								<!-- END Nav -->

								<!-- Hero -->
								<layout label='Hero'>
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left;"><img src="https://followgreenliving.com/wp-content/uploads/2014/05/earth-day.jpg" width="650" height="366" editable="true" border="0" alt="" /></td>
										</tr>
									</table>
								</layout>
								<!-- END Hero -->

								<!-- Article Image On The Left -->
								<layout label='Article Image On The Left'>
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td style="padding-bottom: 10px;">
												<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
													<tr>
														<td class="p30-15" style="padding: 30px;">
															<table width="100%" border="0" cellspacing="0" cellpadding="0">
																<tr>
																	<th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
																		<table width="100%" border="0" cellspacing="0" cellpadding="0">
																			<tr>
																				<td class="h2 pb20" style="color:#050505; font-family:'Roboto', Arial,sans-serif; font-size:28px; line-height:34px; text-align:left; padding-bottom:20px;"><multiline>Green Earth Join Group</multiline></td>
																			</tr>
																			<tr>
																				<td class="text pb20" style="color:#666666; font-family:'Roboto', Arial,sans-serif; font-size:16px; line-height:28px; text-align:left; padding-bottom:20px;"><multiline>Cảm ơn {{$member->name}} đã Tham Gia vào sự kiện : <b>"{{$member->event->event_name}}"</b><br>
																				Vui Lòng Chờ Admin Phê Duyệt Yêu Cầu ! Thank
																				</multiline></td>                                                    
																			</tr>
																			<!-- Button -->
																			<tr>
																				<td align="left">
																					<table border="0" cellspacing="0" cellpadding="0">
																						<tr>
																							<td class="text-button" style="background:#71c167; color:#ffffff; font-family:'Roboto', Arial,sans-serif; font-size:14px; line-height:18px; padding:12px 30px; text-align:center;"><multiline><a href="{{url("http://localhost:8080/projectGreed_Earth/public/")}}" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none;"><span class="link-white" style="color:#ffffff; text-decoration:none;">SEE MORE</span></a></multiline></td>
																						</tr>
																					</table>
																				</td>
																			</tr>
																			<!-- END Button -->
																		</table>
																	</th>
																</tr>
															</table>
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</layout>
			</td>
		</tr>
	</table>
</body>
</html>
@endcomponent
